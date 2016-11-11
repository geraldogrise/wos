
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */



function callWindowSdate(id){
       
       moveClock(id);
 
	   setInterval( function() {
			var seconds = new Date().getSeconds();
			var sdegree = seconds * 6;
			var srotate = "rotate(" + sdegree + "deg)";
			$('#'+id).find(".secs").css({"-moz-transform" : srotate, "-webkit-transform" : srotate});
					  
		}, 1000 );
		
        setInterval( function() {
             var hours = new Date().getHours();
             var mins = new Date().getMinutes();
             var hdegree = hours * 30 + (mins / 2);
             var hrotate = "rotate(" + hdegree + "deg)";
             $('#'+id).find(".hours").css({"-moz-transform" : hrotate, "-webkit-transform" : hrotate});
                  
        }, 1000 );
        
        
         setInterval( function() {
			  var mins = new Date().getMinutes();
			  var mdegree = mins * 6;
			  var mrotate = "rotate(" + mdegree + "deg)";
			  $('#'+id).find(".mins").css({"-moz-transform" : mrotate, "-webkit-transform" : mrotate});
                  
          }, 1000 );

	
}
function moveClock(id){ 
   	momentoAtual = new Date() 
   	hora = momentoAtual.getHours() 
   	minuto = momentoAtual.getMinutes() 
   	segundo = momentoAtual.getSeconds() 
    if(segundo < 10){
	  segundo = "0"+segundo;
	}
	if(minuto < 10){
	  minuto = "0"+minuto;
	}
	if(hora < 10){
	  hora = "0"+hora;
	}
   	horaImprimivel = "   "+hora + " : " + minuto + " : " + segundo; 

   $('#'+id).find('.time_wos').val(horaImprimivel); 

   	setTimeout("moveClock('"+id+"')",1000); 
} 




