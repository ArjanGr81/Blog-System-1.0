<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 01:16:26
  from '/var/www/html/blog/templates/admin/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edec6ca73f2a3_47368760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48625c84b06e789f632f277638490947188c6024' => 
    array (
      0 => '/var/www/html/blog/templates/admin/settings.tpl',
      1 => 1591658156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edec6ca73f2a3_47368760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/blog/common/smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<section class="pane pane--settings">
    <div class="column-header">Blog settings</div>
    <form method="post" action="">
        <div class="blog-settings">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['site']->value, 'setting', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['setting']->value) {
?>
            <span>
                <label for="name"><?php echo smarty_modifier_replace(ucfirst($_smarty_tpl->tpl_vars['key']->value),'_',' ');?>
</label>
                <input id="name" value="<?php echo $_smarty_tpl->tpl_vars['setting']->value;?>
" name="site_data[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" type="text" />
            </span>
             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <button class="button button--primary">Update settings</button>
        </div>
    </form>
</section><?php }
}
