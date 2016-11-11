
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Material Design Hangouts app for devwarsweek2</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    
    
    <link rel='stylesheet prefetch' href='http://cdn.materialdesignicons.com/1.1.70/css/materialdesignicons.min.css'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:300'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

     <style id="dynamic-styles"></style>
<div id="hangout"  >  
  <div id="head" class="style-bg"> <i class="mdi mdi-arrow-left"></i><i class="mdi mdi-fullscreen-exit"></i> <i class="mdi mdi-menu"></i> 
    <h1 class="contact_name">John Doe</h1></div>  
  <div id="content">
    <div class="overlay"></div>
    
    <div id="floater-position">
      <div id="add-contact-floater" class="floater control style-bg hidden"><i class="mdi mdi-plus"></i></div>          
      <div id="chat-floater" class="floater control style-bg hidden"><i class="mdi mdi-comment-text-outline"></i></div>   
    </div>
    
    
    <div class="card menu">
      <div class="header">
      <img class="image_contact" src="" />
        <h3 class="contact_name"></h3>
      </div>
      <div class="content">
        
        <div class="i-group">
			<input type="hidden" class="id_contact_main" id="id_contact_main">
			<input type="hidden" class="id_user_contact" id="id_user_contact">
			<input type="text" class="contact_name_input" id="username"><span class="bar"></span>
			<label>Name</label>
        </div>        
        <br />
        <div class="center"><canvas id="colorpick" width="250" height="220" ></canvas></div>                        
      </div>
    </div> 
    <div class="list-account">
      <div class="meta-bar"><input class="nostyle search-filter" type="text" placeholder="Search" /></div>
    <ul  class="list mat-ripple contactList">      
      
	  
	 
      
    </ul> 
    </div>
    <div class="list-text">
    <ul class="list mat-ripple chatAll">      
     
      
    
    </ul> 
    </div>
    <div class="list-phone">
      <div class="meta-bar"><input class="nostyle search-filter" type="text" placeholder="Name, phone number" /></div>
    <ul class="list mat-ripple contactAll">      
      
     
    </ul> 
    </div>
    <div class="list-chat chaton">
      
    </div>
    <ul class="nav control mat-ripple tiny">
      
      <li data-route=".list-account"><i class="mdi mdi-account-multiple"></i></li><li data-route=".list-text"><i class="mdi mdi-comment-text"></i></li><li data-route=".list-phone"><i class="mdi mdi-account-search"></i></li></ul>
    </div>  
  
  <div id="contact-modal" data-mode="add" class="card dialog">
    <h3>Add Contact</h3>
      <div class="i-group">
	      <input type="hidden" class="contactId" id="contactId">
		  <input type="text" id="new-user"><span class="bar"></span>
		  <label>Name</label>
      </div>
    
    <div class="btn-container">
      <span class="btn cancel">Cancel</span>
      <span class="btn save">Save</span>      
    </div>
    
    </div>
  
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="wtalk.js"></script>
    <script src="index.js"></script>
	

    
    
    
  </body>
</html>
