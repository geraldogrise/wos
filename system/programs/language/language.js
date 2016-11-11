
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */



function callWindowLanguage(id,pathProgram,parameters){

    
   addZindex(id);
   getScreen(id,"language",".div_content","get",parameters,'setMultiple("'+id+'");loadLangSettings("'+id+'","'+parameters+'");');
   
 
	
}

 function saveLanguage(button){
   id = $(button).closest('div.program').attr('id');
   id_user = $('#user_system_id').val();
   id_group = $('#group_system_id').val();
   $('#'+id ).find('.id_user_assoc').val(id_user);
   $('#'+id ).find('.id_group_assoc').val(id_group);
   salvar(button,'.form_language','language');
   
 
 }
 
function loadLangSettings(id,parameters){

  
  $("#"+id).find('.name_program').val(parameters.split(",")[0]);
  $("#"+id).find('.class_program').val(parameters.split(",")[1]);
  
 }
 




