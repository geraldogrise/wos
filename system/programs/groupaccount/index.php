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

	<div id="groupaccount_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program groupaccount">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/account_group.png" style="width:16px;height:16px;" />
                Group Account
          </span>
          <span class="float_right">
               <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
               <div class="container_users">
						  <div class="title_users">
							   <img src="images/account.png"><span class="lang_system_title_user_list lang_groupaccount_title_user_list"><?=$language['system']['title_user_list']?></span>
						  </div>
					      <div class="div_content">
						      <span class="lang_system_user_this_wos lang_groupaccount_user_this_wos"><?=$language['system']['user_this_wos']?></span>
							  <form class="form_group">
							      <input type="hidden"  name="action" value="search">
                                  <input type="hidden" value="1" name="page" class="page_x page_group" >
							  
							  </form>
							 <div class="local_grid" style="display:inline">
							     
							  </div>
							   <div class="btns">
							     
								 <button class="btn btn_add_user no_zindex" onclick="callWindowWithParameter(this,'addgroup','callWindowAddgroup','','')">
										<i class="add_user no_zindex"></i>
										<span class="lang_system_new_group lang_groupaccount_new_group no_zindex"><?=$language['system']['new_group']?></span>
								</button>
								 <button class="btn btn_remove_user" onclick="removeLine(this,'tbl_groups','group')">
										<i class="remove_user"></i>
										<span class="lang_system_remove_user lang_groupaccount_remove_user"><?=$language['system']['remove']?></span>
								</button>
								 
							  </div>
							  
						  
						  </div>
						 
						
				   </div>
			   <div class="btns_extnernal">
				     <div class="btns_group">
					      <button class="btn btn_ok lang_system_ok lang_groupaccount_ok"><?=$language['system']['ok']?></button>
						 <button class="btn btn_cancel lang_system_cancel lang_groupaccount_cancel" onclick="closeWindow(this);"><?=$language['system']['cancel']?></button>
						 
					 </div>
			   </div>
        </div>
       
      </div>
     
    </div>
  
	
	 


  


	