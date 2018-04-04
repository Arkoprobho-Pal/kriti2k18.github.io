<!DOCTYPE html>

<html>
    
<head>
	<title>
    Mr. & Miss Kriti
	</title>
        <link rel="icon" href="img/icon.png">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
	
	
	
 	
 	<link type="text/css" rel="stylesheet" href="css/css-content.css">
 	
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100&effect=neon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body{
background-color:black;
}
</style>
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
        <h1 style="color:#FFF68F,text-align:center;">                                                CLAMOUR 4 GLAMOUR
(# Dress Impress Express)


</h1> 
    
      <h3 style="color: #551A8B">Description:</h3>
      
      <p style="color:#FFF68F">
Choose your own theme. Think free and go all out. Don&#39;t be afraid to throw your hats in the ring. Dress to
~impress~ express. <br>
      </p>
<h3 style="color: #551A8B">Rules:</h3>
      <p style="color:#FFF68F">


1. It is team event of two member.<br>
2. Team is required to design an outfit completely made out of scrap like newspapers. The idea is to
sew both fashion and eco-friendliness into one, because garbage can be stylish too, right?<br>
3. Participants are required to bring their own makeover kits.
4. Creating the outfit needs to be done within 3 hours.<br>
5. Participants will be judged on aesthetic appeal, functionality of the costume,as well as overall presentation (MakeUp) and on the
expression/narrative as such.<br>
6. Scrap items of the likes of newspapers, stickers plastics, fibre, cardboard, stapler, cello tape etc.
will be provided on spot.<br>
7. One of the two team members will be required to wear and showcase your outfit, a catwalk of
sorts.  <br>
8. Any vulgar designing of the dress will lead to disqualification.<br>
9. Use of internet is strictly prohibited.<br>
10. Team KRITI reserves all rights to change rules.<br>
11. Decision of Team KRITI will be final.<br>

      </p>
     
      <h3 style="color: #551A8B">
       Prize:
      </h3>
      <p style="color:#FFF68F">
Worth 7k<br>
NOTE: EACH TEAM MEMBER HAS TO REGISTER INDIVIDUALLY.<br>


</p>
   <br>
	<a href="login_reg/process.php?id=20" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Participate</a>

     
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
 