 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
   $programs = new Tb_programs();
   $class=array();
   $progUtil = new programUtil();
   $arrayId_program = $progUtil->getProgramByUser($_SESSION['user_system'],$_SESSION['group_user']);
  
   $dao = new genericDao();
   $result_program = $dao->getAll($programs);
  
   $barbottom = new Tb_barbottom();
   $id_user = $_SESSION['user_system'];
   $barbottom->setId_user($id_user);
   $result_barbottom = $dao->getAll($barbottom);
   while($row = $result_barbottom->fetch_array()){
	  array_push($class,$row["class_name"]); 
   }
  
   

?>

<div class="abs" id="bar_bottom">
    <a id="mp-expand" class="float_left" onclick="toggleMenu();" href="#" title="Show Desktop">
      <img src="images/globo.png" class="toolbar_item" />
    </a>
    
	<ul id="dock">
     
<?php
  $cont = 0;
  while($row = $result_program->fetch_array()){
     $display="";
	 $fixed="";
	  
	 
	 if(in_array($row["class_program"], $class)){
	     $display = "display:block;";
		 $fixed = "fixed";
	  }
	  if($row["id_program"] == -1){
	   $display = "display:block;";
	  }
	  
	  
	  if(!in_array($row["id_program"], $arrayId_program)){
?>	
            <li style="<?=$display?>" class="<?=$fixed ?>">
			   <a href="#" class='barbottom  <?=$row["class_program"]?> <?=$row["gip"]?>' program="<?=$row["class_program"]?>" ondblclick="<?=$row["callFunction"]?>">
   			       <img src="images/programs/<?=$row["imagePath"]?>" ><?=$row["name"]?>
				</a>
			</li>


<?php
        }
  }

?>		
			
		
			<!--<li>
			   <a href="#" class='viewer'  ondblclick="callWindowViewer(this,'viewer','')"> <img src="images/viewer.png"></a>
			</li>-->
			
		
	  
	  
    </ul>
	     
		<form name="form_clock" class="form_clock"> 
         
		   <label>
		       <input type="text" class="clock" name="clock" size="10"> 
		       <span class='currentDate'></span>
		      
		   </label>
         </form> 
		 <a class="bar_icons" ondblclick="callAllStickies()" href="#"><span  class="note_icon"></span></a>
         <a class="bar_icons" ondblclick="callWindowFade(this,'wtalk','callWindowWtalk')" href="#"><span  class="msg_icon"></span></a>
