<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-06 22:17:55
  from '/var/www/html/blog/templates/admin/view-posts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edbf9f3450575_14268243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '230c81afea41fe92cb2df86ff964fe1040061219' => 
    array (
      0 => '/var/www/html/blog/templates/admin/view-posts.tpl',
      1 => 1591472706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edbf9f3450575_14268243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/blog/common/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<section class="pane pane--all-posts">
    <div class="all-posts__header">
        <div class="column-header">Title</div>
        <div class="column-header">
            <i class="fas fa-comment"></i>
        </div>
        <div class="column-header">
            <i class="fas fa-thumbs-up"></i>
        </div>
    </div>
    <div class="all-posts">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
            <div class="show-post-data">
                <div class="show-delete">
                    <span>Are you sure you want to delete this post?</span>
                    <form method="post" action="delete-post">
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" />
                        <button type="submit">
                            <i class="fas fa-trash-alt" title="Delete post"></i>
                        </button>
                    </form>
                    <i class="fas fa-times" title="Cancel"></i>
                </div>
                <div class="title-wrapper">
                    <span><a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a></span>
                    <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date'],"%A %B %e %Y, %r");?>
</span>
                    <div class="edit-options">
                        <span class="edit-options__link">
                            <a href="insert-post/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">Edit</a>
                        </span>
                        <span class="edit-options__link">
                            <a class="delete-post" id="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">Delete</a>
                        </span>
                    </div>
                </div>
                <span><?php if ($_smarty_tpl->tpl_vars['post']->value['comments']) {
echo $_smarty_tpl->tpl_vars['post']->value['comments'];
} else { ?>0<?php }?></span>
                <span><?php if ($_smarty_tpl->tpl_vars['post']->value['likes']) {
echo $_smarty_tpl->tpl_vars['post']->value['likes'];
} else { ?>0<?php }?></span>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</section><?php }
}
