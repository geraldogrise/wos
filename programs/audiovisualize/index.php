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
	  $caminhoAudio= $software."computer".DIRECTORY_SEPARATOR;
	   
	?>

	
	
	<div id="audiovisualize_0"  tabindex="-1" style="display:none;z-index:10;" class="abs window program audiovisualize">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/audiovisualize.png" style="width:16px;height:16px;" />
            Audiovisualize
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_close" onclick="closeWindowFade(this,'closeAudiovisualize(this)');"></a>
          </span>
        </div>
        <div class="abs window_content modal-body">
		 <div class="top_bar" style="background:#f0f0f0;z-index:50;">
										
						<div class="menu_npad menu_t">
							<?php  include('menu.php')?>
						</div>
											
		 </div>
		  <div class="container_text" style="float:left;margin-top:2px;">
             
			 <div class="audio_container">
				   <canvas id='canvas' width="500" height="250"></canvas>
					
					<audio src="<?=$caminhoAudio?>blue.mp3" id="audiovisualize" controls>audio element not supported</audio>
				 
			 </div>
			 
		 </div>
		
									
        </div>
        
      </div>
	  
	 
	  
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
  
  
	
	
	
	
	
	
	
	