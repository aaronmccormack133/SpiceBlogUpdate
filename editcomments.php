<?php
	session_start();
?>
<?php 
	date_default_timezone_set('Europe/Dublin');
	include 'dbh.php';
	include 'comments.inc.php';
 ?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
		<title>Spice Blog | Edit</title>
	
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
          
          <a class="navbar-brand" href="index.php"><img  id="brand-image" src="images/SpiceBlogLogo.png" alt="brand image logo for spice bag" /></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
          
            <li><a href="index.php">Home</a></li>
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
<div class="col-md-4"></div>
<div class="col-md-4 formdiv">
<?php
$cid = $_POST['cid'];
$uid = $_POST['uid'];
$date = $_POST['date'];
$message = $_POST['message'];

echo "<br><br><br><br><br><form method='POST' action='".editComments($conn)."'> 
	<div class='form-group'>
	<input class='form-control' type='hidden' name='cid' value='".$_POST['cid']."'>
	</div>
	<div class='form-group'>
	<input class='form-control' type='hidden' name='uid' value='".$_POST['uid']."'>
	</div>
	<div class='form-group'>
	<input class='form-control' type='hidden' name='date' value='".$_POST['date']."'>
	</div>
	<div class='form-group'>
	<textarea class='form-control' name='message'>".$message."</textarea><br>
	</div>
	<button class='btn btn-default' type='submit' name='commentSubmit'>Edit</button>
</form>";


?>
</div>
<div class="col-md-4"></div>


</body>

</html>