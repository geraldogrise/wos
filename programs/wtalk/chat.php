<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
 <?php 
 
   $messages = $_REQUEST['tb_message'];
 
 foreach ($messages as $msg){
    $image =$msg["image"];
	  if($image == null){
	     $image = "images/no_photo_talk.png";
	  }
 ?>
     
     <li id_user="<?=$msg["id_user"]?>" 
	     id_contact_receiver ="<?=$msg["id_contact_receiver"]?>" 
	     id_contact_sender ="<?=$msg["id_contact_sender"]?>" onclick="getMsgs(this)">
	       <img src="<?=$image?>">
		   <div class="content-container">
			  <span class="name"><?=$msg["name"]?></span>
			  <span class="txt"><?=$msg["text"]?> </span>
			</div>
			<span class="time">
			  14:00
			</span>
      </li>    
 <?php 
 	}
 ?>