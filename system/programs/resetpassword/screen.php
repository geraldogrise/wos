 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php

   $caminho= getcwd();
   $caminho = str_replace("system".DIRECTORY_SEPARATOR."controller","",$caminho);
   $caminho = str_replace("\\","/",$caminho);
   require_once($caminho.'/system/includeLang.php');

?>
<form name="form_user" class="form_user">
<input type="hidden" name="action" class="action_send" value="resetpassword">
<input type="hidden" name="id_user" value="<?=$user->getId_user()?>">
					
<label style="float:left;width:100%;" class="lang_system_password lang_resetpassword_password"><?=$language['system']['password']?></label>
<input type="password" class="form-control form-control_width_button required" name="password" value="<?=$user->getPassword();?>" placeholder="" style="float:left;">

<label style="float:left;width:100%;" class="lang_system_new_password lang_resetpassword_new_password"><?=$language['system']['new_password']?></label>
<input type="password" class="form-control form-control_width_button required" name="newpassword" value="" placeholder="" style="float:left;">

<label style="float:left;width:100%;" class="lang_system_confirm_password lang_resetpassword_confirm_password"><?=$language['system']['confirm_password']?></label>
<input type="password" class="form-control form-control_width_button required" name="confirmpassword" value="" placeholder="" style="float:left;">

<div class="grise_btn_generate">
	 <button type="button" class="btn btn_generate" onclick="buildPassword(this)">
		<i class="generate_password"></i>
		<span class="lang_i lang_system_generate lang_resetpassword_generate"><?=$language['system']['generate']?></span>
	</button>

</div>
							
