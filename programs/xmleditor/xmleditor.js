
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
var id_program = "";
var contXmlEditor = 0;




function callWindowXmlEditor(id,pathXml){
 
   
	$( '#'+id ).resizable({
					containment: "#wrapper",
					
					distance: 1,
					start: function( event, ui ) { },
					stop: function( event, ui ) { 
					   var editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
					
					     editor.setSize("99%", $( '#'+id).height()-80);
					},
	});
	var nome_textarea ="txt_area"+id;
	$( '#'+id).find('textarea').attr('id',nome_textarea);
	var editor = CodeMirror.fromTextArea( document.getElementById(nome_textarea), {
        mode: "xml",
        lineNumbers: true,
		extraKeys: {"Ctrl-Q": function(cm){ cm.foldCode(cm.getCursor()); }},
        foldGutter: true,
       	gutters: ["CodeMirror-linenumbers", "breakpoints", "CodeMirror-foldgutter"],
		
        
        //hintOptions: {schemaInfo: tags}
      });
	
	editor.setSize("99%", 325);
	editor.on("gutterClick", function(cm, n) {
		  var info = cm.lineInfo(n);
		  cm.setGutterMarker(n, "breakpoints", info.gutterMarkers ? null : makeMarker());
	});
	
	
	
   if(pathXml!=""){
       openXmlPath(id,pathXml);
   }
  
 
  
   

}




function resizeXmlEditor(button){
   
   id = $(button).closest('.program').attr('id');
   
    if($("#"+id).hasClass('maxWindow')){
	   
              $("#"+id).css('padding','0');
			
			
			  
			
	
	}else{
	           $("#"+id).find('.container_text').height('321px');
			  
			 
			 
			    
			  
	}
	
}

function resizeWindowXmlEditor(button,callBackfunction){
    id = $(button).closest('.program').attr('id');
	
	 var editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
	if($('#'+id).hasClass('maxWindow')){
	  
	  $('#'+id).find('.content').width("68.6%");
	    
		$('#'+id).removeClass('maxWindow');
		
		$('#'+id).animate({width: "640px",height: "400px"}).promise().done(function ()
		{
			 editor.setSize("99%", 315);
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
			
		
			
            
			 editor.setSize("99%", $('#desktop').height()-80);
			 
			 eval(callBackfunction);
			
		});
		
	
	}
	
	
	
	
   
}


function openXmlPath(id_xmleditor,pathXml){
  
 

  pathXml=pathXml.replace(/\#/g, "\\");
  $.ajax({
            type      : 'post',
 
            url       :'system/controller/ioController.php',
 
            data:   'path='+pathXml+"&action=readFile",
 
            dataType  : 'JSON',
 
                success : function(retorno){
                     
					 
				      if(retorno.is_erro == "true"){
					     callWindowMessage("","error","Error",retorno.msg);
					  }
					  else{
                           		         
						  editor =  $('#'+id_xmleditor).find('.CodeMirror')[0].CodeMirror;
						  editor.doc.setValue(retorno.content);
						
						
					  }
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
                }
				
        });
   
}


function openXml_O(button,id_program){

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
                           		         
						 editor =  $('#'+id_program).find('.CodeMirror')[0].CodeMirror;
						 editor.doc.setValue(retorno.content);	 
						 closeWExplore(id,"only_close"); 
					  }
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
                }
				
        });
   
}

function saveXml(button,id_program){
   
	id = $(button).closest('.program').attr('id');
    name = $("#"+id).find('.file_a').val();
	local = $('#'+id).find('.search_explore').val(); 
	
	path= local+"\\"+name;
	editor = $('#'+id_program).find('.CodeMirror')[0].CodeMirror;

	content = editor.doc.getValue();
	var regex = /<br\s*[\/]?>/gi;
	content =content.replace(regex, "\r\n");
   
	 $.ajax({
            type      : 'post',
 
            url       :'system/controller/ioController.php',
 
            data:   'path='+path+"&action=writeFile&content="+content.replace(/&nbsp;/gi,' '),
 
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






	 