<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-07 16:54:24
  from '/var/www/html/blog/templates/default/notify.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edcffa0378367_20141485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '544fb354dde8dfac2a0f37e936448dd1d21c7562' => 
    array (
      0 => '/var/www/html/blog/templates/default/notify.tpl',
      1 => 1591541662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edcffa0378367_20141485 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="pane pane--error">
    <div class="column-header text-center"><?php echo $_smarty_tpl->tpl_vars['error_title']->value;?>
</div>
        <div class="pane__text text-center">
            <?php if ($_smarty_tpl->tpl_vars['error_message']->value) {
echo $_smarty_tpl->tpl_vars['error_message']->value;?>
.<?php }?>
            <span>Please click on <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
">this link</a> to return to the home page</span>
        </div>
</section><?php }
}
