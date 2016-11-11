 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
   require_once("path.php");
   include_once($include_path.'/system/directory/directory.php');
   include_once($include_path.'/system/directory/file.php');

 if(isset($_POST["action"]) && $_POST["action"] == "readFile"){
 
   
    if(isset($_POST["path"])){
			 $json="";
			 $erro ="false";
			try{	   
				   $path =   $_POST['path'];
				   $path = str_replace("\\",DIRECTORY_SEPARATOR,$path);
				   $file_manager = new php_file();
				   $file= $file_manager->openFile($path,"r");
				  
                  
				   $size = $file_manager->getTamanho($path);
				   
				   $content= $file_manager->readFile($file, $size==0?10:$size);
				   $file_manager->closeFile($file);
				 
				  
				
		           $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					   "content"=> $content."",
		   
					);
					
					
					
					$json_result = json_encode($json);
                 
					  
		    } catch (Exception $e) {
		     
			   $json = array(
					  "is_erro" => "true",
					   "msg" => $e->getMessage(),
					    "content"=>"dummy",
		   
			    );
				$json_result = json_encode($json);
			
		   
		   }
		    echo $json_result;
			
			
		  
		
		
		
	}
 
 }
 if(isset($_POST["action"]) && $_POST["action"] == "readJava"){
  $content = "";
   
    if(isset($_POST["path"])){
			 $json="";
			 $erro ="false";
			
			try{	   
				   $path =   $_POST['path'];
				   $path = str_replace("\\",DIRECTORY_SEPARATOR,$path);
				   $file_manager = new php_file();
				   $file= $file_manager->openFile($path,"r");
                  
				   $size = $file_manager->getTamanho($path);
				   
				   $content= $file_manager->readFile($file, $size==0?10:$size);
				   $file_manager->closeFile($file);
				 
				
		           $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					   "content"=> $content."",
		   
					);
					
					
					
				   
                 
					  
		    } catch (Exception $e) {
		     
			   
					   $content =  $e->getMessage();
				
			
		   
		   }
		    echo $content;
			
			
		  
		
		
		
	}
 
 }

  else if(isset($_POST["action"]) && $_POST["action"] == "writeFile"){
           if(isset($_POST["path"])){
			 $json="";
			 $erro ="false";
			try{	   
				   $path =   $_POST['path'];
				   $conteudo = $_POST['content'];
				   $file_manager = new php_file();
				  
				   $path = str_replace('/','\\',$path);
				   $path = str_replace("\\",DIRECTORY_SEPARATOR,$path);
				   
				   $file= $file_manager->openFile($path,"w");
				   $size = $file_manager->getTamanho($path);
				   $file_manager->writeFile($file,$conteudo);
				   $file_manager->closeFile($file);
				   //echo $_POST['name_file'] ."==". $path;
				   
				   $conteudo =str_replace("<br>","\n",$conteudo);
				  
				   
		           $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					   
		   
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
   
  }
  
  else if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("createFile")){
           if(isset($_POST["file"])){
			 $json="";
			 $erro ="false";
			try{	   
				   $path =   $_POST['file'];
				   $tipoFile = $_POST['tipoFile'];
				   $file = $tipoFile;
				   $conteudo = "";
				   
				  
				   $cont = 0;
				   $file_manager = new php_file(); 
				   $file_manager->checkExistFile($path,$file,$tipoFile,$cont);
				   
				 
				  
				   
		           $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					   
		   
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
   
  }
   else if(isset($_POST["action"]) && $_POST["action"] == "createFolder"){
           if(isset($_POST["file"])){
			 $json="";
			 $erro ="false";
			try{	   
				   $path =   $_POST['file'];
				   $conteudo = "";
				   $file = "newfolder";
				   
				   $cont = 0;
				   $file_manager = new php_file(); 
				   $file_manager->checkExistFolder($path,$file,$cont);
				   
				 
				  
				   
		           $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					   
		   
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
   
  }
  
    else if(isset($_POST["action"]) && $_POST["action"] == "copyFiles"){
          
			 $json="";
			 $erro ="false";
			try{	   
				  
			       $origem = $_POST["origem"];
				   $destino = $_POST["destino"];
				   $dir = new php_directory();
				   $fil = new php_file();
				   $origem = str_replace("#",DIRECTORY_SEPARATOR,$origem);
				   $ori = explode(",",$origem);
				   $destino = str_replace("#",DIRECTORY_SEPARATOR,$destino);
					 
					 

					 foreach ($ori as $key => $value){
						   $value = str_replace(DIRECTORY_SEPARATOR,"#",$value);
						   $value = str_replace("#",DIRECTORY_SEPARATOR,$value);
						   if($fil->is_directory($value)){
							  
							   $dir->copyDirectory($value,$destino,"yes");
						   }
						   else{
							
							  $fil->copyFile($value,$destino);
						   }
					   }
		          


				  $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					   
		   
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
   else if(isset($_POST["action"]) && $_POST["action"] == "moveFiles"){
          
			 $json="";
			 $erro ="false";
			try{	   
				  
			       $origem = $_POST["origem"];
				   $destino = $_POST["destino"];
				   $dir = new php_directory();
				   $fil = new php_file();
				   $origem = str_replace("#",DIRECTORY_SEPARATOR,$origem);
				   $ori = explode(",",$origem);
				   $destino = str_replace("#",DIRECTORY_SEPARATOR,$destino);
				   
				   
					   foreach ($ori as $key => $value){
							   $value = str_replace(DIRECTORY_SEPARATOR,"#",$value);
						       $value = str_replace("#",DIRECTORY_SEPARATOR,$value);
							   if($fil->is_directory($value)){
								    $dir->moveDirectory($value,$destino,"yes");
							   }
							   else{
								  $fil->moveFile($value,$destino);
							   }
					   }
					  
		          


				  $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					   
		   
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
  else if(isset($_POST["action"]) && $_POST["action"] == "deleteFiles"){
          
			 $json="";
			 $erro ="false";
			try{	   
				  
			       $arquivo = $_POST["arquivo"];
				  
				   $dir = new php_directory();
				   $arquivo = str_replace("#","/",$arquivo);
				  
				    $fil = new php_file();
				   $ori = explode(",",$arquivo);
				   foreach ($ori as $key => $value){
				   	   if($fil->is_directory($value)){
						  $dir->deleteDirectory($value);
					   }
					   else{
						 $fil->deleteFile($value);
					   }
				   }
		          
		          


				  $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					   
		   
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
  
  else if(isset($_POST["action"]) && $_POST["action"] == "renameFile"){
         
			 $json="";
			 $erro ="false";
			try{	   
				   $oldname =   $_POST['oldname'];
				   $newname = $_POST['newname'];
				   
				   
				    $filemanager = new php_file();
					if($filemanager->is_directory($oldname)){
					   $oldname = str_replace("#","/",$oldname)."/";
					   $newname = str_replace("#","/",$newname)."/";
					}
					$oldname =  str_replace("#","/",$oldname);
					$newname =  str_replace("#","/",$newname);
				
				    $filemanager->renameFileOrFolder($oldname,$newname);
				  
				   
		           $json = array(
					  "is_erro" => $erro,
					   "msg" => "OK",
					   
		   
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
