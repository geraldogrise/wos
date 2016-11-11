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
	 
  class Tb_open_user extends base{
     private $id_open_user;
     private $id_open;
	 private $id_user;
	 private $callFunction;
	
	
		 
	 
	 public function getId_open_user(){
	    return $this->id_open_user;
	 }
	 
	 public function setId_open_user($id_open_user){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_open_user);  
    	$this->id_open_user = $id_open_user;
	 }
	 
	 public function getId_open(){
	    return $this->id_open;
	 }
	 
	 public function setId_open($id_open){
	     parent::setRegister();	
		 $this->id_open = intval($id_open);
	 
	 }
	 
	  public function getId_user(){
	    return $this->id_user;
	 }
	 
	 public function setId_user($id_user){
	     parent::setRegister();	
		 $this->id_user = intval($id_user);
	 
	 }
	  public function getCallFunction(){
	    return $this->callFunction;
	 }
	 
	 public function setCallFunction($callFunction){
	     parent::setRegister();	
		 $this->callFunction = $callFunction;
	 
	 }
	 
	
	 
	  
  
  
  
  
  }


?>