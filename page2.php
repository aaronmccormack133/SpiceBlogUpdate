<?php
  session_start();
?>

<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }  
      else if(empty($_POST["location"]))  
      {  
           $error = "<label class='text-danger'>Enter Location</label>";  
      }    
      else  
      {  
           if(file_exists('rest_data.json'))  
           {  
                $current_data = file_get_contents('rest_data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'location'          =>     $_POST["location"],  
                      
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('rest_data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 //http://www.webslesson.info/2016/04/append-data-to-json-file-using-php.html
 ?>  

<!DOCTYPE html>

<html>

	<head>
	
		<title>Spice Blog | Reviews</title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
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
            <li class="active"><a href="page2.php">Review</a></li>
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
	
	<div class="c-wrapper" id="back" >

		<div class="bg" id="Home">
		<br><br><br>
		<img src="images/REVIEWS.png" class="img-responsive center-block" alt="fashionszn picture rectangle image" />
		
	
	
	</div>
	</div>	

	</div>
		
		<div class="alt1" >
		<div class="container padding" >
		
		
	
			<div class="row">
			
			<div class="col-md-12">
			
				<h1 class="text-center"></h1>
				
				
			</div>
			
			<div class="col-md-4"></div>
			
			<div class="col-md-4">
			
				
				<p1 class="text-justify"><br>Follow Spice Blog on all of our <a class="back" href="#socials">Social Media</a> accounts to stay up-to-date on the reviews. If you wanna hit us up, head over to the contact section.</p1>
			
				
			</div>
			
			<div class="col-md-4"></div>
	
		</div>
		
		</div>
	
	</div>
	
	<div class="container" >
	
	
		<hr />
		<div class="bg-4">
  <div class="container">
	<div class="row">
	   <div class="col-sm-4 col-xs-6">
      
        <div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="Indie Spice"><img src="images/ind.png" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>Indie Spice</p>
            <p></p>

          </div>
        </div><!--/panel-->
      </div><!--/col-->
      
      <div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="Flint Pizza"><img src="images/pizzaSmall.png" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>Flint Pizza</p>
            <p></p>
            
          </div>
        </div><!--/panel--> 
      </div><!--/col-->
      
      <div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="Rubys"><img src="images/burg.png" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>Rubys</p>
            <p></p>
            
          </div>
        </div><!--/panel--> 

      </div><!--/col--> 
      
      <div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="New Construction"><img src="images/chinese.png" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>The Orchid Chinese Restaurant</p>
            <p></p>
            
          </div>
        </div><!--/panel--> 

      </div><!--/col--> 
      
      <div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="Site Planning"><img src="images/aussie.png" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>Aussie BBQ</p>
            <p></p>
            
          </div>
        </div><!--/panel--> 

      </div><!--/col--> 
      
      <div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail">
          	<a href="#" title="Churches">
          		<img src="images/contact.png" data-toggle="modal" data-target="#myModal" class="img-responsive">
          	</a>


          </div>
          <div class="panel-body">
            <p>Contact Us!</p>
            <p></p>
            
          </div>
          <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enter Restaurant Details!</h4>
        </div>
        <div class="modal-body">
          
           <form method="post">
           	  <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
              ?> 
    		<div class="form-group">
     			 <label for="name">Restaurant Name:</label>
      			 <input type="text" class="form-control" name="name" placeholder="Enter Restarant Name">
    		</div>
    		<div class="form-group">
     			 <label for="location">Location:</label>
     			 <input type="text" class="form-control" name="location" placeholder="Enter Restaurant Location">
    		</div>
    	
    			<button type="submit" name="submit" value="Append"class="btn btn-default">Submit</button>
    			 <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?> 
  			</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
        </div><!--/panel--> 

      </div><!--/col--> 
      
	</div><!--/row-->
  </div><!--/container-->
</div>
		
		
		
		
		
		<hr />
	
		</div>
		<div class="alt2" id="socials">
			<div class="container padding">
 			
				<footer>
 			
					&copy; Spice Blog<br ><a class="back" href="#back">Back to top</a>
 			
				<br>
					<a id="a" title="Facebook" href="#"  target="_blank"><span><i class="fa fa-facebook fa-3x"></i></span></a>
 					<a id="oo" title="Twitter" href="#"  target="_blank"><span><i class="fa fa-twitter fa-3x"></i></span></a>
 					<a id="b" title="Instagram" href="#"  target="_blank"><span><i class="fa fa-instagram fa-3x"></i></span></a>
 					<a id="e" title="Mail" href="mailto:thenewszn@gmail.com?Subject=Whats%20Up?" target="_top"  ><span><i class="fa fa-envelope fa-3x"></i></span></a>
 			
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

	