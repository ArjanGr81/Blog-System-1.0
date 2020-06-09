<section class="pane pane--recover">
    <div class="column-header">{if $logged_in || $recover}Update password{else}Recover password{/if}</div>
    <form method="post" action="">
        <div class="account-settings">
            {if !$logged_in && !$recover}
            <span>
                <label for="email">Email address</label>
                <input id="email" name="user_data[email]" value="{$email}" type="text" placeholder="Your email address" />
                {if $notice}<div class="account-settings__notify">{$notice}</div>{/if}
            </span>
            {/if}
            {if $logged_in || $recover}
            <span>
                <label for="password">Password</label>
                <input id="password" name="user_data[password]" type="password" placeholder="New password" />
            </span>
            <span>
                <label for="confirm">Confirm password</label>
                <input id="confirm" name="user_data[confirm]" type="password" placeholder="Confirm password" />
                {if $notice}<div class="account-settings__notify">{$notice}</div>{/if}
            </span>
                {if $logged_in}
                    <input type="hidden" name="user_data[user_id]" value="{$user->id}" />
                {else}
                    <input type="hidden" name="user_data[token]" value="{$token}" />
                {/if}
            {/if}
            <button class="button button--primary">
                {if $logged_in || $recover}
                    Update password
                {else}
                    Recover password
                {/if}
            </button>
            {if $success}
                <div class="account-settings__success">We have sent an email to {if $logged_in}update{else}recover{/if} your password</div>
            {/if}
        </div>
    </form>
</section>