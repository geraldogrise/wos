
<?php

   $caminho= getcwd();
   $caminho = str_replace("system".DIRECTORY_SEPARATOR."controller","",$caminho);
   $caminho = str_replace("\\","/",$caminho);
   require_once($caminho.'/system/includeLang.php');

?>
 <div class="account_image content_aba" style="display:none">	
			     
				  <h1 class="lang_system_choose_new_picture lang_appareance_choose_new_picture"><?=$language['system']['choose_new_picture']?></h1>
				  <div class="info_current">
				      <div class="user_image_select user_sel">
					      <img src="images/account.png">
					  </div>
					    <div class="info">
						       <span class="name_user">Geraldo</span>
							   <span class="group_user">Administrator</span>
						</div>
				  </div>
				  <span class="info_title lang_system_choose_new_picture_description lang_appareance_choose_new_picture_description"><?=$language['system']['choose_new_picture_description']?></span>
				  <div class="pictures_account">
				          <ul class="ul_pictures">
						         <li><a href="#"><img src="images/account.png"></a></li>
								 
						  </ul>
				  </div>
				  <div class="buttons_actions" >
				      <div class="upimages">
					      <a href="#" onclick="addAccountImageFromWOS(this)" class="lang_system_search_wos lang_appareance_search_wos"><?=$language['system']['search_wos']?></a>
						  <a href="#" onclick="addFromComputer(this,'account_image')" class="lang_system_upload_from_your_computer lang_appareance_upload_from_your_computer"><?=$language['system']['upload_from_your_computer']?></a>
					  </div>
					  <div class="button_cha">
					        <button class="btn btn_filter lang_system_change_image lang_appareance_change_image" onclick="setAccountImage(this)">
							     <?=$language['system']['change_image']?>
							</button>
					  
					  </div>
				  
				  </div>
			</div>			