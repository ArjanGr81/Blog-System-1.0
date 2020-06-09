<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 19:02:38
  from '/var/www/html/racingforme/themes/templates/common/calendar/showCalendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebecb2e52a168_07520171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '372819b3b9cdb7be3baeb03f0231bdfe0378f9f6' => 
    array (
      0 => '/var/www/html/racingforme/themes/templates/common/calendar/showCalendar.tpl',
      1 => 1579346473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebecb2e52a168_07520171 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="/themes/styles/common/scripts/calendar.js"><?php echo '</script'; ?>
>

<div id="displayCalendar">
   <div id="calendarNav">
      <span class="prevNextNav"><a href="/calendar/<?php echo $_smarty_tpl->tpl_vars['prevMonthText']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['prevYear']->value;?>
">&laquo; <?php echo ucfirst($_smarty_tpl->tpl_vars['prevMonthText']->value);?>
</a></span>
      <span class="curMonthNav"><?php echo $_smarty_tpl->tpl_vars['monthText']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['currentYear']->value;?>
</span>
      <span class="prevNextNav" style="text-align: right;"><a href="/calendar/<?php echo $_smarty_tpl->tpl_vars['nextMonthText']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['nextYear']->value;?>
"><?php echo ucfirst($_smarty_tpl->tpl_vars['nextMonthText']->value);?>
 &raquo;</a></span>
   </div>
   <div>
      <div id="days">Monday</div>
      <div id="days">Tuesday</div>
      <div id="days">Wednesday</div>
      <div id="days">Thursday</div>
      <div id="days">Friday</div>
      <div id="days">Saturday</div>
      <div id="days">Sunday</div>
   </div>
   <div class="calendarLoad"><img src="/themes/styles/common/images/newLoader.gif" alt="loading" title="Loading" /></div>
   <div id="showAddNewEntry"></div>
   <div id="showUpdateEntry"></div>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['calendar']->value, 'day');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
?>
     <?php if ($_smarty_tpl->tpl_vars['day']->value['openRow'] == "true") {?>
      <div id="calendarWeek">
     <?php }?>
   
     <div id="calendarDay">
       <div id="listCapEvents" style="display: none;"></div>
       <?php if ($_smarty_tpl->tpl_vars['day']->value['emptyRow'] == false) {?>
         <div id="number" <?php if ($_smarty_tpl->tpl_vars['day']->value['currentDay'] == true) {?>style="color: #e90101;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['day']->value['showDay'];?>
</div>
         <div id="calendarData">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['events']->value, 'event');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
?>
           <?php $_smarty_tpl->_assignInScope('curDate', ((string)$_smarty_tpl->tpl_vars['currentYear']->value)."-".((string)$_smarty_tpl->tpl_vars['curMonth']->value)."-".((string)$_smarty_tpl->tpl_vars['day']->value['showDay']));?>
           <?php if ($_smarty_tpl->tpl_vars['event']->value['end_date'] == $_smarty_tpl->tpl_vars['curDate']->value) {?>
               <img class="eventImages" id="<?php echo $_smarty_tpl->tpl_vars['event']->value['catID'];?>
" src="/themes/styles/common/images/capflags/<?php echo $_smarty_tpl->tpl_vars['event']->value['image'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['event']->value['end_date'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['event']->value['full_name'];?>
" />
           <?php }?>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         </div>
       <?php }?>
     </div>
   
     <?php if ($_smarty_tpl->tpl_vars['day']->value['closeRow'] == "true") {?>
     </div>
     <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
