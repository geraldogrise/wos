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
	<div id="fonts_options_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program fonts_options">
      <div class="local_input">
	     <input type="hidden" class="file_path">
		 <input type="hidden" class="folder_path_normal" value="<?=getcwd()?>">
		 <input type="hidden" class="type_font">
		 <input type="hidden" class="ant_selected">
	  
	  </div>
	  <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/fonts_options.png" style="width:16px;height:16px;" />
              Fonts Options
          </span>
          <span class="float_right">
               <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
                  
                 
				       
					  <div class="data_font grise_tab">
				  
						 <label  class="label_in lang_system_name lang_font_options_name "><?=$language['system']['name']?></label>
						 <input class="form-control form-control_width_button font_name required" name="name" placeholder="Name" value="">
			
						 <div class="group">
							   <label class="label_in lang_system_path lang_font_options_path required"><?=$language['system']['path']?></label>
							   <input class="form-control form-control_width_button gallery_path folder_path lang_system_path_ph lang_font_options_path_ph required" value="<?=getcwd()?>" placeholder="<?=$language['system']['path']?>" style="width:70%;float:left;">
							   <button class="btn open_folder button_explore btn_black" onclick="openWExplore(this,'setSoundPathFonts','open');">
										<i class="icon-folder-open-alt"></i>
										<span class="lang_system_open lang_font_options_open"><?=$language['system']['open']?></span>
								</button>
						   </div>
						     <div class="container_folderselect">
							    <div class="my_folderselect" ></div>
							 </div>
						   
					   </div>
					     
						  <div class="btns_extnernal">
								 <div class="btns_group">
									  <button class="btn btn_ok lang_system_ok lang_font_options_ok" onclick="saveFontsOptions(this)"><?=$language['system']['save']?></button>
									 <button class="btn btn_cancel lang_system_cancel lang_font_options_cancel" onclick="closeWindow(this);"><?=$language['system']['cancel']?></button>
									 
								 </div>
						   </div>
		</div>
				
				
				  
	     </div>
			  
        </div>
       
      </div>
     
   
  
	
	 


  


	