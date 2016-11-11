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
	   $pref =  $util->getLanguage("WCam",$_SESSION['user_system'],$_SESSION['group_user']);
	   require_once('lang.php');
	   	  
	?>
	<div id="wcam_0"  tabindex="-1" style="display:none;z-index:10;" class="abs window program wcam">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/wcam.png" style="width:16px;height:16px;" />
            WCam
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_close" onclick="closeWindowFade(this)"></a>
          </span>
        </div>
        <div class="abs window_content">
              <div class="top_bar">
										
						<div class="menu_npad menu_t">
							<?php  include('menu.php')?>
						</div>
											
				</div>
			 <div style="float:left;margin-top:10px;">
					<div id="webcam" class="webcam">
					</div>
					<div style="margin:5px;">
						<img src="images/webcamlogo.png" style="vertical-align:text-top"/>
						<select id="cameraNames" size="1" onChange="changeCamera()" style="width:245px;font-size:10px;height:25px;">
						</select>
						<button class="btn open_folder" onclick="base64_toimage()">
							<i class="icon-camera"></i>
							<span class="lang_system_snapshot lang_wcam_snapshot"><?=$language['wcam']['snapshot']?></span>
				        </button>
					</div>
		      </div>
			  <div style="width:330px;float:left;margin-left:5px;margin-top:10px;">
					<p><input id="formshot" value="" style="display:none;width:190px;height:70px;" class="formshot"></p>
					<p><img id="snapshot" style="width:330px;height:242px;" class="snapshot"></p>
		      </div>
									
        </div>
        
      </div>
     
    </div>
  
  
	
	
	
	
	
	
	
	