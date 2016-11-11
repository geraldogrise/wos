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
	<div id="uninstall_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program uninstall">
      
	   <div class="local_program_info">
	      <input type="hidden" value="1" class="step_install">
		  <input type="hidden" value="" class="name_install">
		  <input type="hidden" value="" class="id_uninstall">
		  <input type="hidden" value="" class="folder_uninstall">
		 
		  
	  </div>
	  <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/user_account.png" style="width:16px;height:16px;" />
              Uninstall
          </span>
          <span class="float_right">
               <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
                  
				  <div class="container_wizard">
				          <div class="image_wizard">
				            <img class="prog_image" src="images/wdoc.png">
							 <span class="title_program">WDoc</span>
							<div class="company">
							   <img src="images/grisecorp.png">
							   <span>Grise International Coorporation</span>
							</div>
						  </div>
						  <div class="title_wizard">
							   
							   <h1 class="lang_system_title_install lang_uninstall_title_install"><?=$language['system']['title_install']?></h1>
							   <span class="lang_system_description_install lang_uninstall_description_install"><?=$language['system']['description_install']?></span>
						  </div>
					      
						 
						
				   </div>
				   <div class="btns_extnernal">
				     <div class="btns_group">
					     
					     <button class="btn btn_next lang_system_next lang_uninstall_next"  onclick="nextStepUninstall(this);"><?=$language['system']['next']?></button>
						  <button class="btn btn_cancel lang_system_cancel lang_uninstall_cancel" onclick="closeWindow(this);"><?=$language['system']['cancel']?></button>
						 
						
						
						 
						 
					 </div>
				   </div>
	     </div>
			  
        </div>
       
      </div>
     
    </div>
  
	
	 


  


	