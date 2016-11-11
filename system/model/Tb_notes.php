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
 
  class Tb_notes extends base{
  
     private $id_note;
	 private $note;
     private $id_group;
	 private $id_user;
	
	
	
		 
	 
	 public function getId_note(){
	    return $this->id_note;
	 }
	 
	 public function setId_note($id_note){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_note);  
    	$this->id_note = $id_note;
	 }
	 
	 public function getNote(){
	    return $this->note;
	 }
	 
	 public function setNote($note){
	     parent::setRegister();	
		$this->note = $note;
	 
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