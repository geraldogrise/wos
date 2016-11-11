 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php 

 
  $software = $_SESSION["software"]; 
  $protocol =  $_SERVER['SERVER_PROTOCOL']; 
  $protocol = substr($protocol,0,strpos($protocol,"/"));
  $protocol = strtolower($protocol);
  $hostname = $_SERVER['SERVER_NAME'];
  $caminho = $protocol."://".$hostname."/".$software;
  

  
  ?>
	<div id="wweather_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program wweather">
		<div class="abs window_inner">
			<div class="window_top">
				  <span class="float_left">
					<img src="images/programs/wweather.png" style="width:16px;height:16px;" />
					WWeather
				  </span>
				  <span class="float_right">
					<a href="#" class="window_min"></a>
					<a href="#" class="window_close" onclick="closeWindowFade(this);"></a>
				  </span>
			</div>
			<div class="abs window_content">
				<iframe src="<?=$caminho?>/system/programs/wweather/weather.php" style="width:502px;height:533px;overflow:none"></iframe>

			</div>
       
      </div>
      
     
    </div>
  
	
	 


  


	