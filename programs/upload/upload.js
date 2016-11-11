
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
function callUploadWindow(elemento,id){

   //var klon = $( '#'+id+ "_0" ).fadeIn();
  $( '#'+id+ "_0" ).fadeIn();
	  if(!$(elemento).hasClass('menuClick')){
			$(elemento).addClass('menuClick');
	  }
	  
	 
   
   allowDrag(id+ "_0");   
   addZindex(id+ "_0");
   
	if($('.upload_style.program').size() <=2){
	 
	   setGips(id+ "_0",id,'');
	}else{
	   insertGip(id+ "_0",id,'');
	}
  
  
   setDropZone();
   

}
function setDropZone(){
  
      
		  Dropzone.options.drop3 = {
			init: function() {
		   
			 this.on("addedfile", function(file) {

				// Create the remove button
				var removeButton = Dropzone.createElement("<a onclick=\"removerArquivo(this,'"+file.name+"');\" class=\"dz-remove\" data-dz-remove=\"\" href=\"#\">Remover</a>");
			   

				// Capture the Dropzone instance as closure.
				var _this = this;

				// Listen to the click event
				removeButton.addEventListener("click", function(e) {
				  // Make sure the button click doesn't submit the form:
				  e.preventDefault();
				  e.stopPropagation();

				  // Remove the file preview.
				  _this.removeFile(file);
				  // If you want to the delete the file on the server as well,
				  // you can do the AJAX request here.
				});

				// Add the button to the file preview element.
				file.previewElement.appendChild(removeButton);
			  });
			  this.on('complete', function () {
				   setExtensionImage();
				});
			
			}
		  };
      
  }
  function setExtensionImage(){
  
     $('.dz-filename').each(function(){
	 
	    nomeImagem = $(this).find('span').html();
		extensao =nomeImagem.substring(nomeImagem.lastIndexOf('.')+1); 
		if(extensao != 'png' && extensao != 'jpg' && extensao != 'gif' && extensao != 'bmp'){
		  $(this).closest('.dz-details').find('img').attr('src','images/'+extensao+'.png').show();
		  $(this).closest('.dz-details').find('img').css('width','64px');
		  $(this).closest('.dz-details').find('img').css('height','64px');
		  $(this).closest('.dz-details').find('img').css('margin-top','36px');
		  $(this).closest('.dz-details').find('img').css('margin-left','15px')
		}
		
		
		
	 });
  }
  function resizeUploadWindow(button){
    id = $(button).closest('.program').attr('id');
	
	if($('#'+id).hasClass('maxWindow')){
	  
	   
		$('#'+id).removeClass('maxWindow');
		$('#'+id).animate({width: "600px",height: "435px"});
		$('#'+id).css('padding','0');
		$
	}
	else{
        
		
		$('#'+id).addClass('maxWindow');
	    $('#'+id).animate({width: "100%",height:$('#desktop').height()-13});
		$('#'+id).css('padding','0');
		
		
		
		
		
		
	}
	
   
}