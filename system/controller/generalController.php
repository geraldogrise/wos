
 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>


<?php
 require_once("path.php");
 require_once($include_path.'/system/model/Tb_general.php');
 require_once($include_path.'/system/dao/genericDao.php');



 
  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "save"){
		   
		   $json_result = "";
		   $erro ="false";
		   try 
		   {
           
      		   $general = new Tb_general();
				//$general->setId_general("auto");
				$general->setId_general(1);
				$general->setFlag_enable_question("D");
				$general->setFlag_enable_captcha("D");
				
				
				if(isset($_POST["login_type"]) && $_POST["login_type"] != ""){
		          $general->setFlag_login_type($_POST["login_type"]);
			    }
				if(isset($_POST["login_encrypt"]) && $_POST["login_encrypt"] != ""){
		          $general->setFlag_login_encrypt($_POST["login_encrypt"]);
			    }
				if(isset($_POST["number_of_bits"]) && $_POST["number_of_bits"] != ""){
		          $general->setNumber_of_bits($_POST["number_of_bits"]);
			    }
				if(isset($_POST["number_attempts"]) && $_POST["number_attempts"] != ""){
		          $general->setNumber_attempts($_POST["number_attempts"]);
			    }
				if(isset($_POST["password_force"]) && $_POST["password_force"] != ""){
		          $general->setFlag_password_force($_POST["password_force"]);
			    }
				if(isset($_POST["enable_question"]) && $_POST["enable_question"] != ""){
		          $general->setFlag_enable_question($_POST["enable_question"]);
			    }
				if(isset($_POST["app_path"]) && $_POST["app_path"] != ""){
		          $general->setApp_path(str_replace("\\","#",$_POST["app_path"]));
			    }
				
				if(isset($_POST["enable_captcha"]) && $_POST["enable_captcha"] != ""){
		          $general->setFlag_enable_captcha($_POST["enable_captcha"]);
			    }
				if(isset($_POST["captcha_type"]) && $_POST["captcha_type"] != ""){
		          $general->setFlag_captcha_type($_POST["captcha_type"]);
			    }
				
				
				$dao = new genericDao();
				$result = $dao->update($general);
				
				//$result = $dao->insert($general);
				
				
			  
			       $json = array(
					  "is_erro" => $erro,
					   "msg" => "Registro inserido com sucesso!",
		   
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