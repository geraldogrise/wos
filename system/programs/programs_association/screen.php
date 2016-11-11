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
  $program = $_REQUEST['program'];
  $GroupComponent= $_REQUEST['component'];
  $user_component= $_REQUEST['component_user'];
  $grp_user = $_REQUEST['grp_user'];
  $grp_program = $_REQUEST['grp_program'];
  
?>


 <div class="title_programs" style="margin-bottom:3px;">
	<img class="image_program" src="images/<?=$program->getImagePath()?>"><span><?=$program->getName()?></span>
</div>
 <div class="bootstrap-admin-panel-content">
    <ul class="nav nav-tabs">
        <li class="active">
           <a href="#" onclick="changeTab(this,'data_permission')" class="lang_system_allowed_group lang_programs_association_allowed_group"><?=$language['system']['allowed_group']?></a>
        </li>
        <li  >
            <a href="#" onclick="changeTab(this,'user_except')" class="lang_system_users_denied lang_programs_association_users_denied"><?=$language['system']['users_denied']?></a>
        </li>
                                       
    </ul>
 </div>

<div class="content_program">

<form name="form_program" class="form_program">
<input type="hidden" name="action" value="<?=$acao?>">
<input type="hidden" name="id_program" value="<?=$program->getId_program()?>">


<div class="data_permission grise_tab">
    <label style="float:left;width:250px;margin-left:15px;" class="lang_system_programs_permission lang_programs_association_programs_permission"><?=$language['system']['programs_permission']?></label>
	<input type="hidden" value="<?=$grp_program?>" class="permission_previous">
	<input type="hidden" value="" class="group_add" name="group_add">
	<input type="hidden" value="" class="group_remove" name="group_remove">
    <div class="select_multiple"><?=$GroupComponent?></div>
</div>

<div class="user_except grise_tab" style="display:none">
   <label style="float:left;width:250px;margin-left:15px;" class="lang_system_deny_users lang_programs_association_deny_users"><?=$language['system']['deny_users']?></label>
   <input type="hidden" value="<?=$grp_user?>" class="user_permission_previous">
   <input type="hidden" value="" class="group_add_user" name="group_add_user">
  <input type="hidden" value="" class="group_remove_user" name="group_remove_user">
   <div class="select_multiple"><?=$user_component?></div>
</div>


</form>
</div>
