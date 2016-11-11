 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php

require_once('path.php');
require_once($include_path.'/system/model/Tb_program_language.php');
require_once($include_path.'/system/model/Tb_programs.php');
require_once($include_path.'/system/model/Tb_country.php');
require_once($include_path.'/system/model/Tb_settings.php');
require_once($include_path.'/system/dao/genericDao.php');

 class languageUtil{
   
	
	public function getLanguage($program_name,$id_user,$id_group){
	   $language = "en_US";
	   $country= new Tb_country();
	   $program= new Tb_programs();
	   $settings= new Tb_settings();
	   
	   $program_lang = new Tb_program_language();
	   $program_lang->setId_group($id_group);
	   $settings->setId_group($id_group);
	   $program_lang->setId_user($id_user);
	   $settings->setId_user($id_user);
	   
	    $program->setName($program_name);
		$dao = new genericDao();
		$resultset = $dao->getAll($program);
		 while($row = $resultset->fetch_array()){
			$program_lang->setId_program(intval($row["id_program"]));
		 }
		 		 
		 $resultset_lang = $dao->getAll($program_lang);
		
		 
		 if($resultset_lang->num_rows >0){
			 while($row = $resultset_lang->fetch_array()){
			   $country->setId_country($row["id_country"]); 
			  
			 }
		 }
		 else{
		  
		   $resultset_setting = $dao->getAll($settings);
		   
		   while($row = $resultset_setting->fetch_array()){
			   $country->setId_country($row["id_country"]); 
			}
			
		 }
		 
		
		 
		
		 $resultset_country = $dao->getById($country);
		  while($row = $resultset_country->fetch_array()){
		    $language= $row["language"];
			
		  }
		  $language = str_replace("_","-",$language);
		  if($language == ""){
		    $language = "en-US";
		  }
		  return $language;
			    
				
	}
	
 }
 


 
 
?> 
