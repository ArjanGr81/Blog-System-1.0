<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-14 23:14:15
  from '/var/www/html/racingforme/themes/templates/rfm_default/authentication/front.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebdb4a76cf2d6_61194979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9873d7a289181bb896285c35df863c18bef29c31' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/rfm_default/authentication/front.tpl',
      1 => 1589490808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebdb4a76cf2d6_61194979 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="pane pane--front">
	<div class="front__wrapper home">
		<ul>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/login">Login </a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/recover">Recover your password</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/contact">Contact</a></li>
			<div class="skewed-block"></div>
			<img class="logo--front d-none d-lg-block " src="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/img/logo.svg"
									title="<?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
" />
		</ul>
	</div>
</section>
<?php }
}
