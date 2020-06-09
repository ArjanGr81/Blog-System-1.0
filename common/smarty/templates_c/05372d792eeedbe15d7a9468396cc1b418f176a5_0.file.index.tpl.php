<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-12 20:19:23
  from '/var/www/html/racingforme/themes/templates/rfm_default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebae8ab70f5c0_70205978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05372d792eeedbe15d7a9468396cc1b418f176a5' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/rfm_default/index.tpl',
      1 => 1589307559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebae8ab70f5c0_70205978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/racingforme/include/smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<section class="pane pane--hero">
    <div class="container-fluid" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/img/hero/hero_front.jpg');">
        <div class="skewed-block"></div>
        <div class="row">
            <div class="col-12 p-0">
                <div class="container-fluid p-0 hero">
                    <div class="carousel carousel--hero-main">
                        <?php echo $_smarty_tpl->tpl_vars['inputData']->value;?>

                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pane pane--hero-calendar">
    <div class="container-fluid px-lg-0">
        <div class="row calendar-options">
            <div class="col-12 col-lg-6">
                <div class="calendar-options__button">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/calendar" class="btn--primary">
                        <span>view calendar</span>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-6 d-none d-lg-block">
                <div class="calendar-options__dates">
                    <div class="schedule_date">
                        <span>race schedule</span>
                        <span><?php if ($_smarty_tpl->tpl_vars['start_date']->value == '') {?>Scheduled events<?php } else {
echo $_smarty_tpl->tpl_vars['start_date']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['end_date']->value;
}?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pane pane--hero-nav">
    <div class="container-fluid px-lg-0">
        <div class="row">
            <div class="col-12">
                <div class="carousel carousel--hero-nav">
                    <?php echo $_smarty_tpl->tpl_vars['hero_nav']->value;?>

                </div> 
            </div>
        </div>
    </div>
</section>
<section class="pane pane--news">
    <div class="container-fluid px-1 px-lg-2">
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newsItem']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
                <div class="col-12">
                    <div class="news__title">
                        <span>latest news</span>
                        <span><?php echo $_smarty_tpl->tpl_vars['news']->value['subject'];?>
</span>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="news__text"><?php echo $_smarty_tpl->tpl_vars['news']->value['col_1'];?>
</div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="news__text news__text--brother"><?php echo $_smarty_tpl->tpl_vars['news']->value['col_2'];?>
</div>
                </div>
                <div class="col-10">
                    <a class="btn--primary" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/forums/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['news']->value['link_cat'], 'UTF-8');?>
/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['news']->value['link_forum'], 'UTF-8');?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['topicID'];?>
-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['news']->value['link_topic'], 'UTF-8');?>
">
                        <span>read more</span>
                    </a>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>
<section class="pane pane--forum-items">
    <div class="container-fluid px-1 px-lg-2">
        <div class="row">
            <div class="col-12">
                <div class="pane__title">
                    <span>recent active forum threads</span>
                    <span>ten most recent threads</span>
                </div>
            </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lastTopics']->value, 'topic');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->value) {
?>
            <div class="col-12">
                <div class="forum-item">
                    <div class="forum-item__thread-data">
                        <span class="forum-item__title">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/forums/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['topic']->value['link_cat'], 'UTF-8');?>
/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['topic']->value['link_forum'], 'UTF-8');?>
/<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['topic']->value['link_topic'], 'UTF-8');?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['topic']->value['subject'],"60"," ...");?>
</a>
                        </span>
                        <span class="forum-item__date"><?php echo $_smarty_tpl->tpl_vars['topic']->value['lastPost']['postAdded'];?>
</span>
                    </div>
                    <div class="forum-item__post-data">
                        <div class="thread-starter">
                            <label>by</label>
                            <span><?php echo $_smarty_tpl->tpl_vars['topic']->value['thread_starter'];?>
</span>
                        </div>
                        <div class="last-post">
                            <label>last post</label>
                            <span><?php echo $_smarty_tpl->tpl_vars['topic']->value['lastPost']['username'];?>
</span>
                        </div>
                    </div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/forums/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['topic']->value['link_cat'], 'UTF-8');?>
/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['topic']->value['link_forum'], 'UTF-8');?>
/<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['topic']->value['link_topic'], 'UTF-8');
echo $_smarty_tpl->tpl_vars['topic']->value['lastPost']['setOffset'];?>
"
                       class="forum-item__link"
                       title="Go to last post">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
                <div class="post-status <?php echo $_smarty_tpl->tpl_vars['topic']->value['status'];?>
 text-hide">post status</div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section> <?php }
}
