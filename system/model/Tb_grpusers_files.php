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
 
  class Tb_grpusers_files extends base{
  
     private $id_grpusers_files;
	 private $pathfile;
     private $id_group;
	 private $id_user;
	
	
	
		 
	 
	 public function getId_grpusers_files(){
	    return $this->id_grpusers_files;
	 }
	 
	 public function setId_grpusers_files($id_grpusers_files){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_grpusers_files);  
    	$this->id_grpusers_files = $id_grpusers_files;
	 }
	 
	 public function getPathfile(){
	    return $this->pathfile;
	 }
	 
	 public function setPathfile($pathfile){
	     parent::setRegister();	
		$this->pathfile = $pathfile;
	 
	 }
	 
	 
	 public function getId_group(){
	    return $this->id_group;
	 }
	 
	 public function setId_group($id_group){
	     parent::setRegister();	
		$this->id_group = $id_group;
	 
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