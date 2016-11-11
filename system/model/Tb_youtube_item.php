 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
  
   include_once("../dao/base.php");
 
  class Tb_youtube_item extends base{
  
     private $id_youtube_item;
	 private $name;
	 private $description;
	 private $id_user;
	 private $id_youtube_gallery;
	
	
		 
	 
	 public function getId_youtube_item(){
	    return $this->id_youtube_item;
	 }
	 
	 public function setId_youtube_item($id_youtube_item){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_youtube_item);  
    	$this->id_youtube_item = $id_youtube_item;
	 }
	 
	 public function getName(){
	    return $this->name;
	 }
	 
	 public function setName($name){
	     parent::setRegister();	
		 $this->name = $name;
	 
	 }
	  public function getDescription(){
	    return $this->description;
	 }
	 
	 public function setDescription($description){
	     parent::setRegister();	
		 $this->description = $description;
	 
	 }
	 
	
	  public function getId_user(){
	    return $this->id_user;
	 }
	 
	 public function setId_user($id_user){
	     parent::setRegister();	
		 $this->id_user = $id_user;
	 
	 }
	  public function getId_youtube_gallery(){
	    return $this->id_youtube_gallery;
	 }
	 
	 public function setId_youtube_gallery($id_youtube_gallery){
	   
		parent::setRegister();
	   	$this->id_youtube_gallery = $id_youtube_gallery;
	 }
	 
	 
	
	 
	  
  
  
  
  
  }


?>