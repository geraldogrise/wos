 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */



function callWindowAddgroup(id,pathProgram,parameters){
 
  
   addZindex(id);
   getScreen(id,"group",".div_content","get",parameters,'');
  
}
function saveGroup(button){
  id = $(button).closest('div.program').attr('id');
  if(validateInputs(id)){
    salvar(button,'.form_group','group')
 
  }

}





