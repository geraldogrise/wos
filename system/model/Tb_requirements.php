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
	 
  class Tb_requirements extends base{
  
     private $id_requirements;
	 private $name;
	 private $id_program;
	 private $require_type;
	
	
		 
	 
	 public function getId_requirements(){
	    return $this->id_requirements;
	 }
	 
	 public function setId_requirements($id_requirements){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_requirements);  
    	$this->id_requirements = $id_requirements;
	 }
	 
	 public function getName(){
	    return $this->name;
	 }
	 
	 public function setName($name){
	     parent::setRegister();	
		 $this->name = $name;
	 
	 }
	  public function getId_program(){
	    return $this->id_program;
	 }
	 
	 public function setId_program($id_program){
	     parent::setRegister();	
		 $this->id_program = $id_program;
	 
	 }
	 public function getRequire_type(){
	    return $this->require_type;
	 }
	 
	 public function setRequire_type($require_type){
	     parent::setRegister();	
		 $this->require_type = $require_type;
	 
	 }
	 
	
	
	 
	 
	
	 
	  
  
  
  
  
  }


?>