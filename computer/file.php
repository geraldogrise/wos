<?php


   class php_file{


     public function copiar($origem,$destino){

         copy($origem,$destino);

     }
     public function deletar($caminho){


          unlink($caminho);
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
     public function get_ext_file($nome){
          $verifica = explode('.', $nome);
          return $verifica[count($verifica) - 1];
     }







   }







?>
