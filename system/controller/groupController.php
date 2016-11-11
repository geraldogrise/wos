 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
 require_once('path.php');
 require_once($include_path.'/system/model/Tb_group.php');
 require_once($include_path.'/system/model/Tb_grpusers_files.php');
 require_once($include_path.'/system/dao/genericDao.php');
 require_once('ComboController.php');
 require_once('utilController.php');
 require_once($include_path.'/system/util/componentUtil.php');

  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "insert"){
		   
		   $json_result = "";
		   $erro ="false";
		   try 
		   {
           
      		  $group = new Tb_group();
			  $group->setId_group("auto");
			   
				if(isset($_POST["name"]) && $_POST["name"] != ""){
		          $group->setName($_POST["name"]);
			    }
				if(isset($_POST["id_group_pai"]) && $_POST["id_group_pai"] != ""){
		          $group->setId_group_pai($_POST["id_group_pai"]);
			    }
				if(isset($_POST["group_image"]) && $_POST["group_image"] != ""){
		          $group->setGroup_image($_POST["group_image"]);
			    }
				else{
					 $group->setGroup_image('no_photo.jpg');
				}
				
				
				
				
				
				
				
		 
		      $dao = new genericDao();
		      $result = $dao->insert($group);
			  
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
               $group = new Tb_group();
			
			   
			   if(isset($_POST["id_group"]) && $_POST["id_group"] != ""){
		          $group->setId_group($_POST["id_group"]);
			    }
				if(isset($_POST["name"]) && $_POST["name"] != ""){
		          $group->setName($_POST["name"]);
			    }
				if(isset($_POST["id_group_pai"]) && $_POST["id_group_pai"] != ""){
		          $group->setId_group_pai($_POST["id_group_pai"]);
			    }
				if(isset($_POST["group_image"]) && $_POST["group_image"] != ""){
		          $group->setGroup_image($_POST["group_image"]);
			    }
				else{
					 $group->setGroup_image('no_photo.jpg');
				}
				
				
		 
		      $dao = new genericDao();
		      $result = $dao->update($group);
			  
			  
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
                  
		      
			    $group = new Tb_group();
			
			   
			   if(isset($_POST["id_group"]) && $_POST["id_group"] != ""){
		          $group->setId_group($_POST["id_group"]);
			    }
				
				if(isset($_POST["page"]) && $_POST["page"] != ""){
		           $page=$_POST["page"]; 
				  
			    }
				
				
				
				
				$dao = new genericDao();
				$resultPage = $dao->getAll($group);
				$group->setPaginator(($page-1)*$p_page ,5);
				$resultset = $dao->getAll($group);
				
			  
			    $_REQUEST['tb_group'] = $resultset;
				$_REQUEST['num_rows'] = $resultPage->num_rows;
				$_REQUEST['p_pagina'] = $p_page;
				$_REQUEST['page'] = $page;
				$_REQUEST['page_input'] =".page_group";
				$_REQUEST['controller'] ="group";
				$_REQUEST['filtro'] =".form_group";
				$_REQUEST['local'] =".local_grid";
				
				$util = new utilController();
		        $groups= $util->getParentsGroups();
				$_REQUEST['groups'] = $groups;
				
			    require_once $include_path.'/system/programs/groupaccount/gridview.php';
			         
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
   
  
   
 if(isset($_POST["action"]) && strtolower($_POST["action"]) == "delete"){
		   
		   $json_result = "";
		   $erro = "false";
 	  
		  try 
		   {
                $group = new Tb_group();
			    if(isset($_POST["id"]) && $_POST["id"] != ""){
		          $group->setId_group($_POST["id"]);
			    }
			   
		 
		       $dao = new genericDao();
		       $result = $dao->delete($group);
			 
			       $json = array(
					  "isErro" => $erro,
					   "msg" => "Success",
		   
					);
				
					$json_result = json_encode($json);
			         
  
		   } catch (Exception $e) {
		     
			   $json = array(
					  "isErro" => "true",
					   "msg" => $e->getMessage(),
		   
			    );
				$json_result = json_encode($json);
			
		   
		   }
		  echo $json_result;
            				
		 
		  
		   
		   
   }

  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "get"){
		   
		  
		   try 
		   {
		        
                 $group= new Tb_group();
				 $grupo = new Tb_group();
		         $acao = "";
			   if(isset($_POST["vlr"]) && $_POST["vlr"] != ""){
		          $group->setId_group($_POST["vlr"]);
				  $acao = "edit";
				  $dao = new genericDao();
					$resultset = $dao->getById($group);
					 while($row = $resultset->fetch_array()){
						  $grupo->setId_group($row["id_group"]);
						  $grupo->setName($row["name"]);
						  $grupo->setId_group_pai($row["id_group_pai"]);
						
						 
						  
						 
	  
					 }
			   }
			   else{
			      $acao = "insert";
			   }
			 
			   
			  
			     $_REQUEST['group_wos_edit'] = $grupo;
				 $_REQUEST['acao'] = $acao;
				 $combo = new ComboController();
				 $_REQUEST['combo'] =$combo->comboParentsGroup("id_group_pai",100,$grupo->getId_group_pai(),true,true);
				
				 
				
				 require_once $include_path.'/system/programs/addgroup/screen.php';
			 
			 
			         
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
     if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getselect"){
	 
	    try{
		   $comp  = new  componentUtil();
          
            if(isset($_POST["file"]) && $_POST["file"] != ""){
		          $file = $_POST["file"];
			}
			   
		   
		    $json_result = $comp->getSelectUsers($file,false);
		   
		
		}
        catch (Exception $e) {
		     
			  $json_result =  "is_erro=true#" . $e->getMessage();
			
		   
		 }
		 //$json_result = json_encode($json_result);
		 echo $json_result;
	 
	 
	 }
   
  
		  
   
  
 


?>