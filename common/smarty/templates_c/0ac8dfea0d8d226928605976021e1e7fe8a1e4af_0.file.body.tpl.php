<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 00:54:27
  from '/var/www/html/blog/templates/admin/body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edec1a3a7dba7_83688571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ac8dfea0d8d226928605976021e1e7fe8a1e4af' => 
    array (
      0 => '/var/www/html/blog/templates/admin/body.tpl',
      1 => 1591656026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edec1a3a7dba7_83688571 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html id="htmlTag" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['site']->value->meta_description;?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['site']->value->meta_keywords;?>
">
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/css/flickity.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/css/bootstrap.min.css">
    <!--[if lte IE 8]>
	    <meta http-equiv="refresh" content="0; url=<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/browser" />
    <![endif]-->

    <title><?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
 :: <?php echo $_smarty_tpl->tpl_vars['page']->value->page_title;?>
</title>
</head>
<body>

<div class="main-header">
<?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
    <div class="main-header__nav">
        <span>Welcome back <?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</span>
        <div class="admin-icons">
            <span>
                <a href="admin">
                    <i class="fas fa-tools"></i>
                </a>
            </span>
            <span>
                <a href="admin">
                    <i class="fas fa-user"></i>
                </a>
            </span>
        </div>
    </div>  
<?php }?>
</div>

<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="post-tools mb-3 mb-lg-0">
                    <div class="column-header">Blog tools</div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/admin/insert-post">Add a new blogpost</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/admin/view-posts">View blogposts</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/admin/settings">Blog settings</a>
                </div>
                <div class="view-popular d-none d-lg-flex">
                <div class="column-header">Popular blogs</div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['popular_posts']->value, 'popular');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['popular']->value) {
?>
                    <div class="popular-posts">
                        <?php if ($_smarty_tpl->tpl_vars['popular']->value['images']) {?>
                            <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['popular']->value['images']);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('image', "default_img");?>
                        <?php }?>
                        <div class="popular-post__image text-hide"
                             style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/images/thumbs/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
.jpg);">image</div>
                        <div class="popular-post__content"><?php echo $_smarty_tpl->tpl_vars['popular']->value['title'];?>
</div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
            <div class="col-12 col-lg-9"><?php echo $_smarty_tpl->tpl_vars['page']->value->content;?>
</div>
        </div>
    </div>
</div> 

<footer class="main-footer">
</footer>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/js/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/common/tiny_mce/tinymce.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/common/tiny_mce/jquery.tinymce.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/node_modules/flickity/dist/flickity.pkgd.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/js/script.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
