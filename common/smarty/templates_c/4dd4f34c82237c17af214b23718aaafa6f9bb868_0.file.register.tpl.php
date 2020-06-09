<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-13 20:31:18
  from '/var/www/html/racingforme/themes/templates/road_rash/authentication/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebc3cf63026d9_41121988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dd4f34c82237c17af214b23718aaafa6f9bb868' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/road_rash/authentication/register.tpl',
      1 => 1579346473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebc3cf63026d9_41121988 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<?php if ($_smarty_tpl->tpl_vars['notice']->value != '') {?>
   <div id="Error">
	   <span><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</span>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['show_signup']->value != "0") {?>
<form method="post" action="register?action=submit">
 <div id="Register">
   <span class="Label"><label for="username">Username</label></span>
   <span class="Input"><input autocomplete="off" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" type="text" class="inpt" /></span>
   
   <span class="Label"><label for="password">Password</label></span>
   <span class="Input"><input autocomplete="off" id="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" type="password" class="inpt" /></span>
   
   <span class="Label"><label for="confirmpassword">Confirm password</label></span>
   <span class="Input"><input autocomplete="off" id="confirmpassword" name="confirmpassword" value="<?php echo $_smarty_tpl->tpl_vars['confirmpassword']->value;?>
" type="password" class="inpt" /></span>
   
   <span class="Label"><label for="email">E-mail address</label></span>
   <span class="Input"><input autocomplete="off" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" type="text" class="inpt" /></span>
   
   <span class="Label"><label for="location">Location</label></span>
   <span class="Input">
	   <select name="location" class="drop_down"> 
		 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
           <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['country']->value['domain'] != '' && $_smarty_tpl->tpl_vars['country']->value['domain'] == $_smarty_tpl->tpl_vars['hostname']->value || $_smarty_tpl->tpl_vars['country']->value['id'] == $_smarty_tpl->tpl_vars['location']->value) {?>selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>
</option>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
       </select>
   </span>
   
   <input id="token" name="token" type="hidden" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
   
   <span class="Submit"><input type="submit" value="Register" class="btn"/></span>
 </div>
</form>
<span style="position: absolute; top: 50%; left: 50%; margin-top: 217px; margin-left: 250px; width: 120px; font: 11px arial, non-serif; letter-spacing: 0.5px; color: #5d5d5d; text-align: right;"><a href="/tandc" target="_blank">Terms and Conditions</a></span>
<?php }
}
}
