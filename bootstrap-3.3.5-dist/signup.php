<!-- Signup Form
https://www.formget.com/login-form-in-php/ (Accessed: 15/06/2016) -->
<?php
  session_start();
  $email = $name = $password = $error = "";
  // $_SESSION['success'] = "N";
      
  function cleanInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  } // cleanInput() 
      
  /* Sign up Functionality
  http://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_form_basic&stacked=h &
  http://www.w3schools.com/php/showphp.asp?filename=demo_form_validation_complete (15/06/2016).*/
  // User data checking.
  if (isset($_POST['submit_form'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $password = cleanInput($_POST["password"]);
      $name = cleanInput($_POST["name"]);
      $email = cleanInput($_POST['email']);
      
      if (empty($_POST['name'])) {
        $error = "Name is required!";
      } // if
      else if (empty($_POST['email'])) {
        $error = "Email address is required!";
      } // else if
      else if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
      {
        $error = "Please enter a valid email address!";	
      } // if
      else if (empty($_POST['confirm_email'])) {
        $error = "Confirm Email address!";
      } // else if
      else if ($_POST['email'] != $_POST['confirm_email']) {
        $error = "Emails should match!";
      } // else if
      else if (empty($_POST['password'])) {
        $error = "Password is required!";
      } // else if
      else if (empty($_POST['confirm_password'])) {
        $error = "Confirm Password!";
      } // else if
      else if ($_POST['password'] != $_POST['confirm_password']) {
        $error = "Passwords should match!";
      } // else if 
    
      // If signup correct then divert to correct page.
      if ($error == "") {
        // Connect to the group database.
        $mysqli = new mysqli('sql8.freemysqlhosting.net', 'sql8124351', 'zBbMTRv3LI', 'sql8124351');

        // Check for errors before doing anything else.
        if($mysqli -> connect_error) {
          die('Connect Error ('.$mysqli -> connect_errno.') '.$mysqli -> connect_error);
        } // if
        else {
          $result = $mysqli -> query("SELECT * FROM UserDetails");
          while($row = mysqli_fetch_array($result)) {
            if($row['UserName'] == $email) {
              // Error to be displayed if the email already exists.
              $error = "You are already registered so please sign in";
            } // if
            else {
              // Error to be displayed
              if(strlen($password) < 6) {
                $error = "Your password needs to be atleast 6 characters long";
              } // if   
            } // else
          } // while
          
          // Remember to release the result set.
          $result -> close();
        } // else
      } // if
          
      if ($error == "") {   
        //$password = crypt($password, 'SodiumChloride');
        $mysqli -> query ("INSERT INTO UserDetails (UserName,Password,UserIP,Name) VALUES ('$email','$password',DEFAULT,'$name')"); 
        
        // Always close your connection to the database cleanly!
        $mysqli -> close();   
            
        // $_SESSION['success'] = "Y";
        // Redirect to the correct page.
        // header("location: homepage.php");

        // Initialise the sessions.
        $_SESSION['login_user'] = $email;
        $_SESSION['login_password'] = $password;
      
        // Redirect to the correct page.
        header("location: profile.php");
      } // if
    } // if  
  } // if 
?>