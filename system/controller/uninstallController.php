 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php 

require_once("path.php");
 include_once($include_path.'/system/model/Tb_programs.php');
 include_once($include_path.'/system/model/Tb_requirements.php');
 include_once($include_path.'/system/dao/genericDao.php');
 include_once($include_path.'/system/directory/directory.php');
 include_once($include_path.'/system/directory/file.php');


if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getinfo" ){
	       $json_result = "";
		   $erro ="false";
		   try 
		   {        $wos_p = new Tb_programs();
		            $programs= new Tb_programs();
                    $dao = new genericDao();
		           	if(isset($_POST["id_program"]) && $_POST["id_program"] != ""){
					   $wos_p->setId_program($_POST["id_program"]);
					}
					$resultset = $dao->getById($wos_p);
					 while($row = $resultset->fetch_array()){
						  $programs->setId_program($row["id_program"]);
						  $programs->setName(utf8_encode($row["name"]));
						  $programs->setImagePath($row["imagePath"]);
						  $programs->setFolder($row["folder"]);
						 
	  				 }
					
					 $pathImg = "images/". $programs->getImagePath();
			         $pathImg = str_replace("/","#",$pathImg);
					 //$pathThumb = str_replace("/","#",$pathThumb);
				  
				   
				   $json = array(
					  "is_erro" => $erro,
					   "msg" => "sucess",
					   "id_program"=> $programs->getId_program(),
					   "name"=> $programs->getName(),
					   "image"=> $pathImg,
					    "folder"=> "teste",//$programs->getFolder(),
					   //"Thumb_image"=> $programs->getImagePath(),
					   
					 
					);
					$json_result = json_encode($json);
			         
  
		   } catch (Exception $e) {
		     
			   $json = array(
					  "is_erro" => "true",
					   "msg" => $e->getMessage(),
		   
			    );
				$json_result = json_encode($json);
			
		   
		   }
           echo	$json_result;   
	    
	  }
	  
	 else if(isset($_POST["action"]) && $_POST["action"] == "uninstallprogram"){
 
          
		 
		   $app_directory = '';
		   $id_uninstall = "";
		   $remove_folder="";
		   $directory = new php_directory();
		   $file = new php_file();
		   $dao = new genericDao();
		   $requirements = new Tb_requirements();
		   $require_del = new Tb_requirements();
		   $program = new Tb_programs();
		   
		   
		    if(isset($_POST["app_directory"]) && $_POST["app_directory"] != ""){
		          $app_directory = $_POST["app_directory"];
				  $app_directory = str_replace("#","/",$app_directory);
				  
		    }
		   
		    if(isset($_POST["id_uninstall"]) && $_POST["id_uninstall"] != ""){
		          $id_uninstall = $_POST["id_uninstall"];
				  $requirements->setId_program(intval($id_uninstall));
				  $requirements->setRequire_type("F");
				  $program->setId_program(intval($id_uninstall));
				  $require_del->setId_program(intval($id_uninstall));
				 
		    }
			 if(isset($_POST["folder"]) && $_POST["folder"] != ""){
		          $remove_folder = $_POST["folder"];
				 
		    }
			
		 $local_folder= $app_directory."/programs/".$remove_folder;
		
		 $local_folder = str_replace("/","\\",$local_folder);
         if($directory->is_directory($local_folder)){
		    $directory->deleteDirectory($local_folder);
		 }
		 
		
		 $result_unlink= $dao->getAll($requirements);
		 while($row = $result_unlink->fetch_array()){
		 
		         $unlink_file=$app_directory."/".$row["name"];
				 if(file_exists($unlink_file)){
				     $file->deleteFile($unlink_file);
				 }
				
		 }
		 $result_requirements= $dao->delete($require_del,"all");
		 $result_program= $dao->delete($program);
		
		 
		 
		 
		 
			
			
		
		  
		
			
			
			 
			
			
			
			
		  
 
 } 

	  
	  
?>
   