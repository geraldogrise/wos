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
	<div id="addgroup_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program addgroup">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/user_account.png" style="width:16px;height:16px;" />
               Add Group Account
          </span>
          <span class="float_right">
               <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
                  
				  <div class="container_users">
						  <div class="title_users">
							   <img src="images/programs/account.png"><span class="lang_system_add_user_title lang_addgroup_add_user_title"><?=$language['system']['add_user_title']?></span>
						  </div>
					      <div class="div_content">
						  
							 
							
						  
						  </div>
						 
						
				   </div>
				   <div class="btns_extnernal">
				     <div class="btns_group">
					      <button class="btn btn_ok lang_system_ok lang_addgroup_ok" onclick="saveGroup(this)"><?=$language['system']['ok']?></button>
						 <button class="btn btn_cancel lang_system_cancel lang_addgroup_cancel" onclick="closeWindow(this);"><?=$language['system']['cancel']?></button>
						 
					 </div>
				   </div>
	     </div>
			  
        </div>
       
      </div>
     
    </div>
  
	
	 


  


	