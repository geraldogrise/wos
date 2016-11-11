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
	<div id="install_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program install">
      <div class="local_program_info">
	      <input type="hidden" value="1" class="step_install">
		  <input type="hidden" value="" class="name_install">
		  <input type="hidden" value="" class="description_install">
		  <input type="hidden" value="" class="pathzip_install">
		  <input type="hidden" value="" class="pathimg_install">
		  <input type="hidden" value="" class="paththumb_install">
		  <input type="hidden" value="" class="gip_install">
		  <input type="hidden" value="" class="class_program_install">
		  <input type="hidden" value="" class="type_install">
		  <input type="hidden" value="" class="opentype_install">
	  </div>
	  <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/install.png" style="width:16px;height:16px;" />
              Install
          </span>
          <span class="float_right">
               <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
                  
				  <div class="container_wizard">
				          <div class="image_wizard">
				            <img class="prog_image" src="images/wdoc.png">
							 <span  class="title_program">WDoc</span>
							<div class="company">
							   <img src="images/grisecorp.png">
							   <span>Grise International Coorporation</span>
							</div>
						  </div>
						  <div class="title_wizard">
							   
							   <h1 class="title_install lang_system_title_install lang_install_title_install"><?=$language['system']['title_install'] ?></h1>
							   <span class="content_install lang_system_description_install lang_install_description_install"><?=$language['system']['description_install'] ?></span>
						  </div>
					      
						 
						
				   </div>
				   <div class="btns_extnernal">
				     <div class="btns_group">
					      <button class="btn btn_back lang_system_back lang_install_back"><?=$language['system']['back']?></button>
					     <button  onclick ="nextStepInstall(this)" class="btn btn_next lang_system_next lang_install_next"><?=$language['system']['next'] ?></button>
						  <button class="btn btn_cancel lang_system_cancel lang_install_cancel" onclick="closeWindow(this);"><?=$language['system']['cancel'] ?></button>
						  
						
						
						 
						 
					 </div>
				   </div>
	     </div>
			  
        </div>
       
      </div>
     
    </div>
  
	
	 


  


	