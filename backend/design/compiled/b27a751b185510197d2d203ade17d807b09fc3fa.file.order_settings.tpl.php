<?php /* Smarty version Smarty-3.1.18, created on 2017-09-24 19:52:13
         compiled from "backend\design\html\order_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1096059c7e2bd920390-80066824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b27a751b185510197d2d203ade17d807b09fc3fa' => 
    array (
      0 => 'backend\\design\\html\\order_settings.tpl',
      1 => 1506084093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1096059c7e2bd920390-80066824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btr' => 0,
    'orders_status' => 0,
    'order_status' => 0,
    'labels' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59c7e2bd9dd813_94993849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c7e2bd9dd813_94993849')) {function content_59c7e2bd9dd813_94993849($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->order_settings_labels, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="heading_page">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_orders, ENT_QUOTES, 'UTF-8', true);?>

            <span class="hint-right-middle-t-info-s-med-mobile hint-anim" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_access, ENT_QUOTES, 'UTF-8', true);?>
">
                <img src="design/images/exclamation.png">
            </span>
        </div>
    </div>
    <div class="col-lg-4 col-md-3 text-xs-right float-xs-right"></div>
</div>

<div class="row">
    
    <div class="col-lg-6 col-md-12 pr-0">
        <div class="boxed fn_toggle_wrap okay_disabled">
            <div class="heading_box">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_statuses, ENT_QUOTES, 'UTF-8', true);?>

                <div class="box_btn_heading ml-1">
                    <button type="button" class="btn btn_mini btn-info fn_add_status ">
                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'plus'), 0);?>

                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_add_status, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>
                <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                    <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                </div>
            </div>
            <div class="toggle_body_wrap on fn_card">
                <form class="fn_form_list" method="post">
                    <input type="hidden" value="status" name="status">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                    <div class="okay_list">
                        
                        <div class="okay_list_head">
                            <div class="okay_list_boding okay_list_drag"></div>
                            <div class="okay_list_heading okay_list_check">
                                <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                                <label class="okay_ckeckbox" for="check_all_1"></label>
                            </div>
                            <div class="okay_list_heading okay_list_order_stg_sts_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_order_stg_sts_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_activities, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>
                        <div class="fn_status_list fn_sort_list okay_list_body sortable">
                            <?php if ($_smarty_tpl->tpl_vars['orders_status']->value) {?>
                                <?php  $_smarty_tpl->tpl_vars['order_status'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order_status']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders_status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order_status']->key => $_smarty_tpl->tpl_vars['order_status']->value) {
$_smarty_tpl->tpl_vars['order_status']->_loop = true;
?>
                                    <div class="fn_row okay_list_body_item">
                                        <div class="okay_list_row fn_sort_item">
                                            <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['order_status']->value->position;?>
">
                                            <input type="hidden" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
">

                                            <div class="okay_list_boding okay_list_drag move_zone">
                                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'drag_vertical'), 0);?>

                                            </div>
                                            <div class="okay_list_boding okay_list_check">
                                                <input class="hidden_check" type="checkbox" id="id_or_<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
"/>
                                                <label class="okay_ckeckbox" for="id_or_<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
"></label>
                                            </div>

                                            <div class="okay_list_boding okay_list_order_stg_sts_name">
                                                <input type="text" class="form-control" name="name[<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                <div class="hidden-sm-up mt-q">
                                                    <select name="is_close[<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
]" class="selectpicker col-xs-12 px-0">
                                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['order_status']->value->is_close==1) {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_reduse_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['order_status']->value->is_close==0) {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_not_reduse_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="okay_list_boding okay_list_order_stg_sts_status">
                                                <select name="is_close[<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
]" class="selectpicker col-xs-12 px-0">
                                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['order_status']->value->is_close==1) {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_reduse_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['order_status']->value->is_close==0) {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_not_reduse_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                </select>
                                            </div>

                                            <div class="okay_list_boding okay_list_close">
                                                
                                                <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_delete_status, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php }?>

                            <div class="fn_row fn_new_status fn_sort_item okay_list_body">
                                <div class="fn_row okay_list_body_item">
                                    <div class="okay_list_row fn_sort_item">
                                        <div class="okay_list_boding okay_list_drag"></div>
                                        <div class="okay_list_heading okay_list_check"></div>
                                        <div class="okay_list_boding okay_list_order_stg_sts_name">
                                            <input type="text" class="form-control" name="new_name[]" value="">
                                            <div class="hidden-sm-up mt-q">
                                                <select name="is_close[<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
]" class="selectpicker col-xs-12 px-0">
                                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['order_status']->value->is_close==1) {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_reduse_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['order_status']->value->is_close==0) {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_not_reduse_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="okay_list_boding okay_list_order_stg_sts_status">
                                            <select name="new_is_close[]" class="selectpicker">
                                                <option value="1" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_reduse_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                <option value="0" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_not_reduse_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="okay_list_footer">
                            <div class="okay_list_foot_left">
                                <div class="okay_list_boding okay_list_drag"></div>
                                <div class="okay_list_heading okay_list_check">
                                    <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                                    <label class="okay_ckeckbox" for="check_all_2"></label>
                                </div>
                                <div class="okay_list_option">
                                    <select name="action" class="selectpicker">
                                        <option value="delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" value="labels" class="btn btn_small btn_blue">
                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <div class="col-lg-6 col-md-12 hidden-md-down">
        <div class="boxed fn_toggle_wrap okay_disabled">
            <div class="heading_box">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_labels, ENT_QUOTES, 'UTF-8', true);?>

                <div class="box_btn_heading ml-1">
                    <button type="button" class="btn btn_mini btn-info fn_add_Label ">
                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'plus'), 0);?>

                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_add_label, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>
                <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                    <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                </div>
            </div>
            <div class="toggle_body_wrap on fn_card">
                <form class="fn_form_list" method="post">
                    <input type="hidden" value="labels" name="labels">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

                    <div class="okay_list">
                        
                        <div class="okay_list_head">
                            <div class="okay_list_heading okay_list_check">
                                <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                                <label class="okay_ckeckbox" for="check_all_1"></label>
                            </div>
                            <div class="okay_list_heading okay_list_order_stg_lbl_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_order_stg_sts_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_colour, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>
                        <div class="fn_labels_list okay_list_body sortable fn_sort_list">

                            <?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['labels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
?>
                                <div class="fn_row okay_list_body_item">
                                    <div class="okay_list_row fn_sort_item">
                                        <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['label']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['label']->value->position;?>
">
                                        <input type="hidden" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['label']->value->id;?>
">

                                        <div class="cokay_list_boding okay_list_check">
                                            <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['label']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['label']->value->id;?>
"/>
                                            <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['label']->value->id;?>
"></label>
                                        </div>

                                        <div class="okay_list_boding okay_list_order_stg_lbl_name">
                                            <input type="text" class="form-control" name="name[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                        </div>

                                        <div class="okay_list_boding okay_list_order_stg_sts_label">
                                            <input  name="color[]" value="<?php echo $_smarty_tpl->tpl_vars['label']->value->color;?>
" class="hidden">
                                            <span data-hint="#<?php echo $_smarty_tpl->tpl_vars['label']->value->color;?>
" class="fn_color label_color_item hint-bottom-middle-t-info-s-small-mobile  hint-anim" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['label']->value->color;?>
;"></span>
                                        </div>

                                        <div class="okay_list_boding okay_list_close">
                                            
                                            <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="fn_row fn_new_label fn_sort_item okay_list_body_item">
                                <div class="okay_list_row fn_sort_item">
                                    <div class="cokay_list_boding okay_list_check"></div>
                                    <div class="okay_list_boding okay_list_order_stg_lbl_name">
                                        <input type="text" class="form-control" name="new_name[]" value="">
                                    </div>
                                    <div class="okay_list_boding okay_list_order_stg_sts_label">
                                        <input name="new_color[]" value="" class="hidden">
                                        <span data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_select_colour, ENT_QUOTES, 'UTF-8', true);?>
" class="fn_color label_color_item hint-bottom-middle-t-info-s-small-mobile  hint-anim"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="okay_list_footer ">
                            <div class="okay_list_foot_left">
                                <div class="okay_list_heading okay_list_check">
                                    <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                                    <label class="okay_ckeckbox" for="check_all_2"></label>
                                </div>
                                <div class="okay_list_option">
                                    <select name="action" class="selectpicker">
                                        <option value="delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" value="labels" class="btn btn_small btn_blue">
                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<link rel="stylesheet" media="screen" type="text/css" href="design/js/colorpicker/css/colorpicker.css" />
<script type="text/javascript" src="design/js/colorpicker/js/colorpicker.js"></script>
<script>
    $(function() {
        var new_label = $(".fn_new_label").clone(true);
        $(".fn_new_label").remove();

        var new_status = $(".fn_new_status").clone(true);
        $(".fn_new_status").remove();

        $(document).on("click", ".fn_add_Label", function () {
           clone_label = new_label.clone(true);
           $(".fn_labels_list").append(clone_label);
        });

        $(document).on("click", ".fn_add_status", function () {
            clone_status = new_status.clone(true);
            clone_status.find("select").selectpicker();
            $(".fn_status_list").append(clone_status);
        });

        $(document).on("mouseenter click", ".fn_color", function () {
            var elem = $(this);
            elem.ColorPicker({
                onChange: function (hsb, hex, rgb) {
                    elem.css('backgroundColor', '#' + hex);
                    elem.prev().val(hex);
                }
            });
        });

    });
</script>

<?php }} ?>
