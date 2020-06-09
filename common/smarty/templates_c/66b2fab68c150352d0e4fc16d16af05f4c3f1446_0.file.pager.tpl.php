<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 00:09:44
  from '/var/www/html/blog/templates/default/pager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edeb728d0f298_50969696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66b2fab68c150352d0e4fc16d16af05f4c3f1446' => 
    array (
      0 => '/var/www/html/blog/templates/default/pager.tpl',
      1 => 1591654181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edeb728d0f298_50969696 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/blog/common/smarty/plugins/modifier.roundup.php','function'=>'smarty_modifier_roundup',),));
$_smarty_tpl->_assignInScope('pages', smarty_modifier_roundup(($_smarty_tpl->tpl_vars['pager_total_items']->value/$_smarty_tpl->tpl_vars['pager_items_per_page']->value)));
$_smarty_tpl->_assignInScope('current_page', ($_smarty_tpl->tpl_vars['pager_offset']->value+$_smarty_tpl->tpl_vars['pager_items_per_page']->value)/$_smarty_tpl->tpl_vars['pager_items_per_page']->value);
$_smarty_tpl->_assignInScope('upper_halfway_point', (smarty_modifier_roundup((($_smarty_tpl->tpl_vars['pages']->value-$_smarty_tpl->tpl_vars['current_page']->value)/2)))+$_smarty_tpl->tpl_vars['current_page']->value);?>
 
<?php if ($_smarty_tpl->tpl_vars['pages']->value > 1) {?>
<div id="pager"><?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?><span class="pager__text--previous"><a class="pagination__previous" title="Previous page" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;
echo $_smarty_tpl->tpl_vars['pager_query_base']->value;
echo $_smarty_tpl->tpl_vars['pager_offset']->value-$_smarty_tpl->tpl_vars['pager_items_per_page']->value;
echo $_smarty_tpl->tpl_vars['pager_query_suffix']->value;?>
"><i class="fas fa-angle-left"></i></a></span><span class="pager__number"><a title="Go to page 1" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;
echo $_smarty_tpl->tpl_vars['pager_query_base']->value;?>
0<?php echo $_smarty_tpl->tpl_vars['pager_query_suffix']->value;?>
">1</a></span><?php }
if ($_smarty_tpl->tpl_vars['current_page']->value > 3) {?><span class="pager__dots">...</span><?php }
if ($_smarty_tpl->tpl_vars['current_page']->value > 2) {?><span class="pager__number"><a title="Go to page <?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
" id="offsetprev" alt="<?php echo $_smarty_tpl->tpl_vars['pager_offset']->value-$_smarty_tpl->tpl_vars['pager_items_per_page']->value;?>
"href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;
echo $_smarty_tpl->tpl_vars['pager_query_base']->value;
echo $_smarty_tpl->tpl_vars['pager_offset']->value-$_smarty_tpl->tpl_vars['pager_items_per_page']->value;
echo $_smarty_tpl->tpl_vars['pager_query_suffix']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
</a></span><?php }?><span class="pager__current" title="Current page <?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
</span><?php if (($_smarty_tpl->tpl_vars['current_page']->value+1) < $_smarty_tpl->tpl_vars['pages']->value) {?><span class="pager__number"><a title="Go to page <?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
" id="offsetnext" alt="<?php echo $_smarty_tpl->tpl_vars['pager_offset']->value+$_smarty_tpl->tpl_vars['pager_items_per_page']->value;?>
"href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;
echo $_smarty_tpl->tpl_vars['pager_query_base']->value;
echo $_smarty_tpl->tpl_vars['pager_offset']->value+$_smarty_tpl->tpl_vars['pager_items_per_page']->value;
echo $_smarty_tpl->tpl_vars['pager_query_suffix']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
</a></span><?php }
if (($_smarty_tpl->tpl_vars['current_page']->value+1) < ($_smarty_tpl->tpl_vars['pages']->value-1) && ($_smarty_tpl->tpl_vars['current_page']->value+2) < $_smarty_tpl->tpl_vars['upper_halfway_point']->value) {?><span class="pager__dots">...</span><?php }
if ($_smarty_tpl->tpl_vars['upper_halfway_point']->value != $_smarty_tpl->tpl_vars['pages']->value && $_smarty_tpl->tpl_vars['upper_halfway_point']->value != ($_smarty_tpl->tpl_vars['current_page']->value+1)) {?><span class="pager__number"><a title="Go to page <?php echo $_smarty_tpl->tpl_vars['upper_halfway_point']->value;?>
"href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;
echo $_smarty_tpl->tpl_vars['pager_query_base']->value;
echo $_smarty_tpl->tpl_vars['upper_halfway_point']->value*$_smarty_tpl->tpl_vars['pager_items_per_page']->value;
echo $_smarty_tpl->tpl_vars['pager_query_suffix']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['upper_halfway_point']->value;?>
</a></span><?php }
if (($_smarty_tpl->tpl_vars['upper_halfway_point']->value+1) < $_smarty_tpl->tpl_vars['pages']->value) {?><span class="pager__dots">...</span><?php }
if ($_smarty_tpl->tpl_vars['pages']->value > $_smarty_tpl->tpl_vars['current_page']->value) {?><span class="pager__number"><a title="Go to page <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
"href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;
echo $_smarty_tpl->tpl_vars['pager_query_base']->value;
echo ($_smarty_tpl->tpl_vars['pages']->value*$_smarty_tpl->tpl_vars['pager_items_per_page']->value)-$_smarty_tpl->tpl_vars['pager_items_per_page']->value;
echo $_smarty_tpl->tpl_vars['pager_query_suffix']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</a></span><span class="pager__text--next"><a class="pagination__next" title="Next page" href="<?php echo $_smarty_tpl->tpl_vars['site']->value->site_link;
echo $_smarty_tpl->tpl_vars['pager_query_base']->value;
echo $_smarty_tpl->tpl_vars['pager_offset']->value+$_smarty_tpl->tpl_vars['pager_items_per_page']->value;
echo $_smarty_tpl->tpl_vars['pager_query_suffix']->value;?>
"><i class="fas fa-angle-right"></i></a></span><?php }?></div>
<?php }
}
}
