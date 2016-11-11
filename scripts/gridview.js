 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

function pesquisar(id,controller,form,local){

   $("#"+id).find(local).html("");
    var dados = $(form).serialize();
	
	
    $.ajax({
            type      : 'post',
 
            url       :'system/controller/'+controller+'Controller.php',
 
            data      : dados,
 
            dataType  : 'html',
 
                success : function(html){
                       $("#"+id).find(local).html(html).show();
				},
				error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
			     }
				
        });


}



function salvar(button,form,caminho){
	
	id = $(button).closest('div.program').attr('id');
	var dados = $('#'+id).find(form).serialize();
	
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
function save(button,dados_envio,caminho,call_function){
	
	id = $(button).closest('div.program').attr('id');
	var dados = dados_envio
	
    $.ajax({
          type      : 'post',

          url       :'system/controller/'+caminho+"Controller.php",

          data      : dados,

          dataType  : 'json',

             success : function(retorno){
                
            	  eval(call_function);
                 
                  
				  
              },
		    error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
			}
		
      });


}



function setPaginator2(elemento,page_input,controller,filtro,local){

   $(page_input).val($(elemento).attr('rel'));
   id = $(elemento).closest('div.program').attr('id');
   pesquisar(id,controller,filtro,local);
   
}

function getCombo(id,controller,local,action,vlr_default,function_callback){

   $("#"+id).find(local).html("");
    var dados = "action="+action+"&vlr_default="+vlr_default;
	
	
    $.ajax({
            type      : 'post',
 
            url       :'system/controller/'+controller+'Controller.php',
 
            data      : dados,
 
            dataType  : 'html',
 
                success : function(html){
                      $("#"+id).find(local).html(html).show();
					  eval(function_callback);
				},
				error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
			     }
				
        });


}
function getScreen(id,controller,local,action,vlr,function_callback){

  $("#"+id).find(local).html("");
    var dados = "action="+action+"&vlr="+vlr;
	
	
    $.ajax({
            type      : 'post',
 
            url       :'system/controller/'+controller+'Controller.php',
 
            data      : dados,
 
            dataType  : 'html',
 
                success : function(html){
                     
					
					   $("#"+id).find(local).html(html).show();
					     eval(function_callback);
				},
				error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
			     }
				
        });


}
function deleteTable(linhaativa,id_delete,caminho){
	
	
	//var dados = "action=delete&id="+id_delete;
	 var dados = { "action": "delete","id": id_delete};
	
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
                	  
                	  $(linhaativa).remove();
                  }
                
					  
					 
				
                	  
                	 
                  
				  
              },
		      error: function(XMLHttpRequest, textStatus, errorThrown){
		        
					 callWindowMessage("","error",UcFirst(textStatus),errorThrown);
					 
			  }
		
      });


}
function removeLine(button,class_tabela,controller){
	id =$(button).closest('div.program').attr('id');
	tabela = $('#'+id).find('.'+class_tabela);
	linhaativa = $(tabela).find('tr.active');
	id_line =$(linhaativa).attr('rel');
	deleteTable(linhaativa,id_line,controller);
	
	
}
function selectLine(tr){
	
	$(tr).closest('table').find('tr').removeClass('active');
	$(tr).addClass('active');
	
	
}
function selectProgramLine(tr){
	
	$(tr).closest('table').find('tr').removeClass('pactive');
	$(tr).addClass('pactive');
	
	
}
function getTableItem(button,class_tabela,controller){
	id =$(button).closest('div.program').attr('id');
	tabela = $('#'+id).find('.'+class_tabela);
	linhaativa = $(tabela).find('tr.active');
	id_line =$(linhaativa).attr('rel');
	return id_line;
}


