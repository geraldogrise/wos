<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>

<div class="menu_wvideo">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_wvideo_file"><?=$language['wvideo']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_wvideo_open" onclick="openWExplore(this,'openWVideoExplore','open','avi,mp4,mpeg,mkv')" > <?=$language['wvideo']['open'];?></a></li>
				 <li class="divider"></li>
				<li><a href="#" onclick="closeWindow(this);"  class="btn-menu icon-exit lang_system_exit lang_wvideo_exit"> <?=$language['wvideo']['exit'];?></a></li>
			</ul>
			
	</div>
	
	
</div>