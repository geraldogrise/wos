 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
 require_once('path.php');
 require_once($include_path.'/system/model/Tb_program_language.php');
 require_once($include_path.'/system/dao/genericDao.php');

 
 if(isset($_POST["action"]) && strtolower($_POST["action"]) == "setlanguage"){
    $json_result = "";
    $erro ="false";
    try 
    {
 
			if(isset($_POST["id_group"]) && $_POST["id_group"] != ""){
			  $program_lang->setId_group($_POST["id_group"]);
			}
			if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
			  $program_lang->setId_user($_POST["id_user"]);
			}
			if(isset($_POST["id_program"]) && $_POST["id_program"] != ""){
			  $program_lang->setId_program($_POST["id_program"]);
			}
			$dao = new genericDao();
			$resultset = $dao->getAll($program_lang);
			$num_rows =  $resultset->num_rows;
			
			
			if(isset($_POST["language"]) && $_POST["language"] != ""){
			   $program_lang->setLanguage($_POST["language"]);
			}
			
			if($num_rows == 1){
				while($row = $resultset->fetch_array()){
					$program_lang->setId_program_language($row["id_program_language"]);
								
				 }
				 $result = $dao->update($program_lang);
			   
			}else
			{
			   $program_lang->setId_program_language("auto");
			   $result = $dao->insert($program_lang);
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
           
      		  $program_lang = new Tb_program_language();
			  $program_lang->setId_program_language("auto");
			   
				if(isset($_POST["language"]) && $_POST["language"] != ""){
		          $program_lang->setLanguage($_POST["language"]);
			    }
				if(isset($_POST["id_group"]) && $_POST["id_group"] != ""){
		          $program_lang->setId_group($_POST["id_group"]);
			    }
				if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $program_lang->setId_user($_POST["id_user"]);
			    }
				if(isset($_POST["id_program"]) && $_POST["id_program"] != ""){
		          $program_lang->setId_program($_POST["id_program"]);
			    }
		 
		      $dao = new genericDao();
		      $result = $dao->insert($program_lang);
			  
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
               $program_lang = new Tb_program_language();
					   
			   if(isset($_POST["id_program_language"]) && $_POST["id_program_language"] != ""){
		          $program_lang->setId_program_language($_POST["id_program_language"]);
			    }
				if(isset($_POST["language"]) && $_POST["language"] != ""){
		          $program_lang->setLanguage($_POST["language"]);
			    }
				if(isset($_POST["id_group"]) && $_POST["id_group"] != ""){
		          $program_lang->setId_group($_POST["id_group"]);
			    }
				if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $program_lang->setId_user($_POST["id_user"]);
			    }
				if(isset($_POST["id_program"]) && $_POST["id_program"] != ""){
		          $program_lang->setId_program($_POST["id_program"]);
			    }
				
				
		 
		      $dao = new genericDao();
		      $result = $dao->update($program_lang);
			  
			  
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
               
			     $program_lang = new Tb_program_language();
					   
			   if(isset($_POST["id_program_language"]) && $_POST["id_program_language"] != ""){
		          $program_lang->setId_program_language($_POST["id_program_language"]);
			    }
			   
		 
		       $dao = new genericDao();
		       $result = $dao->delete($program_lang);
			 
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