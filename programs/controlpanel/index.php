<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>	
<?php

   $caminho= getcwd();
  
   $caminho = str_replace("system\controller","",$caminho);
   $caminho = str_replace("\\","/",$caminho);
   
   require_once($caminho.'/system/includeLang.php');

?>
	
	
	<div id="controlpanel_0"  tabindex="-1"  style="display:none;z-index:10;" class="abs window program controlpanel">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/controlpanel.png" style="width:20px" />
            Control Panel 
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_resize" onclick="resizeWindowControlPanel(this,'resizeControlPanel(this)');" ></a>
            <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
		 
        <div class="abs window_content content">
		<div class="controlpanel_sidebar">
					     <span class="lang_system_custom_settings lang_appareance_custom_settings"><?=ucwords($language['system']['security'])?></span>
						 <ul>
						    <li><a href="#" onclick="getControlPage(this,'getBackupinfo')" class="list"><?=ucwords($language['system']['backup'])?></a></li>
						    <li><a href="#" onclick="callWindow(this,'fonts_options','callWindowFonts_options','')" class="list"><?=ucwords($language['system']['folder_options'])?></a></li>
						    <li><a href="#" onclick="getControlPage(this,'getListPrograms')" class="list"><?=ucwords($language['system']['programs'])?></a></li>
							<li><a href="#" onclick="callWindow(this,'security','callWindowSecurity','')" class="list"><?=ucwords($language['system']['security'])?></a></li>
							<li><a href="#" onclick="getControlPage(this,'getUserInfo')" class="list"><?=ucwords($language['system']['user_account'])?></a></li>
							<li><a href="#" onclick="getControlPage(this,'getUpdateInfo')" class="list">Wos Update</a></li>
							

						</ul>
						
						 <span class="lang_system_change_mouse_icon lang_appareance_change_mouse_icon"><?=ucwords($language['system']['appearance'])?></span>
						 <ul>
						    <li><a href="#" onclick="callWindow(this,'appearance','callWindowAppearance','')" class="list"><?=ucwords($language['system']['appearance'])?></a></li>
							<li><a href="#" onclick="getControlPage(this,'getListWidgets')" class="list">Gadgets</a></li>
							<li><a href="#" onclick="" class="list"><?=ucwords($language['system']['start_menu'])?></a></li>
						</ul>
						 <span class="lang_system_change_mouse_icon lang_appareance_change_mouse_icon"><?=ucwords($language['system']['system'])?></span>
						 <ul>
						   <li><a href="#" onclick="callWindow(this,'sdate','callWindowSdate','')" class="list"><?=ucwords($language['system']['date'])?></a></li>
						   <li><a href="#" onclick="getControlPage(this,'getListFonts')" class="list"><?=ucwords($language['system']['fonts'])?></a></li>
						   <li><a href="#" onclick="callWindowWithParameter(this,'language','callWindowLanguage','','system,lang_system')" class="list"><?=ucwords($language['system']['languages'])?></a></li>
						   <li><a href="#" onclick="getListControl(this, 'getSystemInfo' ,'','','');" class="list"><?=ucwords($language['system']['system'])?></a></li>
						</ul>
						
						
		</div>
		<div class="ajax_content content_area">
		            
					
					
					
					
				
		  
		  
               
            </div>
		</div>
				
 
        
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
  
 
	
	
	
	
   




  


	