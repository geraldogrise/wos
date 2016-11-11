<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>

<div class="menu_wnpad">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_paint_file"><?=$language['paint']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-new lang_system_new lang_paint_new"> <?=$language['paint']['new'];?></a></li>
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_paint_open" onclick="openWExplore(this,'openImagePaint','open','jpg,gif,png,jpeg')" > <?=$language['paint']['open'];?></a></li>
				 <li><a href="#" class="btn-menu icon-save lang_system_save lang_paint_save" onclick="openWExplore(this,'saveImagePaint','save','jpg,gif,png,jpeg')" > <?=$language['paint']['save'];?></a></li>
				
				 <li class="divider"></li>
				<li><a href="#" onclick="closeWindow(this);"  class="btn-menu icon-exit lang_system_exit lang_paint_exit"> <?=$language['paint']['exit'];?></a></li>
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_edit lang_paint_edit"><?=$language['paint']['edit'];?> </span><span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#"  onclick="paint_undo(this)" class="btn-menu icon-undo lang_system_undo lang_paint_undo"> <?=$language['paint']['undo'];?></a></li>
				 <li><a href="#"  onclick="paint_redo(this)" class="btn-menu icon-redo lang_system_redo lang_paint_redo"> <?=$language['paint']['redo'];?></a></li>
				
			
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_tools lang_paint_tools"><?=$language['paint']['tools'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-config lang_system_configutation lang_paint_configuration"> <?=$language['paint']['configuration'];?></a></li>
				 <li><a href="#" onclick="getAssociationOptions(this)" class="btn-menu icon-options lang_system_options lang_paint_option"> <?=$language['paint']['options'];?></a></li>
				
			
			</ul>
			
	</div>
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_help lang_paint_help"><?=$language['paint']['help'];?></span> <span class="caret"></span></button>
		
			
	</div>
</div>