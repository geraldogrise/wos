
<?php
      require_once('includePath.php');
	    $caminhoView= $software."programs/viewer/";
		
?>

<link rel="stylesheet" href="<?=$caminhoView?>css/viewer.css" />
	 <div id="viewer_0" tabindex="-1"  style="display:none;z-index:10;" class="program viewer" role="dialog" aria-labelledby="myModalLabel"   aria-hidden="true">
			
			 	<div class="modal-dialog">
					
					<div class="modal-content3" >
									
							<div class="modal-header_window">
						
								 <button type="button" class="button_title close" onclick="closeWindow(this);" aria-hidden="true"><i class="icon-close"></i></button>
								 <button type="button" class="button_title max"   onclick="resizeWindowViewer(this,'resizeViewer(this)');" aria-hidden="true"><i class="icon-max"></i></button>
								 <button type="button" class="button_title minus" onclick="minWindow(this);" aria-hidden="true"><i class="icon-minus"></i></button>
											
								 <h3 class="modal-title" id="myModalLabel"><img src="images/viewer.png">Viewer</h3>
									
										
							</div><!--header window-->
							
							<div class="modal-body" >
								  
								      
                                      
                                   <iframe class='pdf_viewer_iframe' src = "<?=$caminhoView?>viewer.php#../../desktop/contrato.odt" width='900' height='500' allowfullscreen webkitallowfullscreen></iframe>
                                  							   
										
							</div> <!--body window-->
								   
					</div> <!--content window-->
			</div><!--dialog -->
     </div><!--end program -->

