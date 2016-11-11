<?php
 
  
  
   require_once($caminho.'/system/model/Tb_settings.php');
   $lang = "en-US";
   
   $settings = new Tb_settings();
   $model = new Tb_settings();
   
    if(isset($_POST["user_system_id"])){
		   $settings->setId_setting($_POST["user_system_id"]);
		   $dao = new genericDao();
		   $result = $dao->getAll($settings);
		  
		   
			while($row = $result->fetch_array()){
			  $lang = $row["lang"]!=null?$row["lang"]:"en-US";	
			}
     }
     include($caminho.'/system/languages/'.$lang.'/index.php');
   
?>