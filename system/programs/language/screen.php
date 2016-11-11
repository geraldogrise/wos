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
  $language_a= $_REQUEST['component'];
 
?>



 

<div class="content_language">

<form name="form_language" class="form_language">

<input type="hidden" class="action" name="action" value="<?=$acao?>">
<input type="hidden" class='name_program' name="name_program" value="system">
<input type="hidden" class='class_program' name="class_program" value="system">
<input type="hidden" class='id_group_assoc' name="id_group" value="">
<input type="hidden" class='id_user_assoc' name="id_user" value="">


<label style="float:left;width:250px;margin-left:15px;" class="lang_system_system_languages lang_language_system_languages"><?=$language['system']['system_languages'] ?></label>
<div class="select_multiple"><?=$language_a?></div>





</form>
</div>
