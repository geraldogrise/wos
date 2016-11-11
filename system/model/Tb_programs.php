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
	 
  class Tb_programs extends base{
  
     private $id_program;
	 private $name;
	 private $imagePath;
	 private $id_grp_program;
	 private $callFunction;
	 private $folder;
	 private $serial;
	 private $class_program;
	 private $gip;
	 private $type;
	 private $opentype;
	
		 
	 
	 public function getId_program(){
	    return $this->id_program;
	 }
	 
	 public function setId_program($id_program){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_program);  
    	$this->id_program = $id_program;
	 }
	 
	 public function getName(){
	    return $this->name;
	 }
	 
	 public function setName($name){
	     parent::setRegister();	
		 $this->name = $name;
	 
	 }
	  public function getImagePath(){
	    return $this->imagePath;
	 }
	 
	 public function setImagePath($imagePath){
	     parent::setRegister();	
		 $this->imagePath = $imagePath;
	 
	 }
	 
	
	 public function getId_grp_program(){
	    return $this->id_grp_program;
	 }
	 
	 public function setId_grp_program($id_grp_program){
	     parent::setRegister();	
		 $this->id_grp_program = $id_grp_program;
	 
	 }
	  public function getCallFunction(){
	    return $this->callFunction;
	 }
	 
	 public function setCallFunction($callFunction){
	     parent::setRegister();	
		 $this->callFunction = $callFunction;
	 
	 }
	  public function getFolder(){
	    return $this->folder;
	 }
	 
	 public function setFolder($folder){
	     parent::setRegister();	
		 $this->folder = $folder;
	 
	 }
	 public function getSerial(){
	    return $this->serial;
	 }
	 
	 public function setSerial($serial){
	     parent::setRegister();	
		 $this->serial = $serial;
	 
	 }
	  public function getClass_program(){
	    return $this->class_program;
	 }
	 
	 public function setClass_program($class_program){
	     parent::setRegister();	
		 $this->class_program = $class_program;
	 
	 }
	  public function getGip(){
	    return $this->gip;
	 }
	 
	 public function setGip($gip){
	     parent::setRegister();	
		 $this->gip = $gip;
	 
	 }
	  public function getType(){
	    return $this->type;
	 }
	 
	 public function setType($type){
	     parent::setRegister();	
		 $this->type = $type;
	 
	 }
	  public function getOpentype(){
	    return $this->opentype;
	 }
	 
	 public function setOpentype($opentype){
	     parent::setRegister();	
		 $this->opentype = $opentype;
	 
	 }
	 
	 
	
	 
	  
  
  
  
  
  }


?>