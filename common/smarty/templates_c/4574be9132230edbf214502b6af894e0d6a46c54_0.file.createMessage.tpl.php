<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-29 12:38:14
  from '/var/www/html/racingforme/themes/templates/common/messaging/createMessage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e807a9654c293_64477472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4574be9132230edbf214502b6af894e0d6a46c54' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/common/messaging/createMessage.tpl',
      1 => 1579346473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e807a9654c293_64477472 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="findMemberBg">
  <div id="findMemberOuter">
    <label for="memberName" class="labelFindMember">Username</label>
    <input type="text" value="" id="findUserName" class="findMemberInput" style="width: 150px;" />
    <a id="doFindMember" class="performFindMember">Search now</a>
    <a id="closeFindMember" class="closeMsg" title="Cancel"></a>
    <div id="memberResults">
       <div id="showMemberResults"></div>
       <a id="addFindMember" class="addFindMember">Add member(s)</a>
    </div>
    <div class="searchMemberLoad"><img src="/themes/styles/common/images/search_loading.gif" alt="loading" /></div>
  </div>
</div>

<form method="post" action="/messages">
<div id="msgCreateBg">
 <div id="createReplyMsg">
   <a id="closeMsg" class="closeMsg" title="Cancel"></a>
   <span class="msgLines">
      <label for="msgToFrom" class="labelMsg">Send to</label>
      <input type="text" name="receiver" id="sendTo" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['toWho']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="inputMsg" style="width: 233px;" />
      <a id="findMember" class="msgMember" title="Find a member">Find member</a>
  </span>
  <span class="msgLines" style="padding-top: 15px; border-top: 1px #d8d8d8 solid;">
      <label for="msgSubject" class="labelMsg">Subject</label>
      <input type="text" name="subject" id="subject" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subject']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="inputMsg" style="width: 350px;" />
  </span>
  <span class="msgLines">
      <textarea class="customHtml" name="message" id="msgContent" style="height: 250px;"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</textarea>
  </span>
  <span class="msgLines" id="allowDelMsg" style="display: none;">
    <label for="deleteMsg" class="labelMsg" style="float: left; width: 120px; padding: 4px 0 0 0;">Delete message</label>
      <span class="customCheckbox" style="float: left; margin-left: 10px;">
          <input type="checkbox" name="deleteMsgs" id="deleteMsgs" value="<?php echo $_smarty_tpl->tpl_vars['autoDelPms']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['autoDelPms']->value == 1) {?>checked<?php }?> />
          <span class="box"><span class="tick"></span></span>
      </span>
      <input type="hidden" name="orgMsgId" id="orgMsgId" value="" />
  </span>
   <input type="submit" name="submitMsg" id="submitMsg" class="submitMsg" value="Send Message" title="Send message">
 </div>
</div>
</form><?php }
}
