<?php
	session_start();
?>


<!DOCTYPE html>

<html>


	<head>
		<title>New Szn | Stuff</title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
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
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		
		
		
		
		
		
		
		
		
		
		
	
	
	
	
	
	
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
            <li class="active"><a href="page3.php">Stuff</a></li>
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
     
		<div id="home">
		
			<div class="bg">
				<br><br><br>
			<img src="stuff.png" class="img-responsive center-block" alt="rectangle holding image that says stuff"/>
	
	
			</div>
	</div>
		

		
		<div class="alt1" id="fashion">
		<div class="container padding">
	
			<div class="row">
			
			<div class="col-md-12">
			
				
				<h1 class="text-center">IDK WHAT THIS SECTION EVEN IS TBH</h1>
				
			</div>
			<div class="col-md-4"></div>
			
			<div class="col-md-4">
			
				
				<p1 class="text-justify"><br>Follow New Szn on all of our <a class="back" href="#socials">Social Media</a> accounts to stay up-to-date on the new szn. If you wanna hit us up, head over to the contact section.</p1>
			
				
			</div>
			
			<div class="col-md-4"></div>
	
		</div>
		
		</div>
	
	</div>
	

	
	<div class="container" id="blog">
	
	
	
		<hr />
		<div class="row">
		
			<div class="col-md-6">
				<img src="facecov.png" class="img-square img-responsive" alt="Face cream square Holding Image" />
			
			</div>
			<div class="col-md-6">
			<h2 class="text-center" id="face"><u>Face 2 Face</u></h2>
			<p>Treat your face how you treat your clothes. I got you some good stuff listed to help your face feel and look good all day every day. I also saved your life by supplying you some tips that will give you a healthier face, you're welcome.</p>
			<a href="skin-care.html" class="btn btn-default">Read More...</a> 
			
			</div>
			
		</div>
		
		<hr />	
		
		</div>
		
		

		

		
		
		
		
		<div class="alt2" id="socials">
			<div class="container padding">
 			
				<footer>
 			
					&copy; New Szn<br ><a id="back" href="#home">Back to top</a>
 			
				<br>
					<a id="a" title="Facebook" href="#"  target="_blank"><span><i class="fa fa-facebook fa-3x"></i></span></a>
 					<a id="oo" title="Twitter" href="#"  target="_blank"><span><i class="fa fa-twitter fa-3x"></i></span></a>
 					<a id="b" title="Instagram" href="#"  target="_blank"><span><i class="fa fa-instagram fa-3x"></i></span></a>
 					<a id="e" title="Mail" href="mailto:thenewszn@gmail.com?Subject=Whats%20Up?" target="_top" ><span><i class="fa fa-envelope fa-3x"></i></span></a>
 			
 			
				</footer>
 			
 			
 		</div>
 	
 	
 	
 	
 	</div>
	

	
	
	
	
	
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
	<script>	
	$(function() {
  $('a[href*=#]:not([href=#mycarousel])').click(function () {
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
