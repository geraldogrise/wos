 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php

  require_once('path.php');
 include_once($include_path.'/system/dao/base.php');
 
  class Tb_group_user extends base{
  
     private $id_group_user;
     private $id_group;
	 private $id_user;
	
	
	
		 
	 
	 public function getId_group_user(){
	    return $this->id_group_user;
	 }
	 
	 public function setId_group_user($id_group_user){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_group_user);  
    	$this->id_group_user = $id_group_user;
	 }
	 
	
	 
	 
	 public function getId_group(){
	    return $this->id_group;
	 }
	 
	 public function setId_group($id_group){
	     parent::setRegister();	
		$this->id_group = $id_group;
	 
	 }
	 
	
	  public function getId_user(){
	    return $this->id_user;
	 }
	 
	 public function setId_user($id_user){
	     parent::setRegister();	
		$this->id_user = $id_user;
	 
	 }
	 
	
	 
	  
  
  
  
  
  }


?>