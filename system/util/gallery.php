 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
  
  
 

  
     require_once('Uri.php');
    
	 $image = "C:#wamp#www#estudo#wos#computer#album#Clambake.jpg";
	 $uri =new Uri();
	 $pathHttp = $uri->HttpUrlFormat($image);
	 echo  $pathHttp;
	
?>

