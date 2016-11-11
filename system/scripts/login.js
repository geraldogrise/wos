
$(function(){
	$('form').submit(function(e){
		e.preventDefault();
		encript = $(this).attr('encrypt');
		
		encryptLogin(encript);
		$('form').unbind('submit').submit();

	});

});





