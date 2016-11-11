<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
	<?php 
	  require_once('includePath.php');
	  include_once("system/util/languageUtil.php");
	  $util = new languageUtil();
	  $pref =  $util->getLanguage("Wnpad",$_SESSION['user_system'],$_SESSION['group_user']);
	  require_once('lang.php');
	  $caminhoVideo = $software."programs/wvideo/";
	   
	?>
	
	
	
	<div id="wvideo_0"  tabindex="-1" style="display:none;z-index:10;" class="abs window program wvideo_style">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/video_logo.png" style="width:16px;height:16px;" />
            WVideo
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_resize" onclick="resizeWindowVideo(this,'resizeVideo(this)');" ></a>
            <a href="#" class="window_close" onclick="closeWindow(this,stopVideo(this));"></a>
          </span>
        </div>
        <div class="abs window_content modal-body">
		 <div class="top_bar" style="background:#f0f0f0;z-index:50;">
										
						<div class="menu_npad menu_t">
							<?php  include('menu.php')?>
						</div>
											
		 </div>
		  <div class="container_text" style="float:left;margin-top:2px;">
          <video class="mejs-wmp" width="640px" height="360px" src="<?=$caminhoVideo?>media/echo-hereweare.mp4" type="video/mp4" 
			class="player1" id="player1" poster="<?=$caminhoVideo?>media/echo-hereweare.jpg" 
			controls="controls" preload="none"></video>
		 </div>
									
        </div>
        
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
  
  
	
	
	
	
	
	
	
	