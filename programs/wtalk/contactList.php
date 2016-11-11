<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
 <?php 
 
   $contatos = $_REQUEST['tb_contact_list'];
 
 
   while($row = $contatos->fetch_array())
	{
	  $image =$row["image"];
	  if($image == null){
	     $image = "images/no_photo_talk.png";
	  }
 ?>
 

 <li id_contact_list="<?=$row["id_contact_list"]?>">
   <img src="<?=$image?>"><span class="name"><?=$row["name"]?></span>
   <i class="mdi mdi-menu-down"></i> 
 
 </li> 
 
 
 
 <?php 
 	}
 ?>