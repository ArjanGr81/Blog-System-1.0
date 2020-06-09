<?php
/*
 * MySQL details
 */ 

/** MySQL database type */
define('DB_TYPE', 'mysql');

/** The name of the database */
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'tFg65tGv');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/**************************************************** */ 

/*
 * PHP Mail details
 */ 

/** Mail hostname */
define('MAIL_HOST', 'mail.racingfor.me');

/** Mail port */
define('MAIL_PORT', 587);

/** Mail SMTP authentication */
define('MAIL_AUTH', true);

/** Mail encryption (tls or ssl) */
define('MAIL_ENCRYPT', 'tls');

/** Mail username */
define('MAIL_USERNAME', 'mail@your-domain.com');

/** Mail password */
define('MAIL_PASSWORD', 'your-password');


/***************************************** 
 *                                       *
 * PLEASE DO NOT EDIT THE FOLLOWING DATA *
 * UNLESS YOU KNOW WHAT YOU ARE DOING    *
 *                                       *
 ****************************************/

// Used to refer to main site URL
define('__ROOT__', dirname(__DIR__) . DIRECTORY_SEPARATOR);

// Used to refer to main site URL (your-site.com)
define('__REDIRECT__', $_SERVER['HTTP_HOST']);

// Directory where Smarty is located
define('__SMARTY__', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'common' . DIRECTORY_SEPARATOR . 'smarty' . DIRECTORY_SEPARATOR);

// Used to define the template directory
define('TEMPLATE_DIR', 'templates');

?>