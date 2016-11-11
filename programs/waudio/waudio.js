
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
var id_program = "";
var contwWaudio = 0;




function callWindowWaudio(id,pathAudio){
 
	setWAudio(id);
	setInterval(function(){ play_or_stop_animation(id); }, 1000);
   if(pathAudio !=""){
       pathAudio = pathAudio.replace(":#", "//").replace(/\#/g, "/");
	  $('#'+id).find('audio').find('source').attr('src',pathAudio);
	}
   
  
   

}
function openWAudioExplore(button,id_program){
		
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
		
		
		
	
	   $('#'+id_program).find('.wrapper_audio').html("");
	    $('#'+id_program).find('.wrapper_audio').html("<audio preload='auto' controls><source src='"+pathAudio+"'></audio>");
		
	  callWindowWaudio(id_program,pathAudio);
	  
	  
	 
	
										
										
									
	  
      closeWExplore(id,"only_close"); 

}


function setWAudio(id_audio){
  $('#'+id_audio + ' audio' ).audioPlayer();

}
function play_or_stop_animation(id){
 
    if($("#"+id).find('.audioplayer-playing').size() > 0){
	   $('#'+id).find('.img_animated').show();
	}
	else{
	   $('#'+id).find('.img_animated').hide();
	}
 
} 






	 