 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */



function callWindowWOpen(id,pathProgram,parameters){
 
  fileCopy="";
   addZindex(id);
   getScreen(id,"wopen",".div_content","get",parameters,'');
  
	
}

function selectOpenProgram(li){

  $(li).closest('div.open_type').find('.ul_programs').find('li').each(function(){
  
     $(this).removeClass('selected');
  });
  $(li).addClass('selected');

  id = $(li).closest('div.program').attr('id');
  $('#'+id).find('.btn_ok').attr('onclick',$(li).attr('function')+"closeWindow(this);");
} 
function returnHttpPath(filePath){

	  filePath = filePath.substring(filePath.indexOf("www#")); 
	  if(filePath.indexOf("www#") != -1){
		filePath = filePath.replace("www#","").replace().replace(/\#/g, "/");
	 } 
	 else if(filePath.indexOf("htdocs#") != -1){ 
		 filePath = filePath.split("htdocs#")[1]; 
	 } 
	 return "/"+filePath;
}
function IsDefault(button){
   id = $(button).closest('div.program').attr('id');
   checkbox =  $('#'+id).find('input[type="checkbox"][name="default_program"]');
   if($(checkbox).is(":checked")){
       
     setProgramAsDefault(id);
   
   }

}
function setProgramAsDefault(id){

 
  call =  $("#"+id).find('.ul_programs').find('li.selected').attr('call');
  id_open =  $("#"+id).find('.ul_programs').find('li.selected').attr('id_open');
  id_user = $('#user_system_id').val();
  controller = "open_user";
 
  var dados = "action=save&id_user="+id_user+"&id_open="+id_open+"&callFunction="+call;
	
    $.ajax({
            type      : 'post',
 
            url       :'system/controller/'+controller+'Controller.php',
 
            data      : dados,
 
            dataType  : 'json',
 
                success : function(html){
                       //callWindowMessage("","sucess","Sucess","");
					     
							
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				        callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		         }		
				
        });

}














