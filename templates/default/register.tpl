<section class="pane pane--register">
    <div class="column-header">Register an account</div>
    {if !$logged_in && $site->activation}
        <form action="register" method="post" class="register">
            {if $notice != ''}
                <div class="register__error">
                    <span>{$notice}</span>
                </div>
            {/if}
            <div class="register__login">
                <span>
                    <label for="username">Username</label>
                    <input id="username" value="{$username}" name="user_data[uname]" type="text" placeholder="Username" />
                </span>
                <span>
                    <label for="password">Password</label>
                    <input id="password" value="{$password}" name="user_data[pword]" type="password" placeholder="Password" />
                </span>
                <span>
                    <label for="conf_password">Confirm password</label>
                    <input id="conf_password" value="{$confirm}" name="user_data[confirm]" type="password" placeholder="Confirm password" />
                </span>
                <span>
                    <label for="email">Email address</label>
                    <input id="email" name="user_data[email]" type="text" placeholder="Email address" />
                </span>
                <button class="button button--primary">Register account</button>
            </div>
        </form>
    {/if}
</section>