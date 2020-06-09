<?php 
/** 
 * Smarty plugin 
 * @package Smarty 
 * @subpackage plugins 
 */ 


/** 
 * Smarty date modifier plugin 
 * Purpose:  converts unix timestamps or datetime strings to words 
 * Type:     modifier<br> 
 * Name:     timeAgo<br> 
 * @author   Stephan Otto 
 * @param string 
 * @return string 
 */ 
function smarty_modifier_seedTime($stamp) 
{ 
      if ($stamp == "" | $stamp == 0)
          return "n/a";
      
      $ysecs = 365 * 24 * 60 * 60;
      $mosecs = 31 * 24 * 60 * 60;
      $wsecs = 7 * 24 * 60 * 60;
      $dsecs = 24 * 60 * 60;
      $hsecs = 60 * 60;
      $msecs = 60;
		
      $timeStrings = array(   'now',            // 0
                        'Sec', 'Secs',    // 1,2
                        'Min','Mins',      // 3,4
                        'Hr', 'Hrs',   // 5,6
                        'Day', 'Days',         // 7,8
                        'Wk', 'Wks',      // 9,10
                        'Mo', 'Mos',      // 11,12
                        'Yr','Yrs');      // 13,14

      
      $years = floor ($stamp / $ysecs); $stamp %= $ysecs;
      $months = floor ($stamp / $mosecs); $stamp %= $mosecs;
      $weeks = floor ($stamp / $wsecs); $stamp %= $wsecs;
      $days = floor ($stamp / $dsecs); $stamp %= $dsecs;
      $hours = floor ($stamp / $hsecs); $stamp %= $hsecs;
      $minutes = floor ($stamp / $msecs); $stamp %= $msecs;
      $seconds = $stamp;
      
      $timeSpent = array();
      if ($months > 0)
      {
         if ($months == 1) $timeSpent["ms"] = '1 '.$timeStrings[11];
         if ($months > 1) $timeSpent["ms"] = ''.$months.' '.$timeStrings[12];
      }
         
      if ($weeks > 0)
      {
         if ($weeks == 1) $timeSpent["wks"] = '1 '.$timeStrings[9];
         if ($weeks > 1) $timeSpent["wks"] = ''.$weeks.' '.$timeStrings[10];
      }
      
      if ($days > 0 and $days < 7 and $months < 1)
      {
         if ($days == 1) $timeSpent["ds"] = '1 '.$timeStrings[7];
         if ($days > 1) $timeSpent["ds"] = ''.$days.' '.$timeStrings[8];
      }
      
      if ($hours > 0 and $hours < 24 and $weeks < 1 and $months < 1)
      {
         if ($hours == 1) $timeSpent["hrs"] = '1 '.$timeStrings[5];
         if ($hours > 1) $timeSpent["hrs"] = ''.$hours.' '.$timeStrings[6];
      }
      
      if ($minutes > 0 and $days < 1 and $weeks < 1 and $months < 1)
      {
         if ($minutes == 1) $timeSpent["mins"] = '1 '.$timeStrings[3];
         if ($minutes > 1) $timeSpent["mins"] = ''.$minutes.' '.$timeStrings[4];
      }
      
      if ($minutes < 1 and $days < 1 and $weeks < 1 and $months < 1)
      {
         if ($seconds == 1) $timeSpent["secs"] = '1 '.$timeStrings[1];
         if ($seconds > 1) $timeSpent["secs"] = ''.$seconds.' '.$timeStrings[2];
      }
      
      return implode (', ', $timeSpent);
} 

?> 