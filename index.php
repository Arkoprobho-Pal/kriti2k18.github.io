<!DOCTYPE html>

<html>
<head>
	<title>
	Kriti Homepage
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
 	<link type="text/css" rel="stylesheet" href="css/style1.css">
 	<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100&effect=neon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style>
	
	.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(img/loader5.gif) center no-repeat #ff5733;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
	
<script>
$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
	
	
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuerys animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

	<script>

	
	
const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('Feb 9, 2018 00:00:00').getTime(),
    x = setInterval(function() {

      let now = new Date().getTime(),
          distance = countDown - now;

      document.getElementById('days').innerHTML = Math.floor(distance / (day)),
        document.getElementById('hours').innerHTML = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerHTML = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerHTML = Math.floor((distance % (minute)) / second);
      
      //do something later when date is reached
      //if (distance < 0) {
      //  clearInterval(x);
      //  'IT'S ON!;
      //}

    }, second);
	
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


<div class="faceparallax" style="background-image:url('img/main.jpg')">
<div class="wrapper">
  
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
				<li><a href="#events">Events</a></li>
				<!--<li><a href="results.php" style="color:yellow ;">☆Results☆</a></li>
				<!--<li><a href="#socialcause">Social Cause</a></li>-->
				<li style="color:yellow;"><a href="https://docs.google.com/forms/d/e/1FAIpQLSdYlfJptFM5JDoQBMPX351BBMSPoisVPQT73mV1092vbkZSRA/viewform" class="Ca">Campus Ambassador</a></li>
				<!--<li><a href="http://scagekriti2k18.com/registration_fee.php">Registration Fee</a></li>
				<li><a href="schedule.php" style="color:yellow;">☆Schedule☆</a></li>-->
				<li><a href="#teammem">Team</a></li>
				<!--
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
				-->
				</br>
			</ul>
		</div>
	</nav>

  
</div>

	
</div>	

<div class="parallax" style="background-color:red;height:50%;">
</br></br></br></br>
<div class="container">
	  <h1 id="head"class="font-effect-neon" style="font-family: Lato;">Kriti 2019 to be announced soon</h1>
	  
	  	<h1>Static page(will be activate soon..)</h1>
	  
	</div>
</div>
<iframe width="100%" height="645" src="https://www.youtube.com/embed/2YFy1Dv_Tpc">
</iframe>

	


<a id="events" style="text-decoration:none;">
<div class= "faceparallax" style="background-image:url('img/event.jpg')">

	</br></br>
<a href="https://drive.google.com/file/d/1GZMrZnd314-BV0VGvvUJ44at23kykzXH/view?usp=sharing" style="text-decoration:none;">
<h3 class="butt" style="position:center;font-size:2em;">Online Events</h3></a>
</br></br></br></br></br></br>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
	<tr> 
		<td class="left"style="color:white;">
			<a href="#artncraft" style="text-decoration:none;">
				<h3 class="butt">ART & CRAFT</h3>
			</a>
			</br></br></br></br>
			<a href="#workshop" style="text-decoration:none;">
				<h3 class="butt">WORKSHOP</h3>
			</a>
			</br></br></br></br>
			<a href="#funevents" style="text-decoration:none;">	
				<h3 class="butt">FUN EVENTS</h3>
			</a>
		</td>

		<td class="right"style="color:white;">
			<a href="#dance" style="text-decoration:none;">
				<h3 class="butt">DANCE</h3>
			</a>
			</br></br></br></br>
			<a href="#proshow" style="text-decoration:none;">
				<h3 class="butt">PRO SHOW</h3>
			</a>
			</br></br></br></br>
			<a href="#miscellaneous" style="text-decoration:none;">
				<h3 class="butt">MISCELLANEOUS</h3>
			</a>
		</td> 
		</tr> 
	</table>

</div>
</a>

<!-- art&craft-->
<a id="artncraft" style="text-decoration:none;">
<div class="parallax" style="background-image:url('img/art.jpg')"></div></a>
<div class="skew">
	
	
	
	<!--<div class="content"> -->
	<h2 class="font-effect-neon" style="font-family: Lato;"> ART & CRAFT</h2>
	<table width="20%"border="0" cellspacing="0" cellpadding="0"> 
	<tr> 
		<td style="color:white;">
			<a href="manja.php" style="text-decoration:none;">
				<div  class="butt"><h3>MANJHA</h3></div>
			</a>
		</td>
	</tr>
<tr><td></br></td></tr>
	<tr>
		<td>
		
			<a href="kalakari.php" style="text-decoration:none;">
				<div class="butt"><h3>KALAKARI</h3></div>
			</a>
		</td>
	</tr>
<tr><td></br></td></tr>
	<tr>
		<td>
			
			<a href="ungal.php" style="text-decoration:none;">	
				<div class="butt"><h3>UNGAL</h3></div>
			</a>
		</td>
	</tr>
	</table>
	
	
		
	
</div>

<!-- workshop-->
<a id="workshop" style="text-decoration:none;">
<div class="parallax" style="background-image:url('img/workshop.jpg')"></div></a>
<div class="skew" style="background:#551A8B;">
	<h3 class="font-effect-neon" style="font-family: Lato;float:right;font-size:3.8em;">WORKSHOPS</h3>
	<table width="40%"border="0" cellspacing="0" cellpadding="0"> 
	<tr> 
		<td style="color:white;">
			<a href="sandart.php" style="text-decoration:none;">
				<div class="butt"><h3>Sand Art</h3></div>
			</a>
		</td>
	</tr>
<tr><td></br></td></tr>
	<tr>
		<td>
		
			<a href="dancework.php" style="text-decoration:none;">
					<div class="butt"><h3>Dance</h3></div>
			</a>
		</td>
	</tr>
<tr><td></br></td></tr>
	<tr>
		<td>
			
			<a href="magicwork.php" style="text-decoration:none;">	
				<div  class="butt"><h3>Flashpoint Magic</h3></div>
			</a>
		</td>
	</tr>
	</table>
		
	
</div>

<!--funevents -->

<a id="funevents" style="text-decoration:none;">
<div class="parallax" style="background-image:url('img/fun.jpg')"></div></a>
<div class="skew" style="background:#f48042;">
	<h2>Fun Events</h2>
	<table width="40%"border="0" cellspacing="0" cellpadding="0"> 
	<tr> 
		<td style="color:white;">
			<a href="mahabharata.php" style="text-decoration:none;">
				<div  class="butt"><h3>Mahabharata</h3></div>
			</a>
		</td>
	</tr>
<tr><td></br></td></tr>
	<tr>
		<td>
		
			<a href="bingo-bango.php" style="text-decoration:none;">
				<div  class="butt"><h3>Bingo Bango</h3></div>
			</a>
		</td>
	</tr>
<tr><td></br></td></tr>
	<tr>
		<td>
			
			<a href="focus.php" style="text-decoration:none;">	
				<div  class="butt"><h3>Focus</h3></div>
			</a>
		</td>
	</tr>
<tr><td></br></td></tr>
	<tr>
		<td>
			
			<a href="pic-charades.php" style="text-decoration:none;">	
				<div  class="butt"><h3>Pic Charades</h3></div>
			</a>
		</td>
	</tr>
	</table>
	
		
	
</div>

<!--dance-->

<a id="dance" style="text-decoration:none;">
<div class="parallax" style="background-image:url('img/dance.jpg')"></div></a>
<div class="skew" style="background:yellow;">
	<h2>Dance</h2>
	<table width="40%"border="0" cellspacing="0" cellpadding="0"> 
	<tr> 
		<td style="color:white;">
			<a href="faceoff.php" style="text-decoration:none;">
				<div  class="butt"><h3>Face Off</h3></div>
			</a>
		</td>
	</tr>
<tr><td></br></td></tr>
	<tr>
		<td>
		
			<a href="dance.php" style="text-decoration:none;">
				<div  class="butt"><h3>Dance Competition</h3></div>
			</a>
		</td>
	</tr>
<tr><td></br></td></tr>
	<tr>
		<td>
			
			<a href="wiggle.php" style="text-decoration:none;">	
				<div  class="butt"><h3>Wiggle Wiggle</h3></div>
			</a>
		</td>
	</tr>
<tr><td></br></td></tr>
	<!-- <tr>
		<td>
			
			<a href="soon.php" style="text-decoration:none;">	
				<div  class="butt"><h3>Flash Mob</h3></div>
			</a>
		</td> 
	</tr> -->
	</table>
	<div class="content">
		
	</div>
</div>


<!--proshow-->
<a id="proshow" style="text-decoration:none;">
<div class="parallax" style="background-image:url('img/party.jpg')"></div></a>
<div class="skew">
	<h2 class="font-effect-neon" style="font-family: Lato;"> PRO SHOW</h2>
	<table width="40%"border="0" cellspacing="0" cellpadding="0"> 
	<tr> 
		<td style="color:white;">
			<a href="dj.php" style="text-decoration:none;">
				<div  class="butt"><h3>Dj Night</h3></div>
			</a>
		</td>
	</tr>
<tr><td></br></td></tr>
	<tr>
		<td>
		
			<a href="magicshow.php" style="text-decoration:none;">
				<div class="butt"><h3>Magic Show</h3></div>
			</a>
		</td>
	</tr>
<tr><td></br></td></tr>
	<tr>
		<td>
			
			<a href="sandartshow.php" style="text-decoration:none;">	
				<div class="butt"><h3>Sand Art Show</h3></div>
			</a>
		</td>
	</tr>
	</table>
	<div class="content">
		
	</div>
</div>


<!--Miscellaneous-->
<a id="miscellaneous" style="text-decoration:none;">
<div class="parallax" style="background-image:url('img/misc.jpg')"></div></a>
<div class="skew" style="background:yellow;">
	<h3 style="float:right;font-size:3.8em;">Miscellaneous</h3>
	<table width="40%"border="0" cellspacing="0" cellpadding="0"> 
	<tr> 
		<td style="color:white;">
			<a href="tracerace.php" style="text-decoration:none;">
				<div  class="butt"><h3>Trace & Race</h3></div>
			</a>
		</td>
	</tr>
<tr><td></br></td></tr>
	<tr>
		<td>
		
			<a href="where.php" style="text-decoration:none;">
				<div  class="butt"><h3>Where's The Fish</h3></div>
			</a>
		</td>
	</tr>
<tr><td></br></td></tr>
	<tr>
		<td>
			
			<a href="c4g.php" style="text-decoration:none;">	
				<div  class="butt"><h3>Clamour 4 Glamour</h3></div>
			</a>
		</td>
	</tr>
<tr><td></br></td></tr>
	<tr>
		<td>
			
			<a href="mr-mrskriti.php" style="text-decoration:none;">	
				<div  class="butt"><h3>Mr.& Miss Kriti</h3></div>
			</a>
		</td>
	</tr>
	</table>
	<div class="content">
		
	</div>
</div>


<div class="parallax" style="background-color:black;height:20%;text-decoration:none;"></div>

<a id="socialcause" style="text-decoration:none;">
<div style="background:black;color:white;"></a>
</br></br></br></br></br></br></br></br></br>
<h1 class="social" style="font-family:Verdana;">SOCIAL CAUSE : Tiger<h1></br></br>
<p class="social">
Over the past century tiger numbers have fallen dramatically, with a decreasing population trend. None of the Tiger Conservation Landscapes within the Bengal tiger range is large enough to support an effective population size of 250 individuals. Habitat losses and the extremely large-scale incidences of poaching are serious threats to the species survival.</p>
<p class="social">
The challenge in the Western Ghats forest complex in western South India, an area of 14,400 square miles (37,000 km2) stretching across several protected areas is that people live within its borders. The Save the Tiger Fund Council estimates that 7,500 landless people live illegally inside the boundaries of the 386-square-mile (1,000 km2) Nagarhole National Park in southwestern India. A voluntary if controversial resettlement is underway with the aid of the Karnataka Tiger Conservation Project led by K. Ullas Karanth of the Wildlife Conservation Society.</p></br></br></br>
</div>

<div class="parallax" style="background-color:#222;">
</br></br><h1 class="title" style="color:white;">
			    Reach Us
			    <br>
			    <small>Get the direction</small>
			</h1>
			</br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.6392990484474!2d88.30494921495924!3d22.555180785191748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0279c91a8d2d49%3A0xc6ee508c74cf031d!2sIndian+Institute+of+Engineering+Science+And+Technology%2C+Shibpur!5e0!3m2!1sen!2sin!4v1516786208073" width="100%" height="50%" frameborder="0" style="border:0" allowfullscreen></iframe></br></br></br></br>
</div>

<div class="team" id="teammem">
		<div class="container">
		    <div class="row">
			<h1 class="title">
			    Our Team
			    <br>
			    <small>KRITI 2018</small>
			</h1>
			<div class="col-sm-10 col-sm-offset-1">
			 
		<!--         <div class="col-sm-1"></div> -->
			
			<!-- end col-sm-3 -->
			
			

   
<h1>Sponsorship & Marketing Team</h1>
                   	

<!-- Sponsor team-->
	<div class="col-md-6 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/ashutosh.jpg"/>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Ashutosh Kumar</h3>
				                <p class="profession">Sponsorship & Marketing Head</p>

				                <p class="text-center" style="font-size:1em;">"Whatever you want to do, do it now. There are only so many tomorrows."</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				                    <i class="fa fa-phone"></i> +91-7980348546
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto">ashuiiest@gmail.com</h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center">Civil (3rd) IIEST Shibpur</h4>
				                <p class="text-center"></p>

				            </div>
				        </div>
				        <div class="footer">

				            <div class="social-links text-center">
				                <a href="https://www.facebook.com/profile.php?id=100011044029742" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				          <!--      <a href="" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>-->
				            </div>
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>
    <!-- start-->
			<div class="col-md-6 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/sunny.jpg"/>
				        </div>
				        
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Sunny Sharma</h3>
				                <p class="profession"></p>

				                <p class="text-center" style="font-size:1em;">" With the new day comes new strength and new thoughts."</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				                    <i class="fa fa-phone"></i> +91-8789574398
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto">Sunnysha1999@gmail.com</h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center">Electrical Engg.(2nd)</h4>
				                <p class="text-center">IIEST Shibpur</p>

				            </div>
				        </div>
				        <div class="footer">

				            <div class="social-links text-center">
				                <a href="https://www.facebook.com/shane.the.soul.shaker" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				               <!-- <a href="https://plus.google.com/u/1/101461014558616156272" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="https://twitter.com/Arkoprobho_Pal" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>-->
				            </div>
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>
	</div>	
	
	
			<div class="col-sm-10 col-sm-offset-1">	
<h1>Event-Coordinator</h1>
			<!--Event-->				
				
				
	<!---Event co-->		
			<div class="col-md-6 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/ashish.jpg"/>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Ashish Kumar</h3>
				                <p class="profession">Event Co-ordinator</p>

				                <p class="text-center" style="font-size:1em;">"Be satisfied, but never end your satisfaction."</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				                    <i class="fa fa-phone"></i> +91-8622991827
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto">kashishkumar2015@gmail.com</h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center">Mechanical (3rd) IIEST Shibpur</h4>
				                <p class="text-center"> </p>

				            </div>
				        </div>
				        <div class="footer">

				            <div class="social-links text-center">
				                <a href="https://www.facebook.com/profile.php?id=100006894844418" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				           <!--     <a href="" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>-->
				            </div>
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>
	<!--Event Coordinator-->
			<div class="col-md-6 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/rajiv.jpg"/>
				        </div>
				        
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Rajiv Kumar Dey</h3>
				                <p class="profession">Event Co-ordinator</p>

				                <p class="text-center" style="font-size:1em;">" Do you exist ? If you do this is the right time to make an appearance. "</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				                    <i class="fa fa-phone"></i> +91-8017541604
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto">rajib24121995@gmail.com</h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center">Mechanical (3rd) IIEST Shibpur</h4>
				                <p class="text-center"></p>

				            </div>
				        </div>
				        <div class="footer">

				            <div class="social-links text-center">
				                <a href="https://www.facebook.com/rajibkr24" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				               <!-- <a href="https://plus.google.com/u/1/101461014558616156272" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="https://twitter.com/Arkoprobho_Pal" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>-->
				            </div>
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>
	</div>		
	
			<div class="col-sm-10 col-sm-offset-1">	
			<h1>Design Team</h1>
<!--Design team-->
<!--Design-->			
				<div class="col-md-6 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/shabab.jpg"/>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Shabab Naiyer</h3>
				                <p class="profession">Design Head</p>

				                <p class="text-center" style="font-size:1em;">"Change Begins with Choice. "</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				                    <i class="fa fa-phone"></i> +91-9431689886
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto">naiyershabab@gmail.com</h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center">Civil (3rd) IIEST Shibpur</h4>
				                <p class="text-center"></p>

				            </div>
				        </div>
				        <div class="footer">

				            <div class="social-links text-center">
				                <a href="https://www.facebook.com/sabab.naiyer.3" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				         <!--       <a href="" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>-->
				            </div>
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>
<!--Design-->
			<div class="col-md-6 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/shivam.jpg"/>
				        </div>
				        
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Shivam Soni</h3>
				                <p class="profession"></p>

				                <p class="text-center" style="font-size:1em;">" It's better to be a lion for a day than a sheep all your life. "</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				                    <i class="fa fa-phone"></i> +91-7903869300
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto">shivam.soni.dhanbad@gmail.com</h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center">Civil(2nd Year)</h4>
				                <p class="text-center">IIEST Shibpur</p>

				            </div>
				        </div>
				        <div class="footer">

				            <div class="social-links text-center">
				                <a href="https://www.facebook.com/shivam.soni.dav" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				               <!-- <a href="https://plus.google.com/u/1/101461014558616156272" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="https://twitter.com/Arkoprobho_Pal" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>-->
				            </div>
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>
	</div>
			

			<div class="col-sm-10 col-sm-offset-1">	
<h1>Web Development Team</h1>			
<!--Web Team-->		
	<!--Web-->		
			<div class="col-md-4 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/arko.jpg"/>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Arkoprobho Pal</h3>
				                <p class="profession">Head Developer</p>

				                <p class="text-center" style="font-size:1em;">"If you cannot do great things, do small things in a great way. "</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				                    <i class="fa fa-phone"></i> +91-8343920680
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto">arkoprobhopal.edu@gmail.com</h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center">IT (3rd) IIEST Shibpur</h4>
				                <p class="text-center"></p>

				            </div>
				        </div>
				        <div class="footer">

				            <div class="social-links text-center">
				                <a href="https://www.facebook.com/arkoprobho.pal.7" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				                <a href="https://plus.google.com/u/1/101461014558616156272" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="https://twitter.com/Arkoprobho_Pal" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
				            </div>
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>
			
	<!--Web-->		
			<div class="col-md-4 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/arnab.jpg"/>
				        </div>
				        
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Arnab Nath</h3>
				                <p class="profession"></p>

				                <p class="text-center" style="font-size:1em;">" Do you exist ? If you do this is the right time to make an appearance. "</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				                    <i class="fa fa-phone"></i> +91-9832404356
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto"></h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center">IT (2nd) IIEST Shibpur</h4>
				                <p class="text-center"></p>

				            </div>
				        </div>
				        <div class="footer">

				            <div class="social-links text-center">
				                <a href="https://www.facebook.com/arnab.nath11" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				               <!-- <a href="https://plus.google.com/u/1/101461014558616156272" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="https://twitter.com/Arkoprobho_Pal" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>-->
				            </div>
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>
	<!--Web-->		
			<div class="col-md-4 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/badam.jpg"/>
				        </div>
				        
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Badam Akash Prasad</h3>
				                <p class="profession"></p>

				                <p class="text-center" style="font-size:1em;">" It does not matter how slowly you go as long as you do not stop. "</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				                    <i class="fa fa-phone"></i> +91-8240051171
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto">akashb97@gmail.com</h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center">IT (3rd) IIEST Shibpur</h4>
				                <p class="text-center"></p>

				            </div>
				        </div>
				        <div class="footer">

				            <div class="social-links text-center">
				                <a href="https://www.facebook.com/akash.prasad.180" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				               <!-- <a href="https://plus.google.com/u/1/101461014558616156272" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="https://twitter.com/Arkoprobho_Pal" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>-->
				            </div>
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>

<!--Finance team-->	
</div>

			<div class="col-sm-10 col-sm-offset-1">	
<h1>Finance Team</h1>
		<!--Finance-->		
           	<div class="col-md-6 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/shantanu.jpg"/>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Shantanu Anand</h3>
				                <p class="profession">Finance Head</p>

				                <p class="text-center" style="font-size:1em;">"Begin with end in the mind."</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				                    <i class="fa fa-phone"></i> +91-8537828593
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto">shantanuanand96@gmail.com</h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center">Civil (3rd) IIEST Shibpur</h4>
				                <p class="text-center"></p>

				            </div>
				        </div>
				        <div class="footer">

				            <div class="social-links text-center">
				                <a href="https://www.facebook.com/shantanu.anand.77" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				      <!--          <a href="" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>-->
				            </div>
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>
	<!-- Finance-->
			<div class="col-md-6 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/kundan.jpg"/>
				        </div>
				        
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Kundan Kumar</h3>
				                <p class="profession"></p>

				                <p class="text-center" style="font-size:1em;">"Strength and growth come only through continuous effort and struggle. "</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				                    <i class="fa fa-phone"></i> +91-7992205757
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto">kkumarkundan22@gmail.com</h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center">Metallurgy(2nd Year)</h4>
				                <p class="text-center"></p>

				            </div>
				        </div>
				        <div class="footer">

				            <div class="social-links text-center">
				                <a href="https://www.facebook.com/profile.php?id=100009284863055" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				               <!-- <a href="https://plus.google.com/u/1/101461014558616156272" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="https://twitter.com/Arkoprobho_Pal" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>-->
				            </div>
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>
</div>

			<div class="col-sm-10 col-sm-offset-1">	
		<h1>Publicity Team</h1>	
<!--publicity team-->		
	<!-- Publicity-->
			<div class="col-md-4 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/arnabc.jpg"/>
				        </div>
				        
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Arnab Char</h3>
				                <p class="profession"></p>

				                <p class="text-center" style="font-size:1em;">"No one saves us but ourselves. No one can and no one may. We ourselves must walk the path. "</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				                    <i class="fa fa-phone"></i> +91-7908990824
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto">arnabchar4@gmail.com</h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center"></h4>
				                <p class="text-center"></p>

				            </div>
				        </div>
				        <div class="footer">

				            <div class="social-links text-center">
				                <a href="https://www.facebook.com/arnab.char.7" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				               <!-- <a href="https://plus.google.com/u/1/101461014558616156272" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="https://twitter.com/Arkoprobho_Pal" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>-->
				            </div>
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>
				<!-- Publicity-->
			<div class="col-md-4 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/mohanee.jpg"/>
				        </div>
				        
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Mohanee Dammu</h3>
				                <p class="profession"></p>

				                <p class="text-center" style="font-size:1em;">"Strength does not come from winning. Your struggles develop your strengths. When you go through hardships and decide not to surrender, that is strength."</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				               <!--     <i class="fa fa-phone"></i> +91 -->
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto">CST(2nd Year)</h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center"></h4>
				                <p class="text-center"></p>

				            </div>
				        </div>
				        <div class="footer">
					<!--
				            <div class="social-links text-center">
				                <a href="https://www.facebook.com/arnab.char.7" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				                <a href="https://plus.google.com/u/1/101461014558616156272" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="https://twitter.com/Arkoprobho_Pal" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
				            </div>-->
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>
			
		<!-- Publicity-->

			<div class="col-md-4 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/naresh.jpg"/>
				        </div>
				        
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Naresh Kumar</h3>
				                <p class="profession"></p>

				                <p class="text-center" style="font-size:1em;">" Continuous effort - not strength or intelligence - is the key to unlocking our potential."</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				                    <i class="fa fa-phone"></i> +91-7889550938
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto">nareshkumarudh967@gmail.com</h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center">Civil(2nd Year)</h4>
				                <p class="text-center"></p>

				            </div>
				        </div>
				        <div class="footer">

				            <div class="social-links text-center">
				                <a href="https://www.facebook.com/profile.php?id=100003071410994" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				               <!-- <a href="https://plus.google.com/u/1/101461014558616156272" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="https://twitter.com/Arkoprobho_Pal" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>-->
				            </div>
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>
</div>

			<div class="col-sm-10 col-sm-offset-1">	
		<h1>Content Writers</h1>	
<!--Writer team-->			
			<!-- Writer-->
			<div class="col-md-4 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/pranay.jpg"/>
				        </div>
				        
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Pranay Khewle</h3>
				                <p class="profession"></p>

				                <p class="text-center" style="font-size:1em;">"Talent is God given. Be humble. Fame is man-given. Be grateful. Conceit is self-given. Be careful. "</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				                    <i class="fa fa-phone"></i> +91-8766935350
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto">pranay.shift8@gmail.com</h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center">Mechanical(3rd Year)</h4>
				                <p class="text-center"></p>

				            </div>
				        </div>
				        <div class="footer">

				            <div class="social-links text-center">
				                <a href="https://www.facebook.com/BONKEREDmind?ref=br_rs" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				               <!-- <a href="https://plus.google.com/u/1/101461014558616156272" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="https://twitter.com/Arkoprobho_Pal" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>-->
				            </div>
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>
			<!-- Writer-->
			<div class="col-md-4 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/kashish.jpg"/>
				        </div>
				        
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Kashish Verma</h3>
				                <p class="profession"></p>

				                <p class="text-center" style="font-size:1em;">"Kites rise highest against the wind - not with it. "</p>
				            </div>
				            <div class="footer">
				              <div class="rating">
				                   <!--   <i class="fa fa-phone"></i> +91 -->
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto"></h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center">Electrical Engg.(3rd Year)</h4>
				                <p class="text-center"></p>

				            </div>
				        </div>
				        <div class="footer">
					<!-- 
				            <div class="social-links text-center">
				                <a href="https://www.facebook.com/BONKEREDmind?ref=br_rs" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				               <a href="https://plus.google.com/u/1/101461014558616156272" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="https://twitter.com/Arkoprobho_Pal" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
				            </div>-->
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>
			<!-- Writer-->
			<div class="col-md-4 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/niket.jpg"/>
				        </div>
				        
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Niket Sinha</h3>
				                <p class="profession"></p>

				                <p class="text-center" style="font-size:1em;">" If you can dream it, you can do it. "</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				                    <i class="fa fa-phone"></i> +91-8210973455
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto">niketsinha18@gmail.com</h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center">Civil(3rd Year)</h4>
				                <p class="text-center"></p>

				            </div>
				        </div>
				        <div class="footer">

				            <div class="social-links text-center">
				                <a href="https://www.facebook.com/niket.sinha.12?ref=br_rs" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				               <!-- <a href="https://plus.google.com/u/1/101461014558616156272" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="https://twitter.com/Arkoprobho_Pal" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>-->
				            </div>
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>

			</div> <!-- end col-sm-10 -->
			
			<div class="col-sm-10 col-sm-offset-1">	
			<h1 style="color:#222;">Special Mentions</h1>
<!--Professor Incharge-->			
				<div class="col-md-12 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/prof.jpg"/>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Prof. Aditya Bandyopadhyay</h3>
				                <p class="profession">professor Incharge</p>

				                <p class="text-center" style="font-size:1em;">"A leader is one who knows the way, goes the way, and shows the way. "</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				                    <i class="fa fa-phone"></i> 26684561-63 
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto"> bandyopadhyay.aditya@gmail.com</h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center">Dean, Infrastructure, Planning & Management IIEST Shibpur</h4>
				                <p class="text-center">Professor, Department of Architecture, Town and Regional Planning</p>

				            </div>
				        </div>
				        <div class="footer">
 <!-- 
				            <div class="social-links text-center">
				                <a href="https://www.facebook.com/sabab.naiyer.3" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				              <a href="" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
				            </div>-->
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>
			</div> <!-- end col-sm-10 -->
			
			
			
						<div class="col-sm-10 col-sm-offset-1">	
			
<!--Founder-->			
				<div class="col-md-12 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/ayan.jpg"/>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Ayan Roy</h3>
				                <p class="profession">Founder</p>

				                <p class="text-center" style="font-size:1em;">"The art of communication is the language of leadership. "</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				                    <i class="fa fa-phone"></i> +91-8981737695
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto"> ayanroy.roy@gmail.com</h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center">Alumnus IIEST Shibpur</h4>
				                <p class="text-center">Department of Architecture, Town and Regional Planning</p>

				            </div>
				        </div>
				        <div class="footer">
			            <div class="social-links text-center">
				                <a href="https://www.facebook.com/IamAyan57" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				          <!--	     <a href="" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>-->
				            </div>
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>
			</div> <!-- end col-sm-10 -->
			
			<div class="col-sm-10 col-sm-offset-1">	
			<!--co-Founder-->			
				<div class="col-md-6 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/akanksha.jpg"/>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Akanksha Joshi</h3>
				                <p class="profession"></p>

				                <p class="text-center" style="font-size:1em;">"Think little goals and expect little achievements. Think big goals and win big success. "</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				                    <i class="fa fa-phone"></i> +91-9468228468
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto"> joshi.akanksha2495@gmail.com</h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center">IIEST Shibpur</h4>
				                <p class="text-center">Food Processing & Nutrition Science</p>

				            </div>
				        </div>
				        <div class="footer">
			            <div class="social-links text-center">
				                <a href="https://www.facebook.com/akanksha.joshi.9849" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				          <!--	     <a href="" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>-->
				            </div>
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>
			
			<!--Co-Founder-->			
				<div class="col-md-6 col-sm-6">
			    <div class="card-container">
				<div class="card">
				    <div class="front">
				        <div class="cover">
				            <img src="img/rotating_card_thumb3.png"/>
				        </div>
				        <div class="user">
				            <img class="img-circle" src="team/arijit.jpg"/>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h3 class="name">Arijit Ghosh</h3>
				                <p class="profession"></p>

				                <p class="text-center" style="font-size:1em;">"Don't find fault, find a remedy. "</p>
				            </div>
				            <div class="footer">
				                <div class="rating">
				                    <i class="fa fa-phone"></i> +91-8013224739
				                </div>
				            </div>
				        </div>
				    </div> <!-- end front panel -->
				    <div class="back">
				        <div class="header">
				            <h5 class="motto"> arijitg999@gmail.com</h5>
				        </div>
				        <div class="conten">
				            <div class="main">
				                <h4 class="text-center">IIEST Shibpur</h4>
				                <p class="text-center">Department of Civil Engineering</p>

				            </div>
				        </div>
				        <div class="footer">
			            <div class="social-links text-center">
				                <a href="https://www.facebook.com/arijithrtbit.ghosh" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
				          <!--	     <a href="" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
				                <a href="" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>-->
				            </div>
				        </div>
				    </div> <!-- end back panel -->
				</div> <!-- end card -->
			    </div> <!-- end card-container -->
			</div>
			</div> <!-- end col-sm-10 -->
			
				
		    </div> <!-- end row -->
			
			
			
			
		    <div class="space-200"></div>
		</div> 
		
<div id="sponsor" class="parallax" style="background-color:white;">
</br></br><h1 class="title" style="color:#222;text-align:center;">
			    Our Sponsors
			    <br></br>
			    
			   
			</h1>
			<a href="https://nationalinsuranceindia.nic.co.in/portal/page/portal/Corporate/Home">
			 <img src="img/nic.jpg" style=" display: block;margin-left: auto;margin-right: auto;width: 70%;"/> </a></br>
			 <h3 style="text-align:center;">National Insurance<br><small>Title Sponsor</small></h3>
			 
			 </br></br>
			 <table  cellspacing="30" style="width:100%">
			 <tr>
				<td><a href="https://www.bergerpaints.com/">
					<img src="img/berger.jpg" style="display: block;margin: 0 auto;width:50%;"/></a></br>
					<h3 style="text-align:center;">Berger Paints<br><small>Event Partner</small></h3>
			 	</td>
			 	<td><a href="https://www.google.co.in/search?ei=XyR7WvCTH8TxvAT1iYTYAQ&q=turn+ur+head&oq=turn+ur+head&gs_l=psy-ab.3..0l9j0i10k1.443981.446332.0.446607.12.8.0.0.0.0.637.637.5-1.1.0....0...1c.1.64.psy-ab..11.1.636....0.gMr3aadsLdM">
			 		<img src="img/hair.jpg" style="display: block;margin: 0 auto;width:50%;"/></a></br>
			 		<h3 style="text-align:center;">Turn Ur Head<br><small>Fashion Partner</small></h3>
				</td>
			</tr>
			<tr>
				<td><a href="https://www.cafecoffeeday.com/">
					<img src="img/ccd.png" style="display: block;margin: 0 auto;width:50%;"/></a></br>
					<h3 style="text-align:center;">Cafe Coffee Day<br><small>Beverage Partner</small></h3>
			 	</td>
			 	<td>	<a href="https://www.facebook.com/WowMomos/">
			 		<img src="img/momo.jpg" style="display: block;margin: 0 auto;width:50%;"/></a></br>
			 		<h3 style="text-align:center;">Wow Momo<br><small>Venue Partner</small></h3>
				</td>
			</tr>
			<tr>
				<td><a href="https://www.facebook.com/Friendzone-Fried-Chicken-116305275723651/">
					<img src="img/ffc.jpg" style="display: block;margin: 0 auto;width:50%;"/></a></br>
					<h3 style="text-align:center;">Friendzone Fried Chicken<br><small>Venue Partner</small></h3>
			 	</td>
			 	<td><a href="https://tunein.com/radio/Friends-FM-919-s68823/">
			 		<img src="img/friends.jpg" style="display: block;margin: 0 auto;width:50%;"/></a></br>
			 		<h3 style="text-align:center;">Friends FM<br><small>Media Partner</small></h3>
				</td>
			</tr>
			<tr>
				
			 	<td><a href="https://www.google.co.in/search?ei=1SJ7WrGGDsvqvgTk0a6QDQ&q=paris+bakery&oq=paris+ba&gs_l=psy-ab.3.0.0l10.192959.194766.0.197140.8.8.0.0.0.0.626.626.5-1.1.0....0...1c.1.64.psy-ab..7.1.625....0.RHN5VFaGLl4">
			 		<img src="paris.jpg" style="display: block;margin: 0 auto;width:50%;"/></a></br>
					<h3 style="text-align:center;">Paris Bakery<br><small>Venue Partner</small></h3>
				</td>
			</tr>
			</table>
			</br></br>
			 

</div>
		
		<div class="col-sm-12"style="text-align:center;background:#ff5733;"><h1>KRITI 2018</h1></br>Copyright © 2018 Scage. All rights reserved</br>
		<h3><a href="https://www.facebook.com/ScageIIESTshibpur/"><i class="fa fa-facebook fa-fw"></i></a></h3>
		</div>
		    
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
<div class="se-pre-con" ></div>
</html>
