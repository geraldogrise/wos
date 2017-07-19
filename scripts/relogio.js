 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
$(function(){
  moveRelogio();
  currentDate();

})
var horaImprimivel="";
function moveRelogio(){ 
   
    s =getCurrentHour();
	addHours = $("#system_hour").val();
   	horaImprimivel = s;//"   "+hora + " : " + minuto; //+ " : " + segundo 
	

   	document.form_clock.clock.value = addHour(horaImprimivel, addHours) 

   	setTimeout("moveRelogio()",1000); 
} 
function getCurrentHour(){

	momentoAtual = new Date() 
   	hora = momentoAtual.getHours() 
   	minuto = momentoAtual.getMinutes() 
   	segundo = momentoAtual.getSeconds() 
    if(segundo < 10){
	  segundo = "0"+segundo;
	}
	if(minuto < 10){
	  minuto = "0"+minuto;
	}
	if(hora < 10){
	  hora = "0"+hora;
	}
	
	momentoAtual = new Date() 
  

	var m = moment.tz(momentoAtual,$('#time_zone').val());
	var s = m.format();
    s = m.format('HH:mm');
	return s;

}

function currentDate(){


 date_system = Number($('#system_date').val());

 var currentDate =  addDays(date_system);
 $('span.currentDate').html(currentDate);
 setTimeout("currentDate()",5000); 

}

function calculaDias(date1, date2){
        
		
		data_1 = formatDate(date1);
		data_2 = formatDate(date2);
		var data1 = moment(data_1, "DD/MM/YYYY");
		var data2 = moment(data_2, "DD/MM/YYYY");
		
		var diferenca = data2.diff(data1, 'days');
		return diferenca;
}
function formatDate(data){
    dia = data.getDate();
	mes = data.getMonth()+1;
	ano = data.getFullYear();
	if(dia < 10){
	   dia = "0"+dia;
	}
	if(mes < 10){
	   mes = "0"+mes;
	}
	
	
	date = dia+"/"+mes+"/"+ano;
	return date;

}


function addDays(dias){

   var dataAtual = new Date();
   var previsao = dataAtual.setDate(dataAtual.getDate() + dias);  
   var month = dataAtual.getMonth()+1;
   if(dataAtual.getDate() < 10){
      day = 0+""+  dataAtual.getDate();
   }
    else{
      day =dataAtual.getDate();
   }
   if(dataAtual.getMonth()+1 < 10){
      month = 0+""+ ( dataAtual.getMonth()+1);
   }
   ano = dataAtual.getFullYear();
   var currentDate =  day + "/" + month + "/" + ano;
    return currentDate;



}

function addHour(horaInicio, horaSomada) {
     
    horaIni = horaInicio.split(':');
    horaSom = horaSomada.split(':');
	
 
    horasTotal = parseInt(horaIni[0], 10) + parseInt(horaSom[0], 10);
    minutosTotal = parseInt(horaIni[1], 10) + parseInt(horaSom[1], 10);
	
	if(minutosTotal <= 0){
        minutosTotal = 60+minutosTotal;
        horasTotal -= 1;
    }
	
	
    if(minutosTotal >= 60){
        minutosTotal -= 60;
        horasTotal += 1;
    }
	
	if(horasTotal < 0){
	  horasTotal =horasTotal*-1;
	}
	if(minutosTotal < 0){
	  minutosTotal =minutosTotal*-1;
	}
	
	
	
	if(minutosTotal <10){
	  minutosTotal = "0"+minutosTotal;
	}
	if(horasTotal <10){
	  horasTotal = "0"+horasTotal;
	}
     
    horaFinal = horasTotal+":"+ minutosTotal;
    return horaFinal;
}

function subtractHour(horaInicio, horaSomada) {
     
		minutosTotal= 0;
		horasTotal=0;
		horaIni = horaInicio.split(':');
		horaSom = horaSomada.split(':');
	 
		horasTotal =parseInt(horaIni[0], 10)- parseInt(horaSom[0], 10);
		if(horasTotal > 0){
			minutosTotal =parseInt(horaIni[1], 10)- parseInt(horaSom[1], 10)  ;
		}else if(horasTotal == 0){
			minutosTotal =parseInt(horaIni[1], 10)- parseInt(horaSom[1], 10) ;
		}else{
		  minutosTotal = parseInt(horaSom[1], 10)-parseInt(horaIni[1], 10)  ;
		}

		 if(minutosTotal < 0 && horasTotal !=0){
				minutosTotal = 60+minutosTotal;
				horasTotal -= 1;
		 }

		 if(horasTotal >= 0){
			horasTotal = -1*horasTotal;
			minutosTotal = -1*minutosTotal;
		   
		 }else{
			horasTotal = -1*horasTotal;
		 }
		
	 
		

		horaFinal = horasTotal+":"+ minutosTotal;
    return horaFinal;
}