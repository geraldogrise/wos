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
  include_once($include_path.'/system/util/Uri.php');
   
 if(isset($_POST["action"]) && $_POST["action"] == "buildGallery"){
 
   
    if(isset($_POST["gallery"])){
		
		$dir = new php_directory();
		$uri = new Uri();
		$gallery = $_POST["gallery"];
		$pathHttp = $_POST["pathHttp"];
		
		$pathHttp = $uri->HttpFormat($pathHttp);
		
		$gallery = substr($gallery,0,strripos($gallery,"#"));
		
		$gallery = str_replace("#",DIRECTORY_SEPARATOR,$gallery);
		
		
		$list_images = array();
		$filter = "jpg,jpeg,gif,png,bmp";
		$list_images= $dir->returnDirectory($gallery,$filter);
		
		echo "<div class=\"stage\">";
			echo "<div class=\"carousel carousel-stage\">";
				echo "<ul>";
							 foreach ($list_images as $key => $img){									
								 echo "<li><img src=\"{$pathHttp}/{$img}\" width=\"600\" height=\"400\" alt=\"\"></li>";
														
							  }
				echo "</ul>";
			echo "</div>";
											
			echo "<p class=\"photo-credits\">";
			echo "Photos by <a href=\"#\">Geraldo Grise</a>";
			echo "</p>";
		
		echo "</div>";
		echo "<div class=\"navigation\">";
			echo "<a href=\"#\" class=\"prev prev-navigation\">&lsaquo;</a>";
			echo "<a href=\"#\" class=\"next next-navigation\">&rsaquo;</a>";
			echo "<div class=\"carousel carousel-navigation\">";
				  echo "<ul>";
                             foreach ($list_images as $key => $img){								
								  echo "<li><img src=\"{$pathHttp}/{$img}\" width=\"50\" height=\"50\" alt=\"\"></li>";
														
							   }				 
				 echo "</ul>";
			 echo "</div>";
		 echo "</div>";
		
		
		 
	
	}
 
 }
 ?>