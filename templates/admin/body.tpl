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
</head>
<body>

<div class="main-header">
{if $is_admin}
    <div class="main-header__nav">
        <span>Welcome back {$user->username}</span>
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
{/if}
</div>

<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="post-tools mb-3 mb-lg-0">
                    <div class="column-header">Blog tools</div>
                    <a href="{$site->site_link}/admin/insert-post">Add a new blogpost</a>
                    <a href="{$site->site_link}/admin/view-posts">View blogposts</a>
                    <a href="{$site->site_link}/admin/settings">Blog settings</a>
                </div>
                <div class="view-popular d-none d-lg-flex">
                <div class="column-header">Popular blogs</div>
                {foreach $popular_posts as $popular}
                    <div class="popular-posts">
                        {if $popular.images}
                            {assign var="image" value=$popular.images}
                        {else}
                            {assign var="image" value="default_img"}
                        {/if}
                        <div class="popular-post__image text-hide"
                             style="background-image: url({$site->site_link}/images/thumbs/{$image}.jpg);">image</div>
                        <div class="popular-post__content">{$popular.title}</div>
                    </div>
                {/foreach}
                </div>
            </div>
            <div class="col-12 col-lg-9">{strip}{$page->content}{/strip}</div>
        </div>
    </div>
</div> 

<footer class="main-footer">
</footer>

<script src="{$get_template_dir_url}/library/js/jquery-3.4.1.min.js"></script>
<script src="{$site->site_link}/common/tiny_mce/tinymce.min.js"></script>
<script src="{$site->site_link}/common/tiny_mce/jquery.tinymce.min.js"></script>
<script src="{$get_template_dir_url}/library/js/popper.min.js"></script>
<script src="{$get_template_dir_url}/library/js/bootstrap.min.js"></script>
<script src="{$get_template_dir_url}/library/node_modules/flickity/dist/flickity.pkgd.js"></script>
<script src="{$get_template_dir_url}/library/js/script.js"></script>

</body>
</html>