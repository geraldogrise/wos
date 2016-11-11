 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php 
    
	
    $software = getcwd(); 
  
  
   $software = str_replace("\\","/",$software);
   $software = substr($software,strpos($software,"www/")+4);
   $_SESSION["software"] = $software;  
   $_SESSION["path_software"] = getcwd();
  
 
   
  
   
  
?>			

            <link rel="stylesheet" href="css/fontawesome.css">
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/plugins/bootstrap/css/bootstrap.css" />
			<link rel="stylesheet" href="css/main.css" />
			<link rel="stylesheet" href="css/modal.css" />
			<link rel="stylesheet" href="css/uls.css" />
			<link rel="stylesheet" href="css/metropanel.css" type="text/css" />
			<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
			
			<link rel="stylesheet" href="css/gips.css" type="text/css" />
				
			<link rel="stylesheet" href="css/MoneAdmin.css" />
			<link rel="stylesheet" href="css/plugins/Font-Awesome/css/font-awesome.css" />
			<link rel="stylesheet" href="css/ui/jquery.ui.all.css" />
				
			<link rel="stylesheet" href="css/jquery.contextMenu.css" />
			
			<link rel="stylesheet" href="assets/css/reset.css" />
            <link rel="stylesheet" href="assets/css/desktop.css" />
			<link rel="stylesheet" href="css/metro_x.css" />
			<link rel="stylesheet" href="css/fm.selectator.jquery.css" />
			
			
		
			<!--END GLOBAL STYLES -->

			 <!-- PAGE LEVEL STYLES -->
			<link rel="stylesheet" href="css/plugins/social-buttons/social-buttons.css" />
			<link href='css/fontes.css' rel="stylesheet" type="text/css" />
			<link rel="stylesheet" href="scripts/lib/codemirror.css">
			<link rel="stylesheet" href="scripts/addon/hint/show-hint.css">
			<link href="css/dropzone.css" type="text/css" rel="stylesheet" />
			<link rel="stylesheet" href="scripts/addon/dialog/dialog.css">
            <link rel="stylesheet" href="scripts/addon/search/matchesonscrollbar.css">
			<link rel="stylesheet" href="scripts/addon/fold/foldgutter.css" />
			<link rel="stylesheet" href="scripts/theme/mdn-like.css">
			<link rel="stylesheet" href="vendors/uniform/themes/default/css/uniform.default.min.css">
			<link rel="stylesheet" href="css/uniform.default.fixes.css">
			<link rel="stylesheet" href="http://localhost/grisecorp/styles/store.css">
			
		  
		  
		  
		
			
			
			
			
	