<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-07 10:57:57
  from '/var/www/html/blog/common/messages/notify_change.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edcac150b0fe7_33024200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9709f5d2d9c16293043cb9d53185bb8f1c7f136a' => 
    array (
      0 => '/var/www/html/blog/common/messages/notify_change.tpl',
      1 => 1591519831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edcac150b0fe7_33024200 (Smarty_Internal_Template $_smarty_tpl) {
?>Subject: User account update <?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>


Hello <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
,

You requested to update your <?php echo $_smarty_tpl->tpl_vars['email_password']->value;?>
 for your account at <?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
.
If you did not initiate this change, please contact the site administrator as quickly as possible.

-----
<?php echo $_smarty_tpl->tpl_vars['site']->value->email_signature;?>



This is an auto-generated email, please do NOT respond to this email.<?php }
}
