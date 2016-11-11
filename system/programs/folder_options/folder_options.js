 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */



function callWindowFolder_options(id,pathOption,parameters){
 
     file =   parameters.replace(/\#/g, "\\");
	 file_show = parameters.replace(/\#/g, "/");;
	 $('#'+id).find('.file_path').val(parameters);
	 getComponentSide(id,"group","setFolderSelect");
		  
	
  
	
}


function setFolderSelect(id,data){

 var folderselect = $('#'+id).find(".my_folderselect").folderselect(
        {
            "data": data,
            "icon_item": "img/user_op.png",
            "icon_folder": "img/group_op.png",
            "icon_home": "img/home_op.png",
            "spinner_gif": "img/ajax-loader_op.gif",
			
            
        }
    );
	getPreviousSelected(id,'my_folderselect','ant_selected');
}

function update_select_box(objs){
    var html = "";
    $.each(objs, function(key, obj){
       console.log(obj.payload.id);
    });

  
}







function callWindowOptions(){
      var file_op = "";
	  if($('div.selected').size() ==1){
		  $('div.selected').each(function(){
			  file_op = $(this).attr('path');
		  });
		 callWindowWithParameter(this,'folder_options','callWindowFolder_options','', file_op);
	  }
	  else{
	  
	  }

    
   
}




function saveFolderOptions(button){
  id = $(button).closest('div.program').attr('id');
   lista = getCurrentList(id,'my_folderselect');
   adicionados = getElementAdds(id,lista,'ant_selected');
   removidos = getElementRemoves(id,lista,'ant_selected');
   file = $('#'+id).find('.file_path').val();
   dados_envio ="file="+file+"&action=save_options&adicionados="+adicionados+"&removidos="+removidos;
   if(validateInputs(id)){
     saveAll(id,"grpusers_files","",dados_envio);
   }
   

}



 

   
   
   

   
   
   


