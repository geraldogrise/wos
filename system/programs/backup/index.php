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
	<div id="backup_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program backup">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/backup.png" style="width:16px;height:16px;" />
                Backup
          </span>
          <span class="float_right">
               <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
               <div class="container_users">
						  <div class="title_locals">
							   <img src="images/backup.png" class="lang_system_select_location_store lang_backup_select_location_store"><span><?=$language['system']['select_location_store'] ?></span>
						  </div>
					      <div class="div_content">
						     
							  <form class="form_backup">
							      <input type="hidden"  name="action" value="search">
                                  <input type="hidden" value="1" name="page" class="page_x page_backup" >
							  
							  </form>
							  <div class="local_grid">
							  
							  
							  </div>
							   <div class="btns">
							     
								 <button onclick="makeBackup(this)" class="btn">
									<img class="in_btn mCS_img_loaded" src="images/backup.png">
									    <span class="lang_system_create lang_backup_create"><?=$language['system']['create'] ?></span>
								 </button>
								 
								 <button class="btn btn_add no_zindex" onclick="">
										<i class="btn_select"></i>
										 <span class="lang_system_new_local lang_backup_new_local"><?=$language['system']['new_local'] ?></span>
								</button>
								 <button onclick="removeLine(this,'tbl_users','backup')" class="btn btn_remove">
										<i class="btn_delete"></i>
										<span class="lang_system_remove lang_backup_remove"><?=$language['system']['remove'] ?></span>
								</button>
								 
							  </div>
							  
						  
						  </div>
						 
						
				   </div>
			   <div class="btns_extnernal">
				     <div class="btns_group">
					      <button class="btn btn_ok lang_system_next lang_backup_next" ><?=$language['system']['next'] ?></button>
						 <button class="btn btn_cancel lang_system_cancel lang_backup_cancel" onclick="closeWindow(this);"><?=$language['system']['cancel'] ?></button>
						 
					 </div>
			   </div>
        </div>
       
      </div>
     
    </div>
  
	
	 


  


	