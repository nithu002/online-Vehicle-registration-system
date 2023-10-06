<?php
        require "base.php";
        
        ob_start();

require('session.php');


//if (isset($_SESSION['admin']) || (isset($_GET['id']))||(isset($_GET['delete']))||(isset($_GET['id']))||(isset($_SESSION['date'])) ){
   


?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vehicle Request Details</title>

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
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link">Vehicle Reservation System</a>
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
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">

                <span class="brand-text font-weight-light">Vehicle Reservation Center</span>
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
                            <a href="#" class="nav-link  active">
                                <img src=" baseline_view_module_white_18dp.png"></img>
                                <p>
                                    Request

                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item ">
                                    <a href="request.php" class="nav-link active">
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
                            <a href="#" class="nav-link">
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
                            <?php if           (isset($_SESSION['up'])) {
                                                     echo $_SESSION['up'];
                                                     unset($_SESSION['up']);
                                                               } ?>
                            <h1><i class="m-0">Request Details</i> </h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="">Reports</a></li>
                                <li class="breadcrumb-item active">Request Details</li>

                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>



                                            <tr>
                                                <th>ID</th>
                                                <th>Requestor Name</th>
                                                <th>Department</th>
                                                <th>Budget</th>
                                                <th>Hod Approved </th>
                                                <th>Vehicle</th>
                                                <th>Date of Require</th>
                                                <th>Per-Count</th>
                                                <th>Progress </th>
                                                <th>View</th>
                                                <th>Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php

   /* $select_all_category = "SELECT * FROM vrp";
    $result = mysqli_query($con, $select_all_category);

    while ($row = mysqli_fetch_assoc($result)) {
        $cat_id=$row['cat_id'];
        $referid = $row['referid'];
        $rname = $row['rname'];
        $depart = $row['depart'];
        $budget = $row['budget'];
        $hod = $row['hod'];
        $vehicle = $row['vehicle'];
        $rdate = $row['rdate'];
        $percount = $row['percount'];
        $progress = $row['progress'];
                                                if (isset($rname)) {
                                                    $id=$rname;
                                                    
                                                   $id=$_GET['id'];
                                                   $sql="Select * from system  where id=$id";
                                                   $result=mysqli_query($con,$sql);
                                                    $row=mysqli_fetch_assoc($result);
                                                   
                                                    $up_name = $row['rname'];
                                                    echo " <td>{$up_name}</td>";}*/
                                                    $sql = "SELECT * FROM vrp INNER JOIN system  ON vrp.up_name = system.up_name";  
                                                    $result = mysqli_query($con, $sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $cat_id=$row['cat_id'];
                                                    $referid = $row['referid'];
                                                    $rname = $row['rname'];
                                                    $depart = $row['depart'];
                                                    $budget = $row['budget'];
                                                    $hod = $row['hod'];
                                                    $vehicle = $row['vehicle'];
                                                    $rdate = $row['rdate'];
                                                    $percount = $row['percount'];
                                                    $progress = $row['progress'];
                                                    




                                                    echo "
                                        <tr>
                                         <td>#{$referid}</td>
                                         <td>{$rname}</td>
                                         <td>{$depart}</td>
                                         <td>{$budget}</td>
                                         <td>{$hod}</td>
                                         <td>{$vehicle}</td>
                                         <td>{$rdate}</td>
                                         <td>{$percount}</td>
                                         <td class='project-state'><span class='badge badge-success'>{$progress}</span></td>




                                         <td><a class='btn btn-primary btn-sm' href='approu.php?cat_id={$cat_id}'>
                                         <i class='fas fa-folder'>
                                              </i>
                                                View
                                                    </a></td>
                                                    <td><a class='btn btn-danger btn-sm' href='request.php?delete={$referid}'>
                                         <i class='fas fa-trash'>
                                              </i>
                                                Delete
                                                    </a></td>
                                         </tr> ";

                                                }
                                            }    

    
                                    ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




            <?php
    if (isset($_GET['delete'])) {

        $delete_cat_id = $_GET['delete'];
        $delete_query = "DELETE FROM vrp WHERE referid = '$delete_cat_id'";
        $delete_result = mysqli_query($con, $delete_query);
        header('location:request.php?cus');
    }

            ?>











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
</body>

</html>
<?php // }
//else { 

    //    header('location:index.php');
//}
 ?>