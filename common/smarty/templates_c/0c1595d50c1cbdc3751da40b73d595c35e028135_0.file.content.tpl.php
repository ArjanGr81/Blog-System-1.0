<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-01 21:29:49
  from '/var/www/html/blog/templates/default/admin/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed5572d950710_73221570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c1595d50c1cbdc3751da40b73d595c35e028135' => 
    array (
      0 => '/var/www/html/blog/templates/default/admin/content.tpl',
      1 => 1591039785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed5572d950710_73221570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/blog/common/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<section class="pane pane--all-posts">
    <div class="all-posts__header">
        <div class="column-header">Title</div>
        <div class="column-header">
            <i class="fas fa-comment"></i>
        </div>
        <div class="column-header">
            <i class="fas fa-thumbs-up"></i>
        </div>
    </div>
    <div class="all-posts">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
            <div class="show-post-data">
                <div class="title-wrapper">
                    <span><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</span>
                    <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date'],"%A %B %e %Y, %r");?>
</span>
                </div>
                <span><?php if ($_smarty_tpl->tpl_vars['post']->value['comments']) {
echo $_smarty_tpl->tpl_vars['post']->value['comments'];
} else { ?>0<?php }?></span>
                <span><?php if ($_smarty_tpl->tpl_vars['post']->value['likes']) {
echo $_smarty_tpl->tpl_vars['post']->value['likes'];
} else { ?>0<?php }?></span>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</section><?php }
}
