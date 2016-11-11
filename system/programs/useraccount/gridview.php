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
    $caminho = str_replace("\\","/",$caminho);
   
   require_once($caminho.'/system/includeLang.php');

?>
<?php
  $tb_user = $_REQUEST['tb_user'];
   $groups = $_REQUEST['groups'];
  ?>
<table class="tbl_users">
	<thead>
		 <tr>
			 <th class="td_name lang_system_user lang_useraccount_user"><?=$language['system']['user'] ?></th>
			 <th class="td_grp lang_system_group lang_useraccount_group"><?=$language['system']['group'] ?></th>
		 </tr>
	</thead>
	<tbody>
	
	<?php 
		$cont = 1;
		 while($row = $tb_user->fetch_array())
		{
		
	?> 									 
		 <tr  class="no_zindex" onclick="selectLine(this)" rel="<?=$row["id_user"]?>"
		 ondblclick="callWindowWithParameter(this,'adduser','callWindowAdduser','',
		 '<?=$row["id_user"]?>')">
			<td class="no_zindex"><?=utf8_encode($row["name"]);?></td>
			<td class="no_zindex"><?=$groups[$row["id_group"]]?></td>
		</tr>
	<?php
		  $cont++;          
	   }
								  
	?>	
	</tbody>
	<tfoot>
	  <tr>
		<td colspan="2" class="pagin">
			 <?php include('../paginator.php');?>
		</td>
      </tr>
	</tfoot>
</table>