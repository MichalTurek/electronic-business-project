<?php
/* Smarty version 3.1.43, created on 2022-11-30 10:16:26
  from '/var/www/html/admin445jefygq/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63871f6ac69207_41154185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f589b1fb4e1f23b9a9bdc70531c5c33ec860c54' => 
    array (
      0 => '/var/www/html/admin445jefygq/themes/default/template/content.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63871f6ac69207_41154185 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
