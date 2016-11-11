 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php

require_once("path.php");
require_once($include_path.'/system/model/Tb_group.php');
require_once($include_path.'/system/model/Tb_country.php');
 class TreeView{
   
  
		
		function createTreeView($array,$parent,$array_grpuser)
		{
             $html="";
			
			  foreach ($array as $ele)
			  {
				
				$currentParent = $ele->getId_group_pai();
			    $value = $ele->getId_group();
			    $name = $ele->getName();
                 if($currentParent == $parent){
				    $html.=  "<optgroup label='{$name}'>";
					
				 }
				
				  foreach ($array as $ele_fil){
				     $selected="";
					 if($value == $ele_fil->getId_group_pai()){
					    $value_fil= $ele_fil->getId_group();
					    $name= $ele_fil->getName();
					
						if (in_array($value_fil,$array_grpuser)) { 
						   $selected = "selected";
						}
						$html.=  "<option value='{$value_fil}' {$selected}>{$name}</option>";
						
					 }
				  }
					
				 
				 if($currentParent == $parent){
				 
				   $html.=  "</optgroup>";
				 }

				
				

				
			  }
			  return $html;

		}
		function createProgramTreeView($array_grp,$array_prog,$array_program_grp)
		{
             $html="";
			
			  foreach ($array_grp as $ele)
			  {
				
				$id_grp_program = $ele->getId_grp_program();
			    $name = $ele->getName();
                
				    $html.=  "<optgroup label='{$name}'>";
					
				 
				
				  foreach ($array_prog as $ele_fil){
				     $selected="";
					 if($id_grp_program == $ele_fil->getId_grp_program()){
					    $value_fil= $ele_fil->getId_program();
					    $name= $ele_fil->getName();
					
						if (in_array($value_fil,$array_program_grp)) { 
						   $selected = "selected";
						}
						$html.=  "<option value='{$value_fil}' {$selected}>{$name}</option>";
						
					 }
				  }
					
				 
				
				 
				   $html.=  "</optgroup>";
				 

				
				

				
			  }
			  return $html;

		}
		function createUsersTreeView($array_grp,$array_user,$array_grp_user,$values)
		{
             $html="";
			 $new_group = [];
			  
			  
			foreach ($array_grp as $grp){
				 $id_group = $grp->getId_group();
				 $name_group = $grp->getName();
				 foreach ($array_grp_user as $ele){
					 $id_user = $ele->getId_user();
				     $id_group_ele = $ele->getId_group();
					 
					 if($id_group == $id_group_ele){
						  
					
						 
						  if(in_array($id_group_ele,$new_group) !=-1 || empty($new_group)){
						     array_push($new_group,$id_group_ele);
							 $html.=  "<optgroup label='{$name_group}'>";
						  }
						 
						 
						  foreach ($array_user as $ele_fil){
							 $selected="";
							 if($id_user == $ele_fil->getId_user()){
								$value_fil= $ele_fil->getId_user();
								$name= $ele_fil->getLogin();
								$vlr_grp_user = $id_group_ele."_".$value_fil;
							
								if (in_array($vlr_grp_user,$values)) { 
								   $selected = "selected";
								}
								$html.=  "<option data-left=\"<img src='images/no_photo.jpg'>\"  value='{$vlr_grp_user}' {$selected}>{$name}</option>";
								
							 }
						  }
							   
						  
						 
					 }
					 
					  if($id_group == $id_group_ele){
                         if(in_array($id_group_ele,$new_group) !=-1){
						     				  
						    $html.=  "</optgroup>";
						 }
						 
					 }
					
					 
				 }
				
				
			}
		
			  
			 
			  return $html;

		}
		function createCountryTreeView($array_continents,$array_country,$country)
		{
			$html="";
			
			foreach ($array_continents as $ele)
			{
				$id_continent = $ele;
				$name= $ele;
				$html.=  "<optgroup label='{$name}'>";
							
				foreach ($array_country as $ele_fil){
					$selected="";
					
					if($id_continent == $ele_fil->getContinent()){
						
						$value_fil= $ele_fil->getId_country();
						$name= $ele_fil->getName();
						if ($value_fil==$country) { 
							$selected = "selected";
						}
						$flag = str_replace(" ","_",$name);
						$flag = strtolower($flag);
						$html.=  "<option value='{$value_fil}' data-left=\"<img src='flags/{$flag}.png'>\" {$selected}>{$name}</option>";
								
					}
				}
							
				$html.=  "</optgroup>";
						 

						
			}
			return $html;
         }
				
	}

 
 


?>