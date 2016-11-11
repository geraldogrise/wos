<?php 
class Config{
       private static $host= "localhost";
	   private static $login="root";
	   private static $password="";
	   private static $database="wos";
	   private $type="mysql";
       public static function getHost(){
	        return self::$host;
	   }
       public static function getDatabase(){
	        return self::$database;
	   }
       public static function getLogin(){
	        return self::$login;
	   }
       public static function getPassword(){
	        return self::$password;
	   }
       public function getType(){
	        return $this->type;
	   }		   
 }            
?>