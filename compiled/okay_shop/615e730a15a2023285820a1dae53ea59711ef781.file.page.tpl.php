<?php /* Smarty version Smarty-3.1.18, created on 2017-09-22 17:53:10
         compiled from "C:\Openserver\OpenServer\domains\Test4Simpla\design\okay_shop\html\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1231159c523d6e93490-57454650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '615e730a15a2023285820a1dae53ea59711ef781' => 
    array (
      0 => 'C:\\Openserver\\OpenServer\\domains\\Test4Simpla\\design\\okay_shop\\html\\page.tpl',
      1 => 1506084096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1231159c523d6e93490-57454650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59c523d6ed6ce7_04970173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c523d6ed6ce7_04970173')) {function content_59c523d6ed6ce7_04970173($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['page']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<?php if ($_smarty_tpl->tpl_vars['page']->value->url=='404') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('page_404.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>

    
    <h1 class="h1">
        <span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
    </h1>
    
    
    <div class="block padding">
        <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

    </div>
    
<?php }?>
<?php }} ?>
