<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 22:29:20
  from '/var/www/html/blog/templates/default/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed170a053fd43_73667246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0ca6932787a5f7ea566293b113b05efff31e095' => 
    array (
      0 => '/var/www/html/blog/templates/default/404.tpl',
      1 => 1590784158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed170a053fd43_73667246 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="pane pane--error">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pane__title text-center">Sorry, an error has occured</div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['error_message']->value) {?>
                <div class="col-12">
                    <div class="pane__text text-center"><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
.</div>
                </div>
            <?php }?>
        </div>
    </div>
</section><?php }
}
