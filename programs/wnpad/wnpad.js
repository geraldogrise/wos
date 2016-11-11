
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
var id_program = "";
var contWnpad = 0;




function callWindowWnpad(id,pathTxt){
 
 
  
    $('#'+id).find("textarea").wysiwyg({ 
	     rmUnusedControls: true,
		 iFrameClass: "wysiwyg-input",
		 controls: {
            cut: { visible : true },
            copy: { visible : true },
			paste: { visible : true },
			undo: { visible : true },
			redo: { visible : true }
        }
		 
		 });
	$('#'+id).find("textarea").wysiwyg('clear');
	$('#'+id).find('.toolbar-wrap').hide();
	
	$( '#'+id ).resizable({
					containment: "#wrapper",
					alsoResize: '#'+id +"iframe",
					distance: 1,
					start: function( event, ui ) { $('#'+id).find('iframe').hide()},
					stop: function( event, ui ) { $('#'+id).find('iframe').show()},
	});
	
   if(pathTxt!=""){
       openTxtPath(id,pathTxt);
   }
  
  
   

}




function resizeWnpad(button){
   
   id = $(button).closest('.program').attr('id');
   
    if($("#"+id).hasClass('maxWindow')){
	   
              $("#"+id).css('padding','0');
			 $("#"+id).find('.container_text').height('90%');
		      $('#'+id).find('.wysiwyg').css('width','100%');
			 
			  $("#"+id).find('iframe').height('88.0%');
			
			  
			
	
	}else{
	           $("#"+id).find('.container_text').height('321px');
			   $('#'+id).find('.wysiwyg').css('width','99%');
			   $('#'+id).find('iframe').css('width','100%');
			
			   
			 
			    
			  
	}
	
}

function resizeWindowWnpad(button,callBackfunction){
    id = $(button).closest('.program').attr('id');
	
	if($('#'+id).hasClass('maxWindow')){
	  
	  $('#'+id).find('.content').width("68.6%");
	    
		$('#'+id).removeClass('maxWindow');
		
		$('#'+id).animate({width: "640px",height: "400px"}).promise().done(function ()
		{
			 
			 eval(callBackfunction);
		});
		$('#'+id).css('padding','0');
		$('#'+id).css('position','absolute');
		
      
	}
	else{
        $('#'+id).addClass('maxWindow');
		
		
		$('#'+id).css('padding','10px');
	    $('#'+id).animate({width: "100%",height:$('#desktop').height()-12}).promise().done(function ()
		{
			
			 eval(callBackfunction);
			
		});
		
	
	}
	
	
	
	
   
}
var program_id="";
function getProgramId(elemento){
  id = $(elemento).closest('.program').attr('id');
  program_id= id;

}

function openTxtPath(id_wnpad,pathTxt){
  
 

  pathTxt=pathTxt.replace(/\#/g, "\\");
  $.ajax({
            type      : 'post',
 
            url       :'system/controller/ioController.php',
 
            data:   'path='+pathTxt+"&action=readFile",
 
            dataType  : 'JSON',
 
                success : function(retorno){
                     
					 
				      if(retorno.is_erro == "true"){
					     callWindowMessage("","error","Error",retorno.msg);
					  }
					  else{
                           		         
						 $('#'+id_wnpad).find('textarea').val(retorno.content);
						 $('#'+id_wnpad).find('.name_file').val(pathTxt.replace(/\\/g, "\#"));
						 content = retorno.content.replace(/\r\n/g, "<br>");
						 $('#'+id_wnpad).find("textarea").wysiwyg('setContent', content);
						 
					  }
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
                }
				
        });
   
}


function openTxt_O(button,id_program){

  id = $(button).closest('.program').attr('id');
 
  $.ajax({
            type      : 'post',
 
            url       :'system/controller/ioController.php',
 
            data:   'path='+$("#"+id).find('.file_a').val()+"&action=readFile",
 
            dataType  : 'JSON',
 
                success : function(retorno){
                     
					 
				      if(retorno.is_erro == "true"){
					     callWindowMessage("","error","Error",retorno.msg);
					  }
					  else{
                           		         
						 $('#'+id_program).find('textarea').val(retorno.content);
						 content = retorno.content.replace(/\r\n/g, "<br>");
						 $('#'+id_program).find("textarea").wysiwyg('setContent', content);
						 $('#'+id_program).find('.name_file').val($("#"+id).find('.file_a').val().replace(/\\/g, "\#"));
						 closeWExplore(id,"only_close"); 
					  }
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                    callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
				 
                }
				
        });
   
}

function saveTxt(button,id_program){
   
	id = $(button).closest('.program').attr('id');
    name = $("#"+id).find('.file_a').val();
	name_file = $("#"+id_program).find('.name_file').val();
	local = $('#'+id).find('.search_explore').val(); 
	
	path= local+"\\"+name;
	content = $('#'+id_program).find("textarea").wysiwyg('getContent');
	var regex = /<br\s*[\/]?>/gi;
	content =content.replace(regex, "\r\n");
   
	 $.ajax({
            type      : 'post',
 
            url       :'system/controller/ioController.php',
 
            data:   'path='+path+"&action=writeFile&content="+content.replace(/&nbsp;/gi,' ')+"&name_file="+name_file,
 
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
function wnpad_undo(button){
  
  id = $(button).closest('.program').attr('id');
   $('#'+id).find('.undo').click();
}
function wnpad_redo(button){
  
  id = $(button).closest('.program').attr('id');
   $('#'+id).find('.redo').click();
}
function wnpad_copy(button){

  id = $(button).closest('.program').attr('id');
   
  text = $('#'+id).find("textarea").wysiwyg('getSelection');
  $('#'+id).find(".clipboard").val(text); 

}
function wnpad_cut(button){

  id = $(button).closest('.program').attr('id');
  text = $('#'+id).find("textarea").wysiwyg('getSelection');
  $('#'+id).find(".clipboard").val(text); 
  $('#'+id).find("textarea").wysiwyg('removeText');  
		
}
function wnpad_paste(button){

  id = $(button).closest('.program').attr('id');
  text = $('#'+id).find(".clipboard").val();
  
  $('#'+id).find("textarea").wysiwyg('insertText',text.toString());
}







	 