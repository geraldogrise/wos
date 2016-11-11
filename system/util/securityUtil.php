 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>


<?php

require_once('path.php');
require_once($include_path.'/system/model/Tb_general.php');
require_once($include_path.'/system/dao/genericDao.php');


 class securityUtil{
   
   
   public function isAllowDirectory($directory){
	   $isAllow = true;
	   $general = new Tb_general();
	   $model = new Tb_general();
	   $general->setId_general(1);
	   $dao = new genericDao();
	   $result = $dao->getAll($general);
		while($row = $result->fetch_array()){
			$model->setApp_path($row["app_path"]);
		}
		
		if(strlen($model->getApp_path()) > strlen($directory)){
		    $isAllow = false;
		}
	
		return  $isAllow;
  }
	
	
 }
 
 
?> 
