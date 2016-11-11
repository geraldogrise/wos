 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php

   $caminho= getcwd();
   $caminho = str_replace("system".DIRECTORY_SEPARATOR."controller","",$caminho);
   $caminho = str_replace("\\","/",$caminho);
   
   include($caminho.'/system/includeLang.php');
 
 
?>


	<div id="appearance_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program appearance">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/appearance.png" style="width:16px;height:16px;" />
              Appearance 
			  
          </span>
          <span class="float_right">
               <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
                   
				    <div class="appearance_sidebar">
					     <span class="lang_system_custom_settings lang_appareance_custom_settings"><?=$language['system']['custom_settings'] ?></span>
						 <ul>
						    <li><a href="#" onclick="changeAppearanceContent(this,'theme')" class="lang_system_change_theme lang_appareance_change_theme"><?=$language['system']['change_theme'] ?></a></li>
							<li><a href="#" onclick="changeAppearanceContent(this,'account_image')" class="lang_system_change_account_image lang_appareance_change_account_image"><?=$language['system']['change_account_image'] ?> </a></li>
							<li><a href="#" onclick="changeAppearanceContent(this,'mouse_icon')" class="lang_system_change_mouse_icon lang_appareance_change_mouse_icon" ><?=$language['system']['change_mouse_icon'] ?></a></li>
						</ul>
						
						 <span class="lang_system_change_mouse_icon lang_appareance_change_mouse_icon"><?=$language['system']['change_mouse_icon'] ?></span>
						 <ul>
						    <li><a href="#" onclick="getInputFolder(this)" class="lang_system_create_theme_folder lang_appareance_create_theme_folder"><?=$language['system']['create_theme_folder'] ?></a></li>
							<li><a href="#" onclick="" class="lang_system_upload_from_computer lang_appareance_upload_from_computer" ><?=$language['system']['upload_from_computer'] ?></a></li>
							<li><a href="#" onclick="addThemeFromWOS(this)" class="lang_system_add_theme_from_wos lang_appareance_add_theme_from_wos"><?=$language['system']['add_theme_from_wos'] ?></a></li>
							
						</ul>
					</div>
					
				<div class="theme content_aba">	
					<div class="carousel">
						  <div class="carousel_img">
						      <a href="#"><img src="images/themes/space/1.jpg" style="width:350px;" id="item-1" /></a>
						
						  </div>	
						   <button class="btn btn_set" onclick="setTheme(this)">
							   <i class="themeselect"></i>
								 <span class="lang_system_change_mouse_icon lang_appareance_change_mouse_icon"> <?=$language['system']['set'] ?></span>
							</button>
						 
					</div>
					<div class="thema_filter">
					    
						<input class="form-control" name="thema" placeholder="thema" style="float:left;width:88%;margin-right:2px;">
						<button class="btn btn_filter" onclick="searchThema(this)">
							   <i class="new_themsearch"></i>
										 <span class="lang_system_change_mouse_icon lang_appareance_change_mouse_icon"> <?=$language['system']['search'] ?></span>
							</button>
							
					
					
					</div>
					<div class="ick_image">
					   
						   
							
							
							<div class="wrapper-item">
								
								<div class="left">
								   <img height="45px" src="images/themes/colors/blue.png" alt="" />
								   <img height="45px" src="images/themes/colors/red.png" alt="" />
								</div>
								<span class="theme_header">Colors</span>
								
							</div>
						
					</div>
			</div>
           <?php include('account_image.php');?>
		   <?php include('mouse_icon.php');?>
			
			
			
				   
	     </div>
			  
        </div>
       
      </div>
     
    </div>
  
	
	 


  


	