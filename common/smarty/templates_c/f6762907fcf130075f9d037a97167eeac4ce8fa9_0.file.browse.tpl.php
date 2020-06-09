<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-17 15:52:03
  from '/var/www/html/racingforme/themes/templates/rfm_default/torrent_browse/browse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec14183e77147_52605354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6762907fcf130075f9d037a97167eeac4ce8fa9' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/rfm_default/torrent_browse/browse.tpl',
      1 => 1589723519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec14183e77147_52605354 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/racingforme/include/smarty/plugins/modifier.fsize_format.php','function'=>'smarty_modifier_fsize_format',),));
?>

<?php if (count($_smarty_tpl->tpl_vars['results']->value) > 0) {?>
<section class="pane pane--torrents torrent-page">
    <div class="container-fluid px-0 px-lg-2">
        <div class="row mt-2 mt-lg-0 mb-4 mb-lg-0">
            <div class="col-12 d-flex justify-content-end">
                <div class="torrent-page__data">
                    <a class="mark-all" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;
if ($_smarty_tpl->tpl_vars['pageroffset']->value > 0) {
echo $_smarty_tpl->tpl_vars['pagerquerybase']->value;
echo $_smarty_tpl->tpl_vars['pageroffset']->value;?>
&t=read<?php } else { ?>/torrents&t=read<?php }?>">mark torrents seen</a>
                    <div class="torrent-page__pager-top"><?php echo $_smarty_tpl->tpl_vars['pager']->value;?>
</div>
                </div>
            </div>
        </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'day', false, 'date');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['date']->value => $_smarty_tpl->tpl_vars['day']->value) {
?>
        <div class="row mb-1">
            <div class="col-12">
                <span class="torrent-date"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</span>
            </div>
        </div>
        <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['day']->value, 'torrent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['torrent']->value) {
?><div class="col-1 pr-0 my-2 d-none d-lg-flex"><div class="torrent-icon text-hide" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['get_template_dir_url']->value;?>
/library/img/category_icons/cat_icon.jpg');">icon</div></div><div class="col-12 col-lg-11 pl-0 pr-0 pr-lg-3 my-2"><div class="torrent-item"><div class="torrent-item__title mt-1 mt-lg-2"><a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/details/<?php echo $_smarty_tpl->tpl_vars['torrent']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['torrent']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['torrent']->value['name'];?>
</a></div><div class="torrent-item__category d-flex d-lg-none"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['torrent']->value['cat'], 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?><span><a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/search/*?c=<?php echo $_smarty_tpl->tpl_vars['cat']->value['parent_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['parentTitle'];?>
</a></span><span><a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/search/*?c=<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['title'];?>
</a></span><?php
}
} else {
?><span>Unavailable</span><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="torrent-item__media"><?php if ($_smarty_tpl->tpl_vars['torrent']->value['resolution']) {?><div class="media-resolution"><i class="fas fa-expand"></i><?php $_smarty_tpl->_assignInScope('res_parts', explode("x",$_smarty_tpl->tpl_vars['torrent']->value['resolution']));?><span><?php echo $_smarty_tpl->tpl_vars['res_parts']->value[0];?>
</span><?php if ($_smarty_tpl->tpl_vars['res_parts']->value[1]) {?><span>x</span><span><?php echo $_smarty_tpl->tpl_vars['res_parts']->value[1];?>
</span><?php }?></div><?php }
if ($_smarty_tpl->tpl_vars['torrent']->value['bitrate']) {?><div class="media-bitrate"><i class="fas fa-history"></i><span><?php echo $_smarty_tpl->tpl_vars['torrent']->value['bitrate'];?>
 kbps</span><?php if ($_smarty_tpl->tpl_vars['torrent']->value['fps']) {?><span><?php echo $_smarty_tpl->tpl_vars['torrent']->value['fps'];?>
fps</span><?php }?></div><?php }
if ($_smarty_tpl->tpl_vars['torrent']->value['length']) {?><div class="media-length"><i class="fas fa-clock"></i><span><?php echo $_smarty_tpl->tpl_vars['torrent']->value['length'];?>
 minutes</span></div><?php }
if ($_smarty_tpl->tpl_vars['torrent']->value['audiobitrate']) {?><div class="media-audio"><i class="fas fa-volume-off"></i><span><?php echo $_smarty_tpl->tpl_vars['torrent']->value['audiobitrate'];?>
 kbps</span><?php if ($_smarty_tpl->tpl_vars['torrent']->value['frequency']) {?><span><?php echo $_smarty_tpl->tpl_vars['torrent']->value['frequency'];?>
 Hz</span><?php }?></div><?php }?><div class="media-uploader"><i class="fas fa-user"></i><span><?php if ($_smarty_tpl->tpl_vars['torrent']->value['username'] != '') {?><a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/profile/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['torrent']->value['username'], 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['torrent']->value['username'];?>
</a><?php } else { ?>Not available<?php }?></span></div></div><div class="torrent-item__data"><div class="data-seeders"><span><?php echo $_smarty_tpl->tpl_vars['torrent']->value['seeders'];?>
</span><span><?php if ($_smarty_tpl->tpl_vars['torrent']->value['seeders'] <> 1) {?>seeders<?php } else { ?>seeder<?php }?></span></div><div class="data-leechers"><span><?php echo $_smarty_tpl->tpl_vars['torrent']->value['leechers'];?>
</span><span><?php if ($_smarty_tpl->tpl_vars['torrent']->value['leechers'] <> 1) {?>leechers<?php } else { ?>leecher<?php }?></span></div><div class="data-completed"><span><?php echo $_smarty_tpl->tpl_vars['torrent']->value['times_completed'];?>
</span><span><?php if ($_smarty_tpl->tpl_vars['torrent']->value['times_completed'] <> 1) {?>times<?php } else { ?>time<?php }?></span></div><div class="data-size"><i class="fas fa-database"></i><span><?php echo smarty_modifier_fsize_format($_smarty_tpl->tpl_vars['torrent']->value['size']);?>
</span></div><?php if ($_smarty_tpl->tpl_vars['torrent']->value['codec']) {?><div class="data-codec"><i class="fas fa-play-circle"></i><span><?php echo $_smarty_tpl->tpl_vars['torrent']->value['codec'];?>
 <?php if ($_smarty_tpl->tpl_vars['torrent']->value['audiocodec']) {?>/ <?php echo $_smarty_tpl->tpl_vars['torrent']->value['audiocodec'];
}?></span></div><?php }
if ($_smarty_tpl->tpl_vars['torrent']->value['full_lang']) {?><div class="data-language"><i class="fas fa-microphone"></i><span><?php echo $_smarty_tpl->tpl_vars['torrent']->value['full_lang'];?>
</span></div><?php }?></div><div class="torrent-item__download"><a href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;?>
/download/<?php echo $_smarty_tpl->tpl_vars['torrent']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['torrent']->value['name'];?>
" target="_blank"><i class="fas fa-arrow-alt-circle-down" title="Download <?php echo $_smarty_tpl->tpl_vars['torrent']->value['name'];?>
"></i></a></div></div><div class="torrent-status<?php if ($_smarty_tpl->tpl_vars['torrent']->value['new'] == true) {?> new<?php }?> text-hide">torrent status</div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div class="row mt-0">
            <div class="col-12 d-flex justify-content-end">
                <div class="torrent-page__data torrent-page__data--bottom">
                    <a class="mark-all order-1 " href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;
if ($_smarty_tpl->tpl_vars['pageroffset']->value > 0) {
echo $_smarty_tpl->tpl_vars['pagerquerybase']->value;
echo $_smarty_tpl->tpl_vars['pageroffset']->value;?>
&t=read<?php } else { ?>/torrents&t=read<?php }?>">mark torrents seen</a>
                    <div class="torrent-page__pager-bottom order-0 order-lg-1"><?php echo $_smarty_tpl->tpl_vars['pager']->value;?>
</div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }
}
}
