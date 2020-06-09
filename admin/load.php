<?php

// Loads the necessary classes
require_once(__ROOT__ . "include/base/db.class.php");
require_once(__ROOT__ . "include/base/base.class.php");
require_once(__ROOT__ . "include/base/bbcodes.class.php");
require_once(__ROOT__ . "include/base/PHPMailerAutoload.php");
require_once(__ROOT__ . "include/base/stringparser_bbcode.class.php");
require_once(__ROOT__ . "include/classes/users.class.php");
require_once(__ROOT__ . "include/classes/mail.class.php");
require_once(__ROOT__ . "include/classes/phpmailer.class.php");
require_once(__ROOT__ . "include/classes/smtp.class.php");
require_once(__ROOT__ . "include/classes/posts.class.php");
require_once(__SMARTY__ . "Smarty.class.php");

// Initiate the base class
$base = new Base(true);

// Initiate the user class
$users = new Users();

// Initiate the post class
$posts = new Posts();

// Initiate the post class
$bbCodes = new bbCodes();

// If we are not admin, we are not supposed to be here
if ($users->checkAdmin()) {
    $base->showError('403', 'Only site administrators are allowed to view this section');
}

// Check if the requested page exists, if not, throw a 404 error
if (!file_exists(__ROOT__ . 'pages/admin/' . $base->page . '.php')) {
        $base->showError('404');
}

// Include the requested page
include(__ROOT__ . 'pages/admin/' . $base->page . '.php');

// Render the template for the requested page
$base->renderPage();

?>