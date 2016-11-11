 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
 require_once("path.php");
 require_once($include_path.'/system/model/Tb_fonts_files.php');
 require_once($include_path.'/system/dao/genericDao.php');
 require_once($include_path.'/system/util/componentUtil.php');

  
  
   
  
   if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getselect"){
	 
	    try{
		   $comp  = new  componentUtil();
           $id_font=0;
		   $path=0;
           
		   if(isset($_POST["file"]) && $_POST["file"] != ""){
		          $id_font = $_POST["file"];
			}
			 if(isset($_POST["path"]) && $_POST["path"] != ""){
		          $path = $_POST["path"];
				  $path = str_replace("\\","#",$path);
				  $path.="#";
			}
			
			
		    
			$json_result = $comp->getFontsFiles($id_font,$path);
		   
		
		}
        catch (Exception $e) {
		     
			  $json_result =  "is_erro=true#" . $e->getMessage();
			
		   
		 }
		 //$json_result = json_encode($json_result);
		 echo $json_result;
	 
	 
	 }
   

  
   
  
		  
   
  
 


?>