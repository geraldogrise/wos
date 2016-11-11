 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
  
ini_set('default_charset','UTF-8');
header('Content-Type: text/html; charset=utf-8');
header("Pragma: no-cache");
header("Cache: no-cache");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
require_once("path.php");
require_once($include_path.'/system/pdf/dompdf_config.inc.php');

   
   
   
 if(isset($_POST["action"]) && $_POST["action"] == "exportPDF"){
 
   
   
if ( isset( $_POST["html"] ) ) {

  
				$html = "<html><head><meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" /></head><body>".
				$_POST["html"]."</body></html>";
				
			    $dompdf = new DOMPDF();
   		        $dompdf->load_html($html, 'UTF-8');
			    $dompdf->set_paper('A4','portrait');
			    $dompdf->render();
			    $dompdf->stream("hello.pdf");

	}
 
 } 
 if(isset($_POST["action"]) && $_POST["action"] == "viewAsPDF"){
 
   
   
	  if ( isset( $_POST["html"] ) ) {

	  
					$html = "<html><head><meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" /></head><body>".
					$_POST["html"]."</body></html>";
					
					$dompdf = new DOMPDF();
					$dompdf->load_html($html, 'UTF-8');
					$dompdf->set_paper('A4','portrait');
					$dompdf->render();
					$pdf = $dompdf->output();
					$file_location = $_SERVER['DOCUMENT_ROOT']."/hello.pdf";
					file_put_contents($file_location,$pdf); 
					header('Content-type: application/pdf');
					header('Content-Disposition: inline; filename="file.pdf"');
					header('Content-Transfer-Encoding: binary');
					header('Content-Length: ' . filesize($file_location));
					header('Accept-Ranges: bytes');
					readfile($file_location);
					
					

		}
 
 }   
 
 if(isset($_POST["action"]) && $_POST["action"] == "saveAsPDF"){
 
   
   
		if ( isset( $_POST["html"] ) ) {

		  
						$html = "<html><head><meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" /></head><body>".
						$_POST["html"]."</body></html>";
						$filename = $_POST["name"];
						$filename = str_replace("#","/",$filename);
						$dompdf = new DOMPDF();
						$dompdf->load_html($html, 'UTF-8');
						$dompdf->set_paper('A4','portrait');
						$dompdf->render();
						$pdf = $dompdf->output();
						$file_location = $filename;
						file_put_contents($file_location,$pdf); 
						header('Location: close.php' );
						

			}
 
 }  
   
  ?>
  
  

 

