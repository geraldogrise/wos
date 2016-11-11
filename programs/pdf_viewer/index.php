
<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
<?php
      require_once('includePath.php');
	  include_once("system/util/languageUtil.php");
	   $caminhoPDF= $software."programs/pdf_viewer/";
      $util = new languageUtil();
	  $pref =  $util->getLanguage("pdf_viewer",$_SESSION['user_system'],$_SESSION['group_user']);
	  require_once('lang.php');
	 
	
	
	  
		
?>


<div id="pdf_viewer_0" tabindex="-1" style="display:none;z-index:10;"  class="abs window program pdf_viewer">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images//programs/pdf-viewer.png" style="height:16px;width:16px" />
            Pdf Viewer
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" onclick="resizeWindowPDFViewer(this,'resizePDFViewer(this)');" class="window_resize"></a>
            <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
            <div class="top_bar" style="background:#f0f0f0;z-index:50;">
										
						<div class="menu_npad menu_t">
							<?php  include('menu.php')?>
						</div>
											
		    </div>
			<div class="modal-body" >
			   <iframe class='pdf_viewer_iframe' src="<?=$caminhoPDF?>/viewer/viewer.php"></iframe>
             </div>                     							   
										
        </div>
        <div class="abs window_bottom">
         
        </div>
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
  
  

