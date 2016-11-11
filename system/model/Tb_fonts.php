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
 
  class Tb_fonts extends base{
  
		private $id_fonts;    
		private $name;
		private $folder;
		private $type;
		
	
	
		 
	 
	 public function getId_fonts(){
	    return $this->id_fonts;
	 }
	 
	 public function setId_fonts($id_fonts){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_fonts);  
    	$this->id_fonts = $id_fonts;
	 }
	 
	 public function getName(){
	    return $this->name;
	 }
	 
	 public function setName($name){
	     parent::setRegister();	
		 $this->name = $name;
	 
	 }
	  public function getFolder(){
	    return $this->folder;
	 }
	 
	 public function setFolder($folder){
	     parent::setRegister();	
		 $this->folder = $folder;
	 
	 }
	 
	  public function getType(){
	    return $this->type;
	 }
	 
	 public function setType($type){
	     parent::setRegister();	
		 $this->type = $type;
	 
	 }
	 
	
	 
	  
  }


?>