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
   include($caminho.'/system/includeLang.php');
  

?>
	<div id="folder_options_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program folder_options">
      <div class="local_input">
	     <input type="hidden" class="ant_selected">
		 <input type="hidden" class="file_path">
	  </div>
	  <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/folder_options.png" style="width:16px;height:16px;" />
              Folder Options
          </span>
          <span class="float_right">
               <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
                   <div class="my_folderselect"></div>
				    <div class="btns_extnernal">
						 <div class="btns_group">
							  <button class="btn btn_ok lang_system_ok lang_folder_options_ok" onclick="saveFolderOptions(this)"><?=$language['system']['save']?></button>
							 <button class="btn btn_cancel lang_system_cancel lang_folder_options_cancel" onclick="closeWindow(this);"><?=$language['system']['cancel']?></button>
							 
						 </div>
				   </div>
				  
	     </div>
			  
        </div>
       
      </div>
     
    </div>
  
	
	 


  


	