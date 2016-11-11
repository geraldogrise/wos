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
	  $caminhoAudio= $software."programs/waudio/";
	   
	?>
	<style>
.wrapper_audio {
	
	width: 100%;
	max-width:500px;
	position: absolute;
	margin: 0 auto;
}
</style>

	
	
	<div id="waudio_0"  tabindex="-1" style="display:none;z-index:10;" class="abs window program waudio">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/waudio.png" style="width:16px;height:16px;" />
            WAudio
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content modal-body">
		 <div class="top_bar" style="background:#f0f0f0;z-index:50;">
										
						<div class="menu_npad menu_t">
							<?php  include('menu.php')?>
						</div>
											
		 </div>
		  <div class="container_text" style="float:left;margin-top:2px;">
              <div class="audio_animate">
			    
			    <img style="display:none" class="img_animated" src="<?=$caminhoAudio?>/images/animated-sound-waves.gif">
			  </div>
			 <div class="audio_container">
				  <div class="wrapper_audio">
									<audio preload="auto" controls>
										<!--	<source src="<?=$caminhoAudio?>audio/BlueDucks_FourFlossFiveSix.mp3">
										<source src="<?=$caminhoAudio?>audio/BlueDucks_FourFlossFiveSix.ogg">
										<source src="<?=$caminhoAudio?>audio/BlueDucks_FourFlossFiveSix.wav">-->
										<source src="<?=$caminhoAudio?>audio/save.mp3">
									</audio>
														
				  </div>
				 
			 </div>
			 
		 </div>
		
									
        </div>
        
      </div>
	  
	 
	  
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
  
  
	
	
	
	
	
	
	
	