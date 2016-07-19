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
          <a class="navbar-brand" href="#"><em>Crowdfunding</em></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li> 
            <li><a href="#register">Register</a></li>         
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    <!-- Login Functionality -->
    <!-- http://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_form_basic&stacked=h &
    http://www.w3schools.com/php/showphp.asp?filename=demo_form_validation_complete (15/06/2016).-->
	<?php
      $email = $emailError = $password = $passwordError = "";
      $form_hide = 0;
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
          $emailError = "Email address is required!";
        } // if
        else {
          $email = cleanInput($_POST["email"]);
          if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
          {
            $emailError = "Please enter a valid email address!";	
          } // if
          else {
            if (empty($_POST["password"])) {
              $passwordError = "Password is required!";
            } // if
            else {
              $password = cleanInput($_POST["password"]);
              $form_hide = 1;
            } // else
          } // else
        } // else
      } // if   
      
      function cleanInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      } // cleanInput() 
    ?>
    
    <div class="container">
	  <div class="jumbotron text-center">
	    <h1>Welcome to Crowdfunding!</h1>
		  <p><em>Open up scope for investment...</em></p>
	  </div>
    
   	  <div class="jumbotron">
        <h1>Login</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-horizontal" role="form" method="post">
          <div class="form-group">
            <label for="email">Enter Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $email;?>">
            <span class="error"><?php echo $emailError;?></span>
          </div>
          <div class="form-group">
            <label for="password">Enter Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="<?php echo $password;?>">
            <span class="error"><?php echo $passwordError;?></span>
          </div>
          <!--<div class="checkbox">
            <label><input type="checkbox">Remember me</label>
          </div>-->
          <div align="center">
            <button type="submit" class="btn btn-default">Login</button> 
            Click here to <a href = "logout.php" tite = "Logout">Logout.
          </div>    
          <!--Email: <input type="text" name="email">
          <br><br>
          Password: <input type="password" name="password">
          <input type="submit" name="submit" value="Submit"> -->
        </form>
      </div>
    
      <div id="section">
        <h1>Crowdfunding, what are we about?</h1>
        <p class="overview">...</p>
        <p class="overview"><em>... Via this website ...</em></p>
      </div>
    </div>
      
    <?php
      echo "<h2>Your Input:</h2>";
      echo $email;
      echo "<br>";
      echo $password;   
    ?>

    <!-- <script>
      function submitLogin() {
        // alert("submitLogin()");
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        $("#test").text(email + "  " + password);
      } // submitLogin
    </script> -->
    
    <!-- Fixed Foot -->
    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    	<div class="container">
    		<div class="navbar-text pull-left">
    			<!--<p>©</p>-->
    		    <p><em>© 2016 Seema Anwer and Iqra Latif.</em></p>
    		</div>
    	</div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>