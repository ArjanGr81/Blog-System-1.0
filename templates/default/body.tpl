<!DOCTYPE html>
<html id="htmlTag" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{$site->meta_description}">
    <meta name="keywords" content="{$site->meta_keywords}">
    <link rel="icon" href="{$site->site_link}/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="{$site->site_link}/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="{$get_template_dir_url}/library/css/style.css" type="text/css">
    <link rel="stylesheet" href="{$get_template_dir_url}/library/css/flickity.min.css">
    <link rel="stylesheet" href="{$get_template_dir_url}/library/css/bootstrap.min.css">
    <!--[if lte IE 8]>
	    <meta http-equiv="refresh" content="0; url={$site->site_link}/browser" />
    <![endif]-->

    <title>{$site->title} :: {$page->page_title}</title>
    <script type="text/javascript">
    /* <![CDATA[ */	
        var WWW = "{$site->site_link}";
    /* ]]> */
    </script>
</head>
<body>

<div class="main-header">
    <div class="container">
        <div class="main-header__nav">
            <div class="main-header__logo">
                <a href="{$site->site_link}">
                    <img class="logo" src="{$get_template_dir_url}/library/img/logo.jpg" alt="logo" title="{$site->title}" />
                </a>
            </div>
            <div class="main-header__search">
                <form method="post" action="{$site->site_link}/search/">
                    <input type="text" id="search" name="search" value="{$do_keywords}" placeholder="Search for blogs" />
                    <button type="submit" id="search_submit" class="button button--search">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            {if $logged_in}
            <div class="nav-icons">
                {if $is_admin}
                <span>
                    <a href="admin">
                        <i class="fas fa-tools"></i>
                    </a>
                </span>
                {/if}
                <span>
                    <a href="{$site->site_link}/user-account">
                        <i class="fas fa-user"></i>
                    </a>
                </span>
                <span>
                    <a href="{$site->site_link}/login?ac=log_out" title="Log out">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </span>
            </div>
            {/if}
        </div>
    </div>
</div>

<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9 mb-3 mb-lg-0">{strip}{$page->content}{/strip}</div>
            <div class="col-12 col-lg-3 pl-lg-0">
                {if !$logged_in && $site->activation}
                <div class="main-content__login">
                    <div class="column-header">Member login</div>
                    <form action="login" method="post" class="front">
                        <div class="front__login">
                            <span>
                                <input id="username" value="{$username}" name="uname" type="text" placeholder="Username" />
                                <input id="password" name="pword" type="password" placeholder="Password" />
                            </span>
                            <div class="front__options">
                                <button class="button button--primary">Login</button>
                                <ul>
                                    <li><a href="{$site->site_link}/register">Register</a></li>
                                    <li><a href="{$site->site_link}/recover">Recover</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
                {/if}
                <div class="column-header mb-2">Popular blogposts</div>
                <div class="main-content__popular">
                    {foreach $popular_posts as $popular}
                        <div class="popular-posts">
                            {if $popular.images}
                                {assign var="image" value=$popular.images}
                            {else}
                                {assign var="image" value="default_img"}
                            {/if}
                            <div class="popular-post__image text-hide"
                                style="background-image: url({$site->site_link}/images/thumbs/{$image}.jpg);">image</div>
                            <div class="popular-post__content">
                                <a href="{$site->site_link}/{$popular.post_link}">{$popular.title}</a>
                            </div>
                        </div>
                    {/foreach}
                </div>
                <div class="column-header">Follow us</div>
                <div class="main-content__socials socials">
                    {if $site->facebook}
                    <div class="socials__content content">
                        <span><i class="fab fa-facebook"></i></span>
                        <span>Facebook</span>
                        <span><a href="#">Link</a></span>
                    </div>
                    {/if}
                    {if $site->twitter}
                    <div class="socials__content">
                        <span><i class="fab fa-twitter"></i></span>
                        <span>Twitter</span>
                        <span><a href="#">Follow us</a></span>
                    </div>
                    {/if}
                    {if $site->instagram}
                    <div class="socials__content">
                        <span><i class="fab fa-instagram"></i></span>
                        <span>Instagram</span>
                        <span><a href="#">Follow us</a></span>
                    </div>
                    {/if}
                    {if $site->linkedin}
                    <div class="socials__content">
                        <span><i class="fab fa-linkedin-in"></i></span>
                        <span>LinkedIn</span>
                        <span><a href="#">Follow us</a></span>
                    </div>
                    {/if}
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
                <span>{$site->title}</span>
                {if $site->strapline}
                    <span>{$site->strapline}</span>
                {/if}
            </div>
            <div class="main-footer__copyright">
                <span>Blog System 1.0 - 2020 &copy;</span>
            </div>
            <div class="main-footer__contact">
                <span>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:{$site->admin_email}">{$site->admin_email}</a>
                </span>
            </div>
        </div>
    </div>
</footer>

<script src="{$get_template_dir_url}/library/js/jquery-3.4.1.min.js"></script>
<script src="{$site->site_link}/common/tiny_mce/tinymce.min.js"></script>
<script src="{$site->site_link}/common/tiny_mce/jquery.tinymce.min.js"></script>
<script src="{$get_template_dir_url}/library/js/popper.min.js"></script>
<script src="{$get_template_dir_url}/library/js/bootstrap.min.js"></script>
<script src="{$get_template_dir_url}/library/js/infinite-scroll.min.js"></script>
<script src="{$get_template_dir_url}/library/js/script.js"></script>

</body>
</html>