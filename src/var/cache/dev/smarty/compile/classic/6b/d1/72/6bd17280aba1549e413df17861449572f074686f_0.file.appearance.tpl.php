<?php
/* Smarty version 4.2.1, created on 2022-12-21 11:12:19
  from '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/appearance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63a2dc039b15a7_02883134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bd17280aba1549e413df17861449572f074686f' => 
    array (
      0 => '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/appearance.tpl',
      1 => 1649431700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a2dc039b15a7_02883134 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default panel-blockreassurance col-lg-10 col-lg-offset-1 col-xs-12 col-xs-offset-0">
    <div class="panel-heading">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customize Module Design','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

    </div>

    <div class="panel-body">
        <div class="clearfix">

            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
                    <div class="text-right">
                        <label class="control-label">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Icon color','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

                        </label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-2">
                    <div class="ps_colorpicker1"></div>
                    <input type="hidden" id="color_1" name="PSR_ICON_COLOR" class="psr_icon_color"
                           value="<?php if ((isset($_smarty_tpl->tpl_vars['psr_icon_color']->value))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psr_icon_color']->value,'htmlall','UTF-8' ));
}?>" />
                </div>

                <div class="clearfix"></div>
            </div>

            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
                    <div class="text-right">
                        <label class="control-label">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text color','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

                        </label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-2">
                    <div class="ps_colorpicker2"></div>
                    <input type="hidden" id="color_2" name="PSR_TEXT_COLOR" class="psr_text_color"
                           value="<?php if ((isset($_smarty_tpl->tpl_vars['psr_text_color']->value))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psr_text_color']->value,'htmlall','UTF-8' ));
}?>" />
                </div>
            </div>

        </div>
    </div>

    <div class="panel-footer">
        <div class="col-xs-12 text-right">
            <button name="saveConfiguration" id="saveConfiguration" type="submit" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</button>
        </div>
    </div>
</div>
<?php }
}
