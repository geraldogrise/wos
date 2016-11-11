
<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>

<div class="menu_waudio">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_waudio_file"><?=$language['waudio']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_waudio_open" onclick="openWExplore(this,'openWAudioExplore','open','mp3,ogg,wma,aac,wav')" > <?=$language['waudio']['open'];?></a></li>
				 <li class="divider"></li>
				<li><a href="#"  onclick="closeWindow(this);"  class="btn-menu icon-exit lang_system_exit lang_waudio_exit"> <?=$language['waudio']['exit'];?></a></li>
			</ul>
			
	</div>
	
	
</div>