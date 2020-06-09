<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-17 18:49:22
  from '/var/www/html/racingforme/themes/templates/rfm_default/hero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec16b124a99e8_68070471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7af3a02120d5412fc45af397808a6761b24347f2' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/rfm_default/hero.tpl',
      1 => 1589734159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec16b124a99e8_68070471 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['captureData']->value) > 0) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['captureData']->value, 'categories');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->value) {
?>
    <div class="carousel__slide"><div class="d-none d-lg-flex content"><div class="content__logo"><img src="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/img/categories/<?php echo $_smarty_tpl->tpl_vars['categories']->value['idx_img'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['categories']->value['idx_img'];?>
" /></div></div><div class="schedule-data"><div class="schedule-data__title"><?php echo $_smarty_tpl->tpl_vars['categories']->value['full_name'];?>
</div><div class="schedule-data__round"><span>Round <?php echo $_smarty_tpl->tpl_vars['categories']->value['round'];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['categories']->value['event'];?>
</span></div><div class="schedule-data__date"><?php echo $_smarty_tpl->tpl_vars['categories']->value['start_date'];?>
 - <?php echo $_smarty_tpl->tpl_vars['categories']->value['end_date'];?>
</div><div class="schedule-data__recordings"><span><?php if ($_smarty_tpl->tpl_vars['categories']->value['recordings'] > 0) {
echo $_smarty_tpl->tpl_vars['categories']->value['recordings'];
} else { ?>no<?php }?></span><span>scheduled recordings</span></div></div></div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
nothing here
<?php }
}
}
