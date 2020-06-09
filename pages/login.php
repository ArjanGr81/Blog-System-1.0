<?php

$action = filter_input(INPUT_GET,'ac') ? filter_input(INPUT_GET,'ac') : 'login';
$users = new Users();

if ($action === 'log_out') {
    $users->logout();
    $base->sendHeader('Location', $base->get_sitelink());
}

if ($base->isPostBack()) {
    $username = (string)filter_input(INPUT_POST,'uname');
    $password = (string)filter_input(INPUT_POST,'pword');

    $users->login($username, $password, true);
    $base->sendHeader('Location', $base->get_sitelink());
}

?>