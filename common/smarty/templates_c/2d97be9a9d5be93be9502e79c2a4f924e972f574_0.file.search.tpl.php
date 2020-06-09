<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 00:36:30
  from '/var/www/html/blog/templates/default/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edebd6eb12d79_75468100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d97be9a9d5be93be9502e79c2a4f924e972f574' => 
    array (
      0 => '/var/www/html/blog/templates/default/search.tpl',
      1 => 1591655789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edebd6eb12d79_75468100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/blog/common/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<section class="pane pane--search">
<div class="column-header"><?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?>Search results for "<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"<?php } else { ?>Blog archive<?php }?></div>
    <div class="row">
        <div class="col-12 search_results">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search_results']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>
                <div class="recent-post mb-3">
                    <?php if ($_smarty_tpl->tpl_vars['result']->value['images']) {?>
                        <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['result']->value['images']);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('image', "default_img");?>
                    <?php }?>
                    <div class="recent-post__image text-hide"
                            style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/images/thumbs/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
.jpg);">image</div>
                    <div class="recent-post__content content">
                        <div class="content__title">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['post_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['title'];?>
</a>
                        </div>
                        <div class="content__data">
                            <span><?php echo $_smarty_tpl->tpl_vars['result']->value['username'];?>
</span>
                            <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['result']->value['date'],"%b %e, %Y");?>
</span>
                        </div>
                        <div class="content__text"><?php echo $_smarty_tpl->tpl_vars['result']->value['body'];?>
</div>
                        <div class="content__comments">
                            <?php if ($_smarty_tpl->tpl_vars['result']->value['comments'] === null) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['result']->value['comments'];
}?> comment<?php if ($_smarty_tpl->tpl_vars['result']->value['comments'] <> 1) {?>s<?php }?>
                        </div>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div class="d-none"><?php echo $_smarty_tpl->tpl_vars['pager']->value;?>
</div>
        </div>
    </div>
</section><?php }
}
