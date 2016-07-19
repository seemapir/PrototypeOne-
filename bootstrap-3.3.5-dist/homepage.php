<?php
  // Include the login file.
  include('login.php');

  // If already logged in then divert to correct page.
  if(isset($_SESSION['login_user'])) {
    header("location: profile.php");
  } // if
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
          <a class="navbar-brand" href="#">FundingVision</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li> 
            <li><a href="#register">Register</a></li>         
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="signuppg.php">Sign Up</a></li>  
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    <!-- <script>
      var successful_signup = '<?php echo $_SESSION["success"]?>';
      if (successful_signup == "Y") {
        alert("You have successfully signed up, please log in now!");
      } // if
    </script> -->
    
    <div class="container">
	  <div class="jumbotron text-center" style="background-color: #00CCFF;">
	    <h1>Welcome to FundingVision!</h1>
		  <p><em>Open up scope for investment...</em></p>
	  </div>
    
      <!-- Login Form
      https://www.formget.com/login-form-in-php/ (Accessed: 15/06/2016) -->


   	  <div class="jumbotron" style="width:40%; margin: 0 auto; padding:2%">
          <h2>Log in</h2>
          <form method="post">
            <fieldset class="form-group">
              <!--<label for="email">Email address</label>-->
              <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo $email;?>" required autofocus>
            </fieldset>
            <fieldset class="form-group">
              <!--<label for="password">Password</label>-->
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required autofocus>
            </fieldset>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Log in</button>
            <input type="checkbox" value="remember-me"> Remember me</label>
            <a href="#" class="pull-right need-help">Need help?</a><span class="clearfix"></span>
            <br></br>
            <span><?php echo $error;?></span>
          </form>
      </div>
    
      <div id="section">
        <h1>FundingVision, what are we about?</h1>
        <p class="overview">...</p>
        <p class="overview"><em>... Via this website ...</em></p>
      </div>
    </div>
    
    <!-- Sticky Footer
    http://getbootstrap.com/examples/sticky-footer/ (16/06/2016) -->
    <footer class="footer" class="navbar navbar-inverse " role="navigation">
      <div class="container">
        <p class="text-muted"><em>© 2016 Seema Anwer and Iqra Latif.</em></p>
        <form name="google-search" method="get" action="http://www.google.com/search">
          <input type="hidden" name="sitesearch" value="" />
          <input name="q" type="text" />
          <input type="submit" name="sa" value="Google" />
        </form>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>