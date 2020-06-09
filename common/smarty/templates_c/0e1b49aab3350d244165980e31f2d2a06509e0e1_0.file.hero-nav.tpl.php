<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-06 14:03:39
  from '/var/www/html/racingforme/themes/templates/rfm_default/hero-nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb2a79b23e158_70570532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e1b49aab3350d244165980e31f2d2a06509e0e1' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/rfm_default/hero-nav.tpl',
      1 => 1588763605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb2a79b23e158_70570532 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['captureData']->value) > 0) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['captureData']->value, 'categories');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->value) {
?>
    <div class="carousel__block"><img src="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/img/categories/<?php echo $_smarty_tpl->tpl_vars['categories']->value['idx_img'];?>
.png"alt="<?php echo $_smarty_tpl->tpl_vars['categories']->value['idx_img'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['categories']->value['full_name'];?>
" /></div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
nothing here
<?php }
}
}
