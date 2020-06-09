<section class="pane pane--default">
        <div class="row mb-3">
            {foreach $show_posts as $post}
                {if $post@iteration == 1}
                    <div class="col-12 col-md-7 col-lg-8 pr-lg-0">
                        <div class="main-post">
                            {if $post.images}
                                {assign var="image" value=$post.images}
                            {else}
                                {assign var="image" value="default_img"}
                            {/if}
                            <div class="main-post__image text-hide"
                                 style="background-image: url({$site->site_link}/images/{$image}.jpg);">image</div>
                            <div class="main-post__header">
                                <a href="{$post.post_link}">{$post.title}</a>
                            </div>
                            <div class="main-post__data">
                                <span>{$post.username}</span>
                                <span>{$post.date|date_format: "%b %e, %Y"}</span>
                            </div>
                            <div class="main-post__content">{$post.body}</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4">
                        {else if $post@iteration == 2}
                            <div class="top-side-post mt-3 mt-md-0">
                                {if $post.images}
                                    {assign var="image" value=$post.images}
                                {else}
                                    {assign var="image" value="default_img"}
                                {/if}
                                <a href="{$post.post_link}">
                                    <div class="top-side-post__image text-hide"
                                        style="background-image: url({$site->site_link}/images/thumbs/{$image}.jpg);">image</div>
                                    <div class="top-side-post__title">
                                        <a href="{$post.post_link}">{$post.title}</a>
                                    </div>
                                    <div class="top-side-post__data">
                                        <span>{$post.username}</span>
                                        <span>{$post.date|date_format: "%b %e, %Y"}</span>
                                    </div>
                                </a>
                            </div>
                        {else if $post@iteration == 3}
                            <div class="top-side-post mt-3">
                                {if $post.images}
                                    {assign var="image" value=$post.images}
                                {else}
                                    {assign var="image" value="default_img"}
                                {/if}
                                <a href="{$post.link_url}">
                                    <div class="top-side-post__image text-hide"
                                        style="background-image: url({$site->site_link}/images/thumbs/{$image}.jpg);">image</div>
                                    <div class="top-side-post__title">
                                        <a href="{$post.post_link}">{$post.title}</a>
                                    </div>
                                    <div class="top-side-post__data">
                                        <span>{$post.username}</span>
                                        <span>{$post.date|date_format: "%b %e, %Y"}</span>
                                    </div>
                                </a>
                            </div>
                    </div>
                {/if}
            {/foreach}
        </div>
        <div class="row">
            <div class="col-12">
                <div class="front-divider mb-3">Recent posts</div>
                <div class="row">
            {foreach $recent_posts as $recent}
                <div class="col-12 col-md-6 col-lg-12 px-md-2 pr-lg-3">
                    <div class="recent-post mb-3">
                        {if $recent.images}
                            {assign var="image" value=$recent.images}
                        {else}
                            {assign var="image" value="default_img"}
                        {/if}
                        <div class="recent-post__image{if $recent@iteration > 3} d-none{/if} text-hide"
                             style="background-image: url({$site->site_link}/images/thumbs/{$image}.jpg);">image</div>
                        <div class="recent-post__content{if $recent@iteration > 3} w-100{/if} content">
                            <div class="content__title">
                                <a href="{$recent.post_link}">{$recent.title}</a>
                            </div>
                            <div class="content__data">
                                <span>{$recent.username}</span>
                                <span>{$recent.date|date_format: "%b %e, %Y"}</span>
                            </div>
                            <div class="content__text{if $recent@iteration > 3} pb-2{/if}">{$recent.body}</div>
                            <div class="content__comments{if $recent@iteration > 3} d-none{/if}">
                                {if $recent.comments === null}0{else}{$recent.comments}{/if} comment{if $recent.comments <> 1}s{/if}
                            </div>
                        </div>
                    </div>
                </div>
            {/foreach}
            </div>
        </div>
</section>