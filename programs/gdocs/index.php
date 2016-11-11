
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
	  $caminhoView= $software."programs/gdocs/";
	  $util = new languageUtil();
	  $pref =  $util->getLanguage("gdocs",$_SESSION['user_system'],$_SESSION['group_user']);
	  require_once('lang.php');
		
?>


	 
	 
	
	<div id="gdocs_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program gdocs">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/gdocs.png" style="width:16px;height:16px" />
            GDocs
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_resize"  onclick="resizeWindowGdocs(this,'resizeGdocs(this)');"></a>
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
               <iframe class='iframe' width="600" height="800" frameborder="0" 
				src="http://grisecorp.rf.gd/wos/computer/curriculum.pdf"></iframe>
			</div>
			   
        </div>
        <div class="abs window_bottom">
         
        </div>
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
  
  

