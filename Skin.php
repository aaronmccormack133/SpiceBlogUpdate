<?php
	session_start();
?>
<?php
	date_default_timezone_set('Europe/Dublin');
	include 'dbh.php';
	include 'comments4.php';
?>



<!DOCTYPE html>

<html>

	<head>
	
		<title>New Szn | Bomber</title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="&nbsp;"/>
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		<meta name="msapplication-TileImage" content="mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
		<meta charset="UTF-8">
		<meta name="description" content="New Szn is a mens fashion and just general cool miscellaneous website that caters for all of your needs. Click in and take a look around. ">
		<meta name="keywords" content="New Szn,Szn,Bomber,Bomber jacket, Bomber szn, Read, Read More, jackets, Coats, Shopping, winter, shopping for the winter, Face, men's face, good mens face cream, shaving, dry skin, new szn twitter, new szn instagram, new szn facebook">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

		
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<meta name="twitter:card" content="player">
	<meta name="twitter:site" content="@newszn_">
	<meta name="twitter:title" content="Bomber SZN">
	<meta name="twitter:description" content="We've picked out the best bomber jackets under €100 straight from the highstreet to help you start this season well.">
	<meta name="twitter:image" content="http://fashion.gear.host/bombcov.png">
	<meta name="twitter:player" content="http://fashion.gear.host/cheap-bomber-jackets.html">
	<meta name="twitter:player:width" content="480">
	<meta name="twitter:player:height" content="480">
	
		
		
		<meta property="og:title"
		content="Cheap Bombers from the highstreet to ad to your collection for a cheap and cheerful amount of €€€" />
		<meta property="og:site_name" content="New Szn"/>
		<meta property="og:url"
		content="http://fashion.gear.host/cheap-bomber-jackets.html" />
		<meta property="og:description" content="Bomber jackets have gradually entered pop culture and into many wardrobes of men in rapid form. The bomber is a the perfect jacket for all seasons, that being said, it can easily be used to dress up for a night out or dress down for...." />
		<meta property="og:type" content="article" />
		<meta property="og:image"              content="http://fashion.gear.host/bombcov.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--JavaScript code goes here.-->
<script>
jQuery(document).ready(function() {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });
    
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});
	
</script>
	

	
	</head>
	
	<body>
	
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container" id="home">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
          </button>
          
          <a class="navbar-brand" href="index.html"><img  id="brand-image" src="images/navbarpic.png" alt="brand image logo for spice bag" /></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
          
            <li><a href="index.php">Home</a></li>
            <li><a href="page2.php">Review</a></li>
            <li><a href="page3.php">Stuff</a></li>
            <li><a href="page4.php">Contact</a></li>
            <li><a href = "signup.php">SIGNUP</a></li>
            <?php
    if(isset($_SESSION['id'])){
      echo "<form action='includes/logout.inc.php'>
      <button>LOG OUT</button>
      </form>";

    }
    else{
      echo "<form action='includes/login.inc.php' method='POST'>
      <input type='text' name='uid' placeholder='Username'>
      <input type='password' name='pwd'placeholder='Password'>
      <button type ='submit'>Login</button>
    </form>";
    }

    
    ?>
       </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>     
    <div class="c-wrapper"  >

		<div class="bg" id="toHome">
		<br><br><br>
		<a href="page2.php"><img src="fashionszn.png" class="img-responsive center-block" title="Back to the fashion page" alt="rectange image of fashion szn"/></a>
		
	
	
	</div>
	</div>	

	
		
		<div class="alt1" >
		<div class="container padding" >
	
			<div class="row">
			
			<div class="col-md-12">
			
				<h2 class="text-center" id="greatest"> Bunson Burger </h2>
				<p class="text-center"><span10>By Spice Blog</span10></p>
				
				
			</div>
			
			<div class="col-md-4"></div>
			
			<div class="col-md-4">
			
				<p1 class="text-justify"><br>Follow Spice Blog on all of our <a class="back" href="#socials">Social Media</a> accounts to stay up-to-date on the reviews If you wanna hit us up,head over to the contact section.</p1>
			
			<div class="col-md-4"></div>
	
		</div>
		
		</div>
	
	</div>

	<div class="container">
	
		<hr />
		<div class="row">
		
		<div class="col-md-2"></div>
		
		<div class="col-md-4">
		<h2>Location</h2>
		<p class="text-justify">Bomber jackets have gradually entered pop culture and into many wardrobes of men in rapid form. The bomber is a the perfect jacket for all seasons, that being said, it can easily be used to dress up for a night out or dress down for heading to college while still feeling salient.</p>
		<p class="text-justify">The contemporary bomber jacket gives your wardrobe a different outlook and a catalyst for planning an outfit , paring it up with the general basics that we all love to wear will instantly galvanize your whole look.</p>
		<p class="text-justify">A Bomber jacket is more essential to your life than water, trust us.</p>
		<p class="text-justify">Check out some cheap bombers below to get the best bang for your buck. </p>
		<p class="text-justify">Simply place your mouse cursor over the picture to find out more about the items</p>
		<p class="text-justify">If you are on the computer simply place your mouse cursor over the picture to find out more about the items</p>
		<p class="text-justify">Click on the image to direct you to the site to buy any of the items you like.</p>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2382.3371848588504!2d-6.26808908384066!3d53.33722007997715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e9e2cf3ab1f%3A0x4d2ffd8ffde8facd!2sBunsen!5e0!3m2!1sen!2sie!4v1481204716028" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		
		<div class="col-md-4">
		<h2>Info</h2>
		<p class="text-justify">Bomber jackets have gradually entered pop culture and into many wardrobes of men in rapid form. The bomber is a the perfect jacket for all seasons, that being said, it can easily be used to dress up for a night out or dress down for heading to college while still feeling salient.</p>
		<p class="text-justify">The contemporary bomber jacket gives your wardrobe a different outlook and a catalyst for planning an outfit , paring it up with the general basics that we all love to wear will instantly galvanize your whole look.</p>
		<p class="text-justify">A Bomber jacket is more essential to your life than water, trust us.</p>
		<p class="text-justify">Check out some cheap bombers below to get the best bang for your buck. </p>
		<p class="text-justify">Simply place your mouse cursor over the picture to find out more about the items</p>
		<p class="text-justify">If you are on the computer simply place your mouse cursor over the picture to find out more about the items</p>
		<p class="text-justify">Click on the image to direct you to the site to buy any of the items you like.</p>
		
		</div>
		<div class="col-md-2"></div>
		
		</div>
		</div> <!--end of container-->
		
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				<a href="" target=_blank><img src="images/burger.png" class="img-square img-responsive" alt="asos bomber jacket" width="555px" height="531px"/> </a>
				</div>
				
				
				<div align="center">
				<div class="col-md-4">
						<a href="" target=_blank><img src="images/burger.png" class="img-square img-responsive" alt="asos bomber jacket" width="555px" height="531px"/> </a>	
				<div align="center"><p class="sources">image/ASOS</p></div>
				</div>
				</div>
				<div align="center">
				<div class="col-md-4">
					<a href="" target=_blank><img src="images/burger.png" class="img-square img-responsive" alt="h and m bomber jacket" width="555px" height="531px"/> </a>
				<div align="center"><p class="sources">image/H&M, Wikimedia</p></div>
				</div>
				</div>
				
			</div>
		</div>
		
		<br>
		
		<div class = "container">
			<div class ="row">
				<div class = "col-md-4">
					<?php
						
						if(isset($_SESSION['id'])){
							echo "<form method='POST' action='".setComments($conn)."'> 
						<input type='hidden' name='uid' value='".$_SESSION['id']."'>
						<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
						<textarea name='message'></textarea><br>
						<button type='submit' name='commentSubmit'>comment</button>
							</form>";
						}
						else{
							echo "<p class = 'pCenter'>you need to be logged in to comment </p>";
						}



						getComments($conn);
					?>
				
				</div>
		
		
		</div>
		

		
		<br>

	 	<div class="alt2" id="socials">
 		<div class="container padding">
 			
 			<footer>
 			
 			&copy; New Szn<br ><a id="back" href="#toHome">Back Home</a>
 			
 			<br>
 			
 			<a id="a" title="Facebook" href="#"  target="_blank"><span><i class="fa fa-facebook fa-3x"></i></span></a>
 			<a id="oo" title="Twitter" href="#"  target="_blank"><span><i class="fa fa-twitter fa-3x"></i></span></a>
 			<a id="b" title="Instagram" href="#"  target="_blank"><span><i class="fa fa-instagram fa-3x"></i></span></a>
 			<a id="e" title="Mail" href="mailto:thenewszn@gmail.com?Subject=Whats%20Up?" target="_top"  ><span><i class="fa fa-envelope fa-3x"></i></span></a>
 			
 			
 			
 			</footer>
 			
 			
 		</div>
 	
 	
 	<a href="#" class="back-to-top"><span7>Back to Top</span7></a>
 	
 	</div>
 	
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<script>
	$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
	</script> 
	
	
	
	
	
	</body>


















</html>