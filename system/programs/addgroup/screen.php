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
  $group = $_REQUEST['group_wos_edit'];
   $comboGroup = $_REQUEST['combo'];
    
  
?>
<form name="form_group" class="form_group">
<input type="hidden" name="action" value="<?=$acao?>">
<input type="hidden" value="<?=$group->getId_group()?>" name="id_group">
 <label style="float:left;width:100%;" class="lang_system_name lang_addgroup_name"><?=$language['system']['name'] ?></label>
<input class="form-control form-control_width_button gallery_path zip_path required" name="name" value="<?=$group->getName()?>" placeholder="Name" style="float:left;">

<label style="float:left;width:100%;" lass="lang_system_group lang_addgroup_group"><?=$language['system']['group'] ?></label>
<?=$comboGroup?>		
</form>			
				



							
							

