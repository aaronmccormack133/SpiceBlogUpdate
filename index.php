<?php
	session_start();
?>

<!DOCTYPE html>

<html lang="en">


	<head>

		<title>Spice Blog | Home</title>
	
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
		<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript"></script>
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
          
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="page2.php">Review</a></li>
          	<li><a href="page3.php">Shouts</a></li>
            <li><a href="page4.php">Contact</a></li>
          	<li><a href = "signup.php">SignUp</a></li>
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
	
	
	<div class="bg" id="Home">
	<br><br><br>
		<img src="images/spiceblog.png" class="img-responsive center-block" alt="spice blog header picure"/>
		

	
	</div>
	
	
	<div class="alt1" id="fashion">
		<div class="container">
	
			<div class="row">
			<h1 class="text-center">Newest Posts</h1>
			
		
		</div>
	
	</div>
	
	<div class="container" id="blog">		
			<br>
		<div class="row">
		
			<div class="col-md-3"></div>
		
			<div class="col-md-6">
				<img src="images/burger.png" id="bomberjackets" class="img-square img-responsive center-block" alt="Square Holding Image of bomber jacket" />
				
			
			<br>
			<br>
			
			<p class="text-justify">Rubys Restaurant Swords is one of the best restaurants in Dublin and is only 5 minutes from Dublin Airport. Real burgers, steaks,pizzas and mouth watering ribs ...</p>
			<br>
			<div class="col-md-12 text-center"> <a href="ruby.php" class="btn btn-default">R e a d   M o r e...</a></div>
			
			</div>

			<div class="col-md-3"></div>
			
		</div>
		
		<br>
		
		<div class="container">
		<div class="row">
		
			<div class="col-md-3"></div>
			
			
			
			
			<div align="center">
			<div class="col-md-6">
				<img src="images/pizza.png" id="parkas" class="img-square img-responsive center-block" alt="Square Holding Image of Pizza" />
				
				<br>
			
			<p class="text-justify">Sit at stools and high tables among exposed pipes at this trendy, laid back diner with compact menu.</p>
			<br>
			<div class="col-md-12 text-center"> <a href="skin.php" class="btn btn-default">R e a d   M o r e...</a></div>
			</div>
			 <div class="col-md-3"></div>
			
		</div>
	
	
	
	
	</div>

	<div class="container">

   
	
	
	
		

		<br>	
		<br>
		<div class="conatiner">
		<div class="row">
		
		<div class="col-md-3"></div>
		
			<div class="col-md-6">
			<img src="images/chinese/chinese3.png" id="facecreams"  class="img-square img-responsive center-block" alt="Square Holding Image of chinese"  />	
			<br>
			<br>
			<p class="text-justify">Classic Chinese cuisine served in a smart, contemporary restaurant, plus a takeaway menu</p>
			<br>
			<div class="col-md-12 text-center"> <a href="chin.php" class="btn btn-default">R e a d   M o r e...</a></div>
			</div>
				
			<div class="col-md-3"></div>
		
		

		
			
			</div>
		</div>
		</div>
		
	</div>
	
	<br>
 	<div class="alt2">
 		<div class="container padding">
 			<hr />
 			<footer>
 			
 			Designed by Group O<br ><a id="back" href="#Home">Back Home</a>
 			
 			<br>
 			
 			<a id="a" title="Facebook" href="#"  target="_blank"><span><i class="fa fa-facebook fa-3x"></i></span></a>
 			<a id="oo" title="Twitter" href="#"  target="_blank"><span><i class="fa fa-twitter fa-3x"></i></span></a>
 			<a id="b" title="Instagram" href="#"  target="_blank"><span><i class="fa fa-instagram fa-3x"></i></span></a>
 			<a id="e" title="Mail" href="mailto:thenewszn@gmail.com?Subject=Whats%20Up?" target="_top" ><span><i class="fa fa-envelope fa-3x"></i></span></a>
 			
 			
 			
 			</footer>
 			
 			
 		</div>
 	
 	
 	
 	
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
