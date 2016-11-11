
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
var id_program = "";



function callWindowWvideo(id,pathVideo){

   
	resizeWvideo('#'+id);
	
	 if(pathVideo !=""){
       pathVideo = pathVideo.replace(":#", "//").replace(/\#/g, "/");
	   $('#'+id).find('video').attr('src',pathVideo);
	
   }
   eval("setMediaElement('"+id+"');");
	
   
				
   

}
function setMediaElement(id){

  
   idvideo = "player"+$('#'+id).find('audio,video').attr('id').split('_')[0];
  
   $('#'+id).find('audio,video').attr('id',idvideo);
    
	  $('#'+id).find('audio,video').mediaelementplayer({
				
				success: function(player, node) {
					$('#' + node.id + '-mode').html('mode: ' + player.pluginType);
					
				}
		});
		$('#'+id).find('.max').click();
		
		
}



function resizeWindowVideo(button,callBackfunction){
    id = $(button).closest('.program').attr('id');
	 
	// setWindowPosition(button);
	if($('#'+id).hasClass('maxWindow')){
	  
	  
		$('#'+id).removeClass('maxWindow');
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
		
	    $('#'+id).animate({width: "100%",height:$('#desktop').height()-13}).promise().done(function ()
		{
			
			 eval(callBackfunction);
			
		});
		
	
	}
	
	
	
	
   
}

function resizeVideo(button){
 
	var id = $(button).closest('.program').attr('id');
	
		
		
	if(!$('#'+id).hasClass('maxWindow')){
	     $('#'+id).find('video').attr('width','640px');
		 $('#'+id).find('video').attr('height','360px');
		
	    
	}else{
		 $('#'+id).find('video').attr('width',$('#'+id).width());
		 $('#'+id).find('video').attr('height',$('#desktop').height()-43);
		 $('#'+id).css('overflow-x','none') 
		
	}
	 htmlVideo = $('#'+id).find('video').parent().html();
		
		 
		 $('#'+id).find('video').closest('.modal-body').html('');
		 $('#'+id).find('.modal-body').html(htmlVideo);
		 
		
		 $('#'+id).find('audio,video').mediaelementplayer({
			success: function(player, node) {
				$('#' + node.id + '-mode').html('mode: ' + player.pluginType);
				
			}
	     });
	

}
function stopVideo(button){
     var id = $(button).closest('.program').attr('id');
	 $('#'+id).find('video,audio').each(function() {
		  $(this)[0].pause();
	});
	
}


function resizeWvideo(div){
		 

				
				$( div ).resizable({
					containment: "#desktop",
					 minHeight: 435,
					// alsoResize: div +" video",
					
					 start: function( event, ui ) {$(div).find('.mejs-video').hide()},
						
					stop: function( event, ui ) {
						
						$(this).find('video,audio').attr("width", ui.size.width);
						$(this).find('video,audio').attr("height",  ui.size.height -($(this).find('.window_top').height()+10));
						 htmlVideo = $(this).find('video').parent().html();
				
						
						 $(this).find('video').closest('.modal-body').html('');
						 $(this).find('.modal-body').html(htmlVideo);
						
								 
						 setMedia($(this).attr('id'));
					}
				});
				
	
		
}


	
function setMedia(id){
	  $('#'+id).find('audio,video').mediaelementplayer({
			success: function(player, node) {
				$('#' + node.id + '-mode').html('mode: ' + player.pluginType);
				
			}
	     });
	
}



function openWVideo(button,arquivo){
		
		var id = $(button).closest('.program').attr('id');
		$('#'+id).find('video').attr('src','/estudo/wos/programs/wvideo/media/nirvana.mp4');
		$('#'+id).find('audio,video').mediaelementplayer({
			success: function(player, node) {
				$('#' + node.id + '-mode').html('mode: ' + player.pluginType);
				
			}
	     });


}
function openWVideoExplore(button,id_program){
		
		name_file = $("#"+id_program).find('.name_file').val();
		var id = $(button).closest('.program').attr('id');
	    local = $('#'+id).find('.search_explore').val(); 
		name = $("#"+id).find('.file_a').val();
	    app_directory=$('#app_directory').val();//.replace(/\#/g, "/");
		app_directory = app_directory.split("#www#")[0].replace(/\#/g, "/");
		app_directory = app_directory+"/www";
		path= name.replace(/\\/g, "/").replace(app_directory, "");
		
		
		$('#'+id_program).find('video').attr('src',path);
		$('#'+id_program).find('audio,video').mediaelementplayer({
			success: function(player, node) {
				$('#' + node.id + '-mode').html('mode: ' + player.pluginType);
				
			}
	     });
      closeWExplore(id,"only_close"); 

}



