
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
function callWindowStickies(id,pathStickies,parameters){
    if(parameters !=""){
	   var note = parameters.split("#");
	   $('#'+id).find('.id_note').val(note[0]);
       $('#'+id).find('textarea').val(note[1]);
	   index = note[2];
	   $('#'+id).css('left',120+(index*10));
	   $('#'+id).css('top',30+(index*5));
	}
}


function callAllWindowStickies(controller){
id_user = $('#user_system_id').val();
id_group = $('#group_system_id').val();

var dados = "id_user="+id_user+"&id_group="+id_group+"&action=getall";
	
 $.ajax({
            type      : 'post',
 
            url       :'system/controller/'+controller+'Controller.php',
 
            data      : dados,
 
            dataType  : 'json',
 
                success : function(retorno){
                     var notes = retorno.notes.split("|");
					 for (index = 0; index < notes.length; index++) {
						 var n =  notes[index]+"#"+index;
						 callWindowWithParameter(this,'stickies','callWindowStickies','',n);
					 }
					
					
					  
				},
				error: function(XMLHttpRequest, textStatus, errorThrown){
                   callWindowMessage("","error",UcFirst(textStatus),errorThrown);
                }
				
        });
}


function saveNote(textarea){
  id = $(textarea).closest('div.program').attr('id');
  id_user = $('#user_system_id').val();
  id_group = $('#group_system_id').val();
  $('#'+id).find('.id_user_note').val(id_user);
  $('#'+id).find('.id_group_note').val(id_group);
  prev_note = $('#'+id).find('.prev_note').val();
 
  if($(textarea).val() !=""){
     if($(textarea).val() != prev_note){
        salvar(textarea,'.form_note','notes');
	 }
	 $('#'+id).find('.prev_note').val($(textarea).val());  
   } 
 
  
}











	 