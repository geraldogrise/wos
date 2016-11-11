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
  $tb_backup = $_REQUEST['tb_backup'];
  $users = $_REQUEST['users'];
  
  ?>
<table class="tbl_users">
	<thead>
		 <tr>
			 <th class="td_backup lang_system_backup lang_backup_backup"><?=$language['system']['backup']?></th>
			 <th class="td_dt lang_system_date lang_backup_date"><?=$language['system']['date']?></th>
			 <th class="td_user lang_system_user lang_backup_user"><?=$language['system']['user']?></th>
		 </tr>
	</thead>
	<tbody>
	
	<?php 
		$cont = 1;
		 while($row = $tb_backup->fetch_array())
		{
		 $backup_file=basename($row["backup_file"]);
		 
	?> 									 
		 <tr onclick="selectLine(this)" rel="<?=$row["id_backup"]?>">
			<td><?=$backup_file?></td>
			<td><?=$row["dt_backup"]?></td>
			<td><?=$users[$row["id_user"]]?></td>
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