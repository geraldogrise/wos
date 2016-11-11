<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>



<div class="menu_wnpad">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_ytbmanager_file"><?=$language['ytbmanager']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-new lang_system_new lang_ytbmanager_new"> <?=$language['ytbmanager']['new'];?></a></li>
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_ytbmanager_open" onclick="openWExplore(this,'openYtbManager_O','open','ytb')" > <?=$language['ytbmanager']['open'];?></a></li>
				 <li><a href="#" class="btn-menu icon-save lang_system_save lang_ytbmanager_save" onclick="openWExplore(this,'saveYtbManager','save','ytb')" > <?=$language['ytbmanager']['save'];?></a></li>
				
				 <li class="divider"></li>
				<li><a href="#" onclick="closeWindow(this);"  class="btn-menu icon-exit lang_system_exit lang_ytbmanager_exit"> <?=$language['ytbmanager']['exit'];?></a></li>
			</ul>
			
	</div>
	
	
</div>