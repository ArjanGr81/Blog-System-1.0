<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-14 22:47:04
  from '/var/www/html/racingforme/themes/templates/rfm_default/authentication/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebdae48aca8d7_74892171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d3c38ebf92e459f464b278dfbee855de5c3db80' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/rfm_default/authentication/register.tpl',
      1 => 1589489222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebdae48aca8d7_74892171 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="pane pane--front">
   <div class="front__wrapper">
      <form method="post" action="register">
      <?php if ($_smarty_tpl->tpl_vars['notice']->value != '') {?>
        <div class="front__error">
          <span><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</span>
        </div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['show_signup']->value != "0") {?>
          <span>
            <label for="username">Username</label>
            <input autocomplete="off" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" type="text" placeholder="Preferred username" />
          </span>
          <span>
            <label for="password">Password</label>
            <input autocomplete="off" id="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" type="password" placeholder="Password" />
          </span>
          <span>  
            <label for="confirmpassword">Confirm</label>
            <input autocomplete="off" id="confirmpassword" name="confirmpassword" value="<?php echo $_smarty_tpl->tpl_vars['confirmpassword']->value;?>
" type="password" placeholder="Confirm password" />
          </span>
          <span>  
            <label for="email">E-mail</label>
            <input autocomplete="off" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" type="text" placeholder="Email address" />
          </span>
          <span class="select-arrow">  
            <label for="location">Location</label>
            <select name="location" class="select-css"> 
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
            <input id="token" name="token" type="hidden" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
          </span>
          <span class="recover__submit">
            <button class="btn--primary">Register</button>
          </span>
          <span class="register__terms">
              <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/tandc" target="_blank">Terms and Conditions</a>
            </span>
            <?php }?>
      </form>
   </div>
   <div class="front__return">
      <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
">Go back</a>
   </div>
</section> <?php }
}
