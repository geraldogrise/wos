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
 
  class Tb_backup extends base{
  
     private $id_backup;
	 private $backup_file;
	 private $dt_backup;
	 private $id_user;
	
		 
	 
	 public function getId_backup(){
	    return $this->id_backup;
	 }
	 
	 public function setId_backup($id_backup){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_backup);  
    	$this->id_backup = $id_backup;
	 }
	 
	
	 
	 
	 public function getBackup_file(){
	    return $this->backup_file;
	 }
	 
	 public function setBackup_file($backup_file){
	    parent::setRegister();	
		$this->backup_file = $backup_file;
	 
	 }
	 
	 public function getDt_backup(){
	    return $this->dt_backup;
	 }
	 
	 public function setDt_backup($dt_backup){
	     parent::setRegister();	
		$this->dt_backup = $dt_backup;
	 
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