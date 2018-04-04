<!DOCTYPE html>

<html>
    
<head>
	<title>
    Kriti(Art and Craft) -Manja
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
 
  <div class="content" style="background-color: #f48042; padding-bottom: 30px;">
        <h1 style="color:#FFF68F">WHERE’S THE FISH
 
                                               (# acquire the aquarium) 


</h1> 
    
      <h3 style="color: #551A8B">Description:</h3>
      
      <p style="color:#FFF68F">It's been a fine day and a fine international show has been put up by the college, a fish show, displaying numerous fishes of different colours, sizes and values. The most valuable was the rainbow fish which was considered as the rarest of the rare. Now the show was going on pompously and everything was good. At the night when the wrapping up is going on, a shrill scream was heard. The fish was stolen and the now since it's become a matter of pride of college's integrity and trustworthiness the greatest of the detectives were called upon, all failed but collected few hints. Now it's your turn to get your hands on the clues and find the fish.


      </p>
<h3 style="color: #551A8B">Rules:</h3>
      <p style="color:#FFF68F">


1. 	A team can consist of 3-5 members.
2.	The teams will be provided a team ID. Along with the team ID, a map of the college and a rulebook will be provided, details of which are given below.<br>
3.	The map received by the teams will consist of fifteen marked circle area. These areas will consist of one clue each pasted on any of the building wall inside the marked area.<br>
4.	The team are supposed to find all the fifteen clues and take pictures of those clues to proceed the game.<br>
5.	All the fifteen clues together make a problem statement.<br>
6.	The rulebook consists of various questions on the problem statement. The team has to solve the problem statement and answer the possible questions.<br>
7.	There is time boundation i.e. teams are supposed to submit complete or incomplete answers to Registration Desk within the time limit of 3 hrs.<br> 
8.	Judgement will be according to the maximum clues solved in the minimum time.<br>
<br>
#Team KRITI reserve all the right to change rules as per their convenience.<br>
#The decision of team KRITI will be final.<br>
<br>
<br>
      </p>
     
      <h3 style="color: #551A8B">
       Prize:
      </h3>
      <p style="color:#FFF68F">
Worth 8k<br>
NOTE: EACH TEAM MEMBER HAS TO REGISTER INDIVIDUALLY.<br>


</p>
  <br>
	<a href="login_reg/process.php?id=19" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Participate</a>

     
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
 