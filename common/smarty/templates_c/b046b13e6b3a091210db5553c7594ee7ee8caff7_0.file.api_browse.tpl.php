<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-29 14:43:38
  from '/var/www/html/rfm-api/include/templates/api_browse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea9767a9d0fb2_56608182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b046b13e6b3a091210db5553c7594ee7ee8caff7' => 
    array (
      0 => '/var/www/html/rfm-api/include/templates/api_browse.tpl',
      1 => 1588161863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea9767a9d0fb2_56608182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/racingforme/include/smarty/plugins/modifier.fsize_format.php','function'=>'smarty_modifier_fsize_format',),));
echo '<?xml ';?>
version="1.0" encoding="utf-8" <?php echo '?>';?>
 
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:crankshaft="http://www.racingfor.me/DTD/2010/feeds/attributes/">
<channel>
<atom:link href="<?php echo $_smarty_tpl->tpl_vars['api_link']->value;?>
/api/<?php echo $_smarty_tpl->tpl_vars['api_key']->value;?>
/browse" rel="self" type="application/rss+xml" />
<title>Racing For Me</title>
<description>Racing For Me, THE place for motorsports related files</description>
<link><?php echo $_smarty_tpl->tpl_vars['site_link']->value;?>
</link>
<language>en-gb</language>
<webMaster>team@racingfor.me</webMaster>
<category>torrenting,torrents,nzbs,nzb,racing,cms,community</category>
<image>
	<url><?php echo $_smarty_tpl->tpl_vars['site_link']->value;?>
/images/logos/banner.jpg</url>
	<title>Racing For Me</title>
	<link><?php echo $_smarty_tpl->tpl_vars['site_link']->value;?>
</link>
	<description>Visit Racing For Me - Racing files all over the place...</description>
</image>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'release');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['release']->value) {
?>
<item>
    <title><![CDATA[<?php echo rawurlencode($_smarty_tpl->tpl_vars['release']->value['name']);?>
]]></title>
	<guid isPermaLink="true"><?php echo $_smarty_tpl->tpl_vars['site_link']->value;?>
/details/<?php echo $_smarty_tpl->tpl_vars['release']->value['id'];?>
/<?php echo rawurlencode($_smarty_tpl->tpl_vars['release']->value['name']);?>
</guid>
	<link><?php echo $_smarty_tpl->tpl_vars['site_link']->value;?>
/details/<?php echo $_smarty_tpl->tpl_vars['release']->value['id'];?>
/<?php echo rawurlencode($_smarty_tpl->tpl_vars['release']->value['name']);?>
</link>
	<comments><?php echo $_smarty_tpl->tpl_vars['site_link']->value;?>
/details/<?php echo $_smarty_tpl->tpl_vars['release']->value['id'];?>
/<?php echo rawurlencode($_smarty_tpl->tpl_vars['release']->value['name']);?>
#nav-comments</comments> 	
	<pubDate><?php echo $_smarty_tpl->tpl_vars['release']->value['added'];?>
</pubDate> 
	<category><?php echo $_smarty_tpl->tpl_vars['release']->value['category'];?>
</category> 	
	<description><![CDATA[<?php echo rawurlencode($_smarty_tpl->tpl_vars['release']->value['name']);?>
]]></description>
	<enclosure url="<?php echo $_smarty_tpl->tpl_vars['api_link']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['api_key']->value;?>
/get/<?php echo $_smarty_tpl->tpl_vars['release']->value['id'];?>
/<?php echo rawurlencode($_smarty_tpl->tpl_vars['release']->value['name']);?>
" length="<?php echo $_smarty_tpl->tpl_vars['release']->value['size'];?>
" type="application/x-bittorrent" />
        <crankshaft:attr name="category" value="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['release']->value['cat'], 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['parentTitle'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
, <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}
} else {
?>Unavailable<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>" />
        <crankshaft:attr name="size" value="<?php echo smarty_modifier_fsize_format($_smarty_tpl->tpl_vars['release']->value['size']);?>
" />
	<?php if (isset($_smarty_tpl->tpl_vars['attrs']->value['files'])) {?>
        <crankshaft:attr name="files" value="<?php echo $_smarty_tpl->tpl_vars['release']->value['numfiles'];?>
" />
    <?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['attrs']->value['poster'])) {?>
        <crankshaft:attr name="uploader" value="<?php if ($_smarty_tpl->tpl_vars['release']->value['username'] == '') {?>Unavailable<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['release']->value['username'], ENT_QUOTES, 'UTF-8', true);
}?>" />
    <?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['attrs']->value['comments'])) {?>
        <crankshaft:attr name="comments" value="<?php echo $_smarty_tpl->tpl_vars['release']->value['comments'];?>
" />
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['attrs']->value['views'])) {?>
        <crankshaft:attr name="views" value="<?php echo $_smarty_tpl->tpl_vars['release']->value['views'];?>
" />
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['attrs']->value['hits'])) {?>
        <crankshaft:attr name="hits" value="<?php if ($_smarty_tpl->tpl_vars['type']->value == "nzb") {
echo $_smarty_tpl->tpl_vars['release']->value['grabs'];
} else {
echo $_smarty_tpl->tpl_vars['release']->value['hits'];
}?>" />
    <?php }?>
</item>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</channel>
</rss><?php }
}
