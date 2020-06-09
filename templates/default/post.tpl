<section class="pane pane--post">
    <div class="column-header">{$post_data.title}</div>
    <div class="single-post">
        {if $post_data.images}
            {assign var="image" value=$post_data.images}
        {else}
            {assign var="image" value="default_img"}
        {/if}
        <div class="single-post__image text-hide"
                style="background-image: url({$site->site_link}/images/{$image}.jpg);">image</div>
        <div class="single-post__header">{$title}</div>
        <div class="single-post__data">
            <span>{$author}</span>
            <span>{$post_data.date|date_format: "%b %e, %Y"}</span>
            <span>Estimated reading time {$read_time}</span>
        </div>
        <div class="single-post__content">{$post_content}</div>
    </div>
</section>

<section id="comments" class="pane pane--comments">
    <div class="comment-divider my-3">Comments</div>
    <div id="show_insert_box" class="add-comment {if $is_edit || $is_reply}d-flex{/if}">
        <div class="add-comment__content">
            <label id="insert-label">{if $is_reply}Reply to{elseif $is_edit}Edit{else}Add{/if} a comment</label>
            <form method="post" action="">
                <button type="submit" class="add-comment__submit" title="Submit comment">
                    <i class="fas fa-check"></i>
                </button>
                <a id="close_insert_box" class="add-comment__exit" title="Cancel"{if $is_reply || $is_edit} onclick="window.history.back();"{/if}>
                    <i class="fas fa-times"></i>
                </a>
                {if $is_reply}
                    <div class="show-reply">
                        <div class="context__username">
                            {$reply_author}
                        </div>
                        <div class="context__date">{$reply_date|date_format: "%A %B %e %Y, %r"}</div>
                        <div class="context__title">{$reply_title}</div>
                        <div class="context__text">{$reply_body}</div>
                    </div>
                    <input type="hidden" name="reply_id" value="{$reply_id}" />
                {/if}
                <div class="add-comment__title">
                    <input type="text" name="title" id="insert-title" value="{$edit_title}" placeholder="Add a title (optional)..." />
                </div>
                <div id="add-comment">
                    <textarea name="body" id="insert-box" class="insert-text" placeholder="Add your comment...">{$edit_body}</textarea>
                    <input type="hidden" name="action" value="insert" />
                    <input type="hidden" name="offset" value="{$offset}" />
                    <input type="hidden" name="id" value="{$show_id}" />
                </div>
            </form>
        </div>
    </div>
    {foreach $comments as $comment}
        {if $comment.avatar}
            {assign var="avatar" value=$comment.avatar}
        {else}
            {assign var="avatar" value="default_avatar"}
        {/if}
        <div class="single-comment">
            <div class="delete-comment">
                <span>Are you sure you want to delete this comment?</span>
                <form method="post" action="">
                    <input type="hidden" name="id" value="{$comment.id}" />
                    <input type="hidden" name="offset" value="{$offset}" />
                    <input type="hidden" name="action" value="delete" />
                    <button type="submit">
                        <i class="fas fa-trash-alt" title="Delete post"></i>
                    </button>
                    <i class="fas fa-times" title="Cancel"></i>
                </form>
            </div>
            {if $logged_in}
                <a class="single-comment__reply" id="doReply" href="{$site->site_link}/{$post_data.post_link}{$offset}&do=rpl{$comment.id}#comments" title="Reply to comment">
                    <i class="fas fa-reply"></i>
                </a>
                {if $comment.author == $user->id or $is_admin}
                    <a class="single-comment__edit" href="{$site->site_link}/{$post_data.post_link}{$offset}&do=edt{$comment.id}#comments" title="Edit comment">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a class="single-comment__delete" title="Remove comment">
                        <i class="fas fa-times"></i>
                    </a>
                {/if}
            {/if}
            <div class="single-comment__user user">
                <div class="user__avatar text-hide"
                     style="background-image: url({$site->site_link}/images/avatars/{$avatar}.jpg);">avatar</div>
                <div class="user__data data">
                    <div class="data__username">
                        {if $comment.username != ''}
                            {$comment.username}
                        {else}
                            <span>Unavailable</span>
                        {/if}
                    </div>
                    <div class="data__date">{$comment.date|date_format: "%b %e, %Y"}</div>
                </div>
            </div>
            {if $comment.title}
                <div class="single-comment__title">{$comment.title}</div>
            {/if}
            <div class="single-comment__content">{$comment.body}</div>
            <div class="single-comment__likes">
            {assign var="like_active" value=$comment.like_unlike == like}
            {assign var="unlike_active" value=$comment.like_unlike == unlike}
            {assign var="disabled" value=$comment.author == $user->id}
                <form method="post" action="{$site->site_link}/{$post_data.post_link}">
                    <input type="radio" name="type" value="like" class="radiobox_like {if $like_active}active{/if}" {if $logged_in && $like_active}checked{/if} {if !$logged_in || $disabled}disabled{/if} />
                    <div class="count-likes" id="{$comment.id}_like">{$comment.like_count}</div>
                    <input type="radio" name="type" value="unlike" class="radiobox_unlike {if $unlike_active}active{/if}" {if $logged_in && $unlike_active}checked{/if} {if !$logged_in || $disabled}disabled{/if} />
                    <div class="count-likes" id="{$comment.id}_unlike">{$comment.unlike_count}</div>
                    <input type="hidden" name="id" value="{$comment.id}" />
                </form>
            </div>
            {if $comment.replies != NULL}
                <div class="single-comment__replies">
                {foreach from=$comment.replies item=reply}
                    {if $reply.avatar}
                        {assign var="avatar" value=$reply.avatar}
                    {else}
                        {assign var="avatar" value="default_avatar"}
                    {/if}
                    <div class="replies-content">
                        <div class="delete-reply">
                            <span>Are you sure you want to delete this reply?</span>
                            <form method="post" action="">
                                <input type="hidden" name="offset" value="{$offset}" />
                                <input type="hidden" name="id" value="{$reply.id}" />
                                <input type="hidden" name="action" value="delete" />
                                <button type="submit">
                                    <i class="fas fa-trash-alt" title="Delete post"></i>
                                </button>
                                <i class="fas fa-times" title="Cancel"></i>
                            </form>
                        </div>
                        {if $logged_in}
                            <a class="reply" href="{$site->site_link}/{$post_data.post_link}{$offset}?do=rpl{$comment.id}#comments" title="Reply to comment">
                                <i class="fas fa-reply"></i>
                            </a>
                            {if $reply.author == $user->id or $is_admin}
                                <a class="reply__edit" href="{$site->site_link}/{$post_data.post_link}{$offset}&do=edt{$reply.id}#comments" title="Edit reply">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a class="reply__delete" title="Remove reply">
                                    <i class="fas fa-times"></i>
                                </a>
                            {/if}
                        {/if}
                        <div class="replies-content__data user">
                            <div class="user__avatar text-hide"
                                style="background-image: url({$site->site_link}/images/avatars/{$avatar}.jpg);">avatar</div>
                            <div class="user__data data">
                                <div class="data__username">
                                    {if $reply.username != ''}
                                        {$reply.username}
                                    {else}
                                        <span>Unavailable</span>
                                    {/if}
                                </div>
                                <div class="data__date">{$reply.date|date_format: "%b %e, %Y"}</div>
                            </div>
                        </div>
                        {if $reply.title}
                            <div class="replies-content__title">{$reply.title}</div>
                        {/if}
                        <div class="replies-content__text">{$reply.body}</div>
                        <div class="replies-content__likes">
                            {assign var="like_active" value=$reply.like_unlike == like}
                            {assign var="unlike_active" value=$reply.like_unlike == unlike}
                            {assign var="disabled" value=$reply.author == $user->id}
                            <form method="post" action="{$site->site_link}/{$post_data.post_link}">
                                <input type="radio" name="type" value="like" class="radiobox_like {if $like_active}active{/if}" {if $logged_in && $like_active}checked{/if} {if !$logged_in || $disabled}disabled{/if} />
                                <div class="count-likes" id="{$reply.id}_like">{$reply.like_count}</div>
                                <input type="radio" name="type" value="unlike" class="radiobox_unlike {if $unlike_active}active{/if}" {if $logged_in && $unlike_active}checked{/if} {if !$logged_in || $disabled}disabled{/if} />
                                <div class="count-likes" id="{$reply.id}_unlike">{$reply.unlike_count}</div>
                                <input type="hidden" name="id" value="{$reply.id}" />
                            </form>
                        </div>
                    </div>
                {/foreach}
                </div>
            {/if}
        </div>
    {/foreach}
</section>
<div class="comments-footer">
    {if $logged_in}
        <a href="#comments" class="button button--primary" id="add_comment">Add a comment</a>
    {/if}
    {$pager}
    </div>