<!DOCTYPE html>

<html>
    
<head>
	<title>
    Kriti2k18
	</title>
<link rel="icon" href="img/icon.png">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
 	<link href='css/rotating-card.css' rel='stylesheet' /> 
 	
 	<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100&effect=neon">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
 	<link type="text/css" rel="stylesheet" href="css/css-content.css">
  <script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
};
</script>
    </head>	
        
<body>


<div class="wrapper" >
  
	<nav>
		<div class="menu-icon">
			<i class="fa fa-bars fa-2x"></i>
		</div>
		<a href="http://scagekriti2k18.com" style="text-decoration:none;">
		<div class="logo" style="font-family: 'Patrick Hand', cursive;">
			Home
		</div>
		</a>
		<div class="menu">
			<ul>
				<li><a href="http://scagekriti2k18.com/#events">Events</a></li>
				<li><a href="http://scagekriti2k18.com/#sponsors">Sponsors</a></li>
				<li><a href="http://scagekriti2k18.com/#socialcause">Social Cause</a></li>
				<li style="color:yellow;"><a href="https://docs.google.com/forms/d/e/1FAIpQLSdYlfJptFM5JDoQBMPX351BBMSPoisVPQT73mV1092vbkZSRA/viewform" class="Ca">Campus Ambassador</a></li>
				<li><a href="http://scagekriti2k18.com/registration_fee.php">Registration Fee</a></li>
			<!--	<li><a href="img/contact.html">Contact</a></li>-->
				<li><a href="http://scagekriti2k18.com/#teammem">Team</a></li>
				<?php
				require "login_reg/dbcon/common.php";
				
				if (isset($_SESSION['email'])) 
				{ 
				   echo "<li><a href=\"myaccount.php\">My Account</a></li>";
				   echo "<li><a href=\"logout.php\">Logout</a></li>";
				}
				else
				{
				   echo "<li><a href=\"login_reg/index.php\">Register/Login</a></li>";
				}
				?>
			</ul>
		</div>
	</nav>
</div>

    <br><br><br>
 
  <div class="content" style="padding-bottom: 30px;background-image:url('img/sandartshow.jpg');height: 100%; background-position: center;
    background-repeat: no-repeat;
    background-size: contain;">
        
    
     </div>
     <div> <br>
	<br>
	   <center>
	<a href="login_reg/process.php?id=17" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">I will attend</a></center><br/><br/>

<br>
<br>
     <br>
    </div>
    </div>
  
    

<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
//menu toggle-button
		$(document).ready(function(){
			$(".menu-icon").on("click",function(){
				$("nav ul").toggleClass("showing");
			});
		});
		//scrolling effect
		$(window).on("scroll",function(){
			if($(window).scrollTop()){
				$('nav').addClass('red');
			}
			else{
				$('nav').removeClass('red');
			}
		})
</script>	
    </body>
 </html>