 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
 require_once('path.php');
 include_once($include_path.'/system/directory/directory.php');
  include_once($include_path.'/system/directory/file.php');
  include_once($include_path.'/system/directory/xml.php');
  include_once($include_path.'/system/dao/genericDao.php');
?>


<?php 


  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "install"){
	 
	  $json_result = "";
	  $erro ="false";
	  try 
	  {
			 $oldname =  $include_path.'/index.php';
			 $newname  =  $include_path.'/index123.php';
			 $file_manager = new php_file();
			 $file_manager->renameFileOrFolder($oldname,$newname);
			 $oldname =  $include_path.'/index2.php';
			 $newname  =   $include_path.'/index.php';
			 $file_manager->renameFileOrFolder($oldname,$newname);
			
			
			
		  $json = array(
					  "is_erro" => $erro,

					   "msg" => "Ok",
		   
					);
					$json_result = json_encode($json);
			         
  
		   } catch (Exception $e) {
		     
			   $json = array(
					  "is_erro" => "true",
					   "msg" => $e->getMessage(),
		   
			    );
				$json_result = json_encode($json);
			
		   
		   }
		  
		  echo $json_result;
 }
 




?>

