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
  class Tb_general extends base{
  
     private $id_general;
	 private $flag_login_type;
	 private $flag_login_encrypt;
	 private $number_of_bits;
	 private $number_attempts;
	 private $flag_password_force;
	 private $flag_enable_question;
	 private $flag_enable_captcha;
	 private $flag_captcha_type;
	 private $seq_update;
	 private $seq_optional;
	 private $app_path;
	
	
		 
	 
	 public function getId_general(){
	    return $this->id_general;
	 }
	 
	 public function setId_general($id_general){
	    parent::setKey();
		parent::setRegister();
		parent::setGeneratorValue($id_general);  
    	$this->id_general = $id_general;
	 }
	 
	 public function getFlag_login_type(){
	    return $this->flag_login_type;
	 }
	 
	 public function setFlag_login_type($flag_login_type){
	     parent::setRegister();	
		 $this->flag_login_type = $flag_login_type;
	 
	 }
	 
	  public function getFlag_login_encrypt(){
	    return $this->flag_login_encrypt;
	 }
	 
	 public function setFlag_login_encrypt($flag_login_encrypt){
	     parent::setRegister();	
		 $this->flag_login_encrypt = $flag_login_encrypt;
	 
	 }
	  public function getNumber_of_bits(){
	    return $this->number_of_bits;
	 }
	 
	 public function setNumber_of_bits($number_of_bits){
	     parent::setRegister();	
		 $this->number_of_bits = $number_of_bits;
	 
	 }
	  public function getNumber_attempts(){
	    return $this->number_attempts;
	 }
	 
	 public function setNumber_attempts($number_attempts){
	     parent::setRegister();	
		 $this->number_attempts = $number_attempts;
	 
	 }
	 public function getFlag_password_force(){
	    return $this->flag_password_force;
	 }
	 
	 public function setFlag_password_force($flag_password_force){
	     parent::setRegister();	
		 $this->flag_password_force = $flag_password_force;
	 
	 }
	 
	 
	  public function getFlag_enable_question(){
	    return $this->flag_enable_question;
	 }
	 
	 public function setFlag_enable_question($flag_enable_question){
	     parent::setRegister();	
		 $this->flag_enable_question = $flag_enable_question;
	 
	 }
	 
	  public function getFlag_enable_captcha(){
	    return $this->flag_enable_captcha;
	 }
	 
	 public function setFlag_enable_captcha($flag_enable_captcha){
	     parent::setRegister();	
		 $this->flag_enable_captcha = $flag_enable_captcha;
	 
	 }
	 
	 public function getFlag_captcha_type(){
	    return $this->flag_captcha_type;
	 }
	 
	 
	public function setFlag_captcha_type($flag_captcha_type){
	     parent::setRegister();	
		 $this->flag_captcha_type = $flag_captcha_type;
	}
	
	 public function getSeq_update(){
	    return $this->seq_update;
	 }
	 
	 
	public function setSeq_update($seq_update){
	     parent::setRegister();	
		 $this->seq_update = $seq_update;
	}
	
	 public function getSeq_optional(){
	    return $this->seq_optional;
	 }
	 
	 
	public function setSeq_optional($seq_optional){
	     parent::setRegister();	
		 $this->seq_optional = $seq_optional;
	}
	public function getApp_path(){
	    return $this->app_path;
	 }
	 
	public function setApp_path($app_path){
	     parent::setRegister();	
		 $this->app_path = $app_path;
	}
	 
	
	 
	  
  
  
  
  
  }


?>