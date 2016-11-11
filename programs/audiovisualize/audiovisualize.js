
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */




function callWindowAudiovisualize(id,pathSound){
 
	
	if(pathSound !="" && pathSound != null){
       pathSound = pathSound.replace(":#", "//").replace(/\#/g, "/");
	   $('#audiovisualize').attr('src',pathSound);
	 
	}
   
	var audio = document.getElementById('audiovisualize');
	audio.play();
   

}
function openAudiovisualize(button,id_program){
		
		name_file = $("#"+id_program).find('.name_file').val();
		var id = $(button).closest('.program').attr('id');
	    local = $('#'+id).find('.search_explore').val(); 
		name = $("#"+id).find('.file_a').val();
		app_directory=$('#app_directory').val();//.replace(/\#/g, "/");
	   	app_directory = app_directory.split("#www#")[0].replace(/\#/g, "/");
		app_directory = app_directory+"/www";
		 app_directory=$('#app_directory').val();//.replace(/\#/g, "/");
		pathSound = "";
		if(app_directory.indexOf("#www#") != -1){
			app_directory = app_directory.split("#www#")[0].replace(/\#/g, "/");
			app_directory = app_directory+"/www";
			pathSound= name.replace(/\\/g, "/").replace(app_directory, "");
		}else{
		   app_directory = app_directory.replace(/\#/g, "/");
		   pathSound="/"+ name.replace(/\\/g, "/").replace(app_directory.replace("wos", ""), "");
		  
		}
		
	
	
		
	  callWindowAudiovisualize(id_program,pathSound);
	  
      closeWExplore(id,"only_close"); 

}
function closeAudiovisualize(button){
   var audio = document.getElementById('audiovisualize');
   class_program = "audiovisualize";
    if(!$('#bar_bottom').find('a[program="'+class_program+'"]').closest('li').hasClass('fixed')){
	       $('#bar_bottom').find('a[program="'+class_program+'"]').closest('li').css('display','none');
	}
   audio.pause();
}










	 