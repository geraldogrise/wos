 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
  
   include_once("../dao/base.php");
 
  class Tb_events_calendar extends base{
  
     private $id_events;
	 private $name;
	 private $image;
	 private $id_user;
	
	
	
		 
	 
	 public function getId_events(){
	    return $this->id_events;
	 }
	 
	 public function setId_events($id_events){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_events);  
    	$this->id_events = $id_events;
	 }
	 
	 public function getName(){
	    return $this->name;
	 }
	 
	 public function setName($name){
	     parent::setRegister();	
		 $this->name = $name;
	 
	 }
	  public function getImage(){
	    return $this->image;
	 }
	 
	 public function setImage($image){
	     parent::setRegister();	
		 $this->image = $image;
	 
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