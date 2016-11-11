
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
var id_program = "";
var contWCarousel = 0;





function callWindowWCarousel(id,pathWCarousel){
 

	
	$( '#'+id ).resizable({
					containment: "#wrapper",
					//alsoResize: $('#'+id+"_"+contWCarousel ).find('.galleria_images'),
					distance: 1,
					start: function( event, ui ) { },
					stop: function( event, ui ) {
					   
					  
					},
	});

	if(pathWCarousel != ""){
  	  buildWCarousel(id,pathWCarousel,"normal");
    }else{
       
	   setCarousel(id);
	   
	}
	   

}


function buildWCarousel(id_wcarousel,pathWCarousel,tipo){
    
	$('#'+id_wcarousel).find('.connected-carousels').html('');
    if(tipo==""){
	   tipo = "normal";
	}
	pathNormal = pathWCarousel;
	pathWCarousel =pathWCarousel.replace(/\\/g, "\#");
	pathWCarousel = pathWCarousel.replace(/\//g, "\#");
	if(pathWCarousel.indexOf("www#") != -1){
	   pathWCarousel = pathWCarousel.split("www#")[1];
	}
	else if(pathWCarousel.indexOf("htdocs#") != -1){
	   pathWCarousel = pathWCarousel.split("htdocs#")[1];
			  
	}
 
    pathHttp= location.protocol+":#"+location.hostname+"#"+pathWCarousel;
	
	
	
     var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/wcarouselController.php',
			   data:  'action=buildGallery&gallery='+pathNormal+"&type="+tipo+"&pathHttp="+pathHttp,
			   dataType  : 'HTML',

				  success : function(retorno){
						
						
						$('#'+id_wcarousel).find('.connected-carousels').html(retorno);
						
						 setCarousel(id_wcarousel);
					     setActiveImageWCarousel(id_wcarousel,pathHttp);
						
										
				  }, 
				  error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
				  }
                 			  

			 });	 


}

function setActiveImageWCarousel(id,pathImage){
     pathImage = pathImage.replace(/\#/g, "/").replace("::", ":/");
	
	 $('#'+id).find('div.carousel').find('li').each(function(){
	    	
		 $(this).removeClass('active');
		 
		  if($(this).find('img').attr("src") == pathImage){
				
				$(this).addClass('active').click();   
		  };
	  });

}






function resizeWCarousel(button){
   
   id = $(button).closest('.program').attr('id');
  
    if($("#"+id).hasClass('maxWindow')){
	   
              $("#"+id).css('padding','0');
			  
			
			
	
	}else{
	          
			    
	}
	
}


function resizeWindowWCarousel(button,callBackfunction){
    id = $(button).closest('.program').attr('id');
	
	if($('#'+id).hasClass('maxWindow')){
	  
	  
	    
		$('#'+id).removeClass('maxWindow');
		 $('#'+id).css('top','3%');
		$('#'+id).animate({width: "640px",height: "520px"}).promise().done(function ()
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









	 