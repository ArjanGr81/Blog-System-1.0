<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-16 17:56:51
  from '/var/www/html/racingforme/themes/templates/rfm_default/basepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec00d4319a750_83880621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8377b0f2cbabfe5a2e9f1e4bf9d9a9d899e508df' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/rfm_default/basepage.tpl',
      1 => 1589644609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec00d4319a750_83880621 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html id="htmlTag" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/css/style.css" type="text/css">
    <link rel="alternate" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/rss/<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['torrent_pass']->value;?>
" title="RFM Torrents RSS Feed" type="application/rss+xml">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/themes/styles/common/imgareaselect-default.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/css/flickity.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/css/bootstrap.min.css">
    <!--[if lte IE 8]>
	    <meta http-equiv="refresh" content="0; url=<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/browser" />
    <![endif]-->

    <?php echo '<script'; ?>
 type="text/javascript">
    /* <![CDATA[ */	
        var WWW_TOP = "<?php echo @constant('WWW_TOP');?>
";
            var CID = "<?php echo $_smarty_tpl->tpl_vars['pageID']->value;?>
";
            var CNAME = "<?php echo $_smarty_tpl->tpl_vars['subPage']->value;?>
";
            var CLAST = "<?php echo $_smarty_tpl->tpl_vars['lastPage']->value;?>
";
    /* ]]> */
    <?php echo '</script'; ?>
>

    <title><?php echo $_smarty_tpl->tpl_vars['page']->value->meta_title;?>
 :&brvbar;&brvbar;: <?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
</title>
</head>
<body>

<!--// <?php echo $_smarty_tpl->tpl_vars['createMessage']->value;?>
 //-->

<!--// <?php echo $_smarty_tpl->tpl_vars['showChatBox']->value;?>
 //-->

<div class="main-header">
    <div class="meta-nav">
        <div class="meta-nav__date">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['date_time']->value, 'date_part');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['date_part']->value) {
?>
                <span><?php echo $_smarty_tpl->tpl_vars['date_part']->value;?>
</span>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="meta-nav__navigation">
            <ul class="nav nav--meta">
                <li class="nav--meta__item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/messages">private messages</a>
                </li>
                <li class="nav--meta__item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/info/faq">faq</a>
                </li>
                <li class="nav--meta__item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/info/rules">rules</a>
                </li>
                <li class="nav--meta__item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/info">site log</a>
                </li>
            </ul>
        </div>
        <div class="meta-nav__icons">
            <i class="fas fa-search"></i>
            <i class="fas fa-user"></i>
        </div>
        <div class="meta-nav__user">
            <ul class="nav nav--user">
                <li class="nav--user__item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/profile">user cp</a>
                </li>
                <li class="nav--user__item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/profile/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['username']->value, 'UTF-8');?>
">view profile</a>
                </li>
                <li class="nav--user__item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/logout">log out</a>
                </li>
            </ul>
        </div>

        <div class="meta-nav__search search">
            <form action="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/search/" method="get">
                <div class="search__wrapper">
                    <div class="search__default">
                        <span class="d-block d-lg-none">Use <strong>^</strong> in front of your keyword to search items that start with that particular keyword.<br />Use <strong>!</strong> to exclude keywords from search items.<span>Example: <strong>^</strong>formula canada <strong>!</strong>xvid</span></span>
                        <label class="d-none d-lg-flex" for="info" title="Use '^' in front of your keyword to search items that start with that particular keyword. Use ! to exclude keywords from search items ( ex. ^formula canada !xvid )">i</label>
                        <div class="search__bar">
                            <input id="search" class="search__input" name="search" value="<?php if ($_smarty_tpl->tpl_vars['searchValue']->value == "*") {?>Enter keywords<?php } else {
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['searchValue']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}?>" type="text" placeholder="Enter keywords" />
                            <button class="search__button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <i id="search__close" class="fas fa-times"></i>
                        <a id="search__advanced-btn" class="search__options">Advanced options</a>
                    </div>
                    <div class="search__advanced">
                        <div class="advanced__wrapper">
                        <ul>
                            <li class="order-1">
                                <div class="search__field">
                                    <label for="search_title" class="advSearchOption">title</label>
                                    <input type="checkbox" class="checkbox" id="search_title" disabled="disabled" checked />
                                </div>
                                <span class="search__info d-block d-lg-none">Search in title (default)</span>
                            </li>
                            <li class="order-2">
                                <div class="search__field">
                                    <label for="search_descr" class="advSearchOption">description</label>
                                    <input type="checkbox" class="checkbox" name="search_descr" id="search_descr" <?php if ($_smarty_tpl->tpl_vars['searchDescr']->value == 1) {?>checked<?php }?> />
                                </div>
                                <span class="search__info d-block d-lg-none">Search in description as well as title</span>
                            </li>
                            <li id="show__search-categories" class="order-4 order-lg-3">
                                <div class="search__field">
                                    <label for="search_cat" class="advSearchOption">category</label>
                                    <input type="checkbox" class="checkbox" id="search_cat" <?php if ($_smarty_tpl->tpl_vars['selectedCat']->value > 0) {?>checked<?php }?> />
                                </div>
                                <div class="advanced__categories"><?php echo $_smarty_tpl->tpl_vars['catDropDown']->value;?>
</div>
                            </li>
                            <li id="show__search-dates" class="order-5 order-lg-4">
                                <div class="search__field">
                                    <label for="search_dates" class="advSearchOption">date range</label>
                                    <input type="checkbox" class="checkbox" id="search_dates" <?php if ($_smarty_tpl->tpl_vars['sDateSet']->value == 1) {?>checked<?php } elseif ($_smarty_tpl->tpl_vars['eDateSet']->value == 1) {?>checked<?php }?> />
                                </div>
                                <ul class="advanced__dates">
                                    <li>
                                        <input class="searchDateStart" type="text" name="startdate" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['startDate']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="startDate" placeholder="Min (Y [-M-D])" />
                                    </li>
                                    <li>
                                        <input class="searchDateEnd" type="text" name="enddate" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['endDate']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="endDate" placeholder="Max (Y [-M-D])" />
                                    </li>
                                </ul>
                            </li>
                            <li class="order-3 order-lg-5">
                                <div class="search__field">
                                    <label for="search_nzb" class="advSearchOption">NZB</label>
                                    <input type="checkbox" class="checkbox" id="search_nzb" <?php if ($_smarty_tpl->tpl_vars['sNzb']->value == "1") {?>checked<?php }?> />
                                </div>
                                <span class="search__info d-block d-lg-none">Search for NZB's instead of torrents</span>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <div class="main-header__nav">
        <div class="main-header__logo">
            <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
" target="">
                <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/img/logo.svg"
                     title="<?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
" />
            </a>
        </div>
        <div class="main-header__mobile-nav">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="main-header__navigation">
            <ul class="nav nav--primary">
                <li class="nav--primary__item" id="torrent">
                    <label>torrents</label>
                    <i class="fas fa-caret-right"></i>
                    <ul class="sub-menu">
                        <li class="list-item">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/categories">view categories</a>
                        </li>
                        <li class="list-item">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/torrents">browse torrents</a>
                        </li>
                        <li class="list-item">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/upload">upload torrent</a>
                        </li>
                    </ul>
                </li>
                <li class="nav--primary__item" id="nzb">
                    <label>nzb's</label>
                    <i class="fas fa-caret-right"></i>
                    <ul class="sub-menu">
                        <li class="list-item">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/categories/nzb">view categories</a>
                        </li>
                        <li class="list-item">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/nzbs">browse nzb's</a>
                        </li>
                        <li class="list-item">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/upload/nzb">upload nzb</a>
                        </li>
                    </ul>
                </li>
                <li class="nav--primary__item">
                    <label>forums</label>
                </li>
                <li class="nav--primary__item">
                    <label>live chat</label>
                </li>
                <li class="nav--primary__donations">
                    <span>donations</span>
                    <span style="width: calc(<?php echo $_smarty_tpl->tpl_vars['donateStatus']->value;?>
% + 3px);"></span>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="main-content">
<?php echo $_smarty_tpl->tpl_vars['page']->value->content;?>

</div> 

<footer class="main-footer">
    <div class="container-fluid">
        <div class="footer-links">
            <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/tandc" class="footer-links__anchor" target="_blank">terms &amp; conditions</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/changelog" class="footer-links__anchor" target="_blank">changelog</a>
        </div>
        <div class="footer-site">
            <div class="footer-logos">
                <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/rss/<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['torrent_pass']->value;?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
 RSS Feed">
                    <i class="fas fa-rss"></i>
                </a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/donate" target="" title="Support <?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
">
                    <i class="fas logo-paypal">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/img/paypal-footer.png" />
                    </i>
                </a>
                <a href="https://www.facebook.com/pages/Racing-For-Me/118677034903647" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
 on Facebook">
                    <i class="fab logo-facebook">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/img/facebook-footer.png" />
                    </i>
                </a>
                <span class="logo logo--crankshaft text-hide" title="Build on crankShaft">crankshaft</span>
            </div>
            <div class="copyright"><?php echo $_smarty_tpl->tpl_vars['license']->value;?>
</div>
        </div>
    </div>
</footer>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/js/jquery-3.4.1.min.js"><?php echo '</script'; ?>
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
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/js/basepage.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/themes/styles/common/scripts/mustache.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/themes/styles/common/scripts/lightbox-2.6.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/common/tiny_mce_4.6.3/tinymce.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/themes/styles/common/scripts/jquery.imgareaselect.pack.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
