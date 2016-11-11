<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
<?php
       include_once("system/util/languageUtil.php");
	   $util = new languageUtil();
	   $pref =  $util->getLanguage("WCalendar",$_SESSION['user_system'],$_SESSION['group_user']);
	   require_once('lang.php');
	   	  
	?>

	
	
	
	<div id="wcalendar_0" tabindex="-1"  style="display:none;z-index:10;"  class="abs window program wcalendar">
     <?php  include('popup.php')?>
	 <input type="hidden" value="N" class="is_new">
	  <input type="hidden" value="" class="events">
	
	  <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/wcalendar.png" style="width:18px;height:18px" />
            WCalendar  
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_resize" onclick="resizeWindowWCalendar(this,'resizeWCalendar(this)');"></a>
            <a href="#" class="window_close"  onclick="closeWindow(this);"></a>
          </span>
        </div>
		
        <div class="abs window_content" >
          <div class="top_bar" style="z-index:50;float:left;">
										
				<div class="menu_npad menu_t">
						<?php  include('menu.php')?>
				</div>
											
		  </div>
		  
		  <div class="window_aside">
             
		    <div class='external-events'>
				  <a href="#" class="newevent" onclick="showPopup(this,'wcalendarEvent')"></a> <span class="lang_system_events lang_wcalendar_events"><?=$language['wcalendar']['events']?></span>
				 
					
			</div>
		   
          </div>
          <div class="window_main">
               <div class='calendar'></div>
		  </div>
        </div>
		 <div class="abs window_bottom">
         
        </div>
       
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
  
 
	
	
	
	
	
	
	 


	