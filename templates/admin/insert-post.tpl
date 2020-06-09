<section class="pane pane--edit-post">
    <div class="column-header">{if $post_data}Edit "{$post_data.title}"{else}Add new blogpost{/if}</div>
    <form method="post" enctype="multipart/form-data" class="edit-post">
        <input type="text" name="title" class="edit-post__title" value="{$post_data.title}" placeholder="Add your title" />
        <textarea name="body" class="edit-post__text" placeholder="Your blogpost">{$post_data.body}</textarea>
        {if $post_data.images}
                {assign var="image" value=$post_data.images}
            {else}
                {assign var="image" value="default_img"}
            {/if}
        <div class="edit-post__upload">
            <input type="file" name="images[]" id="file" class="edit-post__file" multiple />
            <label for="file">
                <i class="fas fa-pencil-alt"></i>
            </label>
            {if $post_data.images}
            <a href="{$site->site_link}/admin/insert-post/{$post_data.id}?ac=delete" class="edit-post__delete">
                <i class="fas fa-times"></i>
            </a>
            {/if}
            <div class="edit-post__image text-hide"
                 style="background-image: url({$site->site_link}/images/{$image}.jpg);">image</div>
            <div class="edit-post__details">
                <span>Upload an image</span>
                <ul>
                    <li>Only images with image type JPEG</li>
                    <li>Maximum filesize of {$max_file_size|fsize_format:"KB":0}</li>
                </ul>
            </div>
        </div>
        <button type="submit" class="button button--primary">{if $post_data}Edit{else}Add{/if} post</button>
    </form>
</section>