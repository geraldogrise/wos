 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>

<?php



 class timezoneUtil{
     
	 public function getListTimezone($time_default){
	     $html = "";
		 $timezone_identifiers = DateTimeZone::listIdentifiers();
		 foreach($timezone_identifiers as $timezone){
				$html .=  "<option value='{$timezone}'>{$timezone}</option>";
		 }
		 return $html;
	 
	 }
	
	
		
	
 }
 
 
?> 
