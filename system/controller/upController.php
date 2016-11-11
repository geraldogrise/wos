 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
   require_once("path.php");
   include_once($include_path.'/system/util/upload.php');
  
     
  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "upload"){
	 $upload  = new Upload();
     $caminho =  $_POST['local'];
    	 
	 $folder =  $_POST['folder'];
	
	 $local =   str_replace("#","/",$caminho)."/". $folder;
        
	
	 $name = $_FILES['file']['name'];
	 
	
	 $upload->move_upload_and_extract($name,$local,$_FILES["file"],$caminho);
	
   
   }
   
   
  ?>