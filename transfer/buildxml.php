 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
 ini_set('max_execution_time', 600); 
 require_once('path.php');
 include_once($include_path.'/system/directory/directory.php');
  include_once($include_path.'/system/directory/file.php');
  include_once($include_path.'/system/directory/xml.php');
?>


<?php 


  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "install"){
	 
	  $json_result = "";
	  $erro ="false";
	  try 
	  {
			 $path = $include_path.'/system/dao/config.php';
			 $file_manager = new php_file();
			 $xml_manager = new xml_file();
			 $host =   $_POST['host'];
			 $login = $_POST['login'];
			 $password = $_POST['password'];
			 $database = $_POST["database"];
			 $xml = $xml_manager->setPhpInstall($host,$database,$login,$password);
			 $file= $file_manager->openFile($path,"w");
			 $size = $file_manager->getTamanho($path);
			 $file_manager->writeFile($file,$xml);
			 $file_manager->closeFile($file);
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

