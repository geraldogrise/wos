
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
var id_wpaint = "";
var contWPaint = 0;


var svgCanvas = null;

function init_embed(frm) {
    id =  $(frm).closest('div.program').attr('id');
	id_paint =$("#"+id).find('.paint').attr('id'); 
   var frame = document.getElementById('svgedit');
  
 
       
	svgCanvas = new embedded_svg_edit(frame);
			

			
    
}



function callWindowWPaint(id,pathWPaint){
 
  
   id_wpaint= id;
    
	
	$( '#'+id ).resizable({
					containment: "#wrapper",
					alsoResize: '#'+id +"iframe",
					distance: 1,
					start: function( event, ui ) { $('#'+id).find('iframe').hide()},
					stop: function( event, ui ) {
					    altura = $('#'+id).height()-$('#'+id).find('.window_top').height();
					    $('#'+id).find('iframe').height(altura-15); 
						$('#'+id).find('iframe').show();
					},
	});
	
  
  
   

}




function resizeWPaint(button){
   
   id = $(button).closest('.program').attr('id');
  
    if($("#"+id).hasClass('maxWindow')){
	   
              $("#"+id).css('padding','0');
			
			  altura = $('#'+id).height()-$('#'+id).find('.window_top').height();
			
			  $('#'+id).find('iframe').height(altura-20); 
			  $('#'+id).find('iframe').width($('#'+id).width());
			
	
	}else{
	            
				 
			    
				 $('#'+id).find('iframe').width(900);
				 $("#"+id).find('iframe').height(500);
			   
			
			    
			  
	}
	
}

function resizeWindowWPaint(button,callBackfunction){
    id = $(button).closest('.program').attr('id');
	
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



function saveWPaint(button,id_program){
 id = $(button).closest('.program').attr('id');
 name = $("#"+id).find('.file_a').val(); 
 local = $('#'+id).find('.search_explore').val(); 
imagePng= $('#'+id_program).find('.image_data').val();
		
		path= local+"\\"+name;
	
		$.ajax({
            type      : 'post',
 
            url       :'system/controller/paintController.php',
          data: {image: imagePng,path:path,name_file :name,action:"saveImage"},
        
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

function saveSvg(imagePng) {      
	
	 
	
		$('#'+id_wpaint).find('.image_data').val(imagePng);
		$('#'+id_wpaint).find('.exportdata').click();
		
		
		
		
	
}











	 