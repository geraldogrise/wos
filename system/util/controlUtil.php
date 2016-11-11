
 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>

<?php

require_once('path.php');
 include_once($include_path.'/system/directory/system_info.php');
 class controlUtil{
   
	public function createMenuItem($controls,$language){
		  $anterior = "";
		
		  $html= "<h1 class='titulo lang_system_adjust_settings_computer'>".$language['system']['adjust_settings_computer']."</h1>";	
		  $html.= "<div class='listview padding10 list-type-listing' data-role='listview' id='lv1'>";
		  
		  foreach ($controls as $key => $value) {
			  $imagePath = $value["imagePath"];
			  $control = $value["control"];
			  $group = $value["group"];
			  $function = $value["function"];
			  $control =  strtolower($control);
			  $control = str_replace(" ","_",$control);
			  
			  
			  if($control !="wos_update" && $control !="gadgets"){
			      $control = $language['system'][$control];
			  }
			
			


               $html.=   "<div class='list' onclick=\"$function\">";
               $html.=   "     <img src='images/{$imagePath}' class='list-icon'>";
               $html.=   "    <span class='list-title'>{$control}</span>";
               $html.=   "</div>";		   
			  
		  }
	      $html.=  "</div>";
		 
	      return $html;
	
	}
	
	public function createSystemInfo($language){
		       
			   $systemUtil = new system_info();
			   $html ="";   
			   $html .=" <div class='divtitulo lang_system_system_information'>".$language['system']['system_information']."</div>";
			   $html .="		<div class='divtitulo_secondary'><h1 class='lang_system_wos_edition'>".$language['system']['wos_edition']."</h1>";
			   $html .="		     <div class='local_info'>";
			   $html .="				 <span class='info_system'>Wos 1.0</span>";
			   $html .=" 				 <span class='info_system'>Copyright @2015 GriseCorp</span>";
			   $html .=" 		     </div>";
			   $html .=" 			 <div class='local_image'>";
			   $html .="  			     <img src='images/logo.png'>";
			   $html .=" 			 </div>";
			   $html .=" </div>";
			   
			  /* $disks=  $systemUtil->get_disks();
			   $html .="<div class='divtitulo_secondary'><h1>Disk Information</h1> <hr>";
			   $html .=" <div class='listview padding10' data-role='listview'>";
			   $html .="   <div class='list-group collapsed'>";
               $html .="     <span class='list-group-toggle'>My Computer</span>";
               $html .="     <div class='list-group-content' style='display:none'>";
			    foreach($disks as $disk){
				   if(trim($disk) !=""){
					   $diskTotal=  $systemUtil->getDiskTotal(trim($disk));
					   $diskFree=  $systemUtil->getDiskFree(trim($disk));
					   $diskUsage = $diskTotal-$diskFree; 
					   $perc = $diskUsage/$diskTotal;
					   $perc = substr($perc,0,6)*100;
					   $html .="		  <div class='list disk'>";
					   $html .="             <img src='images/hard-drive.png' class='list-icon'>";
					   $html .="             <span class='list-title'>Local Drive ({$disk})</span>";
					   $html .="             <div class='list-data'>";
					   $html .="                 <div class='progress' data-role='progressBar' data-value='{$perc}'></div>";
					   $html .="             </div>";
					   $html .="         </div>";
				   }
			   }
			   $html .="	</div>";	
			   $html .="  </div>";	
			   $html .=" </div>";
			   $html .="</div>";*/
			   
			   $os= $systemUtil->getOs();
			   $img_os = strtolower($os)."_system";
			   $mu = $systemUtil->getMemoryUsage();
			   $pmu = $systemUtil->getPeakMemoryUsage();
			   $osv = $systemUtil->getSystemVersion();
			   $php_os = $systemUtil->getphpVersion();
			   
			   $html .= "<div class='divtitulo_secondary'><h1>System</h1>"; 
			   $html .= "	<div class='local_info'>";
			   $html .= "	  <div class='info_system_div'><span class='info_system_i lang_system_operation_system'>".$language['system']['operation_system'].":</span> <span class='info_r'>{$os}</span></div>";
				$html .= "			 <div class='info_system_div'><span class='info_system_i lang_system_version'>OS ".$language['system']['version'].":</span><span class='info_r'>{$osv} Bits</div></span>";
				$html .= "	         <div class='info_system_div'><span class='info_system_i lang_system_version'>Php ".$language['system']['version'].":</span><span class='info_r'>{$php_os} Bits</span></div>";
				$html .= "	         <div class='info_system_div'><span class='info_system_i lang_system_memory_usage'>".$language['system']['memory_usage']."</span><span class='info_r'>{$mu}</span></div>";
				$html .= "	         <div class='info_system_div'><span class='info_system_i lang_system_peak_memory_usage'>".$language['system']['peak_memory_usage'].":</span><span class='info_r'>{$pmu}</span></div>";
				$html .= "		 </div>";
				$html .= "		 <div class='local_image_os'>";
				$html .= "		     <img src='images/{$img_os}.png'>";
				$html .= "		 </div>";
				$html .= "</div>";
				
				$browser_info = $systemUtil->getBrowser();
				$name= $browser_info["name"];
				$uagent= $browser_info["userAgent"];
				$version= $browser_info["version"];
				$platform= $browser_info["platform"];
				$img_browser = $systemUtil->getImageBrowser();
				//$pattern= $browser_info["pattern"];
				
				$html .= "	<div class='divtitulo_secondary'><h1 class='lang_system_browser_information'>".$language['system']['browser_information']."</h1>"; 
				$html .= "	     <div class='local_info'>";
				$html .= "			 <div class='info_system_div'><span class='info_system_i lang_system_browser_name'>".$language['system']['browser_name'] .":</span> <span class='info_r'>{$name}</span></div>";
				$html .= "			 <div class='info_system_div'><span class='info_system_i lang_system_version'>".$language['system']['version'] .":</span><span class='info_r'>{$version}</div></span>";
				$html .= "	         <div class='info_system_div'><span class='info_system_i lang_system_plataform'>".$language['system']['plataform'] .":</span><span class='info_r'>{$platform}</span></div>";
				$html .= "</div>";
				$html .= "		 <div class='local_image_os'>";
				$html .= "		     <img src='images/{$img_browser}'>";
				$html .= "		 </div>";
				$html .= "</div>";
					
			   
			   
			   
			   return $html;
	
	}
	public function getDiskInfo($showProgress_bar,$language){
	           $systemUtil = new system_info();
			   $disks=  $systemUtil->get_disks();
			   $html= "";
			   $html .="<div class='divtitulo_secondary'>";
			 
			   $html .=" <div class='listview padding10' data-role='listview'>";
			   $html .="   <div class='list-group collapsed'>";
               $html .="     <span class='list-group-toggle lang_system_my_computer'>".$language['system']['my_computer']."</span>";
               $html .="     <div class='list-group-content' style='display:none'>";
			    foreach($disks as $disk){
				   if(trim($disk) !=""){
					   $diskTotal=  $systemUtil->getDiskTotal(trim($disk));
					   $diskFree=  $systemUtil->getDiskFree(trim($disk));
					   $diskUsage = $diskTotal-$diskFree; 
					   $perc = $diskUsage/$diskTotal;
					   $perc = substr($perc,0,6)*100;
					   $html .="		  <div class='list disk' onclick='showDirectoryContent(this,\"".trim($disk)."\",1,\"\",\"\")'>";
					   $html .="             <img src='images/hard-drive.png' class='list-icon'>";
					   $html .="             <span class='list-title'>Local Drive ({$disk})</span>";
					   if($showProgress_bar == "S"){
						   $html .="             <div class='list-data'>";
						   $html .="                 <div class='progress' data-role='progressBar' data-value='{$perc}'></div>";
						   $html .="             </div>";
					   }
					   
					   $html .="         </div>";
				   }
			   }
			   $html .="	</div>";	
			   $html .="  </div>";	
			   $html .=" </div>";
			   $html .="</div>";
			   return $html;
	
	
	}
	public function createMenuWidgets($controls,$language){
		  $anterior = "";
		
		  $html= "<h1 class='titulo lang_system_adjust_settings_computer'>".$language['system']['adjust_settings_computer'] ."</h1>";	
		  $html.= "<div class='listview padding10 list-type-listing' data-role='listview' id='lv1'>";
		  
		  foreach ($controls as $key => $value) {
			  $image = $value["image"];
			  $program = $value["program"];
			  $group = $value["group"];
			  $function = $value["function"];
			  
			


               $html.=   "<div class='list' onclick=\"{$function}\">";
               $html.=   "     <img src='images/{$image}' class='list-icon'>";
               $html.=   "    <span class='list-title'>{$program}</span>";
               $html.=   "</div>";		   
			  
		  }
	      $html.=  "</div>";
		 
	      return $html;
	
	}
	public function createTablePrograms($programs,$language){
		  $anterior = "";
		  $html= "";	
		  
		  $html.= "<div class='bootstrap-admin-panel-content'>";
          $html.= "<ul class='nav nav-tabs'>";
          $html.= "<li class='active'>";
          $html.= "<a href='#' class='lang_system_program_list' onclick='changeTab(this,\"list_programs\")'>".$language['system']['program_list']."</a>";
          $html.= "</li>";
          $html.= "<li>";
          $html.= "<a href='#'class='lang_system_install' onclick='changeTab(this,\"install\")'>".$language['system']['install']."</a>";
          $html.= "</li>";
		  $html.= "<li>";
          $html.= "<a href='#'class='lang_system_store' onclick='changeTab(this,\"wos_store\")'>".$language['system']['store']."</a>";
          $html.= "</li>";
		  $html.="</ul>";
		  $html.="</div>";

     	  $html.= "<div class='list_programs grise_tab'>";
		  $html.= "<div class='window_main' style='width:100%;'>";
		  $html.= "<table class='data'>";
		  $html.="<thead>";
		  $html.="<tr>";
		  $html.="<th class='shrink'>&nbsp</th>";
		  $html.="<th class='lang_system_name'>".$language['system']['name']."</th>";
		  $html.="<th class='lang_system_group'>".$language['system']['group']."</th>";
		  $html.="<th class='shrink'>&nbsp</th>";
		  $html.="</tr>";
          $html.="</thead>";
          $html.="<tbody>";			  
 	  
							 
							
						  
		  
		  
		  foreach ($programs as $key => $value) {
			  $image = $value["image"];
			  $program = $value["program"];
			  $id_program = $value["id_program"];
			  $group = $value["group"];
			  $function = $value["function"];
			    $html.="<tr rel='{$id_program}' onclick='selectProgramLine(this)'>";
				$html.="<td><img style='width:16px;' src=\"images/{$image}\" ondblclick=\"{$function}\"/>";
				$html.="<td>{$program}</td>";	
                $html.="<td>{$group}</td>";	
                $html.="<td><a href='#' onclick='getAssociationScreen(this,\"{$id_program}\")' ><img src='images/account_group.png' style='width:20px;height:20px'></a></td>";						
			    $html.="</tr>";

   
			  
		  }
		   $html.="</tbody>";
           $html.="</table>";			   
	      $html.=  "</div>";
		  $html.=  "</div>";
		  
		  
		  $html.=  "<div class='grise_tab install' style='display:none'>";
			  $html.= "<div class='window_main' style='width:100%;>";
			  $html.="<div class='form-group'>";
              $html.="  <label class='col-lg-2 control-label' for='fileInput'>Select Zip File input to Install the program</label>";
			  $html.="<form class='form_install form_submit'  enctype='multipart/form-data' method='POST' >";
			  $html.="     <div class='col-lg-10'>";
			    $html.= "<input type='hidden' name='action_install'  class='action_install' value='yes'>";
			    $html.= "<input type='hidden' name='action' value='upload'>";
				$html.= "<input type='hidden' name='local' class='app_directory' value=''><input type='hidden' name='folder' value='programs'>"; 
			    $html.=" <input type='hidden' value='' name='file_zip'><input class='form-control uniform_on' name='file' type='file'>";
                $html.="  </div>";
			  $html.="</form>";
              $html.="</div>";
			  $html .="<div class='div_install'>";
					$html .="<button onclick='installByZip(this)' class='btn'><img class='in_btn' src='images/install.png'>".$language['system']['install']."</button>";
			  $html .="</div>";
			  
			  $html.=  "</div>";
		  $html.=  "</div>";
		  
		  $html.=  "<div class='grise_tab wos_store' style='display:none'>";
		     $html.= "<div class='window_main' style='width:100%;'>";
			    $html .="<div class='main_store'>";
				$html.=  "</div>";
			 
			 $html.=  "</div>";
		  $html.=  "</div>";
		 
	      return $html;
	
	}
	public function createMenuFonts($controls,$language){
		  $anterior = "";
		
		  $html= "<h1 class='titulo lang_system_adjust_settings_computer' style='padding: 7px 7px 16px'>".$language['system']['adjust_settings_computer'];
          $html.= "<div class='btn_font'><button class='no_zindex btn button_addfonte' onclick='callWindowFontes(this,\"\")'>";
		   $html.= "<i class='btn_addfont'></i><span class='lang_system_new_font'>".$language['system']['new_font'] ."</span></button></div></h1>";	
		  $html.= "<div class='listview padding10 list-type-listing' data-role='listview' id='lv1'>";
		  
		  foreach ($controls as $key => $value) {
			  $image = "fontes2.png";
			  $name = $value["name"];
			  $folder = str_replace("\\","#",$value["folder"]);
			  $folder = str_replace("/","#",$value["folder"]);
			  $id_fonts = $value["id_fonts"];
			  $type = $value["type"];
			  $parametro = $folder."_".$id_fonts."_".$name."_".$type;
			
			  
			


               $html.=   "<div class='list' onclick='callWindowFontes(this,\"{$parametro}\")'>";
               $html.=   "     <img src='images/{$image}' class='list-icon'>";
               $html.=   "    <span class='list-title'>{$name}</span>";
               $html.=   "</div>";		   
			  
		  }
	      $html.=  "</div>";
		 
	      return $html;
	
	}
		
	
 }
 
 
?> 
