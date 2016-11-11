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
	   $pref =  $util->getLanguage("Paint",$_SESSION['user_system'],$_SESSION['group_user']);
	   require_once('lang.php');
	   	  
	?>
	

	<div id="paint_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program paint">
       <input type="hidden" value="" class="data_image">
	  <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/paint.png" style="width:16px;height:16px" />
            Paint    
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content" style="float:left;">
             
			    <div class="top_bar" style="z-index:50;float:left;">
										
						<div class="menu_npad menu_t">
							<?php  include('menu.php')?>
						</div>
											
				</div>
				 <div class="container_text" style="float:left;margin-top:2px;">
                     <div class="paint_area"></div>
			     </div>
             
        </div>
        <div class="abs window_bottom">
         
        </div>
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
  
  

