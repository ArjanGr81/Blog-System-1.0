<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-20 00:06:35
  from '/var/www/html/racingforme/themes/templates/rfm_default/torrent_details/view_torrent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec4586b17d547_45429015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '679ea76b1a926fa8566a6c01808a1aa83fce615d' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/rfm_default/torrent_details/view_torrent.tpl',
      1 => 1589925992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec4586b17d547_45429015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/racingforme/include/smarty/plugins/modifier.fsize_format.php','function'=>'smarty_modifier_fsize_format',),1=>array('file'=>'/var/www/html/racingforme/include/smarty/plugins/modifier.timeago.php','function'=>'smarty_modifier_timeago',),2=>array('file'=>'/var/www/html/racingforme/include/smarty/plugins/function.cycle.php','function'=>'smarty_function_cycle',),3=>array('file'=>'/var/www/html/racingforme/include/smarty/plugins/modifier.roundup.php','function'=>'smarty_modifier_roundup',),4=>array('file'=>'/var/www/html/racingforme/include/smarty/plugins/modifier.seedtime.php','function'=>'smarty_modifier_seedtime',),5=>array('file'=>'/var/www/html/racingforme/include/smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),6=>array('file'=>'/var/www/html/racingforme/include/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<section class="pane pane--hero-data">
    <div class="container-fluid px-0">
        <div class="hero-data">
            <div class="torrent-category">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                    <span>
                        <i class="fas fa-book"></i>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/search/*?c=<?php echo $_smarty_tpl->tpl_vars['cat']->value['parent_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['parentTitle'];?>
</a>
                    </span>
                    <span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/search/*?c=<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['title'];?>
</a>
                    </span>
                <?php
}
} else {
?>
                    <span>Unavailable</span>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="torrent-main">
                <div class="torrent-main__size">
                    <i class="fas fa-database"></i>
                    <?php if ($_smarty_tpl->tpl_vars['size']->value > 0) {
echo smarty_modifier_fsize_format($_smarty_tpl->tpl_vars['size']->value);
} else { ?>Unavailable<?php }?>
                </div>
                <div class="torrent-main__codec">
                    <i class="fas fa-play-circle"></i>
                    <?php if ($_smarty_tpl->tpl_vars['codec']->value) {?>
                        <span><?php echo $_smarty_tpl->tpl_vars['codec']->value;?>
</span>
                        <?php if ($_smarty_tpl->tpl_vars['a_codec']->value) {?>
                            <span>/</span>
                            <span><?php echo $_smarty_tpl->tpl_vars['a_codec']->value;?>
</span>
                        <?php }?>
                    <?php } else { ?>
                        <span>Unavailable</span>
                    <?php }?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['language']->value) {?>
                <div class="torrent-main__language">
                    <i class="fas fa-microphone"></i><?php echo $_smarty_tpl->tpl_vars['language']->value;?>

                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>

<section class="pane pane--hero hero--view-torrent">
    <div class="container-fluid" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/img/hero/hero_details.jpg');">
        <div class="skewed-block<?php if ($_smarty_tpl->tpl_vars['showFree']->value == 1) {?> free<?php }
if ($_smarty_tpl->tpl_vars['showPopular']->value == 1) {?> popular<?php }?>"></div>
        <div class="row">
            <div class="col-12 p-0">
                <div class="container-fluid p-0">
                    <div class="hero--torrent">
                        <div class="hero--torrent-data"><div class="content"><div class="d-none d-lg-block content__logo"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?><img src="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/img/categories/<?php echo $_smarty_tpl->tpl_vars['cat']->value['idx_img'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['cat']->value['idx_img'];?>
" /><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="d-block d-lg-none content__download"><a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/download/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" target="_blank"><i class="fas fa-arrow-alt-circle-down" title="Download <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"></i></a></div><div class="content__data"><?php if ($_smarty_tpl->tpl_vars['bitrate']->value) {?><div class="media-bitrate"><i class="fas fa-history"></i><span><?php echo $_smarty_tpl->tpl_vars['bitrate']->value;?>
 kbps</span><?php if ($_smarty_tpl->tpl_vars['fps']->value) {?><span><?php echo $_smarty_tpl->tpl_vars['fps']->value;?>
fps</span><?php }?></div><?php }
if ($_smarty_tpl->tpl_vars['resolution']->value) {?><div class="media-resolution"><i class="fas fa-expand"></i><?php $_smarty_tpl->_assignInScope('res_parts', explode("x",$_smarty_tpl->tpl_vars['resolution']->value));?><span><?php echo $_smarty_tpl->tpl_vars['res_parts']->value[0];?>
</span><?php if ($_smarty_tpl->tpl_vars['res_parts']->value[1]) {?><span>x</span><span><?php echo $_smarty_tpl->tpl_vars['res_parts']->value[1];?>
</span><?php }?></div><?php }
if ($_smarty_tpl->tpl_vars['length']->value) {?><div class="media-length"><i class="fas fa-clock"></i><span><?php echo $_smarty_tpl->tpl_vars['length']->value;?>
 minutes</span></div><?php }
if ($_smarty_tpl->tpl_vars['a_bitrate']->value) {?><div class="media-audio"><i class="fas fa-volume-off"></i><div class="volume-data"><span><?php echo $_smarty_tpl->tpl_vars['a_bitrate']->value;?>
 kbps</span><?php if ($_smarty_tpl->tpl_vars['frequency']->value) {?><span><?php echo $_smarty_tpl->tpl_vars['frequency']->value;?>
 Hz</span><?php }?></div></div><?php }?></div></div><div class="torrent-data"><div class="torrent-data__date"><span><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</span><span><?php echo smarty_modifier_timeago($_smarty_tpl->tpl_vars['added']->value);?>
 ago</span></div><div class="torrent-data__title"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</div><div class="torrent-data__uploader"><span><?php if ($_smarty_tpl->tpl_vars['uploader']->value == '') {
echo $_smarty_tpl->tpl_vars['userUnavailable']->value;
} else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/profile/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['uploader']->value, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['uploader']->value;?>
</a><?php }?></span></div><div class="torrent-data__peers"><div class="peers__seeders"><span><?php echo number_format($_smarty_tpl->tpl_vars['seeders']->value);?>
</span><span><?php if ($_smarty_tpl->tpl_vars['seeders']->value <> 1) {?>seeders<?php } else { ?>seeder<?php }?></span></div><div class="peers__leechers"><span><?php echo number_format($_smarty_tpl->tpl_vars['leechers']->value);?>
</span><span><?php if ($_smarty_tpl->tpl_vars['leechers']->value <> 1) {?>leechers<?php } else { ?>leecher<?php }?></span></div></div><?php if ($_smarty_tpl->tpl_vars['snatched']->value > 0) {?><div class="torrent-data__completed"><span><?php echo number_format($_smarty_tpl->tpl_vars['snatched']->value);?>
</span><span><?php if ($_smarty_tpl->tpl_vars['snatched']->value <> 1) {?>times<?php } else { ?>time<?php }?> completed</span></div><?php }?></div></div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pane pane--torrent-tabs">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-12">
                <nav>
                    <div class="nav nav-tabs nav-justified" id="nav-tab">
                        <a class="nav-item nav-link active" id="nav-description-tab" data-toggle="tab" href="#nav-description" aria-controls="nav-description" aria-selected="true">description</a>
                        <a class="nav-item nav-link" id="nav-files-tab" data-toggle="tab" href="#nav-files" aria-controls="nav-files" aria-selected="false">files</a>
                        <a class="nav-item nav-link" id="nav-peers-tab" data-toggle="tab" href="#nav-peers" aria-controls="nav-peers" aria-selected="false">peers</a>
                        <a class="nav-item nav-link" id="nav-comments-tab" data-toggle="tab" href="#nav-comments" aria-controls="nav-comments" aria-selected="false">comments</a>
                        <a class="nav-item nav-link" id="nav-snatchers-tab" data-toggle="tab" href="#nav-snatchers" aria-controls="nav-snatchers" aria-selected="false">snatchers</a>
                        <a class="nav-item nav-link" id="nav-matches-tab" data-toggle="tab" href="#nav-matches" aria-controls="nav-matches" aria-selected="false">matches</a>
                        <a class="nav-item nav-link" id="nav-screens-tab" data-toggle="tab" href="#nav-screens" aria-controls="nav-screens" aria-selected="false">screens</a>
                        <div class="download-button">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/download/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="btn--primary" target="_blank">download</a>
                        </div>
                    </div>
                </nav>
                <div class="tab-content p-3 p-lg-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-description" aria-labelledby="nav-description-tab">
                        <div class="tab__text"><?php echo $_smarty_tpl->tpl_vars['showDescription']->value;?>
</div>
                    </div>
                    <div class="tab-pane fade" id="nav-files" aria-labelledby="nav-files-tab">
                        <div class="file-list">
                            <?php if (count($_smarty_tpl->tpl_vars['showFiles']->value) > 100) {?>
                            <div class="error-box">
                                <p class="error-box__text">More than 100 files, please use the file-list in your client</p>
                            </div>
                            <?php } elseif (count($_smarty_tpl->tpl_vars['showFiles']->value) >= 1) {?>
                            <div class="row d-none d-lg-flex">
                                <div class="col-12 col-lg-10">
                                    <span class="file-list__title">File name</span>
                                </div>
                                <div class="col-12 col-lg-2">
                                    <span class="file-list__size d-flex justify-content-end">Size</span>
                                </div>
                            </div>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['showFiles']->value, 'torrentFile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['torrentFile']->value) {
?>
                            <div class="row bg <?php echo smarty_function_cycle(array('values'=>'bg--light,bg--dark'),$_smarty_tpl);?>
">
                                <div class="col-12 col-lg-10 pl-0">
                                    <span class="display__title"><?php echo $_smarty_tpl->tpl_vars['torrentFile']->value['filename'];?>
</span>
                                </div>
                                <div class="col-12 col-lg-2 pl-0 pl-lg-2 pr-0 d-flex justify-content-start justify-content-lg-end">
                                    <span class="display__size"><?php echo $_smarty_tpl->tpl_vars['torrentFile']->value['size'];?>
</span>
                                </div>
                            </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-peers" aria-labelledby="nav-peers-tab">
                        <div class="row">
                            <div class="col-12 col-lg-2">
                                <ul class="peers-tab__links">
                                    <li>
                                        <a <?php if ($_smarty_tpl->tpl_vars['peerType']->value == "s") {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/details/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
?p=s#nav-peers">seeders</a>
                                    </li>
                                    <li>
                                        <a <?php if ($_smarty_tpl->tpl_vars['peerType']->value == "l") {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/details/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
?p=l#nav-peers">leechers</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-10 pr-lg-1">
                                <?php if (count($_smarty_tpl->tpl_vars['showPeers']->value) > 0) {?>
                                    <div class="peers-tab__header">
                                        <span class="tab__header d-flex justify-content-start"><?php if ($_smarty_tpl->tpl_vars['peerType']->value == "s") {?>Seeders<?php } else { ?>Leechers<?php }?></span>
                                        <span class="tab__header d-none d-lg-flex">Connectable</span>
                                        <span class="tab__header">
                                            <span class="d-none d-lg-block">uploaded</span>
                                            <span class="d-block d-lg-none">upl</span>
                                        </span>
                                        <span class="tab__header">
                                            <span class="d-none d-lg-block">downloaded</span>
                                            <span class="d-block d-lg-none">dld</span>
                                        </span>
                                        <span class="tab__header">
                                            <span class="d-none d-lg-block">completed</span>
                                            <span class="d-block d-lg-none">compl</span>
                                        </span>
                                        <span class="tab__header d-none d-lg-flex">Activity</span>
                                        <span class="tab__header d-none d-lg-flex">Client</span>
                                    </div>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['showPeers']->value, 'peer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['peer']->value) {
?>
                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['size']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('status', smarty_modifier_roundup((100*(1-($_smarty_tpl->tpl_vars['peer']->value['left']/$_prefixVariable1)))));?>
                                    <div class="peers-tab__value bg <?php echo smarty_function_cycle(array('values'=>'bg--light,bg--dark'),$_smarty_tpl);?>
">
                                        <span class="tab__value d-flex justify-content-start">
                                            <?php if ($_smarty_tpl->tpl_vars['peer']->value['username'] == '') {?>
                                                <i><?php echo $_smarty_tpl->tpl_vars['userUnavailable']->value;?>
</i>
                                            <?php } else { ?>
                                                <img class="d-none d-lg-block" src="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/img/flags/domains/<?php echo $_smarty_tpl->tpl_vars['peer']->value['flagpic'];?>
" alt="flag" title="<?php echo $_smarty_tpl->tpl_vars['peer']->value['c_name'];?>
" />
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/profile/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['peer']->value['username'], 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['peer']->value['username'];?>
</a>
                                            <?php }?>
                                        </span>
                                        <span class="tab__value d-none d-lg-flex"><?php if ($_smarty_tpl->tpl_vars['peer']->value['connectable'] == 1) {?><i class="fas fa-check"></i><?php } else { ?><i class="fas fa-times" title="Not connectable, please check your network/client settings"></i><?php }?></span>
                                        <span class="tab__value"><?php if ($_smarty_tpl->tpl_vars['peer']->value['uploaded'] > 0) {
echo smarty_modifier_fsize_format($_smarty_tpl->tpl_vars['peer']->value['uploaded']);
} else { ?>N/A<?php }?></span>
                                        <span class="tab__value"><?php if ($_smarty_tpl->tpl_vars['peer']->value['downloaded'] > 0) {
echo smarty_modifier_fsize_format($_smarty_tpl->tpl_vars['peer']->value['downloaded']);
} else { ?>N/A<?php }?></span>
                                        <span class="tab__value"><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
%</span>
                                        <span class="tab__value d-none d-lg-flex"><?php echo smarty_modifier_seedtime($_smarty_tpl->tpl_vars['peer']->value['timespent']);?>
</span>
                                        <span class="tab__value d-none d-lg-flex"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['peer']->value['u_agent'],"/"," "),";"," ");?>
</span>
                                    </div>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php if ($_smarty_tpl->tpl_vars['show_peers_pager_when']->value == true) {?>
                                    <div class="row mt-2">
                                        <div class="col-12 d-flex justify-content-end">
                                            <div class="pager--peers">
                                                <div class="torrent-page__pager-bottom"><?php echo $_smarty_tpl->tpl_vars['pager']->value;?>
</div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                <?php } else { ?>
                                    <div class="peers__no-stats">
                                    <span class="no-stats__title">No <?php if ($_smarty_tpl->tpl_vars['peerType']->value == "s") {?>seeders<?php } else { ?>leechers<?php }?> found</span>
                                    <span class="no-stats__text">Unfortunately there's no <?php if ($_smarty_tpl->tpl_vars['peerType']->value == "s") {?>seeder<?php } else { ?>leecher<?php }?> data to display for this torrent</span>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-comments" aria-labelledby="nav-comments-tab">
                    <?php if ($_smarty_tpl->tpl_vars['showReview']->value == "true") {?>
                        <div id="showCommentReplyBox" class="add-comment">
                            <div class="add-comment__content">
                                <form method="post" action="?do=addComment">
                                    <button type="submit" class="add-comment__submit" title="Submit comment">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <a id="doCloseEdit" class="add-comment__exit" title="Cancel" onclick="window.history.back();">
                                        <i class="fas fa-times"></i>
                                    </a>
                                    <div class="context__username">
                                        <?php echo $_smarty_tpl->tpl_vars['msgUser']->value;?>

                                        <?php if ($_smarty_tpl->tpl_vars['msgTitle']->value != '') {?>
                                            <span class="username__title">(<?php echo $_smarty_tpl->tpl_vars['msgTitle']->value;?>
)</span>
                                        <?php }?>
                                    </div>
                                    <div class="context__date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['msgDate']->value,"%A %B %e %Y, %r");?>
</div>
                                    <div class="context__text"><?php echo $_smarty_tpl->tpl_vars['msgReview']->value;?>
</div>
                                    <input type="hidden" name="rplID" value="<?php echo $_smarty_tpl->tpl_vars['doWhat']->value;?>
" />
                                    <div id="addComment"><textarea name="comment" class="customHtml" placeholder="Add your message..."></textarea></div>
                                </form>
                            </div>
                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['commentDelSure']->value == "true") {?>
                        <div id="showDelComment" class="del-comment-sure">
                            <div class="del-comment-sure__content">
                                <form method="post" action="?c=del<?php echo $_smarty_tpl->tpl_vars['commentID']->value;?>
">
                                    <label for="delete">Delete comment</label>
                                    <span class="confirm-message">This will delete the comment, are you sure you want to do this?</span>
                                    <button type="submit" class="delete-comment__submit" title="Delete comment">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <a id="closeDelComment" class="delete-comment__exit" title="Cancel" onclick="window.history.back();">
                                        <i class="fas fa-times"></i>
                                    </a>
                                    <input type="hidden" name="confirm" value="1" />
                                </form>
                            </div>
                        </div>
                    <?php }?>
                    <div id="showAddCommentBox" class="add-comment">
                        <div class="add-comment__content">
                            <label for="addComment">Post a comment</label>
                            <form method="post" action="?do=addComment">     
                            <button type="submit" class="add-comment__submit" title="Submit comment">
                                <i class="fas fa-check"></i>
                            </button>
                            <a id="doCloseAdd" class="add-comment__exit" title="Cancel">
                                <i class="fas fa-times"></i>
                            </a>
                            <div id="addComment"><textarea name="comment" class="customHtml" placeholder="Add your message..."></textarea></div>
                            </form>
                        </div>
                    </div>
                        <div class="row mb-0 mb-lg-3">
                            <div class="col-12 d-flex justify-content-end">
                                <div class="pager--top">
                                    <a id="addNewCommentTop" href="#nav-comments" class="comment__post" title="Add a new comment for this torrent">Post a comment</a>
                                    <div class="pager--top__pager <?php if ($_smarty_tpl->tpl_vars['show_cpager_when']->value == false) {?>d-none <?php }?>mb-3 mb-lg-0"><?php echo $_smarty_tpl->tpl_vars['cpager']->value;?>
</div>
                                </div>
                            </div>
                        </div>
                        <?php if (count($_smarty_tpl->tpl_vars['show_comments']->value) > 0) {?>
                        <div class="container-fluid px-0">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['show_comments']->value, 'comment', false, NULL, 'comments', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
                            <div class="row">
                                <div class="col-2 pr-0">
                                    <div class="comment__image d-none d-lg-flex">
                                        <div class="image__avatar text-hide" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['comment']->value['avatar'];?>
');">
                                        image
                                        </div>
                                    </div>   
                                </div>
                                <div class="col-12 col-lg-10 pl-lg-0">
                                    <div class="comment__context">
                                        <a class="comment__reply" id="doReply" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/details/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['name']->value;
echo $_smarty_tpl->tpl_vars['doOffset']->value;?>
&c=rpl<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
#nav-comments" title="Reply to comment">
                                            <i class="fas fa-reply"></i>
                                        </a>
                                        <?php if ($_smarty_tpl->tpl_vars['comment']->value['user'] == $_smarty_tpl->tpl_vars['currentUser']->value || $_smarty_tpl->tpl_vars['ismoderator']->value == "true") {?>
                                            <a class="comment__delete" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/details/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['name']->value;
echo $_smarty_tpl->tpl_vars['doOffset']->value;?>
&c=del<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
#nav-comments" title="Remove comment">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        <?php }?>
                                        <div class="context__username">
                                            <?php if ($_smarty_tpl->tpl_vars['comment']->value['username'] != '') {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/profile/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['comment']->value['username'], 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['username'];?>
</a>
                                                <?php if ($_smarty_tpl->tpl_vars['comment']->value['uTitle'] != '') {?>
                                                    <span class="username__title">(<?php echo $_smarty_tpl->tpl_vars['comment']->value['uTitle'];?>
)</span>
                                                <?php }?>
                                            <?php } else { ?>
                                                <span><?php echo $_smarty_tpl->tpl_vars['userUnavailable']->value;?>
</span>
                                            <?php }?>
                                        </div>
                                        <div class="context__date"><?php echo $_smarty_tpl->tpl_vars['comment']->value['date'];?>
</div>
                                        <div class="context__text"><?php echo $_smarty_tpl->tpl_vars['comment']->value['message'];?>
</div>
                                        <?php if ($_smarty_tpl->tpl_vars['comment']->value['replies'] != NULL) {?>
                                        <div class="comment__replies">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value['replies'], 'reply');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
?>
                                            <div class="replies__context">
                                                <a class="reply" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/details/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['name']->value;
echo $_smarty_tpl->tpl_vars['doOffset']->value;?>
&c=rpl<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
#nav-comments" title="Reply to comment">
                                                    <i class="fas fa-reply"></i>
                                                </a>
                                                <?php if ($_smarty_tpl->tpl_vars['reply']->value['user'] == $_smarty_tpl->tpl_vars['currentUser']->value || $_smarty_tpl->tpl_vars['ismoderator']->value == "true") {?>
                                                    <a class="reply__delete" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/details/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['name']->value;
echo $_smarty_tpl->tpl_vars['doOffset']->value;?>
&c=del<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
#nav-comments" title="Delete reply">
                                                        <i class="fas fa-times"></i>
                                                    </a>
                                                <?php }?>
                                                <div class="context__username">
                                                    <?php if ($_smarty_tpl->tpl_vars['reply']->value['username'] != '') {?>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/profile/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['reply']->value['username'], 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['username'];?>
</a>
                                                        <?php if ($_smarty_tpl->tpl_vars['reply']->value['uTitle'] != '') {?>
                                                            <span class="username__title">(<?php echo $_smarty_tpl->tpl_vars['reply']->value['uTitle'];?>
)</span>
                                                        <?php }?>
                                                    <?php } else { ?>
                                                        <span><?php echo $_smarty_tpl->tpl_vars['userUnavailable']->value;?>
</span>
                                                    <?php }?>
                                                </div>
                                                <div class="context__date"><?php echo $_smarty_tpl->tpl_vars['reply']->value['date'];?>
</div>
                                                <div class="context__text"><?php echo $_smarty_tpl->tpl_vars['reply']->value['message'];?>
</div>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    <?php }?>
                                    </div>
                                </div>
                            </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end">
                                    <div class="pager--bottom">
                                        <a id="addNewCommentBottom" href="#nav-comments" class="comment__post order-1" title="Add a new comment for this torrent">Post a comment</a>
                                        <div class="pager--bottom__pager <?php if ($_smarty_tpl->tpl_vars['show_cpager_when']->value == false) {?>d-none <?php }?>mt-3 mt-lg-0 order-0 order-lg-1"><?php echo $_smarty_tpl->tpl_vars['cpager']->value;?>
</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <div class="tab-pane fade" id="nav-snatchers" aria-labelledby="nav-snatchers-tab">
                        <div class="snatchers-list">
                        <?php if (count($_smarty_tpl->tpl_vars['showSnatchers']->value) > 0) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['showSnatchers']->value, 'snatch');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['snatch']->value) {
?>
                                <div class="row bg <?php if ($_smarty_tpl->tpl_vars['ismoderator']->value == "true") {
if ($_smarty_tpl->tpl_vars['snatch']->value['ratio'] < 0.5) {?>bg--red<?php } else { ?>bg--green<?php }
} else {
echo smarty_function_cycle(array('values'=>'bg--light,bg--dark'),$_smarty_tpl);
}?>">
                                    <div class="col-6 col-lg-5 pl-0 pl-lg-1 d-flex align-items-center">
                                        <span class="display__title">
                                        <?php if ($_smarty_tpl->tpl_vars['snatch']->value['username'] == '') {?>
                                            <?php echo $_smarty_tpl->tpl_vars['userUnavailable']->value;?>

                                        <?php } else { ?>
                                            <img class="d-none d-lg-inline-block" src="<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/img/flags/domains/<?php echo $_smarty_tpl->tpl_vars['snatch']->value['flagpic'];?>
" alt="flag" title="<?php echo $_smarty_tpl->tpl_vars['snatch']->value['c_name'];?>
" />
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/profile/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['snatch']->value['username'], 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['snatch']->value['username'];?>
</a>
                                        <?php }?>
                                        </span>
                                    </div>
                                    <div class="col-6 col-lg-5 d-flex justify-content-end pr-0 pr-lg-2">
                                        <span class="display__size"><?php echo $_smarty_tpl->tpl_vars['snatch']->value['date'];?>
</span>
                                    </div>
                                    <div class="col-3 col-lg-2 d-none d-lg-flex justify-content-end pr-1">
                                        <span class="display__date"><?php echo smarty_modifier_timeago($_smarty_tpl->tpl_vars['snatch']->value['tstamp']);?>
<strong>ago</strong></span>
                                    </div>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php if ($_smarty_tpl->tpl_vars['minReseedDate']->value > $_smarty_tpl->tpl_vars['added']->value && $_smarty_tpl->tpl_vars['seeders']->value <= 5 && $_smarty_tpl->tpl_vars['userRatio']->value >= 0.5) {?>
                                <span id="doReseed">Request a re-seed</span>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['show_pager_when']->value) {?>
                            <div class="row mt-2">
                                <div class="col-12 d-flex justify-content-end pr-0">
                                    <div class="pager--snatchers">
                                        <div class="pager--bottom__pager"><?php echo $_smarty_tpl->tpl_vars['spager']->value;?>
</div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        <?php } else { ?>
                            <div class="snatchers__no-stats">
                                <span class="no-stats__title">No snatchers found</span>
                                <span class="no-stats__text">Unfortunately there's no snatcher data to display for this torrent</span>
                            </div>
                        <?php }?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-matches" aria-labelledby="nav-matches-tab">
                      Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                    </div>
                    <div class="tab-pane fade" id="nav-screens" aria-labelledby="nav-screens-tab">
                      Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section><?php }
}
