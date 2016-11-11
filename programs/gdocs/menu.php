<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>

<div class="menu_gdocs">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_gdocs_file"><?=$language['gdocs']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_gdocs_open" onclick="openWExplore(this,'openGdocsExplore','open','pdf,doc,docx,ppt,pptx,docx,dot,dotx')" > <?=$language['gdocs']['open'];?></a></li>
				 <li class="divider"></li>
				<li><a href="#" onclick="closeWindow(this);"  class="btn-menu icon-exit lang_system_exit lang_gdocs_exit"> <?=$language['gdocs']['exit'];?></a></li>
			</ul>
			
	</div>
	
	
</div>