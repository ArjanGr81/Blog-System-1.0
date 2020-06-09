<section class="pane pane--error">
    <div class="column-header text-center">{$error_title}</div>
        <div class="pane__text text-center">
            {if $error_message}{$error_message}.{/if}
            <span>Please click on <a href="{$site->site_link}">this link</a> to return to the home page</span>
        </div>
</section>