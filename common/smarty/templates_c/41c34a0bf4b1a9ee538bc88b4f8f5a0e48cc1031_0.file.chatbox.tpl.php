<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-14 21:33:28
  from '/var/www/html/racingforme/themes/templates/common/chatbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebd9d0870f6a0_72090797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41c34a0bf4b1a9ee538bc88b4f8f5a0e48cc1031' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/common/chatbox.tpl',
      1 => 1579346473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebd9d0870f6a0_72090797 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="chatDeleted">
    <div id="chatDeletedInner">
        <span>Shout has been removed</span>
    </div>
</div>

<div id="chatOuter" class="hidden">
  <div id="chatInner">
    <label for="chatHdr"><?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
 Shoutbox (No spoilers)</label>
    <a id="closeChat" class="chatClose" title="Close"></a>
    <div id="chatMessages"></div>
    <div id="chatMembers"></div>
    <div id="refresh" style="display: none;"></div>
    <div id="chatData">
      <form id="addChat" method="post" action="">
       <span id="emotions"><?php echo $_smarty_tpl->tpl_vars['emotions']->value;?>
</span>
       <span id="inputChat"><textarea class="chatInputField" name="chatMsg" id="chatMsg" maxlength="160"></textarea></span>
       <input type="hidden" name="uname" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" />
       <input type="hidden" name="date" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
" />
       <span><input type="submit" name="submitChat" id="submitChat" value="Shout" class="submitMsg" /></span>
       <span id="charNum">160 chars</span>
      </form>
    </div>
  </div>
</div><?php }
}
