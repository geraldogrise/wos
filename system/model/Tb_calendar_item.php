 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
  
   include_once("../dao/base.php");
 
  class Tb_calendar_item extends base{
  
		private $id_calendar_item;    
		private $id_events;
		private $dt_event;
		private $id_user;
		private $pathCalendar;
	
	
	
		 
	 
	 public function getId_calendar_item(){
	    return $this->id_calendar_item;
	 }
	 
	 public function setId_calendar_item($id_calendar_item){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_calendar_item);  
    	$this->id_calendar_item = $id_calendar_item;
	 }
	 
	 public function getDt_event(){
	    return $this->dt_event;
	 }
	 
	 public function setDt_event($dt_event){
	     parent::setRegister();	
		 $this->dt_event = $dt_event;
	 
	 }
	  public function getId_events(){
	    return $this->id_events;
	 }
	 
	 public function setId_events($id_events){
	     parent::setRegister();	
		 $this->id_events = $id_events;
	 
	 }
	 
	
	  public function getId_user(){
	    return $this->id_user;
	 }
	 
	 public function setId_user($id_user){
	     parent::setRegister();	
		 $this->id_user = $id_user;
	 
	 }
	  public function getPathCalendar(){
	    return $this->pathCalendar;
	 }
	 
	 public function setPathCalendar($pathCalendar){
	     parent::setRegister();	
		 $this->pathCalendar = $pathCalendar;
	 
	 }
	  
  }


?>