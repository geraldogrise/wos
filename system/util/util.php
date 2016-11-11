 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php 


class SystemUtil{

	public function convert($size)
	{
		$unit=array('b','kb','mb','gb','tb','pb');
		return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
	}
	function dataSize($Bytes)
	{
		$Type=array("", "kilo", "mega", "giga", "tera");
		$counter=0;
		while($Bytes>=1024)
		{
		$Bytes/=1024;
		$counter++;
		}
		return("".$Bytes." ".$Type[$counter]."bytes");
	}
	public function mask($val, $mask)
	{
		 $maskared = '';
		 $k = 0;
		 for($i = 0; $i<=strlen($mask)-1; $i++)
		 {
			 if($mask[$i] == '#')
			 {
				 if(isset($val[$k]))
				   $maskared .= $val[$k++];
			 }
			 else
			 {
				 if(isset($mask[$i]))
				   $maskared .= $mask[$i];
			 }
		 }
		 return $maskared;
	}
	public function getUniqueId(){
	  $unico = strtoupper(uniqid(rand(), true));
	  return $unico;
	
	}
	public function getRandomUniqueId(){
	 $uniqueId= time().mt_rand();
     return strtoupper("".$uniqueId);
	
	}
	
	
	
  
}

?>
