 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
  class encryption{
       public function convertMD5($string){
           $codificada = md5($string);
           return  $codificada;

        }
        public function convertSHA1($string){
           $codificada = sha1($string);
           return  $codificada;

        }
        public function ConvertToBase64($string){

            $codificada = base64_encode($string);
             return $codificada;

        }
        public function decodeToBase64($codificada){

            $original = base64_decode($codificada);
            return $original;
        }
        public function convertSha512($string){

          $codificada = hash('sha512', $string);
          return  $codificada;

        }
        public function EncodeWhirlpool($string){
            $codificada = hash('whirlpool', $string);
            return  $codificada;
        }
        
        public function EncodeSalsa20($string){
            $codificada = hash('salsa20', $string);
            return  $codificada;
        }
        
        function encripta($senha){
	           // VEJA QUE PRIMEIRO EU VOU GERAR UM SALT JÁ ENCRIPTADO EM MD5
	           $salt = md5("geraldogrisebacelardesousa");
               //PRIMEIRA ENCRIPTAÇÃO ENCRIPTANDO COM crypt
	           $codifica = crypt($senha,$salt);
               // SEGUNDA ENCRIPTAÇÃO COM sha512 (128 bits)
               $codifica = hash('sha512',$codifica);
              //AGORA RETORNO O VALOR FINAL ENCRIPTADO
	          return $codifica;

         }
		 
		 function hashEncript($type,$value){
		    $codificada = hash($type, $value);
            return  $codificada;
		 }
   }

?>
