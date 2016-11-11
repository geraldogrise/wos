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
  include_once($include_path.'/system/directory/xml.php');
  include_once($include_path.'/system/util/Uri.php');
   

   
 if(isset($_POST["action"]) && $_POST["action"] == "buildGallery"){
 
   
    if(isset($_POST["gallery"])){
		
		$dir = new php_directory();
		$gallery = $_POST["gallery"];
		$pathHttp = $_POST["pathHttp"];
		$uri = new Uri();
		$pathHttp = $uri->HttpFormat($pathHttp);
		
		$gallery = substr($gallery,0,strripos($gallery,"#"));
		$gallery = str_replace("#",DIRECTORY_SEPARATOR,$gallery);
		
		
		$list_images = array();
		$filter = "mp3,mp4,ogg,wav";
		 
		$list_audio= $dir->returnDirectory($gallery,$filter);
		
		foreach ($list_audio as $key => $audio){
		
		    echo "<li><a href='{$pathHttp}/{$audio}'>{$audio}</a></li>";
		   
			

	        
		
		}
		
		
	
	}
 
 }
 ?>