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
 
  class Tb_group extends base{
  
     private $id_group;
	 private $name;
	 private $id_group_pai;
	 private $group_image;
	
		 
	 
	 public function getId_group(){
	    return $this->id_group;
	 }
	 
	 public function setId_group($id_group){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_group);  
    	$this->id_group = $id_group;
	 }
	 
	
	 
	 
	 public function getName(){
	    return $this->name;
	 }
	 
	 public function setName($name){
	     parent::setRegister();	
		$this->name = $name;
	 
	 }
	 
	 public function getGroup_image(){
	    return $this->group_image;
	 }
	 
	 public function setGroup_image($group_image){
	     parent::setRegister();	
		$this->group_image = $group_image;
	 
	 }
	  public function getId_group_pai(){
	    return $this->id_group_pai;
	 }
	 
	 public function setId_group_pai($id_group_pai){
	     parent::setRegister();	
		$this->id_group_pai = $id_group_pai;
	 
	 }
	 
	
	 
	  
  
  
  
  
  }


?>