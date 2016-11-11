<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
	<?php
      require_once('includePath.php');
	  include_once("system/directory/directory.php");
      include_once("system/directory/file.php");
	  
  
	
	  $caminhoUpload = $software."programs/upload/";
	  
	
	  
	?>
	<link rel="stylesheet" href="<?=$caminhoUpload?>css/wupload.css" />
	<div id="upload_0" tabindex="-1" style="display:none;z-index:10;" class="abs window program upload_style">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/upload.png" style="width:16px;height:16px;" />
            Upload Zone
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_close" onclick="closeWindowFade(this)"></a>
          </span>
        </div>
        <div class="abs window_content">
                     <div class="drop_zone"  >
					   <form action="system/controller/uploadController.php" class="dropzone" id="drop3" enctype="multipart/form-data" style="overflow-y:scroll; max-height: 200px;">
							  <div class="fallback" style="float:left;">
								<input name="file" type="file" multiple />
							  </div>
							  <input type="hidden" class="folder_hidden" name="local" value="">
						
					  </form>
                    </div>
					<div class="upload_btns"> <input class="form-control gallery_path" placeholder="Upload Folder">
						<button class="btn open_folder button_explore" onclick="openWExplore(this,'setUploadFolder','open');">
							<i class="icon-folder-open-alt"></i>
							Open
						</button>
					</div>
					 
				
				</div>  
        </div>
       
      </div>
     
    </div>
  
  
	
	
	
	








<script>
  // myDropzone is the configuration for the element that has an id attribute
  // with the value my-dropzone (or myDropzone)
  setDropZone();
  
  $(function(){
  
    $('.dropzone').css('background','#fff');
    $('.dropzone').css('border','none');
	$('div.dz-message').remove();
  })
  
  $(function() {
		$( ".upload_style" ).resizable({
			containment: ".workarea",
			 minHeight: 435,
			stop: function( event, ui ) {
			  
			
			}
		});
	});
 
</script>