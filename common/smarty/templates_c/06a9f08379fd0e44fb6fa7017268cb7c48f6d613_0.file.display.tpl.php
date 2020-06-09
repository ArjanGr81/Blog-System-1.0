<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-05 16:37:34
  from '/var/www/html/racingforme/themes/templates/road_rash/display.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb17a2e417156_32131437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06a9f08379fd0e44fb6fa7017268cb7c48f6d613' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/road_rash/display.tpl',
      1 => 1579346473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb17a2e417156_32131437 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">	
<head>		
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="refresh" content="5;url=/" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

<title>&nbsp;<?php echo $_smarty_tpl->tpl_vars['page']->value->meta_title;?>
 :&brvbar;&brvbar;: <?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
</title>
<style>
@font-face { font-family: orbitron; src: url('/themes/styles/fonts/orbitron-bold.ttf'); }
html, body { top: 0; background-image: url('/themes/styles/road_rash/images/header/background.jpg'); background-position: center 25px; background-repeat: no-repeat; background-attachment: fixed; background-color: #000; cursor: default; font-family: orbitron; font-size: 30px; }
#Outer { position: absolute; top: 50%; left: 50%; width: 641px; margin-top: -180px; margin-left: -325px; padding: 0px 4px 2px 2px; font: 20px orbitron; color: #000; text-align: right; background: #fe9500; border-radius: 10px 10px 10px 10px; -webkit-border-radius: 10px 10px 10px 10px; -moz-border-radius: 10px 10px 10px 10px; opacity:0.7; -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=70)"; behavior: url('/common/pie100/PIE.htc'); }
#Inner { position: relative; width: 623px; padding: 5px 10px 5px 10px; font: 24px orbitron; color: #fff; text-align: right; background-image: url('/themes/styles/road_rash/images/header/code.jpg'); background-repeat: no-repeat; opacity:1.0; -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=70)"; }
#Timer { position: relative; width: 633px; padding: 0px 2px 2px 10px; background: #fe9500; border-radius: 0px 0px 10px 10px; -webkit-border-radius: 0 0 10px 10px; -moz-border-radius: 0 0 10px 10px; opacity:0.7; -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=70)"; behavior: url('/common/pie100/PIE.htc'); }
</style>
</head>

<body>

<div id="Outer">
  <span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
   <div id="Inner"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
   <div id="Timer"><?php echo '<script'; ?>
 type="text/javascript" src="themes/styles/road_rash/scripts/timer_bar.js"><?php echo '</script'; ?>
></div>
</div>

</body>
</html><?php }
}
