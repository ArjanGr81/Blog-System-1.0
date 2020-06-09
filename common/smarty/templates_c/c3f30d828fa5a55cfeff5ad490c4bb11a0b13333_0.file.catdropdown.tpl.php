<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-14 21:33:26
  from '/var/www/html/racingforme/themes/templates/road_rash/catdropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebd9d0676fd57_55179802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3f30d828fa5a55cfeff5ad490c4bb11a0b13333' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/road_rash/catdropdown.tpl',
      1 => 1579346473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebd9d0676fd57_55179802 (Smarty_Internal_Template $_smarty_tpl) {
?><select id="doCatDropDown" name="c"><option value="-1" class="childCat">-- Select a category --</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catResults']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="parentCat" <?php if ($_smarty_tpl->tpl_vars['selectedCat']->value == $_smarty_tpl->tpl_vars['category']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['subcatlist'], 'subcat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['id'];?>
" class="childCat" <?php if ($_smarty_tpl->tpl_vars['selectedCat']->value == $_smarty_tpl->tpl_vars['subcat']->value['id']) {?>selected="selected"<?php }?>>&#9679; <?php echo $_smarty_tpl->tpl_vars['subcat']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><?php }
}
