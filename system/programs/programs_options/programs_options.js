 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
function callWindowPrograms_options(id,pathProgram,parameters){

   
   addZindex(id);
   getScreenOptions(id,"programs_options",".div_content","get",parameters,'setMultiple("'+id+'")');
  
 
	
}


 function saveProgramAssociation(button){
   id = $(button).closest('div.program').attr('id');
   setGroups_programs_options(id);
   setGrpUsers_programs_options(id);
   loadInfoUserAssoc(id);
   salvar(button,'.form_program','programs_options');
 
 }
 function loadInfoUserAssoc(id){
 
   id_user = $('#user_system_id').val();
   id_group = $('#group_system_id').val();
   $('#'+id ).find('.id_user_assoc').val(id_user);
   $('#'+id ).find('.id_group_assoc').val(id_group);
 }
 
 
 
 function setGroups_programs_options(id){
   var id_lista = $('#'+id).find('.multipleSelect[name="id_groups_users"]');
   var id_anterior =$('#'+id).find('.permission_previous');
   var group_add =$('#'+id).find('.group_add');
   var group_remove =$('#'+id).find('.group_remove');
   getElementByRemove(id_lista,id_anterior, group_remove);
   getElementByAdd(id_lista,id_anterior,group_add);
	 
	 
 }
  function setGrpUsers_programs_options(id){
   var id_lista = $('#'+id).find('.multipleSelect[name="id_users"]');
   var id_anterior =$('#'+id).find('.user_permission_previous');
   var group_add =$('#'+id).find('.group_add_user');
   var group_remove =$('#'+id).find('.group_remove_user');
   
   getElementByRemove(id_lista,id_anterior, group_remove);
   getElementByAdd(id_lista,id_anterior,group_add);
	  
  }
  
function getScreenOptions(id,controller,local,action,vlr,function_callback){

   id_user = $('#user_system_id').val();
   id_group = $('#group_system_id').val();
   $("#"+id).find(local).html("");
   var dados = "action="+action+"&name_program="+vlr+"&id_user="+id_user+"&id_group="+id_group;
	
	
    $.ajax({
            type      : 'post',
 
            url       :'system/controller/'+controller+'Controller.php',
 
            data      : dados,
 
            dataType  : 'html',
 
                success : function(html){
                     
					
					   $("#"+id).find(local).html(html).show();
					     eval(function_callback);
				},
				error: function(XMLHttpRequest, textStatus, errorThrown){
                    callWindowMessage("","error",UcFirst(textStatus),errorThrown);
                }
				
        });


}





