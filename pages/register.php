<?php

if ($base->getSessionId()) {
    $base->showError('401', 'It seems you already have an account');
}

if ($base->isPostBack()) { 
    $user_data = $_REQUEST['user_data'];

    $base->smarty->assign('username', $user_data['uname']);
	$base->smarty->assign('password', $user_data['pword']);
	$base->smarty->assign('confirm', $user_data['confirm']);
    $base->smarty->assign('email', $user_data['email']);
    
    if ($user_data['pword'] != $user_data['confirm']) {
		$base->smarty->assign('notice', 'The passwords did not match');
	} else {
        $key = $users->generateSessionId();
        $row = $users->signup(
                            (string)$user_data['uname'],
                            (string)$user_data['pword'],
                            (string)$user_data['email'],
                            $_SERVER['REMOTE_ADDR'],
                            $key
                        );
        if ($row > 0) {
            $send_vars = array('username' => $user_data['uname'], 'key' => $key);
            $template = 'user_activation';
            
			$mail = new Messenger();
			$mail->sendMail($template, $base->reply_email, $user_data['email'], $send_vars);
			$base->showError('600', 'User account has been created. Please check your email for account activation');
        } else {
			switch ($row)
			{
                case Users::USERNAME_IN_USE:
                    $base->smarty->assign('notice', "Sorry, this username is already taken");
                    break;

                case Users::USERNAME_SHORT:
                    $base->smarty->assign('notice', "Your username must be longer than 3 characters");
                    break;
                            
                case Users::USERNAME_LONG:
                    $base->smarty->assign('notice', "Your username can not be longer than 25 characters");
                    break;
                    
                case Users::PASSWORD_SHORT:
                    $base->smarty->assign('notice', "Your password must exist out of a minimum of 8 characters");
                    break;
                    
                case Users::EMAIL_INVALID:
                    $base->smarty->assign('notice', "The submitted email address is not valid");
                    break;
            }
        }
    }
}

if (isset($_REQUEST['token']) && strlen($_REQUEST['token']) == 32 || 
    isset($_REQUEST['key']) && strlen($_REQUEST['key']) == 32) {
    $token = (isset($_REQUEST['token']) ? $_REQUEST['token'] : $_REQUEST['key']);
    $activation = $users->checkActivation($token);

    if ($activation) {
        $user = $users->performActivation($token);
        
        if (isset($_REQUEST['token'])) {
            $mail = new Messenger();
            $send_vars = array('username' => $user->username);
            $mail->sendMail('user_welcome', $base->reply_email, $user->email, $send_vars);
        }

        // Remove activation code from database
		if ($user) { 
			$users->clearActivation($token);
        }
        
        $base->showError('600', 'Your account has been activated, you are now able to log in');
    } else {
        $base->smarty->assign('notice', sprintf('Invalid token or registration older than %d days', Users::ACCOUNT_EXPIRATION));
    }
}

$base->addTitle('Register account');

?>