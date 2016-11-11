 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
 require_once('path.php');
 require_once($include_path.'/system/model/Tb_fonts_files.php');
 require_once($include_path.'/system/model/Tb_fonts.php');
 require_once($include_path.'/system/dao/genericDao.php');
 require_once($include_path.'/system/util/componentUtil.php');

  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "save_options"){
		   
		   $json_result = "";
		   $erro ="false";
		   try 
		   {
           
      		   $adicionados=""; 
			   $removidos="";
			   $user = 0;
			   if(isset($_POST["file"]) && $_POST["file"] != ""){
			         $file = $_POST["file"];
					
					 if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
					    $user = $_POST["id_user"];
					 }
					if(isset($_POST["adicionados"]) && $_POST["adicionados"] != ""){
					  $adicionados = $_POST["adicionados"];
					  insertBatchFonts_files($adicionados,$file, $user);
					}
					if(isset($_POST["removidos"]) && $_POST["removidos"] != ""){
					  $removidos = $_POST["removidos"];
					  deleteBatchFonts_files($removidos,$file);
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
     if(isset($_POST["action"]) && strtolower($_POST["action"]) == "save_fonts"){
		   
		   $json_result = "";
		   $erro ="false";
		   try 
		   {
           
      		   $adicionados=""; 
			   $removidos="";
			   $user = 0;
			   $folder="";
			        $fonts =new Tb_fonts();
					$fonts->setId_fonts("auto");
					$dao = new genericDao();
			         if(isset($_POST["font_name"]) && $_POST["font_name"] != ""){
					     $fonts->setName($_POST["font_name"]);
					 } 
                     if(isset($_POST["font_folder"]) && $_POST["font_folder"] != ""){
					    $folder = $_POST["font_folder"];
					 }  
					 if(isset($_POST["folder_path"]) && $_POST["folder_path"] != ""){
					    $font_path= $_POST["folder_path"];
						$font_path = str_replace($font_path."#","",$folder);
						$font_path = str_replace("#","/",$font_path);
						$fonts->setFolder($font_path);
					 } 
					 $fonts->setType("N");
					 $result = $dao->insert($fonts);					 
					
					if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
					    $user = $_POST["id_user"];
					}
					if(isset($_POST["adicionados"]) && $_POST["adicionados"] != ""){
					  $adicionados = $_POST["adicionados"];
					  insertBatchFonts_files($adicionados,$result, $user);
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
   

   
   function insertBatchFonts_files($input,$id_font, $user){
		$array_files = array();
		$dao = new genericDao();
		$array_adicionados = explode(",",$input);
		foreach($array_adicionados as $value){
			$fil= new Tb_fonts_files();
			$fil->setId_fonts($id_font);
			$fil->setId_user( $user);
			$fil->setFile($value);
			
			array_push($array_files,$fil);
		}
		if(sizeof($array_files)> 0){
			$dao->insertBatch($array_files);
	    }
			 
	} 
	function deleteBatchFonts_files($input,$id_fonts){
		$array_files = array();
		$dao = new genericDao();
		$array_adicionados = explode(",",$input);
		foreach($array_adicionados as $value){
			$fil= new Tb_fonts_files();
			$fil->setId_fonts($id_fonts);
			$fil->setFile($value);
			
			array_push($array_files,$fil);
		}
		if(sizeof($array_files)> 0){
			$dao->deleteBatch($array_files);
		}
			 
	} 

  
   
  
		  
   
  
 


?>