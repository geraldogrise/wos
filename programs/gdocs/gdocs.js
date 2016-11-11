
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
var id_program = "";
var contGdocs = 0;




function callWindowGdocs(id,pathGdocs){
 
 
    
	
	$( '#'+id ).resizable({
					containment: "#wrapper",
					alsoResize: '#'+id +"iframe",
					distance: 1,
					start: function( event, ui ) { $('#'+id).find('iframe').hide()},
					stop: function( event, ui ) {
					    altura = $('#'+id).height()-$('#'+id).find('.window_top').height();
					    $('#'+id).find('iframe').show();
					},
	});
	
	
	
	if(pathGdocs!=""){
	   googleViewer = "http://docs.google.com/gview?url=";
	         if(pathGdocs.indexOf("http") != -1 || pathGdocs.indexOf("https") != -1){
				
				  srcGdocs =googleViewer+ pathGdocs+"&embedded=true";
	              srcGdocs = srcGdocs.replace(":#", "//").replace(/\#/g, "/");
			 }else{
			 
			    if(pathGdocs.indexOf("www#") != -1){
					pathGdocs = pathGdocs.split("www#")[1];
				 }
				 else if(pathGdocs.indexOf("htdocs#") != -1){
					   pathGdocs = pathGdocs.split("htdocs#")[1];
						  
				 }
				  srcGdocs =googleViewer+location.protocol+"##"+location.hostname+"#"+ pathGdocs+"&embedded=true";
				  srcGdocs = srcGdocs.replace(":#", ":/").replace(/\#/g, "/");
				  
			 
			 }
	   
	  
	   //pathGdocs = "http://www.15minutemondays.com/wp-content/uploads/2014/07/Domain-Name-Brainstorming-15-Minute-Mondays.pdf";
	  
	   $( '#'+id).find('.iframe').attr("src",srcGdocs); 
	}
	
   

}




function resizeGdocs(button){
   
   id = $(button).closest('.program').attr('id');
  
    if($("#"+id).hasClass('maxWindow')){
	   
              $("#"+id).css('padding','0');
			 
			  altura = $('#'+id).height()-$('#'+id+"_"+contGdocs).find('.window_top').height();
			 
			 
			  
			
	
	}else{
	             
				 $('#'+id).find('.iframe').css('width','100% !important');
			    
				 
				
			   
			
			    
			  
	}
	
}

function resizeWindowGdocs(button,callBackfunction){
    id = $(button).closest('.program').attr('id');
	// setWindowPositionViewer(button);
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

function openGdocsExplore(button,id_program){
		
		
		var id = $(button).closest('.program').attr('id');
	    pathGdocs = $("#"+id).find('.file_a').val();
		pathGdocs = pathGdocs.replace(/\\/g, "\#");
		pathGdocs = pathGdocs.replace(/\//g, "\#");
		
		
		 if(pathGdocs.indexOf("www#") != -1){
			 pathGdocs = pathGdocs.split("www#")[1];
			
			
		 }
		 else if(pathGdocs.indexOf("htdocs#") != -1){
			   pathGdocs = pathGdocs.split("htdocs#")[1];
			  
		 }
		
		 
		  googleViewer = "http://docs.google.com/gview?url=";
	      //pathGdocs = "http://www.15minutemondays.com/wp-content/uploads/2014/07/Domain-Name-Brainstorming-15-Minute-Mondays.pdf";
	      srcGdocs =googleViewer+location.protocol+"##"+location.hostname+"#"+ pathGdocs+"&embedded=true";
	      srcGdocs = srcGdocs.replace(/\#/g, "/");
		  $( '#'+id_program).find('.iframe').attr("src",srcGdocs); 
		
        
	
		
		
      closeWExplore(id,"only_close"); 

}









	 