
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
var id_program = "";
var contWdoc = 0;




function callWindowWdoc(id,pathDoc){
 

	
 $('#'+id).find("textarea.main").sceditor({
						//plugins: 'bbcode',
						
							toolbar:"bold,italic,underline,strike,subscript,superscript |,left,center,right,,justify | ,font,size,color,removeformat,| ,bulletlist,orderedlist,indent,outdent,| ,table,code,quote,"+
							"|,horizontalrule,image,email,link,unlink,|,emoticon,date,time,|,ltr,rtl,|,print,maximize,source,teste",
						
					});
					setNewButtons('#'+id);
							
					
				
	
	
	$( '#'+id ).resizable({
					containment: "#wrapper",
					alsoResize: '#'+id +"iframe",
					distance: 1,
					start: function( event, ui ) { $('#'+id).find('iframe').hide()},
					stop: function( event, ui ) { 
					     
						  $('#'+id).find("textarea.main").sceditor("instance").width($('#'+id).width());
			              $('#'+id).find("textarea.main").sceditor("instance").height($('#'+id).height()-70);
						  $('#'+id).find('iframe').show();
					
					},
	});
	
   
   if(pathDoc!=""){
       openWDoc(id,pathDoc);
   }
   
  
   if(navigator.userAgent.indexOf('Chrome') != -1){
       
       $("#"+id).find('.container_text').css('background','#5880B4');
	   $("#"+id).css('background','#5880B4');
   }
   

}
function insertImageDoc(button,id_wdoc){
    id = $(button).closest('.program').attr('id');
	
	image_arq = $("#"+id).find('.file_a').val();
	image_arq = image_arq.replace(/\\/g, "\#");
	image_arq = image_arq.replace(/\//g, "\#");
	if(image_arq.indexOf("www#") != -1){
	   image_arq = image_arq.split("www#")[1];
	}
	else if(image_arq.indexOf("htdocs#") != -1){
	   image_arq = image_arq.split("htdocs#")[1];
			  
	}
	
	
	protocol = location.protocol+"##"+location.hostname;
	
	image_arq = protocol+"#"+image_arq;
	image_arq= image_arq.replace(/\#/g, "/");

	
	$(id_wdoc).find("textarea.main").sceditor("instance").insert('<img src="'+image_arq+'">');
	closeWExplore(id,"only_close"); 
}
function setNewButtons(id_wdocument){

  $(id_wdocument).find('.sceditor-button-source').after('<a class="sceditor-button sceditor-button-pdf" unselectable="on"'+ 
                                   'data-sceditor-command="export" onclick="exportPDF(this);" title="Export PDF">'+
									'pdf'+
									'</a>');
									
									var insert= 'insertImageDoc(this,'+id_wdocument+')';
									
  $(id_wdocument).find('.sceditor-button-horizontalrule').after('<a class="sceditor-button sceditor-button-addimage" unselectable="on"'+ 
                                   'data-sceditor-command="insertimage" onclick="callWindowWExplore(this,\'wexplore\',\'\',\'command-Insert Image\',\''+insert+'\',\'\',\'png,jpg,bmp,gif,jpeg\')" " title="Insert Image">'+
									'pdf'+
									'</a>');
$(id_wdocument).find('.sceditor-button-source').after('<a class="sceditor-button sceditor-button-doc" unselectable="on"'+ 
                                   'data-sceditor-command="export" onclick="exportDOC(this);" title="Export DOC">'+
									'doc'+
									'</a>');
									$(id_wdocument).find('.sceditor-button-left ').closest('.sceditor-group').addClass('group_rlj');
									$(id_wdocument).find('.group_rlj').after('<div class="sceditor-group">'+
										'<a class="sceditor-button sceditor-button-copy" unselectable="on"'+ 
									   'data-sceditor-command="copy" onclick="wdoc_copy(this);" title="Copy">'+
										'undo'+
										'</a>'+
										'<a class="sceditor-button sceditor-button-cut" unselectable="on"'+ 
									   'data-sceditor-command="cut" onclick="wdoc_cut(this);" title="Cut">'+
										'undo'+
										'</a>'+
										'<a class="sceditor-button sceditor-button-paste" unselectable="on"'+ 
									   'data-sceditor-command="paste" onclick="wdoc_paste(this);" title="Cut">'+
										'undo'+
										'</a>'+
										'</div>');
									
									$(id_wdocument).find('.sceditor-button-left ').closest('.sceditor-group').addClass('group_rlj');
									$(id_wdocument).find('.group_rlj').after('<div class="sceditor-group">'+
										'<a class="sceditor-button sceditor-button-undo" unselectable="on"'+ 
									   'data-sceditor-command="undo" onclick="wdoc_undo(this);" title="Undo">'+
										'undo'+
										'</a>'+
										'<a class="sceditor-button sceditor-button-redo" unselectable="on"'+ 
									   'data-sceditor-command="redo" onclick="wdoc_redo(this);" title="Redo">'+
										'undo'+
										'</a>'+
										'</div>');
}




function resizeWdoc(button){
   
   id = $(button).closest('.program').attr('id');
   
    if($("#"+id).hasClass('maxWindow')){
	   
              $("#"+id).css('padding','0');
			 $("#"+id).find('.container_text').height('80%');
		   
			 
			
			
			  
			
	
	}else{
	           $("#"+id).find('.container_text').height('400px');
			  
			 
			    $("#"+id).find('.ui-resizable-se').css('right','-5px');
			    $("#"+id).find('.ui-resizable-se').css('bottom','-5px');
			   
			 
			    
			  
	}
	
}

function resizeWindowWdoc(button,callBackfunction){
    id = $(button).closest('.program').attr('id');
	 //setWindowPosition(button);
	
	
	if($('#'+id).hasClass('maxWindow')){
	  
	  $('#'+id).find('.content').width("68.6%");
	    
		$('#'+id).removeClass('maxWindow');
		
		$('#'+id).animate({width: "640px",height: "490px"}).promise().done(function ()
		{
			 $('#'+id).find("textarea.main").sceditor("instance").width($('#'+id).width()-5);
			 $('#'+id).find("textarea.main").sceditor("instance").height('400');
			
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
			 $('#'+id).find("textarea.main").sceditor("instance").width($('#'+id).width()+15);
			 $('#'+id).find("textarea.main").sceditor("instance").height($('#desktop').height()-100);
			 
			 
			 eval(callBackfunction);
			
		});
		
	
	}
	
	
	
	
   
}


function openWDoc(id_wdoc,pathDoc){
  
 

  pathDoc=pathDoc.replace(/\#/g, "\\");
  $.ajax({
            type      : 'post',
 
            url       :'system/controller/wdocController.php',
 
            data:   'path='+pathDoc+"&action=readDoc",
 
            dataType  : 'JSON',
 
                success : function(retorno){
                     
					
				      if(retorno.is_erro == "true"){
					     callWindowMessage("","error","Error",retorno.msg);
					  }
					  else{
                           		
                      
						$('#'+id_wdoc).find("textarea").sceditor('instance').val(retorno.content);								
						
						 
					  }
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		      }
				
        });
   
}


function openWDoc_O(button,id_wdoc){

  id = $(button).closest('.program').attr('id');
 
  $.ajax({
            type      : 'post',
 
            url       :'system/controller/wdocController.php',
 
            data:   'path='+$("#"+id).find('.file_a').val()+"&action=readDoc",
 
            dataType  : 'JSON',
 
                success : function(retorno){
                     
					 
				      if(retorno.is_erro == "true"){
					    callWindowMessage("","error","Error",retorno.msg);
					  }
					  else{
                           		         
						$('#'+id_wdoc).find("textarea").sceditor('instance').val(retorno.content);
						closeWExplore(id,"only_close"); 
					  }
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				   callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
                }
				
        });
   
}

function saveWDoc(button,id_program){
   
	id = $(button).closest('.program').attr('id');
    name = $("#"+id).find('.file_a').val();
	local = $('#'+id).find('.search_explore').val(); 
	
	path= local+"\\"+name;
	content = $('#'+id_program).find("textarea").sceditor('instance').val();
	var regex = /<br\s*[\/]?>/gi;
	content =content.replace(regex, "\r\n");
   
	 $.ajax({
            type      : 'post',
 
            url       :'system/controller/wdocController.php',
 
            data:   'path='+path+"&action=writeDoc&content="+content.replace(/&nbsp;/gi,' '),
 
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

function savePDF(button,id_program){
   
	id = $(button).closest('.program').attr('id');
    name = $("#"+id).find('.file_a').val();
	local = $('#'+id).find('.search_explore').val(); 
	
    path= local.replace(/\\/g, "#")+"/"+name;
	path = path.replace(/\//g, "#");
	

	$('#'+id_program).find('.name').val(path);
	
	content = $('#'+id_program).find("textarea").sceditor('instance').val();
	saveAsPDF(button,id_program);
	closeWExplore(id,"close_and_safe"); 
   
	
}

function exportPDF(button){
   
	id = $(button).closest('.program').attr('id');
  	content = $('#'+id).find("textarea").sceditor('instance').val();
	$('#'+id).find('.post_pdf').val(content);
	$('#'+id).find('.export_pdf').click();
   
}	
function saveAsPDF(button,id_program){
   
	
  	content = $('#'+id_program).find("textarea").sceditor('instance').val();
	$('#'+id_program).find('.post_pdf').val(content);
	$('#'+id_program).find('.save_pdf').click();
	
   
	
}

function exportDOC(button){
   
	id = $(button).closest('.program').attr('id');
	content = $('#'+id).find("textarea").sceditor('instance').val();
	$('#'+id).find('.doc_export').html(content);
	$('#'+id).find('.doc_export').wordExport();
	$('#'+id).find('.doc_export').html('');
   
	
}
function exportDOCX(button){
    
	id = $(button).closest('.program').attr('id');
	content = $('#'+id).find("textarea").sceditor('instance').val();
	html_x = convertImagesToBase64(content);
	$('#'+id).find('.docx_export').html(html_x);
	content = $('#'+id).find('.docx_export').html();
    var orientation = "portrait";//landscape
    var converted = htmlDocx.asBlob(content, {orientation: orientation});
	saveAs(converted, 'test.docx');
	
   
}




function wdoc_undo(button){
 
  id = $(button).closest('.program').attr('id');
  $('#'+id).find('textarea').sceditor('instance').execCommand('undo');
		
}
function wdoc_redo(button){
  
  id = $(button).closest('.program').attr('id');
  $('#'+id).find('textarea').sceditor('instance').execCommand('redo');
}
function wdoc_copy(button){

  id = $(button).closest('.program').attr('id');
  copyText =  $('#'+id).find('textarea').sceditor('instance').getRangeHelper().selectedHtml();
  $('#'+id).find('.clipboard').val(copyText);
   
}
function wdoc_cut(button){

  id = $(button).closest('.program').attr('id');
  copyText =  $('#'+id).find('textarea').sceditor('instance').getRangeHelper().selectedHtml();
  $('#'+id).find('.clipboard').val(copyText);
  $('#'+id).find('textarea').sceditor('instance').execCommand('delete');
  
 
		
}
function wdoc_paste(button){

  id = $(button).closest('.program').attr('id');
  text=  $('#'+id).find(".clipboard").val();
  $('#'+id).find('textarea').sceditor('instance').insert(text);
}







	 