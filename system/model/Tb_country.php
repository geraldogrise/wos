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
 
  class Tb_country extends base{
  
     private $id_country;
	 private $name;
	 private $abv;
	 private $continent;
	 private $status;
	 private $language;
	
		 
	 
	 public function getId_country(){
	    return $this->id_country;
	 }
	 
	 public function setId_country($id_country){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_country);  
    	$this->id_country = $id_country;
	 }
	 
	
	 
	 
	 public function getName(){
	    return $this->name;
	 }
	 
	 public function setName($name){
	    parent::setRegister();	
		$this->name = $name;
	 
	 }
	 
	 public function getAbv(){
	    return $this->abv;
	 }
	 
	 public function setAbv($abv){
	     parent::setRegister();	
		$this->abv = $abv;
	 
	 }
	  public function getContinent(){
	    return $this->continent;
	 }
	 
	 public function setContinent($continent){
	     parent::setRegister();	
		$this->continent = $continent;
	 
	 }
	  public function getStatus(){
	    return $this->status;
	 }
	 
	 public function setStatus($status){
	     parent::setRegister();	
		$this->status = $status;
	 
	 }
	  public function getLanguage(){
	    return $this->language;
	 }
	 
	 public function setLanguage($language){
	     parent::setRegister();	
		$this->language = $language;
	 
	 }
	
	 
	  
  
  
  
  
  }


?>