 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */



function callWindowAppearance(id){
 
  
   addZindex(id);
   diretorio= $('#app_directory').val();
   background = $('#background').val();
   
   
   dados_envio="action=getfolder&diretorio="+diretorio+"&background="+background;
   get(id,"thema","ick_image",dados_envio);
   dados_envio = "action=getthemas&diretorio="+diretorio+"&background="+background;
  
   get(id,"thema","carousel_img",dados_envio,"setThemeGallery('"+id+"');");
   dados_envio = "action=getaccount_images&diretorio="+diretorio;
   get(id,"thema","ul_pictures",dados_envio,"");
   dados_envio = "action=getmouse_icons&diretorio="+diretorio;
   get(id,"thema","ul_icons",dados_envio,"");
   
  
	
}
function setThemeGallery(id){

   var carousel = $('#'+id).find(".carousel").waterwheelCarousel({
          flankingItems: 4,
         
        });
}
function setFolderView(elemento){
   id =$(elemento).closest('div.program').attr('id');
   folder = $(elemento).attr('rel');
   pathFolder = "images/themes/"+folder+"/1.jpg";
   dados_envio = "action=getthemas&diretorio="+diretorio+"&background="+pathFolder;
   get(id,"thema","carousel_img",dados_envio,"setThemeGallery('"+id+"');");
}

function setTheme(button){

  id = $(button).closest('div.program').attr('id');
  

wallpaper = $('#'+id).find('.carousel-center').attr('src');
$('#wallpaper').attr('src',wallpaper);
id_user = $('#user_system_id').val();
id_group = $('#group_system_id').val();

dados_envio = "background="+wallpaper+"&id_user="+id_user+"&id_group="+id_group+"&action=save";
saveSetting("settings","",dados_envio);


}
function searchThema(button){
        id = $(button).closest('div.program').attr('id');
		thema_search =$('#'+id).find('.form-control').val();
		if(thema_search == ""){
		   $('#'+id +" .ick_image").find('.wrapper-item').show();
		}
		
		$('#'+id +" .ick_image").find('.wrapper-item').each(function(){
		       rel= $(this).attr('rel')+"";
			   
			   if(rel.indexOf(thema_search)==-1){
			       $(this).hide();
			   }
		    
		});

}

function getInputFolder(button){
      id = $(button).closest('div.program').attr('id');
	 
	  li =  $(button).closest('li');
	  html = "<li class='folder_li' style='margin-top:5px;'>";
	  html += "<button class='btn btn_side btn_ban' onclick='createFolderTheme(this)'><i class='save_themefolder'></i>Save</button>";
	  html += "<button class='btn btn_side btn_sav' onclick='cancelCreateFolder(this)'><i class='cancel_themefolder'></i>Cancel</button>";
	  html += "</li>"
	  
	  $(li).after(html);
      $(li).after("<li class='folder_li'><input class='form-control name_folder' style='width:90%' name='folder' placeholder='folder'></li>");		

		
}

function cancelCreateFolder(button){
    id = $(button).closest('div.program').attr('id');
	$('#'+id).find('.folder_li').hide();

}
function cancelCreateFolderById(id){
  	$('#'+id).find('.folder_li').hide();

}
function createFolderTheme(button){
   id = $(button).closest('div.program').attr('id');
   folder = $('#'+id).find('.name_folder').val();
   app_directory= $('#app_directory').val();
   dados_envio= "action=insert&name="+folder+"&app_directory="+app_directory;
  
   save(button,dados_envio,"thema","cancelCreateFolderById('"+id+"')");

}


function selectTheme(elemento){

   if($(elemento).hasClass('selected')){
        $(elemento).removeClass('selected');
   }else{
     $(elemento).addClass('selected');
   }
  

}
function selectImageC(elemento){
  
   if($(elemento).closest('li').hasClass('selected')){
        $(elemento).closest('li').removeClass('selected');
   }else{
     $(elemento).closest('li').addClass('selected');
   }
  

}

function addThemeFromComputer(elemento){
    id= $(elemento).closest('div.program').attr('id');
	quant = $("#"+id).find('.wrapper-item.selected').size();
	
	if(quant > 1){
	   
	}else if(quant == 0){
	
	   
	}else{
	   app_diretorio = $('#app_directory').val();
	   app_diretorio= app_diretorio+"\\images\\themes\\"+ $("#"+id).find('.wrapper-item.selected').attr('rel');
	   app_diretorio =  app_diretorio.replace(/\#/g, "\\");
	   $('#upload_0').find('.gallery_path').val(app_diretorio);
	   $('#upload_0').find('.folder_hidden').val(app_diretorio);
	   
	}
 
 
     callUploadWindow(elemento,'upload');
}

function addThemeFromWOS(elemento){
  
  openWExplore(elemento,'copyImageToThemeFolder','open');

  
}

function copyImageToThemeFolder(button,id_program){
   
	id = $(button).closest('.program').attr('id');
    name = $("#"+id).find('.file_a').val();
	local = $('#'+id).find('.search_explore').val();
	path= name;
	
	
	quant = $("#"+id_program).find('.wrapper-item.selected').size();
	diretorio="";
	
	if(quant > 1){
	   
	}else if(quant == 0){
	
	   
	}else{
	   diretorio = $('#app_directory').val();
	   
	   diretorio= diretorio+"\\images\\themes\\"+ $("#"+id_program).find('.wrapper-item.selected').attr('rel');
	   diretorio =  diretorio.replace(/\#/g, "\\").replace(/\\/g, "\#");
	   
	}
	
	
	dados_envio= "action=insertimage&file="+path.replace(/\\/g, "\#")+"&directory="+diretorio;
	save(button,dados_envio,"thema","");  
	closeWExplore(id,"only_close"); 
	
	
	
}

function changeAppearanceContent(elemento,classe_content){
 
   id = $(elemento).closest('div.program').attr('id');
   $('#'+id).find('.content_aba').hide();
   $('#'+id).find('.'+classe_content).show();
    
}

function addAccountImageFromWOS(elemento){
  
  openWExplore(elemento,'copyImageToAccountFolder','open');

  
}

function addMouse_iconFromWOS(elemento){
  
  openWExplore(elemento,'copyImageToIconMouseFolder','open');

  
}

function copyImageToAccountFolder(button,id_program){
   
	id = $(button).closest('.program').attr('id');
    name = $("#"+id).find('.file_a').val();
	local = $('#'+id).find('.search_explore').val();
	path= name;
	
	

	   diretorio = $('#app_directory').val();
	   
	   diretorio= diretorio+"\\images\\account_image"
	   diretorio =  diretorio.replace(/\#/g, "\\").replace(/\\/g, "\#");
	   
	
	
	
	dados_envio= "action=insertimage&file="+path.replace(/\\/g, "\#")+"&directory="+diretorio;
	save(button,dados_envio,"thema","");  
	closeWExplore(id,"only_close"); 
	
	
}
function copyImageToIconMouseFolder(button,id_program){
   
	id = $(button).closest('.program').attr('id');
    name = $("#"+id).find('.file_a').val();
	local = $('#'+id).find('.search_explore').val();
	path= name;
	
	

	   diretorio = $('#app_directory').val();
	   
	   diretorio= diretorio+"\\images\\mouse_icon"
	   diretorio =  diretorio.replace(/\#/g, "\\").replace(/\\/g, "\#");
	   
	
	
	
	dados_envio= "action=insertimage&file="+path.replace(/\\/g, "\#")+"&directory="+diretorio;
	save(button,dados_envio,"thema","");  
	closeWExplore(id,"only_close"); 
	
	
}


function addFromComputer(elemento,local){
    id= $(elemento).closest('div.program').attr('id');
	
	   app_diretorio = $('#app_directory').val();
	   app_diretorio= app_diretorio+"\\images\\"+local;
	   app_diretorio =  app_diretorio.replace(/\#/g, "\\");
	   $('#upload_0').find('.gallery_path').val(app_diretorio);
	   $('#upload_0').find('.folder_hidden').val(app_diretorio);
	   

 
 
     callUploadWindow(elemento,'upload');
}


function setAccountImage(button){
 
  id = $(button).closest('div.program').attr('id');
  image =  $('#'+id).find('.ul_pictures').find('li.selected').find('img').attr('src');
  $('#'+id).find('.user_sel').find('img').attr('src',image);
  user_image = $('#'+id).find('.user_sel').find('img').attr('src');
  id_user = $('#user_system_id').val();
  id_group = $('#group_system_id').val();
  dados_envio = "user_image="+user_image+"&id_user="+id_user+"&id_group="+id_group+"&action=save";
  saveSetting("settings","",dados_envio);


}
function setMouseIcon(button){

  id = $(button).closest('div.program').attr('id');
   image =  $('#'+id).find('.ul_icons').find('li.selected').find('img').attr('src');
  $('#'+id).find('.mouse_sel').find('img').attr('src',image);
  
  mouse_icon = $('#'+id).find('.mouse_sel').find('img').attr('src');
  id_user = $('#user_system_id').val();
  id_group = $('#group_system_id').val();

   dados_envio = "mouse_image="+mouse_icon+"&id_user="+id_user+"&id_group="+id_group+"&action=save";
   saveSetting("settings","",dados_envio);


}








