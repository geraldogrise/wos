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
 
  class Tb_domain extends base{
  
     private $id_domain;
	 private $domain_code;
	 private $domain_value;
	 private $domain_name;
	 private $status;
	
		 
	 
	 public function getId_domain(){
	    return $this->id_domain;
	 }
	 
	 public function setId_domain($id_domain){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_domain);  
    	$this->id_domain = $id_domain;
	 }
	 
	
	 
	 
	 public function getDomain_code(){
	    return $this->domain_code;
	 }
	 
	 public function setDomain_code($domain_code){
	    parent::setRegister();	
		$this->domain_code = $domain_code;
	 
	 }
	 
	 public function getDomain_value(){
	    return $this->domain_value;
	 }
	 
	 public function setDomain_value($domain_value){
	    parent::setRegister();	
		$this->domain_value = $domain_value;
	 
	 }
	 
	  public function getDomain_name(){
	    return $this->domain_name;
	 }
	 
	 public function setDomain_name($domain_name){
	    parent::setRegister();	
		$this->domain_name = $domain_name;
	 
	 }
	  public function getStatus(){
	    return $this->status;
	 }
	 
	 public function setStatus($status){
	    parent::setRegister();	
		$this->status = $status;
	 
	 }
	 
  
  }


?>