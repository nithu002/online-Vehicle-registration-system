<?php
session_start();
?>


<?php

if (isset($_SESSION['i_d'])) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Request Submitted</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='custom.css' rel='stylesheet' type='text/css'>
    <style>
    .button {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .button2 {
        padding: 12px 28px;
    }
    </style>
</head>

<body>
    <div class="container">

        <!--Section: Contact v.2-->
        <section class="section">
            <div class="col-xl-12">
                <!--Section heading-->

                <div class="col-xl-8 offset-xl-2 py-5">
                    <!--Section heading-->

                    <!-- <h4 align="center">Equipment Request Form </h4>-->
                </div>
                <Form method="post">
                    <section class="content card-default">
                        <div class="container-fluid">
                            <div class="card ">
                                <div class="card-header">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <center>
                                                        <h4>
                                                            <font color="green">Your vehicle request <?php
    if (isset($_SESSION['i_d'])) {
        echo $_SESSION['i_d'];
        unset($_SESSION['i_d']);
    } ?> has been submitted for
                                                                approval.</font>
                                                        </h4>
                                                        You will receive an email once the vehicle request approved by
                                                        the Fleet Controller.
                                                        <br><br>

                                                        <a class="button button2" href='index.php'>
                                                            <i class=''>
                                                            </i>
                                                            New Request
                                                        </a>
                                                </div>
                                                </center>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->
                                </div>
                            </div>
                    </section>
                </form>
            </div>
        </section>
    </div>
</body>

</html>

<?php
}else{
    $_SESSION['error']="<div class='alert alert-danger' role='alert'>
    <center>You have not filed vehicle request form details! So first fill all the details in the form.</center>
  </div>
  ";
    header('location:index.php');
}