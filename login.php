 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<!doctype html>
<html lang="en" ng-app="voiceCommands">
<?php 
   
   
   require_once(getcwd().'/system/dao/genericDao.php');
   require_once(getcwd().'/system/model/Tb_general.php');
   require_once(getcwd().'/system/model/Tb_encrypt.php');
 
   
   $general = new Tb_general();
   $model = new Tb_general();
   $general->setId_general(1);
   $dao = new genericDao();
   $result = $dao->getAll($general);
   $crypt= "";
   
    while($row = $result->fetch_array()){
			$model->setFlag_login_type($row["flag_login_type"]);
		    $model->setFlag_login_encrypt($row["flag_login_encrypt"]);
			$model->setNumber_of_bits($row["number_of_bits"]);
			$model->setNumber_attempts($row["number_attempts"]);
			$model->setFlag_password_force($row["flag_password_force"]);
			$model->setFlag_enable_question($row["flag_enable_question"]);
			$model->setFlag_enable_captcha($row["flag_enable_captcha"]);
			$model->setFlag_captcha_type($row["flag_captcha_type"]);
			$model->setSeq_update($row["seq_update"]);
			
			
	}
	
	$encrypt = new Tb_encrypt();
	
	$encrypt->setId_encrypt($model->getFlag_login_encrypt());
	$result_enc = $dao->getAll($encrypt);
	 while($row = $result_enc->fetch_array()){
	    $crypt=$row["encrypt_name"];
	 }
	 
	 
	
 ?>

<head>
    <meta charset="utf-8">
<title>WOS-Web Operation System</title>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Geraldo Grise">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
	<!-- gritter--> 
    <link href="css/jquery.gritter.css" rel="stylesheet" />
    <script src="scripts/jquery.gritter.js"></script>
    <script src="scripts/nofity.js"></script>
	
    
	
	

    <style type="text/css">
      body {
        padding-top: 30px;
      }
	  <?php if($model->getFlag_login_type() =="CARD"){?>
	  .col-lg-4 {
	  
	     width:28.733%;
		
	  }
	  .col-lg-offset-4{
	    margin-left: 33.333%;
		margin-top: 24px !important;
	  }
	  <?php }?>
    </style>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
   

  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

  	<!-- Jquery Validate Script -->
    <script type="text/javascript" src="scripts/jquery.validate.js"></script>
	<script type="text/javascript" src="system/scripts/login.js"></script>
	<script type="text/javascript" src="system/scripts/encrypt/<?=$crypt?>.js"></script>
	<?php if($model->getFlag_enable_captcha() == "E"){?>
	 <script src="system/scripts/captcha/jquery.plugin.js"></script>
     <script src="system/scripts/captcha/jquery.realperson.js"></script>
	 <link rel="stylesheet" href="css/jquery.realperson.css">

	 <script>
	 
	    $(function() {
			$('#captcha').realperson();
		});
	 </script>
	<?php }?>
	<?php if($model->getFlag_captcha_type() == "VCAP" || $model->getFlag_login_type() == "VOIC" ){?>
	     <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.9/angular.min.js"></script>
	     <script type="text/javascript" src="system/scripts/voice/voice-commands.min.js"></script>
		
		 
	<?php }?>
	<?php if($model->getFlag_login_type() == "CARD"){?>
	 <script src="system/scripts/qrcode/jquery.webcamqrcode.js"></script>
     <script>
	      
		(function($){
			$('document').ready(function(){
				$('#qrcodebox').WebcamQRCode({
					onQRCodeDecode: function( p_data ){
						info = p_data;
						login = info.split("#")[0];
						password = info.split("#")[1];
						$('#login_hidden').val(login);
						$('#password_hidden').val(password);
						$('#form_login').submit();
						
						
					}
				});
				
				$('#btn_start').click(function(){
					$('#qrcodebox').WebcamQRCode().start();
				});
				
				$('#btn_stop').click(function(){
					$('#qrcodebox').WebcamQRCode().stop();
				});
			});
		})(jQuery);
		
	  
	 </script>
	<?php }?>
	
	
	
	

  	
</head>
  <body ng-controller="DemoPage">

  	<!-- NAVIGATION MENU -->

   

    <div class="container">
        <div class="row">
   		<div class="col-lg-offset-4 col-lg-4" style="margin-top:100px">
   			<div class="block-unit" style="text-align:center; padding:8px 8px 8px 8px;">
   				<img src="img/face2.jpg" alt="" class="img-circle">
   				<br>
   				<br>
				<?php  if($model->getFlag_login_type() == "NORM" || $model->getFlag_login_type() == "VOIC"  ){	?>
					<form  id="form_login" name="form_login" method="post" encrypt="<?=$crypt?>" action="system/controller/loginController.php">
						<fieldset>
							<div class="div_pass">
							<p>
								<input id="username" name="login" type="text" style="width:179px;" placeholder="Username">
								<input id="username_hidden" name="login_hidden" type="hidden" >
								<input id="encrypt" name="encrypt" type="hidden" value="<?=$crypt?>">
							</p>
							<p>
							   <?php 
							      if($model->getFlag_login_type() == "NORM"){?>
								   
								   <input id="password" name="password" type="password" style="width:179px;" placeholder="Password">
								   <input id="password_hidden" name="password_hidden"  type="hidden" >
								<?php }else{ ?>
								           <div class="grise_voice">
										     <span class="span_voice"></span>
										  </div>
										  <input id="password" name="password" type="password" style="display:none" placeholder="Password">
								          <input id="password_hidden" name="password_hidden"  type="hidden" >
										 
								
								<?php }?>
							</p>
							<p>
                                <?php 
								  
								   if($model->getFlag_enable_captcha()== "E"){
								      if($model->getFlag_captcha_type() =="NCAP"){
								?>							      
								         <input id="captcha" name="captcha" type="text" placeholder="Captcha">
								 <?php 
								   
								     }else{ 
								?>
								          <div class="grise_voice">
										     <span class="span_voice_captcha"></span>
										  </div>
										  <input id="captcha" name="captcha" type="text" style="display:none" placeholder="Captcha">
								<?php 
								   }
								} 
								?>
							</p>
							</div>
							    
								  <input class="submit btn-success btn btn-large" onclick="" type="submit" value="Login">
								
								
						</fieldset>
					</form>
					<?php }else if($model->getFlag_login_type() == "CARD"){ ?>
						<div style="width: 350px; height: 350px;background:none;" id="qrcodebox">
						</div>
						<input type="button" value="Start" id="btn_start" /> 
                        <input type="button" value="Stop" id="btn_stop" />
											   
						 
					<?php }?>
						
					
					
					
				
   			</div>

   		</div>


        </div>
    </div>
	
	



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="scripts/bootstrap.js"></script>
	<script>
	function encryptLogin(encrypt_type){
		<?php
		  $encrypt = new Tb_encrypt();
		  $result_enc = $dao->getAll($encrypt);
		 while($row = $result_enc->fetch_array()){
			 $cripto = $row["encrypt_name"];
			  echo "if(encrypt_type == '{$cripto}'){";
			  echo "$('#username_hidden').val(hex_{$cripto}($('#username').val()));\n";
			  echo "$('#password_hidden').val(hex_{$cripto}($('#password').val()));\n";
			  echo "}\n"; 
		 }
		?>
	
	}
	
	
	</script>
    
  
</body>
<?php if($model->getFlag_captcha_type() == "VCAP"){?>
<script>
'use strict';
angular.module('voiceCommands', [])
.controller('DemoPage', function($scope, $timeout) {
  $scope.step = 0;
  $scope.results = [];
  if ( SPEECH.isCapable() ) {
	  SPEECH.onStart(function() {
		$timeout(function() {
		  $scope.step = 1;
		});
	  });
	  SPEECH.onResult(function(result) {
		$timeout(function() {
		 
			$scope.name = result.transcript;
			$('.span_voice_captcha').html(result.transcript);
			$('#captcha').val(result.transcript);
			
		 
		});
	  });
	  SPEECH.start({
		min_confidence: .2
	  });
  }
});
</script>
<?php } ?>
<?php if($model->getFlag_login_type() == "VOIC" ){?>
<script>
'use strict';
angular.module('voiceCommands', [])
.controller('DemoPage', function($scope, $timeout) {
  $scope.step = 0;
  $scope.results = [];
  if ( SPEECH.isCapable() ) {
	  SPEECH.onStart(function() {
		$timeout(function() {
		  $scope.step = 1;
		});
	  });
	  SPEECH.onResult(function(result) {
		$timeout(function() {
		 
			$scope.name = result.transcript;
			$('.span_voice').html(result.transcript);
			$('#password').val(result.transcript);
			
			//encryptLogin(encrypt_type)
			
		 
		});
	  });
	  SPEECH.start({
		min_confidence: .2
	  });
  }
});
</script>
<?php } ?>

<?php
   if(isset($_GET["Error"]) && strtolower($_GET["Error"]) == "true"){
?> 
<script>
  $(function(){
     addNotify('There was a problem','Your credentials are incorrect.','');
  });
</script>
<?php 
   }
?>


</html>