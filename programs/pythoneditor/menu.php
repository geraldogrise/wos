<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
<div class="menu_wnpad">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_pythoneditor_file"><?=$language['pythoneditor']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-new  lang_system_new lang_pythoneditor_new"> <?=$language['pythoneditor']['new'];?></a></li>
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_pythoneditor_open" onclick="openWExplore(this,'openHtml_O','open','py')" > <?=$language['pythoneditor']['open'];?></a></li>
				 <li><a href="#" class="btn-menu icon-save lang_system_save lang_pythoneditor_save" onclick="openWExplore(this,'saveHtml','save','py')" > <?=$language['pythoneditor']['save'];?></a></li>
				 <li><a href="#" class="btn-menu icon-export lang_system_export lang_pythoneditor_export"> <?=$language['pythoneditor']['export'];?></a></li>
				 <li><a href="#" class="btn-menu icon-import lang_system_import lang_pythoneditor_import"> <?=$language['pythoneditor']['import'];?></a></li>
				 <li class="divider"></li>
				<li><a href="#" onclick="closeWindow(this);"  class="btn-menu icon-exit lang_system_save lang_pythoneditor_save"> <?=$language['pythoneditor']['exit'];?></a></li>
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_edit lang_pythoneditor_edit"><?=$language['pythoneditor']['edit'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_undo(this)" class="btn-menu icon-undo lang_system_undo lang_pythoneditor_undo"> <?=$language['pythoneditor']['undo'];?></a></li>
				 <li><a href="#"  onclick="codemirror_redo(this)" class="btn-menu icon-redo lang_system_reo lang_pythoneditor_redo"> <?=$language['pythoneditor']['redo'];?></a></li>
				 <li><a href="#"  onclick="codemirror_cut(this)"   class="btn-menu icon-cut lang_system_cut lang_pythoneditor_cut"> <?=$language['pythoneditor']['cut'];?></a></li>
				 <li><a href="#"  onclick="codemirror_copy(this)" class="btn-menu icon-copy lang_system_copy lang_pythoneditor_copy"> <?=$language['pythoneditor']['copy'];?></a></li>
				 <li><a href="#"  onclick="codemirror_paste(this)" class="btn-menu icon-paste lang_system_paste lang_pythoneditor_paste"> <?=$language['pythoneditor']['paste'];?></a></li>
			   
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_search lang_pythoneditor_search"><?=$language['pythoneditor']['search'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_find(this)" class="btn-menu icon-find lang_system_find lang_pythoneditor_find"> <?=$language['pythoneditor']['find'];?></a></li>
				 <li><a href="#"  onclick="codemirror_findnext(this)" class="btn-menu icon-findnext lang_system_findnext lang_pythoneditor_findnext"> <?=$language['pythoneditor']['findnext'];?></a></li>
				 <li><a href="#"  onclick="codemirror_findprev(this)"   class="btn-menu icon-findprev lang_system_findprev lang_pythoneditor_findprev"> <?=$language['pythoneditor']['findprev'];?></a></li>
				 <li><a href="#"  onclick="codemirror_replace(this)" class="btn-menu icon-replace lang_system_replace lang_pythoneditor_relace"> <?=$language['pythoneditor']['replace'];?></a></li>
				 <li><a href="#"  onclick="codemirror_replaceall(this)" class="btn-menu icon-replaceall lang_system_replaceall lang_pythoneditor_replaceall"> <?=$language['pythoneditor']['replaceall'];?></a></li>
			   
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_view lang_pythoneditor_view"><?=$language['pythoneditor']['view'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_markLine(this)" class="btn-menu icon-markline lang_system_markline lang_pythoneditor_markline"> <?=$language['pythoneditor']['markline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_deleteLine(this)" class="btn-menu icon-deleteline lang_system_deleteline lang_pythoneditor_deleteline"> <?=$language['pythoneditor']['deleteline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_newlineAndIndent(this)"   class="btn-menu icon-newline lang_system_newline lang_pythoneditor_newline"> <?=$language['pythoneditor']['newline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_insertTab(this)" class="btn-menu icon-inserttab lang_system_inserttab lang_pythoneditor_inserttab"> <?=$language['pythoneditor']['inserttab'];?></a></li>
				 <li><a href="#"  onclick="codemirror_foldCode(this)" class="btn-menu icon-fold lang_system_fold lang_pythoneditor_fold"> <?=$language['pythoneditor']['fold'];?></a></li>
				 <li><a href="#"  onclick="codemirror_foldAll(this)" class="btn-menu icon-foldall lang_system_foldall lang_pythoneditor_foldall"> <?=$language['pythoneditor']['foldall'];?></a></li>
			     <li><a href="#"  onclick="codemirror_unfoldCode(this)" class="btn-menu icon-unfold lang_system_unfold lang_pythoneditor_unfold"> <?=$language['pythoneditor']['unfold'];?></a></li>
			     <li><a href="#"  onclick="codemirror_unfoldAll(this)" class="btn-menu icon-unfoldall lang_system_unfoldall lang_pythoneditor_unfoldall"> <?=$language['pythoneditor']['unfoldall'];?></a></li> 
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_tools lang_pythoneditor_tools"><?=$language['pythoneditor']['tools'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" onclick="codemirror_commentSelection(this,true)" class="btn-menu icon-comment lang_system_comment lang_pythoneditor_comment"> <?=$language['pythoneditor']['comment'];?></a></li>
				 <li><a href="#" onclick="codemirror_commentSelection(this,false)" class="btn-menu icon-uncomment lang_system_uncomment lang_pythoneditor_uncomment"> <?=$language['pythoneditor']['uncomment'];?></a></li>
				 <li><a href="#" onclick="codemirror_markText(this)" class="btn-menu icon-marktex lang_system_marktext lang_pythoneditor_marktext"> <?=$language['pythoneditor']['marktext'];?></a></li>
				 <li><a href="#" onclick="codemirror_removeallmark(this)" class="btn-menu icon-removeallmark lang_system_removeallmark lang_pythoneditor_removeallmark"> <?=$language['pythoneditor']['removeallmark'];?></a></li>
				 <li><a href="#" onclick="codemirror_autoFormatSelection(this)" class="btn-menu icon-autoformat lang_system_autoformat lang_pythoneditor_autoformat"> <?=$language['pythoneditor']['autoformat'];?></a></li>
				 <li><a href="#" class="btn-menu icon-config lang_system_configuration lang_pythoneditor_configuration"> <?=$language['pythoneditor']['configuration'];?></a></li>
				 <li><a href="#" onclick="getAssociationOptions(this)" class="btn-menu icon-options lang_system_options lang_pythoneditor_options"> <?=$language['pythoneditor']['options'];?></a></li>
				
			
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_help lang_pythoneditor_help"><?=$language['pythoneditor']['help'];?></span> <span class="caret"></span></button>
		
			
	</div>
</div>