<?php
/* Smarty version 4.2.1, created on 2022-12-21 11:12:19
  from '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/display/checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63a2dc0397fe39_19245366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fb3e27b072400719ab75da6c632773eb054451f' => 
    array (
      0 => '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/display/checkout.tpl',
      1 => 1649431700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a2dc0397fe39_19245366 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default panel-blockreassurance col-lg-12 col-xs-12">
    <div class="panel-heading">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Specific position for cart page','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 position-hook">
        <label class="col-lg-3 col-lg-offset-1 col-xs-3 col-xs-offset-1">
            <div class="help-block customradiodesign">
                <input type="radio" class="input_img js-show-all" name="PSR_HOOK_CHECKOUT" value="1"
                       id="PSR_HOOK_CHECKOUT" <?php if ($_smarty_tpl->tpl_vars['psr_hook_checkout']->value == 1) {?>checked="checked"<?php }?> />
                <label for="PSR_HOOK_CHECKOUT"><span><span></span></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Main column','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</label><br/><br/>
                <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
displayReassurance_active.jpg" width="150" height="150"
                     class="psr-checkout-color<?php if ($_smarty_tpl->tpl_vars['psr_hook_checkout']->value == 1) {?> active<?php }?>" />
                <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
displayReassurance_inactive.jpg" width="150" height="150"
                     class="psr-checkout-grey <?php if ($_smarty_tpl->tpl_vars['psr_hook_checkout']->value != 1) {?> active<?php }?>" />
            </div>
        </label>
        <label class="col-lg-3 col-lg-offset-1 col-xs-3 col-xs-offset-1">
            <div class="help-block customradiodesign">
                <input type="radio" class="input_img" name="PSR_HOOK_CHECKOUT" value="0" id="PSR_HOOK_CHECKOUT_0"
                       <?php if ($_smarty_tpl->tpl_vars['psr_hook_checkout']->value == 0) {?>checked="checked"<?php }?> />
                <label for="PSR_HOOK_CHECKOUT_0"><span><span></span></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'none','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</label><br/><br/>
                <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
productPage_none.jpg" width="150" height="150" />
            </div>
        </label>
    </div>

</div>
<?php }
}
