<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
		<?php 
	
	       $caminho= "programs/wcalc/";
	  ?>
	

	
	<div id="wcalc_0"  tabindex="-1" style="display:none;z-index:10;" class="abs window program wcalc">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/wcalc.png" style="width:16px;height:16px;" />
            WCalc
		
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_close" onclick="closeWindowFade(this)"></a>
          </span>
        </div>
        <div class="abs window_content modal-body">
             <?php include('calculator.php');?>
									
        </div>
        
      </div>
      
    </div>
  	
  
	
	
	
	
	
	
	
	