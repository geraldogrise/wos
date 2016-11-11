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
   
   
  
   
   
 if(isset($_POST["action"]) && $_POST["action"] == "readYtd"){
 
   
    if(isset($_POST["path"])){
			 $json="";
			 $erro ="false";
			try{	   
				   $path =   $_POST['path'];
				   $xml_manager = new xml_file();
                   $xml = $xml_manager->getXml($path);
				   
				   
				   $html = "";


					foreach($xml->ytb_videos->ytb_item as $item)
					{
						   $youtube_id= $item->ytb_id;
						   $youtube_description= $item->ytb_description;
						 $html .= "<li>";
						 $html .= "	  <a href='#' onclick='setYoutubeVideo(this)' youtubeId='{$youtube_id}'>";
						 $html .= "		<img src='http://img.youtube.com/vi/{$youtube_id}/default.jpg'  style='width:80px;' alt='' />";
						 $html .= "		<span>{$youtube_description}</span>";
						 $html .=     "</a>";
						 $html .= "</li>";
						  
						
					}
				   
				   
				
				  
				  
				   
		           $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					   "content"=> $html."",
		   
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
   
else if(isset($_POST["action"]) && $_POST["action"] == "writeYtd"){
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
				   
				 
				  
					$path  = str_replace("\\","#",$path);
					$path  = str_replace("/","#",$path);
		            $path = str_replace("#",DIRECTORY_SEPARATOR,$path);
				   
				   
				   $xml = $xml_manager->setXmlYtd($name,$content,"Geraldo","01/03/2014","01/03/2014");
				  
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
  
  

 

