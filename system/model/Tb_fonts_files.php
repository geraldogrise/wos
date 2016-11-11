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
 
  class Tb_fonts_files extends base{
  
     private $id_fonts_files;
	 private $file;
     private $id_fonts;
	 private $id_user;
	
	
	
		 
	 
	 public function getId_fonts_files(){
	    return $this->id_fonts_files;
	 }
	 
	 public function setId_fonts_files($id_fonts_files){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_fonts_files);  
    	$this->id_fonts_files = $id_fonts_files;
	 }
	 
	 public function getFile(){
	    return $this->file;
	 }
	 
	 public function setFile($file){
	     parent::setRegister();	
		$this->file = $file;
	 
	 }
	 
	 
	 public function getId_fonts(){
	    return $this->id_fonts;
	 }
	 
	 public function setId_fonts($id_fonts){
	     parent::setRegister();	
		$this->id_fonts = $id_fonts;
	 
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