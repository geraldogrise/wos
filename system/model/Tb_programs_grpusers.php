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
 
  class Tb_programs_grpusers extends base{
  
     private $id_program_grpusers;
     private $id_program;
	 private $id_group;
	 private $id_user;
	
	
	
		 
	 
	 public function getId_program_grpusers(){
	    return $this->id_program_grpusers;
	 }
	 
	 public function setId_program_grpusers($id_program_grpusers){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_program_grpusers);  
    	$this->id_program_grpusers = $id_program_grpusers;
	 }
	 public function getId_program(){
	    return $this->id_program;
	 }
	 
	 public function setId_program($id_program){
	     parent::setRegister();	
		$this->id_program = $id_program;
	 
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