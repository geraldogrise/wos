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


<?php
  $acao = $_REQUEST['acao'];
  $user = $_REQUEST['user_wos_edit'];
  
?>


					
 <div class="main_password">
        	
        	
        	
        	<form class="form_user" method="post" action="">
			<input type="hidden" name="action" value="changepassword">
            <input type="hidden" name="id_user" class="id_user" value="<?=$user->getId_user()?>">
        		
        		<div class="row email">
	    			<input type="text" style="display:none;" class="email lang_system_email_ph lang_changepassword_email_ph required" name="email" placeholder="<?=$language['system']['Email']?>" />
        		</div>
        		
        		<div class="row pass">
        			<input type="password" class="password1 lang_system_password_ph lang_changepassword_password_ph required" name="password" placeholder="<?=$language['system']['password']?>" />
					<div class="col-md-5 meter1 meter_grise"></div>
        		</div>
        		
        		<div class="row pass">
        			<input type="password" class="password2 lang_system_password_ph lang_changepassword_password_ph required" name="confirmpassword" placeholder="<?=$language['system']['password']?>" disabled="true" />
					<div class="col-md-5 meter2 meter_grise" class=""></div>
        		</div>
        		
        		<!-- The rotating arrow -->
        		<div class="arrowCap"></div>
        		<div class="arrow_force"></div>
        		
				 <div class="btns_extnernal">
				     <div class="btns_group">
					      <button class="btn btn_ok" onclick="saveChangePassword(this)">
						     <i class="save_p"></i>
						       <span class="lang_system_change lang_changepassword_change">&nbsp<?=$language['system']['change']?> </span>
						  </button>
						  <button class="btn btn_cancel" onclick="closeWindow(this);">
						     <i class="cancel_p"></i>
							   <span class="lang_system_cancel lang_changepassword_cancel">&nbsp<?=$language['system']['cancel']?> </span>
						  </button>
						 
					 </div>
				   </div>
        	</form>
        </div>
