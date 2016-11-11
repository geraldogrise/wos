 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
 require_once('path.php');
 require_once($include_path.'/system/model/Tb_grpusers_files.php');
 require_once($include_path.'/system/dao/genericDao.php');
 require_once($include_path.'/system/util/componentUtil.php');

  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "save_options"){
		   
		   $json_result = "";
		   $erro ="false";
		   try 
		   {
           
      		   $adicionados=""; 
			   $removidos="";
			   if(isset($_POST["file"]) && $_POST["file"] != ""){
			      $file = $_POST["file"];
					if(isset($_POST["adicionados"]) && $_POST["adicionados"] != ""){
					  $adicionados = $_POST["adicionados"];
					  insertBatchUser_files($adicionados,$file);
					}
					if(isset($_POST["removidos"]) && $_POST["removidos"] != ""){
					  $removidos = $_POST["removidos"];
					   
					   deleteBatchUser_files($removidos,$file);
					}
				
		         
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
   

   
   function insertBatchUser_files($input,$file){
		$array_files = array();
		$dao = new genericDao();
		$array_adicionados = explode(",",$input);
		foreach($array_adicionados as $value){
			$fil= new Tb_grpusers_files();
			$valores = explode("_",$value);
			$fil->setId_user($valores[0]);
			$fil->setId_group($valores[1]);
			$fil->setPathfile($file);
			
			array_push($array_files,$fil);
		}
		if(sizeof($array_files)> 0){
			$dao->insertBatch($array_files);
	    }
			 
	} 
	function deleteBatchUser_files($input,$file){
		$array_files = array();
		$dao = new genericDao();
		$array_adicionados = explode(",",$input);
		foreach($array_adicionados as $value){
			$fil= new Tb_grpusers_files();
			$valores = explode("_",$value);
			$fil->setId_user($valores[0]);
			$fil->setId_group($valores[1]);
			$fil->setPathfile($file);
			
			array_push($array_files,$fil);
		}
		if(sizeof($array_files)> 0){
			$dao->deleteBatch($array_files);
		}
			 
	} 

  
   
  
		  
   
  
 


?>