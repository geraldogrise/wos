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
  $dir = new php_directory();
  $ds = DIRECTORY_SEPARATOR;  //1
 

    
      $local =  "";   //2
	  if(isset($_POST["local"])){
	      $local = $_POST["local"];
	  }
	  else{
	    $local = $include_path."documents/tmp";
	  }
     
       
		if(!file_exists($local)){
				$dir->createDir($local."/"); 	
		}	
		
	
		if (!empty($_FILES)) {
			
			$tempFile = $_FILES['file']['tmp_name'];                   
			
		 
		    $local =  str_replace ("/","#",$local);
		    $local =  str_replace ("\\","#",$local);
			$local =  str_replace ("#",$ds,$local);
			$targetPath = $local.$ds;  
			
			
			$targetFile =  $targetPath. $_FILES['file']['name']; 
			
		    move_uploaded_file($tempFile,$targetFile); 

			 
		}
?> 
