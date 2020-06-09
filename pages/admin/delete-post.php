<?php

$blog_id = (int)filter_input(INPUT_POST,'id');
$posts->deletePost($blog_id);

?>