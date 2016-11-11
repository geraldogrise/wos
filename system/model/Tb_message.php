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
 
  class Tb_message extends base{
  
     private $id_message;
	 private $text;
	 private $status;
	 private $dt_msg;
	 private $id_contact_sender;
	 private $id_contact_receiver;
	 private $id_user;
	 
	
		 
	 
	 public function getId_message(){
	    return $this->id_message;
	 }
	 
	 public function setId_message($id_message){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_message);  
    	$this->id_message = $id_message;
	 }
	 
	 public function getText(){
	    return $this->text;
	 }
	 
	 public function setText($text){
	    parent::setRegister();	
		$this->text = $text;
	 
	 }
	 
	 public function getStatus(){
	    return $this->status;
	 }
	 
	 public function setStatus($status){
	     parent::setRegister();	
		$this->status = $status;
	 
	 }
	 
	  public function getDt_msg(){
	    return $this->dt_msg;
	 }
	 
	 public function setDt_msg($dt_msg){
	     parent::setRegister();	
		$this->dt_msg = $dt_msg;
	 
	 }
	  public function getId_contact_sender(){
	    return $this->id_contact_sender;
	 }
	 
	 public function setId_contact_sender($id_contact_sender){
	     parent::setRegister();	
		$this->id_contact_sender = intval($id_contact_sender);
	 
	 }
	 
	 public function getId_contact_receiver(){
	    return $this->id_contact_receiver;
	 }
	 
	 public function setId_contact_receiver($id_contact_receiver){
	     parent::setRegister();	
		$this->id_contact_receiver = intval($id_contact_receiver);
	 
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