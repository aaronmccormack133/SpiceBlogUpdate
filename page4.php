<?php
	session_start();
?>

<?php  
$message = '';  
$error = '';  
include_once $_SERVER['DOCUMENT_ROOT'] . '/spice/securimage/securimage.php';
$securimage = new Securimage();
$secureimage = '';
if(isset($_POST["submit"])){  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }  
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter Email</label>";  
      }  

      else if(empty($_POST["comment"]))  
      {  
           $error = "<label class='text-danger'>Enter Comment</label>";  
      }  
      else if ($securimage->check($_POST['captcha_code']) == false) {
	      //the code was incorrect
	     $error = "<label class='text-danger'>Captcha incorrect<label>";
	     //echo "The security code entered was incorrect.<br/><br/>";
	     //echo "Please go <a href='javascript:history.go(-1)'>back and try again.";
	     //exit;
	}
      else  
      {  
           if(file_exists('c_data.json'))  
           {  
                $current_data = file_get_contents('c_data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'email'          =>     $_POST["email"],
                     'comment'          =>     $_POST["comment"],   
                      
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('c_data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Successfully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      } 
}
;

 
?>

<!DOCTYPE html>

<html>


	<head>
	
		<title>Spice Blog | Contact</title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
		<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
					<style>
						.error {color: #FF0000;}
						.green {color: green;}
						.red {color: red;}
						.center { margin: 0 auto; max-width: 900px; }
					</style>
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
          
          <a class="navbar-brand" href="index.php"><img  id="brand-image" src="images/SpiceBlogLogo.png" alt="brand image logo for spice bag" /></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
          
            <li><a href="index.php">Home</a></li>
           	<li><a href="page2.php">Review</a></li>
          	<li><a href="page3.php">Shouts</a></li>
            <li class="active"><a href="page4.php">Contact</a></li>
       		<li><a href = "signup.php">Sign Up</a></li>

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
    
    <div>
    
    	<div class="bg" id="home">
	<br><br><br>
		<img src="images/contact1.png" class="img-responsive center-block" alt="holding rectangleimage that says call me on my cellphone" />
		

	
	</div>
	</div>
	
	<div class="alt1" id="fashion">
		<div class="container">
	
			<div class="row">
			<div class="col-md-4"></div>
			
			<div class="col-md-4">
			
				<h2 class="text-center"><u>About</u></h2>
				
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean iaculis placerat luctus. Etiam egestas ultricies nulla, sit amet placerat massa sodales pellentesque. Sed eu risus vitae odio commodo eleifend ut quis massa. Curabitur lacinia turpis odio, vitae pretium turpis gravida sit amet. Ut auctor, massa at scelerisque iaculis, urna mauris vestibulum dolor, at maximus metus elit ut metus. In felis nunc, rutrum quis pretium ac, cursus sed nulla. Suspendisse auctor ligula ut tempor aliquet. </p>
				<p class="text-justify">Aenean enim diam, viverra sit amet ultrices nec, ultrices et nibh. Nulla pharetra mauris congue erat imperdiet vestibulum. Vivamus mollis ante a pulvinar tempor. Pellentesque vitae tortor non mi dignissim euismod blandit vitae elit. Praesent at elementum nunc, nec iaculis justo. Integer quis est sit amet odio ultricies luctus non sit amet massa</p>
				<p class="text-justify">Suspendisse lectus enim, elementum eu nulla at, finibus posuere leo. Mauris pellentesque tempus turpis, sit amet efficitur eros venenatis ut. Etiam sodales lacus lacus, a viverra velit pellentesque in. Nulla facilisi.</p>
				<p class="text-center"><i class="em em-wave"></i></p>
				
			</div>
			<div class="col-md-4"></div>
			</div>
		
		</div>

	
	</div>
	
	
	<h2 class="text-center">GET SOCIAL</h2>
		<div class="alt2">
 		<div class="container">
		
		
 			<br>
 			<a id="s1" title="Facebook" href="#"  target="_blank"><span><i class="fa fa-facebook fa-5x"></i></span></a>
 			<a id="s2" title="Follow Our Twitter" href="#"  target="_blank"><span><i class="fa fa-twitter fa-5x"></i></span></a>
 			<a id="s3" title="Follow Our Instagram" href="#"  target="_blank"><span><i class="fa fa-instagram fa-5x"></i></span></a>
 			
			<a id="s6" title="Mail Us" href="mailto:SpiceBlog@gmail.com?Subject=Whats%20Up?" target="_top"  ><span><i class="fa fa-envelope fa-5x"></i></span></a>
 			
 			
 			</div>
 			</div>
	
	<div class="container">
		<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
		</div>
		<div class="col-md-4"></div>
		</div>
	</div>	
	<div class="container padding" id="contact">
	<hr />
	<br>
		
		<h1 class="text-center"><u>Contact</u></h1>
		
		
		<form method="post">
           	  <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
              ?><br />
    		<div class="form-group">
     			 <label for="name">Name:</label>
      			 <input type="text" class="form-control" name="name" placeholder="Enter Name">
    		</div>
    		<div class="form-group">
     			 <label for="location">Email:</label>
     			 <input type="email" class="form-control" name="email" placeholder="Enter Email">
    		</div>

    		<div class="form-group">
      			<label for="comment">Comment:</label>
 
     			 <input type="text" class="form-control" name="comment" placeholder="Enter Comment">
			</div>
			<div class="formdiv">	
				<div class="form-group">
					<img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image"/>
					<input type="text" name="captcha_code" size="10" maxlength="6" />
					<a href="#" onclick="document.getElementById('captcha').src='securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
				</div>
			</div>
    	
    			<div class="formdiv">
    				<button type="submit" name="submit" value="Append"class="btn btn-default">Submit</button>
    			</div>
    			<br />
    			 <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
		     } ?><br/>
  			</form>
					
</div>

			
	<div class="alt2">
 		<div class="container">
 			
 			<footer>
 			
 			&copy; Spice Blog<br ><a id="back" href="#home">Back Home</a>
 			
 			<br>
 			<a id="a" title="Facebook" href="#"  target="_blank"><span><i class="fa fa-facebook fa-3x"></i></span></a>
 			<a id="oo" title="Twitter" href="#"  target="_blank"><span><i class="fa fa-twitter fa-3x"></i></span></a>
 			<a id="b" title="Instagram" href="#"  target="_blank"><span><i class="fa fa-instagram fa-3x"></i></span></a>
			<a id="e" title="Mail" href="mailto:SpiceBlog@gmail.com?Subject=Whats%20Up?" target="_top"  ><span><i class="fa fa-envelope fa-3x"></i></span></a>
 			
 			
 			
 			</footer>
 			
 			
 		</div>
 	
 	
 	
 	
 	</div>
 	
 
	
			

	
			
			
			
		
		
		
		
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
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

