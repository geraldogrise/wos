<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>



<div class="menu_wnpad">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_wdoc_file"><?=$language['wdoc']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-new lang_system_new lang_wdoc_new"> <?=$language['wdoc']['new'];?></a></li>
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_wdoc_open" onclick="openWExplore(this,'openWDoc_O','open','wdoc')" > <?=$language['wdoc']['open'];?></a></li>
				 <li><a href="#" class="btn-menu icon-save lang_system_save lang_wdoc_save" onclick="openWExplore(this,'saveWDoc','save','wdoc')" > <?=$language['wdoc']['save'];?></a></li>
				 <li><a href="#" class="btn-menu icon-save lang_system_save lang_wdoc_save" onclick="openWExplore(this,'savePDF','save','wdoc')" " > <?=$language['wdoc']['save'];?> .pdf</a></li>
				 <li><a href="#" class="btn-menu icon-export" onclick="exportPDF(this);"><span class="lang_system_export lang_wdoc_export"> <?=$language['wdoc']['export'];?></span> .pdf</a></li>
				 <li><a href="#" class="btn-menu icon-export" onclick="exportDOC(this);"><span class="lang_system_export lang_wdoc_export"> <?=$language['wdoc']['export'];?></span> .doc</a></li>
				 <li><a href="#" class="btn-menu icon-export" onclick="exportDOCX(this);"><span class="lang_system_export lang_wdoc_export"> <?=$language['wdoc']['export'];?></span> .docx</a></li>
				 <li><a href="#" class="btn-menu icon-import lang_system_import lang_wdoc_import"> <?=$language['wdoc']['import'];?></a></li>
				 <li class="divider"></li>
				<li><a href="#"  onclick="closeWindow(this);" class="btn-menu icon-exit lang_wdoc_exit lang_wdoc_exit"> <?=$language['wdoc']['exit'];?></a></li>
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_edit lang_wdoc_edit"><?=$language['wdoc']['edit'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="wdoc_undo(this)" class="btn-menu icon-undo lang_system_undo lang_wdoc_undo"> <?=$language['wdoc']['undo'];?></a></li>
				 <li><a href="#"  onclick="wdoc_redo(this)" class="btn-menu icon-redo lang_system_redo lang_wdoc_redo"> <?=$language['wdoc']['redo'];?></a></li>
				 <li><a href="#"  onclick="wdoc_cut(this)"   class="btn-menu icon-cut lang_system_cut lang_wdoc_cut"> <?=$language['wdoc']['cut'];?></a></li>
				 <li><a href="#"  onclick="wdoc_copy(this)" class="btn-menu icon-copy lang_system_copy lang_wdoc_copy"> <?=$language['wdoc']['copy'];?></a></li>
				 <li><a href="#"  onclick="wdoc_paste(this)" class="btn-menu icon-paste lang_system_paste lang_wdoc_paste"> <?=$language['wdoc']['paste'];?></a></li>
			
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_tools lang_wdoc_tools"><?=$language['wdoc']['tools'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-config lang_system_configuration lang_wdoc_configuration"> <?=$language['wdoc']['configuration'];?></a></li>
				 <li><a href="#" onclick="getAssociationOptions(this)" class="btn-menu icon-options lang_system_options lang_wdoc_options"> <?=$language['wdoc']['options'];?></a></li>
				
			
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_help lang_wdoc_help"><?=$language['wdoc']['help'];?></span> <span class="caret"></span></button>
		
			
	</div>
</div>