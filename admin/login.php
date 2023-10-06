<?php
session_start();
include('base.php');
?>

<html>

<head>
    <title></title>



</head>

<body>


    <?php
if (isset($_POST['submit'])) {
   
   $email = $_POST['email'];
   $upassword = $_POST['password'];
   $user=$_POST['user'];
   
   $sql = "SELECT *FROM login WHERE email='$email' AND password='$upassword'";
   $result = mysqli_query($con, $sql);
   
   if(mysqli_num_rows($result) > 0){
           $_SESSION['admin'] = $email;

            header('location:dashboard.php');

  }  


   else {
         $_SESSION['status'] =  "<div class='alert alert-danger' role='alert'>
         Your  password is not valid  , pless try again!
         </div>";
         
         header('location:index.php');

      }
   }
    
?>




</body>

</html>