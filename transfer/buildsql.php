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
			 $path = $include_path.'/transfer/sql/wos.sql';
			 $file_manager = new php_file();
			 $xml_manager = new xml_file();
			 $file_manager = new php_file();
			 $file= $file_manager->openFile($path,"r");
			 $size = $file_manager->getTamanho($path);
			 $query= "".$file_manager->readFile($file, $size==0?10:$size);
			 $file_manager->closeFile($file);
			 $dao = new genericDao();
			 $arraySql = explode(";",$query);
			foreach ($arraySql as $sql){
			   $teste = $dao->executeQueryByString($sql);
			}
			
			
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

