<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
<div class="menu_wnpad">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_wzip_file"><?=$language['wzip']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-new lang_system_new lang_wzip_new"> <?=$language['wzip']['new'];?></a></li>
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_wzip_open" onclick="openWExplore(this,'openWZip_O','open','zip')" > <?=$language['wzip']['open'];?></a></li>
				 <li><a href="#" class="btn-menu icon-save lang_system_save lang_wzip_save" onclick="openWExplore(this,'saveWZip','save','zip')" > <?=$language['wzip']['save'];?></a></li>
				
				 <li class="divider"></li>
				<li><a href="#" onclick="closeWindow(this);"  class="btn-menu icon-exit lang_system_exit lang_wzip_exit"> <?=$language['wzip']['exit'];?></a></li>
			</ul>
			
	</div>

</div>