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
	 
  class Tb_open extends base{
  
     private $id_open;
	 private $name;
	 private $callFunction;
	 private $flagchangepath;
	
		 
	 
	 public function getId_open(){
	    return $this->id_open;
	 }
	 
	 public function setId_open($id_open){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_open);  
    	$this->id_open = $id_open;
	 }
	 
	 public function getName(){
	    return $this->name;
	 }
	 
	 public function setName($name){
	     parent::setRegister();	
		 $this->name = $name;
	 
	 }
	 
	  public function getCallFunction(){
	    return $this->callFunction;
	 }
	 
	 public function setCallFunction($callFunction){
	     parent::setRegister();	
		 $this->callFunction = $callFunction;
	 
	 }
	  public function getFlagchangepath(){
	    return $this->flagchangepath;
	 }
	 
	 public function setFlagchangepath($flagchangepath){
	     parent::setRegister();	
		 $this->flagchangepath = $flagchangepath;
	 
	 }
	 
	 
	
	 
	  
  
  
  
  
  }


?>