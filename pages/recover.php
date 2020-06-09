<?php

if ($base->isPostBack()) {
    if (!isset($_REQUEST['user_data'])) {
        $base->showError('401', 'You can not submit empty fields');
    }

    //if (!$base->getSessionId()) {
        $row = $users->updatePassword($_REQUEST['user_data']);

        if ($row < 0) {
            switch ($row)
            {  
                case Users::EMAIL_INVALID:
                    $base->smarty->assign('email', $_REQUEST['user_data']['email']);
                    $base->smarty->assign('notice', "The submitted email address is not valid");
                    break;
                case Users::PASSWORD_MISMATCH:
                    $base->smarty->assign('notice', "The passwords did not match");
                    break;
            }
        } else {
            $base->smarty->assign('success', true);
        }
    //}
}

if (isset($_REQUEST['token']) && strlen($_REQUEST['token']) == 32) {
    $token = $_REQUEST['token'];
    $activation = $users->checkActivation($token);

    if ($activation) {
        $base->smarty->assign('recover', true);
        $base->smarty->assign('token', $token);
    }
}

$base->addTitle(($base->getSessionId() ? 'Update' : 'Recover') . ' password');

?>