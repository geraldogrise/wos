 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */



function callWindowDatetime(id,pathProgram,parameters){
 
  
   addZindex(id);
   
   setDatePicker(id);		
   seTimePicker(id);
	
	
}
function seTimePicker(id){

	 $('#'+id).find('.clockpicker').clockpicker({
	  donetext:"done",
	  autoclose: false,
       id: id,	  
	}).find('input').change(function(){
			//console.log(this.value);
			$('#'+id).find('.input_timepicker').val(this.value);
	});
	
	$('#'+id).find('.clockpicker').clockpicker('show');
	$('.clockpicker-button').hide();
	$('#'+id).find('.clockpicker').hide();

}


function setDatePicker(id){

        $('#'+id).find('.datepicker').datepicker_ui({
		    dateFormat: 'yy-mm-dd',
		   onSelect: function(dateText, inst) { 
			  var dateAsString = dateText; //the first parameter of this function
			   $('#'+id).find('.input_datepicker').val(dateAsString);
			 
		   }
		 });

}
function saveDatetime(button){

  id = $(button).closest('div.program').attr('id');
  
  h = $('#'+id).find('.clockpicker-span-hours').html();
  m = $('#'+id).find('.clockpicker-span-minutes').html();
  data=  $('#'+id).find('.input_datepicker').val();
  var dataAtual = new Date();
  var date2 = new Date();
  date2.setFullYear(data.split("-")[0]);
  date2.setMonth(data.split("-")[1]-1);
  date2.setDate(data.split("-")[2]);
  
  data=calculaDias(dataAtual, date2);
  
  sys_hour = getCurrentHour();
  sh = h+":"+m;
  sh = subtractHour(sys_hour, sh);
 
  id_user = $('#user_system_id').val();
  id_group = $('#group_system_id').val();
  dados_envio = "system_hour="+sh+"&system_date="+data+"&id_user="+id_user+"&id_group="+id_group+"&action=save";
  saveSetting("settings","",dados_envio);


}





 





