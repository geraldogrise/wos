
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
var id_program = "";
var contPdf_viewer = 0;


function callWindowPdf_viewer(id,pathPdf){

  $( '#'+id ).resizable({
					containment: "#wrapper",
					alsoResize: '#'+id +"iframe",
					distance: 1,
					start: function( event, ui ) { $('#'+id).find('iframe').hide()},
					stop: function( event, ui ) {
					    altura = $('#'+id).height()-$('#'+id).find('.modal-header_window').height();
					    $('#'+id).find('iframe').show();
					},
	});
	
	 if(pathPdf !=""){
		  id_pdf_viewer= "#"+id
		  srcPdf =  $(id_pdf_viewer).find('.pdf_viewer_iframe').attr('src');
		  srcPdf = srcPdf+"?file="+pathPdf.replace(":#", "//").replace(/\#/g, "/");
		  $(id_pdf_viewer).find('.pdf_viewer_iframe').attr("src",srcPdf);  
		  
	  }


}


function resizePDFViewer(button){
   
   id = $(button).closest('.program').attr('id');
   
    if($("#"+id).hasClass('maxWindow')){
	   
              $("#"+id).css('padding','0');
			  
			 // $("#"+id).find('.pdf_viewer_iframe').height($('#desktop').height()-50);
			
			  
			
	
	}else{
	             
				 $('#'+id).find('.pdf_viewer_iframe').css('width','100% !important');
			    // $("#"+id).find('.pdf_viewer_iframe').height('500px');
			   
			
			    
			  
	}
	
}

function resizeWindowPDFViewer(button,callBackfunction){
    id = $(button).closest('.program').attr('id');
	 //setWindowPosition(button);
	if($('#'+id).hasClass('maxWindow')){
	  
	  
	    
		$('#'+id).removeClass('maxWindow');
		 $('#'+id).css('top','3%');
		$('#'+id).animate({width: "900px",height: "550px"}).promise().done(function ()
		{
			 
			 eval(callBackfunction);
		});
		$('#'+id).css('padding','0');
		$('#'+id).css('position','absolute');
		
      
	}
	else{
        $('#'+id).addClass('maxWindow');
		
		
		$('#'+id).css('padding','0');
		
	    $('#'+id).animate({width: "100%",height:$('#desktop').height()-12}).promise().done(function ()
		{
			
			 eval(callBackfunction);
			
		});
		
	
	}
	
	
	
	
   
}
function openPdf_viewerExplore(button,id_program){
		
		
		var id = $(button).closest('.program').attr('id');
	    filePdf = $("#"+id).find('.file_a').val();
		filePdf = filePdf.replace(/\\/g, "\#");
		filePdf = filePdf.replace(/\//g, "\#");
		
		
		 if(filePdf.indexOf("www#") != -1){
			 filePdf = filePdf.split("www#")[1];
			
			
		 }
		 else if(filePdf.indexOf("htdocs#") != -1){
			   filePdf = filePdf.split("htdocs#")[1];
			  
		 }
		
        
		srcPdf =  $("#"+id_program).find('.pdf_viewer_iframe').attr('src');
		srcPdf = srcPdf.split("?file")[0]+"?file="+"/"+filePdf.replace(":#", "//").replace(/\#/g, "/");
		$("#"+id_program).find('.pdf_viewer_iframe').attr("src",srcPdf)
		
		
      closeWExplore(id,"only_close"); 

}









	 