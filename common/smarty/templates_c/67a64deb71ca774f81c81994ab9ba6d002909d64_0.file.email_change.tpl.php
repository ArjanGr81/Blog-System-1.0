<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-07 16:58:29
  from '/var/www/html/blog/common/messages/email_change.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edd0095b7d5b4_91281976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67a64deb71ca774f81c81994ab9ba6d002909d64' => 
    array (
      0 => '/var/www/html/blog/common/messages/email_change.tpl',
      1 => 1591530170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd0095b7d5b4_91281976 (Smarty_Internal_Template $_smarty_tpl) {
?>Subject: Requested <?php echo $_smarty_tpl->tpl_vars['email_password']->value;?>
 change at <?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>


Hello <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
,

You have requested to update your <?php echo $_smarty_tpl->tpl_vars['email_password']->value;?>
 at <?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
.
To finalise this change, please use the following link to active the account: 

<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/register?key=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>


-----
<?php echo $_smarty_tpl->tpl_vars['site']->value->email_signature;?>



This is an auto-generated email, please do NOT respond to this email.<?php }
}
