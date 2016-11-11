
<?php

   $caminho= getcwd();
    $caminho = str_replace("system".DIRECTORY_SEPARATOR."controller","",$caminho);
   $caminho = str_replace("\\","/",$caminho);
   require_once($caminho.'/system/includeLang.php');

?>
 <div class="mouse_icon content_aba" style="display:none">	
			     
				  <h1 class="lang_system_choose_mousen lang_appareance_choose_mouse"><?=$language['system']['choose_mouse']?></h1>
				  <div class="info_current">
				      <div class="user_image_select mouse_sel">
					      <img src="images/account.png">
					  </div>
					    
				  </div>
				  <span class="info_title lang_system_chouse_mouse_description lang_appareance_chouse_mouse_description"><?=$language['system']['chouse_mouse_description']?></span>
				  <div class="pictures_account">
				          <ul class="ul_icons">
						         <li><a href="#"><img src="images/account.png"></a></li>
								 
						  </ul>
				  </div>
				  <div class="buttons_actions" >
				      <div class="upimages">
					      <a href="#" onclick="addMouse_iconFromWOS(this)" class="lang_system_search_wos lang_appareance_search_wos"><?=$language['system']['search_wos']?></a>
						  <a href="#" onclick="addFromComputer(this,'mouse_icon')" class="lang_system_upload_from_your_computer lang_appareance_upload_from_your_computer"><?=$language['system']['upload_from_your_computer']?></a>
					  </div>
					  <div class="button_cha">
					        <button class="btn btn_filter lang_system_change_image lang_appareance_change_image" onclick="setMouseIcon(this)">
							    <?=$language['system']['change_image']?>
							</button>
					  
					  </div>
				  
				  </div>
			</div>			