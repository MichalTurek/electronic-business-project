<?php
/* Smarty version 4.2.1, created on 2022-12-21 11:07:57
  from 'module:psfacetedsearchviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63a2dafd592529_95468995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd41d65d76b9471b5d365fe06cf1737c89a53af9f' => 
    array (
      0 => 'module:psfacetedsearchviewstempl',
      1 => 1649947431,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a2dafd592529_95468995 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin /var/www/html/modules/ps_facetedsearch/views/templates/front/catalog/facets.tpl --><?php if (count($_smarty_tpl->tpl_vars['displayedFacets']->value)) {?>
  <div id="search_filters">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73854707263a2dafd55c0c1_23433302', 'facets_title');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47181361163a2dafd55d5b7_72806379', 'facets_clearall_button');
?>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayedFacets']->value, 'facet');
$_smarty_tpl->tpl_vars['facet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['facet']->value) {
$_smarty_tpl->tpl_vars['facet']->do_else = false;
?>
      <section class="facet clearfix">
        <p class="h6 facet-title hidden-sm-down"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</p>
        <?php $_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));?>
        <?php $_smarty_tpl->_assignInScope('_collapse', true);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
          <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {
$_smarty_tpl->_assignInScope('_collapse', false);
}?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <div class="title hidden-md-up" data-target="#facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse"<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> aria-expanded="true"<?php }?>>
          <p class="h6 facet-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</p>
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
        </div>

        <?php if (in_array($_smarty_tpl->tpl_vars['facet']->value['widgetType'],array('radio','checkbox'))) {?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50877439763a2dafd5672f6_86015300', 'facet_item_other');
?>


        <?php } elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'dropdown') {?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81540713563a2dafd581236_04290679', 'facet_item_dropdown');
?>


        <?php } elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'slider') {?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157784744863a2dafd58b442_05738236', 'facet_item_slider');
?>

        <?php }?>
      </section>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php }?>
<!-- end /var/www/html/modules/ps_facetedsearch/views/templates/front/catalog/facets.tpl --><?php }
/* {block 'facets_title'} */
class Block_73854707263a2dafd55c0c1_23433302 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_title' => 
  array (
    0 => 'Block_73854707263a2dafd55c0c1_23433302',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p class="text-uppercase h6 hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter By','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</p>
    <?php
}
}
/* {/block 'facets_title'} */
/* {block 'facets_clearall_button'} */
class Block_47181361163a2dafd55d5b7_72806379 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_clearall_button' => 
  array (
    0 => 'Block_47181361163a2dafd55d5b7_72806379',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
        <div id="_desktop_search_filters_clear_all" class="hidden-sm-down clear-all-wrapper">
          <button data-search-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['clear_all_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-tertiary js-search-filters-clear-all">
            <i class="material-icons">&#xE14C;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear all','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        </div>
      <?php }?>
    <?php
}
}
/* {/block 'facets_clearall_button'} */
/* {block 'facet_item_other'} */
class Block_50877439763a2dafd5672f6_86015300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_other' => 
  array (
    0 => 'Block_50877439763a2dafd5672f6_86015300',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul id="facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?>">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter', false, 'filter_key');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter_key']->value => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
                <?php if (!$_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
                  <?php continue 1;?>
                <?php }?>

                <li>
                  <label class="facet-label<?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> active <?php }?>" for="facet_input_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?>
                      <span class="custom-checkbox">
                        <input
                          id="facet_input_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                          data-search-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                          type="checkbox"
                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>checked<?php }?>
                        >
                        <?php if ((isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color']))) {?>
                          <span class="color" style="background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['properties']['color'], ENT_QUOTES, 'UTF-8');?>
"></span>
                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture']))) {?>
                          <span class="color texture" style="background-image:url(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['properties']['texture'], ENT_QUOTES, 'UTF-8');?>
)"></span>
                        <?php } else { ?>
                          <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
                        <?php }?>
                      </span>
                    <?php } else { ?>
                      <span class="custom-radio">
                        <input
                          id="facet_input_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                          data-search-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                          type="radio"
                          name="filter <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>checked<?php }?>
                        >
                        <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>></span>
                      </span>
                    <?php }?>

                    <a
                      href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                      class="_gray-darker search-link js-search-link"
                      rel="nofollow"
                    >
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                      <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                        <span class="magnitude">(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)</span>
                      <?php }?>
                    </a>
                  </label>
                </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          <?php
}
}
/* {/block 'facet_item_other'} */
/* {block 'facet_item_dropdown'} */
class Block_81540713563a2dafd581236_04290679 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_dropdown' => 
  array (
    0 => 'Block_81540713563a2dafd581236_04290679',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul id="facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?>">
              <li>
                <div class="col-sm-12 col-xs-12 col-md-12 facet-dropdown dropdown">
                  <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php $_smarty_tpl->_assignInScope('active_found', false);?>
                    <span>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                          <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                            (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                          <?php }?>
                          <?php $_smarty_tpl->_assignInScope('active_found', true);?>
                        <?php }?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      <?php if (!$_smarty_tpl->tpl_vars['active_found']->value) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(no filter)','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                      <?php }?>
                    </span>
                    <i class="material-icons float-xs-right">&#xE5C5;</i>
                  </a>
                  <div class="dropdown-menu">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
                      <?php if (!$_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                        <a
                          rel="nofollow"
                          href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                          class="select-list js-search-link"
                        >
                          <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                            (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                          <?php }?>
                        </a>
                      <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </li>
            </ul>
          <?php
}
}
/* {/block 'facet_item_dropdown'} */
/* {block 'facet_item_slider'} */
class Block_157784744863a2dafd58b442_05738236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_slider' => 
  array (
    0 => 'Block_157784744863a2dafd58b442_05738236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
              <ul id="facet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                class="faceted-slider collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?>"
                data-slider-min="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['properties']['min'], ENT_QUOTES, 'UTF-8');?>
"
                data-slider-max="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['properties']['max'], ENT_QUOTES, 'UTF-8');?>
"
                data-slider-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-slider-values="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['value'] )), ENT_QUOTES, 'UTF-8');?>
"
                data-slider-unit="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['properties']['unit'], ENT_QUOTES, 'UTF-8');?>
"
                data-slider-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
                data-slider-specifications="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['facet']->value['properties']['specifications'] )), ENT_QUOTES, 'UTF-8');?>
"
                data-slider-encoded-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
              >
                <li>
                  <p id="facet_label_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                  </p>

                  <div id="slider-range_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
                </li>
              </ul>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
}
}
/* {/block 'facet_item_slider'} */
}
