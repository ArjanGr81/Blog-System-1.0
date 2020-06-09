<section class="pane pane--user">
    <div class="column-header">Account settings</div>
    <form method="post" action="" enctype="multipart/form-data">
        <div class="account-settings">
            <div class="account-settings__avatar avatar">
                <input type="file" name="avatar" id="file" class="avatar__file" multiple />
                <label for="file">
                    <i class="fas fa-pencil-alt"></i>
                </label>
                {if $user_settings->avatar}
                <a href="{$site->site_link}/user-account?ac=delete" class="avatar__delete">
                    <i class="fas fa-times"></i>
                </a>
                {/if}
                {if $user_settings->avatar}
                {assign var="avatar" value=$user_settings->avatar}
                    {else}
                {assign var="avatar" value="default_avatar"}
                {/if}
                <div class="avatar__image text-hide"
                    style="background-image: url({$site->site_link}/images/avatars/{$avatar}.jpg);">image</div>
                <div class="avatar__details">
                    <span>Upload an avatar</span>
                    <ul>
                        <li>Only images with image type JPEG</li>
                        <li>Maximum filesize of 100kb</li>
                    </ul>
                </div>
            </div>
            <span>
                <label for="name">Name</label>
                <input id="name" value="{$user_settings->name}" name="user_data[real_name]" type="text" placeholder="First- and last name (optional)" />
            </span>
            <span>
                <label for="email">Email</label>
                <input id="email" name="user_data[email]" value="{$user_settings->email}" type="text" placeholder="Your email address" />
            </span>
            <input type="hidden" name="user_data[user_id]" value="{$user->id}" />
            <div class="account-options">
                <button class="button button--primary">Update account</button>
                <div class="update-password">
                    <a href="{$site->site_link}/recover">Update your password</a>
                </div>
            </div>
        </div>
    </form>
</section>