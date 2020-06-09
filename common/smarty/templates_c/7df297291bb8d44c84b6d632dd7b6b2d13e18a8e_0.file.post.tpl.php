<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 04:21:58
  from '/var/www/html/blog/templates/default/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edef246803343_23429811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7df297291bb8d44c84b6d632dd7b6b2d13e18a8e' => 
    array (
      0 => '/var/www/html/blog/templates/default/post.tpl',
      1 => 1591669316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edef246803343_23429811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/blog/common/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<section class="pane pane--post">
    <div class="column-header"><?php echo $_smarty_tpl->tpl_vars['post_data']->value['title'];?>
</div>
    <div class="single-post">
        <?php if ($_smarty_tpl->tpl_vars['post_data']->value['images']) {?>
            <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['post_data']->value['images']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('image', "default_img");?>
        <?php }?>
        <div class="single-post__image text-hide"
                style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/images/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
.jpg);">image</div>
        <div class="single-post__header"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
        <div class="single-post__data">
            <span><?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</span>
            <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post_data']->value['date'],"%b %e, %Y");?>
</span>
            <span>Estimated reading time <?php echo $_smarty_tpl->tpl_vars['read_time']->value;?>
</span>
        </div>
        <div class="single-post__content"><?php echo $_smarty_tpl->tpl_vars['post_content']->value;?>
</div>
    </div>
</section>

<section id="comments" class="pane pane--comments">
    <div class="comment-divider my-3">Comments</div>
    <div id="show_insert_box" class="add-comment <?php if ($_smarty_tpl->tpl_vars['is_edit']->value || $_smarty_tpl->tpl_vars['is_reply']->value) {?>d-flex<?php }?>">
        <div class="add-comment__content">
            <label id="insert-label"><?php if ($_smarty_tpl->tpl_vars['is_reply']->value) {?>Reply to<?php } elseif ($_smarty_tpl->tpl_vars['is_edit']->value) {?>Edit<?php } else { ?>Add<?php }?> a comment</label>
            <form method="post" action="">
                <button type="submit" class="add-comment__submit" title="Submit comment">
                    <i class="fas fa-check"></i>
                </button>
                <a id="close_insert_box" class="add-comment__exit" title="Cancel"<?php if ($_smarty_tpl->tpl_vars['is_reply']->value || $_smarty_tpl->tpl_vars['is_edit']->value) {?> onclick="window.history.back();"<?php }?>>
                    <i class="fas fa-times"></i>
                </a>
                <?php if ($_smarty_tpl->tpl_vars['is_reply']->value) {?>
                    <div class="show-reply">
                        <div class="context__username">
                            <?php echo $_smarty_tpl->tpl_vars['reply_author']->value;?>

                        </div>
                        <div class="context__date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['reply_date']->value,"%A %B %e %Y, %r");?>
</div>
                        <div class="context__title"><?php echo $_smarty_tpl->tpl_vars['reply_title']->value;?>
</div>
                        <div class="context__text"><?php echo $_smarty_tpl->tpl_vars['reply_body']->value;?>
</div>
                    </div>
                    <input type="hidden" name="reply_id" value="<?php echo $_smarty_tpl->tpl_vars['reply_id']->value;?>
" />
                <?php }?>
                <div class="add-comment__title">
                    <input type="text" name="title" id="insert-title" value="<?php echo $_smarty_tpl->tpl_vars['edit_title']->value;?>
" placeholder="Add a title (optional)..." />
                </div>
                <div id="add-comment">
                    <textarea name="body" id="insert-box" class="insert-text" placeholder="Add your comment..."><?php echo $_smarty_tpl->tpl_vars['edit_body']->value;?>
</textarea>
                    <input type="hidden" name="action" value="insert" />
                    <input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
" />
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['show_id']->value;?>
" />
                </div>
            </form>
        </div>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['comment']->value['avatar']) {?>
            <?php $_smarty_tpl->_assignInScope('avatar', $_smarty_tpl->tpl_vars['comment']->value['avatar']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('avatar', "default_avatar");?>
        <?php }?>
        <div class="single-comment">
            <div class="delete-comment">
                <span>Are you sure you want to delete this comment?</span>
                <form method="post" action="">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
" />
                    <input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
" />
                    <input type="hidden" name="action" value="delete" />
                    <button type="submit">
                        <i class="fas fa-trash-alt" title="Delete post"></i>
                    </button>
                    <i class="fas fa-times" title="Cancel"></i>
                </form>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
                <a class="single-comment__reply" id="doReply" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/<?php echo $_smarty_tpl->tpl_vars['post_data']->value['post_link'];
echo $_smarty_tpl->tpl_vars['offset']->value;?>
&do=rpl<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
#comments" title="Reply to comment">
                    <i class="fas fa-reply"></i>
                </a>
                <?php if ($_smarty_tpl->tpl_vars['comment']->value['author'] == $_smarty_tpl->tpl_vars['user']->value->id || $_smarty_tpl->tpl_vars['is_admin']->value) {?>
                    <a class="single-comment__edit" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/<?php echo $_smarty_tpl->tpl_vars['post_data']->value['post_link'];
echo $_smarty_tpl->tpl_vars['offset']->value;?>
&do=edt<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
#comments" title="Edit comment">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a class="single-comment__delete" title="Remove comment">
                        <i class="fas fa-times"></i>
                    </a>
                <?php }?>
            <?php }?>
            <div class="single-comment__user user">
                <div class="user__avatar text-hide"
                     style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/images/avatars/<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
.jpg);">avatar</div>
                <div class="user__data data">
                    <div class="data__username">
                        <?php if ($_smarty_tpl->tpl_vars['comment']->value['username'] != '') {?>
                            <?php echo $_smarty_tpl->tpl_vars['comment']->value['username'];?>

                        <?php } else { ?>
                            <span>Unavailable</span>
                        <?php }?>
                    </div>
                    <div class="data__date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['date'],"%b %e, %Y");?>
</div>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['comment']->value['title']) {?>
                <div class="single-comment__title"><?php echo $_smarty_tpl->tpl_vars['comment']->value['title'];?>
</div>
            <?php }?>
            <div class="single-comment__content"><?php echo $_smarty_tpl->tpl_vars['comment']->value['body'];?>
</div>
            <div class="single-comment__likes">
            <?php $_smarty_tpl->_assignInScope('like_active', $_smarty_tpl->tpl_vars['comment']->value['like_unlike'] == 'like');?>
            <?php $_smarty_tpl->_assignInScope('unlike_active', $_smarty_tpl->tpl_vars['comment']->value['like_unlike'] == 'unlike');?>
            <?php $_smarty_tpl->_assignInScope('disabled', $_smarty_tpl->tpl_vars['comment']->value['author'] == $_smarty_tpl->tpl_vars['user']->value->id);?>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/<?php echo $_smarty_tpl->tpl_vars['post_data']->value['post_link'];?>
">
                    <input type="radio" name="type" value="like" class="radiobox_like <?php if ($_smarty_tpl->tpl_vars['like_active']->value) {?>active<?php }?>" <?php if ($_smarty_tpl->tpl_vars['logged_in']->value && $_smarty_tpl->tpl_vars['like_active']->value) {?>checked<?php }?> <?php if (!$_smarty_tpl->tpl_vars['logged_in']->value || $_smarty_tpl->tpl_vars['disabled']->value) {?>disabled<?php }?> />
                    <div class="count-likes" id="<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
_like"><?php echo $_smarty_tpl->tpl_vars['comment']->value['like_count'];?>
</div>
                    <input type="radio" name="type" value="unlike" class="radiobox_unlike <?php if ($_smarty_tpl->tpl_vars['unlike_active']->value) {?>active<?php }?>" <?php if ($_smarty_tpl->tpl_vars['logged_in']->value && $_smarty_tpl->tpl_vars['unlike_active']->value) {?>checked<?php }?> <?php if (!$_smarty_tpl->tpl_vars['logged_in']->value || $_smarty_tpl->tpl_vars['disabled']->value) {?>disabled<?php }?> />
                    <div class="count-likes" id="<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
_unlike"><?php echo $_smarty_tpl->tpl_vars['comment']->value['unlike_count'];?>
</div>
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
" />
                </form>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['comment']->value['replies'] != NULL) {?>
                <div class="single-comment__replies">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value['replies'], 'reply');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['reply']->value['avatar']) {?>
                        <?php $_smarty_tpl->_assignInScope('avatar', $_smarty_tpl->tpl_vars['reply']->value['avatar']);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('avatar', "default_avatar");?>
                    <?php }?>
                    <div class="replies-content">
                        <div class="delete-reply">
                            <span>Are you sure you want to delete this reply?</span>
                            <form method="post" action="">
                                <input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
" />
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
" />
                                <input type="hidden" name="action" value="delete" />
                                <button type="submit">
                                    <i class="fas fa-trash-alt" title="Delete post"></i>
                                </button>
                                <i class="fas fa-times" title="Cancel"></i>
                            </form>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
                            <a class="reply" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/<?php echo $_smarty_tpl->tpl_vars['post_data']->value['post_link'];
echo $_smarty_tpl->tpl_vars['offset']->value;?>
?do=rpl<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
#comments" title="Reply to comment">
                                <i class="fas fa-reply"></i>
                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['reply']->value['author'] == $_smarty_tpl->tpl_vars['user']->value->id || $_smarty_tpl->tpl_vars['is_admin']->value) {?>
                                <a class="reply__edit" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/<?php echo $_smarty_tpl->tpl_vars['post_data']->value['post_link'];
echo $_smarty_tpl->tpl_vars['offset']->value;?>
&do=edt<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
#comments" title="Edit reply">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a class="reply__delete" title="Remove reply">
                                    <i class="fas fa-times"></i>
                                </a>
                            <?php }?>
                        <?php }?>
                        <div class="replies-content__data user">
                            <div class="user__avatar text-hide"
                                style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/images/avatars/<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
.jpg);">avatar</div>
                            <div class="user__data data">
                                <div class="data__username">
                                    <?php if ($_smarty_tpl->tpl_vars['reply']->value['username'] != '') {?>
                                        <?php echo $_smarty_tpl->tpl_vars['reply']->value['username'];?>

                                    <?php } else { ?>
                                        <span>Unavailable</span>
                                    <?php }?>
                                </div>
                                <div class="data__date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['reply']->value['date'],"%b %e, %Y");?>
</div>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['reply']->value['title']) {?>
                            <div class="replies-content__title"><?php echo $_smarty_tpl->tpl_vars['reply']->value['title'];?>
</div>
                        <?php }?>
                        <div class="replies-content__text"><?php echo $_smarty_tpl->tpl_vars['reply']->value['body'];?>
</div>
                        <div class="replies-content__likes">
                            <?php $_smarty_tpl->_assignInScope('like_active', $_smarty_tpl->tpl_vars['reply']->value['like_unlike'] == 'like');?>
                            <?php $_smarty_tpl->_assignInScope('unlike_active', $_smarty_tpl->tpl_vars['reply']->value['like_unlike'] == 'unlike');?>
                            <?php $_smarty_tpl->_assignInScope('disabled', $_smarty_tpl->tpl_vars['reply']->value['author'] == $_smarty_tpl->tpl_vars['user']->value->id);?>
                            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/<?php echo $_smarty_tpl->tpl_vars['post_data']->value['post_link'];?>
">
                                <input type="radio" name="type" value="like" class="radiobox_like <?php if ($_smarty_tpl->tpl_vars['like_active']->value) {?>active<?php }?>" <?php if ($_smarty_tpl->tpl_vars['logged_in']->value && $_smarty_tpl->tpl_vars['like_active']->value) {?>checked<?php }?> <?php if (!$_smarty_tpl->tpl_vars['logged_in']->value || $_smarty_tpl->tpl_vars['disabled']->value) {?>disabled<?php }?> />
                                <div class="count-likes" id="<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
_like"><?php echo $_smarty_tpl->tpl_vars['reply']->value['like_count'];?>
</div>
                                <input type="radio" name="type" value="unlike" class="radiobox_unlike <?php if ($_smarty_tpl->tpl_vars['unlike_active']->value) {?>active<?php }?>" <?php if ($_smarty_tpl->tpl_vars['logged_in']->value && $_smarty_tpl->tpl_vars['unlike_active']->value) {?>checked<?php }?> <?php if (!$_smarty_tpl->tpl_vars['logged_in']->value || $_smarty_tpl->tpl_vars['disabled']->value) {?>disabled<?php }?> />
                                <div class="count-likes" id="<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
_unlike"><?php echo $_smarty_tpl->tpl_vars['reply']->value['unlike_count'];?>
</div>
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
" />
                            </form>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php }?>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section>
<div class="comments-footer">
    <?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
        <a href="#comments" class="button button--primary" id="add_comment">Add a comment</a>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

    </div><?php }
}
