<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
<?php
      require_once('includePath.php');
	  $caminhoTalk= $software."programs/wtalk/";
?>

<div id="wtalk_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program wtalk">
     <div class="window_top">
          <span class="float_left">
            <img src="images/programs/wtalk.png" style="width:16px;height:16px;" />
                  Wtalk
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_close" onclick="closeWindowFade(this,'closeWtalk()');"></a>
          </span>
        </div>
    
	
<iframe class="iframe_wtalk" id ="iframe_wtalk" style="width:400px;height:535px;" src="<?=$caminhoTalk?>/wtalk.php"></iframe>	
	
	
	
	
	
</div>
  
	
	 


  


	