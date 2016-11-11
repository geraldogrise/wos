<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>

<div class="menu_wnpad">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_wnpad_file"><?=$language['wnpad']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-new lang_system_new lang_wnpad_new"> <?=$language['wnpad']['new'];?></a></li>
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_wnpad_open" onclick="openWExplore(this,'openTxt_O','open','txt')" > <?=$language['wnpad']['open'];?></a></li>
				 <li><a href="#" class="btn-menu icon-save lang_system_save lang_wnpad_save" onclick="openWExplore(this,'saveTxt','save','txt')" > <?=$language['wnpad']['save'];?></a></li>
				 <li><a href="#" class="btn-menu icon-export lang_system_export lang_wnpad_export"> <?=$language['wnpad']['export'];?></a></li>
				 <li><a href="#" class="btn-menu icon-import lang_system_import lang_wnpad_import"> <?=$language['wnpad']['import'];?></a></li>
				 <li class="divider"></li>
				<li><a href="#"  onclick="closeWindow(this);" class="btn-menu icon-exit lang_system_exit lang_wnpad_exit"> <?=$language['wnpad']['exit'];?></a></li>
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_edit lang_wnpad_edit"><?=$language['wnpad']['edit'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="wnpad_undo(this)" class="btn-menu icon-undo lang_system_undo lang_wnpad_undo"> <?=$language['wnpad']['undo'];?></a></li>
				 <li><a href="#"  onclick="wnpad_redo(this)" class="btn-menu icon-redo lang_system_redo lang_wnpad_redo"> <?=$language['wnpad']['redo'];?></a></li>
				 <li><a href="#"  onclick="wnpad_cut(this)"   class="btn-menu icon-cut lang_system_cut lang_wnpad_cut"> <?=$language['wnpad']['cut'];?></a></li>
				 <li><a href="#"  onclick="wnpad_copy(this)" class="btn-menu icon-copy lang_system_copy lang_wnpad_copy"> <?=$language['wnpad']['copy'];?></a></li>
				 <li><a href="#"  onclick="wnpad_paste(this)" class="btn-menu icon-paste lang_system_paste lang_wnpad_paste"> <?=$language['wnpad']['paste'];?></a></li>
			
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_tools lang_wnpad_tools"><?=$language['wnpad']['tools'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-config lang_system_comfiguration lang_wnpad_comfiguration"> <?=$language['wnpad']['configuration'];?></a></li>
				 <li><a href="#" onclick="getAssociationOptions(this)" class="btn-menu icon-options lang_system_options lang_wnpad_options"> <?=$language['wnpad']['options'];?></a></li>
				
			
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_help lang_wnpad_help"><?=$language['wnpad']['help'];?></span> <span class="caret"></span></button>
		
			
	</div>
</div>