<?php

$base->smarty->assign('all_posts', $posts->getBlogPosts());
$base->addTitle('Admin Home');

?>