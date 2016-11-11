 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php

makeDownload($_GET["file"]);

		 function makeDownload($file){
				
				
				 
						
						header('Content-Description: File Transfer');
						header('Content-Type: application/octet-stream');
						header("Content-Type: application/force-download");
						header("Content-Type: application/download");
						 header('Content-Disposition: attachment; filename=' . urlencode(basename($file)));
						header('Expires: 0');
						header('Cache-Control: must-revalidate');
						header('Pragma: public');
						header('Content-Length: ' . filesize($file));
						ob_clean();
						flush();
						
						readfile($file);
						exit;
					  
						
						
					
			}
   
   
   
   
   
   



?>