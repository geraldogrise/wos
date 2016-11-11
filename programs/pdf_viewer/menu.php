
<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>

<div class="menu_pdf_viewer">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_system_file lang_pdf_viewer_file"><?=$language['pdf_viewer']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-open lang_system_open lang_pdf_viewer_open" onclick="openWExplore(this,'openPdf_viewerExplore','open','pdf')" > <?=$language['pdf_viewer']['open'];?></a></li>
				 <li class="divider"></li>
				<li><a href="#"  onclick="closeWindow(this);" class="btn-menu icon-exit lang_system_exit lang_pdf_viewer_exit"> <?=$language['pdf_viewer']['exit'];?></a></li>
			</ul>
			
	</div>
	
	
</div>