
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
var id_program = "";
var contPaint = 0;







function callWindowPaint(id,pathPaint){
 
 
	var wp = $("#"+id).find('.paint_area').wPaint({
	
		}).data('_wPaint');
	
	$( '#'+id ).resizable({
					containment: "#wrapper",
					alsoResize: '#'+id +" .paint_area",
					distance: 1,
					start: function( event, ui ) { $('#'+id).find('iframe').hide()},
					stop: function( event, ui ) {
					    altura = $('#'+id).height()-$('#'+id).find('.window_top').height();
					   
						
					},
	});
	
  
   

}
function openImagePaint(button,id_program){
   id = $(button).closest('.program').attr('id');
    name = $("#"+id).find('.file_a').val();
	local = $('#'+id).find('.search_explore').val(); 
	url = imageFormat(id_program,name);
	$("#"+id_program).find('.paint_area').wPaint("image", url+"");
	closeWExplore(id,"only_close"); 

}
function saveImagePaint(button,id_program){
 
 
    id = $(button).closest('.program').attr('id');
    var imageData = $("#"+id_program).wPaint("image");
	
	
    name = $("#"+id).find('.file_a').val();
	
	local = $('#'+id).find('.search_explore').val(); 
	
	path= local+"\\"+name;
	var imageData = $("#" + id_program).find('.paint_area').wPaint("image");

		
	
	$.ajax({
            type      : 'post',
 
            url       :'system/controller/paintController.php',
          data: {image: imageData,path:path,name_file :name,action:"saveImage"},
        
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
function clearImagePaint(button)
{ 
      id = $(button).closest('div.program').attr('id');
      $("#"+id).find('.paint_area').wPaint("clear");
}











	 