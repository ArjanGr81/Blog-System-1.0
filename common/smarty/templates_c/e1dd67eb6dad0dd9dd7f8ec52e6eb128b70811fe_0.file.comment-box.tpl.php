<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-05 18:49:35
  from '/var/www/html/blog/templates/default/comment-box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eda779fa8f226_61466868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1dd67eb6dad0dd9dd7f8ec52e6eb128b70811fe' => 
    array (
      0 => '/var/www/html/blog/templates/default/comment-box.tpl',
      1 => 1591375767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eda779fa8f226_61466868 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/blog/common/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div id="show_insert_box" class="add-comment">
    <div class="add-comment__content">
        <label><?php if ($_smarty_tpl->tpl_vars['is_reply']->value) {?>Reply to<?php } elseif ($_smarty_tpl->tpl_vars['is_edit']->value) {?>Edit<?php } else { ?>Add<?php }?> a comment</label>
        <form method="post" action="?do=addComment">
            <button type="submit" class="add-comment__submit" title="Submit comment">
                <i class="fas fa-check"></i>
            </button>
            <a id="close_insert_box" class="add-comment__exit" title="Cancel">
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
                <input type="hidden" name="rid" value="<?php echo $_smarty_tpl->tpl_vars['reply_id']->value;?>
" />
            <?php }?>
            <div class="add-comment__title">
                <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['edit_title']->value;?>
" placeholder="Add a title (optional)..." />
            </div>
            <div id="add-comment">
                <textarea name="comment" class="insert-text" placeholder="Add your comment..."><?php echo $_smarty_tpl->tpl_vars['edit_body']->value;?>
</textarea></div>
        </form>
    </div>
</div><?php }
}
