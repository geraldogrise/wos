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
  class Tb_barbottom extends base{
  
     private $id_barbottom;
	 private $class_name;
	 private $id_user;
	
		 
	 
	 public function getId_barbottom(){
	    return $this->id_barbottom;
	 }
	 
	 public function setId_barbottom($id_barbottom){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_barbottom);  
    	$this->id_barbottom = $id_barbottom;
	 }
	 
	 public function getClass_name(){
	    return $this->class_name;
	 }
	 
	 public function setClass_name($class_name){
	     parent::setRegister();	
		 $this->class_name = $class_name;
	 
	 }
	
	
	  public function getId_user(){
	    return $this->id_user;
	 }
	 
	 public function setId_user($id_user){
	     parent::setKey();
		 parent::setRegister();	
		 $this->id_user = $id_user;
	}
	
  
  
  }


?>