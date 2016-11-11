 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

function callWindowBackup(id){
     pesquisar(id,'backup','.form_backup','.local_grid');
}

function makeBackup(button){

	 id = $(button).closest('div.program').attr('id');
	 
	 str = $("#app_directory").val()
     path = str.substring(0, str.lastIndexOf("#"));
     path = path+"#backup";	
     files = $("#app_directory").val();
	 id_user = $('#user_system_id').val();
		  
          
			 $.ajax({
					type      : 'post',
		 
					url       :'system/controller/wzipController.php',
		 
					data:   'path='+path+"&action=backup&files="+files+"&id_user="+id_user,
		 
					dataType  : 'JSON',
		 
						success : function(retorno){
							 
							
							  if(retorno.is_erro == "true"){
							      callWindowMessage("","error","Error",retorno.msg);
							  }
							  else{
								  callWindowMessage("","sucess","Sucess",retorno.msg);
							  }
						  
						},
						error: function(HttpRequest, textStatus, errorThrown){
						  
						    callWindowMessage("","error",UcFirst(textStatus),errorThrown);
						 
						}
						
				});


}




