 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php


require_once("path.php");
require_once($include_path.'/system/model/Tb_control_elements.php');
require_once($include_path.'/system/model/Tb_grp_control.php');
require_once($include_path.'/system/model/Tb_fonts.php');
require_once($include_path.'/system/model/Tb_general.php');
require_once($include_path.'/system/model/Tb_settings.php');
require_once($include_path.'/system/model/Tb_country.php');
require_once($include_path.'/system/dao/genericDao.php');
require_once($include_path.'/system/util/controlUtil.php');

   $lang = "en-US";
 
   $settings = new Tb_settings();
   $country = new Tb_country();
   $model = new Tb_settings();
   
    if(isset($_POST["user_system_id"])){
		   $settings->setId_setting($_POST["user_system_id"]);
		   $dao = new genericDao();
		   $result = $dao->getAll($settings);
		  
		   
			while($row = $result->fetch_array()){
			  $id_country = $row["id_country"];	
			  $country->setId_country($id_country);
			 
			}
			if( $country->getId_country() !=null){
				$resultset_country = $dao->getById($country);
				while($row = $resultset_country->fetch_array()){
				  
				   $lang = str_replace("_","-",$row["language"]);
				}
			}
			
     }

include_once($include_path.'/system/languages/'.$lang.'/index.php');



 
  if(isset($_POST["action"]) && strtolower($_POST["action"]) == "listcontrols"){
          $controls = array();
		  
		   $html="";
		   try 
		   {    
		        $control = new Tb_control_elements(); 
		        $dao = new genericDao();
				  
			
				$query = "SELECT tctrl.name as control,imagePath,tgrp.name as grupo,tgrp.priority as priority,tctrl.callFunction as function";
				$query .="         FROM tb_control_elements as tctrl inner join `tb_grp_control` as tgrp";  
                $query .="         on tctrl.id_grp_control = tgrp.id_grp_control WHERE 1=1 order by priority";
               
                   
					$resultset = $dao->executeResultset($query);
				
				
				while($row = $resultset->fetch_array()){
						 
						$item= array("control"=>$row["control"], "imagePath"=>$row["imagePath"], 
						       "group"=>$row["grupo"],"priority"=>$row["priority"],"function"=>$row["function"]);
						 array_push($controls,$item);
	  
				}
				 $type = $_POST["type"];
                 $util = new controlUtil();
                           
				if($type == "list"){
				     $html = $util->createMenuItem($controls,$language);
				 
				 }			 
                  
					  
		    } catch (Exception $e) {
		     
			      $html = $e->getMessage();
		   
			   
				
			
		   
		   }
		    echo $html;
			   
   }
   
   else if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getsysteminfo"){
         
		   $html="";
		   
		   try 
		   {    
		        
				
				$util = new controlUtil();
				$html= $util->createSystemInfo($language);
				
                  
					  
		    } catch (Exception $e) {
		     
			      $html = $e->getMessage();
		   
			   
				
			
		   
		   }
		    echo $html;
			   
   }
    else if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getdisks"){
         
		   $html="";
		   
		   try 
		   {    
		         $show_progress = "N";
		         if(isset($_POST["showProgress"])){
				     $show_progress = "S";
				 }
				
				$util = new controlUtil();
				$html= $util->getDiskInfo($show_progress,$language);
				
                  
					  
		    } catch (Exception $e) {
		     
			      $html = $e->getMessage();
		   
			   
				
			
		   
		   }
		    echo $html;
			   
   }
   
   else if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getuserinfo"){
         
		   $html="";
		   
		   try 
		   {    
		        
				
		
				$html= "<h1 class='titulo lang_system_adjust_settings_computer'>".$language['system']['adjust_settings_computer']."</h1>";	
				$html.= "<div class='listview account_listview padding10' data-role='listview' id='lv1'>";
		  

				   $html.=   "<div class='list' onclick=\"callWindow(this,'useraccount','callWindowUserAccount','')\">";
				   $html.=   "     <img src='images/user_account.png' class='list-icon'>";
				   $html.=   "    <span class='list-title lang_system_user_account_settings'>".$language['system']['user_account_settings'] ."</span>";
				   $html.=   "</div>";	

                   $html.=   "<div class='list' onclick=\"callWindow(this,'groupaccount','callWindowGroupAccount','')\">";
				   $html.=   "     <img src='images/account_group.png' class='list-icon'>";
				   $html.=   "    <span class='list-title lang_system_user_group_account_settings'>".$language['system']['user_group_account_settings']."</span>";
				   $html.=   "</div>";		 				   
			  
		  
	            $html.=  "</div>";
		 

	
				
                  
					  
		    } catch (Exception $e) {
		     
			      $html = $e->getMessage();
		   
			   
				
			
		   
		   }
		    echo $html;
			   
   }
   
   else if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getlistwidgets"){
         
		   $html="";
		   $widgets = array();
		   
		   try 
		   {    
		         $control = new Tb_control_elements(); 
		        $dao = new genericDao();
				  
				
				$query = "SELECT prog.name as program,tgrp.name as grp_prog ,prog.callFunction as function,prog.imagePath as image";
				$query .="         FROM `tb_programs` as prog inner join `tb_grp_program` as tgrp";  
                $query .="          on tgrp.id_grp_program=prog.id_grp_program   WHERE 1=1 and prog.id_grp_program = 10 order by priority";
				
				$resultset = $dao->executeResultset($query);
				
				
				while($row = $resultset->fetch_array()){
						 
						$item= array("program"=>$row["program"], "group"=>$row["grp_prog"], 
						       "function"=>$row["function"], "image"=>$row["image"]);
						 array_push($widgets,$item);
	  
				}
                  $util = new controlUtil();
				  $html = $util->createMenuWidgets($widgets,$language);
		
					  
		    } catch (Exception $e) {
		     
			      $html = $e->getMessage();
		   
			   
				
			
		   
		   }
		    echo $html;
			   
   }
    else if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getlistprograms"){
         
		   $html="";
		   $programs = array();
		   
		   try 
		   {    
		        
		        $dao = new genericDao();
				  
				
	$query = "SELECT prog.id_program as id_program,prog.name as program,tgrp.name as grp_prog ,prog.callFunction as function,prog.imagePath as image";
				$query .="         FROM `tb_programs` as prog inner join `tb_grp_program` as tgrp";  
                $query .="          on tgrp.id_grp_program=prog.id_grp_program  WHERE 1=1 order by priority";
				
				$resultset = $dao->executeResultset($query);
				
				
				while($row = $resultset->fetch_array()){
						 
						$item= array("program"=>$row["program"], "group"=>$row["grp_prog"], 
						       "function"=>$row["function"], "image"=>$row["image"], "id_program"=>$row["id_program"]);
						 array_push($programs,$item);
	  
				}
                  $util = new controlUtil();
				  $html = $util->createTablePrograms($programs,$language);
		
					  
		    } catch (Exception $e) {
		     
			      $html = $e->getMessage();
		   
			   
				
			
		   
		   }
		    echo $html;
			   
   }
    else if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getbackupinfo"){
         
		   $html="";
		   
		   try 
		   {    
		        
				
		
				$html= "<h1 class='titulo lang_system_back_restore'>".$language['system']['back_restore']."</h1>";	
				$html.= "<div class='listview backupview padding10' data-role='listview' id='lv1'>";
		  

				   $html.=   "<div class='list' onclick=\"callWindow(this,'backup','callWindowBackup','')\">";
				   $html.=   "     <img src='images/safety.png' class='list-icon'>";
				   $html.=   "    <span class='list-title lang_system_configure_backup'>".$language['system']['configure_backup'] ."</span>";
				   $html.=   "</div>";	

                  				   
			  
		  
	            $html.=  "</div>";
				
				

	
				
                  
					  
		    } catch (Exception $e) {
		     
			      $html = $e->getMessage();
		   
			   
				
			
		   
		   }
		    echo $html;
			   
   }
   
   else if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getupdateinfo"){
         
		   $html="";

		   
		   try 
		   {    
		        
				
		
				$html= "<h1 class='titulo'>Update WOS</h1>";	
				$html .="<div class='local_upd'>";
				$html .="<div class='info_upd ok'>";
					$html .="<div class='border_info_upd ok'>";
					$html .="</div>";
					$html .="<div class='img_info'>";
					   $html .="<img src='images/sucess.png'>";
					$html .="</div>";
					$html .="<div class='links_info'>";
					
						$html .="<ul class='ul_up'>";
							$html .="<li><a class='lang_system_update_available' href='#'>0 ".$language['system']['update_available']."/a></li>";  
							$html .="<li><a class='lang_system_optional_available' href='#'>0 ".$language['system']['optional_available']."</a></li>";  
						$html .="</ul>";
					$html .="</div>";
					$html .="<div class='div_update'>";
				
						$html .="<button class='btn' onclick='updateWos(this)'><img class='in_btn' src='images/install.png'><span class='lang_system_install'>".$language['system']['install']."</span></button>";
								
					$html .="</div>";
					$html .="</div>";
				
				
				$html .="</div>";
				
				

	
				
                  
					  
		    } catch (Exception $e) {
		     
			      $html = $e->getMessage();
		   
			   
				
			
		   
		   }
		    echo $html;
			   
   }
    else if(isset($_POST["action"]) && strtolower($_POST["action"]) == "getlistfonts"){
         
		   $html="";
		   $fontes = array();
		   
		   try 
		   {    
		        
		        $dao = new genericDao();
				$fonts = new Tb_fonts();
				  
				
				  $resultset = $dao->getAll($fonts);
               
				
				
				
				while($row = $resultset->fetch_array()){
						 
						$item= array("name"=>$row["name"], "id_fonts"=>$row["id_fonts"], 
						       "folder"=>$row["folder"], "type"=>$row["type"]);
						 array_push($fontes,$item);
	  
				}
                  $util = new controlUtil();
				   $html = $util->createMenuFonts($fontes,$language);
		
					  
		    } catch (Exception $e) {
		     
			      $html = $e->getMessage();
		   
			   
				
			
		   
		   }
		    echo $html;
			   
   }
  
  
   
   ?>