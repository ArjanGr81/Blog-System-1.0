<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-14 23:11:11
  from '/var/www/html/racingforme/themes/templates/rfm_default/authentication/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebdb3ef5a8b69_02633150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ac62181934345652855f8a1e851c287fe9fa1ff' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/rfm_default/authentication/contact.tpl',
      1 => 1589490663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebdb3ef5a8b69_02633150 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="pane pane--front">
   <div class="front__wrapper">
      <form action="contact?action=submit" method="post" class="front">
          <?php if ($_smarty_tpl->tpl_vars['display']->value != '') {?>
            <div class="front__error">
                <span><?php echo $_smarty_tpl->tpl_vars['display']->value;?>
</span>
            </div>
          <?php }?>
          <span>
            <label for="username">Name</label>
            <input name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" type="text" placeholder="Username" />
          </span>
          <span>
            <label for="email">Email</label>
            <input name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" type="text" placeholder="Email address" />
          </span>
          <span>
            <label for="subject">Subject</label>
            <input name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" type="text" placeholder="Subject" />
          </span>
          <span>
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Your message here"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</textarea>
          </span>
          <span class="recover__submit">
            <button class="btn--primary">Submit</button>
          </span>
      </form>
   </div>
   <div class="front__return">
      <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
">Go back</a>
  </div>
</section><?php }
}
