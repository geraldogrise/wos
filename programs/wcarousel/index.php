<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
<?php
      require_once('includePath.php');
	    $caminhoCarousel= $software."programs/wcarousel/";
		
?>




	
	<div id="wcarousel_0" tabindex="-1"  style="display:none;z-index:10;"  class="abs window program wcarousel">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/wcarousel.png" style="width:16px;height:16px" />
            WCarousel
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_resize" onclick="resizeWindowWCarousel(this,'resizeWCarousel(this)');"></a>
            <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
        </div>
        <div class="abs window_content">
                            <div class="connected-carousels">
										<div class="stage">
											<div class="carousel carousel-stage">
												<ul>
													<li><img src="<?=$caminhoCarousel?>img/img1.jpg" width="600" height="360" alt=""></li>
													<li><img src="<?=$caminhoCarousel?>img/img2.jpg" width="600" height="360" alt=""></li>
													<li><img src="<?=$caminhoCarousel?>img/img3.jpg" width="600" height="360" alt=""></li>
													<li><img src="<?=$caminhoCarousel?>img/img4.jpg" width="600" height="360" alt=""></li>
													<li><img src="<?=$caminhoCarousel?>img/img5.jpg" width="600" height="360" alt=""></li>
													<li><img src="<?=$caminhoCarousel?>img/img6.jpg" width="600" height="360" alt=""></li>
												</ul>
											</div>
											<p class="photo-credits">
												Photos by <a href="http://www.mw-fotografie.de">Geraldo Grise</a>
											</p>
											
										</div>

										<div class="navigation">
											<a href="#" class="prev prev-navigation">&lsaquo;</a>
											<a href="#" class="next next-navigation">&rsaquo;</a>
											<div class="carousel carousel-navigation">
												<ul>
													<li><img src="<?=$caminhoCarousel?>img/img1_thumb.jpg" width="50" height="50" alt=""></li>
													<li><img src="<?=$caminhoCarousel?>img/img2_thumb.jpg" width="50" height="50" alt=""></li>
													<li><img src="<?=$caminhoCarousel?>img/img3_thumb.jpg" width="50" height="50" alt=""></li>
													<li><img src="<?=$caminhoCarousel?>img/img4_thumb.jpg" width="50" height="50" alt=""></li>
													<li><img src="<?=$caminhoCarousel?>img/img5_thumb.jpg" width="50" height="50" alt=""></li>
													<li><img src="<?=$caminhoCarousel?>img/img6_thumb.jpg" width="50" height="50" alt=""></li>
												</ul>
											</div>
										</div>
									</div>
                                 
        </div>
        <div class="abs window_bottom">
         
        </div>
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
  
 





	 
	  

