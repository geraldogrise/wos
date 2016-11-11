 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
function download(){
   
         files = [];
		  $('div.selected').each(function(){
			    path_desf = $(this).attr('path').replace(/\#/g, "\\");
	   	        path =  imageFormat("",path_desf);
		    	 //downloadURL("system/directory/download.php?file="+path);
			     files.push(path);
				 
	       });
          var downloads= setInterval(function(){ 
		   
		         
				downloadURL("system/directory/download.php?file="+files.pop());
                 if(files.length == 0){
				      clearInterval(downloads);
				 }
				

			  }, 
		      
		   3000);	   
		   
		   fileCopy="";
         




}


function downloadURL(url) {
    var hiddenIFrameID = 'hiddenDownloader',
        iframe = document.getElementById(hiddenIFrameID);
    if (iframe === null) {
        iframe = document.createElement('iframe');
        iframe.id = hiddenIFrameID;
        iframe.style.display = 'none';
        document.body.appendChild(iframe);
    }
    iframe.src = url;
};
