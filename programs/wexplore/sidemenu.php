<?php 
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
?>
	<?php 
	   $app_name_path=  getcwd();
       $app_name_sys=  str_replace("\\","#",$app_name_path);
	  
	?>
	 <ul class="arvore list desktop_list" >
		 <li class="side_menu_sup" path="<?=$app_name_path?>\desktop">
				<span class="iconLiArvore" >
					<img width="14px;" onclick='showDirectory(this,"<?=$app_name_sys?>#desktop")' src="images/arrow_list_right.png">
				</span>
				<span class="iconLiArvore_N">
					<img width="14px;" src="images/desktop.png">
				</span>
				<a href="#" onclick="showDirectoryContent(this,'<?=$app_name_sys?>#desktop',1,'','')">Desktop</a>
		 </li>
	 </ul>
   	 
    <ul class="arvore list computerSide">
		 <li class="side_menu" path="<?=$app_name_path?>\computer">
				<span class="iconLiArvore"  >
					<img width="14px;" onclick='showDirectory(this,"<?=$app_name_sys?>#computer")' src="images/arrow_list_right.png">
				</span>
				<span class="iconLiArvore_N">
					<img width="14px;" src="images/computer.png">
				</span>
				<a href="#" onclick="showDirectoryContent(this,'<?=$app_name_sys?>#computer',1,'','')">My Wos</a>
		 </li>
	 </ul>
	 <div class="disks">
	 
	 </div>

         <div class="separator"></div>                 
     
	 
	
	 
	 <ul class="arvore list" >
		 <li class="side_menu_sup" path="<?=$app_name_path?>\libraries">
				<span class="iconLiArvore">
					<img width="14px;" onclick="toggleLibrary(this)" src="images/arrow_list_down.png">
				</span>
				<span class="iconLiArvore_N">
					<img width="14px;" src="images/library.png">
				</span>
				<a href="#" onclick="showDirectoryContent(this,'<?=$app_name_sys?>#libraries',1,'','')">Library</a>
				<ul class="fixelist opened">
				      <li class="side_menu" path="<?=$app_name_path?>\libraries\documents">
							<span class="iconLiArvoreI">
								<img height="28px;" src="images/folder_documents.png">
							</span>
							<a href="#" onclick="showDirectoryContent(this,'<?=$app_name_sys?>#libraries#documents',1,'','')">Documents</a>
				      </li>
					   <li class="side_menu" path="<?=$app_name_path?>\libraries\images">
							<span class="iconLiArvoreI">
								<img height="28px;" src="images/folder_images.png">
							</span>
							<a href="#" onclick="showDirectoryContent(this,'<?=$app_name_sys?>#libraries#images',1,'','')">Images</a>
				      </li>
					  <li class="side_menu" path="<?=$app_name_path?>\libraries\music">
							<span class="iconLiArvoreI">
								<img height="28px;" src="images/folder_music.png">
							</span>
							<a href="#" onclick="showDirectoryContent(this,'<?=$app_name_sys?>#libraries#music',1,'','')">Musics</a>
				      </li>
					  <li class="side_menu" path="<?=$app_name_path?>\libraries\videos">
							<span class="iconLiArvoreI">
								<img height="28px;" src="images/folder_videos.png">
							</span>
							<a href="#" onclick="showDirectoryContent(this,'<?=$app_name_sys?>#libraries#videos',1,'','')">Videos</a>
				      </li>
				</ul>
		 </li>
	 </ul>
					  