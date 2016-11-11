<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
<div class="menu_wnpad">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_xmleditor_file"><?=$language['xmleditor']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-new  lang_system_new lang_xmleditor_new"> <?=$language['xmleditor']['new'];?></a></li>
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_xmleditor_open" onclick="openWExplore(this,'openHtml_O','open','xml')" > <?=$language['xmleditor']['open'];?></a></li>
				 <li><a href="#" class="btn-menu icon-save lang_system_save lang_xmleditor_save" onclick="openWExplore(this,'saveHtml','save','xml')" > <?=$language['xmleditor']['save'];?></a></li>
				 <li><a href="#" class="btn-menu icon-export lang_system_export lang_xmleditor_export"> <?=$language['xmleditor']['export'];?></a></li>
				 <li><a href="#" class="btn-menu icon-import lang_system_import lang_xmleditor_import"> <?=$language['xmleditor']['import'];?></a></li>
				 <li class="divider"></li>
				<li><a href="#" onclick="closeWindow(this);"  class="btn-menu icon-exit lang_system_save lang_xmleditor_save"> <?=$language['xmleditor']['exit'];?></a></li>
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_edit lang_xmleditor_edit"><?=$language['xmleditor']['edit'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_undo(this)" class="btn-menu icon-undo lang_system_undo lang_xmleditor_undo"> <?=$language['xmleditor']['undo'];?></a></li>
				 <li><a href="#"  onclick="codemirror_redo(this)" class="btn-menu icon-redo lang_system_reo lang_xmleditor_redo"> <?=$language['xmleditor']['redo'];?></a></li>
				 <li><a href="#"  onclick="codemirror_cut(this)"   class="btn-menu icon-cut lang_system_cut lang_xmleditor_cut"> <?=$language['xmleditor']['cut'];?></a></li>
				 <li><a href="#"  onclick="codemirror_copy(this)" class="btn-menu icon-copy lang_system_copy lang_xmleditor_copy"> <?=$language['xmleditor']['copy'];?></a></li>
				 <li><a href="#"  onclick="codemirror_paste(this)" class="btn-menu icon-paste lang_system_paste lang_xmleditor_paste"> <?=$language['xmleditor']['paste'];?></a></li>
			   
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_search lang_xmleditor_search"><?=$language['xmleditor']['search'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_find(this)" class="btn-menu icon-find lang_system_find lang_xmleditor_find"> <?=$language['xmleditor']['find'];?></a></li>
				 <li><a href="#"  onclick="codemirror_findnext(this)" class="btn-menu icon-findnext lang_system_findnext lang_xmleditor_findnext"> <?=$language['xmleditor']['findnext'];?></a></li>
				 <li><a href="#"  onclick="codemirror_findprev(this)"   class="btn-menu icon-findprev lang_system_findprev lang_xmleditor_findprev"> <?=$language['xmleditor']['findprev'];?></a></li>
				 <li><a href="#"  onclick="codemirror_replace(this)" class="btn-menu icon-replace lang_system_replace lang_xmleditor_relace"> <?=$language['xmleditor']['replace'];?></a></li>
				 <li><a href="#"  onclick="codemirror_replaceall(this)" class="btn-menu icon-replaceall lang_system_replaceall lang_xmleditor_replaceall"> <?=$language['xmleditor']['replaceall'];?></a></li>
			   
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_view lang_xmleditor_view"><?=$language['xmleditor']['view'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_markLine(this)" class="btn-menu icon-markline lang_system_markline lang_xmleditor_markline"> <?=$language['xmleditor']['markline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_deleteLine(this)" class="btn-menu icon-deleteline lang_system_deleteline lang_xmleditor_deleteline"> <?=$language['xmleditor']['deleteline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_newlineAndIndent(this)"   class="btn-menu icon-newline lang_system_newline lang_xmleditor_newline"> <?=$language['xmleditor']['newline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_insertTab(this)" class="btn-menu icon-inserttab lang_system_inserttab lang_xmleditor_inserttab"> <?=$language['xmleditor']['inserttab'];?></a></li>
				 <li><a href="#"  onclick="codemirror_foldCode(this)" class="btn-menu icon-fold lang_system_fold lang_xmleditor_fold"> <?=$language['xmleditor']['fold'];?></a></li>
				 <li><a href="#"  onclick="codemirror_foldAll(this)" class="btn-menu icon-foldall lang_system_foldall lang_xmleditor_foldall"> <?=$language['xmleditor']['foldall'];?></a></li>
			     <li><a href="#"  onclick="codemirror_unfoldCode(this)" class="btn-menu icon-unfold lang_system_unfold lang_xmleditor_unfold"> <?=$language['xmleditor']['unfold'];?></a></li>
			     <li><a href="#"  onclick="codemirror_unfoldAll(this)" class="btn-menu icon-unfoldall lang_system_unfoldall lang_xmleditor_unfoldall"> <?=$language['xmleditor']['unfoldall'];?></a></li> 
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_tools lang_xmleditor_tools"><?=$language['xmleditor']['tools'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" onclick="codemirror_commentSelection(this,true)" class="btn-menu icon-comment lang_system_comment lang_xmleditor_comment"> <?=$language['xmleditor']['comment'];?></a></li>
				 <li><a href="#" onclick="codemirror_commentSelection(this,false)" class="btn-menu icon-uncomment lang_system_uncomment lang_xmleditor_uncomment"> <?=$language['xmleditor']['uncomment'];?></a></li>
				 <li><a href="#" onclick="codemirror_markText(this)" class="btn-menu icon-marktex lang_system_marktext lang_xmleditor_marktext"> <?=$language['xmleditor']['marktext'];?></a></li>
				 <li><a href="#" onclick="codemirror_removeallmark(this)" class="btn-menu icon-removeallmark lang_system_removeallmark lang_xmleditor_removeallmark"> <?=$language['xmleditor']['removeallmark'];?></a></li>
				 <li><a href="#" onclick="codemirror_autoFormatSelection(this)" class="btn-menu icon-autoformat lang_system_autoformat lang_xmleditor_autoformat"> <?=$language['xmleditor']['autoformat'];?></a></li>
				 <li><a href="#" class="btn-menu icon-config lang_system_configuration lang_xmleditor_configuration"> <?=$language['xmleditor']['configuration'];?></a></li>
				 <li><a href="#" onclick="getAssociationOptions(this)" class="btn-menu icon-options lang_system_options lang_xmleditor_options"> <?=$language['xmleditor']['options'];?></a></li>
				
			
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_help lang_xmleditor_help"><?=$language['xmleditor']['help'];?></span> <span class="caret"></span></button>
		
			
	</div>
</div>