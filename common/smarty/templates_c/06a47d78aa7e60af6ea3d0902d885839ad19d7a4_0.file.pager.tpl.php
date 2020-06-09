<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-16 17:05:59
  from '/var/www/html/racingforme/themes/templates/rfm_default/pager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec0015707f758_55152860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06a47d78aa7e60af6ea3d0902d885839ad19d7a4' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/rfm_default/pager.tpl',
      1 => 1589641552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec0015707f758_55152860 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/racingforme/include/smarty/plugins/modifier.roundup.php','function'=>'smarty_modifier_roundup',),));
$_smarty_tpl->_assignInScope('pages', smarty_modifier_roundup(($_smarty_tpl->tpl_vars['pagertotalitems']->value/$_smarty_tpl->tpl_vars['pageritemsperpage']->value)));
$_smarty_tpl->_assignInScope('currentpage', ($_smarty_tpl->tpl_vars['pageroffset']->value+$_smarty_tpl->tpl_vars['pageritemsperpage']->value)/$_smarty_tpl->tpl_vars['pageritemsperpage']->value);
$_smarty_tpl->_assignInScope('upperhalfwaypoint', (smarty_modifier_roundup((($_smarty_tpl->tpl_vars['pages']->value-$_smarty_tpl->tpl_vars['currentpage']->value)/2)))+$_smarty_tpl->tpl_vars['currentpage']->value);?>
 
<?php if ($_smarty_tpl->tpl_vars['pages']->value > 1) {?>
<div id="pager"><?php if ($_smarty_tpl->tpl_vars['currentpage']->value > 1) {?><span class="pager__text--previous"><a class="d-none d-lg-inline-block" title="Previous page" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;
echo $_smarty_tpl->tpl_vars['pagerquerybase']->value;
echo $_smarty_tpl->tpl_vars['pageroffset']->value-$_smarty_tpl->tpl_vars['pageritemsperpage']->value;
echo $_smarty_tpl->tpl_vars['pagerquerysuffix']->value;?>
">Previous</a><a class="d-inline-block d-lg-none" title="Previous page" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;
echo $_smarty_tpl->tpl_vars['pagerquerybase']->value;
echo $_smarty_tpl->tpl_vars['pageroffset']->value-$_smarty_tpl->tpl_vars['pageritemsperpage']->value;
echo $_smarty_tpl->tpl_vars['pagerquerysuffix']->value;?>
"><i class="fas fa-angle-left"></i></a></span>&nbsp;<span class="pager__number"><a title="Go to page 1" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;
echo $_smarty_tpl->tpl_vars['pagerquerybase']->value;?>
0<?php echo $_smarty_tpl->tpl_vars['pagerquerysuffix']->value;?>
">1</a></span>&nbsp;<?php }
if ($_smarty_tpl->tpl_vars['currentpage']->value > 3) {?><span class="pager__dots">...</span><?php }
if ($_smarty_tpl->tpl_vars['currentpage']->value > 2) {?><span class="pager__number"><a title="Go to page <?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;?>
" id="offsetprev" alt="<?php echo $_smarty_tpl->tpl_vars['pageroffset']->value-$_smarty_tpl->tpl_vars['pageritemsperpage']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;
echo $_smarty_tpl->tpl_vars['pagerquerybase']->value;
echo $_smarty_tpl->tpl_vars['pageroffset']->value-$_smarty_tpl->tpl_vars['pageritemsperpage']->value;
echo $_smarty_tpl->tpl_vars['pagerquerysuffix']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;?>
</a></span>&nbsp;<?php }?><span class="pager__current" title="Current page <?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
</span><?php if (($_smarty_tpl->tpl_vars['currentpage']->value+1) < $_smarty_tpl->tpl_vars['pages']->value) {?><span class="pager__number"><a title="Go to page <?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;?>
" id="offsetnext" alt="<?php echo $_smarty_tpl->tpl_vars['pageroffset']->value+$_smarty_tpl->tpl_vars['pageritemsperpage']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;
echo $_smarty_tpl->tpl_vars['pagerquerybase']->value;
echo $_smarty_tpl->tpl_vars['pageroffset']->value+$_smarty_tpl->tpl_vars['pageritemsperpage']->value;
echo $_smarty_tpl->tpl_vars['pagerquerysuffix']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;?>
</a></span><?php }
if (($_smarty_tpl->tpl_vars['currentpage']->value+1) < ($_smarty_tpl->tpl_vars['pages']->value-1) && ($_smarty_tpl->tpl_vars['currentpage']->value+2) < $_smarty_tpl->tpl_vars['upperhalfwaypoint']->value) {?><span class="pager__dots">...</span><?php }
if ($_smarty_tpl->tpl_vars['upperhalfwaypoint']->value != $_smarty_tpl->tpl_vars['pages']->value && $_smarty_tpl->tpl_vars['upperhalfwaypoint']->value != ($_smarty_tpl->tpl_vars['currentpage']->value+1)) {?><span class="pager__number"><a title="Go to page <?php echo $_smarty_tpl->tpl_vars['upperhalfwaypoint']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;
echo $_smarty_tpl->tpl_vars['pagerquerybase']->value;
echo $_smarty_tpl->tpl_vars['upperhalfwaypoint']->value*$_smarty_tpl->tpl_vars['pageritemsperpage']->value;
echo $_smarty_tpl->tpl_vars['pagerquerysuffix']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['upperhalfwaypoint']->value;?>
</a></span><?php }
if (($_smarty_tpl->tpl_vars['upperhalfwaypoint']->value+1) < $_smarty_tpl->tpl_vars['pages']->value) {?><span class="pager__dots">...</span><?php }
if ($_smarty_tpl->tpl_vars['pages']->value > $_smarty_tpl->tpl_vars['currentpage']->value) {?><span class="pager__number"><a title="Go to page <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;
echo $_smarty_tpl->tpl_vars['pagerquerybase']->value;
echo ($_smarty_tpl->tpl_vars['pages']->value*$_smarty_tpl->tpl_vars['pageritemsperpage']->value)-$_smarty_tpl->tpl_vars['pageritemsperpage']->value;
echo $_smarty_tpl->tpl_vars['pagerquerysuffix']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</a></span><span class="pager__text--next"><a class="d-none d-lg-inline-block" title="Next page" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;
echo $_smarty_tpl->tpl_vars['pagerquerybase']->value;
echo $_smarty_tpl->tpl_vars['pageroffset']->value+$_smarty_tpl->tpl_vars['pageritemsperpage']->value;
echo $_smarty_tpl->tpl_vars['pagerquerysuffix']->value;?>
">Next</a><a class="d-inline-block d-lg-none" title="Next page" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;
echo $_smarty_tpl->tpl_vars['pagerquerybase']->value;
echo $_smarty_tpl->tpl_vars['pageroffset']->value+$_smarty_tpl->tpl_vars['pageritemsperpage']->value;
echo $_smarty_tpl->tpl_vars['pagerquerysuffix']->value;?>
"><i class="fas fa-angle-right"></i></a></span><?php }?></div>
<?php }
}
}
