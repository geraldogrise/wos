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
 
  class Tb_encrypt extends base{
  
     private $id_encrypt;
	 private $encrypt_name;
	
	
		 
	 
	 public function getId_encrypt(){
	    return $this->id_encrypt;
	 }
	 
	 public function setId_encrypt($id_encrypt){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_encrypt);  
    	$this->id_encrypt = $id_encrypt;
	 }
	 
	
	 
	 
	 public function getEncrypt_name(){
	    return $this->encrypt_name;
	 }
	 
	 public function setEncrypt_name($encrypt_name){
	    parent::setRegister();	
		$this->encrypt_name = $encrypt_name;
	 
	 }
	 
  
  }


?>