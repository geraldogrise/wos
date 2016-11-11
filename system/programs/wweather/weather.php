<?php 
   session_start();
  $software = $_SESSION["software"]; 
  $protocol =  $_SERVER['SERVER_PROTOCOL']; 
  $protocol = substr($protocol,0,strpos($protocol,"/"));
  $protocol = strtolower($protocol);
  $hostname = $_SERVER['SERVER_NAME'];
  $caminho = $protocol."://".$hostname."/".$software;

 
  
  ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather App</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?=$caminho?>/system/programs/wweather/weather.css">

</head>
<body id="weather-background" class="default-weather">
        <canvas id="rain-canvas">

        </canvas>

        <canvas id="cloud-canvas">

        </canvas>

        <canvas id="weather-canvas">

        </canvas>

        <canvas id="time-canvas">

        </canvas>
        <canvas id="lightning-canvas">

        </canvas>
    <div class="page-wrap">



        <header class="search-bar">
            <p class="search-text"><span class="search-location-text">What's the weather like in 
			<input id="search-location-input" class="search-location-input" type="text"  value="Salvador" placeholder="City"> ?</span></p>
            <div class="search-location-button-group">
                <button id="search-location-button" class="fa fa-search search-location-button search-button"></button><!--
                --><button id="geo-button" class="geo-button fa fa-location-arrow search-button"></button>
            </div>
        </header>

        <div id="geo-error-message" class="geo-error-message hide"><button id='close-error' class='fa fa-times close-error'></button>Uh oh! It looks like we can't find your location. Please type your city into the search box above!</div>

        <div id="front-page-description" class="front-page-description middle">
            <h1>Blank Canvas Weather</h1>
            <h2>An Obligatory Weather App</h2>
        </div>
        <div class="attribution-links hide" id="attribution-links"><button id='close-attribution' class='fa fa-times close-attribution'></button>
            <h3>Icons from <a href="https://thenounproject.com/">Noun Project</a></h3>
            <ul>
                <li class="icon-attribution"><a href="https://thenounproject.com/term/cloud/6852/">Cloud</a> by Pieter J. Smits</li>
                <li class="icon-attribution"><a href="https://thenounproject.com/term/snow/64/">Snow</a> from National Park Service Collection</li>
                <li class="icon-attribution"><a href="https://thenounproject.com/term/drop/11449/">Drop</a> Alex Fuller</li>
                <li class="icon-attribution"><a href="https://thenounproject.com/term/smoke/27750/">Smoke</a> by Gerardo Martín Martínez</li>
                <li class="icon-attribution"><a href="https://thenounproject.com/term/moon/13554/">Moon</a> by Jory Raphael</li>
                <li class="icon-attribution"><a href="https://thenounproject.com/term/warning/18974/">Warning</a> by Icomatic</li>
                <li class="icon-attribution"><a href="https://thenounproject.com/term/sun/13545/">Sun</a> by Jory Raphael</li>
                <li class="icon-attribution"><a href="https://thenounproject.com/term/windsock/135621/">Windsock</a> by Golden Roof</li>
        </div>
        <div id="weather" class="weather middle hide">
            <div class="location" id="location"></div>
            <div class="weather-container">
                <div id="temperature-info" class="temperature-info">
                    <div class="temperature" id="temperature"></div>
                    <div class="weather-description" id="weather-description"></div>
                </div>
                <div class="weather-box">
                    <ul class="weather-info" id="weather-info">
                        <li class="weather-item humidity">Humidity: <span id="humidity"></span>%</li><!--
                     --><li class="weather-item wind">Wind: <span id="wind-direction"></span> <span id="wind"></span> <span id="speed-unit"></span></li>
                    </ul>
                </div>
                <div class="temp-change">
                    <button id="celsius" class="temp-change-button celsius">&deg;C</button><button id="fahrenheit" class="temp-change-button fahrenheit">&deg;F</button>
                </div>
            </div>
        </div> 
    </div>



   
    
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="<?=$caminho?>/system/programs/wweather/weather.js"></script>
	<script>
	   $(function(){
	    
	      $('#search-location-button').click();
	   });
	
	</script>
</body>
</html>