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
	   $pref =  $util->getLanguage("Sound Manager",$_SESSION['user_system'],$_SESSION['group_user']);
	   require_once('lang.php');
	   	  
	?>
	
	
	 <div id="soundmanager_0" class="abs window soundmanager program">
      <?php  include('popup.php')?>
	   <input type="hidden" class="soundgallery" value="">
	   <input type="hidden" class="soundimage" value="">
	   <input type="hidden" class="soundtitle" value="">
	  <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/sound.png" style="height:20px;width:20px;" />
            Sound Manager
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
           <a href="#" class="window_resize" onclick="resizeWindowSoundManager(this,'resizeSoundManager(this)');"></a>
            <a href="#" class="window_close" onclick="closeWindow(this,stopSoundManager(this));"></a>
          </span>
        </div>
        <div class="abs window_content" style="float:left;">
		 <div class="top_bar" style="z-index:50;float:left;">
										
				<div class="menu_npad menu_t">
						<?php  include('menu.php')?>
				</div>
											
		  </div>
          <div class="window_aside align_center">
            <a href="#" onclick="showPopup(this,'soundInsert')" class="lang_system_create_album lang_soundmanager_create_album"><?=$language['soundmanager']['create_album']?></a>
			<img class="album_image" src="assets/images/misc/album_cover.jpg" style="width:120px;"/>
            <br />
            <em class="title lang_system_title_of_album lang_soundmanager_title_of_album"><?=$language['soundmanager']['title_of_album']?></em>
          </div>
          <div class="window_main">
            <table class="data">
              <thead>
                <tr>
                  <th class="shrink">
                     <a href="#" class="add_audio" onclick="openWExplore(this,'addAudio','save')"></a>
                  </th>
                  <th class="shrink lang_system_track lang_soundmanager_track">
                   <?=$language['soundmanager']['track']?>
                  </th>
                  <th class="lang_system_song_name lang_soundmanager_song_name">
                   <?=$language['soundmanager']['song_name']?>
                  </th>
                  <th class="shrink lang_system_length lang_soundmanager_length">
                   <?=$language['soundmanager']['length']?>
                  </th>
                </tr>
              </thead>
              <tbody>
               
              </tbody>
            </table>
          </div>
        </div>
        <div class="abs window_bottom">
        
        </div>
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
   
	
	
	
	
	