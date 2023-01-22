<?php
/* Smarty version 4.2.1, created on 2022-12-20 21:48:14
  from '/var/www/html/sbmadmin/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63a21f8e2dfe31_85671093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '202dd80a90070deabcdea2ac94e242128eb8107e' => 
    array (
      0 => '/var/www/html/sbmadmin/themes/default/template/content.tpl',
      1 => 1666787715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a21f8e2dfe31_85671093 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
