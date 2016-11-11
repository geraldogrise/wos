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
	<div id="datetime_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program datetime">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/calendar.png" style="width:16px;height:16px;" />
              Datetime
			  
          </span>
          <span class="float_right">
               <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
                 
				   <div class="content_datetime">
				        <h1 class="lang_system_title_change_date lang_datetime_title_change_date"><?=$language['system']['title_change_date']?></h1>
						<div class="local_datetime">
						
						    <div class="dt_title"><?= date("Y-m-d F") ?></div>
							<div class="datepicker"></div>
							 <input type="hidden" class="input_datepicker">
						</div>
						<div class="local_time">
						   
							   <input type="text" value="" style="height:0px;" class="clockpicker" >
						   
						</div>
				   </div>
				   
				   
				   <div class="btns_extnernal">
				     <div class="btns_group">
					      <button class="btn btn_ok lang_system_ok lang_datetime_ok" onclick="saveDatetime(this)"><?=$language['system']['ok']?></button>
						 <button class="btn btn_cancel lang_system_cancel lang_datetime_cancel" onclick="closeWindow(this)"><?=$language['system']['cancel']?></button>
						 
					 </div>
				   </div>
	     </div>
			  
        </div>
       
      </div>
     
   
  
	
	 


  


	