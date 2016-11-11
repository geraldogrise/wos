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
  include_once($include_path.'/system/directory/xml.php');
   
   
 if(isset($_POST["action"]) && $_POST["action"] == "readDoc"){
 
   
    if(isset($_POST["path"])){
			 $json="";
			 $erro ="false";
			try{	   
				   $path =   $_POST['path'];
				   $xml_manager = new xml_file();
                   $xml = $xml_manager->getXml($path);
				   $content = $xml->content;
				   
				   
				
				  
				  
				   
		           $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					   "content"=> $content."",
		   
					);
					$json_result = json_encode($json);
                  
					  
		    } catch (Exception $e) {
		     
			   $json = array(
					  "is_erro" => "true",
					   "msg" => $e->getMessage(),
					    "content"=>"dummy",
		   
			    );
				$json_result = json_encode($json);
			
		   
		   }
		    echo $json_result;
		  
		
		
		
	}
 
 }   
   
else if(isset($_POST["action"]) && $_POST["action"] == "writeDoc"){
           if(isset($_POST["path"])){
			 $json="";
			 $erro ="false";
			try{	   
				   $path =   $_POST['path'];
				   $content = $_POST['content'];
				   $file_manager = new php_file();
				   $xml_manager = new xml_file();
				   $path = str_replace('/','\\',$path);
				   $name= substr($path,strripos($path,"\\")+1);
				   $xml = $xml_manager->setXmlDoc($name,$content,"Geraldo","01/03/2014","01/03/2014");
				   $file= $file_manager->openFile($path,"w");
				   $size = $file_manager->getTamanho($path);
				   $file_manager->writeFile($file,$xml);
				   $file_manager->closeFile($file);
				 
				 
				  
				  
				  
				   
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
  
  

 

