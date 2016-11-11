 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php

require_once("path.php");
include_once($include_path.'system/util/Uri.php');

   class Zipper{
   
       public function openZip($name){
	        $files=[];
			$format = new Uri();
			$name = $format->pathFormat_jv($name);
	        $zip = new ZipArchive;
			if ($zip->open($name) == TRUE) {
				
				 for ($i = 0; $i < $zip->numFiles; $i++) {
					 $filename = $zip->getNameIndex($i);
					 $comment = $zip->getCommentIndex($i);
					 $commentFull = $zip->getCommentIndex($i);
					 
					 if($filename !=$comment ){
					   $comment = $filename;
					 }
					 if($comment == ""){
					   $comment = $filename; 
					 
					 }
					 if($commentFull == ""){
					   $commentFull = str_replace("\\",DIRECTORY_SEPARATOR,$comment) ;
					   $commentFull = str_replace("/",DIRECTORY_SEPARATOR,$comment) ;
					 }
					
					 array_push($files,array("comment"=>$comment,"filename"=>$commentFull));
				 }
             }
	       return $files;
	   }
       public function addFiles($name,$files){
	   
			 $zip = new ZipArchive;
			 $format = new Uri();
			
			
			$name = str_replace("#",DIRECTORY_SEPARATOR,$name);
			   
			 $name = $format->pathFormat_jv($name);
			 $res = $zip->open($name, ZipArchive::CREATE);
			 
		
		       if ($res === TRUE) {
				   foreach ($files as $value) {
				    $file="";
				    
					
			       $file = str_replace("#",DIRECTORY_SEPARATOR,$file);
				    if(strrpos($value,'\\') > 0){
					   $file = substr($value,strripos($value,"\\")+1);
					 }
					 else if(strrpos($value,'/') > 0){
					   $file = substr($value,strripos($value,"/")+1);
					 }
					
					 
					 $new_filename = $value;//substr($value,strrpos($value,'/') + 1);
					 if(is_dir($value)){
					     $ds = DIRECTORY_SEPARATOR;
						 $dir = str_replace("\\","/",$value);
					     $rootPath = realpath($dir);
					   
						 $zip->addEmptyDir($dir);
						 
						 
						 $files_in = new RecursiveIteratorIterator(
							new RecursiveDirectoryIterator($rootPath),
							RecursiveIteratorIterator::LEAVES_ONLY
						 );
						    foreach ($files_in as $name => $file_)
							{
							
								// Skip directories (they would be added automatically)
								if (!$file_->isDir())
								{
									// Get real and relative path for current file
									$filePath = $file_->getRealPath();
									
									
									
									$relativePath = substr($filePath, strlen($rootPath) + 1);
									$filePath = str_replace(array("\\","/"),$ds,$filePath);
									
									
									// Add current file to archive
									
									
									$zip->addFile($filePath, $relativePath);
									$zip->setCommentName($relativePath,$filePath);
								}
							}
					  
					    
					 }
					 else{
					   if($file != ""){
						   
						   $zip->addFile($value, $file);
						   $zip->setCommentName($file,$new_filename);
					   }
					 }
					 
				   }
		  		  
				  $zip->close();
		
				}
   
         }
		 public function  addDirectory($name,$dir) { // adds directory
				 $zip = new ZipArchive;
				 $dir = str_replace("\\","/",$dir);
				 $name = str_replace("\\","/",$name);
				 $ds = DIRECTORY_SEPARATOR;
				//problema ao criar zip
				$res=  $zip->open($name, ZipArchive::CREATE | ZipArchive::OVERWRITE);
				
				
				 $zip->addEmptyDir($dir);
				 
				 $rootPath = realpath($dir);
				 $files = new RecursiveIteratorIterator(
					new RecursiveDirectoryIterator($rootPath),
					RecursiveIteratorIterator::LEAVES_ONLY
				 );
				
				
			    foreach ($files as $name => $file)
                {
				
					// Skip directories (they would be added automatically)
					if (!$file->isDir())
					{
						// Get real and relative path for current file
						$filePath = $file->getRealPath();
						$relativePath = substr($filePath, strlen($rootPath) + 1);
                        $filePath = str_replace(array("\\","/"),$ds,$filePath);
						
						
						// Add current file to archive
						$zip->addFile($filePath, $relativePath);
					    $zip->setCommentName($relativePath,$filePath);
					}
				}

				// Zip archive will be created only after closing object
				$zip->close();
			
		}
		 
		 public function deleteFiles($name,$files){
			$zip = new ZipArchive;
			
			$format = new Uri();
			$name = $format->pathFormat_jv($name);
			if ($zip->open($name) === TRUE) {
				foreach ($files as $value) {
					if(strrpos($value,':') >0){
					  $value = substr($value,strrpos($value,'#') + 1);
					}else{
					   $value = str_replace("#","/",$value);
					   $value = str_replace("#","\\",$value);
					}
					
					$zip->deleteName($value);
					
				}
				$zip->close();
			 
			} 
		 }

		 public function extract($zip_file,$dir,$files_ext){
	   
			  
			
			$zip = new ZipArchive;
			$files = [];
			$files_extract=[];
			$format = new Uri();
			$zip_file = $format->pathFormat_jv($zip_file);
			foreach($files_ext as $item){
			    
				    if(strrpos($item,':') >0){
					  $item = substr($item,strrpos($item,'#') + 1);
					}else{
					   $item = str_replace("#","/",$item);
					   $item = str_replace("#","\\",$item);
					}
				
				array_push($files_extract,$item);
			}
			
			
			if ($zip->open($zip_file) === true) {
							
				for($i = 0; $i < $zip->numFiles; $i++) {
				  $filename = $zip->getNameIndex($i);
				
				
				   if(in_array($filename,$files_extract)){
				       array_push($files,$filename);
				   }
				 
				
				 
				}
				$dir = str_replace("#",DIRECTORY_SEPARATOR,$dir);
				
			    $zip->extractTo($dir, $files);			
				$zip->close();
								
			}
				
   
         }
		
        public function extractAll($zip_file,$dir){
           
           $format = new Uri();
			$zip_file = $format->pathFormat_jv($zip_file);
			$zip = new ZipArchive;
			$files = [];
			if ($zip->open($zip_file) === true) {
								
				for($i = 0; $i < $zip->numFiles; $i++) {
				  $filename = $zip->getNameIndex($i);
				   	  
				  array_push($files,$filename);
				 
				}
			    $zip->extractTo($dir, $files);			
				$zip->close();
								
			}
	    }


 }

 
 


?>