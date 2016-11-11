 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
function setGips(id,class_program,file_name){
    
	  $('.'+class_program+"_gips").css('width','230px;');
	   $('#bar_bottom').find('a[program="'+class_program+'"]').closest('li').css('display','block');

	 $('.'+class_program+'.gip').gips({ 'theme': 'blue', green: 'top',
		     text: 
			  '<div id="'+id+'_gip" class="tab_program"><a class="program_reference" id="'+id+'_show" href="#" onclick="showProgramByGip(this)" href="">'+
			  class_program+' - <span>'+file_name+'</span><div style="width:100%;"><img class="thumb" style="height:80px;" src="images/thumbs/'+class_program+'_thumb.png"></div></a><a href="#" class="a_close" onclick="closeGipProgram(this)">'+
			  '<img src="images/close.png" class="program-close"  alt="close"></a></div>' 
			  
			  });
			  $('.'+class_program+"_gips").closest('.gips-container').hide();

}
function insertGip(id,class_program,file_name){
     
	
	 $('.'+class_program+"_gips").find('.tab_program').last().after(
		    
			  '<div id="'+id+'_gip" class="tab_program"><a class="program_reference" id="'+id+'_show" href="#"  onclick="showProgramByGip(this)" href="">'+
			  class_program+' - <span>'+file_name+'</span><div style="width:100%;"><img class="thumb" style="height:80px;" src="images/thumbs/'+class_program+'_thumb.png"></div></a><a href="#" class="a_close" onclick="closeGipProgram(this)">'+
			  '<img src="images/close.png" class="program-close"  alt="close"></a></div>');
			  
	contGip(class_program);	
    
	 $('.'+class_program+"_gips").closest('.gips-container').hide();

}
function contGip(class_program){
   cont=0;
   $('.'+class_program+"_gips").find('div.tab_program').each(function(){
       cont++;
   });
   $('.'+class_program+"_gips").css('width',220*cont+'px');
}



function closeGipProgram(elemento){
   id_gip = $(elemento).closest('div.tab_program').attr('id');
   id_program = id_gip.substring(0,id_gip.lastIndexOf('_gip'));
   class_program = id_program.substring(0,id_program.lastIndexOf('_'));
     $('#'+id_program).hide()
     if(!$('.'+class_program+'.gip').hasClass('fadegip')){
		     $('#'+id_program).remove();
		}
  
    if($('#'+id_gip).closest('div.gips-container').find('div.tab_program').size() ==1){
	   $('#'+id_gip).closest('div.gips-container').hide().remove();
	    if(!$('#bar_bottom').find('a[program="'+class_program+'"]').closest('li').hasClass('fixed')){
	       $('#bar_bottom').find('a[program="'+class_program+'"]').closest('li').css('display','none');
		}
	}else{
   
       $('#'+id_gip).hide().remove();
    }
	
   contGip(class_program);	
  

}
function closeAllGipProgram(elemento){
  
   $(elemento).closest('div.gips-container').find('div.tab_program').each(function(){
        id_gip = $(this).attr('id');
        id_program = id_gip.substring(0,id_gip.lastIndexOf('_gip'));
		class_program = id_program.substring(0,id_program.lastIndexOf('_'));
		$('#'+id_program).hide();
		if(!$('.'+class_program+'.gip').hasClass('fadegip')){
		     $('#'+id_program).remove();
		}
		 if(!$('#bar_bottom').find('a[program="'+class_program+'"]').closest('li').hasClass('fixed')){
	       $('#bar_bottom').find('a[program="'+class_program+'"]').closest('li').css('display','none');
		}
		
   });
   
   
   $(elemento).closest('div.gips-container').hide().remove();
    
}
function showProgramByGip(elemento){
   id_reference = $(elemento).attr('id');
   id_program = id_reference.substring(0,id_reference.lastIndexOf('_show'));
   $('#'+id_program).show();
}
function closeProgramGip(id_program){
 
    class_program = id_program.substring(0,id_program.lastIndexOf('_'));
	
    if($('#'+id_program+"_gip").closest('div.gips-container').find('div.tab_program').size() ==1){
	   $('#'+id_program+"_gip").closest('div.gips-container').hide().remove();
	   if(!$('#bar_bottom').find('a[program="'+class_program+'"]').closest('li').hasClass('fixed')){
	       $('#bar_bottom').find('a[program="'+class_program+'"]').closest('li').css('display','none');
		}
	}else{
   
       $('#'+id_program+"_gip").hide().remove();
	  
    }
  
  contGip(class_program);	
 

}
