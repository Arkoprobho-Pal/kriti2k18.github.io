<html>
<head>
	<title>Sponsors</title>
	
	<link rel="icon" href="img/icon.png">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=2">
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
 	 	<link type="text/css" rel="stylesheet" href="css/style1.css">
 	 		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100&effect=neon">
 	
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
		<a href="index.php" style="text-decoration:none;">
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


<div  style="background-color:white;">
</br></br><h1 class="title" style="color:#222;text-align:center;">
			    Our Sponsors
			    <br></br>
			    
			   
			</h1>
			
			 <img src="img/nic.jpg" style=" display: block;margin-left: auto;margin-right: auto;width: 70%;"/></br>
			 <h3 style="text-align:center;">National Insurance<br><small>Title Sponsor</small></h3>
			 
			 </br></br>
			 <table  cellspacing="30" style="width:100%">
			 <tr>
			<td>
					<img src="img/berger.jpg" style=" display: inline-block;margin-left: auto;margin-right: auto;width: 30%;"/></br>
					<h3 style="text-align:center;">Berger Paint<br></h3>
			 	</td>
			 	<td>
			 		<img src="img/hair.jpg" style=" display: inline-block;margin-left: auto;margin-right: auto;width: 30%;"/></br>
			 		<h3 style="text-align:center;">Turn Ur Head<br></h3>
				</td>
			</tr>

</div>

</body>
</html>