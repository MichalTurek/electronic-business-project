<?php
/* Smarty version 4.2.1, created on 2022-12-20 22:14:53
  from '/var/www/html/themes/classic/templates/checkout/_partials/cart-summary-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63a225cd688e91_01984146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e825f179cb3f449cd1fc2c3d546deb8f2b627d48' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/_partials/cart-summary-top.tpl',
      1 => 1666708672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a225cd688e91_01984146 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="cart-summary-top js-cart-summary-top">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutSummaryTop'),$_smarty_tpl ) );?>

</div>
<?php }
}
