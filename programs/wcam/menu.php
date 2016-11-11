<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>

<div class="menu_wnpad">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_wcalendar_file lang_wcam_file"><?=$language['wcam']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				
				 <li><a href="#" class="btn-menu icon-save lang_wcalendar_save lang_wcam_save" onclick="openWExplore(this,'saveImageCam','save','jpg,gif,png,jpeg')" > <?=$language['wcam']['save'];?></a></li>
				  <li><a href="#" class="btn-menu icon-camera" onclick="base64_toimage()" > <?=$language['wcam']['save'];?></a></li>
				 <li class="divider"></li>
				<li><a href="#" onclick="closeWindowFade(this)"  class="btn-menu icon-exit lang_wcalendar_exit lang_wcam_exit"> <?=$language['wcam']['exit'];?></a></li>
			</ul>
			
	</div>
	
	
</div>