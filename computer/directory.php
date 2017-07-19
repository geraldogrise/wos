
<?php
  include_once("file.php");
?>
<?php

   class php_directory{

		
		
		public function openDirectory($diretorio){

             return readdir($diretorio);
        }
		
		public function getDirectory($diretorio){

              return opendir($diretorio);

        }
        
		public function closeDirectory($diretorio){

                 closedir($diretorio);
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
		   
		   public function showTreeView ($dir,$arrow_right){
                  if ($handle = opendir($dir)) {
                      echo '<ul class="arvore">';
                      while (false !== ($file = readdir($handle))) {
                             if ($file != "." && $file != "..") {
                                   
								 $icone =   $this->getListExtension($file,$dir,$arrow_right);
								 
								
								$onclick = "";
								 
								 $extensao = $this->get_ext_file($file);
								 
								 if(is_file($file) == 1){
								   $onclick = "onclick='open".ucfirst($extensao)."(".$file.")' class='file'";
								 }
								 else{
								    $dire = str_replace( "\\","#",$dir);
									$onclick="onclick='showDirectoryContent(this,\"".$dire."#".$file."\",1)'";
								 }
								 echo "<li> <span class='iconLiArvore'>".$icone."</span>  <a ".$onclick."  href='#'>".$file."</a></li>";
                             }
                       }
                       echo '</ul>';
                       closedir($handle);
                  }
           }
		   
		   function getListExtension($file,$dir,$arrow_right){
		   
		             
					 $icon = is_dir($dir."/".$file);
					 $icone = "";
					
					 if($icon == 1){
					    $dir = str_replace( "\\","#",$dir);
					     if($arrow_right ==1){
						    $icone = "<img width='14px;' src='images/arrow_list_right.png' onclick='showDirectory(this,\"".$dir."#".$file."\")'>";
						 }
						 else{
						     $icone = "<img width='14px;' src='images/folder.png''>";
						 }
					 }
					 else{
					   
					   $extensao = $this->get_ext_file($file);
					   $icone = "<img width='14px;' src='images/".$extensao.".png'>";
					    
					 
					 }
		              return $icone;
		   
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
			     $this->createDir($DirDest."/".$DirFont);
				 $DirDest = $DirDest."/".$DirFont;
			  }
			  
			  if(!file_exists($DirDest)){
                 mkdir($DirDest);
			  }
               if ($dd = opendir($DirFont)) {
                       while (false !== ($Arq = readdir($dd))) {
                          if($Arq != "." && $Arq != ".."){
                               $PathIn = "$DirFont/$Arq";
                               $PathOut = "$DirDest/$Arq";
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
                           $Path = "$Dir/$Arq";
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
			     $this->createDir($DirDest."/".$DirFont);
				 $DirDest = $DirDest."/".$DirFont;
			  }
			  $this->CopyDirectory($DirFont, $DirDest);
              $this->DeleteDirectory($DirFont);

         }
		 
		 
		  
		
		
        



   }




?>