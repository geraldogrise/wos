 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

var contWvideo = 0;
var fileCopy ="";
var actionIO="";
var ctrl = false;
var contZ_index=20;
 


function addZindex(id){
   
	contZ_index = contZ_index+1;
    $("#"+id).css('z-index',contZ_index);	
}

function setScroll(id_explore,typeScroll,local){
                
		  local.mCustomScrollbar({
					theme:typeScroll
			});
			
			
}

function callWindow(elemento,id,callBackFuntion,pathProgram){

   var klon = $( '#'+id+"_"+  "0");
   var cont_program = (Math.random()*1000+"").replace(".","");
   
   if(!$(elemento).hasClass('menuClick')){
     	$(elemento).addClass('menuClick');
  }
    clone = klon.clone(true);
	clone.attr('id',id+"_"+cont_program).insertAfter(klon).fadeIn();
	
	allowDrag(id+"_"+cont_program);
	addZindex(id+"_"+cont_program);
    
   if($('.'+id+'.program').size() <=2){
	
	   setGips(id+"_"+cont_program,id,pathProgram);
	}else{
	   
	   insertGip(id+"_"+cont_program,id,pathProgram);
	}
	 eval(callBackFuntion+"('"+id+"_"+cont_program+"','"+pathProgram+"')");
	 
	
	 
	
}
function callWindowWithParameter(elemento,id,callBackFuntion,pathProgram,parameter){

   var klon = $( '#'+id+"_"+  "0");
   var cont_program = (Math.random()*1000+"").replace(".","");
   
   if(!$(elemento).hasClass('menuClick')){
     	$(elemento).addClass('menuClick');
  }
    clone = klon.clone(true);
	clone.attr('id',id+"_"+cont_program).insertAfter(klon).fadeIn();
	
	allowDrag(id+"_"+cont_program);
	addZindex(id+"_"+cont_program);
  
 
   if($('.'+id+'.program').size() <=2){
	 
	   setGips(id+"_"+cont_program,id,pathProgram);
	}else{
	   insertGip(id+"_"+cont_program,id,pathProgram);
	}
	 eval(callBackFuntion+"('"+id+"_"+cont_program+"','"+pathProgram+"','"+parameter+"')");
	 
	
	 
	
}
function callWindowFade(elemento,id,callBackFuntion){

  $( '#'+id+"_"+  "0").fadeIn();
  cont_program = 0;
 
  if(!$(elemento).hasClass('menuClick')){
     	$(elemento).addClass('menuClick');
  }
   
	class_p = $(elemento).attr('program');
	
 
    allowDrag(id+"_"+cont_program); 
    addZindex(id+"_"+cont_program);	
	if($('#'+id+"_"+cont_program+'.program').size() <=2){
	 
	   setGips(id+"_"+cont_program,id,'');
	}else{
	   insertGip(id+"_"+cont_program,id,'');
	}
	

	if(callBackFuntion !=""){
	
	   eval(callBackFuntion+"('"+id+"_"+cont_program+"')");
	}
	
	
}


function showPopup(button,popup_class){

  id = $(button).closest('div.program').attr('id');

   $('#'+id).find('.'+popup_class).show();
  
}


function closeWindowFade(button,callBackFuntion){
    id = $(button).closest('.program').attr('id');
	$('.'+id.split('_')[0]).removeClass('menuClick');
	$('#'+id).fadeOut();
	eval(callBackFuntion);
	closeProgramGip(id);

}
  
function closeWindow(button,callBackFuntion){
    id = $(button).closest('.program').attr('id');
    classe =id.substring(0,id.lastIndexOf('_'));
	$('.'+classe).removeClass('menuClick');
	closeProgramGip(id);
	
	$('#'+id).remove();
	eval(callBackFuntion);

}
function minWindow(button){
    id = $(button).closest('.program').attr('id');
	 options = { percent: 0 };
	$('#'+id).hide( "scale",options,1000 );
	
   
}
function resizeWindow(button,callBackfunction){
    id = $(button).closest('.program').attr('id');
	
	if($('#'+id).hasClass('maxWindow')){
	  
	   
		$('#'+id).removeClass('maxWindow');
		$('#'+id).animate({width: "640px",height: "450px"}).promise().done(function ()
		{
			 
			 eval(callBackfunction);
		});
		$('#'+id).css('padding','0');
		$('#'+id).css('position','absolute');
		
      
	}
	else{
        $('#'+id).addClass('maxWindow');
		
		
		$('#'+id).css('padding','10px');
	    $('#'+id).animate({width: "100%",height:$('.workarea').height()-6}).promise().done(function ()
		{
			
			 eval(callBackfunction);
			
		});
		
	
	}
	
	
	
	
   
}


function setWindowPosition(button){
         id = $(button).closest('.program').attr('id');
		
		if($('#'+id).hasClass('maxWindow')){
			$('#'+id).css('top','5%');
			$('#'+id).css('left','25%');
		}
		else{
		   $('#'+id).css('top','0');
		   $('#'+id).css('left','0');
		}

}
function allowDrag(id){
  

      $('#'+id).draggable({ 
		 handle: $('#'+id).find('.window_top'), 
		  containment: ".workarea", 
		  scroll: false ,
		  cursor: "crosshair", 
		  cursorAt: { top: -20, left: -20 }
		
	});
}
function allowDragPopup(elemento){
  

      $(elemento).draggable({ 
		 handle: $(elemento).find('.window_top_popup'), 
		  containment: ".workarea", 
		  scroll: false ,
		  cursor: "crosshair", 
		  cursorAt: { top: -20, left: -20 }
		
	});
}
function setSelectable(id){

}
function openWExplore(elemento,ofunction,type,filtro){
 id_program = $(elemento).closest('div.program').attr('id');
 function_call= "";
 function_call=ofunction+"(this,'"+id_program+"')";
 callWindowWExplore(elemento,'wexplore','',type,function_call,'',filtro);

}




function setDroppable(local){

       $(local +" .droppable" ).droppable({
            
           drop:function(event,ui){
                 
					var origem = ui.helper.attr('path');
                    var destino = $(this).attr('path');
            
                    moveFiles(current_explore_window,$('#current_desktop').val(),origem,destino);
				
				  
            }, 
			
			 

        });
}

function setDraggable(local,classe,containment){
  
 
    $("#"+local+ " ."+classe).draggable({
	        containment:containment,
			
		//	handle: $("#"+local+ " ."+classe).find('img'), 
			
			
	});

          

    
}




function imageFormat(id_program,url){
   servername = location.hostname;
   protocol=  location.protocol;
  
   if(url.indexOf('www')!=-1){
      url= url.substring(url.indexOf('www')+4);
   }else if(url.indexOf('htdocs\\')!=-1){
     
	  url = url.split("htdocs")[1];
   }
   url = url.replace(/\\/g, "\/");
   
   httpUrl = protocol+"//"+servername+"/"+url;
    
  return httpUrl;

}
function setSoundPathImage(elemento,id_program){
    id_explore = $(elemento).closest('div.program').attr('id');
	file_a = $('#'+id_explore).find('.file_a').val();

	httpUrl = imageFormat(id_program,file_a);
	$("#"+id_program).find('.cover').attr('src',httpUrl);
	$('#'+id_program).find('.image_path').val(httpUrl);
	 closeWExplore(id_explore,"only_close");
//	$('#'+id_explore).remove();
}
function setSoundPathGallery(elemento,id_sound){
  
   id_explore = $(elemento).closest('div.program').attr('id');
	file_a = $('#'+id_explore).find('.file_a').val();
	$('#'+id_sound).find('.gallery_path').val(file_a);
	 closeWExplore(id_explore,"only_close");
	//$('#'+id_explore).remove();
}
function setUploadFolder(elemento,id_upload){
  
   id_explore = $(elemento).closest('div.program').attr('id');
	file_a = $('#'+id_explore).find('.file_a').val();
	$('#'+id_upload).find('.gallery_path').val(file_a);
	$('#'+id_upload).find('.folder_hidden').val(file_a);
	closeWExplore(id_explore,"only_close");
	//$('#'+id_explore).remove();
}
function validateInputs(id_prog){
   cont = 0;
   isValid = true;
   $('#'+id_prog).find('input.required').each(function(){
        if($(this).val() == ""){
		   	$(this).css('border-color',"#D41E28");
		    $(this).css('background',"#FF8CA2");
			isValid = false;
			cont++;
		}else{
		  	$(this).css('border-color',"#CCCCCC");
		    $(this).css('background',"#FFFFFF");
		}
	});
	return isValid;
}










