 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>

<?php

 

 class Uri{
	      function HttpFormat($pathHttp){
						
						$pathHttp =substr($pathHttp,0,strripos($pathHttp,"#"));
						$pathHttp = str_replace("#www","",$pathHttp);
						$pathHttp = str_replace("#","/",$pathHttp);
						$pathHttp = str_replace(":#","//",$pathHttp);
						$pathHttp = str_replace("::",":/",$pathHttp);
						
						
						return $pathHttp;
			
			}
			 function HttpUrlFormat($pathHttp){
						
						$pathHttp =substr($pathHttp,strrpos($pathHttp,"#www")+4);
						$protocol=  $_SERVER["SERVER_PROTOCOL"];
						$protocol = strtolower(substr($protocol,0,strrpos($protocol,"/")));
						$server= $_SERVER["SERVER_NAME"];
						
						$pathHttp = $protocol.":##".$server."".$pathHttp ;
						$pathHttp =str_replace("#","/",$pathHttp);
						
						
						return $pathHttp;
			
			}
			function pathFormat($path){
						
						$ds = DIRECTORY_SEPARATOR;
						$path =str_replace("\\",$ds,$path);
						$path =str_replace("/",$ds,$path);
						
						return $path;
			
			}
			function pathFormat_jv($path){
						
						$ds = DIRECTORY_SEPARATOR;
						$path =str_replace("#",$ds,$path);
						
						
						return $path;
			
			}
}
		
		
?>