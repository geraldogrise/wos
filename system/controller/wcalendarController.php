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
  include_once($include_path.'/system/util/Uri.php');
  require_once($include_path.'/system/dao/genericDao.php');
  require_once($include_path.'/system/model/Tb_calendar_item.php');
  require_once($include_path.'/system/model/Tb_events_calendar.php');
  require_once($include_path.'/system/directory/xml.php');
   
    session_start();
   
 if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("readCalendar")){
 
   
    if(isset($_POST["path"])){
			 $json="";
			 $erro ="false";
			try{	   
				   $path =   $_POST['path'];
				 
				   $xml_manager = new xml_file();
                   $xml = $xml_manager->getXml($path);
				   $dao = new genericDao();
				   $calendar_item = new Tb_calendar_item();
				   $event = new Tb_events_calendar();
				  


 				   $event->setId_user($_SESSION['user_system']);
				   $resultset = $dao->getAll($event);
				   $events = [];
				   while($row = $resultset->fetch_array())
                    {
					     array_push($events,$row["id_events"]."#".utf8_encode($row["name"])."#".$row["image"]);
					  
					 
					}
				
				   
				   $html = "";
				   $pathCalendar ="". $xml->path;
				  
				   $calendar_item->setId_user($_SESSION['user_system']);
				   $calendar_item->setPathCalendar($pathCalendar);
				   $resultset_calendar = $dao->getAll($calendar_item);
				    $html="";
				   $separator="";
				    while($row = $resultset_calendar->fetch_array())
                    {
					       $id_events= $row["id_events"];
						   $name= "";
						   $image = "";
						  foreach ($events as $key => $evt){
						     if(strpos($evt,$id_events."#")===0){
							   
								 $name = explode("#",$evt)[1];
								 $image = explode("#",$evt)[2];
								break;
							 }
						  
						  }
						  $image = str_replace("/","#",$image);
						   $dt_event= $row["dt_event"];
						    $id_calendar_item= $row["id_calendar_item"];
						  
						   
						   $htmlImage="" ;
						   if($image !=""){
						     $htmlImage = "<img src=\"{$image}\" style=\"width:24px;height:18px;margin-top:2px;\">";
						   
						   }
						   
					    
						    $title= "<span class='event' id_calendar_item='{$id_calendar_item}' event={$id_events}>{$htmlImage}{$name}</span>";
							
							$html .= $separator.$title."@".$dt_event;
                            $separator=",";							
						   
						
					
					  
					}
				   
                  

		           $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					   "events"=> $html."",
		   
					);
					$json_result = json_encode($json);
                  
					  
		    } catch (Exception $e) {
		     
			   $json = array(
					  "is_erro" => "true",
					   "msg" => $e->getMessage(),
					    "events"=>"dummy",
		   
			    );
				$json_result = json_encode($json);
			
		   
		   }
		    echo $json_result;
		  
		
		
		
	}
 
 }  
else if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("writeCalendar")){
           if(isset($_POST["path"])){
			 $json="";
			 $erro ="false";
			try{	   
				   $info = $_POST["info"];
				   $path = $_POST['path'];
				   $name = $_POST['name'];
				  
				 
				   $file_manager = new php_file();
				   $xml_manager = new xml_file();
				    $dao = new genericDao();
				  
				   $pathCalendar =str_replace("/","#", $path);
				   $pathCalendar =str_replace("\\","#", $path);
				   
				   $path =str_replace("/","#", $path);
				   $path =str_replace("\\","#", $path);
				   $path = str_replace("#",DIRECTORY_SEPARATOR,$path);
				   $pathCalendar =str_replace("/","#", $pathCalendar);
				   $pathCalendar =str_replace("\\","#", $pathCalendar);
				  
				  
				   $uri = new Uri();
				   $events = [];
				   $events= explode(",",$info);
				   foreach ($events as $key => $evt){
				      $id_event=  explode("#",$evt)[0];
					  $data=  explode("#",$evt)[1];
					  
					  $calendar_item = new Tb_calendar_item();
					  $calendar_item->setId_calendar_item('auto');
					  $calendar_item->setDt_event($data);
					  $calendar_item->setId_events($id_event);
					  $calendar_item->setId_user($_SESSION['user_system']);
					  $calendar_item->setPathCalendar($pathCalendar);
					  $result= $dao->insert($calendar_item);
					  
				   }
				   
			
				  
					
		         
					
				   
				   
				   
				   $xml = $xml_manager->setXmlCalendar($name,"Geraldo","01/03/2014","01/03/2014", $pathCalendar);
				  
				   $file= $file_manager->openFile($path,"w");
				   $size = $file_manager->getTamanho($path);
				   $file_manager->writeFile($file,$xml);
				   $file_manager->closeFile($file);
				 
				  
				   
		           $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					   "content"=>"OK",
					 
		   
					);
					$json_result = json_encode($json);
                  
					  
		    } catch (Exception $e) {
		     
			   $json = array(
					  "is_erro" => "true",
					   "msg" => $e->getMessage(),
				       "content"=>"Erro",
					  
					   
		   
			    );
				$json_result = json_encode($json);
			
		   
		   }
		    echo $json_result;
		  
		
		
		
	}
   
  } 
   
else if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("insertEvent")){
          
			 $json="";
			 $erro ="false";
			try{	   
				   
				
				  $event = new Tb_events_calendar();
				  $dao = new genericDao();
				  
				  
				  $event->setId_events("auto");
				  $event->setId_user($_SESSION['user_system']);
				  if($_POST["image"] !=""){
				     $event->setImage($_POST["image"]);
				  }
				  if($_POST["name"] !=""){
				     $event->setName($_POST["name"]);
				  }
				 
				   $result = $dao->insert($event);
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
  else if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("deleteEvent")){
          
			 $json="";
			 $erro ="false";
			try{	   
				   
				
				  $event = new Tb_events_calendar();
				  $dao = new genericDao();
				  
				  
				  $event->setId_events($_POST["id_event"]);
				  $event->setId_user($_SESSION['user_system']);
				  $result = $dao->delete($event);
		         
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
  else if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("getEvents")){
          
			
				   
				
				  $event = new Tb_events_calendar();
				  $dao = new genericDao();
				  $formatUrl = new Uri();
				  
				   $event->setId_user($_SESSION['user_system']);
				   $resultset = $dao->getAll($event);
				   $html="";
				    while($row = $resultset->fetch_array())
                    {
					       
						  
						   $name= utf8_encode($row["name"]);
						   $image= $row["image"];
						   $idevent= $row["id_events"];
						   
						   $htmlImage="" ;
						   if($image !=""){
						     $htmlImage = "<img src=\"{$image}\" style=\"width:24px;height:18px;margin-top:2px;\">";
						   
						   }
						   
					    
						$html .= "<div class='external-event ui-draggable' style='position: relative;'><span class='event' event={$idevent}>{$htmlImage}{$name}</span>";
						$html .= "<span id_event='{$idevent}' class='delete_event' onclick='deleteInCalendar(this)'></span></div>";
					
					  
					}
		           
				  
					echo $html;
		
   
  }
  
  
  
  else if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("deleteCalendarItem")){
          
			 $json="";
			 $erro ="false";
			try{	   
				   
				
				  $item = new Tb_calendar_item();
				  $dao = new genericDao();
				  
				  
				  $item->setId_calendar_item($_POST["id_calendar_item"]);
				  $item->setId_user($_SESSION['user_system']);
				 // $result = $dao->delete($item);
		         
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
  
  if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("getevents_images")){
		   
		     $html="";
		     try{
			    
				
				$diretorio =  $_POST["diretorio"];
			  	$diretorio =   str_replace("#",DIRECTORY_SEPARATOR,$diretorio); 
				
				$folder_image = $diretorio.DIRECTORY_SEPARATOR."programs".DIRECTORY_SEPARATOR."wcalendar".DIRECTORY_SEPARATOR."images";
								
				$dir = new php_directory();
			    $account_images = $dir->returnDirectory($folder_image,$filtro="jpg,jpeg,gif,png");
				$cont_img = 0; 
				  foreach($account_images as $account_i){
				      $cont_img++;
					   $html.="<li><a href='#'  onclick='selectEvtImage(this)'><img src='programs/wcalendar/images/{$account_i}' style='height:50px;width:50px;' id='item-{$cont_img}'/></a></li>";
						
				    
				  }
					    
			 
 			 
              echo $html;
			 
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
  
  }
  
  ?>
  
  
  

 

