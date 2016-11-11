<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
	
	<div  class="abs window  ytbInsert">
      <div class="abs window_inner">
        <div class="window_top_popup">
          <span class="float_left">
            <img src="images/ytb.png" style="width:18px;height:18px" />
            <i class="lang_system_insert_youtube_video lang_ytbmanager_insert_youtube_video"><?=$language['ytbmanager']['insert_youtube_video']?></i>
          </span>
          <span class="float_right">
            
            <a href="#" onclick="$(this).closest('.window').hide();" class="window_close"></a>
          </span>
        </div>
        <div class="abs window_content">
             <div class="form-group">
            
			
			  
			  <label class="lang_system_youtube_url lang_ytbmanager_youtube_url"> <?=$language['ytbmanager']['youtube_url']?></label>
				
				 <iframe src="programs/ytbmanager/form_php.php" width="173px" height="30px"></iframe>
				<div class="form_area">
					<label class="lang_system_description lang_ytbmanager_description"><?=$language['ytbmanager']['description']?></label>
					<textarea rows="5" class="youtube_description no_io required"  cols="35"></textarea>
				</div>
				<button class="btn btn_black" onclick="insertNewYoutubeVideo(this)">
					<i class="icon-plus"></i>
					<span class="lang_system_insert lang_ytbmanager_insert"><?=$language['ytbmanager']['insert']?></span>
				</button>
			  
             </div>
        </div>
       
      </div>
    
    </div>
  
 