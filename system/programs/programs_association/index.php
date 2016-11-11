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
   require_once($caminho.'/system/includeLang.php');

?>
	<div id="programs_association_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program programs_association">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/user_account.png" style="width:16px;height:16px;" />
              Programs Association
			  
          </span>
          <span class="float_right">
               <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
                   <input type="hidden" value="" class="id_p">
				  <div class="container_users">
						  <div class="title_programs">
							   <img src="images/programs.png"><span class="lang_system_user_description lang_programs_association_user_description"><?=$language['system']['user_description']?></span>
						  </div>
					      <div class="div_content">
						  
										
						  
						  </div>
						 
						
				   </div>
				   <div class="btns_extnernal">
				     <div class="btns_group">
					      <button class="btn btn_ok lang_system_ok lang_programs_association_ok" onclick="saveProgramAssociation(this)"><?=$language['system']['ok']?></button>
						 <button class="btn btn_cancel lang_system_cancel lang_programs_association_cancel" onclick="closeWindow(this);"><?=$language['system']['cancel']?></button>
						 
					 </div>
				   </div>
	     </div>
			  
        </div>
       
      </div>
     
    </div>
  
	
	 


  


	