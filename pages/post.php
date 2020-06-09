<?php

$blog_id = $posts->postExists($base->page, true);
$offset = (isset($_REQUEST["os"]) && is_numeric($_REQUEST['os'])) ? $_REQUEST["os"] : 0;

$comments = new Comments();
$bbCodes = new bbCodes();

if ($base->isPostBack()) {
    $get_data = $comments->getCommentById(filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT), true);
    $action   = (isset($_REQUEST["action"])) ? $_REQUEST["action"] : '';

    if (isset($_REQUEST['type'])) {
        $comments->checkLikesUnlikes($_REQUEST['type'], $get_data->id);
    }

    switch($action)
    {
        case 'insert':
            $comments->insertComment(
                            $blog_id, 
                            $_REQUEST['title'], 
                            $_REQUEST['body'], 
                            $users->user_id,
                            (isset($_REQUEST['reply_id']) ? filter_input(INPUT_POST, 'reply_id', FILTER_SANITIZE_NUMBER_INT) : null),
                            ($get_data ? $get_data->id : null)
                        );
            
            $base->sendHeader('Location', $base->site_link . DIRECTORY_SEPARATOR . $base->page . ($offset != 0 ? '?os=' . $offset : '') . "#comments");
            break;

        case 'delete':
            if ($get_data->author === $users->user_id || $users->checkAdmin()) {
                $comments->deleteCommentById($get_data->id, $blog_id);
                $base->sendHeader('Location', $base->site_link . DIRECTORY_SEPARATOR . $base->page . ($offset != 0 ? '?os=' . $offset : '') . "#comments");
            } else {
                $base->showError('403', 'You are not allowed to remove this comment');
            }
            break;
    }
}

if (isset($_REQUEST['do'])) {
    $request_id     = substr($_REQUEST['do'], 3);
    $request_action = substr($_REQUEST['do'], 0, 3);
    $get_data       = $comments->getCommentById($request_id, true);

    switch($request_action)
    {
        case 'rpl':
            $base->smarty->assign('is_reply', 'true');
            $base->smarty->assign('reply_id', $get_data->id);
            $base->smarty->assign('reply_author', $users->getUsername($get_data->author));
            $base->smarty->assign('reply_title', $get_data->title);
            $base->smarty->assign('reply_date', $get_data->date);
            $base->smarty->assign('reply_body', $bbCodes->doHtml($get_data->body, true));
            break;

        case 'del':
            if (!isset($_REQUEST['confirm'])) {
                $base->smarty->assign('comment_confirm', 'true');
            }
            break;

        case 'edt':
            $base->smarty->assign('is_edit', 'true');
            $base->smarty->assign('edit_title', $get_data->title);
            $base->smarty->assign('edit_body', $get_data->body);
            $base->smarty->assign('show_id', $get_data->id);
            break;
    }
}


$post_data = $posts->getSingleBlogPost($blog_id, true);

$base->smarty->assign('title', $bbCodes->doHtml($post_data->title, true));
$base->smarty->assign('post_content', $bbCodes->doHtml($post_data->body, true));
$base->smarty->assign('author', $users->getUsername($post_data->author));
$base->smarty->assign('read_time', $posts->readTime(strip_tags($post_data->body)));
$base->smarty->assign('post_data', $posts->getSingleBlogPost($blog_id));

$comment_data = $comments->getCommentsRange($offset, $blog_id);
$comment_count = $comments->getCommentCount($blog_id);

$base->smarty->assign('pager_total_items', $comment_count->num);
$base->smarty->assign('pager_offset', $offset);
$base->smarty->assign('pager_items_per_page', Comments::COMMENTS_PP);
$base->smarty->assign('pager_query_base', "?os=");
$base->smarty->assign('pager_query_suffix', "#comments");
$base->smarty->assign('pager', $base->smarty->fetch($base->smarty->template_dir[0] . $base->template . DIRECTORY_SEPARATOR . 'pager.tpl'));
$base->smarty->assign('do_offset', ($offset > 0 ? "?os=".$offset : ''));
$base->smarty->assign('comments', $comment_data);

$base->addTitle($post_data->title);

?>