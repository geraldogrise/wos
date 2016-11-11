 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
 require_once('path.php');
 require_once($include_path.'/system/model/Tb_backup.php');
 require_once($include_path.'/system/dao/genericDao.php');
 require_once('utilController.php');

 

  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "insert"){
		   
		   $json_result = "";
		   $erro ="false";
		   try 
		   {
           
      		   $backup = new Tb_backup();
			   
			    if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $backup->setId_user($_POST["id_user"]);
			    }
			    if(isset($_POST["id_backup"]) && $_POST["id_backup"] != ""){
		          $backup->setId_backup("auto");
			    }
				if(isset($_POST["backup_file"]) && $_POST["backup_file"] != ""){
		          $backup->setBackup_file($_POST["backup_file"]);
			    }
				 $backup->setDt_backup(date("Y-m-d"));
				
		      $dao = new genericDao();
		      $result = $dao->insert($backup);
			  
		
			  
			  
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
               $backup = new Tb_backup();
			   
			    if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $backup->setId_user($_POST["id_user"]);
			    }
			    if(isset($_POST["id_backup"]) && $_POST["id_backup"] != ""){
		          $backup->setId_backup($_POST["id_backup"]);
			    }
				if(isset($_POST["backup_file"]) && $_POST["backup_file"] != ""){
		          $backup->setBackup_file($_POST["backup_file"]);
			    }
				
				
				
				
		 
		      $dao = new genericDao();
		      $result = $dao->update($backup);
			  
			  
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
                 $p_page = 3;
                  
		      
			    $backup = new Tb_backup();
			   
			   if(isset($_POST["id_backup"]) && $_POST["id_backup"] != ""){
		          $backup->setId_backup($_POST["id_backup"]);
			    }
				
				if(isset($_POST["page"]) && $_POST["page"] != ""){
		           $page=$_POST["page"]; 
				  
			    }
				
				
				
				
				$dao = new genericDao();
				$resultPage = $dao->getAll($backup);
				$backup->setPaginator(($page-1)*$p_page ,3);
				$resultset = $dao->getAll($backup);
				
			  
			    $_REQUEST['tb_backup'] = $resultset;
				$_REQUEST['num_rows'] = $resultPage->num_rows;
				$_REQUEST['p_pagina'] = $p_page;
				$_REQUEST['page'] = $page;
				$_REQUEST['page_input'] =".page_backup";
				$_REQUEST['controller'] ="backup";
				$_REQUEST['filtro'] =".form_backup";
				$_REQUEST['local'] =".local_grid";
				
				$util = new utilController();
		        $users= $util->getUsers();
				$_REQUEST['users'] = $users;
				
			    require_once '../programs/backup/gridview.php';
			         
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
   
  
   
 if(isset($_POST["action"]) && strtolower($_POST["action"]) == "delete"){
		   
		   $json_result = "";
		   $erro = "false";
 	 
		  try 
		   {
                $backup = new Tb_backup();
				$back = new Tb_backup();
				  $dao = new genericDao();
			    
				if(isset($_POST["id_backup"]) && $_POST["id_backup"] != ""){
		          $backup->setId_backup($_POST["id_backup"]);
			    }
			    
				$resultset = $dao->getById($backup);
					 while($row = $resultset->fetch_array()){
						  $back->setId_backup($row["id_backup"]);
						  $back->setBackup_file($row["backup_file"]);
					 }
			   $backup_file = str_replace("/","\\",$back->getBackup_file());
			  
			   unlink( $backup_file);
		       $result = $dao->delete($backup);
			
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
  
  
   
   
   
    
  
		  
   
  
 


?>