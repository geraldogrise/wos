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
	 
  class Tb_control_elements extends base{
  
     private $id_control_element;
	 private $name;
	 private $imagePath;
	 private $id_grp_control;
	
		 
	 
	 public function getId_control_element(){
	    return $this->id_control_element;
	 }
	 
	 public function setId_control_element($id_control_element){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_control_element);  
    	$this->id_control_element = $id_control_element;
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
	 
	
	 public function getId_grp_control(){
	    return $this->id_grp_control;
	 }
	 
	 public function setId_grp_control($id_grp_control){
	     parent::setRegister();	
		 $this->id_grp_control = $id_grp_control;
	 
	 }
	 
	 
	
	 
	  
  
  
  
  
  }


?>