 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php

require_once("path.php");
require_once($include_path.'/system/model/Tb_country.php');
require_once($include_path.'/system/model/Tb_group.php');
require_once($include_path.'/system/model/Tb_grp_program.php');
require_once($include_path.'/system/model/Tb_group_user.php');
require_once($include_path.'/system/model/Tb_programs.php');
require_once($include_path.'/system/model/Tb_user.php');
require_once($include_path.'/system/dao/genericDao.php');
require_once($include_path.'/system/directory/treeview.php');

 
class ComponentController{
    
	
	 public function getMultipleGroups($nome,$tamanho,$array_grpuser,$porcentagem){
			   $group = new Tb_group();
			   $treeview = new  TreeView();
			   $array_group= array();
			   
			 
			  $dao = new genericDao();
			  $resultset = $dao->getAll($group);
			  
			  $html = "";
			  $selected = "";
			  $unidade = "px";
				 if($porcentagem){
					 
					 $unidade = "%";
				 }
				  
			
			   
				 while($row = $resultset->fetch_array())
				{
				   
				    $group = new Tb_group();
				    $group->setId_group($row["id_group"]);
					$group->setName(utf8_encode($row["name"]));
					$group->setId_group_pai($row["id_group_pai"]);
				    array_push($array_group,$group);
					
					 
				}
				
				
				
			  $html.="<select class='multipleSelect' style='width:".$tamanho.$unidade.";height:33px;' name='".$nome."'  multiple>";
			  $html.=$treeview->createTreeView($array_group,0,$array_grpuser);
			  $html.="</select>";
			  return $html;

	 }
	 public function getMultipleGroupsPrograms($nome,$tamanho,$array_grp_program,$porcentagem){
			   $group = new Tb_grp_program();
			   $programs = new Tb_programs();
			   $treeview = new  TreeView();
			   $array_group= array();
			   $array_programs= array();
			   
			 
			  $dao = new genericDao();
			  $resultset = $dao->getAll($group);
			  $resultset_prog = $dao->getAll($programs);
			  
			  $html = "";
			  $selected = "";
			  $unidade = "px";
				 if($porcentagem){
					 
					 $unidade = "%";
				 }
				  
			
			   
				 while($row = $resultset->fetch_array())
				{
				   
				    $group = new Tb_grp_program();
				    $group->setId_grp_program($row["id_grp_program"]);
					$group->setName(utf8_encode($row["name"]));
				    array_push($array_group,$group);
					
					 
				}
				 while($row = $resultset_prog->fetch_array())
				{
				   
				    $programs = new Tb_programs();
					$programs->setId_program($row["id_program"]);
				    $programs->setId_grp_program($row["id_grp_program"]);
					$programs->setName($row["name"]);
					
				    array_push($array_programs,$programs);
					
					 
				}
				
				
				
			  $html.="<select class='multipleSelect' style='width:".$tamanho.$unidade.";height:33px;' name='".$nome."'  multiple>";
			  $html.=$treeview->createProgramTreeView($array_group,$array_programs,$array_grp_program);
			  $html.="</select>";
			  return $html;

	 }
	  public function getMultipleUsers($nome,$tamanho,$values,$porcentagem){
			   $group = new Tb_group;
			   $group_user = new Tb_group_user();
			   $user = new Tb_user();
			  
			   $treeview = new  TreeView();
			   $array_groups= array();
			   $array_grp_users= array();
			   $array_users= array();
			   
			 
			  $dao = new genericDao();
			  $resultset_group = $dao->getAll($group);
			  $resultset = $dao->getAll($group_user);
			  $resultset_user = $dao->getAll($user);
			  
			  $html = "";
			  $selected = "";
			  $unidade = "px";
				 if($porcentagem){
					 
					 $unidade = "%";
				 }
				  
			
			    while($row = $resultset_group->fetch_array())
				{
				   
				    $group = new Tb_group();
				    $group->setId_group($row["id_group"]);
					$group->setName(utf8_encode($row["name"]));
				    array_push($array_groups,$group);
					
					 
				}
				 while($row = $resultset->fetch_array())
				{
				   
				    $group_user = new Tb_group_user();
					$group_user->setId_group_user($row["id_group_user"]);
				   	$group_user->setId_group($row["id_group"]);
					$group_user->setId_user($row["id_user"]);
				    array_push($array_grp_users,$group_user);
					
					 
				}
				 while($row = $resultset_user->fetch_array())
				{
				   
				    $user = new Tb_user();
					$user->setId_user($row["id_user"]);
				  	$user->setLogin($row["login"]);
				    array_push($array_users,$user);
					
					 
				}
				
				
				
			  $html.="<select class='multipleSelect' style='width:".$tamanho.$unidade.";height:33px;' name='".$nome."'  multiple>";
			  $html.=$treeview->createUsersTreeView($array_groups,$array_users,$array_grp_users,$values);
			  $html.="</select>";
			  return $html;

	 }
	 public function getSingleCountry($nome,$tamanho,$valor,$porcentagem){
			   $country = new Tb_country();
			   
			   $treeview = new  TreeView();
			   $array_country= array();
			   $array_continents= array("africa"=>"africa", "asia"=>"asia", "europe"=>"europe", "oceania"=>"oceania","south america"=>"south america","north america"=>"north america");
			   
			 
			  $dao = new genericDao();
			  $country->setStatus('A');
			  $resultset = $dao->getAll($country);
			 
			  
			  $html = "";
			  $selected = "";
			  $unidade = "px";
				 if($porcentagem){
					 
					 $unidade = "%";
				 }
				  
			
			   
				 while($row = $resultset->fetch_array())
				{
				   
				    $country = new Tb_country();
				    $country->setId_country($row["id_country"]);
					$country->setContinent($row["continent"]);
					$country->setName(utf8_encode($row["name"]));
				    array_push($array_country,$country);
					
					 
				}
				 
				
				
				
			  $html.="<select class='multipleSelect' style='width:".$tamanho.$unidade.";height:33px;' name='".$nome."'>";
			  $html.=$treeview->createCountryTreeView($array_continents,$array_country,$valor);
			  $html.="</select>";
			  return $html;

	 }
	


}



?>