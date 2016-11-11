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
 
  class Tb_programs_group extends base{
  
     private $id_program_group;
     private $id_program;
	 private $id_group;
	
	
	
		 
	 
	 public function getId_program_group(){
	    return $this->id_program_group;
	 }
	 
	 public function setId_program_group($id_program_group){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_program_group);  
    	$this->id_program_group = $id_program_group;
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
	 
	
	 
	 
	
	 
	  
  
  
  
  
  }


?>