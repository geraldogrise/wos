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
  class Tb_settings extends base{
  
     private $id_setting;
	 private $system_date;
	 private $system_hour;
	 private $time_zone;
	 private $dateformat;
	 private $background;
	 private $id_country;
	 private $id_user;
	 private $id_group;
	 private $user_image;
	 private $mouse_image;
	 private $current_location;
	
		 
	 
	 public function getId_setting(){
	    return $this->id_setting;
	 }
	 
	 public function setId_setting($id_setting){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_setting);  
    	$this->id_setting = $id_setting;
	 }
	 
	 public function getSystem_date(){
	    return $this->system_date;
	 }
	 
	 public function setSystem_date($system_date){
	     parent::setRegister();	
		 $this->system_date = $system_date;
	 
	 }
	 
	  public function getSystem_hour(){
	    return $this->system_hour;
	 }
	 
	 public function setSystem_hour($system_hour){
	     parent::setRegister();	
		 $this->system_hour = $system_hour;
	 
	 }
	  public function getTime_zone(){
	    return $this->time_zone;
	 }
	 
	 public function setTime_zone($time_zone){
	     parent::setRegister();	
		 $this->time_zone = $time_zone;
	 
	 }
	  public function getDateformat(){
	    return $this->dateformat;
	 }
	 
	 public function setDateformat($dateformat){
	     parent::setRegister();	
		 $this->dateformat = $dateformat;
	 
	 }
	 public function getBackground(){
	    return $this->background;
	 }
	 
	 public function setBackground($background){
	     parent::setRegister();	
		 $this->background = $background;
	 
	 }
	  public function getId_country(){
	    return $this->id_country;
	 }
	 
	 public function setId_country($id_country){
	     parent::setRegister();	
		 $this->id_country = $id_country;
	 
	 }
	 public function getId_group(){
	    return $this->id_group;
	 }
	 
	 
	public function setId_group($id_group){
	     parent::setKey();
		 parent::setRegister();	
		 $this->id_group = $id_group;
	}
	  public function getId_user(){
	    return $this->id_user;
	 }
	 
	 public function setId_user($id_user){
	     parent::setKey();
		 parent::setRegister();	
		 $this->id_user = $id_user;
	}
	
	 public function getUser_image(){
	    return $this->user_image;
	 }
	 
	 public function setUser_image($user_image){
	     parent::setRegister();	
		 $this->user_image = $user_image;
	}
	
	 public function getMouse_image(){
	    return $this->user_image;
	 }
	 
	 public function setMouse_image($mouse_image){
	     parent::setRegister();	
		 $this->mouse_image = $mouse_image;
	}
	
	 public function getCurrent_location(){
	    return $this->current_location;
	 }
	 
	 public function setCurrent_location($current_location){
	     parent::setRegister();	
		 $this->current_location = $current_location;
	}
	
	
	
	 
	 
	 
	
	 
	  
  
  
  
  
  }


?>