<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-30 22:45:09
  from '/var/www/html/blog/common/messages/user_activation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed2c5d5b8ee98_19013423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fd916ffe9cbc9a7408f3d942783ec3c5f02e5af' => 
    array (
      0 => '/var/www/html/blog/common/messages/user_activation.tpl',
      1 => 1590856352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed2c5d5b8ee98_19013423 (Smarty_Internal_Template $_smarty_tpl) {
?>Subject: Welcome to <?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>


Hello <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
,

Thank you for registering your account at <?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
, your account requires activation before you can use it.

Please use this link to active the account: <?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/register?token=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>


Thank you for registering.

-----
<?php echo $_smarty_tpl->tpl_vars['site']->value->email_signature;?>



This is an auto-generated email, please do NOT respond to this email.<?php }
}
