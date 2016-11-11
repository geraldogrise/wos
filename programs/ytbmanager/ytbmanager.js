
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */


function callWindowYtbManager(id,pathYtb){
 
  
	
	  
			
			$('#'+id).resizable({
				containment: "#wrapper",
				stop: function( event, ui ) {
					content = $('#'+id).width()-340;
					$('#'+id).find('iframe').css('width',content);
					$('#'+id).find('iframe').css('height',$('#'+id).height()-100);
					$('#'+id).find('.window_aside').height($('#'+id).height()-80);
				}					
			});
	
	allowDragPopup($("#"+id).find('.ytbInsert'));
	
   if(pathYtb!=""){
      
	   openYtbManager(id,pathYtb);
   }   
  
   setScroll(id,"light-2", $('#'+id).find(".featured_tabs"));
  
				
   

}





function resizeYtbManager(button){
   
   id = $(button).closest('.program').attr('id');
     
   
    if($("#"+id).hasClass('maxWindow')){
	    
		 
		  $('#'+id).find('iframe').css('width',$('#'+id).width()-340);
	      $('#'+id).find('iframe').css('height',$('#desktop').height()-113);
		  $('#'+id).find('.featured_tabs').css('height',$('#desktop').height()-103);


	
	}else{
	   
		 $('#'+id).find('iframe').css('width','460');
		 $('#'+id).find('iframe').css('height','380');
		 $('#'+id).find('.featured_tabs').css('height','346px');
	  
	  
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
		$('#'+id).css('padding','0');
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
 function setYoutubeVideo(elemento){
         id = $(elemento).closest('.program').attr('id');
		 $('#'+id).find('li.vid_selected').removeClass('vid_selected');
		 $(elemento).closest('li').addClass('vid_selected');
		 youtubeId =  $(elemento).attr('youtubeId');
		 $('#'+id).find('.featured_content').find('iframe').attr('src','https://www.youtube.com/embed/'+youtubeId);
		
   
   };
   
function insertNewYoutubeVideo(elemento){
           id = $(elemento).closest('div.program').attr('id');
		   if(validateInputs(id)){
				   var iframe = $('#'+id).find('iframe');
				   youtube_url = iframe.contents().find('.youtube_url').val();
				   $('#'+id).find('.is_new').val('S');
				  
				   youtube_id = youtube_url.substring(youtube_url.lastIndexOf('=')+1);
				   youtube_description = $('#'+id).find('.youtube_description').val();
					if($('#'+id).find('.featured_tabs').find('li').size()> 0 ){ 
					   $('#'+id).find('.featured_tabs').find('li').last().after(
							 '<li>'+
								  '<a href="#" onclick="setYoutubeVideo(this)" youtubeId="'+youtube_id+'">'+
								  '<img src="http://img.youtube.com/vi/'+youtube_id+'/default.jpg"  style="width:80px;" alt="" />'+
								  '<span>'+youtube_description+'</span>'+
								  '</a>'+
							'</li>'
						);
					}
					else{
					   $('#'+id).find('.featured_tabs').html(
							 '<li>'+
								  '<a href="#" onclick="setYoutubeVideo(this)" youtubeId="'+youtube_id+'">'+
								  '<img src="http://img.youtube.com/vi/'+youtube_id+'/default.jpg"  style="width:80px;" alt="" />'+
								  '<span>'+youtube_description+'</span>'+
								  '</a>'+
							'</li>'
						);
					}
					
					
					$('#'+id).find('.youtube_info').val(info);
					$(elemento).closest('div.ytbInsert').hide();
					$('#'+id).find('.youtube_description').val('');
					$('#'+id).find('.youtube_url').val('');
			}
			

}

function openYtbManager(id_ytb,pathYtb){
  


  pathYtb=pathYtb.replace(/\#/g, "\\");
  $.ajax({
            type      : 'post',
 
            url       :'system/controller/ytbController.php',
 
            data:   'path='+pathYtb+"&action=readYtd",
 
            dataType  : 'JSON',
 
                success : function(retorno){
                     
					
				      if(retorno.is_erro == "true"){
					     callWindowMessage("","error","Error",retorno.msg);
					  }
					  else{
                           		
                        $('#'+id_ytb).find(".featured_tabs").html('');
					    
						$('#'+id_ytb).find(".featured_tabs").html(retorno.content);
						youtube_id = $('#'+id_ytb).find(".featured_tabs li").first().find('a').click(); 
						
					  }
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				  callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
                }
				
        });
   
}
function openYtbManager_O(button,id_ytb){

  id = $(button).closest('.program').attr('id');

  $.ajax({
            type      : 'post',
 
            url       :'system/controller/ytbController.php',
 
            data:   'path='+$("#"+id).find('.file_a').val()+"&action=readYtd",
 
            dataType  : 'JSON',
 
                success : function(retorno){
                     
					 
				      if(retorno.is_erro == "true"){
					    callWindowMessage("","error","Error",retorno.msg);
					  }
					  else{
                           		         
					    	
                         $('#'+id_ytb).find(".featured_tabs").html('');
					     $('#'+id_ytb).find(".featured_tabs").html(retorno.content);
						 closeWExplore(id,"only_close");  	
						 youtube_id = $('#'+id_ytb).find(".featured_tabs li").first().find('a').click(); 
						
						 
					  }
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				  callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
                }
				
        });
   
}
function saveYtbManager(button,id_program){
   
	id = $(button).closest('.program').attr('id');
    name = $("#"+id).find('.file_a').val();
	local = $('#'+id).find('.search_explore').val(); 
	info = "";
	separator = "";
	
	   $('#'+id_program).find(".featured_tabs li").each(function(){
	       
		   youtubeid = $(this).find('a').attr('youtubeid');
		   description = $(this).find('a').find('span').html();
	       info_parc = youtubeid +"@"+description;
		   info+=separator+ info_parc;
		   separator ="#";
	   });
	
	
	
	path= local+"\\"+name;
	path = path.replace(/\\/g, "\#")
	
	var regex = /<br\s*[\/]?>/gi;
	
   
	 $.ajax({
            type      : 'post',
 
            url       :'system/controller/ytbController.php',
 
            data:   'path='+path+"&action=writeYtd&content="+info,
 
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

function removeVideo(button){
   id = $(button).closest('.program').attr('id');
   $('#'+id).find('.vid_selected').remove();
    $('#'+id).find('.featured_content').find('iframe').attr('src','');
}




	
	 

