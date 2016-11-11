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
 
  class Tb_contact_list extends base{
  
     private $id_contact_list;
	 private $name;
	 private $status;
	 private $id_contact;
	 private $id_user;
	
	 public function getId_contact_list(){
	    return $this->id_contact_list;
	 }
	 
	 public function setId_contact_list($id_contact_list){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_contact_list);  
    	$this->id_contact_list = $id_contact_list;
	 }
	 
	 public function getName(){
	    return $this->name;
	 }
	 
	 public function setName($name){
	    parent::setRegister();	
		$this->name = $name;
	 
	 }
	 
	 
	 public function getStatus(){
	    return $this->status;
	 }
	 
	 public function setStatus($status){
	    parent::setRegister();	
		$this->status = $status;
	 
	 }
	 
	  public function getId_contact(){
	    return $this->id_contact;
	 }
	 
	 public function setId_contact($id_contact){
	     parent::setRegister();	
		$this->id_contact = intval($id_contact);
	 
	 }
	  public function getId_user(){
	    return $this->id_user;
	 }
	 
	 public function setId_user($id_user){
	     parent::setRegister();	
		$this->id_user = intval($id_user);
	 
	 }
	 
	  
  
  
  
  
  }


?>