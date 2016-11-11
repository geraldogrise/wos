 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
 function toggleMenu(){
 
  
   $( "#metropanel" ).toggle( "slide", function() {
      
	  browser = detectBrowser();
	      
	   if(browser == "Firefox"){
		 
		   $('#metropanel').css('height','93.5%');
		
	   }
	  
	   else if(browser == "IE"){
		 
		   $('#metropanel').css('height','93.7%');
		
	   }
    
   });
   if ($("#mp-submenusholder").is(":visible") == true){
    
	  showSubmenu();
   }
   
   
  
  
 }
  function showSubmenu(){
     
	 $('#mp-submenusholder').toggle( 'slide' );
 }

 
 function getListPrograms(action,program,group,type){
 
 id_user = $('#user_system_id').val();
 id_group = $('#group_system_id').val();
 
 var x = $.ajax({
			   type : 'post',
			   url  : 'system/controller/startController.php',
			   data:  'action='+action+'&program='+program+'&group='+group+'&type='+type+"&id_user="+id_user+"&id_group="+id_group,
			   dataType  : 'HTML',

				  success : function(retorno){
						 
						if(type == "submenu"){
							$('#mp-submenus').html(retorno);
							$('.top_group').css('margin-top','30px');
						}
						else if(type =="menu"){
						 
						  $('.mp-menu.last').after(retorno);
						 
						}
						
										
				  }, 
				  error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
			      }
                 			  

			 });
 }
 function search_programs(button){
      
	   valor = $('#mp-searchbox').val();
	 
	   if(valor != $('#mp-searchhidden').val()){
			   $('.mp-menu').each(function(){
				   id = ($(this).attr('id')+"").toLowerCase();
				   if($(this).hasClass('default')){
						$(this).hide();
				   }
				   else if(id.indexOf(valor.toLowerCase()) !=-1){
					   $(this).show();
				   }
				  
			   
			   });
		}
		else{
		     $('.mp-menu').each(function(){
				   id = ($(this).attr('id')+"").toLowerCase();
				   if($(this).hasClass('default')){
						$(this).show();
				   }
				   else if(id.indexOf(valor.toLowerCase()) !=-1){
					   $(this).hide();
				   }
				  
			   
			   });
		}
 
 }

 