 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
  include_once("../model/Tb_programs.php");
  include_once("../model/Tb_requirements.php");
  include_once("../dao/genericDao.php");
  $program = new Tb_programs();
  $require = new  Tb_requirements();
  
  $program->setId_program("auto");
  $program->setName("teste");
  $program->setId_grp_program(1);
  $program->setImagePath("teste.png");
  $program->setCallFunction("callTeste(1)");
  
  $dao = new genericDao();
  $result = $dao->insert($program);
  
  $arrayRequirements = array('<script src="programs/galleria/galleria.js"></script>',
                             '<link rel="stylesheet" href="programs/galleria/css/galleria.css" />',
							'<link rel="stylesheet" href="programs/galleria/galleria.classic.css" />',
							'controller/testeController.php','model/teste.php');

 foreach($arrayRequirements as $value){
 
   $require->setId_requirements("auto");
   $require->setName($value);
   $require->setId_program($result);
   $dao->insert($require);
 }							 
 
   
   
   
   
		
			
						 
						 
  


?>