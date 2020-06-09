<?php

$blog_id = (int)filter_input(INPUT_GET,'id');

if (isset($_REQUEST['ac'])) {
    $posts->destroyImages($blog_id);
}

if ($base->isPostBack()) {
    $files = $_FILES['images'];
    if (isset($files) && !empty($files['name'][0])) {
        $base->clearCache();
    }

    $posts->insertPost(
        (string)filter_input(INPUT_POST, 'title'), 
        (string)filter_input(INPUT_POST, 'body'),
        ($blog_id ? $blog_id : ''),
        $files
    );
}

if ($blog_id) {
    $base->smarty->assign('post_data', $posts->getSingleBlogPost($blog_id));
}

$base->smarty->assign('max_file_size', Posts::MAX_SIZE);
$base->addTitle(($blog_id ? 'Edit post' : 'Add post'));

?>