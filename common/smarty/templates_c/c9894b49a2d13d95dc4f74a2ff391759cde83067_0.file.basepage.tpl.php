<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-13 20:43:37
  from '/var/www/html/racingforme/themes/templates/rfm_default/authentication/basepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebc3fd95b0158_86555043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9894b49a2d13d95dc4f74a2ff391759cde83067' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/rfm_default/authentication/basepage.tpl',
      1 => 1589395398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebc3fd95b0158_86555043 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html id="htmlTag" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/favicon_32.png" sizes="32x32">
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/favicon.png" sizes="192x192">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/css/bootstrap.min.css">
    <!--[if lte IE 8]>
	    <meta http-equiv="refresh" content="0; url=<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/browser" />
    <![endif]-->
    <title><?php echo $_smarty_tpl->tpl_vars['page']->value->meta_title;?>
 :: <?php echo $_smarty_tpl->tpl_vars['site']->value->code;?>
 v<?php echo $_smarty_tpl->tpl_vars['site']->value->version;?>
</title>
</head>
<body class="body--front">
<div class="main-content">
<?php echo $_smarty_tpl->tpl_vars['page']->value->content;?>

</div> 
</body>
</html><?php }
}
