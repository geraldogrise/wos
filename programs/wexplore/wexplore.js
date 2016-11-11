
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
var id_program = "";
var contWexplore = 0;




function callWindowWExplore(elemento,id,callBackFuntion,tipo,function_button,folder,filtro){
 
   var klon = $( '#'+id+"_"+  "0");
   contWexplore = (Math.random()*1000+"").replace(".","");
 

  if(!$(elemento).hasClass('menuClick')){
     	$(elemento).addClass('menuClick');
			
			
  }
   
    clone = klon.clone(true);
	clone.attr('id',id+"_"+contWexplore).insertAfter(klon).fadeIn();
	
	if(tipo != "open" && tipo !="save" ){
	         
		   
			$('#'+id+"_"+contWexplore).resizable({
				containment: "#wrapper",
				alsoResize:  $('#'+id+"_"+contWexplore).find('.content'),
				start: function( event, ui ) {
				    $('#'+id+"_"+contWexplore).find('.sidebar').height('300px');
				},	
				stop: function( event, ui ) {
					     $('#'+id+"_"+contWexplore).find('.search_explore').width($('#'+id+"_"+contWexplore).width()-$('#'+id+"_"+contWexplore).find('.search_all').width()-170);
						  $('#'+id+"_"+contWexplore).find('.content').width($('#'+id+"_"+contWexplore).width()-237);
						  $('#'+id+"_"+contWexplore).find('.content').height( $('#'+id+"_"+contWexplore).height()-100);
						  $('#'+id+"_"+contWexplore).find('.sidebar').height( $('#'+id+"_"+contWexplore).height()-100);
						  $('#'+id+"_"+contWexplore).height( $('#'+id+"_"+contWexplore).find('.content').height()+80)	;
				}				
			});
	}
	local = id+"_"+contWexplore;
	allowDrag(local);
	addZindex(id+"_"+contWexplore);
	currentFolder = $("#"+local).find('.current_folder').val();
    caminho =currentFolder.substring(currentFolder.lastIndexOf('\\')+1);	
	
	if($('.wexplore_style').size() <=2){
	   
	   setGips(local,id,caminho);
	}else{
	   insertGip(local,id,caminho);
	}
	/* $("#"+local ).mouseenter(function() {
		current_explore_window = local;
		current_explore_window_prev = local;
	    local_folder = $("#"+local).closest('div.program').find('.current_folder').val();
		
		
	 });*/
	 
	
	
	
   eval(callBackFuntion);	
   id_explore =  ""+id+"_"+contWexplore;   
   eval("setTypeExplore('"+id_explore+"','"+tipo+"','"+folder+"','"+filtro+"')"); 
    $('#'+id+"_"+contWexplore).find('.filter').val(filtro);
	
	//getDisks(id_explore,"N",'disks');

  if(tipo == "open"){
     
	  $('#'+id+"_"+contWexplore).find('.ow_filter').val(filtro)	
	 $('#'+id+"_"+contWexplore).find('.open_folder').attr('onclick',function_button);
	
	 $('#'+id+"_"+contWexplore).css('z-index','9999999');
	  $('#'+id+"_"+contWexplore).css('height','467px');
	   
	 
  
  }else if(tipo== "save"){
       $('#'+id+"_"+contWexplore).find('.ow_filter').val(filtro)	
  	  $('#'+id+"_"+contWexplore).find('.save_file').attr('onclick',function_button);
      $('#'+id+"_"+contWexplore).css('z-index','9999999');
	  $('#'+id+"_"+contWexplore).css('height','467px');
	 
  }
  else if(tipo.indexOf("command")!=-1){
	 
	 first = function_button.split(",")[0];
	 second =function_button.split(",")[1];
	 second = "'"+second.split(")")[0]+"'"+")";
	 function_button = first+","+second;
	 function_button = function_button.replace(/\''/g, "'");
	
	 
	 
	 $('#'+id+"_"+contWexplore).find('.open_folder').attr('onclick',function_button);
	  $('#'+id+"_"+contWexplore).find('.file_a').css('margin-left','180px');
      $('#'+id+"_"+contWexplore).css('z-index','9999999');
	  $('#'+id+"_"+contWexplore).css('height','467px');
	  
	    
   
	
  }  
  

 
				
   

}



function setTypeExplore(id,tipo,folder,filtro){

   if(tipo=="open" || tipo.indexOf("command")!=-1){
	   $("#"+id).find('.wexplore_footer').show().find('.open_folder').show();
	  if(tipo.indexOf('command') != -1){
	       $("#"+id).find('.wexplore_footer').show().find('.open_folder').html('<i class="icon-folder-open-alt"></i> '+tipo.split('-')[1]);
		}
	   
	}
	else if(tipo == 'save'){
	   $("#"+id).find('.wexplore_footer').show().find('.save_file').show();
	 

	}
	if(tipo == 'save' || tipo == 'open' || tipo.indexOf("command")!=-1){
	   $("#"+id).find('.minus').hide();
	   $("#"+id).find('.max').hide();
	}
	$("#"+id).find('.type_explore').val(tipo);
	
	tipo =$("#"+id).find('.type_explore').val();
	
	current = $("#"+id).find('.current_folder').val();
	
	//getInitTreeView(id,current,tipo,"1",filtro);
	
	if(folder !="" &&  folder != "undefined"){
	   current =folder;
	   $("#"+id).find('.current_folder').val(folder.replace(/\#/g, "\\"));
	   $("#"+id).find('.search_explore').val(folder.replace(/\#/g, "\\"));
	}
	
	current = current.replace(/\\/g, "\#");
	$("#"+id).find('.explore_history').val(current);
	getInitTreeView(id,current,tipo,filtro);
	
	
}
function resizeExplore(button){
   
   id = $(button).closest('.program').attr('id');
   
    if($("#"+id).hasClass('maxWindow')){
	    $("#"+id).find('.input_search .search_explore').css('width','64.0%');
		$("#"+id).css('padding','0')
		 $("#"+id).find('.content').width( $("#"+id).width()-$('#'+id).find('.sidebar').width()-30);

	
	}else{
	   $("#"+id).find('.input_search .search_explore').css('width','53%');
	}
	
}

function resizeWindowExplore(button,callBackfunction){
    id = $(button).closest('.program').attr('id');
	
	
	if($('#'+id).hasClass('maxWindow')){
	  
	 
	    $('#'+id).find('.content').height("330px");
		$('#'+id).find('.sidebar').height("315px");
		$('#'+id).removeClass('maxWindow');
		$('#'+id).find('.content').width("410px");
		$('#'+id).animate({width: "640px",height: "400px"}).promise().done(function ()
		{
			 
			 eval(callBackfunction);
		});
		$('#'+id).css('padding','0');
		$('#'+id).css('position','absolute');
		
      
	}
	else{
        $('#'+id).addClass('maxWindow');
		 
		$('#'+id).find('.content').height($('#desktop').height()-88);
		$('#'+id).find('.sidebar').height($('#desktop').height()-98);
		$('#'+id).css('padding','10px');
		
	    $('#'+id).animate({width: "100%",height:$('#desktop').height()-13}).promise().done(function ()
		{
			
			 eval(callBackfunction);
			
		});
		
	
	}
	
	
	
	
   
}
function defineArrows(ide,arrow){
     array_history = $('#'+ide).find('.explore_history').val().split(",");
	 history = $('#'+ide).find('.explore_history').val();
	 count = 0;
	
	 if(arrow == ""){
	     count=  $('#'+ide).find('.explore_count').val();
		 left= ((count)<0)?array_history[0]:array_history[count];
		 $('#'+ide +' .arrow_left').attr('onclick','showDirectoryContent("'+ide+'","'+left+'",3,"left")');
		 
		 count++;
		 $('#'+ide).find('.explore_count').val(count);
		 
		
	 }
	 else if(arrow =="left"){
	     count=  $('#'+ide).find('.explore_count').val();
		 
		 count= count-1;
		
		 $('#'+ide).find('.explore_count').val(count);
		 
		
		 
		 if(count -1 >= 0){
		   left= ((count)<0)?array_history[0]:array_history[count-1];
		 
		   if(left != $('#'+ide).find('.search_explore').val().replace(/\\/g, "\#")){
		     $('#'+ide +' .arrow_left').attr('onclick','showDirectoryContent("'+ide+'","'+left+'",3,"left")');
		   }
		 }
		right = array_history[count+1];
		 $('#'+ide +' .arrow_right').attr('onclick','showDirectoryContent("'+ide+'","'+right+'",3,"right")');
		
	 
	 }
	 else if(arrow =="right"){
	   count=  $('#'+ide).find('.explore_count').val();
		count++;
		 $('#'+ide).find('.explore_count').val(count);
		 if(count -1 >= 0){
		   left= ((count)<0)?array_history[0]:array_history[count-1];
		    if(left != $('#'+ide).find('.search_explore').val().replace(/\\/g, "\#")){
		        $('#'+ide +' .arrow_left').attr('onclick','showDirectoryContent("'+ide+'","'+left+'",3,"left")');
		    }
		 
		 }
		     
		   
		     right = array_history[count+1];
			
			 
		     tamanho = array_history.length;
			 
			
			
			
			     
                     if(tamanho <= count+1){
			    
			             
							 $('#'+ide +' .arrow_right').attr('onclick','');
			         } 
                     else{					 
			            	  
							  $('#'+ide +' .arrow_right').attr('onclick','showDirectoryContent("'+ide+'","'+right+'",3,"right")');
				
			         }
		
		 
		 
		
		
		
	    
	 }
	 
   
     
}

function showDirectoryContent(item,file,source_type,arrow_clicked,filtro){
	    
	   
		file_folder = file;
		$(item).closest('div.program').find('.current_folder').val(file_folder);
		
		
		
		fileLeft = file.substring(0,file.lastIndexOf('#'));
	    file = file.replace(/\#/g, "\\");
	    
       		
			  var id ="";
			  /*--------------- source type define local click  sidebar item or content item----------------*/
			  if(source_type ==1){
				id =$(item).closest('div.program').attr('id');
				$('#'+id+' .search_explore').val(file);
				
			  }
			  else{
				 id = item;
				 $('#'+id+' .search_explore').val(file.replace("/", "\\"));
				
			  }
			   $("#"+id).find(".content").mCustomScrollbar('destroy');
			  
		     tipo = $('#'+id ).find('.type_explore').val();
			 filtro = $('#'+id).find('.filter').val();
			 
			 
			 if(arrow_clicked==""){
		        histo = $('#'+id).find('.explore_history').val();
				filehistory = file.replace(/\\/g, "\#");
			
				histo = histo+","+filehistory;
				$('#'+id).find('.explore_history').val(histo);
				
				 
			 }
			
			defineArrows(id,arrow_clicked);
			id_user  =$('#user_system_id').val();  
            id_group  =$('#group_system_id').val();    			 
			ow_filter=  $('#'+id).find('.ow_filter').val();
			 
		
		     var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/directoryController.php',
			   data:   'file='+file+"&action=listFiles&tipo="+tipo+"&direto=2&setupView=list&filtro="+filtro+"&id_user="+id_user+"&id_group="+id_group+"&ow_filter="+ow_filter,
			   dataType  : 'html',

				  success : function(retorno){
						$('#'+id+' .content .listview').html(retorno);
						setDraggable(id,"draggable",id +" .content");
	                    setDroppable(id);
						setScrollExplore(id,"3d-dark");  
						   
	
										
				  },
                  error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				    callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		          }  				  

			 });
			
	    
	 
	 }
	function getInitTreeView(id,current,tipo,filtro){
	        
		     current = current.replace(/\#/g, "\\");
			 $("#"+id).find(".content").mCustomScrollbar('destroy');
			 id_user  =$('#user_system_id').val();  
             id_group  =$('#group_system_id').val();    			 
			
			
		     var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/directoryController.php',
			   data:   'file='+current+"&action=listFiles&tipo="+tipo+"&setupView=list&filtro="+filtro+"&id_user="+id_user+"&id_group="+id_group,
			   dataType  : 'html',

				  success : function(retorno){
						
						 
						  $('#'+id+' .content .listview').html(retorno);
						  setDraggable(id,"draggable",id +" .content");
	                      setDroppable(id);
						  setScrollExplore(id,"3d-dark");  	
                       				  
						 
						
						
										
				  } ,
                  error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				    callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		         }				  

			 });
	 
	 }
	 
	 function showDirectory(item,file,filtro){
	    file = file.replace(/\#/g, "\\");
		id_user  =$('#user_system_id').val();  
        id_group  =$('#group_system_id').val();    
		if($(item).closest('li').hasClass('opened')){
		
		     if($(item).hasClass('aberto')){
			     
			       $(item).removeClass('aberto');
				   $(item).closest('li').removeClass('aberto');
				   $(item).addClass('fechado');
				   $(item).closest('li').addClass('fechado');
				   $(item).closest('li').find('ul').hide();
				   $(item).attr('src','images/arrow_list_right.png');
			 }
			 else{
			       $(item).removeClass('fechado');
				   $(item).closest('li').removeClass('fechado');
				   $(item).addClass('aberto');
				   $(item).closest('li').addClass('aberto');
				   $(item).closest('li').find('ul').show();
				   $(item).closest('li').find('ul li.fechado ul').hide();
				  
				   $(item).attr('src','images/arrow_list_down.png');
			 }
		}
		else{
		   id =$(item).closest('div.program').attr('id');
		   tipo = $('#'+id ).find('.type_explore').val();
			var x = $.ajax({
							   type : 'post',
							   url  : 'system/controller//directoryController.php',
							   data:   'file='+file+"&action=showFiles&tipo="+tipo+"&direto=1&setupView=list&filtro="+filtro+"&id_user="+id_user+"&id_group="+id_group,
							   dataType  : 'html',

							   success : function(retorno){
									$(item).closest('li').addClass('opened');
									$(item).attr('src','images/arrow_list_down.png');
									$(item).addClass('aberto');
									$(item).closest('li').append(retorno);
							   } ,
						       error: function(XMLHttpRequest, textStatus, errorThrown){
										
											callWindowMessage("","error",UcFirst(textStatus),errorThrown);
										 
								}									   

						  });
			}
					  
					
					
	 
	 }
	 
	 
	
	 
	 function reloadExplore(elemento){
	    id =$(elemento).closest('div.program').attr('id');
		$("#"+id).find(".content").mCustomScrollbar('destroy');
		file = $('#'+id).find('.search_explore').val();
		tipo = $('#'+id ).find('.type_explore').val();
		file_search = $('#'+id).find('.search_all').val();
		id_user  =$('#user_system_id').val();  
        id_group  =$('#group_system_id').val();  
		ow_filter=  $('#'+id).find('.ow_filter').val();
		filter = "";
		 $('#'+id+' .content .listview').html("");
		 var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/directoryController.php',
			   data:   'file='+file+"&action=listFiles&tipo="+tipo+"&direto=2&setupView=list&filter="+filter+"&file_search="+file_search+"&id_user="+id_user+"&id_group="+id_group+"&ow_filter="+ow_filter,
			   dataType  : 'html',

				  success : function(retorno){
						$('#'+id+' .content .listview').html(retorno);
						setDraggable(id,"draggable",id +" .content");
	                    setDroppable(id);
						$('#'+id).find('.current_folder').val(file);
						setScrollExplore(id,"3d-dark"); 
										
				  },
                  error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				    callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		         }						  

			 });
	 }
	 function searchExplore(elemento){
	    id =$(elemento).closest('div.program').attr('id');
		$("#"+id).find(".content").mCustomScrollbar('destroy');
		file = $('#'+id).find('.search_explore').val();
		file_search = $('#'+id).find('.search_all').val();
		tipo = $('#'+id ).find('.type_explore').val();
		id_user  =$('#user_system_id').val();  
        id_group  =$('#group_system_id').val();
		ow_filter=  $('#'+id).find('.ow_filter').val();
		filter = "";
		
		$('#'+id+' .content .listview').html("");
		 var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/directoryController.php',
			   data:   'file='+file+"&action=search&file_search="+file_search+"&tipo="+tipo+"&direto=2&setupView=list&filter="+filter+"&id_user="+id_user+"&id_group="+id_group+"&ow_filter="+ow_filter,
			   dataType  : 'html',

				  success : function(retorno){
						$('#'+id+' .content .listview').html(retorno);
						setDraggable(id,"draggable",id +" .content");
	                    setDroppable(id);
						$('#'+id).find('.current_folder').val(file);
						setScrollExplore(id,"3d-dark"); 
										
				  },
                  error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				    callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		         }						  

			 });
	 }
function setPath(button){
	      id = $(button).closest('.program').attr('id');
		  $('#'+id).find('.file_a').val($(button).attr('path').replace(/\#/g, "\\"));
		   if($('#'+id).hasClass('wexplore_style')){
			   current_explore_window = id;
		   }
		  
}
function toggleLibrary(button){
     
	id = $(button).closest('.program').attr('id');
	ulx = $(button).closest('ul.list');;
	
	 if($(ulx).find('.fixelist').hasClass('opened')){
	    $(ulx).find('.fixelist').removeClass('opened');
		$(ulx).find('.fixelist').addClass('closed');
		$(button).attr('src','images/arrow_list_right.png');
	    $(ulx).find('.fixelist').hide();
	 }
	 else{
	     $(ulx).find('.fixelist').removeClass('closed');
		 $(ulx).find('.fixelist').addClass('opened');
		 $(button).attr('src','images/arrow_list_down.png');
		 $(ulx).find('.fixelist').show();
	 }

}	 



function doUndo(button) {
  
   id = $(button).closest('.program').attr('id');
   var e = jQuery.Event( 'keydown', { which: $.ui.keyCode.ENTER } );

	var press = jQuery.Event("keypress");
	press.ctrlKey = false;
	press.which = 40;
	$("#"+id).find('textarea').trigger(press);
   
}

function closeWExplore(ide,type){
   
   
     closeProgramGip(id);
     if(type=="only_close"){
	 
	    $('#'+ide).remove();
	 }
	 else if(type=="close_and_safe"){
	        tipo =$("#"+ide).find('.type_explore').val();
			current = $("#"+ide).find('.current_folder').val();
			current = current.replace(/\\/g, "\#");
			current = current.replace(/\//g, "\#");
			getInitTreeView(ide,current,tipo,"1","");
			getInitTreeView(ide,current,tipo,"2","");
			$('#'+ide).remove();
			
			if($('#current_desktop').val()==current){
			    getContentDesktop("desktop",current,"normal",2,"icon-small");
			}
	 
	 }
	 else {
	 
	 
	 }

}
function reloadFolder(ide){
            path = $("#"+ide ).find('.zip_path').val();	
		   
			current = path;
			current = current.replace(/\//g, "#");
				
			if($('#current_desktop').val()==current){
			   
			   getContentDesktop("desktop",current,"normal",2,"icon-small");
			}
			else{
			   
			  getInitTreeView(current_explore_window,current,"normal","1","");
			 // getInitTreeView(current_explore_window,current,"normal","2","");
			}

}
function setScrollExplore(ide,typeScroll){
               
		  $('#'+ide).find('.content').mCustomScrollbar({
					theme:typeScroll
			});
			
			
}







	
	 

