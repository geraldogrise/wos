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
 
  class Tb_grp_control extends base{
  
     private $id_grp_control;
	 private $name;
	 private $priority;
	
		 
	 
	 public function getId_grp_control(){
	    return $this->id_grp_control;
	 }
	 
	 public function setId_grp_control($id_grp_control){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_grp_control);  
    	$this->id_grp_control = $id_grp_control;
	 }
	 public function getName(){
	    return $this->name;
	 }
	 
	 public function setName($name){
	     parent::setRegister();	
		$this->name = $name;
	 
	 }
	 public function getPriority(){
	    return $this->priority;
	 }
	 
	 public function setPriority($priority){
	     parent::setRegister();	
		$this->priority = $priority;
	 
	 }
	 
	
	 
	  
  
  
  
  
  }


?>