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
 require_once($include_path.'/system/model/Tb_group_user.php');
 require_once($include_path.'/system/directory/security.php');
 require_once($include_path.'/system/model/Tb_settings.php');
 require_once($include_path.'/system/model/Tb_contact.php');
 require_once($include_path.'/system/dao/genericDao.php');
 require_once('ComboController.php');
 require_once('utilController.php');
 require_once('componentController.php');
  require_once($include_path.'/system/util/userUtil.php');


  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "insert"){
		   
		   $json_result = "";
		   $erro ="false";
		   try 
		   {
           
      		  $user = new Tb_user();
			  $util = new userUtil();
			  $user->setId_user("auto");
			   
				if(isset($_POST["name"]) && $_POST["name"] != ""){
		          $user->setName($_POST["name"]);
			    }
				if(isset($_POST["email"]) && $_POST["email"] != ""){
		          $user->setEmail($_POST["email"]);
			    }
				if(isset($_POST["login"]) && $_POST["login"] != ""){
		          $user->setLogin($_POST["login"]);
			    }
				if(isset($_POST["password"]) && $_POST["password"] != ""){
		          $user->setPassword($_POST["password"]);
				   $user->setVoice_password($_POST["password"]);
			    }
				if(isset($_POST["id_group"]) && $_POST["id_group"] != ""){
		          $user->setId_group($_POST["id_group"]);
			    }
				else{
				   $user->setId_group(1);
				   $_POST["id_group"] = 1;
				}
				if(isset($_POST["user_image"]) && $_POST["user_image"] != ""){
		          $user->setUser_image($_POST["user_image"]);
			    }
				else{
					 $user->setUser_image('no_photo.jpg');
					
				}
				
				
				if(isset($_POST["voice_password"]) && $_POST["voice_password"] != ""){
		          $user->setVoice_password($_POST["voice_password"]);
			    }
				
				
				
				
				
				
				
		 
		      $dao = new genericDao();
		      $result = $dao->insert($user);
			  
			    $setting = new Tb_settings();
			   $setting->setId_setting("auto");
			   $setting->setSystem_date("0");
			   $setting->setSystem_hour("0:0");
			   $setting->setTime_zone("America/Bahia");
			   $setting->setDateformat(null);
			   $setting->setBackground("images/themes/animals/1.jpg");
			   $setting->setUser_image(null);
			   $setting->setMouse_image(null);
			   $setting->setCurrent_location(null);
			   $setting->setId_country(168);
			   $setting->setId_user($result);
			   $setting->setId_group($_POST["id_group"]);
		       $dao->insert($setting);
			   
			   $contact = new Tb_contact();
			   $contact->setId_contact("auto");
			   $contact->setName($_POST["name"]);
			   $contact->setPhone("+55(71)9999-9999");
			   $contact->setEmail($_POST["email"]);
			   $contact->setImage(null);
			   $contact->setId_user($result);
			   $dao->insert($contact);
			   
			  
			  
			  if(isset($_POST["group_add"]) && $_POST["group_add"] != ""){
		          $group_add = $_POST["group_add"];
				  
				  
				 $util->insertBatchGroup($group_add,$result );
			  }
			  
			  
			       $json = array(
					  "is_erro" => $erro,
					   "msg" => "Ok",
		   
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
   
   
   if(isset($_POST["action"]) && strtolower($_POST["action"]) == "edit"){
		   
		   $json_result = "";
		   $erro ="false";
		   
		   try 
		   {
               $user = new Tb_user();
			    $util = new userUtil();
			    if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $user->setId_user($_POST["id_user"]);
			    }
			    if(isset($_POST["name"]) && $_POST["name"] != ""){
		          $user->setName($_POST["name"]);
			    }
				if(isset($_POST["email"]) && $_POST["email"] != ""){
		          $user->setEmail($_POST["email"]);
			    }
				if(isset($_POST["login"]) && $_POST["login"] != ""){
		          $user->setLogin($_POST["login"]);
			    }
				if(isset($_POST["password"]) && $_POST["password"] != ""){
		          $user->setPassword($_POST["password"]);
			    }
				if(isset($_POST["id_group"]) && $_POST["id_group"] != ""){
		          $user->setId_group($_POST["id_group"]);
			    }
				if(isset($_POST["user_image"]) && $_POST["user_image"] != ""){
		          $user->setUser_image($_POST["user_image"]);
			    }
				else{
					 $user->setUser_image('no_photo.jpg');
					
				}
				
				if(isset($_POST["voice_password"]) && $_POST["voice_password"] != ""){
		          $user->setVoice_password($_POST["voice_password"]);
			    }
				
				if(isset($_POST["group_add"]) && $_POST["group_add"] != ""){
		          $group_add = $_POST["group_add"];
				  $util->insertBatchGroup($group_add, $user->getId_user() );
			    }
				if(isset($_POST["group_remove"]) && $_POST["group_remove"] != ""){
		          $group_remove = $_POST["group_remove"];
				  $util->deleteBatchGroup($group_remove, $user->getId_user() );
			    }
				
				
		 
		      $dao = new genericDao();
		      $result = $dao->update($user);
			  
			  
			       $json = array(
					  "is_erro" => $erro,
					   "msg" => "Registro alterado com sucesso!",
		   
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
   
   
   if(isset($_POST["action"]) && strtolower($_POST["action"]) == "search" && !isset($_POST["paginar"]) ){
		  
		  
		   try 
		   {
		         $page = 1; 
                 $p_page = 5;
                  
		      
			    $user = new Tb_user();
			   
			   if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $faet->setId_user($_POST["id_user"]);
			    }
				
				if(isset($_POST["page"]) && $_POST["page"] != ""){
		           $page=$_POST["page"]; 
				  
			    }
				
				
				
				
				$dao = new genericDao();
				$resultPage = $dao->getAll($user);
				$user->setPaginator(($page-1)*$p_page ,5);
				$resultset = $dao->getAll($user);
				
			
			    $_REQUEST['tb_user'] = $resultset;
				$_REQUEST['num_rows'] = $resultPage->num_rows;
				$_REQUEST['p_pagina'] = $p_page;
				$_REQUEST['page'] = $page;
				$_REQUEST['page_input'] =".page_user";
				$_REQUEST['controller'] ="user";
				$_REQUEST['filtro'] =".form_users";
				$_REQUEST['local'] =".local_grid";
				
				$util = new utilController();
		        $groups= $util->getGroups();
				$_REQUEST['groups'] = $groups;
			   
			    require_once $include_path.'/system/programs/useraccount/gridview.php';
			         
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
   
  
   
 if(isset($_POST["action"]) && strtolower($_POST["action"]) == "delete"){
		   
		   $json_result = "";
		   $erro = "false";
 	 
		  try 
		   {
                $user = new Tb_user();
			    if(isset($_POST["id"]) && $_POST["id"] != ""){
		          $user->setId_user($_POST["id"]);
			    }
			   
		 
		       $dao = new genericDao();
		       $result = $dao->delete($user);
			
			       $json = array(
					  "isErro" => $erro,
					   "msg" => "Success"
		   			);
				
					
					$json_result = json_encode($json);
					
			         
               
		   } catch (Exception $e) {
		     
			   $json = array(
					  "isErro" => "true",
					   "msg" => $e->getMessage()
		   
			    );
				$json_result = json_encode($json);
				
			
		   
		   }
		
		     echo $json_result;
            				
		 
		  
		   
		   
   }
  
  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "get"){
		   
		  
		   try 
		   {
		        
                 $user= new Tb_user();
				 $usuario = new Tb_user();
				 $model_group = new Tb_group_user();
		         $acao = "";
				 $array_grpuser = array();
				 $grp_user = "";
			   if(isset($_POST["vlr"]) && $_POST["vlr"] != ""){
		          $user->setId_user($_POST["vlr"]);
				  $acao = "edit";
				  $dao = new genericDao();
					$resultset = $dao->getById($user);
					 while($row = $resultset->fetch_array()){
						  $usuario->setId_user($row["id_user"]);
						  $usuario->setName($row["name"]);
						  $usuario->setEmail($row["email"]);
						  $usuario->setLogin($row["login"]);
						  $usuario->setPassword($row["password"]);
						  $usuario->setId_group($row["id_group"]);
						 
					 }
					 $model_group->setId_user($user->getId_user());
					 $resultset_grpuser = $dao->getAll($model_group);
					 $separator = "";
					  while($row = $resultset_grpuser->fetch_array()){
					     array_push( $array_grpuser  ,$row['id_group']);
					     $grp_user .=  $separator.$row['id_group'];
						 $separator = ",";
					  }
			   }
			   else{
			      $acao = "insert";
			   }
			
			  
			     $_REQUEST['user_wos_edit'] = $usuario;
				 $_REQUEST['acao'] = $acao;
				 $combo = new ComboController();
				 $_REQUEST['combo'] =$combo->comboGroupUser("id_group",100,$usuario->getId_group(),false,true);
				 $comp = new ComponentController();
                 $_REQUEST['component']= $comp->getMultipleGroups("id_groups_users",'100', $array_grpuser ,true);
				 $_REQUEST['grp_user']= $grp_user;
				 require_once $include_path.'/system/programs/adduser/screen.php';
				 
				 
			 
			 
			         
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
    if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("getReset")){
		   
		  
		   try 
		   {
		        
                 $user= new Tb_user();
				 $usuario = new Tb_user();
		         $acao = "";
			   if(isset($_POST["vlr"]) && $_POST["vlr"] != ""){
		          $user->setId_user($_POST["vlr"]);
				  $acao = "edit";
				  $dao = new genericDao();
					$resultset = $dao->getById($user);
					 while($row = $resultset->fetch_array()){
						  $usuario->setId_user($row["id_user"]);
						  $usuario->setName($row["name"]);
						  $usuario->setEmail($row["email"]);
						  $usuario->setLogin($row["login"]);
						  $usuario->setPassword($row["password"]);
						  $usuario->setId_group($row["id_group"]);
						  $usuario->setVoice_password($row["voice_password"]);
						 
						  
						 
	  
					 }
			   }
			   else{
			      $acao = "insert";
			   }
			 
			  
			  
			     $_REQUEST['user_wos_edit'] = $usuario;
				 $_REQUEST['acao'] = $acao;
				 require_once $include_path.'/system/programs/resetpassword/screen.php';
			 
			 
			         
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
   
   if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("getChange")){
		   
		  
		   try 
		   {
		        
                 $user= new Tb_user();
				 $usuario = new Tb_user();
		         $acao = "";
			   if(isset($_POST["vlr"]) && $_POST["vlr"] != ""){
		          $user->setId_user($_POST["vlr"]);
				  $acao = "edit";
				  $dao = new genericDao();
					$resultset = $dao->getById($user);
					 while($row = $resultset->fetch_array()){
						  $usuario->setId_user($row["id_user"]);
						  $usuario->setName($row["name"]);
						  $usuario->setEmail($row["email"]);
						  $usuario->setLogin($row["login"]);
						  $usuario->setPassword($row["password"]);
						  $usuario->setId_group($row["id_group"]);
						  $usuario->setVoice_password($row["voice_password"]);
						 
						  
						 
	  
					 }
			   }
			   else{
			      $acao = "insert";
			   }
			 
			  
			  
			     $_REQUEST['user_wos_edit'] = $usuario;
				 $_REQUEST['acao'] = $acao;
  			     include $include_path.'/system/programs/changepassword/screen.php';
			 
			 
			         
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
    
    if(isset($_POST["action"]) && strtolower($_POST["action"]) == "resetpassword"){
		    
		   $json_result = "";
		   $erro ="false";
		 
		   try 
		   {
                $user = new Tb_user();
				$usuario = new Tb_user();
				  $dao = new genericDao();
				
			    if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $user->setId_user($_POST["id_user"]);
			    }
				if(isset($_POST["password"]) && $_POST["password"] != ""){
		         
				  $resultset = $dao->getById($user);
				   while($row = $resultset->fetch_array()){
					  $usuario->setId_user($row["id_user"]);
					  $usuario->setName($row["name"]);
					  $usuario->setEmail($row["email"]);
					  $usuario->setLogin($row["login"]);
					  $usuario->setPassword($row["password"]);
					  $usuario->setId_group($row["id_group"]);
					  $usuario->setVoice_password($row["voice_password"]);
				   }
				    if($usuario->getPassword() != $_POST["password"]){
						
						throw new Exception("Unidentified previous password");
					}
			    }
				
				
			    $newpassword = "";
				$confirmpassword = "";
			    if((isset($_POST["newpassword"]) && $_POST["newpassword"] != "")){
					
					$newpassword = $_POST["newpassword"];
				}
				if((isset($_POST["confirmpassword"]) && $_POST["confirmpassword"] != "") ){
					
					$confirmpassword = $_POST["confirmpassword"];
				}
				
				if($newpassword != $confirmpassword && ($confirmpassword!="")&& ($newpassword!="")){
					
					throw new Exception("Password do not match");
				}else{
					$user->setPassword($newpassword);
				}
				
				
				
				
				
		 
		      $dao = new genericDao();
		      $result = $dao->update($user);
			  
			  
			       $json = array(
					  "is_erro" => $erro,
					   "msg" => "Registro alterado com sucesso!",
		   
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
   
   if(isset($_POST["action"]) && strtolower($_POST["action"]) == "buildpassword"){
		   
		   $json_result = "";
		   $erro ="false";
		   
		   try 
		   {
                $user = new Tb_user();
				$usuario = new Tb_user();
				  $dao = new genericDao();
				
			    if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $user->setId_user($_POST["id_user"]);
			    }
					$security = new security();
					$newpassword = $security->buildPassword(8, true, true, true); 
					$user->setPassword($newpassword);
				
				    $dao = new genericDao();
				    $result = $dao->update($user);
			  
			  
			       $json = array(
					  "is_erro" => $erro,
					   "msg" => "Registro alterado com sucesso!",
		   
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
   
    if(isset($_POST["action"]) && strtolower($_POST["action"]) == "changepassword"){
		   
		   $json_result = "";
		   $erro ="false";
		   
		   try 
		   {
                $user = new Tb_user();
				$usuario = new Tb_user();
				  $dao = new genericDao();
				
			    if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $user->setId_user($_POST["id_user"]);
			    }
				
				
				
			    $newpassword = "";
				$confirmpassword = "";
			    if((isset($_POST["password"]) && $_POST["password"] != "")){
					
					$newpassword = $_POST["password"];
				}
				if((isset($_POST["confirmpassword"]) && $_POST["confirmpassword"] != "") ){
					
					$confirmpassword = $_POST["confirmpassword"];
				}
				
				if($newpassword != $confirmpassword){
					
					throw new Exception("Password do not match");
				}else{
					$user->setPassword($confirmpassword);
				}
				
				
				
				
				
		 
		      $dao = new genericDao();
		      $result = $dao->update($user);
			  
			  
			       $json = array(
					  "is_erro" => $erro,
					   "msg" => "Registro alterado com sucesso!",
		   
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