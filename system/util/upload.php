 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
require_once('path.php');
include_once($include_path.'/system/directory/directory.php');
include_once($include_path.'/system/directory/file.php');
require_once($include_path.'/system/dao/genericDao.php');
 

   class Upload{

     public function move_upload($name,$local,$file_input){
		
		$dir = new php_directory();
	    $ds = DIRECTORY_SEPARATOR;  //1
	  	$local =  strtolower($local);
       
	   if(!file_exists($local)){
				//$dir->createDir($local."/"); 	
		}
	   
	  
		if (!empty($_FILES)) {
			
			$tempFile = $file_input['tmp_name'];          //3             
			
		   // $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
		    $name =  str_replace ("/","\\",$name);
			$targetPath = $local.$ds;  //4
			$targetPath =  str_replace ("/","\\",$targetPath);
			
			
			$targetFile =  $targetPath.$file_input['name'];  
			$extensao = pathinfo($targetFile,PATHINFO_EXTENSION);
			
			
            $program_name = $targetPath.basename($targetFile,'.'.$extensao);
			
		
				
			move_uploaded_file($tempFile,$program_name.".".$extensao); 
			
		    
			
		}
	 }
		
     public function move_upload_and_extract($name,$local,$file_input,$app_directory){
		
		$dir = new php_directory();
	    $ds = DIRECTORY_SEPARATOR;  //1
	  	$local =  strtolower($local);
		$directory = new php_directory();
		$file = new php_file();
		$dao = new genericDao();
		   
       
		   if(!file_exists($local)){
					//$dir->createDir($local."/"); 	
			}
	   
	  
		if (!empty($_FILES)) {
			
			$tempFile = $file_input['tmp_name'];          //3             
			
		   // $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
		    $name =  str_replace ("/","\\",$name);
			$targetPath = $local.$ds;  //4
			$targetPath =  str_replace ("/","\\",$targetPath);
			$targetPath =  str_replace("\\",DIRECTORY_SEPARATOR,$targetPath);
			$targetPath =  str_replace("/",DIRECTORY_SEPARATOR,$targetPath);
			
			
			
			$targetFile =  $targetPath.$file_input['name'];  
			$extensao = pathinfo($targetFile,PATHINFO_EXTENSION);
			$type_install = "";
		
            $program_name = $targetPath.basename($targetFile,'.'.$extensao);
		    if(strpos($program_name,"sys_")){
			    $program_name = str_replace("programs".DIRECTORY_SEPARATOR,"system".DIRECTORY_SEPARATOR."programs".DIRECTORY_SEPARATOR, $program_name );
				$local = str_replace("programs","system/programs", $local );
				
				
			}
			
		    
			
		move_uploaded_file($tempFile,$program_name.".".$extensao); 
			
			$local_file = $program_name.".".$extensao;
			
			$zip = new ZipArchive; 
			if ($zip->open($local_file) === TRUE) {
				$zip->extractTo($local);
				$zip->close();
				$erro ='false';
			} else {
				$erro= 'true';
			}
			unlink($local_file);
			$program_name = str_replace("sys_","",$program_name);
			$app_dir = str_replace("#",DIRECTORY_SEPARATOR,$app_directory);
			
			
			$local_controller =  $program_name.DIRECTORY_SEPARATOR."controller";
			$local_model=  $program_name.DIRECTORY_SEPARATOR."model";
			$local_appcontroller =  $app_dir.DIRECTORY_SEPARATOR."system". DIRECTORY_SEPARATOR ."controller".DIRECTORY_SEPARATOR;
			$local_appmodel =  $app_dir.DIRECTORY_SEPARATOR."system".DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR;
		    
			if($directory->is_directory($local_model)){
			   $directory->moveDirectory($local_model,$local_appmodel );
			 }
			 if($directory->is_directory($local_controller)){
			       $directory->moveDirectory($local_controller,$local_appcontroller);
			 }
			$local_controller  =  str_replace("\\","/",$local_appcontroller);
			$local_install = $program_name."/install.php";
			$local_controller = str_replace("/",DIRECTORY_SEPARATOR,$local_controller);
			$local_controller = str_replace("\\",DIRECTORY_SEPARATOR,$local_controller);
			$local_install = str_replace("/",DIRECTORY_SEPARATOR,$local_install);
			$local_install = str_replace("\\",DIRECTORY_SEPARATOR,$local_install);
						
			
			
			$file->moveFile($local_install,$local_controller);
			
		   $local_ext = str_replace("/","\\",$local); 
		  
		   $sql_folder = $program_name.DIRECTORY_SEPARATOR."sql";
			if($directory->is_directory($sql_folder)){
				 $sql_files = $directory->returnDirectory($sql_folder,$filtro="sql");
				 foreach($sql_files as $sql_fil){
							
							$file_p = $sql_folder.DIRECTORY_SEPARATOR.$sql_fil;
							$mysql_file = fopen($file_p, "r") or die("Unable to open file!");
							$sql= fread($mysql_file,filesize($file_p));
							$result = $dao->executeQueryByString($sql);
							fclose($mysql_file);
				   
					}
					 $directory->deleteDirectory($sql_folder);
			 }
			
			
			
		}
	}







   }







?>
