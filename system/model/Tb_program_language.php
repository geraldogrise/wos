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
 
  class Tb_program_language extends base{
  
     private $id_program_language;
	 private $id_user;
	 private $id_group;
	 private $id_program;
	 private $id_country;
	 
	 public function getId_program_language(){
	    return $this->id_program_language;
	 }
	 
	 public function setId_program_language($id_program_language){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_program_language);  
    	$this->id_program_language = $id_program_language;
	 }
	 
	  public function getId_user(){
	    return $this->id_user;
	 }
	 
	 public function setId_user($id_user){
	   
		parent::setRegister();
		$this->id_user = $id_user;
	 }
	 
	 
	  public function getId_group(){
	    return $this->id_group;
	 }
	 
	 public function setId_group($id_group){
	   
		parent::setRegister();
		$this->id_group = $id_group;
	 }
	 
	  public function getId_program(){
	    return $this->id_program;
	 }
	 
	 public function setId_program($id_program){
	   
		parent::setRegister();
		$this->id_program = $id_program;
	 }
		

      public function getId_country(){
	    return $this->id_country;
	 }
	 
	 public function setId_country($id_country){
	     parent::setRegister();	
		$this->id_country = $id_country;
	 
	 }		
	 
	
  }


?>