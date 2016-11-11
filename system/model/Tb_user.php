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
  class Tb_user extends base{
  
     private $id_user;
	 private $name;
	 private $email;
	 private $login;
	 private $password;
	 private $id_group;
	 private $user_image;
	 private $voice_password;
	
		 
	 
	 public function getId_user(){
	    return $this->id_user;
	 }
	 
	 public function setId_user($id_user){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_user);  
    	$this->id_user = $id_user;
	 }
	 
	 public function getName(){
	    return $this->name;
	 }
	 
	 public function setName($name){
	     parent::setRegister();	
		 $this->name = $name;
	 
	 }
	  public function getEmail(){
	    return $this->email;
	 }
	 
	 public function setEmail($email){
	     parent::setRegister();	
		 $this->email = $email;
	 
	 }
	  public function getLogin(){
	    return $this->login;
	 }
	 
	 public function setLogin($login){
	     parent::setRegister();	
		 $this->login = $login;
	 
	 }
	 public function getPassword(){
	    return $this->password;
	 }
	 
	 public function setPassword($password){
	     parent::setRegister();	
		 $this->password = $password;
	 
	 }
	  public function getId_group(){
	    return $this->id_group;
	 }
	 
	 public function setId_group($id_group){
	     parent::setRegister();	
		 $this->id_group = $id_group;
	 
	 }
	  public function getUser_image(){
	    return $this->user_image;
	 }
	 
	 public function setUser_image($user_image){
	     parent::setRegister();	
		 $this->user_image = $user_image;
	 
	 }
	   public function getVoice_password(){
	    return $this->voice_password;
	 }
	 
	 public function setVoice_password($voice_password){
	     parent::setRegister();	
		 $this->voice_password = $voice_password;
	 
	 }
	 
	 
	 
	
	 
	  
  
  
  
  
  }


?>