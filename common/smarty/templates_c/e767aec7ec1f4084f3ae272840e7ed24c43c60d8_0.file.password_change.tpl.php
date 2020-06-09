<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-07 15:31:08
  from '/var/www/html/blog/common/messages/password_change.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edcec1c873d25_75979658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e767aec7ec1f4084f3ae272840e7ed24c43c60d8' => 
    array (
      0 => '/var/www/html/blog/common/messages/password_change.tpl',
      1 => 1591534790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edcec1c873d25_75979658 (Smarty_Internal_Template $_smarty_tpl) {
?>Subject: Requested <?php echo $_smarty_tpl->tpl_vars['email_password']->value;?>
 change at <?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>


Hello,

You have requested to update your <?php echo $_smarty_tpl->tpl_vars['email_password']->value;?>
 at <?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
.
To update your password, please use the following link: 

<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/recover?token=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>


If you do not wish to recover your password, please ignore this email.

-----
<?php echo $_smarty_tpl->tpl_vars['site']->value->email_signature;?>



This is an auto-generated email, please do NOT respond to this email.<?php }
}
