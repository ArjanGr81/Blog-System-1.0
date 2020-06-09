<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-05 16:37:23
  from '/var/www/html/racingforme/themes/templates/road_rash/authentication/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb17a237d6d21_94181266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5a594bd13205995f0ae489ce5e3f87be6ec1ef8' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/road_rash/authentication/login.tpl',
      1 => 1579346473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb17a237d6d21_94181266 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
   <div id="Error">
	   <span><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['error']->value != '' && $_smarty_tpl->tpl_vars['reason']->value != '') {?>
   <div id="Reason">
	   <span><?php echo $_smarty_tpl->tpl_vars['reason']->value;?>
</span>
	</div>
<?php }?>
  
<?php if ($_smarty_tpl->tpl_vars['show_login']->value != "0") {?>
<form action="login" method="post"> 
   <input type="hidden" name="redirect" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['redirect']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />  
	
   <div id="Register">
     <span class="Label"><label for="username">Username</label></span>
     <span class="Input"><input id="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" name="username" type="text" class="inpt" /></span>
   
     <span class="Label"><label for="password">Password</label></span>
     <span class="Input"><input id="password" name="password" type="password" class="inpt" /></span>
	 
	 <span class="Label">&nbsp;</span>
     <span class="Remember">
         <input id="rememberme" <?php if ($_smarty_tpl->tpl_vars['rememberme']->value == 1) {?>checked="checked"<?php }?> name="rememberme" type="checkbox" style="float: left; margin-top: 1px;" />
         <span style="float: left; width: 170px; text-align: right;">Keep me logged in</span>
     </span>
     <?php if ($_smarty_tpl->tpl_vars['showReset']->value == 1) {?><a id="showReset" href="/recover">Recover your password</a><?php }?>
     <input type="submit" value="Login" class="btn" />
   </div>
</form>
<?php }?>

<?php }
}
