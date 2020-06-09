<?php

/* 
 * Check if an error message has been set
 * If so, assign it so we can show it on the error page
 */
if (isset($_SESSION['msg'])) {
    $base->smarty->assign('error_message', $_SESSION['msg']);
}

// we can unset the message now
unset($_SESSION['msg']);

switch($_SESSION['code']) {
    case 401;
        $error_title = 'Unauthorized access';
        $error_code = 'Access not allowed';
        break;
    case 403;
        $error_title = 'Access denied';
        $error_code = 'Access to this page has been denied';
        break;
    case 404;
        $error_title = 'Sorry, this page does not exist (anymore)';
        $error_code = 'Page does not exist';
        break;
    case 422;
        $error_title = 'Unable to process data';
        $error_code = 'We we\'re unable to process the submitted data';
        break;
}

$base->smarty->assign('error_title', $error_title);
$base->addTitle($_SESSION['code'] . ' - ' . $error_code);

?>