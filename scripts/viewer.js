var id_program = "";
var contViewer = 0;




function callWindowViewer(elemento,id,callBackFuntion){
 
   var klon = $( '#'+id+"_"+  "0");
   contViewer++;
   
  if(!$(elemento).hasClass('menuClick')){
     	$(elemento).addClass('menuClick');
  }
  
    clone = klon.clone(true);
	clone.attr('id',id+"_"+contViewer).insertAfter(klon).fadeIn();

    
	
	$( '#'+id+"_"+contViewer ).resizable({
					containment: ".workarea",
					alsoResize: '#'+id+"_"+contViewer +"iframe",
					distance: 1,
					start: function( event, ui ) { $('#'+id+"_"+contViewer).find('iframe').hide()},
					stop: function( event, ui ) {
					    altura = $('#'+id+"_"+contViewer).height()-$('#'+id+"_"+contViewer).find('.modal-header_window').height();
					    $('#'+id+"_"+contViewer).find('.pdf_viewer_iframe').height(altura-7); 
						$('#'+id+"_"+contViewer).find('iframe').show();
					},
	});
	allowDrag(id+"_"+contViewer);
	
   eval(callBackFuntion);	
  
  
   

}




function resizeViewer(button){
   
   id = $(button).closest('.program').attr('id');
   
    if($("#"+id).hasClass('maxWindow')){
	   
              $("#"+id).css('padding','0');
			  
			   altura = $('#'+id+"_"+contViewer).height()-$('#'+id+"_"+contViewer).find('.modal-header_window').height();
			 $('#'+id+"_"+contViewer).find('.pdf_viewer_iframe').height(altura+20); 
			  
			
	
	}else{
	             
				 $('#'+id).find('.pdf_viewer_iframe').css('width','100% !important');
			     $("#"+id).find('.ui-resizable-se').css('right','-5px');
			     $("#"+id).find('.ui-resizable-se').css('bottom','-30px');
				 $("#"+id).find('.pdf_viewer_iframe').height('500px');
			   
			
			    
			  
	}
	
}

function resizeWindowViewer(button,callBackfunction){
    id = $(button).closest('.program').attr('id');
	 setWindowPositionViewer(button);
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
		
	    $('#'+id).animate({width: "100%",height:$('.workarea').height()}).promise().done(function ()
		{
			
			 eval(callBackfunction);
			
		});
		
	
	}
	
	
	
	
   
}
function setWindowPositionViewer(button){
         id = $(button).closest('.program').attr('id');
		
		if($('#'+id).hasClass('maxWindow')){
			$('#'+id).css('top','5%');
			$('#'+id).css('left','15%');
		}
		else{
		   $('#'+id).css('top','0');
		   $('#'+id).css('left','0');
		}

}









	 