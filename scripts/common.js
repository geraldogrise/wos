 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
function setMultiple(id){

$('#'+id).find('.multipleSelect').each(function(){
	$(this).selectator({
		labels: {
		  search: 'Search here...'
		},
		showAllOptionsOnFocus: true,
		keepOpen: false
	});
	
	
});


/* $('#'+id).find('.multipleSelect').selectator({
	labels: {
	  search: 'Search here...'
	},
    showAllOptionsOnFocus: true,
	keepOpen: true
});*/


}
function changeTab(tab,class_show){
    id = $(tab).closest('div.program').attr('id');
	$('#'+id).find('.grise_tab').hide();
	$('#'+id).find('.'+class_show).show();
	$('#'+id).find('li').removeClass('active');
	$(tab).closest('li').addClass('active');
}

function getElementByRemove(id_lista,id_anterior,local){
	
	
	var assoc_ant ="";
	if($(id_anterior).size() > 0){
	   assoc_ant =$(id_anterior).val();
	}
	
	
	var arrayAssoc =[];
	
	if(assoc_ant!="" && assoc_ant != undefined ){
	   arrayAssoc= assoc_ant.split(',');
	}
	separador="";
	excluidos = "";
    if($(id_lista).val() != null){
		 listaV =""+ $(id_lista).val();
		
		 arrayLista =listaV.split(',');
		 var cont = 0;
			while(cont < arrayAssoc.length){
			  
				  
				 var in_array = arrayLista.indexOf(arrayAssoc[cont]);
					 if(in_array == -1 ){
					   excluidos +=separador +arrayAssoc[cont]; 
					   separador=",";
					  }
				
				  cont++;
			}
	}
	
	
	$(local).val(excluidos);
}
function getElementByAdd(id_lista,id_anterior,local){
	
	
	var assoc_ant = "";
    if($(id_anterior).size() > 0){
	   assoc_ant =$(id_anterior).val();
	}
	
	
	var arrayAssoc =[];
	if(assoc_ant!=""){
	   arrayAssoc= assoc_ant.split(',');
	}
	separador="";
	adicionados = "";
	 if($(id_lista).val() != null){
		 listaV =""+ $(id_lista).val();
		 arrayLista =listaV.split(',');
		var cont = 0;
		while(cont < arrayLista.length){
			var in_array = arrayAssoc.indexOf(arrayLista[cont]);
			 if(in_array == -1 ){
			   adicionados +=separador +arrayLista[cont]; 
			   separador=",";
			  }
		
		  cont++;
		}
	 }
  
	$(local).val(adicionados);
}


function getCurrentList(id,classe){
    arrayLista=[];
	//id =$(button).closest('div.program').attr('id');
    objs =$('#'+id).find("."+classe).folderselect('selected');
	 $.each(objs, function(key, obj){
		arrayLista.push(obj.payload.id);
	
     });
	 return arrayLista;
 
}

function getPreviousSelected(id,classe,input_prev){
  anterior="";
  separator="";
  objs =$('#'+id).find("."+classe).folderselect('selected');
  $.each(objs, function(key, obj){
    anterior += separator+obj.payload.id;
	separator = ",";
	
   });
   
  $('#'+id).find('.'+input_prev).val(anterior);

}

function getComponentSide(id,controller,call_function){
    var file =  $('#'+id).find('.file_path').val();
	var path =  "";
	if($('#'+id).find('.folder_path').size() > 0){
	   path= $('#'+id).find('.folder_path').val();
	}
	
	
	
    var dados ="action=getselect&file="+ file+"&path="+path;
	
	
	
    $.ajax({
            type      : 'post',
 
            url       :'system/controller/'+controller+'Controller.php',
 
            data      : dados,
 
            dataType  : 'html',
 
                success : function(json){
                    
					
					 var djson = "";
					var json_feed =  "";
					if(file != ""){
					  feed = json.substring(0,(json.length - 1));
					  json_feed='"type": "folder", "content": ['+feed+ ']';
					  djson =JSON.parse('{'+json_feed+'}'); 
					}
					else{
					  
					  
					   djson =JSON.parse('{'+json+'}'); 
					 
					}
					
					
					
				     
					 
					  eval(call_function+"(id,djson)");
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
				 }
				
        });


}

function saveAll(id,controller,call_function,dados_envio){

    var dados =dados_envio;
	
	
	
    $.ajax({
            type      : 'post',
 
            url       :'system/controller/'+controller+'Controller.php',
 
            data      : dados,
 
            dataType  : 'json',
 
                success : function(json){
                
				   if(json.is_erro+"" == "false"){
				     callWindowMessage("","sucess","Sucess",json.msg);
                   }
                   else{
                	 callWindowMessage("","error","Error",json.msg);
                   }
				   
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
				 }
				
        });


}
function saveInstall(id,controller,call_function,dados_envio){

    var dados =dados_envio;
	
	
	
    $.ajax({
            type      : 'post',
 
            url       :'system/controller/'+controller+'.php',
 
            data      : dados,
 
            dataType  : 'json',
 
                success : function(json){
                  if(json.is_erro+"" == "false"){
				     callWindowMessage("","sucess","Sucess",json.msg);
                   }
                   else{
                	 callWindowMessage("","error","Error",json.msg);
                   }
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
				 }
				
        });


}
function getElementRemoves(id,lista,local_ant){
	
	
	var assoc_ant =""+ $('#'+id).find('.'+local_ant).val();
	
	var arrayAssoc =[];
	if(assoc_ant!=""){
	   arrayAssoc= assoc_ant.split(',');
	}
	separador="";
	excluidos = "";
  
		
		
		 arrayLista =lista;
		 var cont = 0;
			while(cont < arrayAssoc.length){
			  
				  
				 var in_array = arrayLista.indexOf(arrayAssoc[cont]);
					 if(in_array == -1 ){
					   excluidos +=separador +arrayAssoc[cont]; 
					   separador=",";
					  }
				
				  cont++;
			}
	
	
	return excluidos;
	
}
function getElementAdds(id,lista,local_ant){
	
	
	var assoc_ant =""+ $('#'+id).find('.'+local_ant).val();
	var arrayAssoc =[];
	if(assoc_ant!=""){
	   arrayAssoc= assoc_ant.split(',');
	}
	separador="";
	adicionados = "";
	
		
		arrayLista = lista;
		var cont = 0;
		while(cont < arrayLista.length){
			var in_array = arrayAssoc.indexOf(arrayLista[cont]);
			 if(in_array == -1 ){
			   adicionados +=separador +arrayLista[cont]; 
			   separador=",";
			  }
		
		  cont++;
		}
	 
     return adicionados;
	
}


function get(id,controller,local,dados_envio,call_function){

   $("#"+id).find("."+local).html("");
    var dados =dados_envio; 
	
	
    $.ajax({
            type      : 'post',
 
            url       :'system/controller/'+controller+'Controller.php',
 
            data      : dados,
 
            dataType  : 'html',
 
                success : function(html){
                       $("#"+id).find("."+local).html(html).show();
					  
					   eval(call_function);
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
				 }
				
        });


}

function UcFirst(text){
  text = text.charAt(0).toUpperCase()+text.substr(1);
  return text;

}




