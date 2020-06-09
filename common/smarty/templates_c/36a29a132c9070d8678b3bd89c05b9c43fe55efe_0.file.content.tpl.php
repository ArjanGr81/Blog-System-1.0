<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 02:13:55
  from '/var/www/html/blog/templates/default/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edd82c3146a88_09135352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36a29a132c9070d8678b3bd89c05b9c43fe55efe' => 
    array (
      0 => '/var/www/html/blog/templates/default/content.tpl',
      1 => 1591575229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd82c3146a88_09135352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/blog/common/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<section class="pane pane--default">
        <div class="row mb-3">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['show_posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->iteration++;
$__foreach_post_0_saved = $_smarty_tpl->tpl_vars['post'];
?>
                <?php if ($_smarty_tpl->tpl_vars['post']->iteration == 1) {?>
                    <div class="col-12 col-md-7 col-lg-8 pr-lg-0">
                        <div class="main-post">
                            <?php if ($_smarty_tpl->tpl_vars['post']->value['images']) {?>
                                <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['post']->value['images']);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('image', "default_img");?>
                            <?php }?>
                            <div class="main-post__image text-hide"
                                 style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/images/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
.jpg);">image</div>
                            <div class="main-post__header">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a>
                            </div>
                            <div class="main-post__data">
                                <span><?php echo $_smarty_tpl->tpl_vars['post']->value['username'];?>
</span>
                                <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date'],"%b %e, %Y");?>
</span>
                            </div>
                            <div class="main-post__content"><?php echo $_smarty_tpl->tpl_vars['post']->value['body'];?>
</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4">
                        <?php } elseif ($_smarty_tpl->tpl_vars['post']->iteration == 2) {?>
                            <div class="top-side-post mt-3 mt-md-0">
                                <?php if ($_smarty_tpl->tpl_vars['post']->value['images']) {?>
                                    <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['post']->value['images']);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('image', "default_img");?>
                                <?php }?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_link'];?>
">
                                    <div class="top-side-post__image text-hide"
                                        style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/images/thumbs/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
.jpg);">image</div>
                                    <div class="top-side-post__title">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a>
                                    </div>
                                    <div class="top-side-post__data">
                                        <span><?php echo $_smarty_tpl->tpl_vars['post']->value['username'];?>
</span>
                                        <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date'],"%b %e, %Y");?>
</span>
                                    </div>
                                </a>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['post']->iteration == 3) {?>
                            <div class="top-side-post mt-3">
                                <?php if ($_smarty_tpl->tpl_vars['post']->value['images']) {?>
                                    <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['post']->value['images']);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('image', "default_img");?>
                                <?php }?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link_url'];?>
">
                                    <div class="top-side-post__image text-hide"
                                        style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/images/thumbs/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
.jpg);">image</div>
                                    <div class="top-side-post__title">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a>
                                    </div>
                                    <div class="top-side-post__data">
                                        <span><?php echo $_smarty_tpl->tpl_vars['post']->value['username'];?>
</span>
                                        <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date'],"%b %e, %Y");?>
</span>
                                    </div>
                                </a>
                            </div>
                    </div>
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['post'] = $__foreach_post_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="front-divider mb-3">Recent posts</div>
                <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_posts']->value, 'recent');
$_smarty_tpl->tpl_vars['recent']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['recent']->value) {
$_smarty_tpl->tpl_vars['recent']->iteration++;
$__foreach_recent_1_saved = $_smarty_tpl->tpl_vars['recent'];
?>
                <div class="col-12 col-md-6 col-lg-12 px-md-2 pr-lg-3">
                    <div class="recent-post mb-3">
                        <?php if ($_smarty_tpl->tpl_vars['recent']->value['images']) {?>
                            <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['recent']->value['images']);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('image', "default_img");?>
                        <?php }?>
                        <div class="recent-post__image<?php if ($_smarty_tpl->tpl_vars['recent']->iteration > 3) {?> d-none<?php }?> text-hide"
                             style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/images/thumbs/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
.jpg);">image</div>
                        <div class="recent-post__content<?php if ($_smarty_tpl->tpl_vars['recent']->iteration > 3) {?> w-100<?php }?> content">
                            <div class="content__title">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['recent']->value['post_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['recent']->value['title'];?>
</a>
                            </div>
                            <div class="content__data">
                                <span><?php echo $_smarty_tpl->tpl_vars['recent']->value['username'];?>
</span>
                                <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['recent']->value['date'],"%b %e, %Y");?>
</span>
                            </div>
                            <div class="content__text<?php if ($_smarty_tpl->tpl_vars['recent']->iteration > 3) {?> pb-2<?php }?>"><?php echo $_smarty_tpl->tpl_vars['recent']->value['body'];?>
</div>
                            <div class="content__comments<?php if ($_smarty_tpl->tpl_vars['recent']->iteration > 3) {?> d-none<?php }?>">
                                <?php if ($_smarty_tpl->tpl_vars['recent']->value['comments'] === null) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['recent']->value['comments'];
}?> comment<?php if ($_smarty_tpl->tpl_vars['recent']->value['comments'] <> 1) {?>s<?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
$_smarty_tpl->tpl_vars['recent'] = $__foreach_recent_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
</section><?php }
}
