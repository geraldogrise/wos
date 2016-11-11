<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
	
	<div  class="abs window  soundInsert">
      <div class="abs window_inner">
        <div class="window_top_popup">
          <span class="float_left">
            <img src="images/sound.png" style="width:18px;height:18px" class="lang_system_create_audio_gallery lang_soundmanager_create_audio_gallery"/>
           <?=$language['soundmanager']['create_audio_gallery']?>
          </span>
          <span class="float_right">
            
            <a href="#" onclick="$(this).closest('.window').hide();" class="window_close"></a>
          </span>
        </div>
        <div class="abs window_content">
             <div class="form-group">
               <label class="lang_system_album_name lang_soundmanager_album_name"><?=$language['soundmanager']['album_name']?></label>
               <input class="form-control album_name required" placeholder="Album Name">
			   
			   <label class="group lang_system_image lang_soundmanager_image"><?=$language['soundmanager']['image']?></label>
               <div class="group">
			       
				   <input class="form-control form-control_width_button image_path required" style="display:none" placeholder="Image Path">
				   <img src="images/noimage.jpg" class="cover" onclick="openWExplore(this,'setSoundPathImage','open');" >
			   </div>
			   <label class="group lang_system_gallery lang_soundmanager_gallery"><?=$language['soundmanager']['gallery']?></label>
			   <div class="group">
				  
				   <input class="form-control form-control_width_button gallery_path required" placeholder="Gallery Path">
				   <button class="btn open_folder button_explore" onclick="openWExplore(this,'setSoundPathGallery','open');">
							<i class="icon-folder-open-alt"></i>
							<span class="lang_system_open lang_soundmanager_open"><?=$language['soundmanager']['open']?></span>
					</button>
			   </div>
			   <div class="group">
			      <label class="group">
				   <button class="btn btn_black insert" onclick="insertSoundManager(this)">
				    <i class="icon-plus"></i> 
					      <span class="lang_system_insert lang_soundmanager_insert"><?=$language['soundmanager']['insert']?></span>
					</button>
			   </label>
				  
			   </div>
			   
			  
             </div>
			  
        </div>
       
      </div>
    
    </div>
  
 