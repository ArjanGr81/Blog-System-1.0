<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-05 16:37:23
  from '/var/www/html/racingforme/themes/templates/road_rash/authentication/basepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb17a2380c5f2_82837096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d20c238c494c4a603f7ff572cd5c1fc34f74011' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/road_rash/authentication/basepage.tpl',
      1 => 1579346473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb17a2380c5f2_82837096 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<meta name="Author" content="Arjan Groeneveld" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="themes/styles/road_rash/front.css" type="text/css" />
<link rel="stylesheet" href="themes/styles/road_rash/dyndd.css" type="text/css" />
<title><?php echo $_smarty_tpl->tpl_vars['page']->value->meta_title;?>
 :: <?php echo $_smarty_tpl->tpl_vars['site']->value->code;?>
 v<?php echo $_smarty_tpl->tpl_vars['site']->value->version;?>
</title>
</head>

<body>

<div id="Inner">
  <span><a href="/"><img src="themes/styles/road_rash/images/header/rfm_front.png" alt="RFM" style="vertical-align: middle;" style="border: none;" /></a></span>
  <span style="text-transform: uppercase;">Welcome to <?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
</span>
   <?php echo $_smarty_tpl->tpl_vars['page']->value->content;?>

</div>

</body>
</html><?php }
}
