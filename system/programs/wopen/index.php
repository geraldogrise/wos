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
	<div id="wopen_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program wopen">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/wopen.png" style="width:16px;height:16px;" />
              Wopen
			  
          </span>
          <span class="float_right">
               <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
                   <input type="hidden" value="" class="id_p">
				  <div class="container_users">
						  <div class="title_open">
							   <img src="images/programs/programs.png"><span class="lang_system_open_title lang_open_title"><?=$language['system']['default_program_title'] ?></span>
						  </div>
					      <div class="div_content">
						  
										
						  
						  </div>
						  <div class="div_griseset">
							<label class="label_checkbox">
								<input type="checkbox" name="default_program" class="option_question" value="N">
								 <span class="lang_system_default lang_wopen_default"><?=$language['system']['set_default'] ?></span>
							</label>
						</div>
						 
						
				   </div>
				   <div class="btns_extnernal">
				     <div class="btns_group">
					      <button class="btn btn_ok lang_system_ok lang_wopen_ok" onclick=""><?=$language['system']['open']?></button>
						 <button class="btn btn_cancel lang_system_cancel lang_wopen_cancel" onclick="closeWindow(this);"><?=$language['system']['cancel'] ?></button>
						 
					 </div>
				   </div>
	     </div>
			  
        </div>
       
      </div>
     
    </div>
  
	
	 


  


	