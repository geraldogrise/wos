 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php

 require_once("path.php");
require_once($include_path.'/system/model/Tb_programs.php');
require_once($include_path.'/system/model/Tb_grp_program.php');
require_once($include_path.'/system/dao/genericDao.php');
require_once($include_path.'/system/util/startmenuUtil.php');
require_once($include_path.'/system/util/programUtil.php');
 
  if(isset($_POST["action"]) && $_POST["action"] == "listPrograms"){
          $programs = array();
		   
		   $html="";
		   try 
		   {    
		           $progUtil = new programUtil();
                   $arrayId_program = $progUtil->getProgramByUser($_POST['id_user'],$_POST['id_group']);
			   
				    $dao = new genericDao();
					$query = "SELECT tprog.name as program,imagePath,tgrp.name as grupo,tgrp.priority as priority,tprog.callFunction as function,tprog.id_program as id_program";
					$query .="         FROM `tb_programs` as tprog inner join `tb_grp_program` as tgrp";  
                    $query .="         on tprog.id_grp_program = tgrp.id_grp_program WHERE 1=1 order by priority";
 
                   
					$resultset = $dao->executeResultset($query);
					
					
					 while($row = $resultset->fetch_array()){
						 
						$item= array("program"=>$row["program"], "imagePath"=>$row["imagePath"], 
						       "group"=>$row["grupo"],"priority"=>$row["priority"],"function"=>$row["function"],"id_program"=>$row["id_program"]);
						 array_push($programs,$item);
	  
					 }
					 $type = $_POST["type"];
					 $util = new startmenuUtil();
                       		if($type == "menu"){
							   $util->createMenuItemHide($programs,$arrayId_program);
							}else if($type== "submenu"){
							    $util->createMenuItem($programs,$arrayId_program);
							}			 
					
					  
                  
					  
		    } catch (Exception $e) {
		     
			      $html = $e->getMessage();
		   
			   
				
			
		   
		   }
		    echo $html;
			   
   }
   
   ?>