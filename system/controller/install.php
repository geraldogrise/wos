<?php

$json="";
$erro ="false";
try{
include_once("../util/installUtil.php");
  
  $util = new installUtil(); 
  $arrayRequirements= array();
  $call_function ='callWindow(this,"teste","callWindowTeste","")';
  $util->insert("teste",6,"teste.png",$call_function,"teste","ad7a1701ea56cf19b080b0ff2afa03b6",$arrayRequirements,"gip","teste","normal","te");
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

?>