 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
function removerArquivo(button,imagem){
   local = $('#upload_0').find('.gallery_path').val();
   var dados = "imagem="+imagem+"&action=delete"; 
    if(local !=""){
      dados += "&local="+local;
    }
	
     $.ajax({
          type      : 'post',

         url       :'system/util/deleteImage.php',

          data      : dados,

          dataType  : 'json',

          success : function(retorno){
                
				    if(retorno.is_erro == "true"){
					    callWindowMessage("","error","Error",retorno.msg);
					}
					else{
                      callWindowMessage("","sucess","Sucess",retorno.msg);
						
					  
					}
                  
          },
		  error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
			}
      });



}
function cancelarUpload(){
 
  
   var dados = "action=cancel&imagens="+getImages(); 
     $.ajax({
          type      : 'post',

         url       :'system/util/deleteImage.php',

          data      : dados,

          dataType  : 'json',

          success : function(retorno){
                
				    if(retorno.is_erro == "true"){
					   callWindowMessage("","error","Error",retorno.msg);
					}
					else{
                         limparDropzone();
						 
						
					  
					}
                  
          },
		  error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
			}
      });




}

function salvarUpload(cliente,produto){
 
  
   var dados = "action=build"; 
     $.ajax({
          type      : 'post',

         url       :'system/util/deleteImage.php',

          data      : dados,

          dataType  : 'HTML',

          success : function(retorno){
                    limparDropzone();
				   
                  
          },
		  error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
		  }
      });




}

function limparDropzone(){
   //  $('#popup_upload').hide();
	 $('#drop_zone .dz-preview').each(function(){
	  
	   $(this).remove();

	});

}
function getImages(){

	var separador="";
	var imagens="";
	$('#drop_zone .dz-preview .dz-filename span').each(function(){
	  
	   imagens += separador+ $(this).html();
	   separador = ",";
	});
	return imagens;

}
function sendSubmit(id,form){
	
	$('#'+id).find('.'+form).submit();
}
function  loadForm(){

$(document).ready(function (e){
	
	$(".form_submit").on('submit',(function(e){
	e.preventDefault();
	  form = this;
	$.ajax({
		url: "system/controller/upController.php",
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		  
		   if($(form).find('.action_install').size()==1){
		       id = $(form).closest('div.program').attr('id');
			  installDataBase(id);
		   }
	    },
		error: function(){
		 
		} 	        
		});
	}));
});

}

function convertImagesToBase64 (content) {
    
	 
	  html_x = $.parseHTML( content );
      var regularImages =[];
		 $.each( html_x, function( i, el ) {
			  if(el.nodeName == "IMG"){
				 regularImages.push(el);
			  }
			 
		});
     
      var canvas = document.createElement('canvas');
      var ctx = canvas.getContext('2d');
      [].forEach.call(regularImages, function (imgElement) {
        // preparing canvas for drawing
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        canvas.width = imgElement.width;
        canvas.height = imgElement.height;

        ctx.drawImage(imgElement, 0, 0);
        // by default toDataURL() produces png image, but you can also export to jpeg
        // checkout function's documentation for more details
        var dataURL = canvas.toDataURL();
        imgElement.setAttribute('src', dataURL);
		
      })
      canvas.remove();
	  return html_x;
    }

	
	

