<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
      
 <?php 
 
   $msgs = $_REQUEST['tb_message'];
   $id_contact = $_REQUEST['id_contact'];
   $id_user = $_REQUEST['id_user'];
   $cont = 1;
   $classCurrent = "";
   $imageCurrent = $_REQUEST['imageContact'];
   $id_contact_receiver = "";
   $last_contact_sender = "";
   $id_message = "";
   while($row = $msgs->fetch_array())
	{
	  $image =$row["image"];
	  if($image == null){
	     $image = "images/no_photo_talk.png";
	  }
	  if($id_contact == $row["id_contact_sender"]){
	     $imageCurrent =  $image;
	  }else{
	     $id_contact_receiver = $row["id_contact_sender"];
	  }
	  if( $cont != $msgs->num_rows ){
 ?>
 
   
	<li>
			<img src="<?=$image?>">
			 <div class="message"><?=$row["text"] ?></div>
	</li>
 <?php 
 	   }else{
	       
		  if($id_contact == $row["id_contact_sender"]){
		     $classCurrent  = "current";
			  $imageCurrent =  $image;
			
		  }
		  else{
	            $id_contact_receiver = $row["id_contact_sender"];
	      }
		   $last_contact_sender =  $row["id_contact_sender"];
		   $id_message = $row["id_message"];
 ?>	
	
	 
	 <li>
	    <img src="<?=$image?>">
	    <div class="message <?=$classCurrent?>"><?=$row["text"]?></div>
     </li>
  <?php 
 	}
 ?>
 
 <?php 
       $cont++;
 	}
 ?>
 
 <?php 
    if($classCurrent == ""){
 ?> 
      <li class="lastli" style="display:none;">
	    <img src="<?=$imageCurrent?>">
	    <div class="message current"></div>
     </li>
 
   <?php 
 	}
 ?>



