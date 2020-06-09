<?php

if (!$base->getSessionId()) {
    $base->showError('403', 'You have to be signed in to view your account settings');
}

if (isset($_REQUEST['ac'])) {
    $users->deleteAvatar();
}

if ($base->isPostBack()) {
    if (isset($_REQUEST['user_data'])) {

    $files = $_FILES['avatar'];
    if (isset($files) && !empty($files['name'][0])) {
        $base->clearCache();
    }
        $users->updateUserData($_REQUEST['user_data'], $files);
    }
}

$base->smarty->assign('user_settings', $users->getById());

$base->addTitle('Account settings');

?>