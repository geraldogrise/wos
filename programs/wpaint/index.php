<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>


	<div id="wpaint_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program wpaint">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/wpaint.png" style="width:16px;height:16px" />
            WPaint    
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_resize"  onclick="resizeWindowWPaint(this,'resizeWPaint(this)');"></a>
            <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
                <a href="#" style="display:none" class="exportdata" onclick="openWExplore(this,'saveWPaint','save')" > </a>
				<input type="hidden" value="" class="image_data">
               <iframe src="programs/wpaint/wpaint.php" width="900px" height="500px" id="svgedit" class="paint" onload="init_embed(this)"></iframe> 
             
        </div>
        <div class="abs window_bottom">
         
        </div>
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
  
  

