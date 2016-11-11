<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
<div class="menu_wnpad">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_csseditor_file"><?=$language['csseditor']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-new  lang_system_new lang_csseditor_new"> <?=$language['csseditor']['new'];?></a></li>
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_csseditor_open" onclick="openWExplore(this,'openHtml_O','open','css')" > <?=$language['csseditor']['open'];?></a></li>
				 <li><a href="#" class="btn-menu icon-save lang_system_save lang_csseditor_save" onclick="openWExplore(this,'saveHtml','save','css')" > <?=$language['csseditor']['save'];?></a></li>
				 <li><a href="#" class="btn-menu icon-export lang_system_export lang_csseditor_export"> <?=$language['csseditor']['export'];?></a></li>
				 <li><a href="#" class="btn-menu icon-import lang_system_import lang_csseditor_import"> <?=$language['csseditor']['import'];?></a></li>
				 <li class="divider"></li>
				<li><a href="#" onclick="closeWindow(this);"  class="btn-menu icon-exit lang_system_save lang_csseditor_save"> <?=$language['csseditor']['exit'];?></a></li>
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_edit lang_csseditor_edit"><?=$language['csseditor']['edit'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_undo(this)" class="btn-menu icon-undo lang_system_undo lang_csseditor_undo"> <?=$language['csseditor']['undo'];?></a></li>
				 <li><a href="#"  onclick="codemirror_redo(this)" class="btn-menu icon-redo lang_system_reo lang_csseditor_redo"> <?=$language['csseditor']['redo'];?></a></li>
				 <li><a href="#"  onclick="codemirror_cut(this)"   class="btn-menu icon-cut lang_system_cut lang_csseditor_cut"> <?=$language['csseditor']['cut'];?></a></li>
				 <li><a href="#"  onclick="codemirror_copy(this)" class="btn-menu icon-copy lang_system_copy lang_csseditor_copy"> <?=$language['csseditor']['copy'];?></a></li>
				 <li><a href="#"  onclick="codemirror_paste(this)" class="btn-menu icon-paste lang_system_paste lang_csseditor_paste"> <?=$language['csseditor']['paste'];?></a></li>
			   
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_search lang_csseditor_search"><?=$language['csseditor']['search'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_find(this)" class="btn-menu icon-find lang_system_find lang_csseditor_find"> <?=$language['csseditor']['find'];?></a></li>
				 <li><a href="#"  onclick="codemirror_findnext(this)" class="btn-menu icon-findnext lang_system_findnext lang_csseditor_findnext"> <?=$language['csseditor']['findnext'];?></a></li>
				 <li><a href="#"  onclick="codemirror_findprev(this)"   class="btn-menu icon-findprev lang_system_findprev lang_csseditor_findprev"> <?=$language['csseditor']['findprev'];?></a></li>
				 <li><a href="#"  onclick="codemirror_replace(this)" class="btn-menu icon-replace lang_system_replace lang_csseditor_relace"> <?=$language['csseditor']['replace'];?></a></li>
				 <li><a href="#"  onclick="codemirror_replaceall(this)" class="btn-menu icon-replaceall lang_system_replaceall lang_csseditor_replaceall"> <?=$language['csseditor']['replaceall'];?></a></li>
			   
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_view lang_csseditor_view"><?=$language['csseditor']['view'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_markLine(this)" class="btn-menu icon-markline lang_system_markline lang_csseditor_markline"> <?=$language['csseditor']['markline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_deleteLine(this)" class="btn-menu icon-deleteline lang_system_deleteline lang_csseditor_deleteline"> <?=$language['csseditor']['deleteline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_newlineAndIndent(this)"   class="btn-menu icon-newline lang_system_newline lang_csseditor_newline"> <?=$language['csseditor']['newline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_insertTab(this)" class="btn-menu icon-inserttab lang_system_inserttab lang_csseditor_inserttab"> <?=$language['csseditor']['inserttab'];?></a></li>
				 <li><a href="#"  onclick="codemirror_foldCode(this)" class="btn-menu icon-fold lang_system_fold lang_csseditor_fold"> <?=$language['csseditor']['fold'];?></a></li>
				 <li><a href="#"  onclick="codemirror_foldAll(this)" class="btn-menu icon-foldall lang_system_foldall lang_csseditor_foldall"> <?=$language['csseditor']['foldall'];?></a></li>
			     <li><a href="#"  onclick="codemirror_unfoldCode(this)" class="btn-menu icon-unfold lang_system_unfold lang_csseditor_unfold"> <?=$language['csseditor']['unfold'];?></a></li>
			     <li><a href="#"  onclick="codemirror_unfoldAll(this)" class="btn-menu icon-unfoldall lang_system_unfoldall lang_csseditor_unfoldall"> <?=$language['csseditor']['unfoldall'];?></a></li> 
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_tools lang_csseditor_tools"><?=$language['csseditor']['tools'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" onclick="codemirror_commentSelection(this,true)" class="btn-menu icon-comment lang_system_comment lang_csseditor_comment"> <?=$language['csseditor']['comment'];?></a></li>
				 <li><a href="#" onclick="codemirror_commentSelection(this,false)" class="btn-menu icon-uncomment lang_system_uncomment lang_csseditor_uncomment"> <?=$language['csseditor']['uncomment'];?></a></li>
				 <li><a href="#" onclick="codemirror_markText(this)" class="btn-menu icon-marktex lang_system_marktext lang_csseditor_marktext"> <?=$language['csseditor']['marktext'];?></a></li>
				 <li><a href="#" onclick="codemirror_removeallmark(this)" class="btn-menu icon-removeallmark lang_system_removeallmark lang_csseditor_removeallmark"> <?=$language['csseditor']['removeallmark'];?></a></li>
				 <li><a href="#" onclick="codemirror_autoFormatSelection(this)" class="btn-menu icon-autoformat lang_system_autoformat lang_csseditor_autoformat"> <?=$language['csseditor']['autoformat'];?></a></li>
				 <li><a href="#" class="btn-menu icon-config lang_system_configuration lang_csseditor_configuration"> <?=$language['csseditor']['configuration'];?></a></li>
				 <li><a href="#" onclick="getAssociationOptions(this)" class="btn-menu icon-options lang_system_options lang_csseditor_options"> <?=$language['csseditor']['options'];?></a></li>
				
			
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_help lang_csseditor_help"><?=$language['csseditor']['help'];?></span> <span class="caret"></span></button>
		
			
	</div>
</div>