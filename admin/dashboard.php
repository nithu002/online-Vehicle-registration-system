<?php

require('base.php');
require('session.php');

?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Vehicle Reservation Center</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Count', ],
            <?php

$select_all_category = "SELECT depart FROM  depart";
     $result = mysqli_query($con, $select_all_category);
while ($row = mysqli_fetch_assoc($result)) {
    $cat_title = $row['depart'];
    $dash_detail_query = "SELECT depart FROM system where depart = '$cat_title'";
    $dash_category_detail_run = mysqli_query($con, $dash_detail_query);
    if ($category_total = mysqli_num_rows($dash_category_detail_run)) {
      
    } 
        
   ?>['<?php echo$cat_title ?>', <?php echo$category_total ?>],


            <?php } ?>



        ]);

        var options = {
            title: 'Departments Staff Details',
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
    </script>


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
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block"></li>
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
            <a class="brand-link">
                <span class="brand-text font-weight-light">Vehicle Reservation Center</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search" />
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
                            <a href="dashboard.php" class="nav-link active">
                                <img src=" baseline_leaderboard_white_18dp.png"></img>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <img src=" baseline_view_module_white_18dp.png"></img>
                                <p>
                                    Request

                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item ">
                                    <a href="request.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Vehicle Requests</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item menu">
                            <a href="#" class="nav-link">
                                <img src="baseline_dns_white_18dp.png"></img>
                                <p>
                                    Vehicle info
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="add_new_vechile.php" class="nav-link">
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
                                    <a href="report_user.php" class="nav-link ">
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
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">Home</a></li>

                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <?php

    $dash_category_query = "SELECT * FROM  system";
    $dash_category_query_run = mysqli_query($con, $dash_category_query);
    if ($category_total = mysqli_num_rows($dash_category_query_run)) {
        echo "<h3>{$category_total} <sup style='font-size: 20px'></sup></h3>";
    } else {
        echo "<h3>No Data <sup style='font-size: 20px'></sup></h3>";
    }
                                    ?>





                                    <p>Total Staff</p>
                                </div>
                                <div class="icon">
                                    <i class="iion ion-person-add"></i>
                                </div>
                                <a href="add_cust.php" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <?php

    $dash_detail_query = "SELECT * FROM vehilce";
    $dash_category_detail_run = mysqli_query($con, $dash_detail_query);
    if ($category_total = mysqli_num_rows($dash_category_detail_run)) {
        echo "<h3>{$category_total} <sup style='font-size: 20px'></sup></h3>";
    } else {
        echo "<h3>No Data <sup style='font-size: 20px'></sup></h3>";
    }
                                 
                                 ?>

                                    <p>Vechile Count</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="add_new_vechile.php" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <?php 

    $dash_detail_query = "SELECT * FROM depart ";
    $dash_category_detail_run = mysqli_query($con, $dash_detail_query);
    if ($category_total = mysqli_num_rows($dash_category_detail_run)) {
        echo "<h3>{$category_total} <sup style='font-size: 20px'></sup></h3>";
    } else {
        echo "<h3>0 <sup style='font-size: 20px'></sup></h3>";
    }
                                  ?>

                                    <p> No of Department</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="department.php" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <?php

    $dash_detail_query = "SELECT * FROM vrp ";
    $dash_category_detail_run = mysqli_query($con, $dash_detail_query);
    if ($category_total = mysqli_num_rows($dash_category_detail_run)) {
        echo "<h3>{$category_total} <sup style='font-size: 20px'></sup></h3>";
    } else {
        echo "<h3>0 <sup style='font-size: 20px'></sup></h3>";
    }
                                    ?>

                                    <p>Total Requests</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-graph"></i>
                                </div>
                                <a href="request.php" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <?php

    $dash_detail_query = "SELECT * FROM vrp where progress = 'Approved'";
    $dash_category_detail_run = mysqli_query($con, $dash_detail_query);
    if ($category_total = mysqli_num_rows($dash_category_detail_run)) {
        echo "<h3>{$category_total} <sup style='font-size: 20px'></sup></h3>";
    } else {
        echo "<h3>0 <sup style='font-size: 20px'></sup></h3>";
    }
                                 
                                 ?>

                                    <p>Approved Request</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="request.php" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <?php 

    $dash_detail_query = "SELECT * FROM vrp where progress = 'Rejected'";
    $dash_category_detail_run = mysqli_query($con, $dash_detail_query);
    if ($category_total = mysqli_num_rows($dash_category_detail_run)) {
        echo "<h3>{$category_total} <sup style='font-size: 20px'></sup></h3>";
    } else {
        echo "<h3>0 <sup style='font-size: 20px'></sup></h3>";
    }
                                  ?>

                                    <p> Rejected Request</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="request.php" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                    </div> <!-- ./col -->
                </div>
                <!-- /.row -->
            </div>
            <br>
            <br>

            <!-- <div class="container">
                <section class="section">
                    <div class="col-xl-12">
                        <div class="card card-default">
                            <div class="card-body">
                                <!-- DIRECT CHAT ########################################################################################-->
            <div class="card direct-chat direct-chat-primary">
                <div class="card-header">
                    <h3 class="card-title"></h3>

                    <div class="card-tools">

                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="col-12">
                        <div class="row">

                            <!-- Conversations are loaded here -->
                            <div class="col-6">
                                <div class="direct-chat-messages">
                                    <div class="col-12">


                                        <!-- /.card-header -->

                                        <div id="piechart" style="width: 500px; height: 230px;">
                                        </div>







                                    </div>
                                    <!----------------------------------------------------------------------------------------------------------------------------------------------->
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="direct-chat-messages">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Recent Requests</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table id="example2" class="table table-bordered table-hover">
                                                    <thead>



                                                        <tr>

                                                            <th>Requestor Name</th>
                                                            <th>Department</th>
                                                            <th>Progress </th>
                                                            <th>View</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                        <?php

$sql = "SELECT * FROM vrp INNER JOIN system  ON vrp.up_name = system.up_name";  
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_array($result)) {
$cat_id=$row['cat_id'];
//$referid = $row['referid'];
$rname = $row['rname'];
$depart = $row['depart'];
//$budget = $row['budget'];
//$hod = $row['hod'];
//$vehicle = $row['vehicle'];
//$rdate = $row['rdate'];
//$percount = $row['percount'];
$progress = $row['progress'];
                                                                if ($progress == 'Pending') {



                                                                    echo "
                                        <tr>
                                        
                                        <td>{$rname}</td>
                                        <td>{$depart}</td>
                                        
                                         
                                        
                                       
                                       
                                         <td class='project-state'><span class='badge badge-success'>{$progress}</span></td>




                                         <td><a class='btn btn-primary btn-sm' href='approu.php?cat_id={$cat_id}'>
                                         <i class='fas fa-folder'>
                                              </i>
                                                View
                                                    </a></td>
                                          
                                         </tr> ";



                                                                } }
                                            }                          ?>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!----------------------------------------------------------------------------------------------------------------------------------------------->
                                </div>
                            </div>

                            <!--/.direct-chat-messages-->

                            <!-- Contacts are loaded here -->
                            <div class="direct-chat-contacts">
                                <ul class="contacts-list">

                                    <!-- End Contact Item -->
                                </ul>
                                <!-- /.contacts-list -->
                            </div>
                            <!-- /.direct-chat-pane -->

                            <!-- /.card-body -->
                            <div class="card-footer">

                            </div>
                            <!-- /.card-footer-->
                        </div>

                    </div>
                </div>


            </div>
        </div>





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
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">Vehicle Reservation System</div>
            <!-- Default to the left -->

        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css" />
</body>

</html>