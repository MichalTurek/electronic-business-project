<?php
/* Smarty version 4.2.1, created on 2022-12-21 11:12:16
  from '/var/www/html/modules/blockreassurance/views/templates/admin/configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63a2dc0082c119_01805473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '717ee162717afdd950d2a06217b7df5803383b58' => 
    array (
      0 => '/var/www/html/modules/blockreassurance/views/templates/admin/configure.tpl',
      1 => 1649431700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./alert_folder_writable.tpl' => 1,
    'file:./tabs/content.tpl' => 1,
    'file:./tabs/display.tpl' => 1,
    'file:./tabs/appearance.tpl' => 1,
  ),
),false)) {
function content_63a2dc0082c119_01805473 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="bootstrap">
    <div class="page-head custom-tab">
        <div class="page-head-tabs" id="head_tabs">
            <ul class="nav">
                <li class="active">
                    <a href="#pscontent" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Content','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</a>
                </li>
                <li>
                    <a href="#display" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</a>
                </li>
                <li>
                    <a href="#appearance" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Appearance','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="bootstrap" id="psreassurance_configuration">
    <!-- Module content -->
    <div id="modulecontent" class="clearfix">
        <!-- Tab panes -->
        <div class="tab-content row">
            <?php if (!$_smarty_tpl->tpl_vars['folderIsWritable']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:./alert_folder_writable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
            <div class="tab-pane active" id="pscontent">
                <div class="tab_cap_listing">
                    <?php $_smarty_tpl->_subTemplateRender("file:./tabs/content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
            <div class="tab-pane" id="display">
                <div class="tab_cap_listing">
                    <?php $_smarty_tpl->_subTemplateRender("file:./tabs/display.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
            <div class="tab-pane" id="appearance">
                <div class="tab_cap_listing">
                    <?php $_smarty_tpl->_subTemplateRender("file:./tabs/appearance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
