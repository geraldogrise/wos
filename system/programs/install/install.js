
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */



function callWindowInstall(id){
 
  
  // addZindex(id);
	 
 
	
}

function callWindowInstall(id,pathProgram,parameters){
 

    getProgramStoreInformation(id,"",parameters);
	
}

function getProgramStoreInformation(id,local,id_program){
	
	 
	
	dados = "action=getinfo&id_program="+id_program;
	$.ajax({
            type      : 'post',
             crossDomain: true,
            url       :'http://www.grisecorp.com/wos_programsController.php',
 
            data      : dados,
 
            dataType  : 'json',
 
                success : function(json){
                   settingInstall(id,json);
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				   callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
                }
				
        });
	
	
}

function  settingInstall(id,json){
    $('#'+id).find('.title_program').html(json.name);
	$('#'+id).find('.prog_image').attr('src',json.pathImg.replace(/\#/g, "/"));
	$('#'+id).find('.btn_back').hide();
	
	$('#'+id).find('.name_install').val(json.name);
	$('#'+id).find('.pathimg_install').val(json.pathImg);
	$('#'+id).find('.pathzip_install').val(json.pathZip);
	$('#'+id).find('.description_install').val(json.description);
	$('#'+id).find('.paththumb_install').val(json.pathThumb);
	$('#'+id).find('.type_install').val(json.type);
	$('#'+id).find('.opentype_install').val(json.opentype);
	$('#'+id).find('.gip_install').val(json.gip);
	$('#'+id).find('.class_program_install').val(json.class_program);
	
	
	
 
}

function  nextStepInstall(button){
   id = $(button).closest('div.program').attr('id');
   step = $('#'+id).find('.step_install').val();
  step = Number(step);
 
   switch(step){
       case 1:
            name_install= $('#'+id).find('.name_install').val();
		    description_install= $('#'+id).find('.description_install').val();
		    $('#'+id).find('.title_install').html(name_install);
			$('#'+id).find('.content_install').html(description_install);
			$('#'+id).find('.btn_back').show();
        break;
       case 2:
          installFiles(id);
        break;
		case 3:
		  $('#'+id).find('.btn_next').html("Finish");
          installDataBase(id);
        break;
		case 4:
          closeWindow(button);
        break;
       default:
   
   }
   step=Number(step)+1;
   $('#'+id).find('.step_install').val(step)

}


function installFiles(id){
    pathzip_install = $('#'+id).find('.pathzip_install').val();
	paththumb_install = $('#'+id).find('.paththumb_install').val();
	pathimg_install =  $('#'+id).find('.pathimg_install').val();
	type_install =  $('#'+id).find('.type_install').val();
	app_directory = $('#app_directory').val();
	action = 'installfiles';
	
	 dados_envio = "app_directory="+app_directory+"&remote_file_url="+pathzip_install+"&action="+action;
	 dados_envio += "&remote_file_url_image="+pathimg_install+"&remote_file_url_thumb="+paththumb_install+"&type_install="+type_install;
	 saveAll(id,"install","",dados_envio);
}

function  installDataBase(id){
 

 
   dados_envio= "action=install"
   
   saveInstall(id,"install","",dados_envio);
}







