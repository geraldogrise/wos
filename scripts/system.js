 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
var local_folder="";
var current_explore_window= "desktop";
var local_folder_cc="";
var current_explore_window_prev = "";
var hover_bottom = "";


function getKeys(){
     
		// $(document).on('click', '*:not(.no_io)', function (e) {
	
          $(document).keydown(function(e) {
				ctrl = false;
				if(e.ctrlKey){
				  ctrl = true;
				}
				
				if (e.keyCode == 67 && e.ctrlKey) {
					 //ctrl+c
					 getTransfArea("copy");
					
				}
				else if(e.keyCode == 65 && e.ctrlKey){
					//ctrl+a
				}
				else if(e.keyCode == 86 && e.ctrlKey && !$('.no_io').is(':focus')){
					 //ctrl+v
					 
					  pasteFiles(current_explore_window,local_folder_cc,local_folder,current_explore_window_prev);
					
				
				}
				else if(e.keyCode == 88 && e.ctrlKey){
						//ctrl+x
						getTransfArea("move");
					  
					   
				}
				else if(e.keyCode == 46 || e.keyCode == 110){
			        getTransfArea("delete");	
					deleteFiles(current_explore_window,local_folder,fileCopy);
				}
				 return true;
				
				
			});
		
			$(document).keyup(function(e) {
			   ctrl = false;
			});
			
			getClick();
           	
			
		
			
			

}

function getClick(){

	$(document).click(function(e){
			   
				var target = $(e.target);
			    checkTarget(target,e);
				 
				
				  if($(target).closest('div.program').hasClass('wexplore_style')){
				    local_folder = $(target).closest('div.program').find('.current_folder').val();
					current_explore_window = $(target).closest('div.program').attr('id');
					current_explore_window_prev = $(target).closest('div.program').attr('id');
					
				  }
				  else{
				      
					 
					 
					 if($(target).hasClass('workarea')){
					   local_folder = $('#current_desktop').val();
					   current_explore_window="desktop";
					
					   
					 }
					 
					 else{
					     if($(target).closest('div.program').hasClass('wexplore_style')){
						   local_folder = $(target).closest('div.program').find('.current_folder').val();
					       current_explore_window = $(target).closest('div.program').attr('id');
						   current_explore_window_prev = $(target).closest('div.program').attr('id');
						  
						 }
					     //current_explore_window="desktop";
					 }
					
				  }
				 
				 renameFile(current_explore_window);

				 if($(target).closest('div.program').hasClass('program')){
				       id_zi = $(target).closest('div.program').attr('id');
					   
					   if(!$(target).hasClass('no_zindex')){
						  
						   addZindex(id_zi);
					   }
					   
				  }
				  if($(target).closest('div.gips-body').size() == 0){
				     
					  $('.gips-container').hide();
				  }
				 
				
			});

}





function checkSelected(){
  contSelected = 0;  
  $('div.selected').each(function(){
	   contSelected ++;    
   });
   return contSelected;

}
function defineConfigContextMenu(){
    retorno = false;
    if(checkSelected()> 0){
	   retorno= true
	}
	return retorno;
}


function detectBrowser() { 
    var browser = "";
		if(navigator.userAgent.indexOf("Chrome") != -1 ) 
		{
			browser = 'Chrome';
		}
		else if(navigator.userAgent.indexOf("Opera") != -1 )
		{
		 browser = 'Opera';
		}
		else if(navigator.userAgent.indexOf("Firefox") != -1 ) 
		{
			 browser = 'Firefox';
		}
		else if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) //IF IE > 10
		{
		  browser = 'IE'; 
		}  
		else 
		{
		   browser = 'unknown';
		}
		return browser;
    }
/*---------------- check  target in click ---------------*/
function checkTarget(target,e){

   if(target.closest('ul.arvore').hasClass('arvore')==false){
               
		 if(navigator.userAgent.indexOf("Firefox") != -1 && e.button == 2){
			       
				  
				   defineContextMenu(defineConfigContextMenu());    
		          
		  }
		  else if(navigator.userAgent.indexOf("Firefox") != -1 && e.button == 1){
		     
			   check_removed(target);
				
		   }
		  else{
		     check_removed(target);
			  defineContextMenu(defineConfigContextMenu()); 
			  
              	  
		  }
	
   }
}

function check_removed(target){
  
   if(target.hasClass('list')==false && !target.closest('div.program').hasClass('window_zip') && !target.closest('div.program').hasClass('window_extract') && !target.hasClass('iconcm-extract') && !target.hasClass('iconcm-zip')){
			     
				 removerSelected();
	}
  
}

/*----------------- set item selected ----------------*/

function selectItem(div_item){
  
   if($(div_item).closest('div.program').hasClass('wexplore_style')){
      local_folder = $(div_item).closest('div.program').find('.current_folder').val();
   }
	
   if(!ctrl){
      $('#'+current_explore_window+' div.list.selected').each(function(){
	     $(this).removeClass('selected');
		
	  });
	   $('#'+current_explore_window+' div.list.active').each(function(){
	     $(this).removeClass('active');
		
	  });
	  
	  
     
   }
   
   
   if($(div_item).hasClass('selected')){
      $(div_item).removeClass('selected');
	 
	   
   }
   else{
         
	   $(div_item).addClass('selected'); 
	   defineContextMenu(true);
	 
   }
   if($(div_item).closest('div.program').hasClass('wexplore_style')){
       current_explore_window = $(div_item).closest('div.program').attr('id');
	  
   }else{
       current_explore_window="desktop";
   }
  
 
   
}

/*----------------- remove item selected ----------------*/
function  removerSelected(){
      $('#'+current_explore_window+' div.list.selected').each(function(){
	     $(this).removeClass('selected');
	  });
	   $('#'+current_explore_window+' div.list.active').each(function(){
	     $(this).removeClass('active');
	  });
	  
}

/* -------------- type context menu -----------------*/
function defineContextMenu(is_selected){
	
     if(is_selected){
		 $('.context-menu-item').each(function(){
                			 
				 if($(this).index() <= 7){
					 $(this).hide();
					
				  }
				  else{
					  $(this).show();
				  }

		  });
	  }
	  else{
	     
		 $('.context-menu-item').each(function(){
				
				  if($(this).index() <= 7){
					 $(this).show();
					
				  }
				  else{
                    				 
					 $(this).hide();
				  }

		  });
	  
	  }
}



/* ------------------ transf area----------------------*/
function getTransfArea(type){
    local_folder_cc = local_folder;
	
	 var separator = "";
	 actionIO = type;
     $('div.selected').each(function(){
	      fileCopy += separator+$(this).attr('path');
		  separator = ",";
		  if(type == "move"){
		       $(this).css('opacity','0.5');
		  
		  }
		  
	     
	 });
	

}






/*---------------------  command paste ----------------------*/
function pasteFiles(folder,local,destino,folder_prev){
       destino = destino.replace(/\\/g, "\#");
	 
	 
	 
	 action = "copyFiles";
	 if(actionIO == "move"){
	    action = "moveFiles";
	 }
	  
	   
	
	  var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/ioController.php',
			   data:  'action='+action+'&origem='+fileCopy+'&destino='+destino,
			   dataType  : 'JSON',

				  success : function(retorno){
						
						
						
							
						if(current_explore_window =="desktop"){						 
						    
							  origem = fileCopy.split(",")[0];
							  origem = origem.substring(0,origem.lastIndexOf("#"));
							
							   // getInitTreeView(folder_prev,local,tipo,"2","");
								getInitTreeView(folder_prev,local,"normal","");
							   getContentDesktop(folder,destino,"normal",2,"icon-small");
							   
							
							
						}else{
 						  
						      id =folder_prev;  
							 // getInitTreeView(folder_prev,destino,tipo,"2","");
							  getInitTreeView(folder_prev,destino,"normal","");
						      getContentDesktop("desktop",$('#current_desktop').val(),"normal",2,"icon-small");
						}
						  actionIO="";
						  fileCopy="";
						
										
				  },
                  error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
				  }				  
                 			  

			 });	

}
/*---------------------  command delete ----------------------*/
function  deleteFiles(folder,local,arquivo){
	
	   var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/ioController.php',
			   data:  'action=deleteFiles&arquivo='+arquivo,
			   dataType  : 'JSON',

				  success : function(retorno){
						  
						   fileCopy="";
						
						reloadCurrentFolder(folder,local);
						 defineContextMenu(false); 
						 actionIO="";
								
				  }, 
				  error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
				  }
                 			  

			 });	 
}


/* ------------------ command move -------------------------*/
function  moveFiles(folder,local,origem,destino){
	
	   var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/ioController.php',
			   data:  'action=moveFiles&origem='+origem+'&destino='+destino,
			   dataType  : 'JSON',

				  success : function(retorno){
						
						reloadCurrentFolder(folder,local);
								
				  },
                  error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
				  }				  
                 			  

			 });	 
}



/* -------------------------- copy file ------------------------*/
function  copyFiles(folder,local,origem,destino){
	   destino = destino.replace(/\\/g, "\#");
	   origem = origem.replace(/\\/g, "\#"); 
	   var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/ioController.php',
			   data:  'action=copyFiles&origem='+origem+'&destino='+destino,
			   dataType  : 'JSON',

				  success : function(retorno){
					    
						reloadCurrentFolder(folder,local);
									
				  }, 
				  error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
				  }
                 			  

			 });	 
}
 
 
 function renameFile(id_local){
      
   newname =  $("#"+id_local).find('.editable').val();
   path =  $("#"+id_local).find('.editable').attr('path');
   path_old =   $("#"+id_local).find('.editable').attr('path');
   name = $("#"+id_local).find('.editable_link').html();
   
   if(path+"" != "undefined"){
  
   
	   path = path.replace(name,newname);
	    
	   if(name != newname){
	   
		   
		   var x = $.ajax({
				   type : 'post',
				   url  : 'system/controller/ioController.php',
				   data:  'action=renameFile&oldname='+path_old+'&newname='+path,
				   dataType  : 'JSON',

					  success : function(retorno){
							
							 $("#"+id_local).find('span.editable_link').attr("path",path);
							 $("#"+id_local).find('span.editable_link').html(newname).show();
							 $("#"+id_local).find('.editable').remove();
							
											
					  },
                       error: function(XMLHttpRequest, textStatus, errorThrown){
		        
						 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
						 
					  }					  
								  

				 });	
		   
	   }
   }
  
  
 
 }
 function setRenameFile(){
    
	 getTransfArea("rename");
	
	
	  $('div.selected[path="'+fileCopy+'"]').each(function(){
	        path = $(this).attr('path');
			html = $(this).find('span').addClass('editable_link').html();
			
			$(this).find('span').hide().after('<input class="editable" onmouseleave="renameFile(\''+current_explore_window+'\')" type="text" value="'+html+'" path="'+path+'">');
	   
	  
	  });
	 fileCopy="";
    
 }
 


/* ------------------------ create new files ------------------------*/
function  createNewFile(folder,local,key){
	
	   var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/ioController.php',
			   data:   'file='+local+"&action=createFile&tipoFile="+key,
			   dataType  : 'JSON',

				  success : function(retorno){
						
                      reloadCurrentFolder(folder,local);
									
				  }, 
                 error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
				  }		  

			 });	 
}

/* ------------------------ create new folder ------------------------*/
function  createNewFolder(folder,local){
	
	   var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/ioController.php',
			   data:   'file='+local+"&action=createFolder",
			   dataType  : 'JSON',

				  success : function(retorno){
						reloadCurrentFolder(folder,local);
                    
										
				  }, 
				   error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
				  }
                 			  

			 });	 
}

function getDisks(id,showProgress,localRender){
	        
		    
			 $("#"+id).find('.'+localRender).html("");
		     var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/controlpanelController.php',
			   data:   'action=getDisks&showProgress='+showProgress,
			   dataType  : 'html',

				        success : function(retorno){
						      $("#"+id).find('.'+localRender).html(retorno);
						 }, 
						  error: function(XMLHttpRequest, textStatus, errorThrown){
		        
							 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
							 
						  }
                 			  

			 });
	 
	 }




/* ------------------------- reload desktop area ------------------------*/

function getContentDesktop(id,current,tipo,direto,setupView){
	        
		     current = current.replace(/\#/g, "\\");
			 id_user  =$('#user_system_id').val();  
              id_group  =$('#group_system_id').val();
		
		     var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/directoryController.php',
			   data:   'file='+current+"&action=listDesktopFiles&tipo="+tipo+"&direto="+direto+"&setupView="+setupView+"&id_user="+id_user+"&id_group="+id_group,
			   dataType  : 'html',
			   dataType  : 'html',

				  success : function(retorno){
						  $("#"+id).html(retorno);
						  setDraggable(id,"draggable",'.workarea');
	                      setDroppable('.workarea');
						   $("#"+id ).mouseenter(function() {
							current_explore_window = "desktop";
							 local_folder = $('#current_desktop').val();
							
							
							
						 });
						
						
										
				  }, 
				  error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
				  }
                 			  

			 });
	 
	 }
	 
	 
	 
function setContextMenu(elemento,menu){
	  
   
	
	 $.contextMenu({
        selector: elemento, 
        callback: function(key, options) {
            
			
		   if(key == "copy"){
		      getTransfArea("copy");
		   }
		   else if(key== "cut"){
		      getTransfArea("move");
		   }
		   else if(key== "paste"){
		        
				
		       pasteFiles(current_explore_window,local_folder_cc,local_folder,current_explore_window_prev);
		   }
		   else if(key== "delete"){
		      getTransfArea("delete");	
			  deleteFiles(current_explore_window,local_folder,fileCopy);
		   
		   }
		   else if(key== "newfolder"){
		   
		       createNewFolder("desktop",local_folder);
		   }
		   else if(key== "newzip"){
		   
		   
		   }
		   else if(key == "options"){
		      callWindowOptions();
		   }
		    else if(key== "zip"){
		   
		        getTransfArea("zip");
				callWindowWithParameter(this,'window_zip','callWindowWindow_zip','',fileCopy);
		   }
		    else if(key== "download"){
		        getTransfArea("donwload");
				download();
		     
		   }
		   else if(key== "extract"){
		        getTransfArea("extract");
				callWindowWithParameter(this,'window_extract','callWindowWindow_extract','',fileCopy);
		     
		   }
		   else if(key== "rename"){
		         setRenameFile();
		     
		   }else if(key == "open"){
		      getTransfArea("open");
			  callWindowWithParameter("",'wopen','callWindowWOpen','',fileCopy);
		   }
		   else{
		     local_folder = local_folder.replace(/\\/g, "\#");
			  createNewFile("desktop",local_folder,key);
		   }
		   
        },
		
        items: {
            
			"newtxt": {name: "New txt", icon: "newtxt"},
		    "newfolder": {name: "new Folder", icon: "newfolder"},
			"newzip": {name: "New ZIP", icon: "newzip"},
            "sep1": "---------",
			"newphp": {name: "New Php", icon: "newphp"},
            "newhtml": {name: "New Html", icon: "newhtml"},
            "newcss": {name: "New CSS", icon: "newcss"},
			"newsql": {name: "New SQL", icon: "newsql"},
			"sep1": "---------",
			"open": {name: "Open With", icon: "open"},
			"copy": {name: "Copy", icon: "copy"},
            "cut": {name: "Cut", icon: "cut"},
			"paste": {name: "Paste", icon: "paste"},
            "delete": {name: "Delete", icon: "delete"},
			"rename": {name: "Rename", icon: "rename"},
			 "sep1": "---------",
		    "download": {name: "Download", icon: "download"},
			"zip": {name: "Zip", icon: "zip"},
			"extract": {name: "Extract", icon: "extract"},
			"options": {name: "Options", icon: "options"},
		
			
			
         
        }
    });
	
	
}


function setContextMenuProgram(id,elemento,menu){
	  
  
	
	 $.contextMenu({
        selector: elemento, 
        callback: function(key, options) {
            
			
		   if(key == "uninstall"){
		     id_prog= $("#"+id).find('.data').find('tr.pactive').attr('rel');
			callWindowWithParameter(this,'uninstall','callWindowUninstall','',id_prog)
		   }
		   
        },
		
        items: {
            
			"uninstall": {name: "Uninstall", icon: "uninstall"},
		  
         
        }
    });
	
	
}
function setContextMenuBarBottom(elemento,menu){
	  
    

	 $.contextMenu({
        selector: elemento, 
        callback: function(key, options) {
            
		 
		   if(key == "pin"){
		      saveBarbottom("insert", hover_bottom,"barbottom")
		   }  
		   else if(key == "unpin"){
		     saveBarbottom("delete", hover_bottom,"barbottom")
		   }
		   
        },
		
        items: {
            
			"pin": {name: "Pin", icon: "pin"},
			"unpin": {name: "Unpin", icon: "unpin"},
		  
         
        }
    });
	
	
}


 function getAssociationOptions(button){
	 id =$(button).closest('div.program').attr('id');
	 prog_name=$("#"+id).find('.window_top').text().trim();
	 callWindowWithParameter(button,'programs_association','callWindowPrograms_options','',prog_name);
 }
 
 
 
/*exemplo SaveToDisk('http://localhost/estudo/wos/desktop/abc/json.sql', "json.sql");*/
function SaveToDisk(fileURL, fileName) {
    // for non-IE
    if (!window.ActiveXObject) {
        var save = document.createElement('a');
        save.href = fileURL;
        save.target = '_blank';
        save.download = fileName || 'unknown';

        var event = document.createEvent('Event');
        event.initEvent('click', true, true);
        save.dispatchEvent(event);
        (window.URL || window.webkitURL).revokeObjectURL(save.href);
    }

      else {
        var _window = window.open(fileURL, '_blank');
        _window.document.close();
        _window.document.execCommand('SaveAs', true, fileName || fileURL)
        _window.close();
    }
}

function reloadCurrentFolder(folder,local){

  if($('#current_desktop').val()==local){						 
	getContentDesktop(folder,local,"normal",2,"icon-small");
  }else{
	  id_current =current_explore_window;  
	  tipo =$("#"+id_current).find('.type_explore').val();
	  getInitTreeView(id_current,local,"normal","");
 }


}

 function logout(){
	 
  window.location.assign("login.php");
}





