 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
 require_once("path.php");
 require_once($include_path.'/system/model/Tb_programs.php');
 require_once($include_path.'/system/model/Tb_open.php');
 require_once($include_path.'/system/dao/genericDao.php');
 require_once($include_path.'/system/directory/file.php');
 
 

 
   
   
 
  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "get"){
		   
		  
		   try 
		   {
		        
                 $program= new Tb_programs();
				 $programa = new Tb_programs();
				 $open = new Tb_open();
				 $file = new php_file();
				 $path = "";
				 $id_open = "";
				
				
			   if(isset($_POST["vlr"]) && $_POST["vlr"] != ""){
		          $opentype = trim($_POST["vlr"]);
				  $opentype=   $file->get_ext_file($opentype);
				  $open->setName($opentype);
				  $_REQUEST["path"]= trim($_POST["vlr"]); 
                  
				  $query = "SELECT * FROM `tb_programs` WHERE  opentype like '%{$opentype}%'"; 
				  $dao = new genericDao();
				  $resultset = $dao->executeQueryByString($query);
				  $_REQUEST["programs"]= $resultset; 
				  $resultsetopen = $dao->getAll($open);
				  while($row = $resultsetopen->fetch_array()){
				     $flagchangepath = $row["flagchangepath"];
					 $id_open = $row["id_open"];
				  }
				   $_REQUEST["flagchangepath"]= $flagchangepath; 
				   $_REQUEST["extension"]= $opentype; 
				   $_REQUEST["id_open"]= $id_open;
				    
				  
			   }
			   
			  
			
			  
			    
				
				
				 require_once $include_path.'/system/programs/wopen/screen.php';
				 
				 
			 
			 
			         
  
		   } catch (Exception $e) {
		     
			  echo "is_erro=true#" . $e->getMessage();
			
		   
		   }
			   
   }
    
		  
   
  
 


?>