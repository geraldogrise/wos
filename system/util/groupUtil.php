 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>


<?php

require_once('path.php');
require_once($include_path.'/system/model/Tb_group_user.php');
require_once($include_path.'/system/model/Tb_programs_group.php');
require_once($include_path.'/system/dao/genericDao.php');

 class groupUtil{
   
	
	public function insertBatchGroupProgram($input,$id_program){
		$array_camp = array();
		$dao = new genericDao();
		$array_adicionados = explode(",",$input);
		foreach($array_adicionados as $value){
			$grp = new Tb_programs_group();
			$grp->setId_program_group('auto');
			$grp->setId_program($id_program);
			$grp->setId_group($value);
			array_push($array_camp,$grp);
		}
		if(sizeof($array_camp)> 0){
			$dao->insertBatch($array_camp);
	    }
			 
	} 
	public function deleteBatchGroupProgram($input,$id_program){
		$array_camp = array();
		$dao = new genericDao();
		$array_adicionados = explode(",",$input);
		foreach($array_adicionados as $value){
			$grp = new Tb_programs_group();
			$grp->setId_program($id_program);
			$grp->setId_group($value);
			array_push($array_camp,$grp);
		}
		if(sizeof($array_camp)> 0){
			$dao->deleteBatch($array_camp);
		}
			 
	}
	public function getGroups($id_program){
		     $grp_program = "";
			 $dao = new genericDao();
			 $model_group = new Tb_programs_group();
			 $model_group->setId_program($id_program);
			 
			 $resultset_grpprog = $dao->getAll($model_group);
			 $separator = "";
			 
			  while($row = $resultset_grpprog->fetch_array()){
			  
				 $grp_program .=  $separator.$row['id_group'];
			     $separator = ",";
			  } 
			  return $grp_program;
	} 
	public function getArrayGroups($id_program){
		     
			 $dao = new genericDao();
			 $array_grpprog = array();
			 $model_group = new Tb_programs_group();
			 $model_group->setId_program($id_program);
			 
			 $resultset_grpprog = $dao->getAll($model_group);
			
			 
			  while($row = $resultset_grpprog->fetch_array()){
			     array_push( $array_grpprog  ,$row['id_group']);
				
			  } 
			  return $array_grpprog;
	} 
	
 }
 
 
?> 
