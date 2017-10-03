<?php
    if(!empty($_SERVER['HTTP_USER_AGENT'])){
        session_name(md5($_SERVER['HTTP_USER_AGENT']));
    }
    session_start();
    require_once('../api/Okay.php');
    define('IS_CLIENT', true);
    $okay = new Okay();
    $limit = 10;

    /*Определяем язык*/
    $lang_id  = $okay->languages->lang_id();
    $language = $okay->languages->get_language($lang_id);
    $lang_link = $okay->languages->get_lang_link();
    $px = ($lang_id ? 'l' : 'p'); /*Если язык существует выбираем с таблицы переводов, иначе - таблицы produtcs*/
    $lang_sql = $okay->languages->get_query(array('object'=>'product'));

    /*Ищем товар*/
    $keyword = $okay->request->get('query', 'string');
    $keyword_filter = '';
    if (!empty($keyword)) {
        $keywords = explode(' ', $keyword);
        foreach ($keywords as $kw) {
            $kw = $okay->db->escape($kw);
            if($kw!=='') {
                $keyword_filter .= $okay->db->placehold("AND (
                        $px.name LIKE '%$kw%'
                        OR $px.meta_keywords LIKE '%$kw%'
                        OR p.id in (SELECT product_id FROM __variants WHERE sku LIKE '%$kw%')
                    ) ");
            }
        }
    }
    /*Делаем выборку из БД*/
	$okay->db->query("SELECT 
            p.id,
            p.url,
            $px.name, 
            i.filename as image 
        FROM __products p 
        $lang_sql->join
        LEFT JOIN __images i ON i.product_id=p.id AND i.position=(SELECT MIN(position) FROM __images WHERE product_id=p.id LIMIT 1)
        WHERE 
            1
            $keyword_filter
            AND visible=1
            GROUP BY p.id
        ORDER BY p.name 
        LIMIT ?
    ", $limit);
    $products = $okay->db->results();
    
    $suggestions = array();
    $ids = array();
    foreach($products as $p){
        $ids[] = $p->id;
    }
    /*Подставляем к найденым товарам их варианты*/
    $variants = array();
    foreach ($okay->variants->get_variants(array('product_id'=>$ids)) as $v) {
        $variants[$v->product_id][] = $v;
    }

    /*Определяем валюту*/
    $currencies = $okay->money->get_currencies(array('enabled'=>1));
    if(isset($_SESSION['currency_id'])) {
        $currency = $okay->money->get_currency($_SESSION['currency_id']);
    } else {
        $currency = reset($currencies);
    }

    /*Подготавливаем данные для отображения в автокомплите*/
    foreach($products as $product) {
        $suggestion = new stdClass();
        if(!empty($product->image)) {
            $product->image = $okay->design->resize_modifier($product->image, 35, 35);
        }
        $suggestion->price = $okay->money->convert($variants[$product->id][0]->price, $currency->id);
        $suggestion->currency = $currency->sign;
        $suggestion->value = $product->name;
        $suggestion->data = $product;
        $suggestion->lang = $lang_link;
        $suggestions[] = $suggestion;
    }

    $res = new stdClass;
    $res->query = $keyword;
    $res->suggestions = $suggestions;
    header("Content-type: application/json; charset=UTF-8");
    header("Cache-Control: must-revalidate");
    header("Pragma: no-cache");
    header("Expires: -1");		
    print json_encode($res);
