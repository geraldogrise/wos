<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>



<div class="menu_wnpad">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_soundmanager_file"><?=$language['soundmanager']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-new lang_system_new lang_soundmanager_new"> <?=$language['soundmanager']['new'];?></a></li>
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_soundmanager_open" onclick="openWExplore(this,'openSoundManager_O','open','sbm')" > <?=$language['soundmanager']['open'];?></a></li>
				 <li><a href="#" class="btn-menu icon-save lang_system_save lang_soundmanager_save" onclick="openWExplore(this,'saveSoundManager','save','sbm')" > <?=$language['soundmanager']['save'];?></a></li>
				
				 <li class="divider"></li>
				<li><a href="#"  onclick="closeWindow(this);" class="btn-menu icon-exit lang_system_exit lang_soundmanager_exit"> <?=$language['soundmanager']['exit'];?></a></li>
			</ul>
			
	</div>
	
	
</div>