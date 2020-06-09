<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-06 23:43:55
  from '/var/www/html/blog/templates/admin/view-categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edc0e1b9ef4b0_16241276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84b21350602f21fbaecc85434561a7be27316d68' => 
    array (
      0 => '/var/www/html/blog/templates/admin/view-categories.tpl',
      1 => 1591479710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edc0e1b9ef4b0_16241276 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="pane pane--all-categories">
    <div class="category-add">
        <form method="post" action="">
            <input type="text" name="title" id="show-title" value="" placeholder="Add a category" />
            <button type="submit" class="button button--primary">Add category</button>
        </form>
    </div>
    <div class="all-categories__header">
        <div class="column-header">Categories</div>
        <div class="column-header">Posts</div>
    </div>
    <div class="all-categories">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
            <div class="show-category-data">
                <div class="show-delete">
                    <span>Are you sure you want to delete this category?</span>
                    <form method="post" action="delete-category">
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" />
                        <button type="submit">
                            <i class="fas fa-trash-alt" title="Delete category"></i>
                        </button>
                    </form>
                    <i class="fas fa-times" title="Cancel"></i>
                </div>
                <div class="title-wrapper">
                    <span id="title_<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="category__title"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</span>
                    <div class="edit-options">
                        <span class="edit-options__link">
                            <form method="post" action="">
                                <button type="submit" class="edit_category">Edit</button>
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" />
                            </form>
                        </span>
                        <span class="edit-options__link">
                            <a class="delete-post" id="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">Delete</a>
                        </span>
                    </div>
                </div>
                <span><?php if ($_smarty_tpl->tpl_vars['category']->value['total_posts']) {
echo $_smarty_tpl->tpl_vars['category']->value['total_posts'];
} else { ?>0<?php }?></span>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</section><?php }
}
