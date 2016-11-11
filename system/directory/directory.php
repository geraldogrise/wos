 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
  include_once("file.php");
?>
<?php

   class php_directory{

		private $filesArray= array();
		
		public function getFilesArray(){
		
		   return $this->filesArray;
		}
		public function setFilesArray($filesArray){
		
		    $this->filesArray = $filesArray;
		}
		
		public function openDirectory($diretorio){

             return readdir($diretorio);
        }
		
		public function getDirectory($diretorio){

              return opendir($diretorio);

        }
        
		public function closeDirectory($diretorio){

                 closedir($diretorio);
        }
		public function is_directory($diretorio){

                return is_dir($diretorio);
        }
		
		
		
		public function changeDirectory($diretorio){

             chdir($diretorio);

        }
		
        public function CurrentDirectory(){

            return getcwd();

        }
		
		public function listDir($diretorio){


            $files = scandir($diretorio);
            return $files;
        }
		public function orderDir($diretorio){
             $files = scandir($diretorio, 1);
             return $files;

        }
		
		function listDirectory($dir,$filtro="")
		{

		   $diraberto = opendir($dir);
		   chdir($dir);
		   echo '<ul>';
		   while($arq = readdir($diraberto)) {
			   if($arq == ".." || $arq == ".")continue;
			   $arr_ext = explode(";",$filtro);

				echo "<li>".$arq."</li><br>";
			  
			   if (is_dir($arq)) {
				   echo  "<B><li>" .$arq."</li></B><br>";
				    $this->listDirectory($arq,$filtro);
			   }

		   }
		   chdir("..");
		   echo '</ul>';
		   closedir($diraberto);
		}
		function returnDirectory($dir,$filtro="")
		{
           $list_file= array();
		   $diraberto = opendir($dir);
		   chdir($dir);
		   $file_manager =new php_file();
		  
		   while($arq = readdir($diraberto)) {
			  
			   if($arq == ".." || $arq == ".")continue;
			   $arr_ext = explode(",",$filtro);
			   
			   if(is_file($arq) && in_array($file_manager->get_ext_file($arq),$arr_ext)){
			       array_push($list_file,$arq);
				   
			   }
			 }
		  
		 
		   closedir($diraberto);
		   return $list_file;
		}
		function returnDirectories($dir)
		{
           $list_file= array();
		   $diraberto = opendir($dir);
		   chdir($dir);
		   $file_manager =new php_file();
		  
		   while($arq = readdir($diraberto)) {
			  
			   if($arq == ".." || $arq == ".")continue;
			  
			   
			   if(is_dir($arq)){
			       array_push($list_file,$arq);
				   
			   }
			 }
		  
		 
		   closedir($diraberto);
		   return $list_file;
		}
		
		
		public function listCurrentDir ($dir){
                  if ($handle = opendir($dir)) {
                      echo '<ul>';
                      while (false !== ($file = readdir($handle))) {
                             if ($file != "." && $file != "..") {
                                   echo "<li>".$file."</li><br>";
                             }
                       }
                       echo '</ul>';
                       closedir($handle);
                  }
           }
		   	public function get_ext_file($nome){
				  $verifica = explode('.', $nome);
				  return $verifica[count($verifica) - 1];
			}
		
		
		public function createDir($caminho){

               return mkdir($caminho);
        }
		
        public function removeDir($caminho){

               return rmdir($caminho);
        }
		
		public function copyDirectory($DirFont, $DirDest,$include_dir=""){
              
			  if($include_dir !=""){
			      
				 $fonte= substr($DirFont, strrpos($DirFont,DIRECTORY_SEPARATOR)+1);
				 $this->createDir($DirDest.DIRECTORY_SEPARATOR.$fonte);
				 $DirDest = $DirDest.DIRECTORY_SEPARATOR.$fonte;
			  }
			  
			  if(!file_exists($DirDest)){
                 mkdir($DirDest);
			  }
               if ($dd = opendir($DirFont)) {
                       while (false !== ($Arq = readdir($dd))) {
                          if($Arq != "." && $Arq != ".."){
                               $PathIn = "$DirFont".DIRECTORY_SEPARATOR."$Arq";
                               $PathOut = "$DirDest".DIRECTORY_SEPARATOR."$Arq";
                               if(is_dir($PathIn)){
                                   $this->copyDirectory($PathIn, $PathOut);
                               }
                               elseif(is_file($PathIn)){
                                   copy($PathIn, $PathOut);
                               }
                          }
                       }
                       closedir($dd);
                }
        }
		
		public function deleteDirectory($Dir){

                        
			   if ($dd = opendir($Dir)) {
                    while (false !== ($Arq = readdir($dd))) {
                        if($Arq != "." && $Arq != ".."){
                           $Path = "$Dir".DIRECTORY_SEPARATOR."$Arq";
                           if(is_dir($Path)){
                              $this->deleteDirectory($Path);
                           }
                           elseif(is_file($Path)){
                              unlink($Path);
                           }
                        }
                    }
                    closedir($dd);
                 }
            rmdir($Dir);
         }
		 
		 
		 public function moveDirectory($DirFont, $DirDest,$include_dir=""){

              
			
			  if($include_dir !=""){
			     $fonte= substr($DirFont, strrpos($DirFont,DIRECTORY_SEPARATOR)+1);
			     $this->createDir($DirDest.DIRECTORY_SEPARATOR.$fonte);
				 $DirDest = $DirDest.DIRECTORY_SEPARATOR.$fonte;
			  }
			  $this->CopyDirectory($DirFont, $DirDest);
              $this->DeleteDirectory($DirFont);

         }
		  function getListExtension($file,$directory,$type){
		   
		             
					 $icon = is_dir($directory.DIRECTORY_SEPARATOR.$file);
					 $icone = "";
					
					 if($icon == 1){
					    $directory = str_replace( "/","#",$directory);
						$directory = str_replace( "\\","#",$directory);
					     if($type ==1){
						    $icone = "<img width='14px;' src='images/arrow_list_right.png' onclick='showDirectory(this,\"".$directory."#".$file."\")'>";
						 }
						 else{
						     $icone = "<img width='14px;' src='images/folder2.png''>";
						 }
					 }
					 else{
					   
					   $extensao = $this->get_ext_file($file);
					   $icone = "<img width='14px;' src='images/".$extensao.".png'>";
					    
					 
					 }
		              return $icone;
		   
		   }
		   
		   
		 
		  public function showSideTreeView ($directory,$type_explore){
                
				 $file_manager =new php_file();
							
		          $directory = str_replace("\\","#",$directory);
				  $directory = str_replace("#",DIRECTORY_SEPARATOR,$directory);
				 
				  if ($handle = opendir($directory)) {
                      echo "<ul class='arvore list'>";
					
                     
						 while (false !== ($file = readdir($handle))) {
								 if ($file != "." && $file != "..") {
									   
									$icone = $this->getListExtension($file,$directory,1);
									
									$check_file = str_replace("/",DIRECTORY_SEPARATOR,$directory.DIRECTORY_SEPARATOR.$file);
									$check_file = str_replace("\\",DIRECTORY_SEPARATOR,$directory.DIRECTORY_SEPARATOR.$file);
									
									$extensao = $this->get_ext_file($file);
									$type="";
									$ondblclick ="";
									$onclick = "";
									if($type_explore !="normal"){
									   $onclick ="onclick='setPath(this)'";
									}
																 
									  if((!is_file( $check_file ) == 1)){
										 $dire = str_replace( DIRECTORY_SEPARATOR,"#",$directory);
										 $ondblclick="ondblclick='showDirectoryContent(this,\"".$dire."#".$file."\",1,\"\",\"\")'";
										 $type="side_menu";
										 $path ="path='". $directory."\\".$file."'";
										  if(!in_array($dire."#".$file, $this->getFilesArray())){
											  echo "<li class='".$type."'>";
												  echo " <span class='iconLiArvore'>".$icone."</span><a ".$ondblclick." ".$path." " . $onclick ."   href='#'>".$file."</a>";
											  echo "</li>";
										 }
									 }
														
																	 
																	 
								}
							}
	
                        }
                       
                       echo '</ul>';
                       closedir($handle);
                  
           }
		   public function showTreeViewContent($directory,$button_arrow,$screen_filter="",$type_explore="",$setupView="",$type_filter){

				   $file_manager =new php_file();
				   $filePath="";
				   $directory = str_replace("\\","#",$directory);
				   $directory = str_replace("#",DIRECTORY_SEPARATOR,$directory);
					if ($handle = opendir($directory)) {
										
						while (false !== ($file = readdir($handle))) {
										 
								if ($file != "." && $file != "..") {
								
								  
									$type="";
									$ondblclick ="";
									$onclick = "";
									
									$icone = $this->getListExtension($file,$directory,2);
									$extensao = $this->get_ext_file($file);
									$check_file = str_replace("/",DIRECTORY_SEPARATOR,$directory.DIRECTORY_SEPARATOR.$file);
									$check_file = str_replace("\\",DIRECTORY_SEPARATOR,$directory.DIRECTORY_SEPARATOR.$file);
									$is_filter=false;
									 $arr_ext  = [];
									
									 $path = "";
									 $path_drag = "";
									
									  if(is_file( $check_file ) == 1){
									       
										   $type="draggable";
										   $path ="path='". $check_file."'";
										   $path_drag = $path;
										   $path_drag = str_replace(DIRECTORY_SEPARATOR,"#", $path_drag);
										 
										 if($type_explore=="normal"){
												    $file_check = str_replace(DIRECTORY_SEPARATOR,"#", $check_file );
													$filePath=$file_check;
													$ondblclick = "ondblclick='open".ucfirst($extensao)."(\"".$file_check."\")' class='file'";
													$onclick="onclick='selectItem(this)'";
												   /* if($screen_filter != ""){
													  
													    if (strpos($file,$screen_filter) !== false) {
														   $ondblclick = "ondblclick='open".ucfirst($extensao)."(\"".$file_check."\")' class='file'";
													    }
													 
												     }*/
										   }
										   else{
											 
												 $onclick = "onclick='setPath(this)'";
											  
										   }
										
									  }
									  else{
									  
																						
											$directory_format = str_replace( DIRECTORY_SEPARATOR,"#",$directory);
											$path_drag ="path='". $directory.DIRECTORY_SEPARATOR.$file."'";
											$path_drag = str_replace(DIRECTORY_SEPARATOR,"#",$path_drag);
											$filePath = $directory_format."#".$file;
											
											$type="draggable droppable";
											$ondblclick="ondblclick='showDirectoryContent(this,\"".$directory_format."#".$file."\",1,\"\",\"".$screen_filter."\")'";
											    if($type_explore=="normal"){
												 
													 
													     $onclick="onclick=\"selectItem(this)\"";
														/*if($screen_filter != ""){
															
															  if (strpos($file,$screen_filter) !== false) {
															     $ondblclick="ondblclick='showDirectoryContent(this,\"".$directory_format."#".$file."\",1,\"\",'".$screen_filter."')'";
															  }
														}*/
												}
												else{
												    $onclick = "onclick='setPath(this);selectItem(this);'";
												}
									  
									  }
									  
									  if($type_filter !=""){
									      $arr_ext = explode(",",$type_filter);
									  }
									if($screen_filter!=""){
									   
										if((strpos($file."",$screen_filter."") !== false)){
										  $is_filter = true;
										}
										
									}else{
									       $is_filter = true;
									}
									
									
									if(is_file( $check_file ) == 1){
										 
										 if(in_array($file_manager->get_ext_file($check_file),$arr_ext)|| $type_filter ==""  ){
												if($is_filter){
												   if(!in_array($filePath, $this->getFilesArray())){
												   		 echo "<div class='list  {$type}' {$path_drag} {$onclick} {$ondblclick}>";
															echo  "<img  src='images/{$extensao}.png' class='list-icon'>";
															echo  "<span class='list-title'>{$file}</span>";
														 echo  "</div>";
													}
												}
										}
										
									 
									 }else{
									    
										if(in_array($file_manager->get_ext_file($check_file),$arr_ext) || $type_filter =="" ){
											
											if($is_filter || $type_explore != "normal"){
												if(!in_array($filePath, $this->getFilesArray())){
														echo "<div class='list {$type}' {$path_drag} {$onclick} {$ondblclick}>";
															echo  "<img src='images/folder2.png' class='list-icon'>";
															echo  "<span class='list-title'>{$file}</span>";
														echo  "</div>";
												}
											}
										}else{
										    
											if($type_explore != "normal" ){
												 if(!in_array($filePath, $this->getFilesArray())){
													echo "<div class='list {$type}' {$path_drag} {$onclick} {$ondblclick}>";
														echo  "<img src='images/folder2.png' class='list-icon'>";
														echo  "<span class='list-title'>{$file}</span>";
													echo  "</div>";
												}
											}
										
										}
									 
									 }
								
								
								}				 
							 
						}
						
										
										
								
								  
			}
		}
		
		public function showTreeViewDesktop($directory,$button_arrow,$screen_filter="",$type_explore="",$setupView="",$type_filter){

				   $file_manager =new php_file();
				   $cont =0;
				   $filePath="";
					$directory = str_replace("\\","#",$directory);
					$directory = str_replace("#",DIRECTORY_SEPARATOR,$directory);
					if ($handle = opendir($directory)) {
										
						while (false !== ($file = readdir($handle))) {
										 
								if ($file != "." && $file != "..") {
								
								  
									$type="";
									$ondblclick ="";
									$onclick = "";
									
									$icone = $this->getListExtension($file,$directory,2);
									$extensao = $this->get_ext_file($file);
									//$check_file = str_replace("/","\\",$directory."\\".$file);
									$check_file = str_replace("/",DIRECTORY_SEPARATOR,$directory.DIRECTORY_SEPARATOR.$file);
									$check_file = str_replace("\\",DIRECTORY_SEPARATOR,$directory.DIRECTORY_SEPARATOR.$file);
									
									
									$is_filter=false;
									 $arr_ext  = [];
									
									 $path = "";
									 $path_drag = "";
									
									  if(is_file( $check_file ) == 1){
									       
										   $type="draggable";
										   $path ="path='". $check_file."'";
										   $path_drag = $path;
										   $path_drag = str_replace(DIRECTORY_SEPARATOR,"#", $path_drag);
										 
										 if($type_explore=="normal"){
												    $file_check = str_replace(DIRECTORY_SEPARATOR,"#", $check_file );
													$filePath = $file_check ;
													$ondblclick = "ondblclick='open".ucfirst($extensao)."(\"".$file_check."\")' class='file'";
													$onclick="onclick='selectItem(this)'";
												   /* if($screen_filter != ""){
													  
													    if (strpos($file,$screen_filter) !== false) {
														   $ondblclick = "ondblclick='open".ucfirst($extensao)."(\"".$file_check."\")' class='file'";
													    }
													 
												     }*/
										   }
										   else{
											 
												 $onclick = "onclick='setPath(this)'";
											  
										   }
										
									  }
									  else{
									  
											$directory_format = str_replace( DIRECTORY_SEPARATOR,"#",$directory);
											$filePath = $directory_format."#".$file;
											$path_drag ="path='". $directory.DIRECTORY_SEPARATOR.$file."'";
											$path_drag = str_replace(DIRECTORY_SEPARATOR,"#",$path_drag);	
											$type="draggable droppable";
											$ondblclick="ondblclick='callWindowWExplore(\"\",\"wexplore\",\"\",\"normal\",\"\",\"".$directory_format."#".$file."\",\"\")'";
											    if($type_explore=="normal"){
												 
													 
													     $onclick="onclick=\"selectItem(this)\"";
														/*if($screen_filter != ""){
															
															  if (strpos($file,$screen_filter) !== false) {
															     $ondblclick="ondblclick='showDirectoryContent(this,\"".$directory_format."#".$file."\",1,\"\",'".$screen_filter."')'";
															  }
														}*/
												}
												else{
												    $onclick = "onclick='setPath(this);selectItem(this);'";
												}
									  
									  }
									  
									  if($type_filter !=""){
									      $arr_ext = explode(",",$type_filter);
									  }
									if($screen_filter!=""){
									  
										if((strpos($file."",$screen_filter."") !== false)){
										  $is_filter = true;
										}
									}else{
									       $is_filter = true;
									}
									  
									 if($cont%5 ==0 || $cont ==0){
									  if($cont !=0){
									      echo "</div>";
									  }
  									   echo "<div class='listview list-type-icons' style='width:105px;float:left;'>";
									 
									}
									if(is_file( $check_file ) == 1){
										 if(in_array($file_manager->get_ext_file($check_file),$arr_ext)|| $type_filter ==""  ){
												if($is_filter){
													if(!in_array($filePath, $this->getFilesArray())){
														echo "<div class='list  {$type}' {$path_drag} {$onclick} {$ondblclick}>";
															echo  "<img  src='images/{$extensao}.png' class='list-icon'>";
															echo  "<span class='list-title'>{$file}</span>";
														echo  "</div>";
													}
												}
										}
									 
									 }else{
									    if(in_array($file_manager->get_ext_file($check_file),$arr_ext) || $type_filter =="" ){
											if($is_filter){
												 if(!in_array($filePath, $this->getFilesArray())){
													echo "<div class='list {$type}' {$path_drag} {$onclick} {$ondblclick}>";
														echo  "<img src='images/folder2.png' class='list-icon'>";
														echo  "<span class='list-title'>{$file}</span>";
													echo  "</div>";
												}
											}
										}
									 
									 }
									  
									  
									 
								      $cont++;
								}				 
							 
						}
						 if($cont>5){
							echo "</div>";
										 
						}
						
						
						
						
								  
			}
		}
		   
		  
		




	
		
		 
		 
		  
		
		
        



   }
   
   




?>