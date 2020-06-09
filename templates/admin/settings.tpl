<section class="pane pane--settings">
    <div class="column-header">Blog settings</div>
    <form method="post" action="">
        <div class="blog-settings">
        {foreach $site as $key => $setting}
            <span>
                <label for="name">{$key|ucfirst|replace:'_':' '}</label>
                <input id="name" value="{$setting}" name="site_data[{$key}]" type="text" />
            </span>
             {/foreach}
            <button class="button button--primary">Update settings</button>
        </div>
    </form>
</section>