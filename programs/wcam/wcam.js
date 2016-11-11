
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
var contWCam = 0;





function callWindowWCam(id){

 
	$('#'+id).find(".webcam").scriptcam({
					showMicrophoneErrors:false,
					onError:onError,
					cornerRadius:20,
					cornerColor:'e3e5e2',
					onWebcamReady:onWebcamReady,
					onPictureAsBase64:base64_tofield_and_image
				});
  
  
				
   

}
function base64_tofield() {
   $('#formshot').val($.scriptcam.getFrameAsBase64());
};
function base64_toimage() {

   $('#formshot').val(""+$.scriptcam.getFrameAsBase64());
   $('#snapshot').attr("src","data:image/png;base64,"+$.scriptcam.getFrameAsBase64());
 
};
function base64_tofield_and_image(b64) {
   $('#formshot').val(b64);
   $('#snapshot').attr("src","data:image/png;base64,"+b64);
};
function onError(errorId,errorMsg) {
			
				alert(errorMsg);
}		


function onWebcamReady(cameraNames,camera,microphoneNames,microphone,volume) {
				$.each(cameraNames, function(index, text) {
					$('#cameraNames').append( $('<option></option>').val(index).html(text) )
				}); 
				$('#cameraNames').val(camera);
}
function changeCamera() {
	$.scriptcam.changeCamera($('#cameraNames').val());
}

function saveImageCam(button,id_program){



    id = $(button).closest('.program').attr('id');
   	name = $("#"+id).find('.file_a').val();
	
	local = $('#'+id).find('.search_explore').val(); 
	
	path= local+"\\"+name;
	var imageData = $("#" + id_program).find('.formshot').val();

		
	
	$.ajax({
            type      : 'post',
 
            url       :'system/controller/imageController.php',
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





	




