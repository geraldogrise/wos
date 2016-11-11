 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
 $programs = new Tb_programs();
 $progUtil = new programUtil();
 $dao = new genericDao();
 $result_program = $dao->getAll($programs);
 $arrayId_program = $progUtil->getProgramByUser($_SESSION['user_system'],$_SESSION['group_user']);


 
  while($row = $result_program->fetch_array()){
	 
	  if(!in_array($row["id_program"], $arrayId_program)){
		  if($row["type"] !="system"){
			   include('programs/'.$row["class_program"].'/index.php');
		  
		  }else{
			 
			   include('system/programs/'.$row["class_program"].'/index.php');  
		  }
	  }
	 
	  
   }
?>










<?php //include('programs/viewer/index.php');?>
















