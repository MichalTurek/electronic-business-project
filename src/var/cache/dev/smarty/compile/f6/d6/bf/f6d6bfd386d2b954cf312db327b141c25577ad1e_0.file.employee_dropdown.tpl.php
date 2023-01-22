<?php
/* Smarty version 4.2.1, created on 2022-12-20 21:40:10
  from '/var/www/html/sbmadmin/themes/new-theme/template/components/layout/employee_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63a21daa805a11_88578376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6d6bfd386d2b954cf312db327b141c25577ad1e' => 
    array (
      0 => '/var/www/html/sbmadmin/themes/new-theme/template/components/layout/employee_dropdown.tpl',
      1 => 1666787715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a21daa805a11_88578376 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['employee']->value))) {?>
<div class="dropdown employee-dropdown">
  <div class="rounded-circle person" data-toggle="dropdown">
    <i class="material-icons">account_circle</i>
  </div>
  <div class="dropdown-menu dropdown-menu-right">
    <div class="employee-wrapper-avatar">
      <div class="employee-top">
        <span class="employee-avatar"><img class="avatar rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['employee']->value->getImage();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['employee']->value->firstname;?>
" /></span>
        <span class="employee_profile"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome back %name%','sprintf'=>array('%name%'=>$_smarty_tpl->tpl_vars['employee']->value->firstname),'d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
</span>
      </div>

      <a class="dropdown-item employee-link profile-link" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminEmployees',true,array(),array('id_employee'=>intval($_smarty_tpl->tpl_vars['employee']->value->id),'updateemployee'=>1)),'html','UTF-8' ));?>
">
      <i class="material-icons">edit</i>
      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your profile','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
</span>
    </a>
    </div>

    <p class="divider"></p>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayBackOfficeEmployeeMenu']->value, 'menuItem', true);
$_smarty_tpl->tpl_vars['menuItem']->iteration = 0;
$_smarty_tpl->tpl_vars['menuItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->value) {
$_smarty_tpl->tpl_vars['menuItem']->do_else = false;
$_smarty_tpl->tpl_vars['menuItem']->iteration++;
$_smarty_tpl->tpl_vars['menuItem']->last = $_smarty_tpl->tpl_vars['menuItem']->iteration === $_smarty_tpl->tpl_vars['menuItem']->total;
$__foreach_menuItem_13_saved = $_smarty_tpl->tpl_vars['menuItem'];
?>
      <?php $_smarty_tpl->_assignInScope('menuItemProperties', $_smarty_tpl->tpl_vars['menuItem']->value->getProperties());?>
        <a class="dropdown-item <?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getClass();?>
" href="<?php echo $_smarty_tpl->tpl_vars['menuItemProperties']->value['link'];?>
" target="_blank" rel="noopener noreferrer nofollow">
            <?php if ((isset($_smarty_tpl->tpl_vars['menuItemProperties']->value['icon']))) {?><i class="material-icons"><?php echo $_smarty_tpl->tpl_vars['menuItemProperties']->value['icon'];?>
</i> <?php }
echo $_smarty_tpl->tpl_vars['menuItem']->value->getContent();?>

        </a>
        <?php if ($_smarty_tpl->tpl_vars['menuItem']->last) {?>
          <p class="divider"></p>
        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['menuItem'] = $__foreach_menuItem_13_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <a class="dropdown-item employee-link text-center" id="header_logout" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logout_link']->value,'html','UTF-8' ));?>
">
      <i class="material-icons d-lg-none">power_settings_new</i>
      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) );?>
</span>
    </a>
  </div>
</div>
<?php }
}
}
