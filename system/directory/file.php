 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php


   class php_file{


     public function copyFile($origem,$destino){

         $destino =$destino.DIRECTORY_SEPARATOR.substr($origem, strrpos($origem,DIRECTORY_SEPARATOR)+1);
		 $origem = str_replace(DIRECTORY_SEPARATOR,"/",$origem);		
         $destino = str_replace(DIRECTORY_SEPARATOR,"/",$destino);	
          copy($origem,$destino);

     }
     public function deleteFile($caminho){


          unlink($caminho);
     }
	 public function moveFile($origem,$destino){
	    
		 $this->copyFile($origem,$destino);
	     unlink($origem);
	 }
	  public function renameFileOrFolder($oldname,$newname){
	     rename($oldname, $newname);
	  }
     public function lastModify($nome_Arquivo){


          return fileatime ($nome_Arquivo);
     }
     public function tempoDeModificacao($nome_Arquivo){

             filectime ($nome_Arquivo );

     }
     public function is_directory ( $filename ){

           return is_dir($filename);
     }
     public function is_arquivo($filename){

            return is_file($filename);

     }
     public function getTamanho($arquivo){

        return filesize($arquivo);
     }
	  public function getSize($arquivo){

        return filesize($arquivo);
     }
     public function get_ext_file($nome){
          $verifica = explode('.', $nome);
          return $verifica[count($verifica) - 1];
     }
	 
	 public function openFile($arquivo,$tipo){
	    $file = fopen($arquivo,$tipo);
	    return $file;
	 }
	 public function writeFile($file,$content){
	 
	    fwrite($file,$content);
	 }
	  public function readFile($file,$lenght){
	 
	   return fread($file,$lenght);
	 }
	  public function closeFile($file){
	       fclose($file);
	 }
	 public function checkExistFile($local,$file,$type,$cont){
            $local = str_replace("#",DIRECTORY_SEPARATOR,$local);			
			$arq   =$local.DIRECTORY_SEPARATOR.$file."_".$cont.".".substr($type,3);  
			
			if(file_exists($arq) ){
				 $cont++;
				 $this->checkExistFile($local,$file,$type,$cont);
				
			 }
			 else{
			   
				$conteudo = "";	   
			  
				$file_x= $this->openFile($arq,"w");
				$this->writeFile($file_x,$conteudo);
				$this->closeFile($file_x);
			 }
  
     }
	 
	 public function checkExistFolder($local,$file,$cont){
            $local = str_replace("#",DIRECTORY_SEPARATOR,$local);			
			$arq   =$local.DIRECTORY_SEPARATOR.$file."_".$cont;  
			
			if($this->is_directory($arq) ){
				 $cont++;
				 $this->checkExistFolder($local,$file,$cont);
				
			 }
			 else{
			   
				mkdir($arq);  
			 }
  
     }
	 







   }







?>
