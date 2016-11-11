
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
var id_program = "";
var contWSlider = 0;






function callWindowWSlider(id,pathWslider){
 
   	  
	if(pathWslider != ""){
  	  buildWSlider(id,pathWslider,"normal");
    }else{
	   setSliderPro(id);
	}
	
	
  
  
   

}




function buildWSlider(id_wslider,pathGallery,tipo){
    $('#'+id_wslider).find('.slider-pro').html('');
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
	
	
	
    pathHttp= location.protocol+":#"+location.hostname+"#"+pathGallery;
     var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/wsliderController.php',
			   data:  'action=buildGallery&gallery='+pathNormal+"&type="+tipo+"&pathHttp="+pathHttp,
			   dataType  : 'HTML',

				  success : function(retorno){
						
						
						$('#'+id_wslider).find('.slider-pro').html(retorno);
						
						setSliderPro(id_wslider);
						setImageActiveSliderPro(id_wslider,pathHttp);
										
				  },
                  error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				        callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		          }				  
                 			  

			 });	 


}
function setImageActiveSliderPro(id,pathImage){

 pathImage = pathImage.replace(/\#/g, "/").replace("::", ":/");
	
	 $('#'+id).find('div.sp-thumbnail-container').each(function(){
	    	
		 $(this).removeClass('sp-selected-thumbnail');
		 
		  if($(this).find('img').attr("src") == pathImage){
				
				
				$(this).addClass('sp-selected-thumbnail');
                $("#"+id).find(".sp-image-container").find(".sp-image").attr("src",pathImage);
		  };
	  });


}


function setSliderPro(id_slider){

$( '#'+id_slider ).find('.slider-pro').sliderPro({
			width: 600,
			height: 300,
			fade: true,
			arrows: true,
			buttons: false,
			fullScreen: true,
			shuffle: true,
			smallSize: 500,
			mediumSize: 1000,
			largeSize: 3000,
			thumbnailArrows: true,
			autoplay: false
		});

}





function resizeWSlider(button){
   
   id = $(button).closest('.program').attr('id');
  
    if($("#"+id).hasClass('maxWindow')){
	   
              $("#"+id).css('padding','0');
			  
			
			
	
	}else{
	             
			
		
			    
	}
	
}


function resizeWindowWSlider(button,callBackfunction){
    id = $(button).closest('.program').attr('id');
	 setWindowPosition(button);
	if($('#'+id).hasClass('maxWindow')){
	  
	  
	    
		$('#'+id).removeClass('maxWindow');
		 $('#'+id).css('top','3%');
		$('#'+id).animate({width: "613px",height: "425px"}).promise().done(function ()
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









	 