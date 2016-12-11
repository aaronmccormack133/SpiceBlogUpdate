<?php
	session_start();
?>
<!DOCTYPE html>

<html>


	<head>
		<title>Spice Blog | Sign Up</title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
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
          
          <a class="navbar-brand" href="index.php"><img  id="brand-image" src="images/SpiceBlogLogo.png" alt="brand image logo for spice bag" /></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
          
            <li><a href="index.php">Home</a></li>
            <li><a href="page2.php">Review</a></li>
			<li><a href="page3.php">Shouts</a></li>
            <li><a href="page4.php">Contact</a></li>
 
            <li class="active"><a href = "signup.php">Sign Up</a></li>
            
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
<?php
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if(strpos($url, 'error=empty') !==false){
		echo "Fill out all fields";
	}
	elseif(strpos($url, 'error=username') !==false){
		echo "Username already exists";
	}


	if(isset($_SESSION['id'])){
		echo "<p class = 'pCenter'>Hi there User </p>";
	}
	else{
		echo "<p class = 'pCenter'>you are not logged in </p>";
	}
?>

<br>
<br>
<br>
<h1 class="text-center">Sign Up</h1>
<br>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4 formdiv">
		<?php
			if(isset($_SESSION['id'])){
				echo "<p class = 'pCenter'>You are already logged in</p>";
			}
			else{
				echo "<form action='includes/signup.inc.php' method='POST'>
			<div class='form-group'>
			<label for='first'>First Name:</label>
			<input type='text' class='form-control' name='first' placeholder='First Name'>
			</div>
			<br><br>
			<div class='form-group'>
			<label for='last'>Last Name:</label>
			<input type='text' class='form-control' name='last' placeholder='Last Name'>
			</div>
			<br><br>
			<div class='form-group'>
			<label for='uid'>Username:</label>
			<input type='text' class='form-control' name='uid' placeholder='Username'>
			</div>
			<br><br>
			<div class='form-group'>
			<label for='pwd'>Password:</label>
			<input type='password' class='form-control' name='pwd' placeholder='Password'>
			</div>
			<br><br>
			<button type ='submit' class='btn btn-default'>Sign Up</button>
		</form>";
			}
		?>
	</div>
	<div class="col-md-4"></div>
</div>






</body>

</html>