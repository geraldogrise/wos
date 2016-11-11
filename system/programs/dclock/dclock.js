 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */



function callWindowDClock(id){
 
  
  
	   setInterval( function() {
			var seconds = new Date().getSeconds();
			var sdegree = seconds * 6;
			var srotate = "rotate(" + sdegree + "deg)";
			$('#'+id).find(".sec").css({"-moz-transform" : srotate, "-webkit-transform" : srotate});
					  
		}, 1000 );
		
        setInterval( function() {
             var hours = new Date().getHours();
             var mins = new Date().getMinutes();
             var hdegree = hours * 30 + (mins / 2);
             var hrotate = "rotate(" + hdegree + "deg)";
             $('#'+id).find(".hour").css({"-moz-transform" : hrotate, "-webkit-transform" : hrotate});
                  
        }, 1000 );
        
        
         setInterval( function() {
			  var mins = new Date().getMinutes();
			  var mdegree = mins * 6;
			  var mrotate = "rotate(" + mdegree + "deg)";
			  $('#'+id).find(".min").css({"-moz-transform" : mrotate, "-webkit-transform" : mrotate});
                  
          }, 1000 );

	
}




