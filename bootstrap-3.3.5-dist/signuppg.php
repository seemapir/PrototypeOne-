<?php
  // Include the signup file.
  include('signup.php');

  // If already logged in then divert to correct page.
  /*if(isset($_SESSION['login_user'])) {
    header("location: profile.php");
  } // if*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sign Up</title>

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
            <li><a href="homepage.php">Home</a></li>  
            <li><a href="#register">Register</a></li>         
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="active"><a href="#">Sign Up</a></li> 
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    <div class="container">
      <!-- SignUp Form
      http://v4-alpha.getbootstrap.com/components/forms/ (Accessed: 16/06/2016) -->
   	  <div class="jumbotron" style="width:40%; padding:2%; margin: 0 auto;">
          <h2>Sign Up</h2>
          <form method="post">
            <fieldset class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?php echo $name;?>" required autofocus>
            </fieldset>
            <fieldset class="form-group">
              <label for="email">Email address</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo $email;?>" required autofocus>
              <small class="text-muted">We'll never share your email with anyone else.</small>
            </fieldset>
            <fieldset class="form-group">
              <label for="confirm_email">Confirm email address</label>
              <input type="email" name="confirm_email" class="form-control" id="confirm_email" placeholder="Confirm Email" required autofocus>
            </fieldset>
            <fieldset class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="<?php echo $password;?>" required autofocus>
            </fieldset>
            <fieldset class="form-group">
              <label for="confirm_password">Confirm Password</label>
              <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password" required autofocus>
            </fieldset>
            <button type="submit_form" name="submit_form" class="btn btn-primary btn-block">Submit</button>
            <br></br>
            <span><?php echo $error;?></span>
          </form>
      </div>
    </div>
    
    <!-- Sticky Footer
    http://getbootstrap.com/examples/sticky-footer/ (16/06/2016) -->
    <footer class="footer" class="navbar navbar-inverse " role="navigation">
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