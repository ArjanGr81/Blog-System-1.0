<?php
$offset = (isset($_REQUEST["os"]) && is_numeric($_REQUEST['os'])) ? $_REQUEST["os"] : 0;

$search_results = $posts->search(filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS), $offset);
$total_rows = (count($search_results) > 0 ? $search_results[0]['_totalrows'] : "");
$base->smarty->assign('keywords', $_REQUEST['id']);
$base->smarty->assign('search_results', $search_results);

$base->smarty->assign('pager_total_items', $total_rows);
$base->smarty->assign('pager_offset', $offset);
$base->smarty->assign('pager_items_per_page', 15);
$base->smarty->assign('pager_query_base', "?os=");
$base->smarty->assign('pager', $base->smarty->fetch($base->smarty->template_dir[0] . $base->template . DIRECTORY_SEPARATOR . 'pager.tpl'));
$base->smarty->assign('do_offset', ($offset > 0 ? "?os=".$offset : ''));

$base->addTitle('Search results');

?>