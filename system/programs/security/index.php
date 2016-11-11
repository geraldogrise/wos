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
$path= str_replace("\\","/",getcwd());
$path= $path."/system/controller/ComboController.php";
require_once($path);
 $combo = new ComboController();



?>

 
 <?php 
 
   require_once(getcwd().'/system/dao/genericDao.php');
   require_once(getcwd().'/system/model/Tb_general.php');
   $general = new Tb_general();
   $model = new Tb_general();
   $general->setId_general(1);
   $dao = new genericDao();
   $result = $dao->getAll($general);
   
    while($row = $result->fetch_array()){
			$model->setFlag_login_type($row["flag_login_type"]);
		    $model->setFlag_login_encrypt($row["flag_login_encrypt"]);
			$model->setNumber_of_bits($row["number_of_bits"]);
			$model->setNumber_attempts($row["number_attempts"]);
			$model->setFlag_password_force($row["flag_password_force"]);
			$model->setFlag_enable_question($row["flag_enable_question"]);
			$model->setFlag_enable_captcha($row["flag_enable_captcha"]);
			$model->setFlag_captcha_type($row["flag_captcha_type"]);
			$model->setApp_path(str_replace("#","\\",$row["app_path"]));
	}
?>


	<div id="security_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program security">
      
	   <div class="local_program_info">
	   		 
		  
	  </div>
	  <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/security.png" style="width:16px;height:16px;" />
              Security
          </span>
          <span class="float_right">
               <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
                     <form class="form_security" name="form_security">
					 <?php include("screen.php")?>
					 <div class="anti_virus grise_tab permission" style="display:none">
					     <div class="group">
						   <label style="float:left;width:100%;">Path</label>
						   <input class="form-control form-control_width_button gallery_path zip_path" value="<?=$model->getApp_path()?>" name="app_path" placeholder="Path" style="width:379px;float:left;">
						   <button class="btn open_folder button_explore btn_black" type="button"  style="float:right" onclick="openWExplore(this,'setSoundPathGallery','open');">
									<i class="icon-folder-open-alt"></i>
									Open
							</button>
					   </div>
					  </form>
					 </div>
					  <div class="btns_extnernal">
				            <div class="btns_group">
							   <button class="btn btn_ok lang_system_ok lang_security_ok" onclick="saveSecuritySettings(this)"><?=$language['system']['ok']?></button>
							   <button class="btn btn_cancel lang_system_cancel lang_security_cancel" onclick="closeWindow(this);"><?=$language['system']['cancel']?></button>
							</div>
					 </div>
				 
				  
	     </div>
		  
			  
        </div>
		
       
      </div>
     
    
  
	
	 


  


	