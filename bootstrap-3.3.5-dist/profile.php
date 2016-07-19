<!-- Login Form
https://www.formget.com/login-form-in-php/ (Accessed: 15/06/2016) -->
<?php 
  include('login.php');
  
  // If already logged in then divert to correct page.
  if(!isset($_SESSION['login_user'])) {
    header("location: homepage.php");
  } // else
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
    <!-- https://github.com/bootstrapbay/tutorials (28/09/2015)
         cgimmer -->
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Crowdfunding</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li> 
            <li><a href="#register">Register</a></li>         
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    <div class="container">
	  <div class="jumbotron text-center">
	    <h1>Welcome to Crowdfunding!</h1>
		  <p><em>Open up scope for investment...</em></p>
	  </div>
	  
      <div id="section">
        <h1>Crowdfunding, what are we about?</h1>
        <p class="overview">...</p>
        <p class="overview"><em>... Via this website ...</em></p>
        <!-- User data from login -->
        <p id="welcome">Welcome: <i><?php echo $_SESSION['login_user']?></i></p>
      </div>
    </div>
    
    <!-- Sticky Footer
    http://getbootstrap.com/examples/sticky-footer/ (16/06/2016) -->
    <footer class="footer">
      <div class="container">
        <p class="text-muted"><em>© 2016 Seema Anwer and Iqra Latif.</em></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>