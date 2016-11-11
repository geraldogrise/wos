<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
<div class="menu_wnpad">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_jseditor_file"><?=$language['jseditor']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-new  lang_system_new lang_jseditor_new"> <?=$language['jseditor']['new'];?></a></li>
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_jseditor_open" onclick="openWExplore(this,'openJs_O','open','js')" > <?=$language['jseditor']['open'];?></a></li>
				 <li><a href="#" class="btn-menu icon-save lang_system_save lang_jseditor_save" onclick="openWExplore(this,'saveJs','save','js')" > <?=$language['jseditor']['save'];?></a></li>
				 <li><a href="#" class="btn-menu icon-export lang_system_export lang_jseditor_export"> <?=$language['jseditor']['export'];?></a></li>
				 <li><a href="#" class="btn-menu icon-import lang_system_import lang_jseditor_import"> <?=$language['jseditor']['import'];?></a></li>
				 <li class="divider"></li>
				<li><a href="#" onclick="closeWindow(this);"  class="btn-menu icon-exit lang_system_save lang_jseditor_save"> <?=$language['jseditor']['exit'];?></a></li>
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_edit lang_jseditor_edit"><?=$language['jseditor']['edit'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_undo(this)" class="btn-menu icon-undo lang_system_undo lang_jseditor_undo"> <?=$language['jseditor']['undo'];?></a></li>
				 <li><a href="#"  onclick="codemirror_redo(this)" class="btn-menu icon-redo lang_system_reo lang_jseditor_redo"> <?=$language['jseditor']['redo'];?></a></li>
				 <li><a href="#"  onclick="codemirror_cut(this)"   class="btn-menu icon-cut lang_system_cut lang_jseditor_cut"> <?=$language['jseditor']['cut'];?></a></li>
				 <li><a href="#"  onclick="codemirror_copy(this)" class="btn-menu icon-copy lang_system_copy lang_jseditor_copy"> <?=$language['jseditor']['copy'];?></a></li>
				 <li><a href="#"  onclick="codemirror_paste(this)" class="btn-menu icon-paste lang_system_paste lang_jseditor_paste"> <?=$language['jseditor']['paste'];?></a></li>
			   
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_search lang_jseditor_search"><?=$language['jseditor']['search'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_find(this)" class="btn-menu icon-find lang_system_find lang_jseditor_find"> <?=$language['jseditor']['find'];?></a></li>
				 <li><a href="#"  onclick="codemirror_findnext(this)" class="btn-menu icon-findnext lang_system_findnext lang_jseditor_findnext"> <?=$language['jseditor']['findnext'];?></a></li>
				 <li><a href="#"  onclick="codemirror_findprev(this)"   class="btn-menu icon-findprev lang_system_findprev lang_jseditor_findprev"> <?=$language['jseditor']['findprev'];?></a></li>
				 <li><a href="#"  onclick="codemirror_replace(this)" class="btn-menu icon-replace lang_system_replace lang_jseditor_relace"> <?=$language['jseditor']['replace'];?></a></li>
				 <li><a href="#"  onclick="codemirror_replaceall(this)" class="btn-menu icon-replaceall lang_system_replaceall lang_jseditor_replaceall"> <?=$language['jseditor']['replaceall'];?></a></li>
			   
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_view lang_jseditor_view"><?=$language['jseditor']['view'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_markLine(this)" class="btn-menu icon-markline lang_system_markline lang_jseditor_markline"> <?=$language['jseditor']['markline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_deleteLine(this)" class="btn-menu icon-deleteline lang_system_deleteline lang_jseditor_deleteline"> <?=$language['jseditor']['deleteline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_newlineAndIndent(this)"   class="btn-menu icon-newline lang_system_newline lang_jseditor_newline"> <?=$language['jseditor']['newline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_insertTab(this)" class="btn-menu icon-inserttab lang_system_inserttab lang_jseditor_inserttab"> <?=$language['jseditor']['inserttab'];?></a></li>
				 <li><a href="#"  onclick="codemirror_foldCode(this)" class="btn-menu icon-fold lang_system_fold lang_jseditor_fold"> <?=$language['jseditor']['fold'];?></a></li>
				 <li><a href="#"  onclick="codemirror_foldAll(this)" class="btn-menu icon-foldall lang_system_foldall lang_jseditor_foldall"> <?=$language['jseditor']['foldall'];?></a></li>
			     <li><a href="#"  onclick="codemirror_unfoldCode(this)" class="btn-menu icon-unfold lang_system_unfold lang_jseditor_unfold"> <?=$language['jseditor']['unfold'];?></a></li>
			     <li><a href="#"  onclick="codemirror_unfoldAll(this)" class="btn-menu icon-unfoldall lang_system_unfoldall lang_jseditor_unfoldall"> <?=$language['jseditor']['unfoldall'];?></a></li> 
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_tools lang_jseditor_tools"><?=$language['jseditor']['tools'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" onclick="codemirror_commentSelection(this,true)" class="btn-menu icon-comment lang_system_comment lang_jseditor_comment"> <?=$language['jseditor']['comment'];?></a></li>
				 <li><a href="#" onclick="codemirror_commentSelection(this,false)" class="btn-menu icon-uncomment lang_system_uncomment lang_jseditor_uncomment"> <?=$language['jseditor']['uncomment'];?></a></li>
				 <li><a href="#" onclick="codemirror_markText(this)" class="btn-menu icon-marktex lang_system_marktext lang_jseditor_marktext"> <?=$language['jseditor']['marktext'];?></a></li>
				 <li><a href="#" onclick="codemirror_removeallmark(this)" class="btn-menu icon-removeallmark lang_system_removeallmark lang_jseditor_removeallmark"> <?=$language['jseditor']['removeallmark'];?></a></li>
				 <li><a href="#" onclick="codemirror_autoFormatSelection(this)" class="btn-menu icon-autoformat lang_system_autoformat lang_jseditor_autoformat"> <?=$language['jseditor']['autoformat'];?></a></li>
				 <li><a href="#" class="btn-menu icon-config lang_system_configuration lang_jseditor_configuration"> <?=$language['jseditor']['configuration'];?></a></li>
				 <li><a href="#" onclick="getAssociationOptions(this)" class="btn-menu icon-options lang_system_options lang_jseditor_options"> <?=$language['jseditor']['options'];?></a></li>
				
			
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_help lang_jseditor_help"><?=$language['jseditor']['help'];?></span> <span class="caret"></span></button>
		
			
	</div>
</div>