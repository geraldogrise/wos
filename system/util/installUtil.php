 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
  require_once('path.php');
  include_once($include_path.'/system/model/Tb_programs.php');
  include_once($include_path.'/system/model/Tb_requirements.php');
  include_once($include_path.'/system/dao/genericDao.php');
  
class installUtil{
	  
	  
  
  
  public function insert($name,$id_grp_program,$image,$call_function,$folder,$serial,$arrayRequirements,$gip,$class_program,$type,$opentype){
	  
	    $program = new Tb_programs();
        $require = new  Tb_requirements();
		$program->setId_program("auto");
		$program->setName($name);
		$program->setId_grp_program($id_grp_program);
		$program->setImagePath($image);
		$program->setCallFunction($call_function);
		$program->setFolder($folder);
		$program->setSerial($serial);
		$program->setGip($gip);
		$program->setClass_program($class_program);
		$program->setType($type);
		$program->setOpentype($opentype);
		
		
		 $dao = new genericDao();
         $result = $dao->insert($program);
		 
		 foreach($arrayRequirements as $key => $value){
 
		   $require->setId_requirements("auto");
		   $require->setName($key);
		   $require->setRequire_type($value);
		   $require->setId_program($result);
		   $dao->insert($require);
		 }		
	  
	  
	  
  }
}
  
 
 

   






?>
