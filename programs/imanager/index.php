<?php
       include_once("system/util/languageUtil.php");
	   $util = new languageUtil();
	   $pref =  $util->getLanguage("Imanager",$_SESSION['user_system'],$_SESSION['group_user']);
	   require_once('lang.php');
	   	  
	?>
	
	
	
	<div id="imanager_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program imanager">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/imanager.png" style="width:16px;height:16px" />
            Imanager
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_resize" onclick="resizeWindowImanager(this,'resizeImanager(this)');"></a>
            <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
          <div class="window_aside">
           
          </div>
          <div class="window_main">
           
		  </div>
        </div>
        <div class="abs window_bottom">
         
        </div>
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
  
 
	
	
	
	
	 
	