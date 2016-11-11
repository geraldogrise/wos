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
  $comboGroup = $_REQUEST['combo'];
  $GroupComponent= $_REQUEST['component'];
  $grp_user = $_REQUEST['grp_user'];
?>

 <div class="bootstrap-admin-panel-content">
    <ul class="nav nav-tabs">
        <li class="active">
           <a href="#" onclick="changeTab(this,'data_user')" class="lang_system_user_account lang_adduser_user_account"><?=$language['system']['user_account'] ?></a>
        </li>
        <li  >
            <a href="#" onclick="changeTab(this,'permission')" class="lang_system_permission lang_adduser_permission"><?=$language['system']['permission']?></a>
        </li>
                                       
    </ul>
 </div>

<form name="form_user" class="form_user">
<input type="hidden" name="action" value="<?=$acao?>">
<input type="hidden" name="id_user" value="<?=$user->getId_user()?>">
<div class="data_user grise_tab">
<label style="float:left;width:100%;" class="lang_system_name lang_adduser_name"><?=$language['system']['name']?></label>
 <input class="form-control form-control_width_button required" name="name" placeholder="Name" value="<?=$user->getName();?>" style="float:left;">
							
<label style="float:left;width:100%;" class="lang_system_email lang_adduser_email">email</label>
 <input class="form-control form-control_width_button required" name="email" placeholder="Email" value="<?=$user->getEmail();?>" style="float:left;">
							
<label style="float:left;width:100%;" class="lang_system_login lang_adduser_login"><?=$language['system']['login']?></label>
 <input class="form-control form-control_width_button required" name="login" placeholder="Login" value="<?=$user->getLogin();?>" style="float:left;">
							
<label style="float:left;width:100%;" class="lang_system_password lang_adduser_password"><?=$language['system']['password']?></label>
<input type="password" class="form-control form-control_width_button required" name="password" value="<?=$user->getPassword();?>" placeholder="" style="float:left;">
							
							
<label style="float:left;width:100%;" class="lang_system_group lang_adduser_group"><?=$language['system']['group']?></label>
<?=$comboGroup?>	
</div>
<div class="permission grise_tab" style="display:none">
<label style="float:left;width:100%;" class="lang_system_permission_group lang_adduser_permission_group"><?=$language['system']['permission_group']?></label>
<input type="hidden" value="<?=$grp_user?>" class="permission_previous">
<input type="hidden" value="" class="group_add" name="group_add">
<input type="hidden" value="" class="group_remove" name="group_remove">
<?=$GroupComponent?>
</div>

</form>
