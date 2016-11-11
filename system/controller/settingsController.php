 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>



<?php
 require_once("path.php");
 require_once($include_path.'/system/model/Tb_settings.php');
 require_once($include_path.'/system/dao/genericDao.php');



 
  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "save"){
		   
		   $json_result = "";
		   $erro ="false";
		   try 
		   {
           
      		    $action = "insert";
				$id_setting= "";
				$setting = new Tb_settings();
				$dao = new genericDao();
			    if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $setting->setId_user($_POST["id_user"]);
			    }
				if(isset($_POST["id_group"]) && $_POST["id_group"] != ""){
		          $setting->setId_group($_POST["id_group"]);
			    }
				
				$result_type = $dao->get($setting); 
				if($result_type->num_rows > 0){
				    $action="update";
					 while($row = $result_type->fetch_array()){
					        $id_setting= $row["id_setting"];
					 }
				}
				
			    
				if(isset($_POST["system_date"]) && $_POST["system_date"] != ""){
		          $setting->setSystem_date($_POST["system_date"]);
			    }
				if(isset($_POST["system_hour"]) && $_POST["system_hour"] != ""){
		          $setting->setSystem_hour($_POST["system_hour"]);
			    }
				if(isset($_POST["time_zone"]) && $_POST["time_zone"] != ""){
		          $setting->setTime_zone($_POST["time_zone"]);
			    }
				if(isset($_POST["dateformat"]) && $_POST["dateformat"] != ""){
		          $setting->setDateformat($_POST["dateformat"]);
			    }
				if(isset($_POST["background"]) && $_POST["background"] != ""){
		          $setting->setBackground($_POST["background"]);
			    }
				if(isset($_POST["id_country"]) && $_POST["id_country"] != ""){
		          $setting->setId_country($_POST["id_country"]);
			    }
				
				if(isset($_POST["user_image"]) && $_POST["user_image"] != ""){
		          $setting->setUser_image($_POST["user_image"]);
			    }
				if(isset($_POST["mouse_image"]) && $_POST["mouse_image"] != ""){
		          $setting->setMouse_image($_POST["mouse_image"]);
			    }
				if(isset($_POST["current_location"]) && $_POST["current_location"] != ""){
		          $setting->setCurrent_location($_POST["current_location"]);
			    }
				
				if($action =="insert"){
				   $setting->setId_setting("auto");
				   $result = $dao->insert($setting);
				  
				}
				else{
				    $setting->setId_setting($id_setting);
				    $result = $dao->update($setting);
				}
				
				
				
				
				
				
				
				
		 
		      
		     
			  
			       $json = array(
					  "is_erro" => $erro,
					   "msg" => "Registro inserido com sucesso!",
		   
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
   
   
   
   

   
  
   
   
 if(isset($_POST["action"]) && strtolower($_POST["action"]) == "delete"){
		   
		   $json_result = "";
		   $erro = "false";
 	  
		  try 
		   {
                $setting = new Tb_settings();
		  	    $dao = new genericDao();
			   
			    if(isset($_POST["id_setting"]) && $_POST["id_setting"] != ""){
		          $setting->setId_setting($_POST["id_setting"]);
			    }
				if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $setting->setId_user($_POST["id_user"]);
			    }
				if(isset($_POST["id_group"]) && $_POST["id_group"] != ""){
		          $setting->setId_group($_POST["id_group"]);
			    }
			   
		      
		      
			    $result = $dao->delete($camp);
			 
			       $json = array(
					  "is_erro" => $erro,
					   "msg" => "Registro excluido com sucesso!",
		   
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