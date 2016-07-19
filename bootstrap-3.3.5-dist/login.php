<!-- Login Form
https://www.formget.com/login-form-in-php/ (Accessed: 15/06/2016) -->
<?php
  // Start the session.
  session_start();
  $email = $password = $error = "";
      
  function cleanInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  } // cleanInput() 
  
  // Connect to the group database.
  $mysqli = new mysqli('sql8.freemysqlhosting.net', 'sql8124351', 'zBbMTRv3LI', 'sql8124351');

  // Check for errors before doing anything else.
  if($mysqli -> connect_error) 
  {
    die('Connect Error ('.$mysqli -> connect_errno.') '.$mysqli -> connect_error);
  } // if
  else {
    /* Login Functionality
    http://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_form_basic&stacked=h &
    http://www.w3schools.com/php/showphp.asp?filename=demo_form_validation_complete (15/06/2016).*/
    // User data checking.
    if (isset($_POST['submit'])) {
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = cleanInput($_POST["email"]);
        $password = cleanInput($_POST["password"]);
      
        if (empty($_POST["email"])) {
          $error = "Email address is required!";
        } // if
        else {
          if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
          {
            $error = "Please enter a valid email address!";	
          } // if
          else {
            if (empty($_POST["password"])) {
              $error = "Password is required!";
            } // if
          } // else
        } // else  
      
        $result = $mysqli -> query("SELECT * FROM UserDetails WHERE UserName = '$email'");
        while($row = mysqli_fetch_array($result))
        {
          if($row['UserName'] == $email)
          {
            if($row['Password'] == $password) // crypt($password, $row['Password']))
            {
              // If login correct then show signed in page.
              if ($error == "") {
                // Initialise the sessions.
                $_SESSION['login_user'] = $email;
                $_SESSION['login_password'] = $password;
      
                // Redirect to the correct page.
                header("location: profile.php");
              } // if 
            } // if
            else {
              $error = "You have inputted incorrect password!";
            } // else 
          } // if
          else {
            $error = "You have inputted incorrect email!";
          } // else
        } // while
        
        // Remember to release the result set.
        $result -> close();
        
        // Always close your connection to the database cleanly!
        $mysqli -> close();   
      } // if
    } // if
  } // else
?>