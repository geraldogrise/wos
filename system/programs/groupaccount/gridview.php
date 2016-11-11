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
  $tb_group = $_REQUEST['tb_group'];
   $groups = $_REQUEST['groups'];
   
  ?>
<table class="tbl_groups tabela">
	<thead>
		 <tr>
			 <th class="td_name lang_system_group lang_groupaccount_group"><?=$language['system']['group']?></th>
			 <th class="td_grp lang_system_parent_group lang_groupaccount_parent_group"><?=$language['system']['parent_group']?></th>
		 </tr>
	</thead>
	<tbody>
	
	<?php 
		$cont = 1;
		 while($row = $tb_group->fetch_array())
		{
			$pai="No parent";
		   if($row["id_group_pai"] !=0){
			   $pai = $groups[$row["id_group_pai"]];
		   }
	?> 									 
		 <tr onclick="selectLine(this)" rel="<?=$row["id_group"]?>"
		 ondblclick="callWindowWithParameter(this,'addgroup','callWindowAddgroup','',
		 '<?=$row["id_group"]?>')">
			<td><?=utf8_encode($row["name"]);?></td>
			<td><?=$pai?></td>
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