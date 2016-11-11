<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
<div class="menu_wnpad">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_htmleditor_file"><?=$language['htmleditor']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-new  lang_system_new lang_htmleditor_new"> <?=$language['htmleditor']['new'];?></a></li>
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_htmleditor_open" onclick="openWExplore(this,'openHtml_O','open','html')" > <?=$language['htmleditor']['open'];?></a></li>
				 <li><a href="#" class="btn-menu icon-save lang_system_save lang_htmleditor_save" onclick="openWExplore(this,'saveHtml','save','html')" > <?=$language['htmleditor']['save'];?></a></li>
				 <li><a href="#" class="btn-menu icon-export lang_system_export lang_htmleditor_export"> <?=$language['htmleditor']['export'];?></a></li>
				 <li><a href="#" class="btn-menu icon-import lang_system_import lang_htmleditor_import"> <?=$language['htmleditor']['import'];?></a></li>
				 <li class="divider"></li>
				<li><a href="#" onclick="closeWindow(this);"  class="btn-menu icon-exit lang_system_save lang_htmleditor_save"> <?=$language['htmleditor']['exit'];?></a></li>
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_edit lang_htmleditor_edit"><?=$language['htmleditor']['edit'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_undo(this)" class="btn-menu icon-undo lang_system_undo lang_htmleditor_undo"> <?=$language['htmleditor']['undo'];?></a></li>
				 <li><a href="#"  onclick="codemirror_redo(this)" class="btn-menu icon-redo lang_system_reo lang_htmleditor_redo"> <?=$language['htmleditor']['redo'];?></a></li>
				 <li><a href="#"  onclick="codemirror_cut(this)"   class="btn-menu icon-cut lang_system_cut lang_htmleditor_cut"> <?=$language['htmleditor']['cut'];?></a></li>
				 <li><a href="#"  onclick="codemirror_copy(this)" class="btn-menu icon-copy lang_system_copy lang_htmleditor_copy"> <?=$language['htmleditor']['copy'];?></a></li>
				 <li><a href="#"  onclick="codemirror_paste(this)" class="btn-menu icon-paste lang_system_paste lang_htmleditor_paste"> <?=$language['htmleditor']['paste'];?></a></li>
			   
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_search lang_htmleditor_search"><?=$language['htmleditor']['search'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_find(this)" class="btn-menu icon-find lang_system_find lang_htmleditor_find"> <?=$language['htmleditor']['find'];?></a></li>
				 <li><a href="#"  onclick="codemirror_findnext(this)" class="btn-menu icon-findnext lang_system_findnext lang_htmleditor_findnext"> <?=$language['htmleditor']['findnext'];?></a></li>
				 <li><a href="#"  onclick="codemirror_findprev(this)"   class="btn-menu icon-findprev lang_system_findprev lang_htmleditor_findprev"> <?=$language['htmleditor']['findprev'];?></a></li>
				 <li><a href="#"  onclick="codemirror_replace(this)" class="btn-menu icon-replace lang_system_replace lang_htmleditor_relace"> <?=$language['htmleditor']['replace'];?></a></li>
				 <li><a href="#"  onclick="codemirror_replaceall(this)" class="btn-menu icon-replaceall lang_system_replaceall lang_htmleditor_replaceall"> <?=$language['htmleditor']['replaceall'];?></a></li>
			   
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_view lang_htmleditor_view"><?=$language['htmleditor']['view'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_markLine(this)" class="btn-menu icon-markline lang_system_markline lang_htmleditor_markline"> <?=$language['htmleditor']['markline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_deleteLine(this)" class="btn-menu icon-deleteline lang_system_deleteline lang_htmleditor_deleteline"> <?=$language['htmleditor']['deleteline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_newlineAndIndent(this)"   class="btn-menu icon-newline lang_system_newline lang_htmleditor_newline"> <?=$language['htmleditor']['newline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_insertTab(this)" class="btn-menu icon-inserttab lang_system_inserttab lang_htmleditor_inserttab"> <?=$language['htmleditor']['inserttab'];?></a></li>
				 <li><a href="#"  onclick="codemirror_foldCode(this)" class="btn-menu icon-fold lang_system_fold lang_htmleditor_fold"> <?=$language['htmleditor']['fold'];?></a></li>
				 <li><a href="#"  onclick="codemirror_foldAll(this)" class="btn-menu icon-foldall lang_system_foldall lang_htmleditor_foldall"> <?=$language['htmleditor']['foldall'];?></a></li>
			     <li><a href="#"  onclick="codemirror_unfoldCode(this)" class="btn-menu icon-unfold lang_system_unfold lang_htmleditor_unfold"> <?=$language['htmleditor']['unfold'];?></a></li>
			     <li><a href="#"  onclick="codemirror_unfoldAll(this)" class="btn-menu icon-unfoldall lang_system_unfoldall lang_htmleditor_unfoldall"> <?=$language['htmleditor']['unfoldall'];?></a></li> 
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_tools lang_htmleditor_tools"><?=$language['htmleditor']['tools'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" onclick="codemirror_commentSelection(this,true)" class="btn-menu icon-comment lang_system_comment lang_htmleditor_comment"> <?=$language['htmleditor']['comment'];?></a></li>
				 <li><a href="#" onclick="codemirror_commentSelection(this,false)" class="btn-menu icon-uncomment lang_system_uncomment lang_htmleditor_uncomment"> <?=$language['htmleditor']['uncomment'];?></a></li>
				 <li><a href="#" onclick="codemirror_markText(this)" class="btn-menu icon-marktex lang_system_marktext lang_htmleditor_marktext"> <?=$language['htmleditor']['marktext'];?></a></li>
				 <li><a href="#" onclick="codemirror_removeallmark(this)" class="btn-menu icon-removeallmark lang_system_removeallmark lang_htmleditor_removeallmark"> <?=$language['htmleditor']['removeallmark'];?></a></li>
				 <li><a href="#" onclick="codemirror_autoFormatSelection(this)" class="btn-menu icon-autoformat lang_system_autoformat lang_htmleditor_autoformat"> <?=$language['htmleditor']['autoformat'];?></a></li>
				 <li><a href="#" class="btn-menu icon-config lang_system_configuration lang_htmleditor_configuration"> <?=$language['htmleditor']['configuration'];?></a></li>
				 <li><a href="#" onclick="getAssociationOptions(this)" class="btn-menu icon-options lang_system_options lang_htmleditor_options"> <?=$language['htmleditor']['options'];?></a></li>
				
			
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_help lang_htmleditor_help"><?=$language['htmleditor']['help'];?></span> <span class="caret"></span></button>
		
			
	</div>
</div>