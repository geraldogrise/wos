 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
var id_program = "";
var contZip = 0;






function callWindowWindow_extract(id,pathZip,parameters){

    
    if(current_explore_window == "desktop"){
	    $('#'+id).find('.zip_path').val($('#current_desktop').val().replace(/\#/g, "/"));
	
	}
	else{
	
	  local = $('#'+current_explore_window).find('.current_folder').val(); 
	   $('#'+id).find('.zip_path').val(local.replace(/\#/g, "/").replace(/\\/g, "/"));
	    
	}
   
	$('#'+id).find('.file_zip').val(parameters);
}







function extractAllZipFiles(button){
   
   
        idzip = $(button).closest('div.program').attr('id');
		if(validateInputs(idzip)){  
		  id_folder = current_explore_window;
		  files = "";
		  
		  
		  path = $("#"+idzip ).find('.zip_path').val();	
		  files = $('#'+idzip).find('.file_zip').val();
		  path= path.replace(/\\/g, "\#");
           
		 
		 
	        
	   $.ajax({
				type      : 'post',
	 
				url       :'system/controller/wzipController.php',
	 
				data:   'path='+path+"&action=extractAll&zipfile="+files,
				
	 
				dataType  : 'JSON',
	 
					success : function(retorno){
						 
						 
						  if(retorno.is_erro == "true"){
						      callWindowMessage("","error","Error",retorno.msg);
						  }
						  else{
							
							    fileCopy="";
								if(current_explore_window == "desktop"){
								  getContentDesktop("desktop",$('#current_desktop').val(),"normal",2,"icon-small");
								}else{
								  $('#'+current_explore_window).find('.reload').click();
								}
								closeWindow(button);
								
								
						}
					  
					},
					error: function(HttpRequest, textStatus, errorThrown){
					  
					     callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
					}
					
			});
		}
   
   

}









	 