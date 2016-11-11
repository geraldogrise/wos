
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
function callWindowControlPanel(id){
 
   
	$( '#'+id ).resizable({
					containment: "#wrapper",
					
					distance: 1,
					start: function( event, ui ) { },
					stop: function( event, ui ) { 
					  $("#"+id).find('.window_aside').css('height',$('#'+id).height()-52);
					},
	});
	setScroll(id,"3d-dark",$('#'+id).find(".content")); 
	$( '#'+id ).find('.list-group').addClass('collapsed');
	$( '#'+id ).find('.list-group-content').hide();
    getListControl(id,"listControls","","","list");
}




function resizeControlPanel(button){
   
   id = $(button).closest('.program').attr('id');
   
    if($("#"+id).hasClass('maxWindow')){
	   
              $("#"+id).css('padding','0');
			  
		
	}else{
	       
	}
	
}

function resizeWindowControlPanel(button,callBackfunction){
    id = $(button).closest('.program').attr('id');
	
	
	if($('#'+id).hasClass('maxWindow')){
	  
	  
	    
		$('#'+id).removeClass('maxWindow');
		
		$('#'+id).animate({width: "758px",height: "400px"}).promise().done(function ()
		{
			 eval(callBackfunction);
			 $('#'+id).find('.content_area').width("70%");
		});
		$('#'+id).css('padding','0');
		$('#'+id).css('position','absolute');
		
      
	}
	else{
        $('#'+id).addClass('maxWindow');
		
		
		$('#'+id).css('padding','10px');
	    $('#'+id).animate({width: "100%",height:$('#desktop').height()-12}).promise().done(function ()
		{
		  $('#'+id).find('.content_area').width("80%");
		  eval(callBackfunction);
			
		});
		
	
	}
	
	
	
	
   
}

function getListControl(elemento,action,control,group,type){
 
 
            id=elemento;
			
			if($(elemento).hasClass('list')){
			   id = $(elemento).closest('div.program').attr('id');
			}
			user_system_id = $('#user_system_id').val();
			 $('#'+id).find('.ajax_content').html("");
            var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/controlpanelController.php',
			   data:  'action='+action+'&control='+control+'&group='+group+'&type='+type+'&user_system_id='+user_system_id,
			   dataType  : 'HTML',

				  success : function(retorno){
					 
					 $('#'+id).find('.ajax_content').html(retorno);
					
				  }, 
				  error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
				  }
                 			  

			 });
 }
 
 
 function getControlPage(elemento,action){
 
 
            id=elemento;
			
			if($(elemento).hasClass('list')){
			   id = $(elemento).closest('div.program').attr('id');
			}
			user_system_id = $('#user_system_id').val();
			 $('#'+id).find('.ajax_content').html("");
            var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/controlpanelController.php',
			   data:  'action='+action+'&user_system_id='+user_system_id,
			   dataType  : 'HTML',

				  success : function(retorno){
					 
					 $('#'+id).find('.ajax_content').html(retorno);
					  eval("loadControlPage('"+id+"')");
					
				  }, 
				  error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
				  }
                 			  

			 });
 }
 function loadControlPage(id){
   if($('.uniform_on').size() >0){
     // $('.uniform_on').uniform();
   }
    if($('.main_store').size() >0){
      createMainStore(id,"main_store","ext");
   }
    setContextMenuProgram(id,'.data','menu_program');
	if($('#'+id).find('.form_submit').size() >0){
	    loadForm();
		$('#'+id).find('.app_directory').val($('#app_directory').val());
	}
	if($('#'+id).find('.info_upd').find('.ul_up').size() >0){
	   createUpdateElements(id,"local_upd");
	}
  
  
 }
 function getAssociationScreen(button,id_program){
	
	 callWindowWithParameter(button,'programs_association','callWindowPrograms_association','',id_program);
 }
 
 function createStore(local,form){
	dados = $('#'+form).serialize();
	$.ajax({
            type      : 'post',
             crossDomain: true,
            url       :'http://www.grisecorp.com/wos_programsController.php',
 
            data      : dados,
 
            dataType  : 'html',
 
                success : function(html){
                     $('#'+local).html(html);
					 
				      
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		      }
				
        });
	
	
}

function createMainStore(id,local,type){
	
	 
	
	dados = "type="+type+"&action=home";
	$.ajax({
            type      : 'post',
             crossDomain: true,
            url       :'http://www.grisecorp.com/wos_programsController.php',
 
            data      : dados,
 
            dataType  : 'html',
 
                success : function(html){
                     $('#'+id).find('.'+local).html(html);
					 
				      
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		        }
				
        });
	
	
}

function installByZip(button){

    id= $(button).closest('div.program').attr('id');
	sendSubmit(id,'form_install');

}

function updateWos(button){
    id= $(button).closest('div.program').attr('id');
	app_directory = $('#app_directory').val();
	info_update = $('#'+id).find('.info_update').val();
	info_optional = $('#'+id).find('.info_optional').val();
	action = 'update';
	dados_envio = "app_directory="+app_directory+"&action="+action+"&info_optional="+info_optional+"&info_update="+info_update;
	saveAll(id,"update","",dados_envio);
}

function createUpdateElements(id,local){
	
	 user_system_id = $('#user_system_id').val();
	 update_val = $('#seq_update').val();
	 optional_val = $('#seq_optional').val();
	dados = "optional_val="+optional_val+"&update_val="+update_val+"&action=getUpdateInfo"+'&user_system_id='+user_system_id;
	$.ajax({
            type      : 'post',
            crossDomain: true,
            url       :'http://www.grisecorp.com/updateController.php',
 
            data      : dados,
 
            dataType  : 'html',
 
                success : function(html){
                     $('#'+id).find('.'+local).html(html);
					 
				      
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				  callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		        }
				
        });
	
	
}













	 