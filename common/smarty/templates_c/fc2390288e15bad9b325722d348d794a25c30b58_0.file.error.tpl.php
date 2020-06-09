<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-02 20:10:53
  from '/var/www/html/blog/templates/admin/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed6962d387860_41596742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc2390288e15bad9b325722d348d794a25c30b58' => 
    array (
      0 => '/var/www/html/blog/templates/admin/error.tpl',
      1 => 1591121443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed6962d387860_41596742 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="pane pane--error">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pane__title text-center"><?php echo $_smarty_tpl->tpl_vars['error_title']->value;?>
</div>
                <div class="pane__text text-center">
                    <?php if ($_smarty_tpl->tpl_vars['error_message']->value) {
echo $_smarty_tpl->tpl_vars['error_message']->value;?>
.<?php }?>
                    <span class="mt-3">Please click on <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/admin">this link</a> to return to the home page</span>
                </div>
            </div>
        </div>
    </div>
</section><?php }
}
