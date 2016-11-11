 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */



function callWindowTimezone(id,pathProgram,parameters){
 
  
   addZindex(id);
   getScreen(id,"timezone",".select_timezone","getlisttimezone",parameters,'');
  
 
	
}
function saveTimezone(button){

  id = $(button).closest('div.program').attr('id');
  timezone = $('#'+id).find('.select_timezone').val()
  id_user = $('#user_system_id').val();
  id_group = $('#group_system_id').val();
  dados_envio = "time_zone="+timezone+"&id_user="+id_user+"&id_group="+id_group+"&action=save";
  saveSetting("settings","",dados_envio);


}


 





