 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */


function callWindowAdduser(id,pathProgram,parameters){
 
  
   addZindex(id);
   getScreen(id,"user",".div_content","get",parameters,'setMultiple("'+id+'")');
   $('#'+id).find('.id_p').val(id);
 
	
}
 function saveUser(button){
   id = $(button).closest('div.program').attr('id');
   var id_lista = $('#'+id).find('.multipleSelect');
   var id_anterior =$('#'+id).find('.permission_previous');
   var group_add =$('#'+id).find('.group_add');
   var group_remove =$('#'+id).find('.group_remove');
   getElementByRemove(id_lista,id_anterior, group_remove);
   getElementByAdd(id_lista,id_anterior,group_add);
   if(validateInputs(id)){
     salvar(button,'.form_user','user');
   }
 
 }





