<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 18:21:19
  from '/var/www/html/blog/templates/admin/insert-post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ede657fe35be7_03412178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ed5b7eae39968cacad790379be6fcb234b91077' => 
    array (
      0 => '/var/www/html/blog/templates/admin/insert-post.tpl',
      1 => 1591633189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ede657fe35be7_03412178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/blog/common/smarty/plugins/modifier.fsize_format.php','function'=>'smarty_modifier_fsize_format',),));
?>
<section class="pane pane--edit-post">
    <div class="column-header"><?php if ($_smarty_tpl->tpl_vars['post_data']->value) {?>Edit "<?php echo $_smarty_tpl->tpl_vars['post_data']->value['title'];?>
"<?php } else { ?>Add new blogpost<?php }?></div>
    <form method="post" enctype="multipart/form-data" class="edit-post">
        <input type="text" name="title" class="edit-post__title" value="<?php echo $_smarty_tpl->tpl_vars['post_data']->value['title'];?>
" placeholder="Add your title" />
        <textarea name="body" class="edit-post__text" placeholder="Your blogpost"><?php echo $_smarty_tpl->tpl_vars['post_data']->value['body'];?>
</textarea>
        <?php if ($_smarty_tpl->tpl_vars['post_data']->value['images']) {?>
                <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['post_data']->value['images']);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('image', "default_img");?>
            <?php }?>
        <div class="edit-post__upload">
            <input type="file" name="images[]" id="file" class="edit-post__file" multiple />
            <label for="file">
                <i class="fas fa-pencil-alt"></i>
            </label>
            <?php if ($_smarty_tpl->tpl_vars['post_data']->value['images']) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/admin/insert-post/<?php echo $_smarty_tpl->tpl_vars['post_data']->value['id'];?>
?ac=delete" class="edit-post__delete">
                <i class="fas fa-times"></i>
            </a>
            <?php }?>
            <div class="edit-post__image text-hide"
                 style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/images/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
.jpg);">image</div>
            <div class="edit-post__details">
                <span>Upload an image</span>
                <ul>
                    <li>Only images with image type JPEG</li>
                    <li>Maximum filesize of <?php echo smarty_modifier_fsize_format($_smarty_tpl->tpl_vars['max_file_size']->value,"KB",0);?>
</li>
                </ul>
            </div>
        </div>
        <button type="submit" class="button button--primary"><?php if ($_smarty_tpl->tpl_vars['post_data']->value) {?>Edit<?php } else { ?>Add<?php }?> post</button>
    </form>
</section><?php }
}
