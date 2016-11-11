<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>

<div class="menu_audiovisualize">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_audiovisualize_file"><?=$language['audiovisualize']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_audiovisualize_open" onclick="openWExplore(this,'openAudiovisualize','open','mp3,wma,aac,ogg,wav')" > <?=$language['audiovisualize']['open'];?></a></li>
				 <li class="divider"></li>
				<li><a href="#" onclick="closeWindowFade(this,'closeAudiovisualize(this)');"  class="btn-menu icon-exit lang_system_exit lang_audiovisualize_exit"> <?=$language['audiovisualize']['exit'];?></a></li>
			</ul>
			
	</div>
	
	
</div>