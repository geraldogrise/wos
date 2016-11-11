 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
   include_once("../directory/directory.php");
   include_once("../directory/file.php");
   include_once("../util/Uri.php");

 if(isset($_POST["action"]) && $_POST["action"] == "buildGallery"){
 
   
    if(isset($_POST["gallery"])){
		
		$dir = new php_directory();
		$uri = new Uri();
		$gallery = $_POST["gallery"];
		$pathHttp = $_POST["pathHttp"];
		
		$gallery = substr($gallery,0,strripos($gallery,"#"));
		$gallery = str_replace("#",DIRECTORY_SEPARATOR,$gallery);
		
		
		$list_images = array();
		$filter = "jpg,jpeg,gif,png,bmp";
		$list_images= $dir->returnDirectory($gallery,$filter);
		
		$pathHttp = $uri->HttpFormat($pathHttp);
		
		foreach ($list_images as $key => $img){
		
		
			echo "<a href=\"{$pathHttp}/{$img}\">";
					echo "<img src=\"{$pathHttp}/{$img}\"";
					echo "data-big=\"{$pathHttp}/{$img}\"";
					echo "data-title=\"\"";
					echo "data-description=\"\">";
															
			echo "</a>";
		
		
				
			

	        
		
		}
		 
	
	}
 
 }
 ?>