 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php 
$arrayPath =  explode("/",$_SERVER["REQUEST_URI"]);
  $cont = 0;
  $software = "";
  while($cont < sizeof($arrayPath)){
     
	  if($arrayPath[$cont] == "wos"){
        $software .= $arrayPath[$cont]."/";
		break;
		 
	  }
	 
	  $software .= $arrayPath[$cont]."/";
	  $cont++;
  }
  
  $caminho =  $_SERVER['DOCUMENT_ROOT'].$software;


  $caminho =str_replace("//","/",$caminho);
  ?>