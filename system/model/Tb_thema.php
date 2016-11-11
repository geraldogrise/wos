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
 
  class Tb_thema extends base{
  
     private $id_thema;
	 private $name;
	 
	 public function getId_thema(){
	    return $this->id_thema;
	 }
	 
	 public function setId_thema($id_thema){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_thema);  
    	$this->id_thema = $id_thema;
	 }
	 
	
	 
	 
	 public function getName(){
	    return $this->name;
	 }
	 
	 public function setName($name){
	    parent::setRegister();	
		$this->name = $name;
	 
	 }
	 
	
	  
  
  
  
  
  }


?>