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
	require_once($include_path.'/system/model/Tb_general.php');
  
   $app_directory = '';
   $directory = new php_directory();
   $file = new php_file();
   $general = new Tb_general();
   $dao = new genericDao();
   
   
  if(isset($_POST["action"]) && $_POST["action"] == "update"){  
        
		 $json="";
		 $erro ="false";
		try{	 
		$ups = array();
		$ops = array();
		
		if(isset($_POST["info_update"]) && $_POST["info_update"] != ""){
		    $info_update = $_POST["info_update"];
			$ups = explode(",",$info_update); 
		}
		if(isset($_POST["info_optional"]) && $_POST["info_optional"] != ""){
		    $info_optional = $_POST["info_optional"];
			$ops = explode(",",$info_optional); 
		}
		if(isset($_POST["app_directory"]) && $_POST["app_directory"] != ""){
			$app_directory = $_POST["app_directory"];
			$app_directory = str_replace("#","/",$app_directory);
		}
		
		foreach ($ups as $remote_file) {
                $remote_file_url ="http://www.grisecorp.com/uploads/wos_updates/";
				$remote_file_url .=$remote_file; 
				$local_extract =  $app_directory."/";
				$local_file =  $app_directory."/programs/". basename($remote_file_url);
				
				$seq_update = basename($local_file,'.zip');
				$copy = copy( $remote_file_url, $local_file );
				$zip = new ZipArchive; 
					if ($zip->open($local_file) === TRUE) {
						$zip->extractTo($local_extract);
						$zip->close();
						$erro ='false';
					} else {
						$erro= 'true';
					}
					
				unlink($local_file);
				
				$program_name = basename($local_file,'.zip');
				
				$general->setId_general(1);
				$general->setSeq_update($seq_update);
				$dao->update($general);
		  }
		  
		  foreach ($ops as $remote_file) {
                $remote_file_url ="http://wwww.grisecorp.com/uploads/wos_optional/";
				$remote_file_url .=$remote_file; 
				$local_extract =  $app_directory."/";
				$local_file =  $app_directory."/programs/". basename($remote_file_url);
				
				$seq_optional = basename($local_file,'.zip');
				$copy = copy( $remote_file_url, $local_file );
				$zip = new ZipArchive; 
					if ($zip->open($local_file) === TRUE) {
						$zip->extractTo($local_extract);
						$zip->close();
						$erro ='false';
					} else {
						$erro= 'true';
					}
					
				unlink($local_file);
				
				$program_name = basename($local_file,'.zip');
				
				$general->setId_general(1);
				$general->setSeq_optional($seq_optional);
				$dao->update($general);
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



?>