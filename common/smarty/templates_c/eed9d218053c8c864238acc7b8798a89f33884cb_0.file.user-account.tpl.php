<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 17:39:07
  from '/var/www/html/blog/templates/default/user-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ede5b9b628b33_12535238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eed9d218053c8c864238acc7b8798a89f33884cb' => 
    array (
      0 => '/var/www/html/blog/templates/default/user-account.tpl',
      1 => 1591630746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ede5b9b628b33_12535238 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="pane pane--user">
    <div class="column-header">Account settings</div>
    <form method="post" action="" enctype="multipart/form-data">
        <div class="account-settings">
            <div class="account-settings__avatar avatar">
                <input type="file" name="avatar" id="file" class="avatar__file" multiple />
                <label for="file">
                    <i class="fas fa-pencil-alt"></i>
                </label>
                <?php if ($_smarty_tpl->tpl_vars['user_settings']->value->avatar) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/user-account?ac=delete" class="avatar__delete">
                    <i class="fas fa-times"></i>
                </a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['user_settings']->value->avatar) {?>
                <?php $_smarty_tpl->_assignInScope('avatar', $_smarty_tpl->tpl_vars['user_settings']->value->avatar);?>
                    <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('avatar', "default_avatar");?>
                <?php }?>
                <div class="avatar__image text-hide"
                    style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/images/avatars/<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
.jpg);">image</div>
                <div class="avatar__details">
                    <span>Upload an avatar</span>
                    <ul>
                        <li>Only images with image type JPEG</li>
                        <li>Maximum filesize of 100kb</li>
                    </ul>
                </div>
            </div>
            <span>
                <label for="name">Name</label>
                <input id="name" value="<?php echo $_smarty_tpl->tpl_vars['user_settings']->value->name;?>
" name="user_data[real_name]" type="text" placeholder="First- and last name (optional)" />
            </span>
            <span>
                <label for="email">Email</label>
                <input id="email" name="user_data[email]" value="<?php echo $_smarty_tpl->tpl_vars['user_settings']->value->email;?>
" type="text" placeholder="Your email address" />
            </span>
            <input type="hidden" name="user_data[user_id]" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" />
            <div class="account-options">
                <button class="button button--primary">Update account</button>
                <div class="update-password">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/recover">Update your password</a>
                </div>
            </div>
        </div>
    </form>
</section><?php }
}
