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

	<div id="useraccount_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program useraccount">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/user_account.png" style="width:16px;height:16px;" />
                User Account
          </span>
          <span class="float_right">
               <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
                  
				  <div class="container_users">
						  <div class="title_users">
							   <img src="images/account.png"><span class="lang_system_add_user_title lang_useraccount_add_user_title"><?=$language['system']['add_user_title']?></span>
						  </div>
					      <div class="div_content">
						      <span class="lang_system_user_this_wos lang_useraccount_user_this_wos"><?=$language['system']['user_this_wos']?></span>
							  <form class="form_users">
							      <input type="hidden"  name="action" value="search">
                                  <input type="hidden" value="1" name="page" class="page_x page_user" >
							  
							  </form>
							  <div class="local_grid" style="display:inline">
							     
							  </div>
							  <div class="btns">
							     
								 <button class="btn btn_add_user no_zindex" onclick="callWindowWithParameter(this,'adduser','callWindowAdduser','','')">
										<i class="add_user no_zindex"></i>
										<span class="lang_i lang_system_new_user lang_useraccount_new_user no_zindex"><?=$language['system']['new_user']?></span>
								</button>
								 <button class="btn btn_remove_user" onclick="removeLine(this,'tbl_users','user')">
										<i class="remove_user"></i>
										<span class="lang_i lang_system_remove lang_useraccount_remove"><?=$language['system']['remove']?></span>
								</button>
								 
							  </div>
							  <div class="div_reset">
							      <fieldset>
								     <legend class="lang_system_reset_password lang_useraccount_reset_password"><?=$language['system']['reset_password']?></legend>
								      <span class="lang_system_change_passwod_title lang_useraccount_change_passwod_title"><?=$language['system']['change_passwod_title']?> </span>
									  <button class="btn btn_reset_password no_zindex" onclick="resetPassword(this)">
										<i class="reset_password no_zindex"></i>
										   <span class="lang_system_reset lang_useraccount_reset no_zindex"><?=$language['system']['reset']?></span>
								       </button>
							      </fieldset>
							  
							  </div>
							  
						  
						  </div>
						 
						
				   </div>
				   <div class="btns_extnernal">
				     <div class="btns_group">
					      <button class="btn btn_ok lang_system_ok lang_useraccount_ok"><?=$language['system']['ok']?></button>
						 <button class="btn btn_cancel lang_system_cancel lang_useraccount_cancel" onclick="closeWindow(this);"> <?=$language['system']['cancel']?></button>
						 
					 </div>
				   </div>
	     </div>
			  
        </div>
       
      </div>
     
    </div>
  
	
	 


  


	