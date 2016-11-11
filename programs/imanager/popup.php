	<?php
      require_once('includePath.php');
	  
  
	
	
	  
	?>

 <div  class="moda fade gallery_insert" tabindex="-1" role="dialog" aria-labelledby="myModalAlertLabel" aria-hidden="true">
       <div class="modal-dialog">
              <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="myModalAlertLabel" class="modal-title  lang_system_insert_gallery lang_imanager_insert_gallery"><?= $language['imanager']['insert_gallery']; ?></h4>
                 </div>
                  <div class="modal-body">
                       <span class="lang_system_gallery_name lang_imanager_gallery_name"><?= $language['imanager']['gallery_name']; ?></span>
                  </div>
                  <div class="modal-footer">
                         <button type="button" class="btn btn-primary lang_system_confirm lang_imanager_confirm" data-dismiss="modal"><?= $language['imanager']['confirm']; ?></button>
                         <button type="button" class="btn btn-default lang_system_cancel lang_imanager_cancel"><?= $language['imanager']['cancel']; ?></button>
                  </div>
               </div>
          </div>
 </div>