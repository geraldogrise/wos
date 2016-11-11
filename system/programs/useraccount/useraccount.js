
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */



function callWindowUserAccount(id){
 
 

  
   pesquisar(id,'user','.form_users','.local_grid');

  
	 

	
}

function resetPassword(button){
	
	id_user = getTableItem(button,'tbl_users','user');
	callWindowWithParameter(button,'resetpassword','callWindowResetpassword','',id_user);
	
}
