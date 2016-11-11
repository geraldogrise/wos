

function buildXml(){

    clearInterval(firtstep);
    var dados = "action=install&host="+$('#host').val()+"&database="+$('#database').val()+"&login="+$('#login').val()+"&password="+$('#password').val();
	
    $.ajax({
            type      : 'post',
 
            url       :'transfer/buildxml.php',
 
            data      : dados,
 
            dataType  : 'json',
 
                success : function(retorno){
                   
				  if(retorno.is_erro+"" == "false"){
				       stepSql();
				  }
                  else{
                	  
                	  
                  }
                     				 
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		         
				 
		         }		
				
        });


}
function InstallSql(){

   
    var dados = "action=install";
	
    $.ajax({
            type      : 'post',
 
            url       :'transfer/buildsql.php',
 
            data      : dados,
 
            dataType  : 'json',
 
                success : function(retorno){
                   
				  if(retorno.is_erro+"" == "false"){
				       stepUser();
				  }
                  else{
                	  
                	  
                  }
                     				 
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		         
				 
		         }		
				
        });


}

function insertUser(){

   
    var dados = "action=insert&login="+$('#ulogin').val()+"&password="+$('#upassword').val()+"&name="+$('#uname').val()+"&email="+$('#uemail').val();
	
    $.ajax({
            type      : 'post',
 
            url       :'system/controller/userController.php',
 
            data      : dados,
 
            dataType  : 'json',
 
                success : function(retorno){
                   
				  stepFinal();
                     				 
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		         
				 
		         }		
				
        });


}

function finish(){

   
    var dados = "action=install";
	
    $.ajax({
            type      : 'post',
 
            url       :'transfer/finish.php',
 
            data      : dados,
 
            dataType  : 'json',
 
                success : function(retorno){
                   
				  window.location.assign("login.php")
                     				 
				},
				 error: function(XMLHttpRequest, textStatus, errorThrown){
		         
				 
		         }		
				
        });


}

var firtstep = setInterval(function(){ nextStep("database") }, 10000);
		function nextStep(step){
			
			if(step == "database"){
				 $('.step').hide();
				 $('.database').show();
			}
			else if(step == "sql"){
				 
			}
			else if(step == "install"){
				$('.step').hide();
				$('.install').show();
			}
			
		}
		
		function stepUser(){
				
			$('.step').hide();
			$('.user').show();
		}
		function stepSql(){
			$('.step').hide();
			$('.sql').show();
		}
		function stepFinal(){
		    $('.step').hide();
			$('.finalize').show();
		}