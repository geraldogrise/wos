
 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>

<?php
 class startmenuUtil{
    function createMenuItem($programs,$arrayPrograms){
		  $anterior = "";
		  foreach ($programs as $key => $value) {
			 if(!in_array($value["id_program"], $arrayPrograms)){ 
				  $imagePath = $value["imagePath"];
				  $program = $value["program"];
				  $group = $value["group"];
				  $function = $value["function"];
				  if($anterior != $group){
					 $classe = $anterior==""?"top_group":"";
					 echo "\n<li class='breakline transparent-smoke {$classe}'> <span class='title_category'>{$group}</span> </li>";
				  }
				 echo "\n<li class='mp-submenu'>";
				 echo "\n\t	<a href='#' ondblclick=\"{$function}\">";
				 echo "\n\t\t   	<img src='images/programs/{$imagePath}' alt='' class='mp-icons' />";
				 echo "\n\t\t       <span>{$program}</span>";
				 echo "\n\t\t       <div class='clearspace'></div>";
				 echo "\n\t </a>";
				 echo "\n</li>";
				 $anterior =  $value["group"];
			 }
		  }
	
	   
	
	}
	function createMenuItemHide($programs,$arrayPrograms){
		  $anterior = "";
		  foreach ($programs as $key => $value) {
			  if(!in_array($value["id_program"], $arrayPrograms)){ 
				  $imagePath = $value["imagePath"];
				  $program = $value["program"];
				  $group = $value["group"];
				  $function = $value["function"];
				  
				   echo "<li class='mp-menu' id='{$program}' style='display:none;'>";
				   echo   "<a href='#' ondblclick=\"{$function}\" class='mp-loadcontent'>";
				   echo     "<img src='images/programs/{$imagePath}' alt='' class='mp-icons' />";
				   echo     "<span>{$program}</span>";
				   echo     "<div class='clearspace'></div>";
				   echo   "</a>";
				   echo "</li>";
			   }
		  }
	
	   
	
	}
 }
 
 
?> 
