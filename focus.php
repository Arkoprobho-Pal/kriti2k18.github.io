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
        <h1 style="color:#FFF68F">                                                               FOCUS 

                                          (Balance the Bizarre )


</h1> 
    
      <h3 style="color: #551A8B">Description:</h3>
      
      <p style="color:#FFF68F">
Have you ever tried to focus hard?<br>
Does accomplishing jobs which requires minute detailing satisfies you?<br>
Then this is your chance to redeem your talent, have a go at our event and make most of your skills. <br>



      </p>
<h3 style="color: #551A8B">Rules:</h3>
      <p style="color:#FFF68F">


1.This is a team event with four members.
<br>
Round 1: Knockout Round
<br>
1. Two teams are set facing each other across a table.<br>
2.  Cup will be provided to all the members of both the teams.<br>
3. They have to invert the cup in a single flip.<br>
4. Until one member completes the task, the next member will not be allowed to perform the task. <br>
5. Five minutes will be provided to each team to perform the task.<br>
6. The team which completed the task faster or having more number of flipped cups will proceed further.<br>
<br>
Round 2:<br>
<br>
1.In this round, each team will be provided six cups.<br>
2.With the help of a rubber band and thread mechanism, each cup has to be lifted (without touching the cup with hand ) and has to be placed in a pyramid formation with three cups at bottom, two over them and  then one at top.<br>
<br>
# Team KRITI reserve all the right to change rules.<br>
# The decision of team KRITI is final.<br>


      </p>
     
      <h3 style="color: #551A8B">
       Prize:
      </h3>
      <p style="color:#FFF68F">
Worth 6k<br>
NOTE: EACH TEAM MEMBER HAS TO REGISTER INDIVIDUALLY.<br>


</p>
   <br>
	<a href="login_reg/process.php?id=9" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Participate</a>

     
    </div>
  
    

    </body>
 