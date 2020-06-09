<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-30 15:39:01
  from '/var/www/html/blog/common/messages/user_welcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed261f54b79f1_83980188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60fe2b2ba32bc155fee76b19295175ed181eb831' => 
    array (
      0 => '/var/www/html/blog/common/messages/user_welcome.tpl',
      1 => 1590845935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed261f54b79f1_83980188 (Smarty_Internal_Template $_smarty_tpl) {
?>Subject: Welcome to <?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>


Thank you for registering your account at <?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
, please keep this e-mail for your records.

Your account information is as follows:

----------------------------
Username: <?php echo $_smarty_tpl->tpl_vars['username']->value;?>


Site URL: <?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>

----------------------------

Your password has been securely stored in our database and cannot be retrieved.
In the event that it is forgotten, you will be able to reset it using the email address associated with your account.

Thank you for registering.

-----
<?php echo $_smarty_tpl->tpl_vars['site']->value->email_signature;?>



This is an auto-generated email, please do NOT respond to this email.<?php }
}
