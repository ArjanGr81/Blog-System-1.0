<section class="pane pane--search">
<div class="column-header">{if $keywords}Search results for "{$keywords}"{else}Blog archive{/if}</div>
    <div class="row">
        <div class="col-12 search_results">
            {foreach $search_results as $result}
                <div class="recent-post mb-3">
                    {if $result.images}
                        {assign var="image" value=$result.images}
                    {else}
                        {assign var="image" value="default_img"}
                    {/if}
                    <div class="recent-post__image text-hide"
                            style="background-image: url({$site->site_link}/images/thumbs/{$image}.jpg);">image</div>
                    <div class="recent-post__content content">
                        <div class="content__title">
                            <a href="{$site->site_link}/{$result.post_link}">{$result.title}</a>
                        </div>
                        <div class="content__data">
                            <span>{$result.username}</span>
                            <span>{$result.date|date_format: "%b %e, %Y"}</span>
                        </div>
                        <div class="content__text">{$result.body}</div>
                        <div class="content__comments">
                            {if $result.comments === null}0{else}{$result.comments}{/if} comment{if $result.comments <> 1}s{/if}
                        </div>
                    </div>
                </div>
            {/foreach}
            <div class="d-none">{$pager}</div>
        </div>
    </div>
</section>