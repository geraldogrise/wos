 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */
function callWindowFonts_options(id,pathFile,id_font){
    
	configScreenFonts(id,id_font);
	getComponentSide(id,"fonts_files","setFontSelect");
}
function configScreenFonts(id,id_font){
     if(id_font !=""){
		 folder = $('#'+id).find('.folder_path').val()+"\\"+id_font.split("_")[0];
		 folder =folder.replace(/\#/g, "\\");
		  type = id_font.split("_")[3];
		 $('#'+id).find('.file_path').val(id_font.split("_")[1]);
		 $('#'+id).find('.folder_path').val(folder);
		 $('#'+id).find('.font_name').val(id_font.split("_")[2]);
		 $('#'+id).find('.type_font').val(type);
		
		 if(type=="S"){
			$('#'+id).find('.tab_edit').hide();
			$('#'+id).find('.button_explore').hide();
			$('#'+id).find('.btn_ok').hide();
			
		 }
	 }
	 else{
	    
		folder = $('#'+id).find('.folder_path').val()+"\\"+"css\\fontes";
		folder =folder.replace(/\#/g, "\\");
		$('#'+id).find('.folder_path').val(folder);
	 
	 }

}


function setSoundPathFonts(elemento,id_fontp){
  
    id_explore = $(elemento).closest('div.program').attr('id');
	file_a = $('#'+id_explore).find('.file_a').val();
	$('#'+id_fontp).find('.gallery_path').val(file_a);
    closeWExplore(id_explore,"only_close");
	reloadFolderSelect(id_fontp);
}
function reloadFolderSelect(id){
   
   $('#'+id).find('.container_folderselect').find('.my_folderselect').remove();
   $('#'+id).find('.container_folderselect').html('<div class="my_folderselect"></div>');
   getComponentSide(id,"fonts_files","setFontSelect");

}
function setFontSelect(id,data_fonts){

 var folderselect = $('#'+id).find(".my_folderselect").folderselect(
        {
            "data": data_fonts,
            "icon_item": "img/fontes2.png",
            "icon_folder": "img/fonts.png",
            "icon_home": "img/home_op.png",
            "spinner_gif": "img/ajax-loader_op.gif",
            
        }
    );
	 
	type =  $('#'+id).find('.type_font').val();
	if(type=="S"){
	  $('#'+id).find(".data_font").find('.fs-selector-wrapper').hide();
	  $('#'+id).find(".data_font").find('.fs-selected-wrapper').css('width','100%');
	}
	getPreviousSelected(id,'my_folderselect','ant_selected');
}

function callWindowFontes(button,id_font){
   
   callWindowWithParameter(button,'fonts_options','callWindowFonts_options','',id_font );
}

function saveFontsOptions(button){
   id = $(button).closest('div.program').attr('id');
   lista = getCurrentList(id,'my_folderselect');
   adicionados = getElementAdds(id,lista,'ant_selected');
   removidos = getElementRemoves(id,lista,'ant_selected');
   file = $('#'+id).find('.file_path').val();
   name =  $('#'+id).find(".font_name").val();
   folder =  $('#'+id).find(".folder_path").val();
   folder =folder.replace(/\\/g, "\#");
   
   folder_path = $('#'+id).find(".folder_path_normal").val();
   folder_path = folder_path.replace(/\\/g, "\#");
  
   acao ="save_options";
   if(file == ""){
      acao = "save_fonts";
   }
   dados_envio ="file="+file+"&action="+acao+"&adicionados="+adicionados+"&removidos="+removidos;
   dados_envio +="&id_user="+$('#user_system_id').val()+"&font_name="+name+"&font_folder="+folder;
   dados_envio +="&folder_path="+folder_path;
   if(validateInputs(id)){
       saveAll(id,"fonts","",dados_envio);
   }

}


