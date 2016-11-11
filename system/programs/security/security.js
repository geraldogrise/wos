 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */





function callSecurity(id,pathProgram,parameters){
 

 //   getProgramUninstallInformation(id,"",parameters);
	
}

function getSecurityInfo(id,local,id_program){
	
	 
	
	/*dados = "action=getinfo&id_program="+id_program;
	$.ajax({
            type      : 'post',
 
            url       :'system/controller/uninstallController.php',
 
            data      : dados,
 
            dataType  : 'json',
 
                success : function(json){
                  
				  
				  settingUninstall(id,json);
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				
				 
                }
				
        });*/
	
	
}
function saveSecuritySettings(button){
	id = $(button).closest('.program').attr('id');
	var dados_envio  =$('#'+id).find('.form_security').serialize()+"&action=save";
	
	if(validateInputs(id)){
	   saveSetting("general","",dados_envio);
	}
}



 