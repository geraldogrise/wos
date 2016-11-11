<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
<div class="menu_wnpad">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_phpeditor_file"><?=$language['phpeditor']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-new  lang_system_new lang_phpeditor_new"> <?=$language['phpeditor']['new'];?></a></li>
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_phpeditor_open" onclick="openWExplore(this,'openPhp_O','open','php')" > <?=$language['phpeditor']['open'];?></a></li>
				 <li><a href="#" class="btn-menu icon-save lang_system_save lang_phpeditor_save" onclick="openWExplore(this,'savePhp','save','php')" > <?=$language['phpeditor']['save'];?></a></li>
				 <li><a href="#" class="btn-menu icon-export lang_system_export lang_phpeditor_export"> <?=$language['phpeditor']['export'];?></a></li>
				 <li><a href="#" class="btn-menu icon-import lang_system_import lang_phpeditor_import"> <?=$language['phpeditor']['import'];?></a></li>
				 <li class="divider"></li>
				<li><a href="#"  onclick="closeWindow(this);" class="btn-menu icon-exit lang_system_save lang_phpeditor_save"> <?=$language['phpeditor']['exit'];?></a></li>
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_edit lang_phpeditor_edit"><?=$language['phpeditor']['edit'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_undo(this)" class="btn-menu icon-undo lang_system_undo lang_phpeditor_undo"> <?=$language['phpeditor']['undo'];?></a></li>
				 <li><a href="#"  onclick="codemirror_redo(this)" class="btn-menu icon-redo lang_system_reo lang_phpeditor_redo"> <?=$language['phpeditor']['redo'];?></a></li>
				 <li><a href="#"  onclick="codemirror_cut(this)"   class="btn-menu icon-cut lang_system_cut lang_phpeditor_cut"> <?=$language['phpeditor']['cut'];?></a></li>
				 <li><a href="#"  onclick="codemirror_copy(this)" class="btn-menu icon-copy lang_system_copy lang_phpeditor_copy"> <?=$language['phpeditor']['copy'];?></a></li>
				 <li><a href="#"  onclick="codemirror_paste(this)" class="btn-menu icon-paste lang_system_paste lang_phpeditor_paste"> <?=$language['phpeditor']['paste'];?></a></li>
			   
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_search lang_phpeditor_search"><?=$language['phpeditor']['search'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_find(this)" class="btn-menu icon-find lang_system_find lang_phpeditor_find"> <?=$language['phpeditor']['find'];?></a></li>
				 <li><a href="#"  onclick="codemirror_findnext(this)" class="btn-menu icon-findnext lang_system_findnext lang_phpeditor_findnext"> <?=$language['phpeditor']['findnext'];?></a></li>
				 <li><a href="#"  onclick="codemirror_findprev(this)"   class="btn-menu icon-findprev lang_system_findprev lang_phpeditor_findprev"> <?=$language['phpeditor']['findprev'];?></a></li>
				 <li><a href="#"  onclick="codemirror_replace(this)" class="btn-menu icon-replace lang_system_replace lang_phpeditor_relace"> <?=$language['phpeditor']['replace'];?></a></li>
				 <li><a href="#"  onclick="codemirror_replaceall(this)" class="btn-menu icon-replaceall lang_system_replaceall lang_phpeditor_replaceall"> <?=$language['phpeditor']['replaceall'];?></a></li>
			   
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_view lang_phpeditor_view"><?=$language['phpeditor']['view'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_markLine(this)" class="btn-menu icon-markline lang_system_markline lang_phpeditor_markline"> <?=$language['phpeditor']['markline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_deleteLine(this)" class="btn-menu icon-deleteline lang_system_deleteline lang_phpeditor_deleteline"> <?=$language['phpeditor']['deleteline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_newlineAndIndent(this)"   class="btn-menu icon-newline lang_system_newline lang_phpeditor_newline"> <?=$language['phpeditor']['newline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_insertTab(this)" class="btn-menu icon-inserttab lang_system_inserttab lang_phpeditor_inserttab"> <?=$language['phpeditor']['inserttab'];?></a></li>
				 <li><a href="#"  onclick="codemirror_foldCode(this)" class="btn-menu icon-fold lang_system_fold lang_phpeditor_fold"> <?=$language['phpeditor']['fold'];?></a></li>
				 <li><a href="#"  onclick="codemirror_foldAll(this)" class="btn-menu icon-foldall lang_system_foldall lang_phpeditor_foldall"> <?=$language['phpeditor']['foldall'];?></a></li>
			     <li><a href="#"  onclick="codemirror_unfoldCode(this)" class="btn-menu icon-unfold lang_system_unfold lang_phpeditor_unfold"> <?=$language['phpeditor']['unfold'];?></a></li>
			     <li><a href="#"  onclick="codemirror_unfoldAll(this)" class="btn-menu icon-unfoldall lang_system_unfoldall lang_phpeditor_unfoldall"> <?=$language['phpeditor']['unfoldall'];?></a></li> 
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_tools lang_phpeditor_tools"><?=$language['phpeditor']['tools'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" onclick="codemirror_commentSelection(this,true)" class="btn-menu icon-comment lang_system_comment lang_phpeditor_comment"> <?=$language['phpeditor']['comment'];?></a></li>
				 <li><a href="#" onclick="codemirror_commentSelection(this,false)" class="btn-menu icon-uncomment lang_system_uncomment lang_phpeditor_uncomment"> <?=$language['phpeditor']['uncomment'];?></a></li>
				 <li><a href="#" onclick="codemirror_markText(this)" class="btn-menu icon-marktex lang_system_marktext lang_phpeditor_marktext"> <?=$language['phpeditor']['marktext'];?></a></li>
				 <li><a href="#" onclick="codemirror_removeallmark(this)" class="btn-menu icon-removeallmark lang_system_removeallmark lang_phpeditor_removeallmark"> <?=$language['phpeditor']['removeallmark'];?></a></li>
				 <li><a href="#" onclick="codemirror_autoFormatSelection(this)" class="btn-menu icon-autoformat lang_system_autoformat lang_phpeditor_autoformat"> <?=$language['phpeditor']['autoformat'];?></a></li>
				 <li><a href="#" class="btn-menu icon-config lang_system_configuration lang_phpeditor_configuration"> <?=$language['phpeditor']['configuration'];?></a></li>
				 <li><a href="#" onclick="getAssociationOptions(this)" class="btn-menu icon-options lang_system_options lang_phpeditor_options"> <?=$language['phpeditor']['options'];?></a></li>
				
			
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_help lang_phpeditor_help"><?=$language['phpeditor']['help'];?></span> <span class="caret"></span></button>
		
			
	</div>
</div>