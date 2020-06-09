<section class="pane pane--all-posts">
    <div class="all-posts__header">
        <div class="column-header">Title</div>
        <div class="column-header">
            <i class="fas fa-comment"></i>
        </div>
        <div class="column-header">
            <i class="fas fa-thumbs-up"></i>
        </div>
    </div>
    <div class="all-posts">
        {foreach $all_posts as $post}
            <div class="show-post-data">
                <div class="show-delete">
                    <span>Are you sure you want to delete this post?</span>
                    <form method="post" action="delete-post">
                        <input type="hidden" name="id" value="{$post.id}" />
                        <button type="submit">
                            <i class="fas fa-trash-alt" title="Delete post"></i>
                        </button>
                    </form>
                    <i class="fas fa-times" title="Cancel"></i>
                </div>
                <div class="title-wrapper">
                    <span><a href="{$site->site_link}/{$post.post_link}">{$post.title}</a></span>
                    <span>{$post.date|date_format: "%A %B %e %Y, %r"}</span>
                    <div class="edit-options">
                        <span class="edit-options__link">
                            <a href="insert-post/{$post.id}">Edit</a>
                        </span>
                        <span class="edit-options__link">
                            <a class="delete-post" id="{$post.id}">Delete</a>
                        </span>
                    </div>
                </div>
                <span>{if $post.comments}{$post.comments}{else}0{/if}</span>
                <span>{if $post.likes}{$post.likes}{else}0{/if}</span>
            </div>
        {/foreach}
    </div>
</section>