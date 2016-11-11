<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
 <?php 
 
   $contatos = $_REQUEST['tb_contact'];
 
 
   while($row = $contatos->fetch_array())
	{
	  $image =$row["image"];
	  if($image == null){
	     $image = "images/no_photo_talk.png";
	  }
 ?>
 

 <li onclick="insertContactList(this)" id_contact="<?=$row["id_contact"]?>" username="<?=$row["name"]?>">
        <img src="<?=$image?>">
        <div class="content-container">
          <span class="name"><?=$row["name"]?></span>
          <span class="phone"><?=$row["email"]?></span>
          <span class="meta"><?=$row["phone"]?></span>
        </div>
        <span class="time">
            <a href="#"  class="addcontact_link"   >Add</a>
        </span>
</li>      
 
 
 
 <?php 
 	}
 ?>