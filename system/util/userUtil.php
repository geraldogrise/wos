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
require_once($include_path.'/system/dao/genericDao.php');

 class userUtil{
   
	
	public function insertBatchGroup($input,$id_user){
		$array_camp = array();
		$dao = new genericDao();
		$array_adicionados = explode(",",$input);
		foreach($array_adicionados as $value){
			$grp = new Tb_group_user();
			$grp->setId_group_user('auto');
			$grp->setId_user($id_user);
			$grp->setId_group($value);
			array_push($array_camp,$grp);
		}
		if(sizeof($array_camp)> 0){
			$dao->insertBatch($array_camp);
	    }
			 
	} 
	public function deleteBatchGroup($input,$id_user){
		$array_camp = array();
		$dao = new genericDao();
		$array_adicionados = explode(",",$input);
		foreach($array_adicionados as $value){
			$grp = new Tb_group_user();
			$grp->setId_user($id_user);
			$grp->setId_group($value);
			array_push($array_camp,$grp);
		}
		if(sizeof($array_camp)> 0){
			$dao->deleteBatch($array_camp);
		}
			 
	}
    public function getGrpUsers($id_program){
		     $grp_users = "";
			 $dao = new genericDao();
			 $model_group = new Tb_programs_grpusers();
			 $model_group->setId_program($id_program);
			 
			 $resultset_grpusers = $dao->getAll($model_group);
			 $separator = "";
			 
			  while($row = $resultset_grpusers->fetch_array()){
			   
				 $grp_users .=  $separator.$row['id_group']."_".$row['id_user'];
			     $separator = ",";
			  } 
			  return $grp_users;
	}
    public function getArrayGrpUsers($id_program){
		     $array_grpusers = array();
			 $dao = new genericDao();
			 $model_group = new Tb_programs_grpusers();
			 $model_group->setId_program($id_program);
			 
			 $resultset_grpusers = $dao->getAll($model_group);
			
			 
			  while($row = $resultset_grpusers->fetch_array()){
			    array_push( $array_grpusers  ,$row['id_group']."_".$row['id_user']);
				
			  } 
			  return $array_grpusers;
	} 	 	
	
 }
 
 
?> 
