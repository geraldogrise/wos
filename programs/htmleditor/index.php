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
	   $pref =  $util->getLanguage("Html Editor",$_SESSION['user_system'],$_SESSION['group_user']);
	   require_once('lang.php');
	   	  
	?>
	
	
	<div id="htmleditor_0" tabindex="-1"  style="display:none;z-index:10;"  class="abs window program htmleditor">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/html.png" style="width:16px;height:16px;" />
            Html Editor 
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_resize" onclick="resizeWindowHtmlEditor(this,'resizeHtmlEditor(this)');"></a>
            <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
             <div class="top_bar" >
				<div  class="menu_npad menu_t">
					<?php  include('menu.php')?>
				</div>
			</div>
			 <div class="container_text">
				<input type="hidden" class="clipboard" value="">
				<textarea  rows="20" cols="87" ></textarea>
              </div>
			
        </div>
       
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
  
 
	
	
	



  


	