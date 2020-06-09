<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 10:15:25
  from '/var/www/html/blog/templates/default/body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edf451de7e119_88648665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec4cf9cc10b7d9330149a83494d86d4492b4043b' => 
    array (
      0 => '/var/www/html/blog/templates/default/body.tpl',
      1 => 1591690523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edf451de7e119_88648665 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 type="text/javascript">
    /* <![CDATA[ */	
        var WWW = "<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
";
    /* ]]> */
    <?php echo '</script'; ?>
>
</head>
<body>

<div class="main-header">
    <div class="container">
        <div class="main-header__nav">
            <div class="main-header__logo">
                <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
">
                    <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/img/logo.jpg" alt="logo" title="<?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
" />
                </a>
            </div>
            <div class="main-header__search">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/search/">
                    <input type="text" id="search" name="search" value="<?php echo $_smarty_tpl->tpl_vars['do_keywords']->value;?>
" placeholder="Search for blogs" />
                    <button type="submit" id="search_submit" class="button button--search">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
            <div class="nav-icons">
                <?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
                <span>
                    <a href="admin">
                        <i class="fas fa-tools"></i>
                    </a>
                </span>
                <?php }?>
                <span>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/user-account">
                        <i class="fas fa-user"></i>
                    </a>
                </span>
                <span>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/login?ac=log_out" title="Log out">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </span>
            </div>
            <?php }?>
        </div>
    </div>
</div>

<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9 mb-3 mb-lg-0"><?php echo $_smarty_tpl->tpl_vars['page']->value->content;?>
</div>
            <div class="col-12 col-lg-3 pl-lg-0">
                <?php if (!$_smarty_tpl->tpl_vars['logged_in']->value && $_smarty_tpl->tpl_vars['site']->value->activation) {?>
                <div class="main-content__login">
                    <div class="column-header">Member login</div>
                    <form action="login" method="post" class="front">
                        <div class="front__login">
                            <span>
                                <input id="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" name="uname" type="text" placeholder="Username" />
                                <input id="password" name="pword" type="password" placeholder="Password" />
                            </span>
                            <div class="front__options">
                                <button class="button button--primary">Login</button>
                                <ul>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/register">Register</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/recover">Recover</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
                <?php }?>
                <div class="column-header mb-2">Popular blogposts</div>
                <div class="main-content__popular">
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
                            <div class="popular-post__content">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/<?php echo $_smarty_tpl->tpl_vars['popular']->value['post_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['popular']->value['title'];?>
</a>
                            </div>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="column-header">Follow us</div>
                <div class="main-content__socials socials">
                    <?php if ($_smarty_tpl->tpl_vars['site']->value->facebook) {?>
                    <div class="socials__content content">
                        <span><i class="fab fa-facebook"></i></span>
                        <span>Facebook</span>
                        <span><a href="#">Link</a></span>
                    </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['site']->value->twitter) {?>
                    <div class="socials__content">
                        <span><i class="fab fa-twitter"></i></span>
                        <span>Twitter</span>
                        <span><a href="#">Follow us</a></span>
                    </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['site']->value->instagram) {?>
                    <div class="socials__content">
                        <span><i class="fab fa-instagram"></i></span>
                        <span>Instagram</span>
                        <span><a href="#">Follow us</a></span>
                    </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['site']->value->linkedin) {?>
                    <div class="socials__content">
                        <span><i class="fab fa-linkedin-in"></i></span>
                        <span>LinkedIn</span>
                        <span><a href="#">Follow us</a></span>
                    </div>
                    <?php }?>
                </div>
                </div>
            </div>
        </div>
    </div>
</div> 

<footer class="main-footer">
    <div class="container">
        <div class="footer-wrapper">
            <div class="main-footer__site">
                <span><?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['site']->value->strapline) {?>
                    <span><?php echo $_smarty_tpl->tpl_vars['site']->value->strapline;?>
</span>
                <?php }?>
            </div>
            <div class="main-footer__copyright">
                <span>Blog System 1.0 - 2020 &copy;</span>
            </div>
            <div class="main-footer__contact">
                <span>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['site']->value->admin_email;?>
"><?php echo $_smarty_tpl->tpl_vars['site']->value->admin_email;?>
</a>
                </span>
            </div>
        </div>
    </div>
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
/library/js/infinite-scroll.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/js/script.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
