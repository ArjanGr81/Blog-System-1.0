<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 01:08:17
  from '/var/www/html/blog/templates/default/recover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edd73614e5ad3_49502063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac66fc633f70bdee0a6e6432b89a4c5a52be3a94' => 
    array (
      0 => '/var/www/html/blog/templates/default/recover.tpl',
      1 => 1591542374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd73614e5ad3_49502063 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="pane pane--recover">
    <div class="column-header"><?php if ($_smarty_tpl->tpl_vars['logged_in']->value || $_smarty_tpl->tpl_vars['recover']->value) {?>Update password<?php } else { ?>Recover password<?php }?></div>
    <form method="post" action="">
        <div class="account-settings">
            <?php if (!$_smarty_tpl->tpl_vars['logged_in']->value && !$_smarty_tpl->tpl_vars['recover']->value) {?>
            <span>
                <label for="email">Email address</label>
                <input id="email" name="user_data[email]" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" type="text" placeholder="Your email address" />
                <?php if ($_smarty_tpl->tpl_vars['notice']->value) {?><div class="account-settings__notify"><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</div><?php }?>
            </span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['logged_in']->value || $_smarty_tpl->tpl_vars['recover']->value) {?>
            <span>
                <label for="password">Password</label>
                <input id="password" name="user_data[password]" type="password" placeholder="New password" />
            </span>
            <span>
                <label for="confirm">Confirm password</label>
                <input id="confirm" name="user_data[confirm]" type="password" placeholder="Confirm password" />
                <?php if ($_smarty_tpl->tpl_vars['notice']->value) {?><div class="account-settings__notify"><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</div><?php }?>
            </span>
                <?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
                    <input type="hidden" name="user_data[user_id]" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" />
                <?php } else { ?>
                    <input type="hidden" name="user_data[token]" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
                <?php }?>
            <?php }?>
            <button class="button button--primary">
                <?php if ($_smarty_tpl->tpl_vars['logged_in']->value || $_smarty_tpl->tpl_vars['recover']->value) {?>
                    Update password
                <?php } else { ?>
                    Recover password
                <?php }?>
            </button>
            <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
                <div class="account-settings__success">We have sent an email to <?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>update<?php } else { ?>recover<?php }?> your password</div>
            <?php }?>
        </div>
    </form>
</section><?php }
}
