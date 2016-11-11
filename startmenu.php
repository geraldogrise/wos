<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<script type="text/javascript">

		(function($){
			$(window).load(function(){
				
				$("#mp-menus").mCustomScrollbar({
					theme:"light-2"
				});
				$("#mp-submenus").mCustomScrollbar({
					theme:"light-2"
				});
				
			});
		})(jQuery);
	
</script>

<!-- START METRO PANEL -->
<div id="metropanel">

    <div id="mp-headerpanel">
        <div id="mp-sitename">
            <a  title="MetroPanel Documentation"><span class="metro_panel">Menu</span></a>
        </div>
    
        <div id="mp-searchzone">
            <form id="mp-searchform" action="" method="post">
                <input id="mp-searchhidden" type="hidden" value="Enter some words"/>               
			   <input id="mp-searchbox" value="Enter some words" type="text" onblur="if(this.value=='') this.value='Enter some words';" onfocus="if(this.value=='Enter some words') this.value='';" />
                <input type="button" id="mp-search_bt" onclick="search_programs(this);"  value=" " />
            </form>
        </div>
        <div class='clearspace'></div>
    </div>

	<!-- The Main Item List -->    
	<ul id="mp-menus">
    	 <li class="mp-menu default">
        	<a href="#" data-mpid="shopslider" class="mp-loadcontent"  ondblclick="callWindowWExplore(this,'wexplore','','normal','','','')">
            	<img src="images/computer.png" alt="" class="mp-icons"  />
                <span>Computer</span>
                <div class="clearspace"></div>
            </a>
        </li>
		 <li class="mp-menu default">
        	<a href="#" data-mpid="shopslider" class="mp-loadcontent"  ondblclick="callWindowWExplore(this,'wexplore','','normal','',$('#current_desktop').val(),'')">
            	<img src="images/desktop_m2.png" alt="" class="mp-icons" />
                <span>Desktop</span>
                <div class="clearspace"></div>
            </a>
        </li>
		<li class="mp-menu default">
        	<a href="#" data-mpid="shopslider" onclick="showSubmenu()" class="mp-loadcontent">
            	<img src="images/programs.png" alt="" class="mp-icons" />
                <span>Programs</span>
                <div class="clearspace"></div>
            </a>
        </li>
        <li class="mp-menu default">
        	<a href="#" data-mpid="shopslider" class="mp-loadcontent"
			  ondblclick="callWindowWExplore(this,'wexplore','','normal','','','')"
			>
            	<img src="images/folder.png" alt="" class="mp-icons" />
                <span>Explore</span>
                <div class="clearspace"></div>
            </a>
        </li>
        <li class="mp-menu default">
        	<a href="#" data-mpid="screenslider" class="mp-loadcontent"
			  ondblclick="callUploadWindow(this,'upload')"
			>
            	<img src="images/upload.png" alt="" class="mp-icons" />
                <span>Upload Zone</span>
                <div class="clearspace"></div>
            </a>
        </li>
        <li class="mp-menu default">
        	<a href="#" data-mpid="metrobox" class="mp-loadcontent" ondblclick="callWindow(this,'security','callWindowSecurity','')">
            	<img src="images/firewall.png" alt="" class="mp-icons" />
                <span>Protection</span>
                <div class="clearspace"></div>
            </a>
        </li>
        <li class="mp-menu default">
        	<a href="#" data-mpid="menustation"  class="mp-loadcontent" ondblclick="callWindow(this,'controlpanel','callWindowControlPanel','')">
            	<img src="images/controlpanel.png" alt="" class="mp-icons" />
                <span>Control Panel</span>
                <div class="clearspace"></div>
            </a>
        </li>
       
    	<li class="mp-menu default">
        	<a href="#" data-mpid="mp-gallery" class="mp-loadcontent"  ondblclick="callWindowWExplore(this,'wexplore','','normal','','C:#wamp#www#estudo#wos#libraries#images','')" >
            	<img src="images/pictures-icon.png" alt="" class="mp-icons"  />
                <span>Gallery</span>
                <div class="clearspace"></div>
            </a>
        </li>
       
        <li class="mp-menu default last">
        	<a href="#" data-mpid="video" class="mp-loadcontent" ondblclick="callWindowWExplore(this,'wexplore','','normal','','C:#wamp#www#estudo#wos#libraries#videos','')" >
            	<img src="images/myvideo.png" alt="" class="mp-icons" />
                <span>Video</span>
                <div class="clearspace"></div>
            </a>
        </li>
    </ul>
    <!-- End Main Item List -->
    
    <div class="breakline transparent-smoke"></div>
    
    <!-- Recent Item -->
    <ul id="mp-recentitemholder"></ul>
    <!-- End Recent Item -->
    
    
    <!-- Footer Panel -->
      <div id="mp-footerpanel" >
	     <button class="btn btn_sy_left lang_system_ok lang_adduser_ok" onclick="toggleMenu()"><span class="back_button"></span>  <?=$language['system']['back']?></button>
		 <button class="btn btn_sy_right lang_system_ok lang_adduser_ok" onclick="logout()"><span class="exit_button"></span>  <?=$language['system']['exit']?></button>
		 
		 <img style="display:none" src="images/arrow_left.png" onclick="toggleMenu()" style="width:32px;">
	  </div>
    <!-- End Footer Panel -->

</div>
<!-- END METRO PANEL -->


<!-- Submenu -->
<div id="mp-submenusholder">

    <ul id="mp-submenus">
    	
	
        
    </ul>    
    
</div>
<!-- End Submenu -->

<!-- Content Station -->
<div id="mp-contentStation">
	<!-- Create Default Content Package -->
	<div id="metrotabs"></div>
</div>
<!-- End Content Station -->
<script>
 $(function(){
    getListPrograms('listPrograms','','','submenu');
	getListPrograms('listPrograms','','','menu');
 });

</script>
