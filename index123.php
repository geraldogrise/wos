 <?php
	$schema = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
	$path = $schema.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	
	$path = substr($path,0,strrpos($path, "/"));
	$inc = getcwd();
	
?>

<html>
<head>
    <title>Wos Install</title>
    <link href="<?=$path?>/transfer/install.css" rel="stylesheet">
	<link href="<?=$path?>/transfer/fm.selectator.jquery.css" rel="stylesheet">
	<link href="<?=$path?>/transfer/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="<?=$path?>/transfer/main.js"></script>
	<script src="<?=$path?>/transfer/fm.selectator.jquery.js"></script>
    
	

	</head>
	<body>

           <div class="div_content">
		          
				   
				   <?php  include($inc.'/transfer/loading.php');?>
				   <?php  include($inc.'/transfer/database.php');?>
				   <?php  include($inc.'/transfer/sql.php');?>
				   <?php  include($inc.'/transfer/user.php');?>
				   <?php  include($inc.'/transfer/finalize.php');?>
				   <?php  include($inc.'/transfer/install.php');?>
				  
					
		   
		   </div>
	</body>

</html>