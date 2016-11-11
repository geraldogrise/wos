
function codemirror_undo(button){
  
  id = $(button).closest('.program').attr('id');
  editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
   editor.execCommand("undo");
  
}
function codemirror_redo(button){
  
  id = $(button).closest('.program').attr('id');
  editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
   editor.execCommand("redo");
  
}
function codemirror_copy(button){

  id = $(button).closest('.program').attr('id');
  editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
  text = editor.doc.getSelections(); 
  $('#'+id).find('.clipboard').val(text);
 

}
function codemirror_cut(button){
     id = $(button).closest('.program').attr('id');
	 editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
	 text = editor.doc.getSelections();
     editor.doc.replaceSelection("",text);
	 $('#'+id).find('.clipboard').val(text);
	 
		
}
function codemirror_paste(button){
     id = $(button).closest('.program').attr('id');
	 editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
	 text = $('#'+id).find('.clipboard').val();
	 editor.doc.replaceSelection(text, "end");

}
function codemirror_find(button){
     id = $(button).closest('.program').attr('id');
	 editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
	 editor.execCommand("find");

}
function codemirror_findnext(button){
     id = $(button).closest('.program').attr('id');
	 editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
	 editor.execCommand("findNext");

}
function codemirror_findprev(button){
     id = $(button).closest('.program').attr('id');
	 editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
	 editor.execCommand("findPrev");

}
function codemirror_replace(button){
     id = $(button).closest('.program').attr('id');
	 editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
	 editor.execCommand("replace");

}
function codemirror_replaceall(button){
     id = $(button).closest('.program').attr('id');
	 editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
	 editor.execCommand("replaceAll");

}

function codemirror_goLineStart(button){
     id = $(button).closest('.program').attr('id');
	 editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
	 editor.execCommand("goLineStart");

}
function codemirror_goLineEnd(button){
     id = $(button).closest('.program').attr('id');
	 editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
	 editor.execCommand("goLineEnd");

}
function codemirror_markLine(button){
     id = $(button).closest('.program').attr('id');
	 editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
	 editor.markText( 
	    { line: editor.getCursor().line, ch: 0 },
        { line: editor.getCursor().line + 1, ch: 0 },
		{className: "styled-background"}
	);

}

function codemirror_deleteLine(button){
     id = $(button).closest('.program').attr('id');
	 editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
	 editor.execCommand("deleteLine");

}
function codemirror_newlineAndIndent(button){
     id = $(button).closest('.program').attr('id');
	 editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
	 editor.execCommand("newlineAndIndent");

}
function codemirror_insertTab(button){
     id = $(button).closest('.program').attr('id');
	 editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
	 editor.execCommand("insertTab");

}
function codemirror_foldCode(button){
     id = $(button).closest('.program').attr('id');
	 editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
	 editor.foldCode(editor.doc.getCursor());
	

}
function codemirror_unfoldCode(button){
     id = $(button).closest('.program').attr('id');
	 editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;
	 editor.foldCode(editor.doc.getCursor(),null,"unfold");
	

}
function codemirror_foldAll(button) { 
       id = $(button).closest('.program').attr('id');
	   editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;        
	   for (var i = 0; i < editor.lineCount() ; i++) { 
            editor.foldCode({ line: i, ch: 0 }, null, "fold"); 
        } 
}
function codemirror_unfoldAll(button) { 
       id = $(button).closest('.program').attr('id');
	   editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;        
	   for (var i = 0; i < editor.lineCount() ; i++) { 
            editor.foldCode({ line: i, ch: 0 }, null, "unfold"); 
        } 
}  


function codemirror_getSelectedRange(editor) {
        return { from: editor.getCursor(true), to: editor.getCursor(false) };
}
      
function codemirror_autoFormatSelection(button) {
    id = $(button).closest('.program').attr('id');
	editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;   
	var range = codemirror_getSelectedRange(editor);
	var totalChars = editor.getValue().length;
    editor.autoFormatRange(range.from, range.to,totalChars);
}
      
function codemirror_commentSelection(button,isComment) {
   id = $(button).closest('.program').attr('id');
   editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;   
   var range = codemirror_getSelectedRange(editor);
   editor.commentRange(isComment, range.from, range.to);
}
function codemirror_markText(button,isComment) {
   id = $(button).closest('.program').attr('id');
   editor =  $('#'+id).find('.CodeMirror')[0].CodeMirror;   
   var range = codemirror_getSelectedRange(editor);
  
  
   editor.markText( 
	    { line: range.from.line, ch: range.from.ch },
        { line: range.to.line, ch: range.to.ch },
		{className: "styled-background"}
	);
}  

function codemirror_removeallmark(button){
  id = $(button).closest('.program').attr('id');
 
   $('#'+id).find('.styled-background-none').removeClass('styled-background-none');
   $('#'+id).find('.styled-background').removeClass('styled-background');
}



function makeMarker() {
  var marker = document.createElement("div");
  marker.style.color = "#822";
  marker.innerHTML = "●";
  return marker;
}      

 













	 