
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
var intervaloBuscaMsg;
function callWindowWtalk(id,pathCss){
 
 
allowDragWtalk(id)
	
   

}
function closeWtalk(id,pathCss){
 

    
	$('#wtalk_0').hide();
	document.getElementById("iframe_wtalk").contentWindow.clearMsgInterval();
   

}
function clearMsgInterval(){
   clearInterval(intervaloBuscaMsg);
}

function allowDragWtalk(id){
  

      $('#'+id).draggable({ 
		 handle: $('#'+id).find('.window_top'), 
		  containment: ".workarea", 
		  scroll: false ,
		  cursor: "crosshair", 
		  cursorAt: { top: -20, left: -20 }
		
	});
}
function findTalks(id,controller,user,local){
 
   $("#"+id).find(local).html("");
    var dados = "action=search&id_user="+user;
	
    $.ajax({
            type      : 'post',
 
            url       :'../../../system/controller/'+controller+'Controller.php',
 
            data      : dados,
 
            dataType  : 'html',
 
                success : function(html){
                       $("#"+id).find(local).html(html).show();
					     
							
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				        callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		         }		
				
        });


}
function getTalks(id,controller,user,local){
    clearInterval(intervaloBuscaMsg);
   $("#"+id).find(local).html("");
    var dados = "action=get&id_user="+user;
	
    $.ajax({
            type      : 'post',
 
            url       :'../../../system/controller/'+controller+'Controller.php',
 
            data      : dados,
 
            dataType  : 'html',
 
                success : function(html){
                       $("#"+id).find(local).html(html).show();
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				        callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		          }		
				
        });


}


function getContact(id,controller,user){

   
    var dados = "action=getcontact&id_user="+user;
	
    $.ajax({
            type      : 'post',
 
            url       :'../../../system/controller/'+controller+'Controller.php',
 
            data      : dados,
 
            dataType  : 'json',
 
                success : function(retorno){
                   
					 $('#'+id).find('.contact_name').html(retorno.name);  
                     $('#'+id).find('.contact_name_input').val(retorno.name);
                     $('#'+id).find('.image_contact').attr('src',retorno.image);
                     $('#'+id).find('.id_contact_main').val(retorno.id_contact);	
                     $('#'+id).find('.id_user_contact').val(retorno.id_user);					 
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				        callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		          }		
				
        });


}
function getMsgs(li){
   
	
	id_contact_sender = $(li).attr('id_contact_sender');
	id_contact_receiver = $(li).attr('id_contact_receiver');
    var dados = "action=getmsgs&id_user="+$(li).attr('id_user')+"&id_contact_sender="+id_contact_sender+"&id_contact="+$('#id_contact_main').val();
	dados += "&id_contact_receiver="+id_contact_receiver;
    $.ajax({
            type      : 'post',
 
            url       :'../../../system/controller/messageController.php',
 
            data      : dados,
 
            dataType  : 'html',
 
                success : function(html){
                     	$('#hangout').find('.chaton').html(html);
						
						if($('#hangout').find('.list-chat.shown').size() ==0){
							setTimeout(function() {
									$('.shown').removeClass('shown');
									$('.list-chat').addClass('shown');
									setRoute('.list-chat');
									$('.chat-input').focus();
								}, 300);
						}
						
						intervaloBuscaMsg =	setInterval(function(){
                               getLastSender(id_contact_sender,id_contact_receiver);
							}, 3000);
							
							
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				        callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		          }		
				
        });

}

function deleteContact(li,TARGET){

 var dados = "action=delete&codigo="+$(li).attr('id_contact_list');
 user = $('#id_user_contact').val();
	
    $.ajax({
            type      : 'post',
 
            url       :'../../../system/controller/contact_listController.php',
 
            data      : dados,
 
            dataType  : 'html',
 
                success : function(html){
                     	 TARGET.remove();	
						 findTalks("hangout","contact_list",user,".contactList");
	                     findTalks("hangout","contact",user,".contactAll");
										
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				        callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		          }		
				
        });

}
function updateContactList($TARGET){

 var dados = "action=edit&codigo="+$('#contactId').val()+"&name="+$('#new-user').val();
	
    $.ajax({
            type      : 'post',
 
            url       :'../../../system/controller/contact_listController.php',
 
            data      : dados,
 
            dataType  : 'html',
 
                success : function(html){
                     	
						$TARGET.find('.name').text($('#new-user').val());
					    closeModal();					
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				        callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		          }		
				
        });

}

function insertContactList(li){

 var dados = "action=insert&id_contact="+$(li).attr('id_contact')+"&id_user="+$('#id_user_contact').val()+"&name="+$(li).attr('username');
  dados += "&id_contact_sender="+$('#id_contact_main').val();
	user = $('#id_user_contact').val();
    $.ajax({
            type      : 'post',
 
            url       :'../../../system/controller/contact_listController.php',
 
            data      : dados,
 
            dataType  : 'html',
 
                success : function(html){
                     	 findTalks("hangout","contact_list",user,".contactList");
	                     findTalks("hangout","contact",user,".contactAll");
						  findTalks("hangout","message",user,".chatAll");
										
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				        callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		          }		
				
        });

}

function sendMessage(btSend){
   id_contact  =$('#id_contact_main').val();
   last_contact_sender =$('#last_contact_sender').val();
   if(id_contact == last_contact_sender){
      updateMsg(btSend);
   }else{
     sendMsg(btSend);
   }
}

function sendMsg(btSend){

        var chatmessage = '<p>' + $('.chat-input').val() + '</p>';
		id_contact = $(btSend).attr('id_contact');
		id_user = $(btSend).attr('id_user');
		id_contact_receiver = $(btSend).attr('id_contact_receiver');
       
		
	var dados = "action=insert&id_contact_sender="+id_contact+"&id_user="+id_user;
	dados += "&id_contact_receiver="+id_contact_receiver+"&text="+$('.chat-input').val();
	
    $.ajax({
            type      : 'post',
 
            url       :'../../../system/controller/messageController.php',
 
            data      : dados,
 
            dataType  : 'html',
 
                success : function(html){
                     	  $('ul.chat > li > .current').append(chatmessage);
						  $('ul.chat > li > .current').closest('li').show();
						  $('.chat-input').val('');
										
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				        callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		          }		
				
        });
		

} 
function updateMsg(btSend){

        var chatmessage = '<p>' + $('.chat-input').val() + '</p>';
		var dados = "action=edit&id_message="+$('#id_message_m').val()+"&text="+$('.chat-input').val();
	
	
    $.ajax({
            type      : 'post',
 
            url       :'../../../system/controller/messageController.php',
 
            data      : dados,
 
            dataType  : 'html',
 
                success : function(html){
                     	  $('ul.chat > li > .current').append(chatmessage);
						  $('ul.chat > li > .current').closest('li').show();
						  $('.chat-input').val('');
										
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				        callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		          }		
				
        });
		

}

function getLastSender(id_contact_sender,id_contact_receiver){
   
   
    var dados = "action=getlastsender&id_contact_sender="+id_contact_sender;
	dados += "&id_contact_receiver="+id_contact_receiver;
    $.ajax({
            type      : 'post',
 
            url       :'../../../system/controller/messageController.php',
 
            data      : dados,
 
            dataType  : 'json',
 
                success : function(json){
                     			last = Number($('#last_contact_sender').val());
								if(last !=  Number(json.id_contact)){
								   getMsgsByInterval(id_contact_sender,id_contact_receiver);
								}			
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				        callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		          }		
				
        });

}

function getMsgsByInterval(id_contact_sender,id_contact_receiver){
   
    var dados = "action=getchatmsg&id_user="+$('#id_user_contact').val()+"&id_contact_sender="+id_contact_sender+"&id_contact="+$('#id_contact_main').val();
	dados += "&id_contact_receiver="+id_contact_receiver;
    $.ajax({
            type      : 'post',
 
            url       :'../../../system/controller/messageController.php',
 
            data      : dados,
 
            dataType  : 'html',
 
                success : function(html){
                     	$('#hangout').find('.chat_o').html(html);
						
					
							
							
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				        callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		          }		
				
        });

}










	 