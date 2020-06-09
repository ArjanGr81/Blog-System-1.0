<?php

// Loads the necessary classes
require_once(__ROOT__ . "include/base/db.class.php");
require_once(__ROOT__ . "include/base/base.class.php");
require_once(__ROOT__ . "include/base/bbcodes.class.php");
require_once(__ROOT__ . "include/base/stringparser_bbcode.class.php");
require_once(__ROOT__ . "include/base/PHPMailerAutoload.php");
require_once(__ROOT__ . "include/classes/users.class.php");
require_once(__ROOT__ . "include/classes/mail.class.php");
require_once(__ROOT__ . "include/classes/phpmailer.class.php");
require_once(__ROOT__ . "include/classes/smtp.class.php");
require_once(__ROOT__ . "include/classes/posts.class.php");
require_once(__ROOT__ . "include/classes/comments.class.php");

require_once(__SMARTY__ . "Smarty.class.php");

// Initiate the base class
$base = new Base();

// Initiate the user class
$users = new Users();

// Initiate the post class
$posts = new Posts();


// Check if the requested page exists, if not, throw a 404 error
if (!file_exists(__ROOT__ . 'pages/' . $base->page . '.php')) {
    if (!$posts->postExists($base->page)) {
        $base->showError('404');
    } 
}

// Include the requested page
include(__ROOT__ . 'pages/' . ($posts->postExists($base->page) ? 'post' : $base->page) . '.php');

// Render the template for the requested page
$base->renderPage();

?>