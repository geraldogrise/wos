 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
 require_once('path.php');
 require_once($include_path.'/system/model/Tb_notes.php');
 require_once($include_path.'/system/dao/genericDao.php');
 require_once($include_path.'/system/util/componentUtil.php');


if(isset($_POST["action"]) && strtolower($_POST["action"]) == "insert"){
		   
		   $json_result = "";
		   $erro ="false";
		   try 
		   {
           
      		  $note = new Tb_notes();
			  $note->setId_note("auto");
			   
				if(isset($_POST["note"]) && $_POST["note"] != ""){
		          $note->setNote($_POST["note"]);
			    }
				if(isset($_POST["id_group"]) && $_POST["id_group"] != ""){
		          $note->setId_group($_POST["id_group"]);
			    }
				if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $note->setId_user($_POST["id_user"]);
			    }
				
		 
		      $dao = new genericDao();
		      $result = $dao->insert($note);
			  
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
               $note = new Tb_notes();
			
			   
			   if(isset($_POST["id_note"]) && $_POST["id_note"] != ""){
		          $note->setId_note($_POST["id_note"]);
			    }
				if(isset($_POST["note"]) && $_POST["note"] != ""){
		          $note->setNote($_POST["note"]);
			    }
				if(isset($_POST["id_group"]) && $_POST["id_group"] != ""){
		          $note->setId_group($_POST["id_group"]);
			    }
				if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $note->setId_user($_POST["id_user"]);
			    }
			
		      $dao = new genericDao();
		      $result = $dao->update($note);
			  
			  
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
                $note = new Tb_notes();
			    if(isset($_POST["id"]) && $_POST["id"] != ""){
		          $note->setId_note($_POST["id"]);
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
		        
                 $note= new Tb_notes();
				 $nota = new Tb_notes();
		         $acao = "";
			   if(isset($_POST["vlr"]) && $_POST["vlr"] != ""){
		          $note->setId_note($_POST["vlr"]);
				  $acao = "edit";
				  $dao = new genericDao();
					$resultset = $dao->getById($note);
					 while($row = $resultset->fetch_array()){
						  $nota->setId_note($row["id_note"]);
						  $nota->setNote($row["note"]);
						  $nota->setId_group($row["id_group"]);
						  $nota->setId_user($row["id_user"]);
						
					 }
			   }
			   else{
			      $acao = "insert";
			   }
			 
			   
			  
			     $_REQUEST['notes'] = $nota;
				 $_REQUEST['acao'] = $acao;
				
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
   
   
   if(isset($_POST["action"]) && strtolower($_POST["action"]) == "save"){
		   
		   $json_result = "";
		   $erro ="false";
		   try 
		   {
           
      		  $note = new Tb_notes();
			  $nota = new Tb_notes();
			   
				
				if(isset($_POST["id_group"]) && $_POST["id_group"] != ""){
		          $note->setId_group($_POST["id_group"]);
			    }
				if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $note->setId_user($_POST["id_user"]);
			    }
				if(isset($_POST["prev_note"]) && $_POST["prev_note"] != ""){
		          $note->setNote($_POST["prev_note"]);
			    }
				
				$dao = new genericDao();
			    $resultset_note = $dao->getAll($note);
				while($row = $resultset_note->fetch_array()){
				  $nota->setId_note($row["id_note"]);
				  $nota->setNote($row["note"]);
				  $nota->setId_group($row["id_group"]);
				  $nota->setId_user($row["id_user"]);
				}
				
				if(isset($_POST["note"]) && $_POST["note"] != ""){
		          $note->setNote($_POST["note"]);
			    }
				if($resultset_note->num_rows == 0){
					  $note->setId_note("auto");
			   	      $result = $dao->insert($note);
				}else if($resultset_note->num_rows  ==1){
				      $note->setId_note($nota->getId_note());
			   	      $result = $dao->update($note);
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
   
   if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getall"){
		    $json_result = "";
		    $erro = "false";
 	  
		  
		   try 
		   {
		        
                 $note= new Tb_notes();
				 $nota = new Tb_notes();
		         $separator = "";
				 $notes="";
			   
			   if(isset($_POST["id_group"]) && $_POST["id_group"] != ""){
		          $note->setId_group($_POST["id_group"]);
				  $note->setId_user($_POST["id_user"]);
				  $dao = new genericDao();
					$resultset = $dao->getAll($note);
					 while($row = $resultset->fetch_array()){
						
			
						$notes .=$separator.$row["id_note"]."#".$row["note"];  
						$separator="|";
					 }
			   }
			  
			 $json = array(
					  "is_erro" => $erro,
					   "msg" => "Ok",
					   "notes" => $notes,
		   
					);
					$json_result = json_encode($json);
			   
			  
  
		   } catch (Exception $e) {
		     
			   $json = array(
					  "is_erro" => "true",
					   "msg" => $e->getMessage(),
					   "notes" =>"",
		   
			    );
				$json_result = json_encode($json);
			
		   
		   }
		  echo $json_result;
			   
   }
    
   
   
  
   
  
		  
   
  
 


?>