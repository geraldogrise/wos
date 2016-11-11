


function translate(program_class,language){

   lang = arrayLanguages[language];

	var result = Object.keys(lang ); 

	$.each( result, function( key, value ) {
	   $('.lang_'+program_class+'_'+value).html(eval("lang."+value));
	   
	});



}

