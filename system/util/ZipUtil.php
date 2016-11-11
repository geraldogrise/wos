 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
 require_once('path.php');
 include_once($include_path.'/system/directory/file.php');
class ZipUtil{

   public function getZipHtml($files){       
		 $file_manager = new php_file();
		 $html="";
         
		 $html .= "<div class='list back' pai=''  path='' ondblclick='back_zip(this)' onclick='selectFileZip(this)'>";
		 $html .= "<img src='images@folder2.png' class='list-icon'>";
		 $html .= "<span class='list-title'>../</span>";
		 $html .= "</div>";
		 $arrayParents  = $this->setZipParent($files);
		 
		
		
		
		 
		 foreach ($files as $value) {
			$exte = "folder2";
			$display= "";
			$check_file = str_replace("/","\\",$value["comment"]);
							
			$file = substr($value["comment"],0,strlen($value["comment"])-1);
		  
			if(strpos($value["comment"],".")>0){
							    
				$exte =$file_manager->get_ext_file($value["comment"]);
				$file  = $value["comment"];
				$file =basename($file);		
			}
			else{
               
               $file =basename($file);	
               	   
							 
			}
		
		   
		
			
			
			 $filename = str_replace(DIRECTORY_SEPARATOR,"#",$value["filename"]);
			 $path_value = str_replace(array("\\","/"),"#",$value["comment"]);
			 $filenameAux = $value["filename"];
			
			
			$pai = "";
			$pai = dirname($filenameAux);
			$pai = str_replace(DIRECTORY_SEPARATOR,"#",$pai);
			
			
			if(strlen($exte) > 4){
			  	$exte = "folder2";
			}
			
		
			if(in_array(str_replace("#",DIRECTORY_SEPARATOR,$pai),$arrayParents)){
			   $pai ="";
			}
		
			if($pai != "" ){
			   $display="display:none";
			}
			
			
			
			
		      
			 
		   
				$html .= "<div class='list zip_elemento' pai='{$pai}' file='{$filename}'  path='{$path_value}' ondblclick='showZipFolder(this)' onclick='selectFileZip(this)' style='{$display}'>";
				$html .= "<img src='images@{$exte}.png' class='list-icon'>";
				$html .= "<span class='list-title'>{$file}</span>";
				$html .= "</div>";
		
		}
		return $html;
	}
	
	public function setZipParent($files){
	    $pais =[];
	    foreach ($files as $value) {
			$direAux = str_replace("\\",DIRECTORY_SEPARATOR,$value["filename"]);
			$direAux = str_replace("/",DIRECTORY_SEPARATOR,$value["filename"]);
			$dire = dirname($direAux);
		    
			 if($dire !="."){
			   if(!in_array(dirname($dire), $pais)){
				   array_push($pais,$dire);
			   }
							 
			}
		}
		
		return $pais;
	}
	function startsWith($haystack, $needle) {
        // search backwards starting from haystack length characters from the end
        return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
     }











}
?>