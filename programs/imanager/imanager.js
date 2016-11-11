var id_program = "";
var contImanager = 0;




function callWindowImanager(elemento,id,callBackFuntion,tipo,function_button,folder,filtro){
 
   var klon = $( '#'+id+"_"+  "0");
   contImanager++;

  if(!$(elemento).hasClass('menuClick')){
     	$(elemento).addClass('menuClick');
  }
 
    clone = klon.clone(true);
	clone.attr('id',id+"_"+contImanager).insertAfter(klon).fadeIn();
	if(tipo != "open" && tipo !="save" ){
	  
			
			$('#'+id+"_"+contImanager).resizable({
				containment: "#wrapper",
				stop: function( event, ui ) {
					$('#'+id+"_"+contImanager).find('.window_aside').height($('#'+id+"_"+contImanager).height()-60);
				}				
			});
	}
	local = id+"_"+contImanager;
	allowDrag(local);
	addZindex(id+"_"+contImanager); 
	 if($('.imanager.program').size() <=2){
	 
	   setGips(id+"_"+contImanager,id,'');
	}else{
	   insertGip(id+"_"+contImanager,id,'');
	}
	
	
	
   eval(callBackFuntion);	
  

  
				
   

}

function resizeImanager(button){
   
   id = $(button).closest('.program').attr('id');
   
    if($("#"+id).hasClass('maxWindow')){
	   
		
		

	
	}else{
	  
	}
	
}

function resizeWindowImanager(button,callBackfunction){
    id = $(button).closest('.program').attr('id');
	
	if($('#'+id).hasClass('maxWindow')){
	  
	   
		$('#'+id).find('.window_aside').height("345px");
		
		$('#'+id).removeClass('maxWindow');
		
		$('#'+id).animate({width: "640px",height: "400px"}).promise().done(function ()
		{
			 
			 eval(callBackfunction);
		});
		$('#'+id).css('padding','0');
		$('#'+id).css('position','absolute');
		
      
	}
	else{
        $('#'+id).addClass('maxWindow');
		
		
		$('#'+id).find('.window_aside').height($('#desktop').height()-80);
		$('#'+id).animate({width: "100%",height:$('#desktop').height()-13}).promise().done(function ()
		{
			
			 eval(callBackfunction);
			
		});
		
	
	}
	
	
	
	
   
}
function showInsertPopup(button){
     id = $(button).closest('div.program').attr('id');
     $('.gallery_insert').show();
}



	
	 

