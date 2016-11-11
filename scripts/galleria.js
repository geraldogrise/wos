var id_program = "";
var contGalleria = 0;



function buildGalleria(id_galleria,pathGallery,tipo,pathHttp){
    
    if(tipo==""){
	   tipo = "normal";
	}
	pathGallery =pathGallery.replace(/\\/g, "\#");
     var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/galleriaController.php',
			   data:  'action=buildGallery&gallery='+pathGallery+"&type="+tipo+"&pathHttp="+pathHttp,
			   dataType  : 'HTML',

				  success : function(retorno){
						
						$('#'+id_galleria).find('.galleria_images').html('');
						$('#'+id_galleria).find('.galleria_images').html(retorno);
						setGallery(id_galleria);
					
						
										
				  }, 
				   error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
				   }
                 			  

			 });	 


}

function callWindowGalleria(elemento,id,callBackFuntion,pathGalleria,pathHttp){
 
   var klon = $( '#'+id+"_"+  "0");
   contGalleria++;
   
  if(!$(elemento).hasClass('menuClick')){
     	$(elemento).addClass('menuClick');
  }
  
    clone = klon.clone(true);
	clone.attr('id',id+"_"+contGalleria).insertAfter(klon).fadeIn();
  
	
	$( '#'+id+"_"+contGalleria ).resizable({
					containment: ".workarea",
					alsoResize: $('#'+id+"_"+contGalleria ).find('.galleria_images'),
					distance: 1,
					start: function( event, ui ) { },
					stop: function( event, ui ) {
					   
					  
					},
	});
	addZindex(id+"_"+contGalleria);
	
	allowDrag(id+"_"+contGalleria);
	
	if(pathGalleria != ""){
  	  buildGalleria(id+"_"+contGalleria,pathGalleria,"normal",pathHttp);
    }else{
	   setGallery(id+"_"+contGalleria);
	}
	 
   eval(callBackFuntion);	
 
  
   

}





function resizeGalleria(button){
   
   id = $(button).closest('.program').attr('id');
  
    if($("#"+id).hasClass('maxWindow')){
	   
              $("#"+id).css('padding','0');
			  
			  $('#'+id).find('.galleria_images').height($('.workarea').height()-50);
			  $('#'+id).find('.galleria_images').width('900px');
			
			
	
	}else{
	             
			
			     $("#"+id).find('.ui-resizable-se').css('right','-5px');
			     $("#"+id).find('.ui-resizable-se').css('bottom','-30px');
				
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
	 setWindowPosition(button);
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
		
	    $('#'+id).animate({width: "100%",height:$('.workarea').height()}).promise().done(function ()
		{
			
			 eval(callBackfunction);
			
		});
		
	
	}
	
	
	
	
   
}
function setGallery(id_gallery){

  
			
    gallery = $('#'+id_gallery).find('.galleria_images');
    Galleria.loadTheme('scripts/galleria.classic.min.js');
    Galleria.run(gallery);
}









	 