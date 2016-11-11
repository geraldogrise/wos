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
<div id="sdate_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program sdate">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/datecalendar.png" style="width:16px;height:16px;" />
              Date and Time
          </span>
          <span class="float_right">
               <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
                  
				  <div class="container_wizard">
                         <div class="clock_side">				          
							  <ul class="clock">	
									<li class="secs"></li>
									<li class="hours"></li>
									<li class="mins"></li>
							   </ul>
						   </div>
						  <div class="title_wizard">
							     <div class="time_view">
									<label class="lang_system_date lang_sdate_date"><?=$language['system']['date']?></label>
									<span class="currentDate"></span>
									
								</div>
								 <div class="time_view">
									<label class="lang_system_time lang_sdate_time"><?=$language['system']['time']?></label>
									<input type="text" class="time_wos" value=""> 
									
								</div>
								 <div class="time_view">
							       <button class="btn no_zindex" onclick="callWindow(this,'datetime','callWindowDatetime','')"><img class="in_btn" src="images/datecalendar.png">
								    <span class="lang_system_change_date lang_sdate_change_date"><?=$language['system']['change_date'] ?></span></button>
								</div>
						  </div>
					      <div class="timezone">
						      <div class="title_timezone">
							     <img src="images/timezone.png"><span class="lang_system_time_zone lang_sdate_time_zone"><?=$language['system']['time_zone']?></span><hr>
							  </div>
							   <div class="time_view">
							       <button class="btn no_zindex" onclick="callWindow(this,'timezone','callWindowTimezone','')"><img class="in_btn" src="images/timezone.png">
								      <span class="lang_system_change_timezone lang_sdate_change_timezone"><?=$language['system']['change_timezone'] ?></span></button>
								</div>
						  </div>
						 
						
				   </div>
				   <div class="btns_extnernal">
				     <div class="btns_group">
					    
					     <button class="btn btn_next lang_system_next lang_sdate_next"><?=$language['system']['next']?></button>
						  <button class="btn btn_cancel lang_system_cancel lang_sdate_cancel" onclick="closeWindow(this);"><?=$language['system']['cancel']?></button>
						 
						
						
						 
						 
					 </div>
				   </div>
	     </div>
			  
        </div>
       
      </div>
     
    </div>
  
	
	 


  


	