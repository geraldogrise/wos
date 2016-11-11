<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
<div class="menu_wnpad">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_sqleditor_file"><?=$language['sqleditor']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-new  lang_system_new lang_sqleditor_new"> <?=$language['sqleditor']['new'];?></a></li>
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_sqleditor_open" onclick="openWExplore(this,'openSql_O','open','sql')" > <?=$language['sqleditor']['open'];?></a></li>
				 <li><a href="#" class="btn-menu icon-save lang_system_save lang_sqleditor_save" onclick="openWExplore(this,'saveSql','save','sql')" > <?=$language['sqleditor']['save'];?></a></li>
				 <li><a href="#" class="btn-menu icon-export lang_system_export lang_sqleditor_export"> <?=$language['sqleditor']['export'];?></a></li>
				 <li><a href="#" class="btn-menu icon-import lang_system_import lang_sqleditor_import"> <?=$language['sqleditor']['import'];?></a></li>
				 <li class="divider"></li>
				<li><a href="#"  onclick="closeWindow(this);" class="btn-menu icon-exit lang_system_save lang_sqleditor_save"> <?=$language['sqleditor']['exit'];?></a></li>
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_edit lang_sqleditor_edit"><?=$language['sqleditor']['edit'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_undo(this)" class="btn-menu icon-undo lang_system_undo lang_sqleditor_undo"> <?=$language['sqleditor']['undo'];?></a></li>
				 <li><a href="#"  onclick="codemirror_redo(this)" class="btn-menu icon-redo lang_system_reo lang_sqleditor_redo"> <?=$language['sqleditor']['redo'];?></a></li>
				 <li><a href="#"  onclick="codemirror_cut(this)"   class="btn-menu icon-cut lang_system_cut lang_sqleditor_cut"> <?=$language['sqleditor']['cut'];?></a></li>
				 <li><a href="#"  onclick="codemirror_copy(this)" class="btn-menu icon-copy lang_system_copy lang_sqleditor_copy"> <?=$language['sqleditor']['copy'];?></a></li>
				 <li><a href="#"  onclick="codemirror_paste(this)" class="btn-menu icon-paste lang_system_paste lang_sqleditor_paste"> <?=$language['sqleditor']['paste'];?></a></li>
			   
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_search lang_sqleditor_search"><?=$language['sqleditor']['search'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_find(this)" class="btn-menu icon-find lang_system_find lang_sqleditor_find"> <?=$language['sqleditor']['find'];?></a></li>
				 <li><a href="#"  onclick="codemirror_findnext(this)" class="btn-menu icon-findnext lang_system_findnext lang_sqleditor_findnext"> <?=$language['sqleditor']['findnext'];?></a></li>
				 <li><a href="#"  onclick="codemirror_findprev(this)"   class="btn-menu icon-findprev lang_system_findprev lang_sqleditor_findprev"> <?=$language['sqleditor']['findprev'];?></a></li>
				 <li><a href="#"  onclick="codemirror_replace(this)" class="btn-menu icon-replace lang_system_replace lang_sqleditor_relace"> <?=$language['sqleditor']['replace'];?></a></li>
				 <li><a href="#"  onclick="codemirror_replaceall(this)" class="btn-menu icon-replaceall lang_system_replaceall lang_sqleditor_replaceall"> <?=$language['sqleditor']['replaceall'];?></a></li>
			   
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_view lang_sqleditor_view"><?=$language['sqleditor']['view'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="codemirror_markLine(this)" class="btn-menu icon-markline lang_system_markline lang_sqleditor_markline"> <?=$language['sqleditor']['markline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_deleteLine(this)" class="btn-menu icon-deleteline lang_system_deleteline lang_sqleditor_deleteline"> <?=$language['sqleditor']['deleteline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_newlineAndIndent(this)"   class="btn-menu icon-newline lang_system_newline lang_sqleditor_newline"> <?=$language['sqleditor']['newline'];?></a></li>
				 <li><a href="#"  onclick="codemirror_insertTab(this)" class="btn-menu icon-inserttab lang_system_inserttab lang_sqleditor_inserttab"> <?=$language['sqleditor']['inserttab'];?></a></li>
				 <li><a href="#"  onclick="codemirror_foldCode(this)" class="btn-menu icon-fold lang_system_fold lang_sqleditor_fold"> <?=$language['sqleditor']['fold'];?></a></li>
				 <li><a href="#"  onclick="codemirror_foldAll(this)" class="btn-menu icon-foldall lang_system_foldall lang_sqleditor_foldall"> <?=$language['sqleditor']['foldall'];?></a></li>
			     <li><a href="#"  onclick="codemirror_unfoldCode(this)" class="btn-menu icon-unfold lang_system_unfold lang_sqleditor_unfold"> <?=$language['sqleditor']['unfold'];?></a></li>
			     <li><a href="#"  onclick="codemirror_unfoldAll(this)" class="btn-menu icon-unfoldall lang_system_unfoldall lang_sqleditor_unfoldall"> <?=$language['sqleditor']['unfoldall'];?></a></li> 
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_tools lang_sqleditor_tools"><?=$language['sqleditor']['tools'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" onclick="codemirror_commentSelection(this,true)" class="btn-menu icon-comment lang_system_comment lang_sqleditor_comment"> <?=$language['sqleditor']['comment'];?></a></li>
				 <li><a href="#" onclick="codemirror_commentSelection(this,false)" class="btn-menu icon-uncomment lang_system_uncomment lang_sqleditor_uncomment"> <?=$language['sqleditor']['uncomment'];?></a></li>
				 <li><a href="#" onclick="codemirror_markText(this)" class="btn-menu icon-marktex lang_system_marktext lang_sqleditor_marktext"> <?=$language['sqleditor']['marktext'];?></a></li>
				 <li><a href="#" onclick="codemirror_removeallmark(this)" class="btn-menu icon-removeallmark lang_system_removeallmark lang_sqleditor_removeallmark"> <?=$language['sqleditor']['removeallmark'];?></a></li>
				 <li><a href="#" onclick="codemirror_autoFormatSelection(this)" class="btn-menu icon-autoformat lang_system_autoformat lang_sqleditor_autoformat"> <?=$language['sqleditor']['autoformat'];?></a></li>
				 <li><a href="#" class="btn-menu icon-config lang_system_configuration lang_sqleditor_configuration"> <?=$language['sqleditor']['configuration'];?></a></li>
				 <li><a href="#" onclick="getAssociationOptions(this)" class="btn-menu icon-options lang_system_options lang_sqleditor_options"> <?=$language['sqleditor']['options'];?></a></li>
				
			
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_help lang_sqleditor_help"><?=$language['sqleditor']['help'];?></span> <span class="caret"></span></button>
		
			
	</div>
</div>