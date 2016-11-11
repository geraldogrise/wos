 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
//callWindowMessage("","sucess","Alterado","Alterado com Sucesso")
function callWindowMessage(button,type,title,message){
 
  var parameters = type +","+title+","+message;
  callWindowWithParameter(button,'msg','callWindowMsg','',parameters);

}


function callWindowMsg(id,pathProgram,parameters){
   addZindex(id);
   params = parameters.split(","); 
   type = params[0];
   title = params[1];
   message = params[2];
   if(type == "sucess"){
       $('#'+id).find('.container_msg').find('img').attr('src',"system/programs/msg/images/msg_ok.png");  
   }else if(type == "error"){
       $('#'+id).find('.container_msg').find('img').attr('src',"system/programs/msg/images/msg_error.png"); 
   
   }else if(type == "warning"){
       $('#'+id).find('.container_msg').find('img').attr('src',"system/programs/msg/images/msg_warning.png"); 
   
   }else if(type == "info"){
      $('#'+id).find('.container_msg').find('img').attr('src',"system/programs/msg/images/msg_info.png"); 
   }
    $('#'+id).find('.msg_content').html(message);
	$('#'+id).find('.title_msg').html(title);
}


 




