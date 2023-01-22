<?php
/* Smarty version 4.2.1, created on 2022-12-20 21:49:06
  from '/var/www/html/modules/ps_facetedsearch/views/templates/hook/feature_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63a21fc23bde28_90778044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1c992bed178d3fc725c220a398da98600457e24' => 
    array (
      0 => '/var/www/html/modules/ps_facetedsearch/views/templates/hook/feature_form.tpl',
      1 => 1649947431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a21fc23bde28_90778044 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
	<label class="control-label col-lg-4">
		<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invalid characters: <>;=#{}_','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'URL','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span>
	</label>
	<div class="col-lg-8">
		<div class="row">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
			  <div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" style="display: <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['default_form_language']->value) {?>block<?php } else { ?>none<?php }?>;">
				  <div class="col-lg-9">
					  <input type="text" size="64" name="url_name_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']])) && (isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]['url_name']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]['url_name'],'htmlall','UTF-8' ));
}?>" />
				  </div>
				  <div class="col-lg-2">
					  <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
						  <?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

						  <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu">
						  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
						    <li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
						  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					  </ul>
				  </div>
			  </div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<div class="col-lg-9">
				<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When the Faceted Search module is enabled, you can get more detailed URLs by choosing the word that best represent this feature. By default, PrestaShop uses the feature\'s name, but you can change that setting using this field.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</p>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-lg-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Meta title','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</label>
	<div class="col-lg-8">
		<div class="row">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
			  <div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" style="display: <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['default_form_language']->value) {?>block<?php } else { ?>none<?php }?>;">
				  <div class="col-lg-9">
					  <input type="text" size="70" name="meta_title_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']])) && (isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]['meta_title']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]['meta_title'],'htmlall','UTF-8' ));
}?>" />
				  </div>
				  <div class="col-lg-2">
					  <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
						  <?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

						  <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu">
						  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
						    <li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
						  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					  </ul>
				  </div>
			  </div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<div class="col-lg-9">
				<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When the Faceted Search module is enabled, you can get more detailed page titles by choosing the word that best represent this feature. By default, PrestaShop uses the feature\'s name, but you can change that setting using this field.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</p>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-lg-4" for=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Indexable','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
	<div class="col-lg-8">
		<span class="switch prestashop-switch fixed-width-lg">
			<input type="radio" name="layered_indexable" id="indexable_on" value="1"<?php if ($_smarty_tpl->tpl_vars['is_indexable']->value) {?> checked="checked"<?php }?>>
			<label for="indexable_on">
				<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

			</label>
			<input type="radio" name="layered_indexable" id="indexable_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['is_indexable']->value) {?> checked="checked"<?php }?>>
			<label for="indexable_off">
				<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

			</label>
			<a class="slide-button btn"></a>
		</span>
	</div>
	<div class="col-lg-9 col-lg-push-4">
		<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use this attribute in URL generated by the Faceted Search module.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</p>
	</div>
</div>
<?php }
}
