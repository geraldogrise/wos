 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php


   class xml_file{

          function setXmlDoc($name,$content,$user,$dt_create,$dt_change){
		  
		     $xml  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
			 $xml .= "<wdoc_file>\n";
			     $xml .= "<name>{$name}</name>\n";
				 $xml .= "<user>{$user}</user>\n";
				 $xml .= "<dt_create>{$dt_create}</dt_create>\n";
				 $xml .= "<dt_change>{$dt_change}</dt_change>\n";
				 $xml .= "<content><![CDATA[{$content}]]></content>\n";
				
			 $xml .= "</wdoc_file>\n";
		     return $xml;
		  
		  }
		  
		   function setPhpInstall($host,$database,$login,$password){
		  
		   
		    
				 $php="";
				 $php.= "<?php \n";
				 $php.= "class Config{\n";
				 $php.= "\t		   private static " .'$host='."'{$host}';\n";
				 $php.= "\t		   private static " .'$login='."'{$login}'\n";
				 $php.= "\t		   private static " .'$password='."'{$password}'\n";
				 $php.= "\t		   private static " .'$database='."'{$database}'\n";
				 $php.= "\t		   private " .'$type'."='mysql';\n";
				 $php.= "\t		   public static function getHost(){\n";
				 $php.= "\t\t			return ".'self::$host;'.".\n";
				 $php.= "\t		   }\n";
				 $php.= "\t		   public static function getDatabase(){\n";
				 $php.= "\t\t			return ".'self::$database;'."\n";
				 $php.= "\t		   }\n";
				 $php.= "\t		   public static function getLogin(){\n";
				 $php.= "\t\t			return ".'self::$login;'."\n";
				 $php.= "\t		   }\n";
				 $php.= "\t		   public static function getPassword(){\n";
				 $php.= "\t\t			return ".'self::$password;'."\n";
				 $php.= "\t		   }\n";
				 $php.= "\t		   public function getType(){\n";
				 $php.= "\t\t			return ".'$this->type;'."\n";
				 $php.= "\t		   }\n";		   
			     $php.= "}\n"; 
				 $php.= "?>"; 
               return $php;
			 
			 
	
		
	

		  
		  }
		  function getXml($path){
		           $path = str_replace("\\","/",$path);
				   $xml=simplexml_load_file($path);
				   return $xml;
				   
		  }
		  function setXmlYtd($name,$content,$user,$dt_create,$dt_change){
		     $youtube_videos = explode("#",$content);
		     $xml  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
			 $xml .= "<ytb_file>\n";
			     $xml .= "\t<name>{$name}</name>\n";
				 $xml .= "\t<user>{$user}</user>\n";
				 $xml .= "\t<dt_create>{$dt_create}</dt_create>\n";
				 $xml .= "\t<dt_change>{$dt_change}</dt_change>\n";
				
				 $xml .= "\t<ytb_videos>\n";
				 
				 foreach ($youtube_videos as $key => $value){
				       $ytb_id = explode("@",$value)[0];
					   $ytb_description = explode("@",$value)[1];
					   $xml .= "\t\t<ytb_item>\n";
					   $xml .= "\t\t\t<ytb_id>{$ytb_id}</ytb_id>\n";
					   $xml .= "\t\t\t<ytb_description>{$ytb_description}</ytb_description>\n";
					   
					   
					
					 $xml .= "\t\t</ytb_item>\n";
				 }   
				 $xml .= "\t</ytb_videos>\n";
			 $xml .= "</ytb_file>\n";
			 
		     return $xml;
		  
		  }
		   function setXmlSound($name,$caminho,$user,$dt_create,$dt_change,$image,$path){
		     $sounds = $caminho;
			
		     $xml  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
			 $xml .= "<sound_file>\n";
			     $xml .= "\t<name>{$name}</name>\n";
				 $xml .= "\t<user>{$user}</user>\n";
				 $xml .= "\t<image>{$image}</image>\n";
				  $xml .= "\t<path>{$path}</path>\n";
				 $xml .= "\t<dt_create>{$dt_create}</dt_create>\n";
				 $xml .= "\t<dt_change>{$dt_change}</dt_change>\n";
				
				
				 $xml .= "\t<sounds>\n";
				 $cont = 1;
				 $cont_string = "";
				 foreach ($sounds as $key => $value){
				     
					   $name = $value["name"];
					   $size = $value["size"];
					   $cont_string = $cont;
					   if($cont < 10){
					       $$cont_string ="0".$cont;
					   }
					   $xml .= "\t\t<audio>\n";
					   $xml .= "\t\t\t<audio_id>{$cont_string}</audio_id>\n";
					   $xml .= "\t\t\t<name>{$name}</name>\n";
					   $xml .= "\t\t\t<size>{$size}</size>\n";
					   
					   
					
					 $xml .= "\t\t</audio>\n";
					 $cont++;
				 }   
				 $xml .= "\t</sounds>\n";
			 $xml .= "</sound_file>\n";
			 
		     return $xml;
		  
		  }
		  
		   function setXmlCalendar($name,$user,$dt_create,$dt_change,$path){
		    
			
		     $xml  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
			 $xml .= "<calendar_file>\n";
			     $xml .= "\t<name>{$name}</name>\n";
				 $xml .= "\t<user>{$user}</user>\n";
				 $xml .= "\t<path>{$path}</path>\n";
				 $xml .= "\t<dt_create>{$dt_create}</dt_create>\n";
				 $xml .= "\t<dt_change>{$dt_change}</dt_change>\n";
				
			 $xml .= "</calendar_file>\n";
			 
		     return $xml;
		  
		  }
	 







   }







?>
