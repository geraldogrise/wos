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
	<div id="timezone_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program timezone">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/timezone.png" style="width:16px;height:16px;" />
              Timezone
			  
          </span>
          <span class="float_right">
               <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
                 
				   <div class="content_timezone">
				        <h1 class="lang_system_set_time_zone lang_timezone_set_time_zone"><?$language['system']['set_time_zone']?></h1>
						<select   class="select_timezone">
						
						
						</select>
				       <span class="info_timezone lang_system_current_date_hours lang_timezone_current_date_hours"><?=$language['system']['current_date_hours']?></span>
				   </div>
				   
				   
				   <div class="btns_extnernal">
				     <div class="btns_group">
					      <button class="btn btn_ok lang_system_ok lang_timezone_ok" onclick="saveTimezone(this)"><?=$language['system']['ok']?></button>
						 <button class="btn btn_cancel lang_system_cancel lang_timezone_cancel" onclick=""><?=$language['system']['cancel']?> </button>
						 
					 </div>
				   </div>
	     </div>
			  
        </div>
       
      </div>
     
   
  
	
	 


  


	