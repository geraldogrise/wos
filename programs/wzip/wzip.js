
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
var id_program = "";
var contZip = 0;




function callWindowWZip(id,pathZip){
 
 
	$( '#'+id ).resizable({
					containment: "#wrapper",
					
					distance: 1,
					start: function( event, ui ) { },
					stop: function( event, ui ) { 
					  
					},
	});
	

  
   if(pathZip!=""){
       openWZip(id,pathZip);
	   $('#'+id).find('.path_wzip').val(pathZip);
   }
  
  
   

}




function resizeWZip(button){
   
   id = $(button).closest('.program').attr('id');
   
    if($("#"+id).hasClass('maxWindow')){
	   
              $("#"+id).css('padding','0');
			
	}else{
	          $("#"+id).find('.container_text').height('321px');
			   $("#"+id).find('.content_list').height('300px');
			  
			
	}
	
}

function resizeWindowWZip(button,callBackfunction){
    id = $(button).closest('.program').attr('id');
	 
	 
	if($('#'+id).hasClass('maxWindow')){
	  
	  $('#'+id).find('.content').width("68.6%");
	    
		$('#'+id).removeClass('maxWindow');
		
		$('#'+id).animate({width: "670px",height: "420px"}).promise().done(function ()
		{
			 eval(callBackfunction);
		});
		$('#'+id).css('padding','0');
		$('#'+id).css('position','absolute');
		
      
	}
	else{
        $('#'+id).addClass('maxWindow');
		
		
		$('#'+id).css('padding','10px');
	    $('#'+id).animate({width: "100%",height:$('#desktop').height()-12}).promise().done(function ()
		{
			 eval(callBackfunction);
		});
		
		
	
	}
	
	
	
	
   
}


function openWZip(id_wzip,pathZip){
  

  pathZip=pathZip.replace(/\#/g, "\\");
  $.ajax({
            type      : 'post',
 
            url       :'system/controller/wzipController.php',
 
            data:   'path='+pathZip+"&action=readZip",
 
            dataType  : 'HTML',
 
                success : function(retorno){
                     
					 
				       
						 html = retorno.replace(/\@/g, "/")         
						 $('#'+id_wzip).find('.listview').html(html);
						 setScroll(id_wzip,"3d-dark",$('#'+id_wzip).find(".content_list")); 
						
					  
				  
                },
				error: function(HttpRequest, textStatus, errorThrown){
                    callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
				 
                }
				
        });
   
}


function openWZip_O(button,id_program){

  id = $(button).closest('.program').attr('id');
 
  $.ajax({
            type      : 'post',
 
            url       :'system/controller/wzipController.php',
 
            data:   'path='+$("#"+id).find('.file_a').val()+"&action=readZip",
 
            dataType  : 'HTML',
 
                success : function(retorno){
                     
					 
                          pathZip = $("#"+id).find('.file_a').val();
						  pathZip = pathZip.replace(/\\/g, "\#");
						 
						  html = retorno.replace(/\@/g, "/");         
						  $('#'+id_program).find('.listview').html(html);
						  $('#'+id_program).find('.path_wzip').val(pathZip);
						  setScroll(id_program,"3d-dark",$('#'+id_program).find(".content_list")); 
						  closeWExplore(id,"only_close"); 
					  
				  
                },
				error: function(HttpRequest, textStatus, errorThrown){
                  
				   callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
                }
				
        });
   
}

function saveWZip(button,id_program){
   
	id = $(button).closest('.program').attr('id');
    name = $("#"+id).find('.file_a').val();
	local = $('#'+id).find('.search_explore').val(); 
	
	
	path= local+"\\"+name;
	
      files="";
	  separator="";
	 $("#"+id_program ).find('.listview div.list').each(function(){
	      files+=separator+$(this).attr('path').replace(/\\/g, "\#");
	      separator=",";
	  
	  });	  
	
   
	 $.ajax({
            type      : 'post',
 
            url       :'system/controller/wzipController.php',
 
            data:   'path='+path+"&action=writeZip&files="+files+"&name="+name,
 
            dataType  : 'JSON',
 
                success : function(retorno){
                     
					 
				      if(retorno.is_erro == "true"){
					       callWindowMessage("","error","Error",retorno.msg);
						  
					  }
					  else{
                           	          
						   closeWExplore(id,"close_and_safe"); 
						
					  }
				  
                },
				error: function(HttpRequest, textStatus, errorThrown){
                  
				    callWindowMessage("","error",UcFirst(textStatus),errorThrown);
				 
                }
				
        });
}

function selectFileZip(button){
  
	if(!$(button).hasClass('active')){
	  $(button).addClass('active');
	} 
    else{
	   $(button).removeClass('active');
	}    

}

function deleteZipFiles(button){
     
      files="";
	  separator="";
	  id = $(button).closest('div.program').attr('id'); 
	  path = $('#'+id).find('.path_wzip').val();
	 
      
	  $("#"+id ).find('.listview div.list.active').each(function(){
	      files+=separator+$(this).attr('path');
	      separator=",";
	  
	  });	  
	  
	  $.ajax({
				type      : 'post',
	 
				url       :'system/controller/wzipController.php',
	 
				data:   'path='+path+"&action=deleteZipFile&files="+files,
	 
				dataType  : 'HTML',
	 
					success : function(retorno){
						 
						 
						 
							 html = retorno.replace(/\@/g, "/")         
						     $('#'+id).find('.listview').html(html);
							
						  
					  
					},
					error: function(HttpRequest, textStatus, errorThrown){
					  
					 
					    callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					}
					
			});
   
   

}
function extractZipFiles(button,id_program){
   
   
      
     	id = $(button).closest('.program').attr('id');
        name = $("#"+id).find('.file_a').val();
	    local = $('#'+id).find('.search_explore').val(); 
		name = name.replace(/\\/g, "\#");
		
	
		
	    path=name;
		zipfile =$('#'+id_program).find('.path_wzip').val();
         files="";
		 separator="";
		
		 
	  $("#"+id_program ).find('.listview div.list.active').each(function(){
	      files+=separator+$(this).attr('path');
	      separator=",";
	  
	  });	  
	 
	   $.ajax({
				type      : 'post',
	 
				url       :'system/controller/wzipController.php',
	 
				data:   'path='+path+"&action=extractZipFile&zipfile="+zipfile+"&name="+name+"&files="+files,
				
	 
				dataType  : 'JSON',
	 
					success : function(retorno){
						 
						 
						  if(retorno.is_erro == "true"){
						      callWindowMessage("","error","Error",retorno.msg);
						  }
						  else{
							
							  closeWExplore(id,"close_and_safe"); 
								
						}
					  
					},
					error: function(HttpRequest, textStatus, errorThrown){
					  
					    callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
					}
					
			});
   
   

}


function addZipFiles(button,id_program){
   
   
        id = $(button).closest('.program').attr('id');
		
        name = $("#"+id).find('.file_a').val();
	    local = $('#'+id).find('.search_explore').val(); 
		if(name!=""){
		  name = name.replace(/\\/g, "\#");
		}
	    path=name;
		
		
		zipfile =$('#'+id_program).find('.path_wzip').val().replace(/\\/g, "\#");
   
       files="";
	   separator="";
	
      if(zipfile ==""){
	     objetoFile = name.split(",");
		 
		 html =""; 
		     
		 for (i = 0; i < objetoFile.length; i++) { 
			  nameFile =name.substring(name.lastIndexOf("#")+1);
			  
			  imageFile ="folder";
			  if(name.lastIndexOf(".")>0){
			     imageFile = name.substring(name.lastIndexOf(".")+1);
			  }
			 
			 
			
			  html ="<div class='list' path='"+objetoFile+"' onclick='selectFile(this)'>"; 
		      html+="<img src='images/"+imageFile+".png' class='list-icon'><span class='list-title'>"+nameFile+"</span></div>";
		  }
	
		 if($("#"+id_program ).find('.listview div.list').size() >0){
		 
		     $("#"+id_program ).find('.listview div.list').last().after(html);
		 
		 }else{
		 
		     $("#"+id_program ).find('.listview').html(html);
			 
		 }
		
		 
		 
		 
	  
	  }else{
			files = name;
			

			 $.ajax({
					type      : 'post',
		 
					url       :'system/controller/wzipController.php',
		 
					data:   'path='+path+"&action=addZipFile&files="+files+"&zipfile="+zipfile,
		 
					dataType  : 'HTML',
		 
						success : function(retorno){
							 
							 
							 
								 html = retorno.replace(/\@/g, "/")         
						         $('#'+id_program).find('.listview').html(html);
								 
								  closeWExplore(id,"close_and_safe"); 
							  
						  
						},
						error: function(HttpRequest, textStatus, errorThrown){
						  
						  callWindowMessage("","error",UcFirst(textStatus),errorThrown);
						 
						}
						
				});
   		 
		
	  }
	  

}
function back_zip(div){

       pai= $(div).attr('pai');
	   id_zip=   $(div).closest('div.program').attr('id');
	   
		if(!$("#"+id_zip).find('.back').hasClass('ja_voltou')){
		  $("#"+id_zip).find('.back').addClass('ja_voltou');
		}
		else{
		    $("#"+id_zip).find('.back').removeClass('ja_voltou');
		}
			  
	  if($(div).hasClass('back')){
		   
		   $("#"+id_zip).find('.zip_elemento').each(function(){
			   
				if(pai == ($(this).attr('pai'))){
			   	  $(this).show();
				 }else{
				  $(this).hide();
				}
				
			});
		}
				
		 

}



function showZipFolder(div){
	     pai= $(div).attr('path');
		
		 $(div).removeClass('active');
		
		if(pai !=""){
			
		   id_zip=   $(div).closest('div.program').attr('id');
		   pai_attr = pai.substr(0,pai.lastIndexOf("#"));
		   pai_attr = pai.substr(0,pai_attr.lastIndexOf("#"));
	      
		  $("#"+id_zip).find('.back').attr('path',pai);
			$("#"+id_zip).find('.zip_elemento').each(function(){
				if(pai == ($(this).attr('pai')+"#") && $(this).attr('pai') !="" ){
				   $(this).show();
				}
				else{
				   $(this).hide();
				}
		     });
					  
		}
		
	}







	 