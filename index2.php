 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php 
session_start();

 if(!isset($_SESSION['user_system'] )){
   
	header('location:login.php');
 }

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->

<head>
<?php

  require_once(getcwd().'/system/dao/genericDao.php');
  require_once(getcwd().'/system/model/Tb_general.php');
  require_once(getcwd().'/system/model/Tb_encrypt.php');
  require_once(getcwd().'/system/model/Tb_programs.php');
  require_once(getcwd().'/system/model/Tb_barbottom.php');
  require_once(getcwd().'/system/model/Tb_programs_grpusers.php');
  require_once(getcwd().'/system/model/Tb_grpusers_files.php');
  require_once(getcwd().'/system/util/programUtil.php');
  
   $general = new Tb_general();
   $model = new Tb_general();
   $general->setId_general(1);
   $dao = new genericDao();
   $result = $dao->getAll($general);
   $crypt= "";
   
    while($row = $result->fetch_array()){
		$model->setSeq_update($row["seq_update"]);
		$model->setSeq_optional($row["seq_optional"]);
		$model->setApp_path($row["app_path"]);
	}
   
?>

<?php include('scripts.php');?>

 <script>
    
	

	 $(function(){
	   
	  
	   setTimeout(function(){ defineContextMenu(false); }, 100);
	    
	   
	     loadForm();	
         setContextMenu('#desktop','menu_workarea');
		 local_folder = $("#current_desktop").val();
		 local_folder_cc = $("#current_desktop").val();
      
	   
	   setContextMenu('.wexplore_style','menu_explore');
	   setContextMenuBarBottom('.barbottom','menu_pin');
	   hoverBarBottom();
	  
	  
	   getContentDesktop("desktop","<?=str_replace(DIRECTORY_SEPARATOR,"#",getCwd().DIRECTORY_SEPARATOR."desktop");?>","normal",2,"icon-small");
	   setSelectable("desktop");
	   
	 });
	
	getKeys();
	
	
   
			

  </script>
  </head>
    <!-- END HEAD-->
    <!-- BEGIN BODY-->
<body>



<input type="hidden" value="<?=str_replace(DIRECTORY_SEPARATOR,"#",getCwd().DIRECTORY_SEPARATOR."desktop");?>" id="current_desktop">
<input type="hidden" value="<?=str_replace(DIRECTORY_SEPARATOR,"#",getCwd());?>" id="app_directory">
<input type="hidden" value="<?=$_SESSION['user_system']?>" id="user_system_id">
<input type="hidden" value="<?=$_SESSION['group_user']?>" id="group_system_id">
<input type="hidden" value="<?=$_SESSION['background']?>" id="background">
<input type="hidden" value="<?=$model->getSeq_update()?>" id="seq_update">
<input type="hidden" value="<?=$model->getSeq_optional()?>" id="seq_optional">
<input type="hidden" value="<?=$_SESSION['lang']?>" id="lang">
<input type="hidden" value="<?=$_SESSION['system_date']?>" id="system_date">
<input type="hidden" value="<?=$_SESSION['system_hour']?>" id="system_hour">
<input type="hidden" value="<?=$_SESSION['time_zone']?>" id="time_zone">

<?php
  $app_path = str_replace("\\","#",getCwd());
  if($model->getApp_path() != null){
      $app_path = $model->getApp_path();
  }
?> 
<input type="hidden" value="<?=$app_path;?>" id="app_path">




<div class="abs" id="wrapper">
  <div class="abs workarea"  id="desktop">
         
   
  </div>
  <div id="desktop_area">
      <?php include('programs.php'); ?>
	  <?php include('startmenu.php');?>
	  
 </div>
   
  
  
  





 <?php include('barbottom.php');  ?>

  
</div>
<script src="programs/wcalc/CalcSS3.js"></script>
<iframe style="display:none" id="hiddenDownloader"></iframe>
</body>  
</html>



