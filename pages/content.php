<?php

$get_posts = $posts->getFrontPosts();
for($i=0, $len=count($get_posts); $i<$len; $i++) {
    if ($i < 4) {
        $base->smarty->assign('show_posts', $posts->getFrontPosts());
    } else {
        $base->smarty->assign('recent_posts', $posts->getFrontPosts(true));
    }
}

$base->addTitle('Home');

?>