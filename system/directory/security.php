 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
class security{
      
   public function LimparTexto($texto)
  {
	 $texto=str_replace(array("<", ">", "\\", "/", "=", "'", "?"), "", $texto);
	 return $texto;
  }
  public function getIp(){
  
     $ip = getenv("REMOTE_ADDR"); 
	 return $ip;
  }
  public function escapeMysql($parameter){
  
    $parameter = mysql_real_escape_string($parameter);
  }
   public function escapeShellCommands($parameter){
  
    $parameter = escapeshellcmd($parameter);
  }
   public function escapeShellArguments($parameter){
  
    $parameter = escapeshellarg($parameter);
  }
  public function getRandom(){
    $prefix = rand();
	$unique = uniqid( $prefix, TRUE );
	return $unique;
  }
  public function noGetSession(){
    ini_set( 'session.use_only_cookies', TRUE );
    ini_set( 'session.use_trans_sid', FALSE );
  
  }
 /* public function escapeHtml($parameter){
  
    $parameter = htmlentities($parameter);
  }*/
  
  function buildPassword($lenght = 8, $upper = true, $numbers = true, $symbols = false)
  {
		$lmin = 'abcdefghijklmnopqrstuvwxyz';
		$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$num = '1234567890';
		$simb = '!@#$%*-';
		$retorno = '';
		$caracters = '';
		$caracters .= $lmin;
			if ($upper){ 
			   $caracters .= $lmai;
			}
			if ($numbers){ 
			   $caracters .= $num;
			}
			if ($symbols){ 
			   $caracters .= $simb;
			}
		    $len = strlen($caracters);
		   for ($n = 1; $n <= $lenght; $n++) {
		        $rand = mt_rand(1, $len);
		        $retorno .= $caracters[$rand-1];
		   }
		return $retorno;
   }
  
 
	  
}

?>
