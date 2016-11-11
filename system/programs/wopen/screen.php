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
   $programs = $_REQUEST["programs"];
   $path = $_REQUEST["path"];
   $flagchangepath = $_REQUEST["flagchangepath"] ; 
   $id_open = $_REQUEST["id_open"] ; 
   $extension= $_REQUEST["extension"] ; 
   
   

?>
<div class="open_type">
		 
				<?php 
                        $cont = 0;
						$total = $resultset->num_rows;
						
				        while($row = $resultset->fetch_array()){
						   $callFunction = str_replace("''","'{$path}'", $row["callFunction"]);	
						   $call =  str_replace("''","file_op", $row["callFunction"]);	
						  if($flagchangepath == "S"){
						      $callPath = "pathF =returnHttpPath('".$path."');";
							  $callFunction =$callPath.str_replace("''","pathF",$row["callFunction"] );	
						  }
						 $callFunction .=";IsDefault(this);";
				?>	
				 <?php    
                   			  
				  if($cont%2 == 0){
				 ?>
				   <ul class="ul_programs">
				  <?php	
					   }
				  ?>
						<li onclick="selectOpenProgram(this)" call="<?=$call?>" extension="<?=$extension?>" id_open="<?=$id_open?>" function="<?=$callFunction?>" class="li_program">
						   <a  href="#">
							   <img id="item-1" style="height:25px;width:25px;" src="images/programs/<?=$row["imagePath"]?>">
							   <span><?=$row["name"]?> </span>
						   </a>

						</li>
					<?php    
					    $cont++;
					
						if($cont%2 == 0 || ($total-1  == $cont && $total%2==1) ){
					 ?>
                     </ul>
					<?php	
					   }
					?>




				<?php	
                   	}
				?>
		
</div>							
