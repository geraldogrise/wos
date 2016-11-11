<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
	<?php
       include_once("system/util/languageUtil.php");
	   $util = new languageUtil();
	   $pref =  $util->getLanguage("WZip",$_SESSION['user_system'],$_SESSION['group_user']);
	   require_once('lang.php');
	   	  
	?>
	
	<div id="wzip_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program wzip">
      <input type="hidden" class="path_wzip" value="">
	  <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/zip.png" style="width:16px;height:16px;" />
           WZip
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_resize" onclick="resizeWindowWZip(this,'resizeWZip(this)');"></a>
            <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
               <div class="top_bar" >
					<div  class="menu_npad menu_t">
							<?php  include('menu.php')?>
					</div>
				    <div class="top">
                          <ul>
						       <li><a href="#" class="new" onclick='openWExplore(this,"addZipFiles","command-Add")'></a></li>
							   <li><a href="#" class="up" onclick='openWExplore(this,"extractZipFiles","command-Extract")'></a></li>
							  <!-- <li><a href="#" class="zip"></a></li>-->
							   <li><a href="#" class="delete" onclick="deleteZipFiles(this)"></a></li>
							   <li><a href="#" class="info"></a></li>
						    
						  </ul>
					
					
					</div>					
						 
					
				</div>
				<div class="container_text" style="float:left;margin-top:2px;width:100%;">
					<div class="content_list">
						<div class="listview set-border padding10" data-role="listview" id="lv1">
							<!--<div class="list">
								<img src="images/mp3.png" class="list-icon">
								<span class="list-title">Arquivo.mp3</span>
							</div>
							<div class="list">
								<img src="images/zip.png" class="list-icon">
								<span class="list-title">Arquivo.zip</span>
							</div>
							<div class="list active">
								<img src="images/png.png" class="list-icon">
								<span class="list-title">Arquizo.png</span>
							</div>
							<div class="list">
								<img src="images/pdf.png" class="list-icon">
								<span class="list-title">Arquivo.pdf</span>
							</div>
							<div class="list">
								<img src="images/php.png" class="list-icon">
								<span class="list-title">Arquivo.php</span>
							</div>-->
						</div>
					</div>
					
					</div>	
        </div>
       
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
	
	




  


	