 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php 
            
   function getXml(){
			$config_file =  __FILE__;
			$software_config = dirname($config_file);
			$software_config = str_replace("\\","/",$software_config);
			
			$xml=simplexml_load_file("{$software_config}/config.xml");
		   return $xml;

      }
			
  ?>