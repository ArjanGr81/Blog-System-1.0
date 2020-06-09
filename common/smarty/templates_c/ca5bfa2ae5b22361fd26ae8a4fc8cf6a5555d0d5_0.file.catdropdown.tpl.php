<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 22:08:52
  from '/var/www/html/racingforme/themes/templates/rfm_default/catdropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebef6d45ca4b9_82718673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca5bfa2ae5b22361fd26ae8a4fc8cf6a5555d0d5' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/rfm_default/catdropdown.tpl',
      1 => 1589573331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebef6d45ca4b9_82718673 (Smarty_Internal_Template $_smarty_tpl) {
?><span class="select-arrow"><select class="select-css" id="doCatDropDown" name="c"><option value="-1" class="childCat">-- Select a category --</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catResults']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="select-css__parent" <?php if ($_smarty_tpl->tpl_vars['selectedCat']->value == $_smarty_tpl->tpl_vars['category']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['subcatlist'], 'subcat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['id'];?>
" class="select-css__child" <?php if ($_smarty_tpl->tpl_vars['selectedCat']->value == $_smarty_tpl->tpl_vars['subcat']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['subcat']->value['title'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></span><?php }
}
