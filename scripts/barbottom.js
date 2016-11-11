 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
function callAllStickies(){

     callAllWindowStickies("notes");


}
function hoverBarBottom(){
  
	$("#bar_bottom").find("li").hover(
		  function () {
			$(this).addClass('hover');
			 hover_bottom = $(this).find('a').attr('program');
			
		  }, 
		  function () {
			$(this).removeClass('hover');
		  }
	);

}

function saveBarbottom(action,class_name,caminho){
	
	
	var dados = "action="+action+"&id_user="+$('#user_system_id').val()+"&class_name="+class_name;
	
    $.ajax({
          type      : 'post',

          url       :'system/controller/'+caminho+"Controller.php",

          data      : dados,

          dataType  : 'json',

             success : function(retorno){
                 
            	 
                 
                  if(retorno.is_erro+"" == "false"){
				         callWindowMessage("","sucess","Sucess",retorno.msg);
                	 
				  }
                  else{
                	  
                	  callWindowMessage("","error","Error",retorno.msg);
                  }
				  
              },
		    error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
		      }
		
      });


}