

 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
function callWindowSoundManager(id,pathSound){
 

	  
			$('#'+id).resizable({
				containment: "#wrapper",
				alsoResize: $('#'+id).find('.window_main'),
				stop: function( event, ui ) {
					
						$('#'+id).find('.window_aside').height($('#'+id).height()-120);
						
				}				
			});
	
	
	allowDragPopup($("#"+id).find('.soundInsert'));
	
    if(pathSound!=""){
      
	   openSoundManager(id,pathSound);
   }   
  
   setScroll(id,"light-2", $('#'+id).find(".featured_tabs"));
   
   
  

  
				
   

}

function resizeSoundManager(button){
   
   id = $(button).closest('.program').attr('id');
   
   
    if($("#"+id).hasClass('maxWindow')){
	  
               $('#'+id).find('.window_main').css('width','83%');
			   $('#'+id).find('.window_aside').height($('#desktop').height()-120);
			    
	
	}else{
	            
				$('#'+id).find('.window_main').css('width','64%');  
				 $('#'+id).find('.window_aside').height('85%');
				
	}
	
}

function resizeWindowSoundManager(button,callBackfunction){
    id = $(button).closest('.program').attr('id');
	 
	if($('#'+id).hasClass('maxWindow')){
	 
		
		
	   
		$('#'+id).removeClass('maxWindow');
		
		$('#'+id).animate({width: "640px",height: "400px"}).promise().done(function ()
		{
			 
			 eval(callBackfunction);
		});
		$('#'+id).css('padding','0');
		$('#'+id).css('position','absolute');
		
      
	}
	else{
        $('#'+id).addClass('maxWindow');
		
		
	    $('#'+id).animate({width: "100%",height:$('#desktop').height()-13}).promise().done(function ()
		{
			
			 eval(callBackfunction);
			
		});
		
	
	}
	
	
	
	
   
}




function openSoundManager(id_soundmanager,pathSoundManager){
  

$('#'+id_soundmanager).find("table.data tbody").html('');
  pathSoundManager=pathSoundManager.replace(/\#/g, "\\");
  app_directory = $('#app_directory').val();
  $.ajax({
            type      : 'post',
 
            url       :'system/controller/soundmanagerController.php',
 
            data:   'path='+pathSoundManager+"&action=readSound&app_directory="+app_directory,
 
            dataType  : 'JSON',
 
                success : function(retorno){
                     
					
				      if(retorno.is_erro == "true"){
					      callWindowMessage("","error","Error",retorno.msg);
					  }
					  else{
                           		
                         setAlbumConfig(id_soundmanager,retorno);
						
						 loadInlinePlayer();
						 
						
						
					  }
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				    callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
                }
				
        });
   
}
function openSoundManager_O(button,id_soundmanager){

  id = $(button).closest('.program').attr('id');
$('#'+id_soundmanager).find("table.data tbody").html('');
app_directory = $('#app_directory').val();
  $.ajax({
            type      : 'post',
 
            url       :'system/controller/soundmanagerController.php',
 
            data:   'path='+$("#"+id).find('.file_a').val()+"&action=readSound&app_directory="+app_directory,
 
            dataType  : 'JSON',
 
                success : function(retorno){
                     
					 
				      if(retorno.is_erro == "true"){
					     callWindowMessage("","error","Error",retorno.msg);
					  }
					  else{
                           		         
					    	
                         setAlbumConfig(id_soundmanager,retorno);
						 closeWExplore(id,"only_close");
						  loadInlinePlayer();
						 
						
						
						 
					  }
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				    callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
                }
				
        });
   
}
function setAlbumConfig(id_ytb,retorno){

 $('#'+id_ytb).find("table.data tbody").html(retorno.content);
 $('#'+id_ytb).find(".album_image").attr('src',retorno.image);
 $('#'+id_ytb).find("em.title").html(retorno.name);
 $('#'+id_ytb).find('.soundtitle').val(retorno.name);
 $('#'+id_ytb).find(".soundimage").val(retorno.image);
 $('#'+id_ytb).find(".soundgallery").val(retorno.gallery);
}
function saveSoundManager(button,id_program){
   
	id = $(button).closest('.program').attr('id');
    name = $("#"+id).find('.file_a').val();
	local = $('#'+id).find('.search_explore').val(); 
	
	soundgallery = $('#'+id_program).find('.soundgallery').val();
	soundimage = $('#'+id_program).find('.soundimage').val();
	soundtitle = $('#'+id_program).find('.soundtitle').val();
	path= local+"\\"+name;
	
	$.ajax({
            type      : 'post',
 
            url       :'system/controller/soundmanagerController.php',
 
            data:   'path='+path+"&action=writeSound&gallery="+soundgallery+"&album="+soundtitle+"&image="+soundimage,
 
            dataType  : 'JSON',
 
                success : function(retorno){
                     
					 
				      if(retorno.is_erro == "true"){
					        callWindowMessage("","error","Error",retorno.msg);
						  
					  }
					  else{
                           	          
						
						  
						  closeWExplore(id,"close_and_safe"); 
						
					  }
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                     callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
				 
                }
				
        });
}

function insertSoundManager(button){
   
	id_program=$(button).closest('div.program').attr('id');
	 if(validateInputs(id_program)){
			soundgallery = $('#'+id_program).find('.gallery_path').val();
			soundimage = $('#'+id_program).find('.image_path').val();
			soundtitle = $('#'+id_program).find('.album_name').val();
			pathWos = $('#app_directory').val();
			
			
			
		   
			$.ajax({
					type      : 'post',
		 
					url       :'system/controller/soundmanagerController.php',
		 
					data:   "action=insertSound&gallery="+soundgallery+"&album="+soundtitle+"&image="+soundimage+"&pathWos="+pathWos,
		 
					dataType  : 'JSON',
		 
						success : function(retorno){
							 
							 
							  if(retorno.is_erro == "true"){
								 
								   callWindowMessage("","error","Error",retorno.msg);
							  }
							  else{
											  
								  $('#'+id_program).find('.album_image').attr('src',retorno.image);
								  $('#'+id_program).find('em.title').html(retorno.name);
								  $('#'+id_program).find('table.data tbody').html(retorno.content);
								  $('#'+id_program).find('.soundInsert').hide();
								  $('#'+id_program).find('.soundimage').val(retorno.image);
								  $('#'+id_program).find('.soundtitle').val(retorno.name);
								  $('#'+id_program).find('.soundgallery').val(retorno.gallery);
								  
								  $('#'+id_program).find('.gallery_path').val("");
								  $('#'+id_program).find('.image_path').val("");
								  $('#'+id_program).find('.album_name').val("");
								  
								 
							  }
						  
						},
						error: function(XMLHttpRequest, textStatus, errorThrown){
						  
						  callWindowMessage("","error",UcFirst(textStatus),errorThrown);
						 
						}
						
				});
		}
}


function createAudioGallery(id){

 
  album = $("#"+id).find('.soundtitle').val();
  image=  $("#"+id).find('.soundimage').val();
  gallery =  $("#"+id).find('.soundgallery').val();

if(validateInputs(id)){
  $.ajax({
            type      : 'post',
 
            url       :'system/controller/soundmanagerController.php',
 
            data:   'album='+album+"&action=insertSound&image="+image+"&gallery="+gallery,
 
            dataType  : 'JSON',
 
                success : function(retorno){
                     
					
				      if(retorno.is_erro == "true"){
					    callWindowMessage("","error","Error",retorno.msg);
					  }
					  else{
                           		         
					     $('#'+id).find("table.data tbody").html('');
					     $('#'+id).find("table.data tbody").html(retorno.content);
						 $('#'+id).find(".album_image").attr('src',retorno.image);
						 $('#'+id).find("em.title").html(retorno.name);
						
						 
					  }
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				 
				    callWindowMessage("","error",UcFirst(textStatus),errorThrown);
                }
				
        });
	}
   
}

function addAudio(button,id_program){
	
	   id = $(button).closest('div.program').attr('id');
	   if(validateInputs(id)){
       name = $("#"+id).find('.file_a').val();
	   local = $('#'+id).find('.search_explore').val(); 
	  
	   path= name;
	   origem = path.replace(/\\/g, "\#");
	   destino = $('#'+id_program).find('.soundgallery').val().replace(/\\/g, "\#");
	 
	
			  if(destino != ""){
				   var x = $.ajax({
						   type : 'post',
						   url  : 'system/controller/soundmanagerController.php',
						   data:  'action=insertAudios&origem='+origem+'&destino='+destino+"&app_directory="+app_directory,
						   dataType  : 'JSON',

							  success : function(retorno){
									
								 createAudioGallery(id_program);	
								 closeWExplore(id,"only_close"); 
								 loadInlinePlayer();
								 
								
									
									
													
							  }, 
							  error: function(XMLHttpRequest, textStatus, errorThrown){
						
								 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
								 
							  }
										  

						 });	
				}	
     }		
}

function stopSoundManager(button){
    id = $(button).closest('div.program').attr('id');
	
	
	
	contSounds = 0;
	
	while(contSounds < soundManager.soundIDs.length){
	   soundManager.stop(soundManager.soundIDs[contSounds]);
	  
	   contSounds++;
	}
	//soundManager = null;
	
}
function loadInlinePlayer(){

 if($(".program.soundmanager").size() == 2 ){
     InlinePlayer();
 }
}






	
	 

