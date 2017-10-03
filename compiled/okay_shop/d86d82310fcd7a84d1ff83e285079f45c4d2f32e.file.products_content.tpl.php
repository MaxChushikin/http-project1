<?php /* Smarty version Smarty-3.1.18, created on 2017-09-22 15:55:43
         compiled from "C:\Openserver\OpenServer\domains\Test4Simpla\design\okay_shop\html\products_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:387559c5084fd6e4f7-32370277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd86d82310fcd7a84d1ff83e285079f45c4d2f32e' => 
    array (
      0 => 'C:\\Openserver\\OpenServer\\domains\\Test4Simpla\\design\\okay_shop\\html\\products_content.tpl',
      1 => 1506084096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '387559c5084fd6e4f7-32370277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59c5084fd77dc6_36399213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c5084fd77dc6_36399213')) {function content_59c5084fd77dc6_36399213($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
        <div class="no_padding products_item col-sm-6 col-xl-4">
            <?php echo $_smarty_tpl->getSubTemplate ("product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    <?php } ?>
<?php } else { ?>
    <span data-language="products_not_found"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_not_found;?>
</span>
<?php }?><?php }} ?>
