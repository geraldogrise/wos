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
require_once($include_path.'/system/model/Tb_programs_grpusers.php');
require_once($include_path.'/system/model/Tb_grpusers_files.php');
require_once($include_path.'/system/dao/genericDao.php');

 class programUtil{
   
	
	public function insertBatchGroupUsers($input,$id_program){
		$array_camp = array();
		$dao = new genericDao();
		$array_adicionados = explode(",",$input);
		foreach($array_adicionados as $value){
			$grp = new Tb_programs_grpusers();
			$grp->setId_program_grpusers('auto');
			$grp->setId_program($id_program);
			$grp->setId_user(explode("_",$value)[1]);
			$grp->setId_group(explode("_",$value)[0]);
			array_push($array_camp,$grp);
		}
		if(sizeof($array_camp)> 0){
			$dao->insertBatch($array_camp);
	    }
			 
	} 
	public function deleteBatchGroupUsers($input,$id_program){
		$array_camp = array();
		$dao = new genericDao();
		$array_adicionados = explode(",",$input);
		foreach($array_adicionados as $value){
			$grp = new Tb_programs_grpusers();
			$grp->setId_program($id_program);
			$grp->setId_user(explode("_",$value)[1]);
			$grp->setId_group(explode("_",$value)[0]);
			array_push($array_camp,$grp);
		}
		if(sizeof($array_camp)> 0){
			$dao->deleteBatch($array_camp);
		}
			 
	}
	public function getProgramByUser($user,$group){
	   $arrayPrograms = array();
	   $dao = new genericDao();
	  
	   $grp = new Tb_programs_grpusers();
	   $grp->setId_user(intval($user));
	   $grp->setId_group(intval($group));
	  
       $result_program = $dao->getAll($grp);
	   while($row = $result_program->fetch_array()){
	       array_push($arrayPrograms,$row["id_program"]);
	   }
	   return $arrayPrograms;
	   
	
	}
	public function getFileByUser($user,$group){
	   $arrayFiles = array();
	   $dao = new genericDao();
	  
	   $grp = new Tb_grpusers_files();
	   $grp->setId_user(intval($user));
	   $grp->setId_group(intval($group));
	  
       $result_program = $dao->getAll($grp);
	   while($row = $result_program->fetch_array()){
	       array_push($arrayFiles,$row["pathfile3"]);
	   }
	   return $arrayFiles;
	   
	
	}
   
	
 }
 
 
?> 
