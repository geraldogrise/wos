 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
 require_once("path.php");
 require_once($include_path.'/system/dao/genericDao.php');
 require_once($include_path.'/system/model/Tb_settings.php');
 require_once('ComboController.php');
 require_once('utilController.php');
 require_once('componentController.php');


  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "get"){
		   
		  
		   try 
		   {
				 $valor ="";
				 $comp = new ComponentController();
				 $_REQUEST['acao']= "setlanguage";
                 $_REQUEST['component']= $comp->getSingleCountry("id_language",'90',$valor ,true);
				 require_once $include_path.'/system/programs/language/screen.php';
			
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
    
  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "setlanguage"){
    $id_language="";
    $setting = new Tb_settings();
	$dao = new genericDao();  
     
	$json_result = "";
	$erro ="false";
	try 
	{
	  if(isset($_POST["id_user"]) && $_POST["id_user"] != ""){
		$setting->setId_user($_POST["id_user"]);
	  }
	  if(isset($_POST["id_group"]) && $_POST["id_group"] != ""){
		$setting->setId_group($_POST["id_group"]);
	  }
	  $result_setting = $dao->getAll($setting);
	  if(isset($_POST["id_language"]) && $_POST["id_language"] != ""){
	     $setting->setId_country($_POST["id_language"]);
	  }
	   if($result_setting->num_rows == 1){
			    
		     while($row = $result_setting->fetch_array()){
			     $setting->setId_setting($row["id_setting"]);
			 }
			 $dao->update($setting);
				
		}
		else{
		   $setting->setId_setting("auto");
		   $setting->setSystem_date("0");
		   $setting->setSystem_hour("0:0");
		   $setting->setTime_zone("America/Bahia");
		   $setting->setDateformat(null);
		   $setting->setBackground(null);
		   $setting->setUser_image(null);
		   $setting->setMouse_image(null);
		   $setting->setCurrent_location(null);
		   
		   $dao->insert($setting);
		}
		$json = array(
					  "is_erro" => $erro,
					   "msg" => "Ok",
		   
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
		
   
  }
    
		  
   
  
 


?>