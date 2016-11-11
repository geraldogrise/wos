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
	   $pref =  $util->getLanguage("Youtube Manager",$_SESSION['user_system'],$_SESSION['group_user']);
	   require_once('lang.php');
	   	  
	?>
	
	
	<div id="ytbmanager_0" tabindex="-1"  style="display:none;z-index:10;"  class="abs window program ytbmanager">
     <?php  include('popup.php')?>
	 <input type="hidden" value="N" class="is_new">
	 <input type="hidden" value="" class="youtube_info">
	  <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/ytb.png" style="width:18px;height:18px" />
            Youtube Manager
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_resize" onclick="resizeWindowYtbManager(this,'resizeYtbManager(this)');"></a>
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
             <div class="toolbar">
			     <a href="#" class="newvideo lang_system_new_video lang_ytbmanager_new_video" onclick="showPopup(this,'ytbInsert')"><?=$language['ytbmanager']['new_video']?></a>
				 <a href="#" class="remove lang_system_remove lang_ytbmanager_remove" onclick="removeVideo(this)"><?=$language['ytbmanager']['remove']?></a>
			 </div>
		     <ul class="featured_tabs">
				
				
		      </ul>
		   
          </div>
          <div class="window_main">
             
			 <div class="featured_content">
				   <iframe width="460" height="360" src="" frameborder="0" allowfullscreen></iframe>
			  </div>
		  </div>
        </div>
		 <div class="abs window_bottom">
         
        </div>
       
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
  
 
	
	
	
	
	
	
	 


	