
<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
	
	<div  class="abs window  wcalendarEvent">
      <div class="abs window_inner">
        <div class="window_top_popup">
          <span class="float_left">
            <img src="images/wcalendar.png" style="width:18px;height:18px" />
            <i class="lang_system_insert_event lang_wcalendar_insert_event"> <?=$language['wcalendar']['insert_event']?></i>
          </span>
          <span class="float_right">
            
            <a href="#" onclick="$(this).closest('.window').hide();" class="window_close"></a>
          </span>
        </div>
        <div class="abs window_content">
             
			  <label class="lang_system_event_name lang_wcalendar_event_name"> <?=$language['wcalendar']['event_name']?></label>
              <input class="form-control nameEvent" placeholder="Event name">
			   <input  type="hidden" class="form-control imageEvent" placeholder="Event name">
			 <label class="group lang_system_image lang_wcalendar_image"><?=$language['wcalendar']['image']?></label>
               <div class="group evtimage">
			       
				   <ul class="ul_evtImage">
						         <li><a href="#"><img src="images/account.png"></a></li>
								 
				  </ul>
			   </div>
			   <div class="group">
			      <label>
				    <button class="btn btn_black insert" onclick="insertEvent(this)">
					  <i class="icon-plus"></i> <span class="lang_system_insert lang_wcalendar_insert"> <?=$language['wcalendar']['insert']?></span>
				   </button>
				   </label>
			   </div>
			  
			 
        </div>
       
      </div>
    
    </div>
  
 