 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
 require_once('path.php');
 require_once($include_path.'/system/model/Tb_contact.php');
 require_once($include_path.'/system/model/Tb_contact_list.php');
 require_once($include_path.'/system/model/Tb_message.php');
 require_once($include_path.'/system/dao/genericDao.php');
 require_once($include_path.'/system/util/componentUtil.php');


if(isset($_POST["action"]) && strtolower($_POST["action"]) == "insert"){
		   
		   $json_result = "";
		   $erro ="false";
		   try 
		   {
           
      		  $contact = new Tb_contact();
			  $contact->setId_contact("auto");
			   
				if(isset($_POST["name"]) && $_POST["name"] != ""){
		          $contact->setName($_POST["name"]);
			    }
				if(isset($_POST["phone"]) && $_POST["phone"] != ""){
		          $contact->setPhone($_POST["phone"]);
			    }
				if(isset($_POST["email"]) && $_POST["email"] != ""){
		          $contact->setEmail($_POST["email"]);
			    }
				if(isset($_POST["image"]) && $_POST["image"] != ""){
		          $contact->setImage($_POST["image"]);
			    }
				if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $contact->setId_user($_POST["id_user"]);
			    }
				
		 
		      $dao = new genericDao();
		      $result = $dao->insert($contact);
			  
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
               $contact = new Tb_contact();
			
			   
			   if(isset($_POST["id_contact"]) && $_POST["id_contact"] != ""){
		          $contact->setId_contact($_POST["id_contact"]);
			    }
				if(isset($_POST["name"]) && $_POST["name"] != ""){
		          $contact->setName($_POST["name"]);
			    }
				if(isset($_POST["phone"]) && $_POST["phone"] != ""){
		          $contact->setPhone($_POST["phone"]);
			    }
				if(isset($_POST["email"]) && $_POST["email"] != ""){
		          $contact->setEmail($_POST["email"]);
			    }
				if(isset($_POST["image"]) && $_POST["image"] != ""){
		          $contact->setImage($_POST["image"]);
			    }
				if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $contact->setId_user($_POST["id_user"]);
			    }
			
		      $dao = new genericDao();
		      $result = $dao->update($contact);
			  
			  
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
                $contact = new Tb_contact();
			    if(isset($_POST["codigo"]) && $_POST["codigo"] != ""){
		          $contact->setId_contact($_POST["codigo"]);
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
		        
                 $contact= new Tb_contact();
				 $contato = new Tb_contact();
		         $acao = "";
			   if(isset($_POST["vlr"]) && $_POST["vlr"] != ""){
		          $contact->setId_contact($_POST["vlr"]);
				  $acao = "edit";
				  $dao = new genericDao();
					$resultset = $dao->getById($contact);
					 while($row = $resultset->fetch_array()){
						  $contato->setId_contact($row["id_contact"]);
						  $contato->setName($row["name"]);
						  $contato->setEmail($row["emaill"]);
						  $contato->setPhone($row["phone"]);
						  $contato->setImage($row["image"]);
						  $contato->setId_user($row["id_user"]);
						
					 }
			   }
			   else{
			      $acao = "insert";
			   }
			 
			   
			  
			     $_REQUEST['contact'] = $contato;
				 $_REQUEST['acao'] = $acao;
				 require_once $include_path.'/programs/wtalk/info.php';
				
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
      
 if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getcontact"){
		   
		   $json_result = "";
		   $erro = "false";
 	  
		  try 
		   {
              
			 
			      

               $contact= new Tb_contact();
			   $contato = new Tb_contact();
		        $acao = "";
			   if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $contact->setId_user($_POST["id_user"]);
				  $acao = "edit";
				  $dao = new genericDao();
					$resultset = $dao->getAll($contact);
					 while($row = $resultset->fetch_array()){
						  $contato->setId_contact($row["id_contact"]);
						  $contato->setName($row["name"]);
						  $contato->setEmail($row["email"]);
						  $contato->setPhone($row["phone"]);
						  $contato->setImage($row["image"]);
						  $contato->setId_user($row["id_user"]);
						
					 }
			   }
			   $image = "images/no_photo_talk.png";
			   if($contato->getImage() != null){
			      $image = $contato->getImage();
			   }
			 





				  $json = array(
					  "isErro" => $erro,
					   "msg" => "Success",
					   "name" =>  $contato->getName(),
					   "image" => $image,
					   "id_contact" =>  $contato->getId_contact(),
					   "id_user" =>  $contato->getId_user(),
		   
					);
				
					$json_result = json_encode($json);
			         
  
		   } catch (Exception $e) {
		     
			   $json = array(
					  "isErro" => "true",
					   "msg" => $e->getMessage(),
					   "name" =>  "",
					   "image" =>  "",
					    "id_contact" => "",
						"id_user" => "",
					   
		   
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
				 $dao = new genericDao();
                 $contact = new Tb_contact();
			
			   
			    if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $contact->setId_user($_POST["id_user"]);
			    }
				
				if(isset($_POST["page"]) && $_POST["page"] != ""){
		           $page=$_POST["page"]; 
				  
			    }
				
				$query = "SELECT * FROM tb_contact cont where 1=1 and ";
				$query .="		id_contact not in( ";
				$query .="		select id_contact from tb_contact_list cont_list where 1=1 and id_user = {$contact->getId_user()}) ";
				$query .="		and id_user <> {$contact->getId_user()} "; 
				
				
				
				$resultset = $dao->executeQueryByString($query);
				
				$_REQUEST['tb_contact'] = $resultset;
				
			    require_once $include_path.'/programs/wtalk/contacts.php';
			         
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
   
   
   
   
  
   
   
  
   
  
		  
   
  
 


?>