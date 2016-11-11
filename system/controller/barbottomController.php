 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
 require_once('path.php');
 require_once($include_path.'/system/model/Tb_barbottom.php');
 require_once($include_path.'/system/dao/genericDao.php');
 require_once('utilController.php');

 

  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "insert"){
		   
		   $json_result = "";
		   $erro ="false";
		   try 
		   {
           
      		   $barbottom = new Tb_barbottom();
			   $back = new Tb_barbottom();
			   $dao = new genericDao();
			    
				if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $barbottom->setId_user($_POST["id_user"]);
				  $back->setId_user($_POST["id_user"]);
			    }
			    if(isset($_POST["id_barbottom"]) && $_POST["id_barbottom"] != ""){
		          $barbottom->setId_barbottom("auto");
			    }
				if(isset($_POST["class_name"]) && $_POST["class_name"] != ""){
		          $barbottom->setClass_name($_POST["class_name"]);
				  $back->setClass_name($_POST["class_name"]);
			    }
				$resultset = $dao->getAll($back);
				
				
				
		      
			  if($resultset->num_rows == 0){
		        $result = $dao->insert($barbottom);
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
   
   
   if(isset($_POST["action"]) && strtolower($_POST["action"]) == "edit"){
		   
		   $json_result = "";
		   $erro ="false";
		   
		   try 
		   {
               $barbottom = new Tb_barbottom();
			   
			    if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $barbottom->setId_user($_POST["id_user"]);
			    }
			    if(isset($_POST["id_barbottom"]) && $_POST["id_barbottom"] != ""){
		          $barbottom->setId_barbottom($_POST["id_barbottom"]);
			    }
				if(isset($_POST["class_name"]) && $_POST["class_name"] != ""){
		          $barbottom->setClass_name($_POST["class_name"]);
			    }
				
				
				
		 
		      $dao = new genericDao();
		      $result = $dao->update($barbottom);
			  
			  
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
                  
		      
			    $barbottom = new Tb_barbottom();
			   
			   if(isset($_POST["id_barbottom"]) && $_POST["id_barbottom"] != ""){
		          $barbottom->setId_barbottom($_POST["id_barbottom"]);
			    }
				if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $barbottom->setId_user($_POST["id_user"]);
			    }
				
				if(isset($_POST["page"]) && $_POST["page"] != ""){
		           $page=$_POST["page"]; 
				  
			    }
				
				
				$resultset = $dao->getAll($barbottom);
				$_REQUEST['Tb_barbottom'] = $resultset;
				
				
			   
			         
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
   
  
   
 if(isset($_POST["action"]) && strtolower($_POST["action"]) == "delete"){
		   
		   $json_result = "";
		   $erro = "false";
 	 
		  try 
		   {
                $barbottom = new Tb_barbottom();
				$back = new Tb_barbottom();
				  $dao = new genericDao();
			    
				
				if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		          $back->setId_user($_POST["id_user"]);
			    }
				if(isset($_POST["class_name"]) && $_POST["class_name"] != ""){
		          $back->setClass_name($_POST["class_name"]);
			    }
				  
				$resultset = $dao->getAll($back);
				while($row = $resultset->fetch_array()){
					  $barbottom->setId_barbottom($row["id_barbottom"]);
						  
				}
			   
				
				
			    if($resultset ->num_rows> 0)
				{
				   $result = $dao->delete($barbottom);
				}
				
		      
			
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