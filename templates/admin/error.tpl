<section class="pane pane--error">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pane__title text-center">{$error_title}</div>
                <div class="pane__text text-center">
                    {if $error_message}{$error_message}.{/if}
                    <span class="mt-3">Please click on <a href="{$site->site_link}/admin">this link</a> to return to the home page</span>
                </div>
            </div>
        </div>
    </div>
</section>