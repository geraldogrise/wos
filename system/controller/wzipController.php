 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
   require_once("path.php");
   include_once($include_path.'/system/directory/directory.php');
   include_once($include_path.'/system/directory/file.php');
   include_once($include_path.'/system/directory/Zipper.php');
   include_once($include_path.'/system/model/Tb_backup.php');
   include_once($include_path.'/system/dao/genericDao.php');
   include_once($include_path.'/system/util/ZipUtil.php');
    
  
   
    session_start();
  
 if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("readZip")){
 
   
    if(isset($_POST["path"])){
			 $json="";
			 $erro ="false";
				   
				      $path =   $_POST['path'];
				      $path  = str_replace("\\","/",$path);
				  
				       $zip = new Zipper();
					   
				   	   $files= $zip->openZip($path);
				       $html = "";
					   $util=  new  ZipUtil();
					  
					   
					   
					   $html = $util->getZipHtml($files);
				     


		         
		    echo $html;
		  
		
		
		
	}
 
 }  
else if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("writeZip")){
           if(isset($_POST["path"])){
			 $json="";
			 $erro ="false";
			try{	   
				   
				   $path = $_POST['path'];
				   $name = $_POST['name'];
				   $files_add = $_POST['files'];
				   $zip = new Zipper();
				   $file_manager = new php_file();
				      
				  
				   $files_add  = str_replace("#","\\",$files_add);
				    $path  = str_replace("\\","/",$path);
				    
				
				 
					$files =explode(",",$files_add);
					$zip->addFiles($path,$files);
				 
				
		           $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					   "content"=>"OK",
					 
		   
					);
					$json_result = json_encode($json);
                  
					  
		    } catch (Exception $e) {
		     
			   $json = array(
					  "is_erro" => "true",
					   "msg" => $e->getMessage(),
				       "content"=>"Erro",
					  
					   
		   
			    );
				$json_result = json_encode($json);
			
		   
		   }
		    echo $json_result;
		  
		
		
		
	}
   
  } 
  else  if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("deleteZipFile")){
 
   
   if(isset($_POST["path"])){
				       $path =   $_POST['path'];
					   $files_delete =   $_POST['files'];
					   $zip = new Zipper();
					   $file_manager = new php_file();
				      
					 
					  $files =explode(",",$files_delete);
					   $zip->deleteFiles($path,$files);
					  
					 
					   $files= $zip->openZip($path);
				       $html = "";
					   $util=  new  ZipUtil();
					   $html = $util->getZipHtml($files);
				  
				  


		          
		   
		    echo $html;
		  
		
		
		
	}
 
 } 
 
 
 else  if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("extractZipFile")){
 
   
    if(isset($_POST["path"])){
			 $json="";
			 $erro ="false";
			try{	   
				       
					   $path = $_POST['path'];
				       $name = $_POST['name'];
					   $files_extract = $_POST['files'];
					   $zipfile = $_POST['zipfile'];
					  
					   $zip = new Zipper();
					   $file_manager = new php_file();
				       $files =explode(',',$files_extract);
					 
					
					  $zip->extract($zipfile,$path,$files);
					  
					
				  
				  


		           $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					  
					  
					
		   
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
 
 } 
 
  else  if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("addZipFile")){
 
   
    if(isset($_POST["path"])){
			 $json="";
			 $erro ="false";
		
					  
					    $path = $_POST['path'];
					   //$name = $_POST['name'];
					   $files_add = $_POST['files'];
					   $zipfile =   $_POST['zipfile'];
					   $zip = new Zipper();
					   $file_manager = new php_file();
				      
				  
						$files_add  = str_replace("#",DIRECTORY_SEPARATOR,$files_add);
						
						
						$files =explode(",",$files_add);
						$zip->addFiles($zipfile,$files);
				 
					  
					  
					 
					 $files= $zip->openZip($zipfile);
				     $html = "";
					 $util=  new  ZipUtil();
					 $html = $util->getZipHtml($files);
					 
				  


		        
			
		   
		   
		    echo $html;
		  
		
		
		
	}
 
 } 
 
 
  else  if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("zip")){
 
   
    if(isset($_POST["path"])){
			 $json="";
			 $erro ="false";
			try{	   
				       $path =   $_POST['path'];
					   $files_add =   $_POST['files'];
					   $zipfile =   $_POST['zipfile'];
					   $zip = new Zipper();
					   $file_manager = new php_file();
				      
					  $path  = str_replace("\\","/",$path);
					  $path  = str_replace("#","/",$path);
					  $zipfile  = str_replace("\\","/",$zipfile);
					  $zipfile  = str_replace("#","/",$zipfile);
					   $files =explode(",",$files_add);
					  
					  $zip->addFiles($zipfile,$files);
					  
					  
					
					  


		           $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					   
					  
					
		   
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
 
 } 
 
  else  if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("backup")){
 
   
    if(isset($_POST["path"])){
			 $json="";
			 $erro ="false";
			 $path_x="";
			 $files = array();
			 $id_user="";
			
			try{	   
				      
					    $dao =  new genericDao();
					    $zip = new Zipper();
						$file_manager = new php_file();
					    $dir_manager=new php_directory();
						$tb_backup=new Tb_backup();
					    
						
					   $path =   $_POST['path'];
					   $files_add =   $_POST['files'];
					   $zipfile =  "WOS".date("Y-m-d_H_i_s").".zip";
					    $path_x  = str_replace("#","/",$path); 
					    if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
							  $id_user = $_POST["id_user"];
						}
					   
					   if($id_user !=""){
						   $tb_backup->setId_user($id_user);
						   $tb_backup->setDt_backup(date("Y-m-d H:i:s")); 
						   $tb_backup->setBackup_file($path_x."/".$zipfile);
						   $tb_backup->setId_backup("auto");
						   $dao->insert($tb_backup);
					   }
					  
					  
					   $backup_directory =str_replace("#","\\",$path);
				     
					   
					   if(!$dir_manager->is_directory($backup_directory)){
					      $dir_manager->createDir($backup_directory);
					   }	  
              					  
				      
					 
					 
					  $files_add= str_replace("#","/",$files_add);
					  $zipfile= $path_x."/".$zipfile;
					 
					  array_push($files,$files_add);
					  
					  $zip->addFiles($zipfile,$files);
					 
					  
					  
					
					  


		           $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					   
					  
					
		   
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
 
 } 
 
 else  if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("extractAll")){
 
   
    if(isset($_POST["path"])){
			 $json="";
			 $erro ="false";
			try{	   
				       
					  
				       $directory = $_POST['path'];
					   $files_extract = $_POST['zipfile'];
					   $directory  = str_replace("\\","/",$directory);
					   $directory  = str_replace("#","/",$directory);
					  
					   $files =explode(",",$files_extract);
					  
					  
					  $zip = new Zipper();
					   foreach($files as $zipfile){
                         			 
						   $zip->extractAll($zipfile,$directory);
					   
					   }
					   
					  
					
				  
				  


		           $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					  
					  
					
		   
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
 
 } 
 
   

  
  
  
  ?>
  
  
  

 

