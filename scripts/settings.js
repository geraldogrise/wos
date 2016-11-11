 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
function saveSetting(controller,call_function,dados_envio){

    var dados =dados_envio;
	
	
	
    $.ajax({
            type      : 'post',
 
            url       :'system/controller/'+controller+'Controller.php',
 
            data      : dados,
 
            dataType  : 'json',
 
                success : function(retorno){
					  if(retorno.is_erro+"" == "false"){
							 callWindowMessage("","sucess","Sucess",retorno.msg);
						 
					  }
					  else{
						  
						  callWindowMessage("","error","Error",retorno.msg);
					  }
				},
				error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
			    }
				
        });


}

