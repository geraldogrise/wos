 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>



<?php
require_once("path.php");
 require_once($include_path.'/system/model/Tb_settings.php');
 require_once($include_path.'/system/dao/genericDao.php');
 require_once($include_path.'/system/util/timezoneUtil.php');
 



 
  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getlisttimezone"){
	    $html="";
		$timezone="";
	    try{
		
		     if(isset($_POST["timezone"]) && $_POST["timezone"] != ""){
		          $timezone = $_POST["timezone"];
			}
			$util = new timezoneUtil();
			$html =$util->getListTimezone($timezone);
			 
		     
		}
		 catch (Exception $e) {
		     
			  $html =  "is_erro=true#" . $e->getMessage();
			
		   
		 }
		 echo $html;
		 
		 
   }

   
  
		  
   
  
 


?>