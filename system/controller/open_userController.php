 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
 require_once('path.php');
 require_once($include_path.'/system/model/Tb_open_user.php');
 require_once($include_path.'/system/dao/genericDao.php');
 require_once($include_path.'/system/util/componentUtil.php');
 require_once($include_path.'/system/util/dataUtil.php');
 
 
 
 
 if(isset($_POST["action"]) && strtolower($_POST["action"]) == "save"){
		   
		   $json_result = "";
		   $erro ="false";
		   try 
		   {
               $dao = new genericDao();
      		  $open = new Tb_open_user();
			  $openSearch =   new Tb_open_user();
			
			 
			   
				if(isset($_POST["id_open"]) && $_POST["id_open"] != ""){
		          $open->setId_open($_POST["id_open"]);
				  $openSearch->setId_open($_POST["id_open"]);
			    }			    
				if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $open->setId_user($_POST["id_user"]);
				  $openSearch->setId_user($_POST["id_user"]);
			    }
				if(isset($_POST["callFunction"]) && $_POST["callFunction"] != ""){
		          $open->setCallFunction(str_replace("'","\'",$_POST["callFunction"]));
			    }
				
				$resultopen = $dao->getAll($openSearch);
				 while($row = $resultopen->fetch_array()){
				    $open->setId_open_user($row["id_open_user"]);
				}
				
				
				if($open->getId_open_user() == null){
				    $open->setId_open_user("auto");
					$result = $dao->insert($open);
				  
				}else{
				    
					 $result = $dao->update($open);
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


if(isset($_POST["action"]) && strtolower($_POST["action"]) == "insert"){
		   
		   $json_result = "";
		   $erro ="false";
		   try 
		   {
           
      		  $open = new Tb_open_user();
			  
			  $open->setId_open_user("auto");
			 
			   
				if(isset($_POST["id_open"]) && $_POST["id_open"] != ""){
		          $open->setId_open($_POST["id_open"]);
			    }			    
				if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $open->setId_user($_POST["id_user"]);
			    }
				if(isset($_POST["callFunction"]) && $_POST["callFunction"] != ""){
		          $open->setCallFunction($_POST["callFunction"]);
			    }
				
				
				
		 
		      $dao = new genericDao();
		      $result = $dao->insert($open);
			  
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
		     
              $open = new Tb_open_user();
			  		  

				if(isset($_POST["id_open_user"]) && $_POST["id_open_user"] != ""){
		          $open->setId_open_user($_POST["id_open_user"]);
			    }
				
				if(isset($_POST["id_open"]) && $_POST["id_open"] != ""){
		          $open->setId_open($_POST["id_open"]);
			    }			    
				if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $open->setId_user($_POST["id_user"]);
			    }
				if(isset($_POST["callFunction"]) && $_POST["callFunction"] != ""){
		          $open->setCallFunction($_POST["callFunction"]);
			    }
				
			
		      
			 $dao = new genericDao();
		     $result = $dao->update($open);
			  
			  
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
               
			  		  

				 $open = new Tb_open_user();
			  		  

				if(isset($_POST["id_open_user"]) && $_POST["id_open_user"] != ""){
		          $open->setId_open_user($_POST["id_open_user"]);
			    }
				
		 
		       $dao = new genericDao();
		       $result = $dao->delete($open);
			 
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

  
   
  

?>