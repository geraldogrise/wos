  
function getAlterar(linha){
                			     
		 var linha = $(linha).parent().parent().attr('id');
		
		   arrayLinha = [];
		   $('#' + linha).addClass('editar');
			 /* jogado pra tr auxiliar */
		      $('.aux').html($('#'+linha+'.editar').html());
			  $('.aux td').each(function(){
				     
			     arrayLinha.push($(this).attr("value"));
			     
			  });
		 $('#action').val('Edit');
		 // limpando tr
		 $('#'+linha+'.editar').html("");
		 /*copiando tr incluir */
		 $('#'+linha+'.editar').html($('.incluir').html());
				  
		  cont = 0;
				  
		   $('#'+linha+'.editar td').each(function(){
				     
		    if(cont > 0){
		      $(this).find('input').attr('value',arrayLinha[cont]).addClass('update').removeClass('insert');
			  $(this).find('select').attr('value',arrayLinha[cont]).addClass('update').removeClass('insert');
			}
			
						   
    	   cont++;
	  });
	  desabilitaBtns('bt_alterar');
      desabilitaBtns('bt_excluir');
      desabilitaBtns('bt_incluir');
				  		     
							 
} 
function getAlterar2(linha,campoAction,tabela){
    
	
	var linha = $(linha).parent().parent().attr('id');
	
	   arrayLinha = [];
	  
	   $("#"+tabela+' #' + linha).addClass('editar');
		 /* jogado pra tr auxiliar */
	      $('#'+tabela+' .aux').html($('#'+tabela+' #'+linha+'.editar').html());
		  $('#'+tabela+' .aux td').each(function(){
			     
		     arrayLinha.push($(this).attr("value"));
		     
		  });
		 $("#"+campoAction).val('Edit');
		 // limpando tr
		 
		 $("#"+tabela+' #' + linha+'.editar').html("");
		 /*copiando tr incluir */
		 $("#"+tabela+' #' + linha+'.editar').html($('.incluir').html());
			  
		  cont = 0;
				  
		   $("#"+tabela+' #' + linha+'.editar td').each(function(){
				     
			    if(cont > 0){
			      $(this).find('input').attr('value',arrayLinha[cont]).addClass('update').removeClass('insert');
				  $(this).find('select').attr('value',arrayLinha[cont]).addClass('update').removeClass('insert');
				}
		
					   
	         cont++;
          });
		   configurarDatas("update");
 
 
 /*desabilitaBtns('bt_alterar');
 desabilitaBtns('bt_excluir');
 desabilitaBtns('bt_incluir');*/

			  		     
						 
} 
  
  

function mudaPagina(view){
   
     
    window.location.assign(view);


}

function mudaAba(controller,action){
   
      $.ajax({
            type      : 'post',
 
            url: controller + "/" + action,
 
            data      : null,
 
            dataType  : 'html',
 
            success : function(html){
                    $('#conteudo').html(html);
                }
        });


}



function cancelar(linha,action,tabela){
              

         if($('#'+tabela+' .acaotela' ).val() == "Insert"){
		   $(linha).parent().parent().hide(); 
		}
		else if($('#'+tabela+' .acaotela' ).val() == "Edit"){
		   id =$('.editar').attr('id');
		   $('#'+id+'.editar').html("");
		   $('#'+id+'.editar').html($('.aux').html());
		   $('#'+id).removeClass('editar');
		   $('.aux').html("");
				   
				   
		}
        
        
		/*habilitaBtns('bt_alterar');
		habilitaBtns('bt_excluir');
		habilitaBtns('bt_incluir');*/
}
 function getIncluir(linha){
     $('#action').val('Insert');
	 $('.incluir').show();
	 desabilitaBtns('bt_alterar');
	 desabilitaBtns('bt_excluir');
	 desabilitaBtns('bt_incluir');
}
 function getIncluir2(linha,campoAction,tabela){
     $("#"+campoAction).val('Insert');
	 $("#"+tabela+' .incluir').show();
	
	 configurarDatas("insert")
 
	/* desabilitaBtns('bt_alterar');
	 desabilitaBtns('bt_excluir');
	 desabilitaBtns('bt_incluir');*/
	
 }		

function hideLinha(linha){
   $(linha).parent().parent().hide(); 
}

function toogleBox(){
     $('.area_box_campos').toggle( "slow");
			 
}		

function pesquisar(controller,form,local){
    $('#'+local).html("");
    var dados = $('#'+form).serialize();
	mostraPreload();
    $.ajax({
            type      : 'post',
 
            url: controller + '/getLista_' + controller,
 
            data      : dados,
 
            dataType  : 'html',
 
                success : function(html){
                      removePreload();
				      if(html.indexOf('is_erro=true#')>0){
					        
						   ShowMensagem(html.split('#')[1],"ERRO");
					  }
					  else{
				        $('#'+local).html(html);
					  }
				  
                },
				error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				  ShowMensagem(errorThrown,"ERRO");
				 
                }
				
        });


}


function requestCrud(linha,action,controller,form){
   
    var dados = "";
    var comando = "";
	if(action =="delete"){
	    dados = form;
	    comando = "delete";
	}
	else{
		if(action =="Edit"){
		    dados = $('#' + form).find('input.update,select.update').serialize();
		    comando = "edit";
		}
		else{
		    dados = $('#' + form).serialize();
		    comando = "insert";
		}
	}
   $.ajax({
            type      : 'post',
 
            url: controller + '/' + comando + controller,
 
            data      : dados,
 
            dataType  : 'json',
 
            success : function(retorno){
				  
               
				 if(retorno.is_erro == "true"){
					    ShowMensagem(retorno.msg,"ERRO");
					}
					else{
                      		
					    pesquisar(controller,'filtro_'+controller,'tabela'+controller);
						ShowMensagem(retorno.msg,"SUCESSO");
					    cancelar(linha,action);
						
					}
					
             },
			error: function(XMLHttpRequest, textStatus, errorThrown){
                  
				  ShowMensagem(errorThrown,"ERRO");
            }
        });


}
function getTela(controller,action,local,info){
	    
	
	   dados = info;
	
	$.ajax({
          type      : 'post',

         url       :controller+'/'+action,

          data      : dados,

          dataType  : 'html',

          success : function(html){
                  $(local).html(html);
				  $('#div_crudtela').show();
				  $('#lista').hide();
				 
                  
              }
      });


}

function salvar(form,controller,action,funcao){
	
	
	var dados = $('#'+form).serialize();
    $.ajax({
          type      : 'post',

          url: controller + "/"+action,

          data      : dados,

          dataType  : 'json',

             success : function(retorno){
                 
            	 
                 
                  if(retorno.is_erro+"" == "false"){
				        
                	  ShowMensagem(retorno.msg,"SUCESSO");
                      $('#lista').show();
					  $('#crud_ajax').hide();
					 
                      eval(funcao);
				  }
                  else{
                	  ShowMensagem(retorno.msg,"ERRO");
                	  
                  }
				  
              },
		    error: function(XMLHttpRequest, textStatus, errorThrown){
		        
				  ShowMensagem(errorThrown,"ERRO");
				  removePreload();
				 
		      }
		
      });


}
function changeAba(menu,aba){
    $('a.item_aba').removeClass('ativo');
	$(menu).addClass('ativo');
	$('.aba').hide();
	$('#'+aba).show();
   
}