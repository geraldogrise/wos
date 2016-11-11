<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>

<script type="text/javascript">

		
	
</script>

	<?php
      require_once('includePath.php');
	  include_once("system/directory/directory.php");
      include_once("system/directory/file.php");
	  
  
	
	  $caminhoExplore = $software."programs/wexplore/";
	  
	  $dir = new php_directory();
      $corrente =  $dir->CurrentDirectory()."\computer";
	  
	?>
	
	<div id="wexplore_0" tabindex="-1"  style="display:none;z-index:10;" class="abs window program wexplore_style">
      <div class="abs window_inner">
        <div class="window_top">
          <span class="float_left">
            <img src="images/programs/folder.png" style="width:18px;height:18px" />
				Wexplore
          </span>
          <span class="float_right">
            <a href="#" class="window_min"></a>
            <a href="#" class="window_resize" onclick="resizeWindowExplore(this,'resizeExplore(this)');"></a>
            <a href="#" class="window_close" onclick="closeWindow(this);"></a>
          </span>
		  
        </div>
        <div class="abs window_content2">
		  <div class="top_bar" >
										
				<div class="btn_menu">
					<input type="image" class="arrow_left" src="images/arrow_left.png" onclick="" alt="left">
				 </div>
				 <div class="btn_menu">
					<input type="image" class="arrow_right" src="images/arrow_right.png" onclick="" alt="left">
				 </div>
											 
				<div class="input_search">
					<input type="text" class="search_explore" value="<?=$corrente?>">
				</div>
				<div class="btn_update">
						<input type="image" src="images/update_explore.png" class='reload' onclick="reloadExplore(this)" alt="left">
				</div>
											 
				<div class="input_search">
						<input type="text" class="search_all">
				</div>
				<div class="btn_search">
						<input type="image" src="images/search_all.png" class='reload' onclick="searchExplore(this)" alt="left">
				</div>
					 
					 
				
			</div>
          <div class="window_aside">
			   <div class="sidebar">
					<?php include('sidemenu.php'); ?>
				<?php // $dir->showTreeView($corrente,1,"","normal"); ?>
				</div>
          </div>
          <div class="window_main content">
		    	    <div class="listview  padding10" data-role="listview">
					
					
					</div>
            
			
		  </div>
		  <div class="wexplore_footer">
				<input class="form-control file_a" value="" >
				<input type="hidden" value="normal" class="type_explore" >
				<input type="hidden" value="<?=$corrente?>" class="current_folder"  >
				<input type="hidden" value="0" class="explore_count" >
				<input type="hidden" value="" class="explore_history" >
				<input type="hidden" value="" class="filter" >
				<input type="hidden" value="" class="ow_filter" >
				<button class="btn save_file">
						<i class="icon-save"></i>
						Save
				</button>
				<button class="btn open_folder">
						<i class="icon-folder-open-alt"></i>
						Open
				</button>
			</div>		
        </div>
       
      </div>
      <span class="abs ui-resizable-handle ui-resizable-se"></span>
    </div>
	
	
	
	
	
	


  


	