 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
function Valida(Tipo, acao) {

    $(window).Validacao();

    ValidaTela(Tipo, acao);

    if (!$(window).Validacao.isValido()) {
        ShowMensagem($(window).Validacao.getMensagem(), "validacao", 0);
        $(window).Validacao.clear();
        return false;
    }

    return true;
}

function ShowMensagem(mensagem, tipomsg, tempo) {

    var tempomensagem = 5000;
    if (tempo != undefined) {
        if (tempo > 0)
            tempomensagem = tempo;
    }
   
    

    var id = guidGenerator();
    nomediv = 'msgerro_' + id;

    if ($("#msg").size() == 0)
    { $("body").prepend('<div id="msg"style="position:absolute;top:20px;left:100px;z-index:999999;"></div>') }
     classe = "";
	 img = "bt_exclamation";
	 titulo ="Atenção";
              
			   if(tipomsg == "ERRO"){
			        classe = "panel-danger";
					img = "bt_erro";
					
			   }
			   else if(tipomsg == "SUCESSO"){
			        classe = "panel-success";
					img = "bt_sucesso";
					
			   }
			   else if(tipomsg == "VALIDACAO"){
			      classe = "panel-warning";
				  img = "bt_exclamation";
				
			   }
			   
			   
			 html="<div style='width:300px;' class='panel panel-colorful "+classe+"'>";
			 html+=	"<div class='panel-heading'>"
			 html+=   "<h3 class='panel-title'>"+"<i class='"+img+"'></i>  "+titulo+"</h3>";
			 html+="<i class='closeAlerta "+tipomsg+"'></i>  ";
			 html+="</div>";
			 html+="<div  class='panel-body body_msg"+"'>";
			 html+="<p>"+mensagem+"</p>";
			 html+="</div>";
			 html+="</div>";
			 
			
								
						
							
			   
			   tipomsg = tipomsg.toLowerCase();
			
			   $("#msg").prepend(html);
			  
    $(".closeAlerta").click(function () {
	   
        $(this).closest('.panel').remove();
    });

    if ((tipomsg.toLowerCase() != "validacao")) {
        tempomensagem = 10000;
    }

    $("#" + nomediv).fadeIn(2000);
    if ((tipomsg.toLowerCase() != "erro") && (tempomensagem > 0)) {
        $("#" + nomediv).delay(tempomensagem).fadeOut(3000, function () {
            $(this).remove();
        });
    }
}


function guidGenerator() {
    var S4 = function () {
        return (((1 + Math.random()) * 0x10000) | 0).toString(16).substring(1);
    };
    return (S4() + S4() + "" + S4() + "" + S4() + "" + S4() + "" + S4() + S4() + S4());
}