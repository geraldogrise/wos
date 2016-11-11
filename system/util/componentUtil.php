 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>

<?php
require_once('path.php');
require_once($include_path.'/system/model/Tb_fonts.php');
require_once($include_path.'/system/model/Tb_fonts_files.php');
require_once($include_path.'/system/model/Tb_group.php');
require_once($include_path.'/system/model/Tb_group_user.php');
require_once($include_path.'/system/model/Tb_user.php');
require_once($include_path.'/system/dao/genericDao.php');
require_once($include_path.'/system/directory/json.php');


 class componentUtil{
   
   public function getFontsFiles($id_font,$dire){
   
      $fonts = new Tb_fonts;
	  $files = new Tb_fonts_files();
	  $json = new json_files();
	 
      $array_fonts= array();
	  $array_files= array();
	  $dao = new genericDao();
	  
	  $files->setId_fonts($id_font);
	  $fonts->setId_fonts($id_font);
	  $resultset_files = $dao->getAll($files);
	  $resultset = $dao->getAll($fonts);
	        $html= "";
	        while($row = $resultset->fetch_array())
			{
				   
				    $fonts = new Tb_fonts();
				    $fonts->setId_fonts($row["id_fonts"]);
					$fonts->setName(utf8_encode($row["name"]));
					$fonts->setType($row["type"]);
				    array_push($array_fonts,$fonts);
					
					 
			}
			$values = array();
			
			while($row = $resultset_files->fetch_array())
			{
				   
				  
					;
				    array_push($values,$row["file"]);
					
					 
			}
			
			
			
			$html = $json->createFontsComponent($array_fonts,$dire,$values);
			 
			  
             return $html;
   
   }
	public function getSelectUsers($file,$porcentagem){
			   $group = new Tb_group;
			   $group_user = new Tb_group_user();
			   $user = new Tb_user();
			   $json = new json_files();
			  			   
			   $array_groups= array();
			   $array_grp_users= array();
			   $array_users= array();
			   
			 
			  $dao = new genericDao();
			  $resultset_group = $dao->getAll($group);
			  $resultset = $dao->getAll($group_user);
			  $resultset_user = $dao->getAll($user);
			  
			  $html = "";
			  
			  
			 
				  
			
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
                 $values=$this->getArrayUsers($file);
				 $html = $json->createUsersComponent($array_groups,$array_users,$array_grp_users,$values);
				 
			  return $html;

	 }
	 
	 public function getArrayUsers($pathfile){
	 
	          $array_grpuser= array();
	           $model_group = new Tb_grpusers_files();
			  
			   
			  if(isset($pathfile) && $pathfile != ""){
		          $model_group->setPathfile($pathfile);
			    }
			    $dao = new genericDao();
			   $resultset_grpuser = $dao->getAll($model_group);		   
			   while($row = $resultset_grpuser->fetch_array()){
							 array_push( $array_grpuser  ,$row['id_user']."_".$row['id_group']);
							
				}
               return $array_grpuser;
	 
	 
	 
	 }
	
		
	
 }
 
 
?> 
