 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
 require_once("path.php");
 require_once($include_path.'/system/model/Tb_programs.php');
 require_once($include_path.'/system/model/Tb_programs_group.php');
 require_once($include_path.'/system/model/Tb_programs_grpusers.php');
 require_once($include_path.'/system/model/Tb_group.php');
 require_once($include_path.'/system/dao/genericDao.php');
 require_once('ComboController.php');
 require_once('utilController.php');
 require_once('componentController.php');
 require_once($include_path.'/system/util/userUtil.php');
 require_once($include_path.'/system/util/groupUtil.php');
 require_once($include_path.'/system/util/programUtil.php');
 
 

  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "insert"){
		   
		   $json_result = "";
		   $erro ="false";
		   try 
		   {
           
      		  $program = new Tb_programs();
			  $util = new groupUtil ();
			  $program_util = new programUtil();
			
				if(isset($_POST["id_program"]) && $_POST["id_program"] != ""){
		          $program->setId_program($_POST["id_program"]);
			    }
				
				
		 
		      $dao = new genericDao();
		    
			  if(isset($_POST["group_add"]) && $_POST["group_add"] != ""){
		          $group_add = $_POST["group_add"];
				  
				 $util->insertBatchGroupProgram($group_add,$program->getId_program());
			  }
			  if(isset($_POST["group_add_user"]) && $_POST["group_add_user"] != ""){
		          $group_add = $_POST["group_add_user"];
				  if(!is_null($group_add)){
					  $programUtil->insertBatchGroupUsers($group_add,$program->getId_program() );
				  }
				  
				 
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
               $program = new Tb_programs();
			    $util = new groupUtil ();
			    $program_util = new programUtil();
				if(isset($_POST["id_program"]) && $_POST["id_program"] != ""){
		          $program->setId_program($_POST["id_program"]);
			    }
			    
				
				if(isset($_POST["group_add"]) && $_POST["group_add"] != ""){
		          $group_add = $_POST["group_add"];
				  $util->insertBatchGroupProgram($group_add, $program->getId_program() );
			    }
				if(isset($_POST["group_remove"]) && $_POST["group_remove"] != ""){
		          $group_remove = $_POST["group_remove"];
				  $util->deleteBatchGroupProgram($group_remove, $program->getId_program() );
			    }
				
				if(isset($_POST["group_add_user"]) && $_POST["group_add_user"] != ""){
		          $group_add_user = $_POST["group_add_user"];
				  $program_util->insertBatchGroupUsers($group_add_user, $program->getId_program() );
			    }
				if(isset($_POST["group_remove_user"]) && $_POST["group_remove_user"] != ""){
		          $group_remove_user = $_POST["group_remove_user"];
				  $program_util->deleteBatchGroupUsers($group_remove_user, $program->getId_program() );
			    }
				
				
		 
		      $dao = new genericDao();
		     
			  
			  
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
   
   
   
   
 if(isset($_POST["action"]) && strtolower($_POST["action"]) == "delete"){
		   
		   $json_result = "";
		   $erro = "false";
 	 
		  try 
		   {
                $program = new Tb_programs();
			    if(isset($_POST["id_program"]) && $_POST["id_program"] != ""){
		          $program->setId_program($_POST["id_program"]);
			    }
			   
		 
		       $dao = new genericDao();
		       $result = $dao->delete($program);
			
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
		        
                 $program= new Tb_programs();
				 $programa = new Tb_programs();
				
				
				 $utilGroup = new groupUtil();
				 $utilUser = new userUtil();
				 $array_grpprog = array();
				 $array_users =  array();
		         
				 $acao = "";
				 $grp_program = "";
				 $grp_user = "";
				  $valor = ""; 
				
				 
				
			   if(isset($_POST["vlr"]) && $_POST["vlr"] != ""){
		          $program->setId_program($_POST["vlr"]);
				  $acao = "edit";
				  $dao = new genericDao();
					$resultset = $dao->getById($program);
					 while($row = $resultset->fetch_array()){
						  $programa->setId_program($row["id_program"]);
						  $programa->setName($row["name"]);
						  $programa->setId_grp_program($row["id_grp_program"]);
						  $programa->setImagePath($row["imagePath"]);
						  $programa->setCallFunction($row["callFunction"]);
						  $programa->setSerial($row["serial"]);
						  $programa->setGip($row["gip"]);
						  $programa->setClass_program($row["class_program"]);
						  $programa->setType($row["type"]);
						  $programa->setOpentype($row["opentype"]);
						 
						 
					 }
					 $grp_program = $utilGroup->getGroups($programa->getId_program());
					 $array_grpprog = $utilGroup->getArrayGroups($programa->getId_program());
					 $grp_user  = $utilUser->getGrpUsers($programa->getId_program());
					 $array_users = $utilUser->getArrayGrpUsers($programa->getId_program());
					
					
				    
				   
					
					 if(sizeof($array_grpprog) ==0 && sizeof($array_users) ==0 ){
						 $acao = "insert";
					 }
					
			   }
			   else if(isset($_POST["name_program"]) && $_POST["name_program"] != ""){
		          $program_name = trim($_POST["name_program"]);

				  $program->setName($program_name);
				  $acao = "edit";
				  $dao = new genericDao();
					$resultset = $dao->getAll($program);
					 while($row = $resultset->fetch_array()){
						  $programa->setId_program($row["id_program"]);
						  $programa->setName($row["name"]);
						  $programa->setId_grp_program($row["id_grp_program"]);
						  $programa->setImagePath($row["imagePath"]);
						  $programa->setCallFunction($row["callFunction"]);
						  $programa->setSerial($row["serial"]);
						  $programa->setGip($row["gip"]);
						  $programa->setClass_program($row["class_program"]);
						  $programa->setType($row["type"]);
						  $programa->setOpentype($row["opentype"]);
						 
						 
					 }
					 $grp_program = $utilGroup->getGroups($programa->getId_program());
					 $array_grpprog = $utilGroup->getArrayGroups($programa->getId_program());
					 $grp_user  = $utilUser->getGrpUsers($programa->getId_program());
					 $array_users = $utilUser->getArrayGrpUsers($programa->getId_program());
					
					 if(sizeof($array_grpprog) ==0 && sizeof($array_users) ==0 ){
						 $acao = "insert";
					 }
					
			   }
			  
			
			  
			    
				 $_REQUEST['acao'] = $acao;
				 $comp = new ComponentController();
                 $_REQUEST['component']= $comp->getMultipleGroups("id_groups_users",'90', $array_grpprog ,true);
				 $_REQUEST['component_user']= $comp->getMultipleUsers("id_users",'90', $array_users ,true);
				 $_REQUEST['component_language']= $comp->getSingleCountry("id_language",'90',$valor ,true);
				 $_REQUEST['program']= $programa;
				 $_REQUEST['grp_program']= $grp_program;
				 $_REQUEST['grp_user']= $grp_user;
				 require_once $include_path.'/system/programs/programs_association/screen.php';
				 
				 
			 
			 
			         
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
    
		  
   
  
 


?>