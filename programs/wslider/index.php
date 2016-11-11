<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
<?php
      require_once('includePath.php');
	    $caminhoWslider= $software."programs/wslider/";
		
?>


	
	<div id="wslider_0" tabindex="-1"  style="display:none;z-index:10;"  class="abs window program wslider">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/wslider.png" style="width:16px;height:16px;" />
            WSlider
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <!--<a href="#" class="window_resize"></a>-->
            <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
          <?php include('slider.php');?>
        </div>
        <div class="abs window_bottom">
         
        </div>
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
  
 





