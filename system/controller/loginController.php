 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php


 require_once("path.php");
require_once($include_path.'/system/model/Tb_user.php');
require_once($include_path.'/system/model/Tb_settings.php');
require_once($include_path.'/system/dao/genericDao.php');
require_once($include_path.'/system/directory/encryption.php');
require_once($include_path.'/system/model/Tb_general.php');


 
      $general = new Tb_general();
      $model = new Tb_general();
      $general->setId_general(1);
      $dao = new genericDao();
      $result = $dao->getAll($general);
	   while($row = $result->fetch_array()){
			$model->setFlag_login_type($row["flag_login_type"]);
		    $model->setFlag_login_encrypt($row["flag_login_encrypt"]);
			$model->setNumber_of_bits($row["number_of_bits"]);
			$model->setNumber_attempts($row["number_attempts"]);
			$model->setFlag_password_force($row["flag_password_force"]);
			$model->setFlag_enable_question($row["flag_enable_question"]);
			$model->setFlag_enable_captcha($row["flag_enable_captcha"]);
			$model->setFlag_captcha_type($row["flag_captcha_type"]);
	}

		   
		   $json_result = "";
		   $erro = false;
		 
                 $user = new Tb_user();
				 $user_system = new Tb_user();
				 $settings = new Tb_settings();
				 $crypt="sha512";
				 $login="";
				 $password = "";
				 $encrypt = new encryption();
		       
			   if(isset($_POST["encrypt"]) && $_POST["encrypt"] != ""){
		          $crypt = $_POST["encrypt"];
			   }
			  
			   
			  
					if(isset($_POST["login_hidden"]) && $_POST["login_hidden"] != ""){
					   $login = $_POST["login_hidden"];
					}
					
					
					if(isset($_POST["password_hidden"]) && $_POST["password_hidden"] != ""){
					  $password = $_POST["password_hidden"];
					}
				
			      
				  $dao = new genericDao();
			      $resultset = $dao->get($user,"all");
				   while($row = $resultset->fetch_array()){
						  
						 if($model->getFlag_login_type() == "NORM" || $model->getFlag_login_type() == "CARD"){
							 if( ($login == $encrypt->hashEncript($crypt,$row["login"])) && ($password == $encrypt->hashEncript($crypt,$row["password"]))){
								  $user_system->setId_user($row["id_user"]);
								  $user_system->setName($row["name"]);
								  $user_system->setEmail($row["email"]);
								  $user_system->setLogin($row["login"]);
								  $user_system->setPassword($row["password"]);
								  $user_system->setId_group($row["id_group"]);
							  }
						  }else{
						  
						     if( ($login == $encrypt->hashEncript($crypt,$row["login"])) && ($password == $encrypt->hashEncript($crypt,strtolower($row["voice_password"])))){
								  $user_system->setId_user($row["id_user"]);
								  $user_system->setName($row["name"]);
								  $user_system->setEmail($row["email"]);
								  $user_system->setLogin($row["login"]);
								  $user_system->setPassword($row["password"]);
								  $user_system->setId_group($row["id_group"]);
							  }
						  
						  }
						 
	  
					 }
			           
			    
					
					 
					 
					
					 
					 
					 
					 
					/* if(strlen($_POST["password"]) < 8){
					    throw new Exception('Acesso negado senha não pode ter menos que oito caracteres!');
					    header('location:../../acess.php');
					 }*/
					 
					 
					 
					 
					 if( $user_system->getId_user() == null){
					 
					   throw new Exception('Acesso negado usuário/Senha incorretos!');
					    header('location:../../acess.php');
					 }
					 else{
					    
						  $id_setting="";
						  $system_date="";
						  $system_hour= "";
						  $time_zone="";
						  $dateformat="";
						  $background="assets/images/misc/wallpaper.jpg";
						  $lang="";
						  $user_image="";
						  $mouse_image="";
						  $current_location="";
						 
						 $settings->setId_user($user_system->getId_user()); 
						 $settings->setId_group($user_system->getId_group()); 
						 
						    $result_settings = $dao->get($settings); 
							if($result_settings->num_rows > 0){
								$action="update";
								 while($row = $result_settings->fetch_array()){
									  $id_setting=$row["id_setting"];
									  $system_date=$row["system_date"];
									  $system_hour=$row["system_hour"];
									  $time_zone=$row["time_zone"];
									  $dateformat=$row["dateformat"];
									  $background=$row["background"];
									  $lang=$row["lang"];
									  $user_image=$row["user_image"];
									  $mouse_image=$row["mouse_image"];
									  $current_location=$row["current_location"];
										
								 }
							}
						 
						 
						 session_start();	  
						 $_SESSION['user_system'] = $user_system->getId_user();
						 $_SESSION['name_user'] = $user_system->getName();
						 $_SESSION['email_user'] = $user_system->getEmail();
						 $_SESSION['group_user'] = $user_system->getId_group();
						 $_SESSION['background'] = $background;
						 $_SESSION['lang'] = $lang;
						 $_SESSION['system_date'] = $system_date;
						 $_SESSION['system_hour'] = $system_hour;
						 $_SESSION['time_zone'] = $time_zone;
						 session_regenerate_id(true);
						 header('location:../../index.php');
						 exit();
			
					 
					 
					 
					 }
			   
			  	     
					 
					
                
					  
		   
		    
		  	   
   
   
   ?>