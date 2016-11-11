 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>

  
  <div class="bootstrap-admin-panel-content">
		<ul class="nav nav-tabs">
			<li class="active">
			   <a href="#" onclick="changeTab(this,'login_settings')" class="lang_system_login_settings lang_security_login_settings"><?=$language['system']['login_settings']?></a>
			</li>
			<li>
			  <a href="#" onclick="changeTab(this,'anti_virus')" class="lang_system_permission lang_security_permission"><?=$language['system']['permission']?></a>
			</li>
		</ul>
    </div>
	<div class="login_settings grise_tab">
	   
	   <div class="login_type">
	       <div class="login_type_img"><img src="images/login_type.png"></div>
		   <div class="login_type_content">
	          <label class="lang_system_login_type lang_security_login_type"><?=$language['system']['login_type']?></label>
			 <?php echo $combo->comboDomain("login_type",80,$model->getFlag_login_type(),false,true,"LOGIN_TYPE"); ?>
		   </div>
		</div>
		 <div class="login_content_settings">
			<div class="div_griseset">
				 <label class="width30 lang_system_login_encrypt lang_security_login_encrypt"><?=$language['system']['login_encrypt']?></label>
				 <?php echo $combo->comboEncrypt("login_encrypt",50,$model->getFlag_login_encrypt(),false,true); ?>
			</div>
			<div class="div_griseset">
                 <div class="griseinner" style="width:30%; margin-left: 56px;">			    
					<label class="width30_t lang_system_number_bits lang_security_number_bits"><?=$language['system']['number_bits']?></label>
					<input class="form-control input_width70 required" style="width:84px" name="number_of_bits" placeholder="Bits" value="<?=$model->getNumber_of_bits()?>">
				</div>
				 <div class="griseinner" style="width:50%">
					 <label class="width30_t lang_system_number_attemps lang_security_number_attemps"><?=$language['system']['number_attemps']?></label>
					<input class="form-control input_width70 required" style="width:72px" name="number_attempts" placeholder="Attempts" value="<?=$model->getNumber_attempts()?>">
				</div>
			</div>
			<div class="div_griseset">
				<label class="width30 lang_system_password_force lang_security_password_force"><?=$language['system']['password_force']?></label>
                <?php echo $combo->comboDomain("password_force",50,$model->getFlag_password_force(),false,true,"PASSWORD_FORCE"); ?>
	        </div>
			<div class="div_griseset">
				<label class="label_checkbox">
					<input type="checkbox" name="enable_question" <?=$model->getFlag_enable_question()== "E"?"checked":""?> class="option_question" value="E">
			       	 <span class="lang_system_enable_security_question lang_security_enable_security_question"><?=$language['system']['enable_security_question']?></span>
			    </label>
	        </div>
                  
		    <div class="div_griseset top_5">
					  <span class="grise_title lang_system_captcha lang_security_captcha">&nbsp&nbsp<?=$language['system']['captcha']?></span>
					  <label class="label_checkbox">
						 <input type="checkbox" name="enable_captcha" <?=$model->getFlag_enable_captcha()== "E"?"checked":""?> class="option_captcha" value="E">
			       		 <span class="lang_system_enable_capctha lang_security_enable_capctha"><?=$language['system']['enable_capctha']?></span>
					   </label>
					   <label class="width30 lang_system_capctha_type lang_security_capctha_type"><?=$language['system']['capctha_type']?></label>
						<?php echo $combo->comboDomain("captcha_type",50,$model->getFlag_captcha_type(),false,true,"CAPTCHA_TYPE"); ?>
			 </div>
					  
					 
				
			
	   </div>
	  
	</div>