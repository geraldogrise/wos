 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php

  include_once("../dao/base.php");
 
  class Tb_gallery_item extends base{
  
     private $id_gallery_item;
	 private $name;
	 private $description;
	 private $id_user;
	 private $id_gallery;
	
		 
	 
	 public function getId_gallery_item(){
	    return $this->id_gallery_item;
	 }
	 
	 public function setId_gallery_item($id_gallery_item){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_gallery_item);  
    	$this->id_gallery_item = $id_gallery_item;
	 }
	 
	 public function getName(){
	    return $this->name;
	 }
	 
	 public function setName($name){
	     parent::setRegister();	
		 $this->name = $name;
	 
	 }
	  public function getDescription(){
	    return $this->description;
	 }
	 
	 public function setDescription($description){
	     parent::setRegister();	
		 $this->description = $description;
	 
	 }
	 
	
	  public function getId_user(){
	    return $this->id_user;
	 }
	 
	 public function setId_user($id_user){
	     parent::setRegister();	
		 $this->id_user = $id_user;
	 
	 }
	 public function getId_gallery(){
	    return $this->id_gallery;
	 }
	 
	 public function setId_gallery($id_gallery){
	   
		parent::setRegister();
	   	$this->id_gallery = $id_gallery;
	 }
	 
	 
	
	 
	  
  
  
  
  
  }


?>