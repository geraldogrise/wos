<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
<div class="menu_wnpad">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_ccharpeditor_file"><?=$language['ccharpEditor']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-new  lang_system_new lang_ccharpeditor_new"> <?=$language['ccharpEditor']['new'];?></a></li>
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_ccharpeditor_open" onclick="openWExplore(this,'openCcharp_O','open','cs')" > <?=$language['ccharpEditor']['open'];?></a></li>
				 <li><a href="#" class="btn-menu icon-save lang_system_save lang_ccharpeditor_save" onclick="openWExplore(this,'saveCcharp','save','cs')" > <?=$language['ccharpEditor']['save'];?></a></li>
				 <li><a href="#" class="btn-menu icon-export lang_system_export lang_ccharpeditor_export"> <?=$language['ccharpEditor']['export'];?></a></li>
				 <li><a href="#" class="btn-menu icon-import lang_system_import lang_ccharpeditor_import"> <?=$language['ccharpEditor']['import'];?></a></li>
				 <li class="divider"></li>
				<li><a href="#" onclick="closeWindow(this);"  class="btn-menu icon-exit lang_system_save lang_ccharpeditor_save"> <?=$language['ccharpEditor']['exit'];?></a></li>
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_edit lang_ccharpeditor_edit"><?=$language['ccharpEditor']['edit'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_undo(this)" class="btn-menu icon-undo lang_system_undo lang_ccharpeditor_undo"> <?=$language['ccharpEditor']['undo'];?></a></li>
				 <li><a href="#"  onclick="codemirror_redo(this)" class="btn-menu icon-redo lang_system_reo lang_ccharpeditor_redo"> <?=$language['ccharpEditor']['redo'];?></a></li>
				 <li><a href="#"  onclick="codemirror_cut(this)"   class="btn-menu icon-cut lang_system_cut lang_ccharpeditor_cut"> <?=$language['ccharpEditor']['cut'];?></a></li>
				 <li><a href="#"  onclick="codemirror_copy(this)" class="btn-menu icon-copy lang_system_copy lang_ccharpeditor_copy"> <?=$language['ccharpEditor']['copy'];?></a></li>
				 <li><a href="#"  onclick="codemirror_paste(this)" class="btn-menu icon-paste lang_system_paste lang_ccharpeditor_paste"> <?=$language['ccharpEditor']['paste'];?></a></li>
			   
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_search lang_ccharpeditor_search"><?=$language['ccharpEditor']['search'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_find(this)" class="btn-menu icon-find lang_system_find lang_ccharpeditor_find"> <?=$language['ccharpEditor']['find'];?></a></li>
				 <li><a href="#"  onclick="codemirror_findnext(this)" class="btn-menu icon-findnext lang_system_findnext lang_ccharpeditor_findnext"> <?=$language['ccharpEditor']['findnext'];?></a></li>
				 <li><a href="#"  onclick="codemirror_findprev(this)"   class="btn-menu icon-findprev lang_system_findprev lang_ccharpeditor_findprev"> <?=$language['ccharpEditor']['findprev'];?></a></li>
				 <li><a href="#"  onclick="codemirror_replace(this)" class="btn-menu icon-replace lang_system_replace lang_ccharpeditor_relace"> <?=$language['ccharpEditor']['replace'];?></a></li>
				 <li><a href="#"  onclick="codemirror_replaceall(this)" class="btn-menu icon-replaceall lang_system_replaceall lang_ccharpeditor_replaceall"> <?=$language['ccharpEditor']['replaceall'];?></a></li>
			   
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_view lang_ccharpeditor_view"><?=$language['ccharpEditor']['view'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_markLine(this)" class="btn-menu icon-markline lang_system_markline lang_ccharpeditor_markline"> <?=$language['ccharpEditor']['markline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_deleteLine(this)" class="btn-menu icon-deleteline lang_system_deleteline lang_ccharpeditor_deleteline"> <?=$language['ccharpEditor']['deleteline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_newlineAndIndent(this)"   class="btn-menu icon-newline lang_system_newline lang_ccharpeditor_newline"> <?=$language['ccharpEditor']['newline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_insertTab(this)" class="btn-menu icon-inserttab lang_system_inserttab lang_ccharpeditor_inserttab"> <?=$language['ccharpEditor']['inserttab'];?></a></li>
				 <li><a href="#"  onclick="codemirror_foldCode(this)" class="btn-menu icon-fold lang_system_fold lang_ccharpeditor_fold"> <?=$language['ccharpEditor']['fold'];?></a></li>
				 <li><a href="#"  onclick="codemirror_foldAll(this)" class="btn-menu icon-foldall lang_system_foldall lang_ccharpeditor_foldall"> <?=$language['ccharpEditor']['foldall'];?></a></li>
			     <li><a href="#"  onclick="codemirror_unfoldCode(this)" class="btn-menu icon-unfold lang_system_unfold lang_ccharpeditor_unfold"> <?=$language['ccharpEditor']['unfold'];?></a></li>
			     <li><a href="#"  onclick="codemirror_unfoldAll(this)" class="btn-menu icon-unfoldall lang_system_unfoldall lang_ccharpeditor_unfoldall"> <?=$language['ccharpEditor']['unfoldall'];?></a></li> 
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_tools lang_ccharpeditor_tools"><?=$language['ccharpEditor']['tools'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" onclick="codemirror_commentSelection(this,true)" class="btn-menu icon-comment lang_system_comment lang_ccharpeditor_comment"> <?=$language['ccharpEditor']['comment'];?></a></li>
				 <li><a href="#" onclick="codemirror_commentSelection(this,false)" class="btn-menu icon-uncomment lang_system_uncomment lang_ccharpeditor_uncomment"> <?=$language['ccharpEditor']['uncomment'];?></a></li>
				 <li><a href="#" onclick="codemirror_markText(this)" class="btn-menu icon-marktex lang_system_marktext lang_ccharpeditor_marktext"> <?=$language['ccharpEditor']['marktext'];?></a></li>
				 <li><a href="#" onclick="codemirror_removeallmark(this)" class="btn-menu icon-removeallmark lang_system_removeallmark lang_ccharpeditor_removeallmark"> <?=$language['ccharpEditor']['removeallmark'];?></a></li>
				 <li><a href="#" onclick="codemirror_autoFormatSelection(this)" class="btn-menu icon-autoformat lang_system_autoformat lang_ccharpeditor_autoformat"> <?=$language['ccharpEditor']['autoformat'];?></a></li>
				 <li><a href="#" onclick="callWindowWithParameter(this,'language','callWindowLanguage','','ccharpeditor,lang_ccharpeditor')" class="btn-menu icon-config lang_system_configuration lang_ccharpeditor_configuration"> <?=$language['ccharpEditor']['configuration'];?></a></li>
				 <li><a href="#" onclick="getAssociationOptions(this)" class="btn-menu icon-options lang_system_options lang_ccharpeditor_options"> <?=$language['ccharpEditor']['options'];?></a></li>
				
			
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_help lang_ccharpeditor_help"><?=$language['ccharpEditor']['help'];?></span> <span class="caret"></span></button>
		
			
	</div>
</div>