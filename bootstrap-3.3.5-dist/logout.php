<!-- Login Form
https://www.formget.com/login-form-in-php/ (Accessed: 15/06/2016) -->
<?php
session_start();
session_unset($_SESSION['login_user']);
// Destroy all sessions
if(session_destroy()) {
  // Redirect to home page
  header("Location: homepage.php");
} // if
?>