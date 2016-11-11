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
require_once($include_path.'/system/directory/directory.php');
 class json_files{
   
	    public	function createUsersComponent($array_grp,$array_user,$array_grp_user,$values)
		{
            $html="";
			$new_group = [];
			$html="";
			 foreach ($array_grp as $ele_grp){
			      $grupo = $ele_grp->getId_group();
				  $name_group = $ele_grp->getName();
			  
                
			   	 $html.= '{"type": "folder","cells": ["'.$name_group.'"],"content":[';
				 $separator_user = ""; 
				 foreach($array_grp_user as $ele_grp_user){
				    
				    if( $grupo ==$ele_grp_user->getId_group() ){
					    
					   $id_user = $ele_grp_user->getId_user();
					   foreach($array_user as $ele_user){
					       if($id_user == $ele_user->getId_user()){
						        $separator_user =",";
								$info = $ele_user->getId_user()."_".$grupo;
								$html.=  ' {"type": "item",';
								$html.=  '"cells": ["'.$ele_user->getLogin().'"],';
								//$html.='"selected": true,';
								if(in_array($info, $values)){
								  $html.='"selected": true,';
								}
                                $html.= '"payload": {"id": "'.$info.'"}}'.$separator_user ;
						       
						   }   
					   
					   }
					}
					
				 }
				 
				  $html .= "]},";
				   
			    
			 }
			
			 
			$html= str_replace("},]","}]",$html);
			
			echo $html;

		}
		
		public	function createFontsComponent($array_fonts,$dire,$values)
		{
            $html="";
			$array_files = array();
			$dir = new php_directory();
			if(sizeof($array_fonts)==0){
			   $dire.="";
			}
			$dire = str_replace("#","/",$dire);
			$array_files  = $dir->returnDirectory($dire,"eot,woff,woff2,svg,ttf");
			
			if(sizeof($array_fonts)>0){
			
                  			
					foreach ($array_fonts as $ele_font){
						  $fonte = $ele_font->getId_fonts();
						  $name_font = $ele_font->getName();
					  
						
						 $html.= '{"type": "folder","cells": ["'.$name_font.'"],"content":[';
						 $separator_user = ""; 
						 
						
							 foreach($array_files as $ele_file){
								
							   
								   
									$separator_file =",";
									
									$html.=  ' {"type": "item",';
									$html.=  '"cells": ["'.$ele_file.'"],';
											
									if(in_array($ele_file, $values)){
										 $html.='"selected": true,';
									}
									$html.= '"payload": {"id": "'.$ele_file.'"}}'.$separator_file ;
								  
								  
								 
								}
						 
							
						 
						 
						  $html .= "]},";
						   
						
					 }
			 }
			  else{
			    $html.="\"type\": \"folder\",\"content\": [";		
			      foreach($array_files as $ele_file){
								
					$separator_file =",";
					$html.=  ' {"type": "item",';
					$html.=  '"cells": ["'.$ele_file.'"],';
						if(in_array($ele_file, $values)){
							 $html.='"selected": true,';
						}
					$html.= '"payload": {"id": "'.$ele_file.'"}}'.$separator_file ;
								  
								  
								 
				  }
				   $html.="]";
			  
			  }
			 
			$html= str_replace("},]","}]",$html);
			
			echo $html;

		}
    }
 
 


?>