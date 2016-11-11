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
   include_once("../directory/image.php");

   
 if(isset($_POST["action"]) && $_POST["action"] == "saveImage"){
 
   
    if(isset($_POST["path"])){
			 $json="";
			 $erro ="false";
			try{	   
				   $path =   $_POST['path'];
				   $name = $_POST['name_file'];
				   $file_manager = new php_file();
				   $image_manager = new image_file();
				   $extension = $file_manager->get_ext_file($name);
				   
			        $path  = str_replace("\\","#", $path); 
					$path  = str_replace("/","#", $path);
					$path  = str_replace("#",DIRECTORY_SEPARATOR, $path);
                 
					
					
				  if($extension =="jpg"){
				       $image_manager->createJPG($_POST['image'],$path);
					  
				   }
				   else if($extension == "png"){
				     
				       $image_manager->createPNG($_POST['image'],$path);
				   }
				   else if($extension == "gif"){
				   
				       $image_manager->createGIF($_POST['image'],$path);
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
  
  

 

