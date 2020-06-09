<?php 
/** 
 * Smarty date modifier plugin 
 * Purpose:  converts unix timestamps or datetime strings to words 
 * Type:     modifier<br> 
 * Name:     expires<br> 
 */ 
function smarty_modifier_expires($date) 
{ 
	if ($date == "")
		return "";

	$now = new DateTime();
	$dt = new DateTime($date);
	$interval = $dt->diff($now);

	if ($interval->invert == 1)
		return "expires in ".$interval->days." days";
	else
		return "expired ".$interval->days." days ago";
}
?>