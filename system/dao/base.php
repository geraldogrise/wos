 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php

class base{

	private $propArray = array();
	private $keyArray  = array();
	private $keyGenerator  = array();
	private $paginator = "";
	
	public function setRegister() {
		$backtrace = debug_backtrace();
		$prop = substr($backtrace[1]['function'],3);
		$prop = strtolower($prop);
		$this->setPropArray($prop);
		
		
	}
	
	public function setGeneratorValue($id) {
		
		if($id == "auto"){
			$backtrace = debug_backtrace();
			$prop = substr($backtrace[1]['function'],3);
			$prop = strtolower($prop);
			$this->setKeyGenerator($prop);
		}
		
		
	}
	public function setKey() {
		$backtrace = debug_backtrace();
		$prop = substr($backtrace[1]['function'],3);
		$prop = strtolower($prop);
		$this->setKeyArray($prop);
		
	}
	
	public function getPropArray(){
	
	   return $this->propArray;
	}
	public function setPropArray($propArray){
	
	    
		$this->propArray[] = $propArray;
				
	}
	
	public function getKeyArray(){
	
	   return $this->keyArray;
	}
    public function setKeyArray($keyArray){
	
	    
		$this->keyArray[] = $keyArray;
		
	}
	
	public function getKeyGenerator(){
	
	   return $this->keyGenerator;
	}
	public function setKeyGenerator($keyGenerator){
	
	  
		$this->keyGenerator[] = $keyGenerator;
				
	}
	public function getPaginator(){
	    $this->paginator;
	
	}
	public function setPaginator($inicio,$total){
	   
	    $this->paginator = $inicio.",".$total;
	}
	
	 public function buildSelect($object,$accept="key"){
	   $separator="";
	   $class_name = strtolower(get_class($object));
	   $ref_class = new ReflectionClass($class_name);
	   $fields = "";
	   $query ="";
	   
	   if($this->paginator == ""){
	      $this->paginator="0,100000";
	   }
	 
	   foreach($ref_class->getProperties() as $propriedade)
	   {
		   $fields .= $separator."". $propriedade->getName();
		   $separator=",";
	   }
	   $criteria = $this->getCriteria($object,$accept);
	   $query = "SELECT {$fields} FROM {$class_name} WHERE 1 = 1 {$criteria} limit {$this->paginator}" ;
	   
	   return $query;
	}
	
	public function buildDelete($object,$accept="key"){
	   $separator="";
	   $class_name = strtolower(get_class($object));
	   $ref_class = new ReflectionClass($class_name);
	   $fields = "";
	   $query ="";
	   $criteria = $this->getCriteria($object,$accept);
	   $query = "DELETE FROM  {$class_name} WHERE 1 = 1 {$criteria}";
	   return $query;
	}
	
	public function buildInsert($object){
	   $separator="";
	   $class_name = strtolower(get_class($object));
	   $ref_class = new ReflectionClass($class_name);
	   $fields = "";
	   $values = "";
	   $query ="";
     
	  foreach($ref_class->getProperties() as $propriedade)
	   {
           
		 	   
          
		  if($this->is_key($propriedade->getName()) && $this->is_keyGenerator($propriedade->getName())){
			    $values .=$separator. "''";//$separator."".$this->buildMaxId($object,$propriedade->getName());	
		  }
		  else{
		    $values .= $separator."". $this->getValue($object,$propriedade->getName());	
		  }
		   
		   $fields .= $separator."".$propriedade->getName();
		   $separator=",";
	   }
	   $query = "INSERT INTO {$class_name} ({$fields}) VALUES ({$values});";
	   return $query;
	}
	
	public function buildUpdate($object,$accept="key"){
	   $separator="";
	   $class_name = strtolower(get_class($object));
	   $ref_class = new ReflectionClass($class_name);

	   $fields = "";
	   $query ="";
	  
	   foreach($ref_class->getProperties() as $propriedade)
	   {
		  
		  if($this->checkFieldsSet($propriedade->getName()) && !$this->is_key($propriedade->getName())){
			   $fields .= "{$separator}{$propriedade->getName()} = {$this->getValue($object,$propriedade->getName())}";
			   $separator=",";
		   }
	   }
	  
	   $criteria = $this->getCriteria($object,$accept);
	   $query = "UPDATE {$class_name} SET {$fields} WHERE 1 = 1 {$criteria}" ;
	   return $query;
	}
	
	function buildMaxId($object,$prop){
	    
		 $class_name = strtolower(get_class($object));
	      $query = "SELECT MAX({$prop}) from {$class_name}" ;
		  return $query;
	}
	
	function getValue($object,$prop){
	
	    $class_name = strtolower(get_class($object));
		$value = "null";
		$reflectionClass = new ReflectionClass($class_name);
		$reflectionProperty = $reflectionClass->getProperty($prop);
		$reflectionProperty->setAccessible(true);
		if(!is_null($reflectionProperty->getValue($object))){
		    $value = $reflectionProperty->getValue($object);
			 $value = $this->setString($value);
		}
		return $value;
	}
	function getCriteria($object,$accept){
	   $criteria ="";
	   $class_name = strtolower(get_class($object));
	   $ref_class = new ReflectionClass($class_name);
	   $separator = "and";
	   
	   
	   foreach($ref_class->getProperties() as $propriedade)
	   {
		   if($accept == "key"){
			   if($this->checkFieldsSet($propriedade->getName()) && $this->is_key($propriedade->getName())){
				   $criteria .= " {$separator} {$propriedade->getName()} = {$this->getValue($object,$propriedade->getName())}";
				   $separator="and";
			   }
		   }
		   else if($accept == "all"){
		       if($this->checkFieldsSet($propriedade->getName()) ){
				   $criteria .= " {$separator} {$propriedade->getName()} = {$this->getValue($object,$propriedade->getName())}";
				   $separator="and";
			   }
		   }
	   }
	   return $criteria;
	
	}
	public function checkFieldsSet($prop){
	  
	   $array_set = $this->getPropArray();
	 
	    if(in_array(strtolower($prop), $array_set)){
		   return 1;
		}
		else{
		  return 0;
		}
	}
	function setString($value){
	  
	  	 if(is_string($value) && $value !="null"){
		    $value = "'{$value}'";
			
		 } 
		
		
		 return $value;
	}
	
	function is_key($prop){
	  
	  	
	    $array_set = $this->getKeyArray();
		
	    if(in_array(strtolower($prop), $array_set)){
		   return 1;
		}
		else{
		  return 0;
		}
	}
	
	function is_keyGenerator($prop){
	  
	  	
	    $array_set = $this->getKeyGenerator();
		
	    if(in_array(strtolower($prop), $array_set)){
		   return 1;
		}
		else{
		  return 0;
		}
	}
	
	

	
	
	
}

?>




