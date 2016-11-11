 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>

<?php

  

require_once("path.php");
 require_once($include_path.'/system/model/Tb_user.php');
 require_once($include_path.'/system/model/Tb_group.php');

class utilController{


     public function getUsers(){
          
       $user = new Tb_user();
	
	   
	   
	 
	   $dao = new genericDao();
	   $resultset = $dao->getAll($user);
   
       $arrayUser= array();
	    while($row = $resultset->fetch_array())
	   {
	       $codigo = $row["id_user"];
		   $descricao =$row["name"];
	       $arrayUser[$codigo]=$descricao;
	   
	   
	   
	   }
	   
	   
	   return $arrayUser;		  
   
   }
    public function getGroups(){
          
       $group = new Tb_group();
	
	   
	   
	 
	   $dao = new genericDao();
	   $resultset = $dao->getAll($group);
   
       $arratGroup= array();
	    while($row = $resultset->fetch_array())
	   {
	       $codigo = $row["id_group"];
		   $descricao =$row["name"];
	       $arratGroup[$codigo]=$descricao;
	   
	   
	   
	   }
	   
	   
	   return $arratGroup;		  
   
   }
    public function getParentsGroups(){
          
       $group = new Tb_group();
	
	   
	   
	 
	   $dao = new genericDao();
	   $group->setId_group_pai(0);
	   $resultset = $dao->getAll($group);
   
       $arratGroup= array();
	    while($row = $resultset->fetch_array())
	   {
	       $codigo = $row["id_group"];
		   $descricao =$row["name"];
	       $arratGroup[$codigo]=$descricao;
	   
	   
	   
	   }
	   
	   
	   return $arratGroup;		  
   
   }
    
    
}
  
		  
   
  
 


?>