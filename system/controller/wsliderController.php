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
		$filter = "jpg,jpeg,gif,png,bmp";
		$list_images= $dir->returnDirectory($gallery,$filter);
		echo "<div class=\"sp-slides\">";
		foreach ($list_images as $key => $img){
		
		
		     echo "<div class=\"sp-slide\">";
				echo "<img class=\"sp-image\""; 
				   echo	"data-src=\"{$pathHttp}/{$img}\"";
				   echo "data-small=\"{$pathHttp}/{$img}\"";
				   echo	"data-medium=\"{$pathHttp}/{$img}\"";
				   echo	"data-large=\"{$pathHttp}/{$img}\"";
				   echo	"data-retina=\"{$pathHttp}/{$img}\"/>";
					
              echo "</div>";
				
			

	        
		
		}
		 echo "</div>";
		
		 echo "<div class=\"sp-thumbnails\">";
			foreach ($list_images as $key => $img){
			   echo "<img class=\"sp-thumbnail\" src=\"{$pathHttp}/{$img}\"/>";
			
			}
		 echo "</div>";
		
	
	}
 
 }
 ?>