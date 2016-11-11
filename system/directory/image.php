 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php


   class image_file{

      function createPNG($source,$local){
	  
	            $image = imagecreatefrompng($source);
				imagealphablending($image, false);
				imagesavealpha($image, true);
				imagepng($image, $local);
				  
	  
	  }  
      function createJPG($source,$local){
	  
	            $image = imagecreatefrompng($source);
				imagealphablending($image, false);
				imagesavealpha($image, true);
				imagejpeg($image, $local);
				  
	  
	  }
     function createGIF($source,$local){
	  
	            $image = imagecreatefrompng($source);
				imagealphablending($image, false);
				imagesavealpha($image, true);
				imagegif($image, $local);
				  
	  
	  }   	

  function createfromStringPNG($source,$local){
	  
	            
				$data = base64_decode($source);
                $image = imagecreatefromstring($data);
				imagepng($image, $local);
				  
	  
	  }  
      function createfromStringJPG($source,$local){
	  
	            $data = base64_decode($source);
                $image = imagecreatefromstring($data);
				imagejpeg($image, $local);
				  
	  
	  }
     function createfromStringGIF($source,$local){
	  
	            $data = base64_decode($source);
                $image = imagecreatefromstring($data);
				imagegif($image, $local);
				  
	  
	  }   	  	  
	  







   }







?>
