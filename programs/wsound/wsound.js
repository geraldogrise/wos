
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */




function callWindowWSound(id,pathSound){
 
	
	if(pathSound !="" && pathSound != null){
       pathSound = pathSound.replace(":#", "//").replace(/\#/g, "/");
	  $('#'+id).find('audio').find('source').attr('src',pathSound);
	  buildWSoundGallery(id,pathSound);
	}else{
	   audiolist = $('#'+id).find('.list_audios').html();
	   $('#'+id).find('.sm2-playlist-bd').html(audiolist);
	}
    $('#'+id).find('.bd.sm2-playlist-drawer').height("147px"); 
   

}
function openWSoundExplore(button,id_program){
		
		name_file = $("#"+id_program).find('.name_file').val();
		var id = $(button).closest('.program').attr('id');
	    local = $('#'+id).find('.search_explore').val(); 
		name = $("#"+id).find('.file_a').val();
	    app_directory=$('#app_directory').val();//.replace(/\#/g, "/");
		 
		pathAudio = "";
		if(app_directory.indexOf("#www#") != -1){
			app_directory = app_directory.split("#www#")[0].replace(/\#/g, "/");
			app_directory = app_directory+"/www";
			pathAudio= name.replace(/\\/g, "/").replace(app_directory, "");
		}else{
		   app_directory = app_directory.replace(/\#/g, "/");
		   pathAudio="/"+ name.replace(/\\/g, "/").replace(app_directory.replace("wos", ""), "");
		 } 
		
	  callWindowWSound(id_program,pathSound);
	  
      closeWExplore(id,"only_close"); 

}
function closeWSound(button){
  soundManager.stopAll();
  class_program = "wsound";
   if(!$('#bar_bottom').find('a[program="'+class_program+'"]').closest('li').hasClass('fixed')){
	       $('#bar_bottom').find('a[program="'+class_program+'"]').closest('li').css('display','none');
	}
}

function buildWSoundGallery(id_wsound,pathGallery){
   
	pathGallery =pathGallery.replace(/\\/g, "\#");
	
	pathHttp = pathGallery.substring(pathGallery.indexOf("www#"));
    pathHttp= location.protocol+":#"+location.hostname+"#"+pathHttp;
     var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/wsoundController.php',
			   data:  'action=buildGallery&gallery='+pathGallery+"&pathHttp="+pathHttp,
			   dataType  : 'HTML',

				  success : function(retorno){
						
						
						$('#'+id_wsound).find('.sm2-playlist-bd').html(retorno);
						
						
										
				  }, 
				   error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				        callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		          }		
                 			  

			 });


}









	 