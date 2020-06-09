<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-16 13:56:45
  from '/var/www/html/racingforme/themes/templates/rfm_default/authentication/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebfd4fd50d868_41161287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ea06b9e00db82df52cc22cc83eb1f883546735a' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/rfm_default/authentication/login.tpl',
      1 => 1589571627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebfd4fd50d868_41161287 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="pane pane--front">
   <div class="front__wrapper">      
      <?php if ($_smarty_tpl->tpl_vars['show_login']->value != "0") {?>
      <form action="login" method="post" class="front"> 
         <input type="hidden" name="redirect" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['redirect']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />  
         <?php if ($_smarty_tpl->tpl_vars['error']->value != '' || $_smarty_tpl->tpl_vars['error']->value != '' && $_smarty_tpl->tpl_vars['reason']->value != '') {?>
            <div class="front__error">
               <span><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['reason']->value != '') {
echo $_smarty_tpl->tpl_vars['reason']->value;
}?></span>
            </div>
         <?php }?>
         <div class="front__login">
            <span>
               <label for="username">Username</label>
               <input id="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" name="username" type="text" placeholder="Username" />
            </span>
            <span>
               <label for="password">Password</label>
               <input id="password" name="password" type="password" placeholder="Password"/>
            </span>
         </div>
         <div class="front__set-cookie">
               <input type="checkbox" id="set_cookie" class="checkbox" <?php if ($_smarty_tpl->tpl_vars['set_cookie']->value == 1) {?>checked="checked"<?php }?> name="rememberme" />
               <label for="set_cookie">Keep me logged in</label>
         </div>
         <?php if ($_smarty_tpl->tpl_vars['showReset']->value == 1) {?>
            <a class="front__reset" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/recover">Or recover your password</a>
         <?php }?>
         <div class="front__submit">
            <button class="btn--primary">Login</button>
         </div>
      </form>
      <?php }?>
   </div>
   <div class="front__return">
      <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
">Go back</a>
   </div>
</section><?php }
}
