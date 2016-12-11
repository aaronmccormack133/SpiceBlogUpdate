<?php
	session_start();
?>
<?php
	date_default_timezone_set('Europe/Dublin');
	include 'dbh.php';
	include 'comments0.php';
?>



<!DOCTYPE html>

<html>

	<head>
	
		<title>Spice Blog | Bunson Burger</title>
		
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
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
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
          
          <a class="navbar-brand" href="index.php"><img  id="brand-image" src="images/navbarpic.png" alt="brand image logo for spice bag" /></a>
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
		<a href="page2.php"><img src="images/bunson/bbCover.png" class="img-responsive center-block" title="Back to the review page" alt="rectange image of fashion szn"/></a>
		
	
	
	</div>
	</div>	

	
		


	<div class="container">
	
		<hr />
		<div class="row">
		
		<div class="col-md-2"></div>
		
		<div class="col-md-4">
		<h2>Location</h2>
		<p class="text-justify">Lorem ipsum dolor sit amet, nullam noluisse at eos, facilis lobortis reprehendunt cu sed. Evertitur definitiones cu mei. Quodsi indoctum ocurreret te per, suavitate constituam referrentur cu has. Per delicata scripserit cu, usu cu dicit fabulas, ex vel dicant voluptatum. Est ex liber dolor legendos, errem persecuti constituam quo at, vis epicurei reprimique reprehendunt te.</p>
		<p class="text-justify">Ullum epicurei ei nec, id aliquid veritus suscipit quo. Cetero sanctus posidonium mel ei. At postulant reprehendunt est, ea quo idque blandit deterruisset, cu mei nibh scribentur. An vis possim adipisci, cum lorem possit id. Vix cu viris facilisi appellantur, eam ne errem primis definiebas. Fuisset explicari intellegat ea nam, nibh commodo ut mea.</p>
		<p class="text-justify">Discere elaboraret repudiandae cu mea, ne his summo vituperatoribus, lorem intellegam disputando mei et. In quo dolore legimus, aliquid urbanitas et pro. Et has ubique volutpat, at vide dissentias his. Magna altera eu sea, eu appareat liberavisse eam. Sed in debet quidam, id usu bonorum interesset, dolorem adipisci ex nam. Diam magna blandit ad sit, ea pri adhuc soluta vocibus. Magna sonet dicant duo ei.</p>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2382.3371848588504!2d-6.26808908384066!3d53.33722007997715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e9e2cf3ab1f%3A0x4d2ffd8ffde8facd!2sBunsen!5e0!3m2!1sen!2sie!4v1481204716028" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		
		<div class="col-md-4">
		<h2>Info</h2>
		<p class="text-justify">Lorem ipsum dolor sit amet, nullam noluisse at eos, facilis lobortis reprehendunt cu sed. Evertitur definitiones cu mei. Quodsi indoctum ocurreret te per, suavitate constituam referrentur cu has. Per delicata scripserit cu, usu cu dicit fabulas, ex vel dicant voluptatum. Est ex liber dolor legendos, errem persecuti constituam quo at, vis epicurei reprimique reprehendunt te.</p>
		<p class="text-justify">Ullum epicurei ei nec, id aliquid veritus suscipit quo. Cetero sanctus posidonium mel ei. At postulant reprehendunt est, ea quo idque blandit deterruisset, cu mei nibh scribentur. An vis possim adipisci, cum lorem possit id. Vix cu viris facilisi appellantur, eam ne errem primis definiebas. Fuisset explicari intellegat ea nam, nibh commodo ut mea.</p>
		<p class="text-justify">Discere elaboraret repudiandae cu mea, ne his summo vituperatoribus, lorem intellegam disputando mei et. In quo dolore legimus, aliquid urbanitas et pro. Et has ubique volutpat, at vide dissentias his. Magna altera eu sea, eu appareat liberavisse eam. Sed in debet quidam, id usu bonorum interesset, dolorem adipisci ex nam. Diam magna blandit ad sit, ea pri adhuc soluta vocibus. Magna sonet dicant duo ei.</p>
		
		
		</div>
		<div class="col-md-2"></div>
		
		</div>
		</div> <!--end of container-->
		
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				<a href="" target=_blank><img src="images/bunson/burger1.png" class="img-square img-responsive" alt="asos bomber jacket" width="555px" height="531px"/> </a>
				</div>
				
				
				<div align="center">
				<div class="col-md-4">
						<a href="" target=_blank><img src="images/bunson/burger2.png" class="img-square img-responsive" alt="asos bomber jacket" width="555px" height="531px"/> </a>	
				
				</div>
				</div>
				<div align="center">
				<div class="col-md-4">
					<a href="" target=_blank><img src="images/bunson/burger3.png" class="img-square img-responsive" alt="h and m bomber jacket" width="555px" height="531px"/> </a>
				
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
 			
 			&copy; Spice Blog<br ><a id="back" href="#toHome">Back Home</a>
 			
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