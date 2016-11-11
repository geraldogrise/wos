<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>

	<div id="stickies_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program stickies">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/stickies.png" style="width:16px;height:16px;" />
              Stickies
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
             <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
                <form class="form_note" action="post">
				   <input type="hidden" name="action" class="action_note" value="save">
				   <input type="hidden" name="prev_note" class="prev_note" value="">
				   <input type="hidden" value="" name="id_user" class="id_user_note">
				   <input type="hidden" value="" name="id_note" class="id_note">
				   <input type="hidden" value="" name="id_group" class="id_group_note">
				   <textarea name="note" onclick="saveNote(this)" rows="8" cols="5"></textarea>
				  
				</form>
        </div>
       
      </div>
     
    </div>
	
	




  


	