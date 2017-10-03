<?php /* Smarty version Smarty-3.1.18, created on 2017-09-24 13:20:46
         compiled from "backend\design\html\settings_notify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3250559c786fe50d851-51070891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff8d0ed110c6e9b91a3ef383dd0e9cab41559ffc' => 
    array (
      0 => 'backend\\design\\html\\settings_notify.tpl',
      1 => 1506084093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3250559c786fe50d851-51070891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btr' => 0,
    'message_success' => 0,
    'settings' => 0,
    'btr_languages' => 0,
    'label' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59c786fe5f2141_52190333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c786fe5f2141_52190333')) {function content_59c786fe5f2141_52190333($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->settings_notify_notifications, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_notify_notifications, ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
    <div class="col-lg-4 col-md-3 text-xs-right float-xs-right"></div>
</div>


<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_success">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_success']->value=='saved') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_settings_saved, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                    <?php if ($_GET['return']) {?>
                        <a class="btn btn_return float-xs-right" href="<?php echo $_GET['return'];?>
">
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'return'), 0);?>

                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_back, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>


<form method="post" enctype="multipart/form-data">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_notify_notifications, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                
                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_notify_emails, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                 <input name="order_email" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->order_email, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_notify_reverce, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="notify_from_email" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->notify_from_email, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_notify_comments, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="comment_email" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->comment_email, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_notify_sender_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="notify_from_name" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->notify_from_name, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_notify_email_lang, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <select name="email_lang" class="selectpicker">
                                    <?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['btr_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value->email_lang==$_smarty_tpl->tpl_vars['label']->value) {?>selected<?php }?>>
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>

                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="heading_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_notify_use_smtp;?>
</div>
                            <div class="mb-1">
                                <select name="use_smtp" class="selectpicker">
                                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['settings']->value->use_smtp=='0') {?>selected<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_notify_turn_off;?>

                                    </option>
                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value->use_smtp=='1') {?>selected<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_notify_turn_on;?>

                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="heading_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_notify_smtp_server;?>
</div>
                            <div class="mb-1">
                                <input name="smtp_server" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->smtp_server, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="heading_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_notify_smtp_port;?>
</div>
                            <div class="mb-1">
                                <input name="smtp_port" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->smtp_port, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="heading_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_notify_smtp_user;?>
</div>
                            <div class="mb-1">
                                <input name="smtp_user" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->smtp_user, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="heading_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_notify_smtp_pass;?>
</div>
                            <div class="mb-1">
                                <input name="smtp_pass" class="form-control" type="password" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->smtp_pass, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 ">
                            <button type="submit" class="btn btn_small btn_blue float-md-right">
                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php }} ?>
