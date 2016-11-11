
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
var id_program = "";
var contGalleria = 0;



function buildGalleria(id_galleria,pathGallery,tipo){
    
	$('#'+id_galleria).find('.galleria_images').html('');
    if(tipo==""){
	   tipo = "normal";
	}
	pathNormal = pathGallery;
    pathGallery =pathGallery.replace(/\\/g, "\#");
	pathGallery = pathGallery.replace(/\//g, "\#");
	if(pathGallery.indexOf("www#") != -1){
	   pathGallery = pathGallery.split("www#")[1];
	}
	else if(pathGallery.indexOf("htdocs#") != -1){
	   pathGallery = pathGallery.split("htdocs#")[1];
			  
	}
	 pathHttp= location.protocol+"##"+location.hostname+"#"+pathGallery;
	
     var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/galleriaController.php',
			   data:  'action=buildGallery&gallery='+pathNormal+"&type="+tipo+"&pathHttp="+pathHttp,
			   dataType  : 'HTML',

				  success : function(retorno){
						
						
						$('#'+id_galleria).find('.galleria_images').html(retorno);
						setGallery(id_galleria,pathHttp);
					
						
										
				  }, 
				  error: function(XMLHttpRequest, textStatus, errorThrown){
		        
						 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
						 
					  }
                 			  

			 });	 


}

function setImageActiveGalleria(id,pathImage){

     pathImage = pathImage.replace(/\#/g, "/").replace("::", ":/");
	
	   
		$('#'+id).find('.galleria-image').each(function(){
			
		 $(this).removeClass('active');
           
		  if($(this).find('img').attr("src") == pathImage){
				
				$(this).addClass('active').click();
					  
		  };
		 });

}

function callWindowGalleria(id,pathGalleria){
 
 
	
	$( '#'+id ).resizable({
					containment: "#wrapper",
					alsoResize: $('#'+id ).find('.galleria_images'),
					distance: 1,
					start: function( event, ui ) { },
					stop: function( event, ui ) {
					   
					  
					},
	});
	
	
	if(pathGalleria != ""){
  	  buildGalleria(id,pathGalleria,"normal");
    }else{
	   setGallery(id);
	}
	
  
   

}





function resizeGalleria(button){
   
   id = $(button).closest('.program').attr('id');
  
    if($("#"+id).hasClass('maxWindow')){
	   
              $("#"+id).css('padding','0');
			  
			  $('#'+id).find('.galleria_images').height($('#desktop').height()-50);
			  $('#'+id).find('.galleria_images').width('900px');
			
			
	
	}else{
	             
				 $('#'+id).find('.galleria_images').height('360px');
				 $('#'+id).find('.galleria_images').width('640px');
			    
	}
	reloadGallery(id);
}
function reloadGallery(id_gallery){
    gallery = Galleria.get(0);
	gallery.destroy();
	setGallery(id_gallery);
}

function resizeWindowGalleria(button,callBackfunction){
    id = $(button).closest('.program').attr('id');
	
	if($('#'+id).hasClass('maxWindow')){
	  
	  
	    
		$('#'+id).removeClass('maxWindow');
		 $('#'+id).css('top','3%');
		$('#'+id).animate({width: "640px",height: "360px"}).promise().done(function ()
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
function setGallery(id_gallery,pathHttp){

  
			
    gallery = $('#'+id_gallery).find('.galleria_images');
    Galleria.loadTheme('scripts/galleria.classic.min.js');
    Galleria.run(gallery);
	setTimeout(function(){ setImageActiveGalleria(id_gallery,pathHttp); }, 300);
	
					
}









	 