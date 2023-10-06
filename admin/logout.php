<?php
session_start();

require('session.php');

if (isset($_POST['logout_btn'])){
      
   // session_destroy();
    unset($_SESSION['admin']);
     $_SESSION['status']="<div class='alert alert-warning' role='alert'>
    Your Successfully Logout Now
    </div>";
    header("Location:index.php");
   // unset($_SESSION['username']);
}



?>