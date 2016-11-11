
 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>

<?php



require_once("path.php");


class DataUtil{
     
     function formatDateToMysql($data){
	    $arrayData = explode("/",$data);
		$ano = $arrayData[2];
		$mes =  $arrayData[1];
		$dia =  $arrayData[0];
		
	    $data = $ano."-".$mes."-".$dia;
		return $data;
	 }
	
	 
	 
	 
  
 
 }

 	
 
 
?> 
