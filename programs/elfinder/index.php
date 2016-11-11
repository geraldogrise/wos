<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
<?php
      require_once('includePath.php');
	  $caminhoElfinder= $software."programs/elfinder/";
?>

<div id="elfinder_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program elfinder">
     <div class="window_top">
          <span class="float_left">
            <img src="images/programs/elfinder.png" style="width:16px;height:16px;" />
                  Elfinder
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_close" onclick="closeWindowFade(this);"></a>
          </span>
        </div>
    
	
<iframe class="iframe_elfinder" style="width:900px;height:535px;" src="<?=$caminhoElfinder?>/elfinder.php"></iframe>	
	
	
	
	
	
</div>
  
	
	 


  


	