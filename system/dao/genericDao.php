 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
  require_once('base.php');
  require_once('config.php');
   
 

?>


  
<?php
    
   class genericDao{
    
   
	
	
       
   	public function openConnect(){
		   
		  
          
			$username_config = Config::getLogin();
            $password_config = Config::getPassword();
            $database_config = Config::getDatabase();
            $hostname_config = Config::getHost();
			
		 

            if($this->getType() == "mysql"){
  		       $conn = mysqli_connect("$hostname_config", "$username_config", "$password_config","$database_config") or die("Error " . mysqli_error($conexao));
			}
			
           
		    return $conn;
	 }   
     public function closeConnect($conn){
	       
		   if($this->getType() == "mysql"){
		      $conn->close();
		   }
	 }

     public function commit($conn){
	       
		   if($this->getType() == "mysql"){
		      $conn->commit();
		   }
	  }
	   
	 public function autocommit($conn,$flag){
	       
		   if($this->getType() == "mysql"){
		      $conn->autocommit(FALSE);
		   }
	 }
	   
	   

     public function rollback($conn){
	       
		   if($this->getType() == "mysql"){
		     $conn->rollback();
		   }
	 }	  	   
	   
     public function getType(){
	       
		  $config = new Config();
  	      return $config->getType();
	 }	 

     public function executeQuery($conn,$query){
	       
		  
		   if($this->getType() == "mysql"){	     
		       $result = $conn->query($query);
		   }
		  
		   return $result;
	 }
	   
	   	   

	  public function insert($object){
		  
		   try{		 
                	
				 $query = $object->buildInsert($object);
				 $conn = $this->openConnect();
				 $this->autocommit($conn,false);
				 $result = $this->executeQuery($conn,$query);
				 $result =  mysqli_insert_id($conn);
				
			
				 
				 $this->commit($conn);
				 return $result;
			  } 
			  catch (Exception $e) {
			     throw new Exception($e->getMessage());
			  }
		
		}
		
		
		public function update($object,$accept="key"){
		    
			 try{
				 $query = $object->buildUpdate($object);
				 $conn = $this->openConnect();
				 $this->autocommit($conn,false);
				 $result = $this->executeQuery($conn,$query);
				 $this->commit($conn);
				 
				 return $result;
			  } 
			 catch (Exception $e) {
			     throw new Exception($e->getMessage());
			  }
		
		}
		
		public function delete($object,$accept="key"){
		    
           try{			
				 $query = $object->buildDelete($object,$accept);
				 $conn = $this->openConnect();
				 $this->autocommit($conn,false);
				 $result = $this->executeQuery($conn,$query);
				 $this->commit($conn);
			    
				 return $result;
			 } 
			 catch (Exception $e) {
			     throw new Exception($e->getMessage());
			  }
		
		}
		
		public function getAll($object,$accept="all"){
		    
			try{
				 
				 
				 $query = $object->buildSelect($object,$accept);
				 $conn = $this->openConnect();
				 $this->autocommit($conn,false);
				 $result = $this->executeQuery($conn,$query);
				 $this->commit($conn);
				
								
				 return $result;
			 } 
			  catch (Exception $e) {
			     throw new Exception($e->getMessage());
			  }
		
		}
		
		public function get($object,$accept="all"){
		    
           try{			
				$query = $object->buildSelect($object,$accept);
				 $conn = $this->openConnect();
				 $this->autocommit($conn,false);
				 $result = $this->executeQuery($conn,$query);
				
				 $this->commit($conn);
			 
			     return $result;
		      } 
			 catch (Exception $e) {
			     throw new Exception($e->getMessage());
			  }
		}
		
		public function getById($object,$accept="key"){
		    
			 try{
				 $query = $object->buildSelect($object);
				 $conn = $this->openConnect();
				 $this->autocommit($conn,false);
				 $result = $this->executeQuery($conn,$query);
				 $this->commit($conn);
				 
				 return $result;
			 } 
			catch (Exception $e) {
			     throw new Exception($e->getMessage());
			  }
		
		}
		public function executeResultset($query){
		    
			 try{
				
				 $conn = $this->openConnect();
				 $this->autocommit($conn,false);
				 $result = $this->executeQuery($conn,$query);
				 $this->commit($conn);
				 
				 return $result;
			 } 
			catch (Exception $e) {
			     throw new Exception($e->getMessage());
			  }
		
		}
		public function executeQueryByString($query){
	       
		     try{
				
				
				 $conn = $this->openConnect();
				 $this->autocommit($conn,false);
				 $result = $this->executeQuery($conn,$query);
				 $this->commit($conn);
				 
				 return $result;
			 } 
			catch (Exception $e) {
			     throw new Exception($e->getMessage());
			  }
	     }
		 /*-----------------------batch---------------------*/
		 public function insertBatch($objectBatch){
		  
		   try{		 
                	
				
				 foreach ($objectBatch as $object) {
					
					 $query = $object->buildInsert($object);
					 $conn = $this->openConnect();
					 $this->autocommit($conn,false);
					
					 $result = $this->executeQuery($conn,$query);
					
					 if (!empty($object->getKeyGenerator())){
						$resultset = $this->executeQuery($conn,$object->buildMaxId($object, $object->getKeyGenerator()[0]));
						while ($row = $resultset->fetch_array()){
						   $result = $row[0]; 
						}
					 }
					 $this->commit($conn);
				 }
				
				
				 
				 
				 return $result;
			  } 
			  catch (Exception $e) {
			     throw new Exception($e->getMessage());
			  }
		
		}
		public function updateBatch($objectBatch,$accept="all"){
		    
			 try{
				  foreach ($objectBatch as $object) {
					 $query = $object->buildUpdate($object,$accept);
					 $conn = $this->openConnect();
					 $this->autocommit($conn,false);
					 $result = $this->executeQuery($conn,$query);
					 $this->commit($conn);
				
				   }
				  
				 return $result;
			  } 
			 catch (Exception $e) {
			     throw new Exception($e->getMessage());
			  }
		
		}
		public function deleteBatch($objectBatch,$accept="all"){
		    
           try{	
				 foreach ($objectBatch as $object) {		   
					 $query = $object->buildDelete($object,$accept);
					 $conn = $this->openConnect();
					 $this->autocommit($conn,false);
					 $result = $this->executeQuery($conn,$query);
					  $this->commit($conn);
					 
				 }
				
				
				 return $result;
			 } 
			 catch (Exception $e) {
			     throw new Exception($e->getMessage());
			  }
		
		}
		
 
		    
   
   
   
   
   }
   
  

?>