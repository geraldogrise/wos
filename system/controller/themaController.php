 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php


 require_once("path.php");
 require_once($include_path.'/system/model/Tb_thema.php');
 require_once($include_path.'/system/directory/directory.php');
 require_once($include_path.'/system/directory/file.php');
 require_once($include_path.'/system/dao/genericDao.php');



if(isset($_POST["action"]) && strtolower($_POST["action"]) == "insert"){
		   
		   $json_result = "";
		   $erro ="false";
		   try 
		   {
              $dir = new php_directory();
      		  $thema = new Tb_thema();
			 
			   
				if(isset($_POST["name"]) && $_POST["name"] != ""){
		          $thema->setName($_POST["name"]);
			    }
				
				$app_directory =  $_POST["app_directory"];
				$app_directory =   str_replace("#",DIRECTORY_SEPARATOR,$app_directory); 
			    $app_directory =  $app_directory.DIRECTORY_SEPARATOR."images".DIRECTORY_SEPARATOR."themes".DIRECTORY_SEPARATOR."{$thema->getName()}";
				
				if (!is_dir($app_directory)) {
				   $dir->createDir($app_directory);
				   $dao = new genericDao();
				   $thema->setId_thema("auto");
		           $result = $dao->insert($thema); 
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
               $thema = new Tb_thema();
			  
			   if(isset($_POST["id_thema"]) && $_POST["id_thema"] != ""){
		          $thema->setId_thema($_POST["id_thema"]);
			    }
				if(isset($_POST["name"]) && $_POST["name"] != ""){
		          $thema->setName($_POST["name"]);
			    }
				
				
		 
		      $dao = new genericDao();
		      $result = $dao->update($thema);
			  
			  
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
                $thema = new Tb_thema();
			  
			   if(isset($_POST["id_thema"]) && $_POST["id_thema"] != ""){
		          $thema->setId_thema($_POST["id_thema"]);
			    }
			   
		 
		       $dao = new genericDao();
		       $result = $dao->delete($thema);
			 
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
  
  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getfolder"){
		    
		     $html="";
		     try{
			 $dir = new php_directory();
			 $diretorio =  $_POST["diretorio"];
			 $background =  $_POST["background"];
			
			   $diretorio =  $diretorio.DIRECTORY_SEPARATOR."images".DIRECTORY_SEPARATOR."themes".DIRECTORY_SEPARATOR;
			   $diretorio =   str_replace("#",DIRECTORY_SEPARATOR,$diretorio); 
			   $arrayFolders = $dir->returnDirectories($diretorio);
			   	
			
             
			 foreach($arrayFolders as $folder){
			   
				 $themas = $dir->returnDirectory($diretorio.$folder.DIRECTORY_SEPARATOR,$filtro="jpg,jpeg,gif,png");
				 $html .="<div class='wrapper-item' rel='{$folder}' ondblclick='setFolderView(this)' onclick='selectTheme(this)'>"; 
				 $html .="<div class='left'>";
				  $cont_item = 0;
				  foreach($themas as $thema){
				       $html.="<img height='45px' alt='' src='images/themes/{$folder}/{$thema}'>";
					   if($cont_item == 1){
					      break;
					   }
				      $cont_item++;
				  }
				 
				$html .="</div>";
				$html.="<span class='theme_header'>{$folder}</span>";
				$html .="</div>";			    
			 
 			 }
              echo $html;
			 
			  
				
				 
				
				 //require_once $include_path.'//system/programs/appearance/screen.php';
			 
			 
			         
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
  
   
 if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getthemas"){
		   
		     $html="";
		     try{
			    
				$diretorio =  $_POST["diretorio"];
			    $background =  $_POST["background"];
				$diretorio =   str_replace("#",DIRECTORY_SEPARATOR,$diretorio); 
			
				$background = substr($background,0,strrpos($background,"/"));
				$background = str_replace("/",DIRECTORY_SEPARATOR,$background);
				
				$folder_thema= $diretorio.DIRECTORY_SEPARATOR.$background.DIRECTORY_SEPARATOR;
				$folder = str_replace("images".DIRECTORY_SEPARATOR."themes".DIRECTORY_SEPARATOR,"",$background);
				
				$dir = new php_directory();
			    $themas = $dir->returnDirectory($folder_thema,$filtro="jpg,jpeg,gif,png");
			
				  $cont_img=0;
				  foreach($themas as $thema){
				       $cont_img++;
					  
					   $html.="<a href='#'><img src='images/themes/{$folder}/{$thema}' style='height:150px;' id='item-{$cont_img}' /></a>";
						
				    
				  }
					    
			 
 			 
              echo $html;
			 
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
      if(isset($_POST["action"]) && strtolower($_POST["action"]) == "insertimage"){
   
   
            $html="";
		    try{
                   
                    $file = new php_file();
				    $origem = "";
					$destino="";
					
					 if(isset($_POST["file"]) && $_POST["file"] != ""){
		                 $origem= $_POST["file"];
			         }
					  if(isset($_POST["directory"]) && $_POST["directory"] != ""){
		                 $destino= $_POST["directory"];
						
			         }
					 
					 if($destino !="" && $origem!=""){
					     $origem= str_replace("#","/",$origem);
						 $destino= str_replace("#","/",$destino);
					    echo  $file->copyFile($origem,$destino);
					 }
					
					  
           } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
   
   }
   
   
   if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getaccount_images"){
		   
		     $html="";
		     try{
			    
				
				$diretorio =  $_POST["diretorio"];
			  	$diretorio =   str_replace("#",DIRECTORY_SEPARATOR,$diretorio); 
				$folder_image = $diretorio.DIRECTORY_SEPARATOR."images".DIRECTORY_SEPARATOR."account_image";
								
				$dir = new php_directory();
			    $account_images = $dir->returnDirectory($folder_image,$filtro="jpg,jpeg,gif,png");
				$cont_img = 0; 
				  foreach($account_images as $account_i){
				      $cont_img++;
					   $html.="<li><a href='#' onclick='selectImageC(this)'><img src='images/account_image/{$account_i}'  style='height:50px;width:50px;' id='item-{$cont_img}'/></a></li>";
						
				    
				  }
					    
			 
 			 
              echo $html;
			 
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
   if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getmouse_icons"){
		   
		     $html="";
		     try{
			    
				
				$diretorio =  $_POST["diretorio"];
			  	$diretorio =   str_replace("#",DIRECTORY_SEPARATOR,$diretorio); 
				$folder_image = $diretorio.DIRECTORY_SEPARATOR."images".DIRECTORY_SEPARATOR."mouse_icon";
								
				$dir = new php_directory();
			    $account_images = $dir->returnDirectory($folder_image,$filtro="jpg,jpeg,gif,png");
				$cont_img = 0; 
				  foreach($account_images as $account_i){
				      $cont_img++;
					   $html.="<li><a href='#'  onclick='selectImageC(this)'><img src='images/mouse_icon/{$account_i}' style='height:50px;width:50px;' id='item-{$cont_img}'/></a></li>";
						
				    
				  }
					    
			 
 			 
              echo $html;
			 
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
   
   
   
  
		  
   
  
 


?>