<?php /* Smarty version Smarty-3.1.18, created on 2017-09-22 17:53:11
         compiled from "C:\Openserver\OpenServer\domains\Test4Simpla\design\okay_shop\html\page_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1126859c523d719d968-66106171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92d7bab3a813f489ed06884364ef50f8ab35aaec' => 
    array (
      0 => 'C:\\Openserver\\OpenServer\\domains\\Test4Simpla\\design\\okay_shop\\html\\page_404.tpl',
      1 => 1506084096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1126859c523d719d968-66106171',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59c523d71a5a97_39045550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c523d71a5a97_39045550')) {function content_59c523d71a5a97_39045550($_smarty_tpl) {?>


<h1 class="h1"><span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></h1>


<div class="block padding">
    <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

</div><?php }} ?>
