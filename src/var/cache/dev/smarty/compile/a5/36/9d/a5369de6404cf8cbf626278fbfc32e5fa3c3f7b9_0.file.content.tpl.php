<?php
/* Smarty version 4.2.1, created on 2022-12-20 21:40:10
  from '/var/www/html/sbmadmin/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63a21daa524145_93264515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5369de6404cf8cbf626278fbfc32e5fa3c3f7b9' => 
    array (
      0 => '/var/www/html/sbmadmin/themes/new-theme/template/content.tpl',
      1 => 1666787715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a21daa524145_93264515 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
