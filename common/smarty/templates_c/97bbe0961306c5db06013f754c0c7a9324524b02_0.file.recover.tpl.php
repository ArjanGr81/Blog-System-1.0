<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-14 20:56:43
  from '/var/www/html/racingforme/themes/templates/rfm_default/authentication/recover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebd946b0ccca7_87396605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97bbe0961306c5db06013f754c0c7a9324524b02' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/rfm_default/authentication/recover.tpl',
      1 => 1589482573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebd946b0ccca7_87396605 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="pane pane--front">
  <div class="front__wrapper">
    <form action="recover" method="post" class="front">
    <?php if ($_smarty_tpl->tpl_vars['display']->value != '') {?>
      <div class="front__error">
        <span><?php echo $_smarty_tpl->tpl_vars['display']->value;?>
</span>
      </div>
    <?php }?>
      <span class="recover__span">
          <label for="username">Username or Email</label>
          <input id="username" name="username" type="text" class="recover" placeholder="Username or email address" />
          <button class="btn--primary">Recover</button>
      </span>
    </form>
  </div>
  <div class="front__return">
      <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
">Go back</a>
  </div>
</section><?php }
}
