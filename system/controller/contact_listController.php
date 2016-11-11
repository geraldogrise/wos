 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
 require_once('path.php');
 require_once($include_path.'/system/model/Tb_contact_list.php');
 require_once($include_path.'/system/model/Tb_message.php');
 require_once($include_path.'/system/dao/genericDao.php');
 require_once($include_path.'/system/util/componentUtil.php');
 require_once($include_path.'/system/util/dataUtil.php');

if(isset($_POST["action"]) && strtolower($_POST["action"]) == "insert"){
		   
		   $json_result = "";
		   $erro ="false";
		   try 
		   {
              $message = new Tb_message();
			  $message2 = new Tb_message();
			  $dataUtil = new DataUtil();
      		  $contact_list = new Tb_contact_list();
			  $contact_list->setId_contact_list("auto");
			  $contact_list->setStatus("A");
			  	if(isset($_POST["name"]) && $_POST["name"] != ""){
		          $contact_list->setName($_POST["name"]);
			    }
				
				if(isset($_POST["id_contact"]) && $_POST["id_contact"] != ""){
		          $contact_list->setId_contact($_POST["id_contact"]);
			    }
				if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $contact_list->setId_user($_POST["id_user"]);
			    }
				 $message->setId_message("auto");
			     $date =  date("d/m/Y");
				 $message->setStatus("A");
			     $message->setDt_msg($dataUtil->formatDateToMysql($date));
				 $message->setText("Hey There");
				 $message->setId_user($_POST["id_user"]);
				 $message->setId_contact_sender($_POST["id_contact_sender"]);
				 $message->setId_contact_receiver($_POST["id_contact"]);
				 
				 $message2->setId_message("auto");
			     $message2->setStatus("A");
			     $message2->setDt_msg($dataUtil->formatDateToMysql($date));
				 $message2->setText("Hey There");
				 $message2->setId_user($_POST["id_user"]);
				 $message2->setId_contact_sender($_POST["id_contact"]);
				 $message2->setId_contact_receiver($_POST["id_contact_sender"]);
				
		 
		      $dao = new genericDao();
		      $result = $dao->insert($contact_list);
			  $dao->insert($message);
			   $dao->insert($message2);
			  
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
               $contact_list = new Tb_contact_list();
			
			   
			    if(isset($_POST["codigo"]) && $_POST["codigo"] != ""){
		          $contact_list->setId_contact_list(intval($_POST["codigo"]));
			    }
				
				if(isset($_POST["name"]) && $_POST["name"] != ""){
		          $contact_list->setName($_POST["name"]);
			    }
				
			
			
		      $dao = new genericDao();
		      $result = $dao->update($contact_list);
			  
			  
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
                $contact_list = new Tb_contact_list();
			    if(isset($_POST["codigo"]) && $_POST["codigo"] != ""){
		          $contact_list->setId_contact_list(intval($_POST["codigo"]));
			    }
				if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $contact_list->setId_user($_POST["id_user"]);
			    }
			   
		 
		       $dao = new genericDao();
		       $result = $dao->delete($contact_list);
			 
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
   
    if(isset($_POST["action"]) && strtolower($_POST["action"]) == "search"){
		   
		  
		   try 
		   {
		         $page = 1; 
                 $p_page = 5;
                  
		      
			    $contact_list = new Tb_contact_list();
				$dao = new genericDao();
			
			   
			    if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $contact_list->setId_user($_POST["id_user"]);
			    }
				
				if(isset($_POST["page"]) && $_POST["page"] != ""){
		           $page=$_POST["page"]; 
				  
			    }
				$query = "SELECT * FROM tb_contact  cont ";
				$query .= " inner join  tb_contact_list cont_list on cont.id_contact = cont_list.id_contact ";
				$query .= " WHERE 1=1 ";
				$query .= " and cont_list.id_user = {$contact_list->getId_user()} ";
				
				
				
				
				$resultset = $dao->executeQueryByString($query);
				$_REQUEST['tb_contact_list'] = $resultset;
			    require_once $include_path.'/programs/wtalk/contactList.php';
			         
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }

 
   
   
  
   
   
  
   
  
		  
   
  
 


?>