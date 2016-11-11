
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
var id_program = "";
var contWCalendar = 0;



function callWindowWCalendar(id,pathCalendar){
 	
   
			$('#'+id).resizable({
				containment: "#wrapper",
				stop: function( event, ui ) {
					
				}					
			});
	
	
	allowDragPopup($("#"+id).find('.wcalendaEvent'));
	 diretorio= $('#app_directory').val();
	 dados_envio = "action=getevents_images&diretorio="+diretorio;
     get(id,"wcalendar","ul_evtImage",dados_envio,"");
	

	getCalendarEvents(id);
	
  
  
   if(pathCalendar!=""){
      
	   openWCalendar(id,pathCalendar);
   }   
  
  
}





function resizeWCalendar(button){
   
   id = $(button).closest('.program').attr('id');
     
   
    if($("#"+id).hasClass('maxWindow')){
	    
		 
		


	
	}else{
	   
		
	  
	  
	}
	
}


function resizeWindowYtbManager(button,callBackfunction){
    id = $(button).closest('.program').attr('id');
	 
	if($('#'+id).hasClass('maxWindow')){
	  
	   
		$('#'+id).removeClass('maxWindow');
		
		$('#'+id).animate({width: "808px",height: "455px"}).promise().done(function ()
		{
			 
			 eval(callBackfunction);
		});
		
		$('#'+id).css('position','absolute');
		
      
	}
	else{
        $('#'+id).addClass('maxWindow');
		
		
		 $('#'+id).animate({width: "100%",height:$('#desktop').height()-13}).promise().done(function ()
		{
			
			 eval(callBackfunction);
			
		});
		
	
	}
	
	
	
	
   
}

   
/*-------------------------------io function -----------------------*/

function openWCalendar(id_wcalendar,pathWCalendar){
  

 
  pathWCalendar=pathWCalendar.replace(/\#/g, "\\");
  
  $.ajax({
            type      : 'post',
 
            url       :'system/controller/wcalendarController.php',
 
            data:   'path='+pathWCalendar+"&action=readCalendar",
 
            dataType  : 'JSON',
 
                success : function(retorno){
                     
					
				      if(retorno.is_erro == "true"){
					     callWindowMessage("","error","Error",retorno.msg);
					  }
					  else{
                           		  var events = [];
								var itens =  retorno.events.split(",");
								var item="";
								i=0;
								while(i< itens.length){
								    
									events.push({
										title: itens[i].split("@")[0].replace(/\#/g, "/"),
										start:itens[i].split("@")[1] // will be parsed
									});
								    
									 i++;
								}
								setWCalendar(id_wcalendar,events);
								

					  }
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				   callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
                }
				
        });
   
}
function openWCalendar_O(button,id_wcalendar){

  id = $(button).closest('.program').attr('id');
  
  $.ajax({
            type      : 'post',
 
            url       :'system/controller/wcalendarController.php',
 
            data:   'path='+$("#"+id).find('.file_a').val()+"&action=readCalendar",
 
            dataType  : 'JSON',
 
                success : function(retorno){
                     
					 
				      if(retorno.is_erro == "true"){
					     callWindowMessage("","error","Error",retorno.msg);
					  }
					  else{
                           		         
					            var events = [];
								var itens =  retorno.events.split(",");
								var item="";
								i=0;
								while(i< itens.length){
								    
									events.push({
										title: itens[i].split("@")[0].replace(/\#/g, "/"),
										start:itens[i].split("@")[1] // will be parsed
									});
								    
									 i++;
								}
								setWCalendar(id_wcalendar,events);
						         closeWExplore(id,"only_close"); 
						 
						 
					  }
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				   callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
                }
				
        });
   
}
function saveWCalendar(button,id_program){
   
	id = $(button).closest('.program').attr('id');
    name = $("#"+id).find('.file_a').val();
	local = $('#'+id).find('.search_explore').val(); 
	info = "";
	separator = "";
	
	info =  $('#'+id_program).find('.events').val();
	
	
	
	path= local+"\\"+name;
	
	
	
	
   
	 $.ajax({
            type      : 'post',
 
            url       :'system/controller/wcalendarController.php',
 
            data:   'path='+path+"&action=writeCalendar&info="+info+"&name="+name,
 
            dataType  : 'JSON',
 
                success : function(retorno){
                     
					 
				      if(retorno.is_erro == "true"){
					     
						   callWindowMessage("","error","Error",retorno.msg);
					  }
					  else{
                           	          
						  closeWExplore(id,"close_and_safe"); 
						
					  }
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				   callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
                }
				
        });
}




/*-------------------------------set calendar -----------------------*/
function draggableEvents(id_wcalendar){
     $('#'+id_wcalendar).find('.external-events div.external-event').each(function() {
		
			// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
			// it doesn't need to have a start or end
			var eventObject = {
				title: $(this).html() // use the element's text as the event title
			};
			
			// store the Event Object in the DOM element so we can get to it later
			$(this).data('eventObject', eventObject);
			
			// make the event draggable using jQuery UI
			$(this).draggable({
				zIndex: 5999,
				revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});
			
		});
}

function setWCalendar(id_wcalendar,events){
 separator ="";
      /*if(events.length > 0){
	     $('#'+id_wcalendar).find('.calendar').fullCalendar( 'destroy' );
	  }*/
	    $('#'+id_wcalendar).find('.calendar').fullCalendar( 'destroy' );
      $('#'+id_wcalendar).find('.calendar').fullCalendar({
			 events:events,
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			 eventAfterRender:function( event, element, view ) { 
				    $(element).attr("id_ci","event_id_"+event._id);
			},
			
			editable: true,
			droppable: true, // this allows things to be dropped onto the calendar !!!
			drop: function(date, allDay) { // this function is called when something is dropped
			
				// retrieve the dropped element's stored Event Object
				var originalEventObject = $(this).data('eventObject');
				
				// we need to copy it, so that multiple events don't have a reference to the same object
				var copiedEventObject = $.extend({}, originalEventObject);
				
				// assign it the date that was reported
				copiedEventObject.start = date;
				copiedEventObject.allDay = allDay;
				
				data = $.fullCalendar.formatDate( date, "yyyy-MM-dd")
				
				
				// render the event on the calendar
				// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
				$('#'+id_wcalendar).find('.calendar').fullCalendar('renderEvent', copiedEventObject, true);
			   
				title = copiedEventObject.title;
				
				
				
				if($('#'+id_wcalendar).find('.events').val() !=""){
				   separator=","
				   valor += separator+ getId_event(title) +"#"+data;
                   $('#'+id_wcalendar).find('.events').val(valor)				   
				}
                else{
				   valor = getId_event(title)+"#"+data;
                   $('#'+id_wcalendar).find('.events').val(valor)	
				
				
				}				
				
				
			}
		});
		
		
	

}


/*-------------------------------events functions -----------------------*/
function getId_event(title){
	 title = title.substring(title.indexOf("event="));
	 title = title.substring(0,title.indexOf(">"));
	 title = title.substring(title.indexOf("=")+2,title.length-1);
	 return title;
}

function insertEvent(button){
   id_wcalendar = $(button).closest('div.program').attr('id');
   image = $('#'+id_wcalendar).find('.imageEvent').val();
   name =  $('#'+id_wcalendar).find('.nameEvent').val();
 
  $.ajax({
            type      : 'post',
 
            url       :'system/controller/wcalendarController.php',
 
            data:   'image='+image+"&action=insertEvent"+"&name="+name,
 
            dataType  : 'JSON',
 
                success : function(retorno){
                     
					
				      if(retorno.is_erro == "true"){
					     callWindowMessage("","error","Error",retorno.msg);
					  }
					  else{
                           		
                        $('#'+ id_wcalendar).find('.external-event').remove();
					    getCalendarEvents(id_wcalendar);
						//$('#'+id_wcalendar).find(".featured_tabs").html(retorno.content);
						$('#'+ id_wcalendar).find('.wcalendarEvent').hide();
						
					  }
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
                }
				
        });





}
function deleteInCalendar(button){
  if($(button).closest('div').hasClass('external-event')){
     id_event= $(button).attr('id_event');
      deleteEvent(button,id_event);
	
  }
  else{
    id_calendar_item= $(button).attr('id_calendar_item');
	deleteCalendar(button,id_calendar_item);
  }

}
function deleteEvent(button,id_event){
  
 
  $.ajax({
            type      : 'post',
 
            url       :'system/controller/wcalendarController.php',
 
            data:   "action=deleteEvent"+"&id_event="+id_event,
 
            dataType  : 'JSON',
 
                success : function(retorno){
                     
					
				      if(retorno.is_erro == "true"){
					     callWindowMessage("","error","Error",retorno.msg);
					  }
					  else{
                           		
                          $(button).closest('div.external-event').remove();
					    
						
						
					  }
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				   callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
                }
				
        });





}		
function getCalendarEvents(id_wcalendar){


	
  $.ajax({
            type      : 'post',
 
            url       :'system/controller/wcalendarController.php',
 
            data:   "action=getEvents",
 
            dataType  : 'HTML',
 
                success : function(retorno){
                     
					
					
						 if($('#'+ id_wcalendar).find('.external-event').size() >0){
						    $('#'+ id_wcalendar).find('.external-event').last().after(retorno);
						 }else{
						
						    $('#'+ id_wcalendar).find('.external-events').find('span').after(retorno);
						 }
						

 						  events =[];
						  draggableEvents(id_wcalendar);
						  setWCalendar(id_wcalendar,events);
						
					 
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				 
				   callWindowMessage("","error",UcFirst(textStatus),errorThrown);
                }
				
        });

}


/*-------------------------------calendar functions -----------------------*/

function deleteCalendar(button,id_item){
  
   id = $(button).closest('div.program').attr('id');
  $.ajax({
            type      : 'post',
 
            url       :'system/controller/wcalendarController.php',
 
            data:   "action=deleteCalendarItem"+"&id_calendar_item="+id_item,
 
            dataType  : 'JSON',
 
                success : function(retorno){
                     
					
				      if(retorno.is_erro == "true"){
					     callWindowMessage("","error","Error",retorno.msg); 
					  }
					  else{
                           		
                         id_ci =$(button).closest('div.fc-event').attr('id_ci');
						 id_ci = id_ci.replace("event_id_","");
						 $('#'+id).find('.calendar').fullCalendar('removeEvents', id_ci);
						 
						
					  }
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				   callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
                }
				
        });





}		


function selectEvtImage(elemento){
   id = $(elemento).closest('div.program').attr('id');
   $('#'+id).find('li').removeClass('selected');
   if($(elemento).closest('li').hasClass('selected')){
        $(elemento).closest('li').removeClass('selected');
   }else{
     $(elemento).closest('li').addClass('selected');
	 $('#'+id).find('.imageEvent').val($(elemento).closest('li').find('img').attr('src'));
   }
  

}


	
	 

