<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>



<div class="menu_wnpad">
	<div class="btn-group">
		<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="lang_wcalendar_file lang_wcalendar_file"><?=$language['wcalendar']['file'];?></span> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				 <li><a href="#" class="btn-menu icon-new lang_wcalendar_new lang_wcalendar_new"> <?=$language['wcalendar']['new'];?></a></li>
				 <li><a href="#" class="btn-menu icon-open lang_wcalendar_open lang_wcalendar_open" onclick="openWExplore(this,'openWCalendar_O','open','wcal')" > <?=$language['wcalendar']['open'];?></a></li>
				 <li><a href="#" class="btn-menu icon-save lang_wcalendar_save lang_wcalendar_save" onclick="openWExplore(this,'saveWCalendar','save','wcal')" > <?=$language['wcalendar']['save'];?></a></li>
				
				 <li class="divider"></li>
				<li><a href="#" onclick="closeWindow(this);" class="btn-menu icon-exit lang_wcalendar_exit lang_wcalendar_exit"> <?=$language['wcalendar']['exit'];?></a></li>
			</ul>
			
	</div>
	
	
</div>