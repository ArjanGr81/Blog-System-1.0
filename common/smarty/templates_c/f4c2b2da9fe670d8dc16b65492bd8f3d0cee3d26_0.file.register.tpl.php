<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 01:08:58
  from '/var/www/html/blog/templates/default/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edd738a05ade5_68501581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4c2b2da9fe670d8dc16b65492bd8f3d0cee3d26' => 
    array (
      0 => '/var/www/html/blog/templates/default/register.tpl',
      1 => 1591571336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd738a05ade5_68501581 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="pane pane--register">
    <div class="column-header">Register an account</div>
    <?php if (!$_smarty_tpl->tpl_vars['logged_in']->value && $_smarty_tpl->tpl_vars['site']->value->activation) {?>
        <form action="register" method="post" class="register">
            <?php if ($_smarty_tpl->tpl_vars['notice']->value != '') {?>
                <div class="register__error">
                    <span><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</span>
                </div>
            <?php }?>
            <div class="register__login">
                <span>
                    <label for="username">Username</label>
                    <input id="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" name="user_data[uname]" type="text" placeholder="Username" />
                </span>
                <span>
                    <label for="password">Password</label>
                    <input id="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" name="user_data[pword]" type="password" placeholder="Password" />
                </span>
                <span>
                    <label for="conf_password">Confirm password</label>
                    <input id="conf_password" value="<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
" name="user_data[confirm]" type="password" placeholder="Confirm password" />
                </span>
                <span>
                    <label for="email">Email address</label>
                    <input id="email" name="user_data[email]" type="text" placeholder="Email address" />
                </span>
                <button class="button button--primary">Register account</button>
            </div>
        </form>
    <?php }?>
</section><?php }
}
