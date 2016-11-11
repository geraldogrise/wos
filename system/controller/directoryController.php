 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
   require_once("path.php");
   include_once($include_path.'/system/directory/directory.php');
   include_once($include_path.'/system/directory/file.php');
   require_once($include_path.'/system/util/programUtil.php');
   require_once($include_path.'/system/util/securityUtil.php');

 if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("showFiles")){
             
		  if(isset($_POST["file"])){
			  $file =   $_POST['file'];
			  $secUtil = new securityUtil();
			  if(!$secUtil->isAllowDirectory(str_replace(DIRECTORY_SEPARATOR,"#",$file))){
			    return;
			  }
			  $dir = new php_directory();
			  $tipo  = $_POST["tipo"];
			  $local  = $_POST["direto"];
			  $setupView = "list";
			  $filter="";
			  $progUtil = new programUtil();
			 
              $arrayId_program = $progUtil->getFileByUser($_POST['id_user'],$_POST['id_group']);
			  $dir->setFilesArray($arrayId_program);
			
				if(isset($_POST["filtro"])){
				   $filter = $_POST["filtro"];
				}
				
				
			  if(isset($_POST["setupView"])){
				 $setupView = $_POST["setupView"];
			  }
			 
			  $dir->showSideTreeView($file,$tipo);
		  }
   
  }
   else if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("listFiles")){
 
   
    if(isset($_POST["file"])){
		$file =   $_POST['file'];
		$secUtil = new securityUtil();
		
		if(!$secUtil->isAllowDirectory(str_replace("\\","#",$file))){
		   return;
		}
		
		$dir = new php_directory();
		$tipo  = $_POST["tipo"];
		 $file_search ="";
		if(isset($_POST["file_search"])){
		  $file_search  = $_POST["file_search"];
		}
		$filter = "";
		$local = "N";
		if(isset($_POST["filtro"])){
		   $filter = $_POST["filtro"];
		}
		if(isset($_POST["ow_filter"])){
		   $filter = $_POST["ow_filter"];
		}
				
		$setupView = "list";
		$progUtil = new programUtil();
        $arrayId_program = $progUtil->getFileByUser($_POST['id_user'],$_POST['id_group']);
		$dir->setFilesArray($arrayId_program);
		
		
		
		$dir->showTreeViewContent($file,$local,$file_search,$tipo,$setupView,$filter);
	}
 
 }

else  if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("listDesktopFiles")){
 
   
    if(isset($_POST["file"])){
		$file =   $_POST['file'];
		 $secUtil = new securityUtil();
		if(!$secUtil->isAllowDirectory(str_replace("\\","#",$file))){
		   	return;
		}
		
		
		$dir = new php_directory();
		$tipo  = $_POST["tipo"];
		$local  = $_POST["direto"];
		$setupView = "list";
		$filter="";
		if(isset($_POST["setupView"])){
		   $setupView = $_POST["setupView"];
		}
		$progUtil = new programUtil();
        $arrayId_program = $progUtil->getFileByUser($_POST['id_user'],$_POST['id_group']);
		$dir->setFilesArray($arrayId_program);
		
		
	//	$dir->showTreeViewDesktop($file,$local,"",$tipo,$setupView);
		$dir->showTreeViewDesktop($file,$local,"",$tipo,"","");
	}
 
 }

 
  else if(isset($_POST["action"]) && strtolower($_POST["action"]) == strtolower("search")){
            
		  if(isset($_POST["file"])){
			  $file =   $_POST['file'];
			  $secUtil = new securityUtil();
			  if(!$secUtil->isAllowDirectory(str_replace(DIRECTORY_SEPARATOR,"#",$file))){
			    
				return;
			  }
			   
			  $dir = new php_directory();
			  $filtro = $_POST["file_search"];
			  $tipo  = $_POST["tipo"];
			  $local  = $_POST["direto"];
			  $setupView = "list";
			  $filter="";
				if(isset($_POST["filtro"])){
				   $filter = $_POST["filtro"];
				}
				if(isset($_POST["ow_filter"])){
		           
				   $filter =  $_POST["ow_filter"];
		       }
			 
				$progUtil = new programUtil();
				$arrayId_program = $progUtil->getFileByUser($_POST['id_user'],$_POST['id_group']);
				$dir->setFilesArray($arrayId_program);
             
			 $dir->showTreeViewContent($file,$local,$filtro,$tipo,$setupView,$filter);
		  }
   
  }
?> 
