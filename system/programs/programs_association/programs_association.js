
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */



function callWindowPrograms_association(id,pathProgram,parameters){

 
   addZindex(id);
   getScreen(id,"programs",".div_content","get",parameters,'setMultiple("'+id+'")');
  
 
	
}
 function saveProgramAssociation(button){
   id = $(button).closest('div.program').attr('id');
   setGroups_programs(id);
   setGrpUsers_programs(id);
   salvar(button,'.form_program','programs');
 
 }
 function setGroups_programs(id){
   var id_lista = $('#'+id).find('.multipleSelect[name="id_groups_users"]');
   var id_anterior =$('#'+id).find('.permission_previous');
   var group_add =$('#'+id).find('.group_add');
   var group_remove =$('#'+id).find('.group_remove');
   getElementByRemove(id_lista,id_anterior, group_remove);
   getElementByAdd(id_lista,id_anterior,group_add);
	 
	 
 }
  function setGrpUsers_programs(id){
   var id_lista = $('#'+id).find('.multipleSelect[name="id_users"]');
   var id_anterior =$('#'+id).find('.user_permission_previous');
   var group_add =$('#'+id).find('.group_add_user');
   var group_remove =$('#'+id).find('.group_remove_user');
   
   getElementByRemove(id_lista,id_anterior, group_remove);
   getElementByAdd(id_lista,id_anterior,group_add);
	  
  }





