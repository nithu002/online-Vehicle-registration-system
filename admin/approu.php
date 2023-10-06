<?php


        require "base.php";
        //require "app.php";
        require('session.php');
        
        ob_start();

?>
<?php
if (isset($_GET['cat_id'])) {
    $cat_id = $_GET['cat_id'];
    $sql = "SELECT * FROM vrp INNER JOIN vehilce  ON vrp.vehicle = vehilce.vehicle_name WHERE vrp.cat_id = $cat_id";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $kmph = $row['kmph'];
            $vehicle_no = $row['vehicle_no'];
            
        }
    }

    
    $sql = "SELECT * FROM vrp INNER JOIN system  ON vrp.up_name = system.up_name WHERE vrp.cat_id = $cat_id";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $referid = $row['referid'];
            $rname = $row['rname'];
            $email = $row['email'];
            $depart = $row['depart'];
            $budget = $row['budget'];
            $hod = $row['hod'];
            $destination = $row['destination'];
            $reason = $row['reason'];
            $rdate = $row['rdate'];
            $edate = $row['edate'];
            $stime = $row['stime'];
            $etime = $row['etime'];
            $vehicle = $row['vehicle'];
            $percount = $row['percount'];
            $pername = $row['pername'];
            $pending = $row['progress'];
            $cur_time = $row['cur_time'];
            
        }
    }
} ?>





<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new budget from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View vehicle request details </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->

                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item d-none d-sm-inline-block">
                    <!-- Messages Dropdown Menu Item -->
                    <a href="" class="nav-link">
                        <?php
                if(isset($_SESSION['admin'])){
                    echo $_SESSION['admin']; }?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-slide="true" href="" role="button">

                        <img src="baseline_person_black_24dp.png"></img>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">
                        <form action="logout.php" method="POST">
                            <button type="submit" name="logout_btn"><img
                                    src="baseline_login_black_24dp.png"></img></button>
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">

                <span class="brand-text font-weight-light">Vehicle Reservation Portal</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item ">
                            <a href="dashboard.php" class="nav-link">
                                <img src=" baseline_leaderboard_white_18dp.png"></img>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <img src=" baseline_view_module_white_18dp.png"></img>
                                <p>
                                    Request

                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item ">
                                    <a href="request.php" class="nav-link active ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Vehicle Requests</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <img src="baseline_dns_white_18dp.png"></img>
                                <p>
                                    Vehicle info
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="add_new_vechile.php" class="nav-link  ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add New Vehicle </p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img src="baseline_dashboard_customize_white_18dp.png"></img>
                                <p>
                                    Users
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="add_cust.php" class="nav-link  ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p> Staff Details</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="sys_user.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>System Users</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="department.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Department</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="budget.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Budget</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <img src="outline_poll_white_18dp.png"></img>
                                <p>
                                    Reports
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item ">
                                    <a href="report_user.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>By User</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="report_vehicle.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>By Vehicle</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="report_department.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>By Department</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Request Details</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="request.php">Request Details</a></li>
                                <li class="breadcrumb-item active">View Request Details
                                </li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <div class="card card-default">
                <div class="card-header">

                </div>




                <div class="container">

                    <section class="section">
                        <div class="col-xl-12">
                            <!--Section heading-->
                            <div class="col-xl-8 offset-xl-2 py-5">
                                <!--Section heading-->
                                <center>
                                    <img src="logo_full.png"></img>
                                </center>

                            </div>
                            <Form method="post" action="#">
                                <section class="content card-default">
                                    <div class="container-fluid">
                                        <div class="card ">
                                            <div class="card-header">
                                                <h4 align="center">Vehicle Request Form </h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">

                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Requestor ID</label>



                                                            <input type="text" name="referid" class='form-control'
                                                                style='width: 100%;' id=' rname' readonly
                                                                value="<?php echo$referid  ?>">


                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Requestor's Name:</label>



                                                            <input name="rname" class='form-control'
                                                                style='width: 100%;' name='cat' id='rname' readonly
                                                                value="<?php echo$rname  ?>">


                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <label>Email Address:</label>
                                                        <input type='email' name="email" class='form-control'
                                                            placeholder='example@gmail.com' name='emailadd'
                                                            id='emailadd' readonly value="<?php echo$email  ?>">


                                                    </div>
                                                    <div class='col-3'>
                                                        <label>Department:</label>

                                                        <input type='text' name="depart" class='form-control'
                                                            name='depart' id='depart' placeholder='Department' readonly
                                                            value="<?php echo$depart  ?>">


                                                    </div>
                                                </div>
                                            </div>


                                        </div>


                                        <br>
                                        <!-- /.card -->

                                        <div class="card card-default">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group">
                                                            <label>budget/Budget:</label>
                                                            <input name="budget_name" class="form-control"
                                                                data-placeholder="Select budget/Budget"
                                                                style="width: 100%;" name="budget" id='budget' readonly
                                                                value="<?php echo$budget  ?>">

                                                            </input>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group">
                                                            <label>Budget Approved by HOD:</label>
                                                            <input name="hod" class="form-control" style="width: 100%;"
                                                                name="hod" id='hod' readonly value="<?php echo$hod  ?>">


                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group">
                                                            <label>Destination:</label>
                                                            <input type="text" name="destination" class="form-control"
                                                                name="depart" id="depart"
                                                                placeholder="Enter depart Name" readonly
                                                                value="<?php echo$destination  ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>destination for Travel:</label>
                                                            <textarea class="form-control" name="reason"
                                                                id="destination" rows="2"
                                                                readonly><?php echo$reason  ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-3">
                                                        <div class="form-group">
                                                            <label>Date of Require:</label>
                                                            <input type="text" name="rdate" id="demo"
                                                                class="form-control" readonly
                                                                value="<?php echo$rdate  ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-3">
                                                        <div class="form-group">
                                                            <label>Date of Return:</label>
                                                            <input type="text" name="edate" id="edate"
                                                                class="form-control" readonly
                                                                value="<?php echo$edate  ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-3">
                                                        <div class="form-group">
                                                            <label>Start Time:</label>
                                                            <input type="text" class="form-control" name="stime"
                                                                id="edate" readonly value="<?php echo$stime  ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-3">
                                                        <div class="form-group">
                                                            <label>End Time:</label>
                                                            <input type="text" class="form-control" name="etime"
                                                                id="stime" readonly value="<?php echo$etime  ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <br>
                                        <!-- /.card -->
                                        <div class="card card-default">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-2 " id="">
                                                        <div class="form-group">
                                                            <label>Vehicle Number</label>
                                                            <div class="" id="container">
                                                                <input type="text" class="form-control"
                                                                    name="vehicle_no" id=''
                                                                    value="<?php  echo$vehicle_no  ?>" readonly>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>Vehicle Name:</label>
                                                            <input class="form-control"
                                                                data-placeholder="Select Vehicle Name"
                                                                style="width: 100%;" name="vehicle_name"
                                                                value='<?php echo$vehicle  ?>' readonly>


                                                            </input>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 " id="">
                                                        <div class="form-group">
                                                            <label>Rates per kilometer:</label>
                                                            <div class="" id="container">
                                                                <input type="text" class="form-control" name="kmph"
                                                                    id='' value="<?php  echo$kmph  ?>/km" readonly>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-group">
                                                            <label>No of persons:</label>
                                                            <input type="text" class="form-control"
                                                                value="<?php echo$percount  ?>" style="width: 100%;"
                                                                name="percount" value="" readonly>
                                                            </input>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 " id="">
                                                        <div class="form-group">
                                                            <label>persons Name:</label>
                                                            <div class="" id="container">
                                                                <textarea class="form-control" name="pername" id=''
                                                                    readonly>  <?php echo$pername  ?></textarea>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <!-- /.card -->
                                        <div class="card card-default">



                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-4">


                                                        <input hidden="text" name="cat_id" class="form-control"
                                                            value="<?php echo $cat_id ?>" id="exampleInputEmail1">


                                                        <input hidden="text" name="cur_time" class="form-control"
                                                            value="<?php echo $cur_time ?>" id="exampleInputEmail1">


                                                        <label for="validationCustom03" class="form-label">
                                                            <h4>Progress</h4>
                                                        </label>

                                                        <select name="pending" class="form-control" style="width:50%;"
                                                            aria-label="Default select example">
                                                            <option selected="selected"><?php echo $pending ?>
                                                            </option>
                                                            <option value="Approved">Approved</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="Rejected">Rejected</option>

                                                        </select>
                                                    </div>
                                                    <div class='col-4'>
                                                        <label>Remarks:</label>

                                                        <input type='text' class='form-control' name='remarks'
                                                            id='depart' placeholder='Remarks' required>


                                                    </div>
                                                    <div class="col-2">
                                                        <input type="submit" name="app" class="btn btn-outline-success"
                                                            value="Submit">
                                                    </div>
                                                    <div class="col-1">
                                                        <a class="btn btn-outline-danger" href='request.php?id=hi'>

                                                            Cancel
                                                        </a>
                                                    </div>



                                                </div>
                                            </div>
                            </form>

                        </div>
                </div>
            </div>
            <!-- /.card -->
            </section>
            </Form>
        </div>
        <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <br> <?php
  if (isset($_POST['app'])) {
    $pending = $_POST['pending'];
    $cat_id = $_POST['cat_id'];
   // $email = $_POST['email'];
    $sql = "UPDATE vrp SET progress='$pending' where cat_id='$cat_id'";
    $result = mysqli_query($con, $sql);

   

  $rname = $_POST['rname'];
  $email = $_POST['email'];
  $depart = $_POST['depart'];
 
  $budget = $_POST['budget_name'];
  $hod = $_POST['hod'];
  $destination = $_POST['destination'];
  $reason = $_POST['reason'];
  $rdate = $_POST['rdate'];
  $edate = $_POST['edate'];
  $stime = $_POST['stime'];
  $etime = $_POST['etime'];
  $vehicle_name = $_POST['vehicle_name'];
  $percount = $_POST['percount'];
  $pername = $_POST['pername'];
  $per = $_POST['pername'];
  $pending = $_POST['pending'];
  $referid = $_POST['referid']; 
  $cur_time = $_POST['cur_time'];
  $kmph = $_POST['kmph'];
  $vehicle_no = $_POST['vehicle_no'];
  $remarks = $_POST['remarks'];

  $sql = "INSERT INTO full (rname, email, depart,budget_name, hod, destination, reason, rdate, edate, stime, etime, vehicle_name, percount, pername, progress,referid,cur_time,kmph,vehicle_no,remarks) 
    VALUES ('$rname','$email','$depart','$budget','$hod','$destination','$reason','$rdate','$edate','$stime','$etime','$vehicle_name','$percount','$per','$pending','$referid','$cur_time','$kmph','$vehicle_no','$remarks')";
    $result = mysqli_query($con, $sql);

  



    $pending = $_POST['pending'];
    $cat_id = $_POST['cat_id'];
   // $email = $_POST['email'];


    $sql = "UPDATE vrp SET progress='$pending' where cat_id='$cat_id'";
    $result = mysqli_query($con, $sql);

    $html = "<!doctype html>
            <html>
              
                <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
                <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
                <title>Simple Transactional Email</title>
                <link rel='stylesheet' href='mail.css'>
                <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback'>
                <!-- Font Awesome Icons -->
                <link rel='stylesheet' href='plugins/fontawesome-free/css/all.min.css'>
                <!-- Theme style -->
                <link rel='stylesheet' href='dist/css/adminlte.min.css'>
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
            
                
              </head>
              <body>
                
                <table role='presentation' border='0' cellpadding='0' cellspacing='0' class='body'>
                  <tr>
                    <td></td>
                    <td class='container'>
                      <div class='content'>
            
                        <!-- START CENTERED WHITE CONTAINER -->
                        <table role='presentation' class='main'>
            
                          <!-- START MAIN CONTENT AREA -->
                          <tr>
                            <td class='wrapper'>
                              <table role='presentation' border='0' cellpadding='0' cellspacing='0'>
                                <tr>
                                  <td>
                                    <p>Hi {$rname}, </p>
                                    <br> 
                                      <p>
                                      We kindly inform you that your request has been processed. Your vehicle request is <strong>{$pending}</strong> <br>
                                      You can see your vehicle request details below:</p>
                                    
                                    <p><strong>{$remarks}</strong></p>
                                    <table>
                                        <tbody>
                                        <tr>
                                        <td>
                                          Your ID :- #{$referid}.
                                        </td>
                                        
                                      </tr>
                                          <tr>
                                            <td>
                                              Your name :- {$rname}.
                                            </td>
                                            
                                          </tr>
                                       
                                          <tr>
                                            <td >
                                              Your choosing vehicle  :- {$vehicle}. 
                                            </td>
                                            
                                          </tr>
                                          <tr>
                                            <td >
                                            Rates per kilometer  :- {$kmph}. 
                                            </td>
                                            
                                          </tr>
                                          <tr>
                                            <td >
                                            Vehicle No  :- {$vehicle_no}. 
                                            </td>
                                            
                                          </tr>
                                          <tr>
                                            <td>
                                            The start date of the trip is {$rdate} to End date {$edate}.
                                            </td>
                                            
                                          </tr>
                                         
                                     
                                          
                                          <br><br>
                                          <tr><td>
                                          <p> 
                                             
                                      
                                        </div>
            
                                                </p>
                                                If you need any more details Please feel free contact our Administrative Executive. <br>
                                                Sincerely,<br>
                                                System Management.
                                        </td>
                                        </tr>
                                        </tbody>
                                      </table>
                                  </td> 
                                </tr>
                              </table>
                            </td>
                          </tr>
                          
                        <!-- END MAIN CONTENT AREA -->
                        </table>
                        <!-- END CENTERED WHITE CONTAINER -->
            
                        <!-- START FOOTER -->
                        <div class='footer'>
                          <table role='presentation' border='0' cellpadding='0' cellspacing='0'>
                            <tr>
                              <td class='content-block'>
                              Vehicle Reservation Portal System.
                                
                                
                              </td>
                            </tr>
                            <tr>
                              
                                
                              </td>
                            </tr>
                          </table>
                        </div>
                        <!-- END FOOTER -->
            
                      </div>
                    </td>
                    
                  </tr>
                </table>
              </body>
            </html>";
   // $email = $row['email'];

    include('PHPMailerAutoload.php');
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = "tls";
    $mail->SMTPAuth = true;
    $mail->Username = "system.new.mail1@gmail.com";
    $mail->Password = "oonowbqxphacmcmu";
    $mail->SetFrom("system.new.mail1@gmail.com");
    $mail->addAddress("{$email}");
    $mail->IsHTML(true);
    $mail->Subject = "Status For Request Letter";
    $mail->Body = $html;
    $mail->SMTPOptions = array(
      'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => false
      )
    );
    if ($mail->send()) {
      //echo "Mail send";
    } else {
      //echo "Error occur";
    }








    if ($result) {
      $_SESSION['up'] = "<div class='alert alert-info' role='alert'>
              Mail has been successfully sent 
              </div>";
      header('Location:request.php?id=hi');
    } else {
      echo '<script>alert("error");</script>';
    }
  }


           ?>



    <br>
    <br>
    <form action="" method="post">
        <div class="row">
            <div class="col-md-6">

            </div>

            </a>


        </div>
        </div>
    </form>




    </div>
    </div>



























    <!-- /Close .content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>