 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
   include_once("../directory/directory.php");
   include_once("../directory/file.php");
   include_once("../directory/xml.php");
   include_once("../util/Uri.php");
   
   
 if(isset($_POST["action"]) && $_POST["action"] == "readSound"){
 
   
    if(isset($_POST["path"])){
			 $json="";
			 $erro ="false";
			try{	   
				   $path =   $_POST['path'];
				   $xml_manager = new xml_file();
                   $xml = $xml_manager->getXml($path);
				  
				 
				  
				   $html = "";
				   $image = $xml->image; 
				   $album = $xml->name; 
				   $pathGallery = $xml->path; 
				    $app_directory = str_replace("#","/", $_POST["app_directory"])."/";
				   $path_sound = str_replace($app_directory,"",$pathGallery);
                   

					foreach($xml->sounds->audio as $item)
					{
						   $audio_id= $item->audio_id;
						   $name= $item->name;
						   $size= $item->size;
						$html .="<tr>";
						$html .="<td>";
						$html .="<img src=\"assets/images/icons/icon_16_music.png\" />";
						$html .="</td>";
						$html .="<td>";
						$html .="{$audio_id}";
						$html .="</td>";
						$html .="<td  style=\"overflow-x:hidden;width:50%\">";
						$html .="<ul class='graphic'> <li><a href='{$path_sound}/{$item->name}'>{$name}</a></li> </ul>";
						$html .="</td>";
						$html .="<td>";
						$html .="{$size}";
						$html .="</td>";
						$html .="</tr>";
						 
						
						  
						
					}
				   
				   
				
				  
				  
				   
		           $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					   "content"=> $html."",
					   "image"=> $image."",
					    "name"=>  $album."",
						"gallery"=> $pathGallery."",
		   
					);
					$json_result = json_encode($json);
                  
					  
		    } catch (Exception $e) {
		     
			   $json = array(
					  "is_erro" => "true",
					   "msg" => $e->getMessage(),
					    "content"=>"dummy",
						"image"=> "C:/wamp/www/estudo/wos/images/notitle.jpg",
						"content"=>"No Title",
						"gallery"=>  "none",
		   
			    );
				$json_result = json_encode($json);
			
		   
		   }
		    echo $json_result;
		  
		
		
		
	}
 
 }   
   
else if(isset($_POST["action"]) && $_POST["action"] == "writeSound"){
           if(isset($_POST["path"])){
			 $json="";
			 $erro ="false";
			try{	   
				   $audio_gallery = $_POST["gallery"];
				   $image = $_POST['image'];
				   $album = $_POST['album'];
				 
				   $file_manager = new php_file();
				   $xml_manager = new xml_file();
				   $uri = new Uri();
				   
				 
					
		          
					 
					$audio_gallery  = str_replace("\\","#",$audio_gallery);
					$audio_gallery  = str_replace("/","#",$audio_gallery);
		            $audio_gallery = str_replace("#","/",$audio_gallery);
				  
					
					
					$path = $_POST["path"];
					$path  = str_replace("\\","#",$path);
					$path  = str_replace("/","#",$path);
		            $path = str_replace("#",DIRECTORY_SEPARATOR,$path);
					
					
					$filter = "mp3,aiff,wav,wmv";
					//$pathHttp = $uri->HttpFormat($pathHttp);
					
					$dir = new php_directory();
					$list_audios= $dir->returnDirectory($audio_gallery,$filter);
					$list_sounds = array();
					$cont = 1;
					$html = "";
					 foreach ($list_audios as $key => $value){
					     $size = $file_manager->getSize("{$audio_gallery}/{$value}");
						 $name = $value;
						 $audio_id = $cont;
						 
						 array_push($list_sounds, array("name"=>$name,"size"=>$size));
						 
						  
						
					 }
				   
				   
				   
				   
				   $xml = $xml_manager->setXmlSound($album,$list_sounds,"Geraldo","01/03/2014","01/03/2014",$image, $audio_gallery);
				  
				   $file= $file_manager->openFile($path,"w");
				   $size = $file_manager->getTamanho($path);
				   $file_manager->writeFile($file,$xml);
				   $file_manager->closeFile($file);
				 
				  
				   
		           $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					   "image"=>$image,
					   "content"=>$html,
					   "name"=>$album,
		   
					);
					$json_result = json_encode($json);
                  
					  
		    } catch (Exception $e) {
		     
			   $json = array(
					  "is_erro" => "true",
					   "msg" => $e->getMessage(),
					  "image"=> "C:/wamp/www/estudo/wos/images/notitle.jpg",
					   "content"=>"Erro",
					   "name"=>"No title",
					   
		   
			    );
				$json_result = json_encode($json);
			
		   
		   }
		    echo $json_result;
		  
		
		
		
	}
   
  }
  
  else if(isset($_POST["action"]) && $_POST["action"] == "insertSound"){
          
			 $json="";
			 $erro ="false";
			try{	   
				   $audio_gallery = $_POST["gallery"];
				   $image = $_POST['image'];
				   $album = $_POST['album'];
				   $pathWos = $_POST['pathWos'];
				   $pathW= str_replace("#","/",$pathWos);
				 				 
				   $file_manager = new php_file();
				   $uri = new Uri();
				   $imageUrl = $image;
				   if(strpos($image,'www')!== false){
						$image = $uri->HttpUrlFormat($image);
						
						$audio_gallery  = str_replace("\\","#",$audio_gallery);
					    $audio_gallery  = str_replace("/","#",$audio_gallery);
		                $audio_gallery = str_replace("#","/",$audio_gallery);
						
						
						
											 
						 $image = str_replace("\\","/",$image);
						 $image = substr($image,strripos($image,"www/")+4);
						 $protocol= $_SERVER["SERVER_PROTOCOL"];
						 $protocol= substr($protocol,0,strrpos($protocol,"/"));
						 $server =  $_SERVER["SERVER_NAME"];
						 $imageUrl = strtolower($protocol."://".$server)."/".$image;
					
					}else{
					  	$audio_gallery  = str_replace("\\","#",$audio_gallery);
					    $audio_gallery  = str_replace("/","#",$audio_gallery);
		                $audio_gallery = str_replace("#","/",$audio_gallery);
					}
					
					$filter = "mp3,aiff,wav,wmv";
					//$pathHttp = $uri->HttpFormat($pathHttp);
					
					$dir = new php_directory();

					$list_audios= $dir->returnDirectory($audio_gallery,$filter);
					
					
					
					
				 
				   
					$cont = 1;
					$html = "";
					 foreach ($list_audios as $key => $value){
					     $size = $file_manager->getSize("{$audio_gallery}/{$value}");
						 $pathMusic =  str_replace($pathW."/","",$audio_gallery);
						 $name = $value;
						 $audio_id = $cont;
						 if($cont < 10){
						    $audio_id ="0". $cont;
						 }
						 
						 
								$html .="<tr>";
								$html .="<td>";
								$html .="<img src=\"assets/images/icons/icon_16_music.png\" />";
								$html .="</td>";
								$html .="<td>";
								$html .="{$audio_id}";
								$html .="</td>";
								$html .="<td  style=\"overflow-x:hidden;width:50%\">";
								$html .="<ul class='graphic'> <li><a href='{$pathMusic}/{$value}'>{$name}</a></li> </ul>";
								$html .="</td>";
								$html .="<td>";
								$html .="{$size}";
								$html .="</td>";
								$html .="</tr>";
						 $cont++;
					 }
				   
				   
				
				 
				  
				   
		           $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					   "image"=>$imageUrl,
					   "gallery"=>$audio_gallery ,
					   "name"=>$album,
					   "content"=>$html ,
					  
		   
					);
					$json_result = json_encode($json);
                  
					  
		    } catch (Exception $e) {
		     
			   $json = array(
					  "is_erro" => "true",
					   "msg" => $e->getMessage(),
					  "image"=> "C:/wamp/www/estudo/wos/images/notitle.jpg",
					   "gallery"=>"Erro",
					   "name"=>"No title",
					   "content"=>"Erro",
					   
		   
			    );
				$json_result = json_encode($json);
			
		   
		   }
		    echo $json_result;
		  
		
		
		
	
   
  }
  else if(isset($_POST["action"]) && $_POST["action"] == "insertAudios"){
          
			 $json="";
			 $erro ="false";
			try{	   
				  
			       $origem = $_POST["origem"];
				   $destino = $_POST["destino"];
				   $dir = new php_directory();
				   $fil = new php_file();
				   $origem = str_replace("#","/",$origem);
				   $ori = explode(",",$origem);
				   $destino = str_replace("#","/",$destino);
					
					 

					 foreach ($ori as $key => $value){
						    $value = str_replace("/","#",$value);
							$value = str_replace("\\","#",$value);
							$value = str_replace("#",DIRECTORY_SEPARATOR,$value);
						   if($fil->is_directory($value)){
							   
							   $dir->copyDirectory($value,$destino,"");
						   }
						   else{
							 
							  $fil->copyFile($value,$destino);
						   }
					   }
		          


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
  ?>
  
  

 

