<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>

<div class="menu_wsound">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_wsound_file"><?=$language['wsound']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_wsound_open" onclick="openWExplore(this,'openWSoundExplore','open','mp3,wav,ogg,aac,wma')" > <?=$language['wsound']['open'];?></a></li>
				 <li class="divider"></li>
				<li><a href="#" onclick="closeWindowFade(this,'closeWSound(this)');"  class="btn-menu icon-exit lang_system_exit lang_wsound_exit"> <?=$language['wsound']['exit'];?></a></li>
			</ul>
			
	</div>
	
	
</div>