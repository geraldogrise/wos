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
	   $pref =  $util->getLanguage("Wdoc",$_SESSION['user_system'],$_SESSION['group_user']);
	 
	   require_once('lang.php');
	   	  
	?>
	<?php
      require_once('includePath.php');
	  
	  include_once("system/directory/directory.php");
      include_once("system/directory/file.php");
	  
	  $pref = "en-US";
	  if(isset($_SESSION['lang_wnpad'])){
	    $pref= $_SESSION['lang_wnpad'];
	  }
	  include_once('lang.php');
	   
  
	
	  $caminhoNdoc= $software."programs/wdoc/";
	  
	  $dir = new php_directory();
      $corrente =  $dir->CurrentDirectory()."/desktop";
	  
	?>
	
	<style>
	     .sceditor-button-undo  { background: url('<?=$caminhoNdoc?>images/undo.png') no-repeat; }
		.sceditor-button-redo  { background: url('<?=$caminhoNdoc?>images/redo.png') no-repeat; }
		.sceditor-button-pdf  { background: url('<?=$caminhoNdoc?>images/pdf.png') no-repeat; }
		.sceditor-button-doc  { background: url('<?=$caminhoNdoc?>images/doc.png') no-repeat; }
		.sceditor-button-copy  { background: url('<?=$caminhoNdoc?>images/copy.png') no-repeat; }
		.sceditor-button-cut  { background: url('<?=$caminhoNdoc?>images/cut.png') no-repeat; }
		.sceditor-button-paste  { background: url('<?=$caminhoNdoc?>images/paste.png') no-repeat; }
		.sceditor-button-addimage  { background: url('<?=$caminhoNdoc?>images/insert.png') no-repeat; }
		  
	</style>
	
	

	
	<div id="wdoc_0" tabindex="-1"  style="display:none;z-index:10;"  class="abs window program wdoc">
      <form method="post" style="display:none;" action="system/controller/pdfController.php">
				  <input type="hidden" value="" name="html" class="post_pdf">
				  <input type="hidden" value="" name="name" class="name">
				  <input style="display:none" class="export_pdf" type="submit" name="action" value="exportPDF">
            
	  </form>
	   <form method="post" style="display:none;"  target="_blank" action="system/controller/pdfController.php">
				  <input type="hidden" value="" name="html" class="post_pdf">
				  <input type="hidden" value="" name="name" class="name">
				  <input style="display:none" class="save_pdf" type="submit" name="action" value="saveAsPDF">
            
	  </form>
	  <div class='doc_export' style="display:none"></div>
	  <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/wdoc.png" style="width:16px;height:16px;" />
            WDoc
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_resize" onclick="resizeWindowWdoc(this,'resizeWdoc(this)');" ></a>
            <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content" style="float:left;" >
               <div class="top_bar" style="float:left;" >
					<div  class="menu_npad menu_t">
								<?php  include('menu.php')?>
					</div>
				</div>
				 <div class="container_text" style="float: left;">
					<input type="hidden" class="clipboard" value="">
					<textarea class="main" rows="20" cols="93" style="width:100%;" ></textarea>
					<div style="display:none" class="docx_export"></div>
                 </div>
						
			
        </div>
       
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
  
 

	
	
	