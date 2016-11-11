 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php

require_once('../model/Tb_gallery.php');
require_once('../model/Tb_gallery_item.php');
require_once('../dao/genericDao.php');

 
 
 
 

	if(isset($_POST["action"]) && $_POST["action"] == "insert"){	   
			   
			   $json_result = "";
			   $erro = false;
			   try 
			   {
					
					   $gallery = new Tb_gallery();
					
					   $gallery->setId_user($_SESSION['user_system']);
					   $gallery->setId_gallery("auto");
					   if(isset($_POST["name"]) && $_POST["name"] != ""){
						  $gallery->setName($_POST["name"]);
					   }
					   if(isset($_POST["image"]) && $_POST["image"] != ""){
						  $gallery->setImage($_POST["image"]);
					   }
					   
				       
						$dao = new genericDao();
						$resultset = $dao->insert($gallery);
						
						$json = array(
						  "is_erro" => $erro,
						   "msg" => "Usuário Correto" + $_SESSION['user_system'],
			   
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
              $gallery = new Tb_gallery();
		        $gallery->setId_user($_SESSION['user_system']);
			    if(isset($_POST["codigo"]) && $_POST["codigo"] != ""){
		             $banc->setId_gallery($_POST["codigo"]);
			    }
				if(isset($_POST["name"]) && $_POST["name"] != ""){
					  $gallery->setName($_POST["name"]);
				}
				if(isset($_POST["image"]) && $_POST["image"] != ""){
					  $gallery->setImage($_POST["image"]);
				}
				
		      $dao = new genericDao();
		      $result = $dao->update($gallery);
			  
			  
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
   
   
   if(isset($_POST["action"]) && strtolower($_POST["action"]) == "search"){
		   
		  
		   try 
		   {
		       
                 $gallery = new Tb_gallery();
		        $gallery->setId_user($_SESSION['user_system']);
			    if(isset($_POST["codigo"]) && $_POST["codigo"] != ""){
		             $gallery->setId_gallery("codigo");
			    }
				$html="";
		        $dao = new genericDao();
		        $resultset = $dao->getAll($gallery);
				 while($row = $resultset->fetch_array()){
				    $img =$row["image"];
					$nam =$row["name"];
					$id_gallery =$row["id_gallery"];
				  
				   $html .= "\n<div onclick='alert({$id_gallery})' class='image-box'>";
 				   $html .= "\n\t<span class='drag-pointer'>&nbsp;</span>";
				   $html .= "\n\t<div class='photo-cover'>";
				   $html .= "\n\t\t<a href='#' class='big-image'>";
				   $html .= "\n\t\t\t<img src='{$img}' alt='' />";
				   $html .= "\n\t\t</a>";
				   $html .= "\n\t</div>";
				   $html .= "\n\t<p class='photo-name'>{$nam}</p>";
				   $html .= "\n</div>";
				   
				 
				 }
				
				 
				
			  
			    $_REQUEST['gallery'] = $resultset;
			 
			   echo $html;
			         
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
  
   
   
 if(isset($_POST["action"]) && strtolower($_POST["action"]) == "delete"){
		   
		   $json_result = "";
		   $erro = "false";
 	  
		  try 
		   {
              $gallery = new Tb_gallery();
			  $gallery->setId_user($_SESSION['user_system']);
		      if(isset($_POST["codigo"]) && $_POST["codigo"] != ""){
		             $gallery->setId_gallery( $_POST["codigo"]);
			  }
		      
			   
		 
		       $dao = new genericDao();
		      $result = $dao->delete($gallery);
			 
			       $json = array(
					  "is_erro" => $erro,
					   "msg" => "Registro excluido com sucesso!",
		   
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