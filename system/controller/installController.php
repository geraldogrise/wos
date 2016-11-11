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
    require_once($include_path.'/system/dao/genericDao.php');

   
 if(isset($_POST["action"]) && $_POST["action"] == "installfiles"){
 
         $json="";
		 $erro ="false";
		try{	 
         
					   $remote_file_url = '';
					   $remote_file_url_image = '';
					   $remote_file_url_thumb = '';
					   $app_directory = '';
					   $app_directory1 = '';
					   $directory = new php_directory();
					   $file = new php_file();
					   $dao = new genericDao();
					   $type_install = "";
					  if(isset($_POST["type_install"]) && $_POST["type_install"] != ""){
					      $type_install= $_POST["type_install"]=="normal"?"":DIRECTORY_SEPARATOR.$_POST["type_install"];
						 
					  }
					   
						if(isset($_POST["app_directory"]) && $_POST["app_directory"] != ""){
							  $app_directory = $_POST["app_directory"];
							  $app_directory = str_replace("#","/",$app_directory);
							  $app_directory1 = str_replace("#",DIRECTORY_SEPARATOR,$app_directory);
						}
					   
						if(isset($_POST["remote_file_url"]) && $_POST["remote_file_url"] != ""){
							  $remote_file_url = $_POST["remote_file_url"];
							  $remote_file_url = str_replace("#","/",$remote_file_url);
						}
						 if(isset($_POST["remote_file_url_image"]) && $_POST["remote_file_url_image"] != ""){
							  $remote_file_url_image = $_POST["remote_file_url_image"];
							  $remote_file_url_image = str_replace("#","/",$remote_file_url_image);
						}
						 if(isset($_POST["remote_file_url_thumb"]) && $_POST["remote_file_url_thumb"] != ""){
							  $remote_file_url_thumb = $_POST["remote_file_url_thumb"];
							  $remote_file_url_thumb = str_replace("#","/",$remote_file_url_thumb);
						}
						
						
					   
						/* New file name and path for this file */
						$local_file =  $app_directory1.$type_install.DIRECTORY_SEPARATOR."programs".DIRECTORY_SEPARATOR. basename($remote_file_url);
						$local_file_image =$app_directory."/"."images/programs/". basename($remote_file_url_image);
						$local_file_thumb =$app_directory."/"."images/thumbs/". basename($remote_file_url_thumb); 
						$local_extract =  $app_directory. $type_install."/programs/";
						
					
					   
						$program_name = basename($local_file,'.zip');
						/* Copy the file from source url to server */
						$copy = copy( $remote_file_url, $local_file );
						$copy = copy( $remote_file_url_image,$local_file_image  );
						$copy = copy( $remote_file_url_thumb,$local_file_thumb );
						
						
						
						
						$zip = new ZipArchive; 
						if ($zip->open($local_file) === TRUE) {
							$zip->extractTo($local_extract);
							$zip->close();
							$erro ='false';
						} else {
							$erro= 'true';
						}
						
						unlink($local_file);
						
						$app_dir = str_replace("/",DIRECTORY_SEPARATOR,$app_directory);
						$app_dir = str_replace("\\",DIRECTORY_SEPARATOR,$app_directory);
						$local_ext = str_replace("/",DIRECTORY_SEPARATOR,$local_extract); 
						$local_ext = str_replace("\\",DIRECTORY_SEPARATOR,$local_extract); 
						
						
					  
						
						
						$local_controller =  $local_ext.$program_name.DIRECTORY_SEPARATOR."controller";
						$local_model=  $local_ext.$program_name.DIRECTORY_SEPARATOR."model";
						$local_appcontroller =  $app_dir.DIRECTORY_SEPARATOR."system".DIRECTORY_SEPARATOR."controller".DIRECTORY_SEPARATOR;
						$local_appmodel =  $app_dir.DIRECTORY_SEPARATOR."system".DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR;
						
						
						 if($directory->is_directory($local_model)){
						   $directory->moveDirectory($local_model,$local_appmodel );
						 }
						 if($directory->is_directory($local_controller)){
							   $directory->moveDirectory($local_controller,$local_appcontroller);
						 }
						
						
						$local_controller  =  str_replace("\\","/",$local_appcontroller);
						$local_install = $local_extract.$program_name."/install.php";
						$local_controller = str_replace("/",DIRECTORY_SEPARATOR,$local_controller);
						$local_controller = str_replace("\\",DIRECTORY_SEPARATOR,$local_controller);
						$local_install = str_replace("/",DIRECTORY_SEPARATOR,$local_install);
						$local_install = str_replace("\\",DIRECTORY_SEPARATOR,$local_install);
						
						
						
						
						$file->moveFile($local_install,$local_controller);
						
						
					   $sql_folder = $local_ext.$program_name.DIRECTORY_SEPARATOR."sql";
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
 
  if(isset($_POST["action"]) && $_POST["action"] == "installbyZip"){
	  
	  
	  
	  
  }

           
  ?>
  
  

 

