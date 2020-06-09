<?php

if ($base->isPostBack()) {
    $base->updateBlogSettings($_REQUEST['site_data']);
    $base->clearCache();
}

$base->addTitle('Blog settings');

?>