 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
 require_once('path.php');
 require_once($include_path.'/system/model/Tb_open.php');
 require_once($include_path.'/system/dao/genericDao.php');
 require_once($include_path.'/system/util/componentUtil.php');
 require_once($include_path.'/system/util/dataUtil.php');


if(isset($_POST["action"]) && strtolower($_POST["action"]) == "insert"){
		   
		   $json_result = "";
		   $erro ="false";
		   try 
		   {
           
      		  $open = new Tb_open();
			  
			  $open->setId_open("auto");
			 
			   
				if(isset($_POST["name"]) && $_POST["name"] != ""){
		          $open->setName($_POST["name"]);
			    }			    
				if(isset($_POST["callFunction"]) && $_POST["callFunction"] != ""){
		          $open->setCallFunction($_POST["callFunction"]);
			    }
				if(isset($_POST["flagchangepath"]) && $_POST["flagchangepath"] != ""){
		          $open->setFlagchangepath($_POST["flagchangepath"]);
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
		     
               $open = new Tb_open();
			  		  

				if(isset($_POST["id_open"]) && $_POST["id_open"] != ""){
		          $open->setId_open($_POST["id_open"]);
			    }
				
				
				if(isset($_POST["name"]) && $_POST["name"] != ""){
		          $open->setName($_POST["name"]);
			    }			    
				if(isset($_POST["callFunction"]) && $_POST["callFunction"] != ""){
		          $open->setCallFunction($_POST["callFunction"]);
			    }
				if(isset($_POST["flagchangepath"]) && $_POST["flagchangepath"] != ""){
		          $open->setFlagchangepath($_POST["flagchangepath"]);
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
               $open = new Tb_open();
			  		  

				if(isset($_POST["id_open"]) && $_POST["id_message"] != ""){
		          $open->setId_open($_POST["id_open"]);
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