 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
 
  include_once("../dao/base.php");
 
  class Tb_gallery extends base{
  
     private $id_gallery;
	 private $name;
	 private $image;
	 private $id_user;
	
	
		 
	 
	 public function getId_gallery(){
	    return $this->id_gallery;
	 }
	 
	 public function setId_gallery($id_gallery){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_gallery);  
    	$this->id_gallery = $id_gallery;
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