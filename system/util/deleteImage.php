 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
  
 
  $dire = getcwd();
 $include_path =str_replace(basename(__DIR__),"",$dire);
 $include_path =str_replace("system\\","",$include_path);
 $include_path =str_replace("system/","",$include_path);
 $include_path =str_replace("\\","/",$include_path);

  
 

 if(isset($_POST["action"]) && strtolower($_POST["action"]) == "delete"){
		   
		   $json_result = "";
		   $erro ="false";
		  
		   try 
		   {
          
			   $local =  "";   //2
			   $caminho = str_replace("\\",DIRECTORY_SEPARATOR, $include_path);
			   $caminho = str_replace("/",DIRECTORY_SEPARATOR, $include_path);
			  if(isset($_POST["local"])){
				  $local = $_POST["local"]."\\";
			  }
			  else{
				$local = $caminho."documents".DIRECTORY_SEPARATOR."tmp". DIRECTORY_SEPARATOR;
			  }
      		 
			  
			   if(isset($_POST["imagem"]) && $_POST["imagem"] != ""){
		           $imagem = $_POST["imagem"];
				   
				   $file = $local . $imagem;
				   
				   $file = str_replace("\\","/", $file);
				  
			       unlink($file);
			    }
			 
			  
			       $json = array(
					  "is_erro" => $erro,
					   "msg" => "Imagem Excluida com sucesso!",
		   
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
 

    if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("cancel")){
		  
		   $json_result = "";
		   $erro ="false";
		   $cliente = "";
		   $produto  ="";
		   $dir = new php_directory();
		   $imagens = array();
		  
		   
		   try 
		   {
           
		  
				if(isset($_POST["imagens"]) && $_POST["imagens"] != ""){
					$imagens= explode(",",$_POST["imagens"]); 
			    }
		  
		   
      		 
			  
				  $local =  str_replace ("/","#",$local);
				  $local =  str_replace ("\\","#",$local);
				  $local =  str_replace ("#",DIRECTORY_SEPARATOR,$local);
				  
				   
				  $diretorio =  $local;
					 foreach ($imagens as $img) {
							$file = $diretorio.DIRECTORY_SEPARATOR.$img;		
							$file = str_replace("\\","/", $file);		
							unlink($file);
					 }
			  
			
			
			  
			       $json = array(
					  "is_erro" => $erro,
					   "msg" => "Cancelamento efetuado com sucesso!",
		   
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
