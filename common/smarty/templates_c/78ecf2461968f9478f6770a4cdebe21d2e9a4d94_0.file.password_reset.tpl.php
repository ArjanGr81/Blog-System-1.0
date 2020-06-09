<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-07 15:54:22
  from '/var/www/html/blog/common/messages/password_reset.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edcf18eb423d3_58614403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78ecf2461968f9478f6770a4cdebe21d2e9a4d94' => 
    array (
      0 => '/var/www/html/blog/common/messages/password_reset.tpl',
      1 => 1591534816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edcf18eb423d3_58614403 (Smarty_Internal_Template $_smarty_tpl) {
?>Subject: Password reset for <?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>


Hello <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
,

You requested to have your password reset for your account at <?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
.
If you did not initiate this change, please contact the site administrator as quickly as possible.

-----
<?php echo $_smarty_tpl->tpl_vars['site']->value->email_signature;?>



This is an auto-generated email, please do NOT respond to this email.<?php }
}
