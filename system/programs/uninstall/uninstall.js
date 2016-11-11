 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */



function callWindowUninstall(id){
 
  
  // addZindex(id);
	 

	
}

function callWindowUninstall(id,pathProgram,parameters){
 

    getProgramUninstallInformation(id,"",parameters);
	
}

function getProgramUninstallInformation(id,local,id_program){
	
	 
	
	dados = "action=getinfo&id_program="+id_program;
	$.ajax({
            type      : 'post',
 
            url       :'system/controller/uninstallController.php',
 
            data      : dados,
 
            dataType  : 'json',
 
                success : function(json){
                  
				  
				  settingUninstall(id,json);
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                   callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				
				 
                }
				
        });
	
	
}
 function settingUninstall(id,json){
    
	$('#'+id).find('.title_program').html(json.name);
	$('#'+id).find('.prog_image').attr('src',json.image.replace(/\#/g, "/"));
	$('#'+id).find('.id_uninstall').val(json.id_program);
	$('#'+id).find('.folder_uninstall').val(json.folder);
	
	//$('#'+id).find('.btn_back').hide();
	
	
 }
 
 function  nextStepUninstall(button){
   id = $(button).closest('div.program').attr('id');
   step = $('#'+id).find('.step_install').val();
  step = Number(step);
 
   switch(step){
       case 1:
           $("#"+id).find('.btn_next').html("Finish");
		   removeProgram(id);
	   break;
       case 2:
         
		  closeWindow(button);
       break;
		
       default:
   
   }
   step=Number(step)+1;
   $('#'+id).find('.step_install').val(step)

}

function removeProgram(id){
   
	app_directory = $('#app_directory').val();
	action = 'uninstallprogram';
	id_uni = $('#'+id).find('.id_uninstall').val();
	folder = $('#'+id).find('.folder_uninstall').val();
	
	 dados_envio = "id_uninstall="+id_uni+"&folder="+folder+"&action="+action+"&app_directory="+app_directory;
	 
	 saveAll(id,"uninstall","",dados_envio);
}


