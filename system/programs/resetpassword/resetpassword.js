 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */



function callWindowResetpassword(id,pathProgram,parameters){
 
 
   addZindex(id);
   getScreen(id,"user",".div_content","getReset",parameters,'');
   $('#'+id).find('.id_p').val(id);
	
}
function buildPassword(button){
  id = $(button).closest('div.program').attr('id');
  $('#'+id).find('.action_send').val("buildpassword");
  if(validateInputs(id)){
    salvar(button,'.form_user','user');
  }
  $('#'+id).find('.action_send').val("resetpassword");
  
}
function saveReset(button){
   id = $(button).closest('div.program').attr('id');
   if(validateInputs(id)){
    salvar(button,'.form_user','user');
  }


}












