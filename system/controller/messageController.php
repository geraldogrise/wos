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
			  $dataUtil = new DataUtil();
			  $message->setId_message("auto");
			  $date =  date("d/m/Y");
			  
			   
				if(isset($_POST["text"]) && $_POST["text"] != ""){
		          $message->setText($_POST["text"]);
			    }
				$message->setStatus("A");
			    $message->setDt_msg($dataUtil->formatDateToMysql($date));
			    
				if(isset($_POST["id_contact_sender"]) && $_POST["id_contact_sender"] != ""){
		          $message->setId_contact_sender($_POST["id_contact_sender"]);
			    }
				if(isset($_POST["id_contact_receiver"]) && $_POST["id_contact_receiver"] != ""){
		          $message->setId_contact_receiver($_POST["id_contact_receiver"]);
			    }
				if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $message->setId_user($_POST["id_user"]);
			    }
				
		 
		      $dao = new genericDao();
		      $result = $dao->insert($message);
			  
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
		       $text = "";
               $message = new Tb_message();
			   $mensagem = new Tb_message();
			   $dataUtil = new DataUtil();
			   $dao = new genericDao();
			  
				
				if(isset($_POST["id_message"]) && $_POST["id_message"] != ""){
		          $message->setId_message($_POST["id_message"]);
			    }
				
				
				$resultset = $dao->getById($message); 
				 while($row = $resultset->fetch_array()){
				     $text = $row["text"]."|";
				 }
				 
				 
				 $date =  date("d/m/Y");
			     $message->setDt_msg($dataUtil->formatDateToMysql($date));
				 if(isset($_POST["text"]) && $_POST["text"] != ""){
		            $message->setText($text.$_POST["text"]);
			     }
				
			
		      
			
		     $result = $dao->update($message);
			  
			  
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
                $message = new Tb_message();
			    if(isset($_POST["codigo"]) && $_POST["codigo"] != ""){
		          $message->setId_message($_POST["codigo"]);
			    }
			   if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $message->setId_user($_POST["id_user"]);
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
		        
                 $message= new Tb_message();
				 $mensagem = new Tb_message();
		         $acao = "";
			   if(isset($_POST["vlr"]) && $_POST["vlr"] != ""){
		          $message->setId_message($_POST["vlr"]);
				  $acao = "edit";
				  $dao = new genericDao();
					$resultset = $dao->getById($message);
					 while($row = $resultset->fetch_array()){
						  $mensagem->setId_message($row["id_message"]);
						  $mensagem->setText($row["text"]);
						  $mensagem->setDt_msg($row["dt_msgl"]);
						  $mensagem->setStatus($row["status"]);
						  $mensagem->setId_contact_sender($row["id_contact_sender"]);
						  $mensagem->setId_contact_receiver($row["id_contact_receiver"]);
						
					 }
			   }
			   else{
			      $acao = "insert";
			   }
			 
			   
			  
			     $_REQUEST['message'] = $contato;
				 $_REQUEST['acao'] = $acao;
				
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
   
   if(isset($_POST["action"]) && strtolower($_POST["action"]) == "search"){
		   
		  
		   try 
		   {
		        $page = 1; 
                $p_page = 5;
                $arrayMessages = array(); 
		        $dao = new genericDao();
			    $message = new Tb_message();
			
			   
			    if(isset($_POST["id_contact"]) && $_POST["id_contact"] != ""){
		          $message->setId_contact($_POST["id_contact"]);
			    }
				 if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $message->setId_user($_POST["id_user"]);
			    }
				
				if(isset($_POST["page"]) && $_POST["page"] != ""){
		           $page=$_POST["page"]; 
				  
			    }
			
					
			$query ="  select id_message as id_message , text,status , max(dt_msg) as dt_msg,id_contact_sender,id_contact_receiver ,ctb.name as name,ctb.image as image "; 
			$query .=" from tb_message msg inner join tb_contact cta on msg.id_contact_sender = cta.id_contact and cta.id_user ={$message->getId_user()} ";
			$query .=" inner join tb_contact ctb on msg.id_contact_receiver = ctb.id_contact ";
			$query .=" union all ";
			$query .=" select id_message,text,status,max(dt_msg) as dt_msg,id_contact_receiver,id_contact_sender,ctb.name as name,ctb.image as image  ";
			$query .=" from tb_message msg inner join tb_contact cta on msg.id_contact_receiver = cta.id_contact and cta.id_user ={$message->getId_user()} ";
			$query .=" inner join tb_contact ctb on msg.id_contact_sender = ctb.id_contact ";
			$query .=" group by id_message,status,id_contact_sender,id_contact_receiver ";
			$query .=" order by id_contact_sender,id_contact_receiver, dt_msg,id_message ";
			
			
			$resultset = $dao->executeQueryByString($query);
            $anterior = "";
			$proximo = "";
			$cont = 0;
		    while($row = $resultset->fetch_array()){
			    $anterior = $row["id_contact_sender"] ."_".$row["id_contact_receiver"];
				if(($anterior != $proximo && $cont > 0) || $cont == $resultset->num_rows   ){
				 
				  array_push($arrayMessages,$arrayMsgs);
				}
				$arrayMsgs = array("id_message"=>$row["id_message"],"text"=>$row["text"],
				                     "id_contact_sender"=>$row["id_contact_sender"],"id_contact_receiver"=>$row["id_contact_receiver"],
									 "name"=>$row["name"],"image"=>$row["image"],"id_user"=>$message->getId_user());
				
				$cont++;
			    $proximo = $row["id_contact_sender"] ."_".$row["id_contact_receiver"];
			}
             array_push($arrayMessages,$arrayMsgs);			
			
			
				
				
				$_REQUEST['tb_message'] = $arrayMessages;
				
			    require_once $include_path.'/programs/wtalk/chat.php';
			         
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
   
   if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getmsgs"){
		   
		  
		   try 
		   {
		        $page = 1; 
                $p_page = 5;
                $dao = new genericDao();
			    $id_contact_receiver = "";
				$id_contact_sender = "";
				$id_contact = "";
				$contact = new Tb_contact();
				$imageContact = "";
			
			   
			    if(isset($_POST["id_contact_receiver"]) && $_POST["id_contact_receiver"] != ""){
		            $id_contact_receiver =$_POST["id_contact_receiver"];
			    }
			    if(isset($_POST["id_contact_sender"]) && $_POST["id_contact_sender"] != ""){
		            $id_contact_sender = $_POST["id_contact_sender"];
			    }
				if(isset($_POST["id_contact"]) && $_POST["id_contact"] != ""){
		            $id_contact = $_POST["id_contact"];
			    }
				if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		            $id_user = $_POST["id_user"];
			    }
				
				if(isset($_POST["page"]) && $_POST["page"] != ""){
		           $page=$_POST["page"]; 
				  
			    }
			
				$query = " 	SELECT * FROM tb_message msg  ";
				$query .=" inner join  tb_contact ctc on ctc.id_contact = id_contact_sender ";
				$query .=" WHERE 1=1  ";
				$query .= " and (id_contact_sender = {$id_contact_sender} and id_contact_receiver = {$id_contact_receiver})";
				$query .= " or (id_contact_sender = {$id_contact_receiver} and id_contact_receiver = {$id_contact_sender})";
				$query .= " order by dt_msg,id_message";
				$resultset = $dao->executeQueryByString($query);
				$dao = new genericDao();
			    $resultset_contact = $dao->getById($contact);
				 while($row = $resultset_contact->fetch_array()){
				   $imageContact = $row["image"];
				 }
                 if($imageContact == null){
				    $imageContact  ="images/no_photo_talk.png";
				 } 
			
				
				
				$_REQUEST['tb_message'] = $resultset;
				$_REQUEST['id_contact'] = $id_contact;
				$_REQUEST['id_user'] = $id_user;
				$_REQUEST['imageContact'] = $imageContact;
				
				
			    require_once $include_path.'/programs/wtalk/chatOnline.php';
			         
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
   if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getchatmsg"){
		   
		  
		   try 
		   {
		        $page = 1; 
                $p_page = 5;
                $dao = new genericDao();
			    $id_contact_receiver = "";
				$id_contact_sender = "";
				$id_contact = "";
				$contact = new Tb_contact();
				$imageContact = "";
			
			   
			    if(isset($_POST["id_contact_receiver"]) && $_POST["id_contact_receiver"] != ""){
		            $id_contact_receiver =$_POST["id_contact_receiver"];
			    }
			    if(isset($_POST["id_contact_sender"]) && $_POST["id_contact_sender"] != ""){
		            $id_contact_sender = $_POST["id_contact_sender"];
			    }
				if(isset($_POST["id_contact"]) && $_POST["id_contact"] != ""){
		            $id_contact = $_POST["id_contact"];
			    }
				if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		            $id_user = $_POST["id_user"];
			    }
				
				if(isset($_POST["page"]) && $_POST["page"] != ""){
		           $page=$_POST["page"]; 
				  
			    }
			
				$query = " 	SELECT * FROM tb_message msg  ";
				$query .=" inner join  tb_contact ctc on ctc.id_contact = id_contact_sender ";
				$query .=" WHERE 1=1  ";
				$query .= " and (id_contact_sender = {$id_contact_sender} and id_contact_receiver = {$id_contact_receiver})";
				$query .= " or (id_contact_sender = {$id_contact_receiver} and id_contact_receiver = {$id_contact_sender})";
				$query .= " order by dt_msg,id_message";
				$resultset = $dao->executeQueryByString($query);
				$dao = new genericDao();
			    $resultset_contact = $dao->getById($contact);
				 while($row = $resultset_contact->fetch_array()){
				   $imageContact = $row["image"];
				 }
                 if($imageContact == null){
				    $imageContact  ="images/no_photo_talk.png";
				 } 
			
				
				
				$_REQUEST['tb_message'] = $resultset;
				$_REQUEST['id_contact'] = $id_contact;
				$_REQUEST['id_user'] = $id_user;
				$_REQUEST['imageContact'] = $imageContact;
				
				
			    require_once $include_path.'/programs/wtalk/chatOn.php';
			         
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
   
   
    if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getlastsender"){
		   
		  $json_result="";
		  $erro ="";
		   try 
		   {
		        $page = 1; 
                $p_page = 5;
                $dao = new genericDao();
			    $id_contact_receiver = "";
				$id_contact_sender = "";
				$id_contact= -1;
			
			   
			    if(isset($_POST["id_contact_receiver"]) && $_POST["id_contact_receiver"] != ""){
		            $id_contact_receiver =$_POST["id_contact_receiver"];
			    }
			    if(isset($_POST["id_contact_sender"]) && $_POST["id_contact_sender"] != ""){
		            $id_contact_sender = $_POST["id_contact_sender"];
			    }
				
				
				if(isset($_POST["page"]) && $_POST["page"] != ""){
		           $page=$_POST["page"]; 
				  
			    }
			
				
				$query = " select max(id_message ) as id_message,id_contact_sender as id_contact_sender from tb_message where 1=1  ";
				$query .= " and((id_contact_sender = {$id_contact_sender } && id_contact_receiver = {$id_contact_receiver}) ";
				$query .= " or (id_contact_sender = {$id_contact_receiver}  && id_contact_receiver = {$id_contact_sender } )) ";
				$resultset = $dao->executeQueryByString($query);
                while($row = $resultset->fetch_array()){
				    $id_contact = $row["id_contact_sender"];
				}
				
			
			         
                      $json = array(
					  "isErro" => $erro,
					   "msg" => "Success",
					   "id_contact" => $id_contact,
		   
					);
				
					$json_result = json_encode($json);
			         
  
		   } catch (Exception $e) {
		     
			   $json = array(
					  "isErro" => "true",
					   "msg" => $e->getMessage(),
					   "id_contact" => -1,
		   
			    );
				$json_result = json_encode($json);
			
		   
		   }
		  echo $json_result;
			   
   }
   
   
   
  
  
   
   
  
   
  
		  
   
  
 


?>