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
 
  class Tb_contact extends base{
  
     private $id_contact;
	 private $name;
	 private $phone;
	 private $email;
	 private $image;
	 private $id_user;
	
		 
	 
	 public function getId_contact(){
	    return $this->id_contact;
	 }
	 
	 public function setId_contact($id_contact){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_contact);  
    	$this->id_contact = $id_contact;
	 }
	 
	
	 
	 
	 public function getName(){
	    return $this->name;
	 }
	 
	 public function setName($name){
	    parent::setRegister();	
		$this->name = $name;
	 
	 }
	 
	 public function getPhone(){
	    return $this->phone;
	 }
	 
	 public function setPhone($phone){
	     parent::setRegister();	
		$this->phone = $phone;
	 
	 }
	 
	  public function getEmail(){
	    return $this->email;
	 }
	 
	 public function setEmail($email){
	     parent::setRegister();	
		$this->email = $email;
	 
	 }
	 
	 public function getImage(){
	    return $this->image;
	 }
	 
	 public function setImage($image){
	     parent::setRegister();	
		$this->image = $image;
	 
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