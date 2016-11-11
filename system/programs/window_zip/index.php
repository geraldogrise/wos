 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
	
	<div id="window_zip_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program window_zip">
      
	  <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/zippar.png" style="width:16px;height:16px;" />
           Zip
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
              <div class="form-group">  
					  <input type="hidden" value="" class="file_zip">
					  <label>Name</label>
                     <input class="form-control name required" placeholder="Name">
			   
					 <div class="group">
						   <label style="float:left;width:100%;">Path</label>
						   <input class="form-control form-control_width_button gallery_path zip_path required" placeholder="Path" style="width:275px;float:left;">
						   <button class="btn open_folder button_explore btn_black"  style="float:right" onclick="openWExplore(this,'setSoundPathGallery','open');">
									<i class="icon-folder-open-alt"></i>
									Open
							</button>
					   </div>
					   <div class="group" style="padding-top:10px;float:left;width:100%;" >
						  <label class="group"><button class="btn btn_black Zip" onclick="addZipper(this)"><i class="icon-zip"></i> Zip</button>
					      </label>
			           </div>
			 </div>
       
      </div>
      
    </div>
	
	




  


	</div>