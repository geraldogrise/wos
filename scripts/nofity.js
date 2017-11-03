function addNotify(title,text,image){
     $.gritter.add({
            title: title,
            text: text,
            image: 'images/error.png',
            sticky: false,
            time: ''
        });
  
  
  }
  function addNotify2(title,text,image){
         $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'This is a light notification',
            // (string | mandatory) the text inside the notification
            text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
            class_name: 'gritter-light'
        });
    
  }
 