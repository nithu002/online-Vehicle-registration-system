<?php
include('base.php');
ob_start();      
?>
<?php

require('session.php');

 //if (isset($_SESSION['admin']) || (isset($_GET['edit'])) || (isset($_GET['id'])) ||(isset($_SESSION['up']))) {

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
    <title>Vehicle Reservation Center</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                    <a class="nav-link">Vehicle Reservation depart</a>
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
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
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
                                    <a href="sys_user.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>System Users</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="department.php" class="nav-link active">
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
                            <h2>
                                <i class="m-0">depart User</i>
                            </h2>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item" name="dash"><a href="">User </a> </li>
                                <li class="breadcrumb-item active" name="dash">depart User</li>

                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>

            <!--SET THE pop up message in Edit--->
            <!-- Main content -->
            <!-- Button trigger modal################################################################################################################## -->




            <?php
if(isset($_SESSION['up'])){
    echo $_SESSION['up'];
    unset($_SESSION['up']);
}
?>
            <?php
      
           if (isset($_POST['xsubmit'])) {
               $depart = $_POST['depart'];
               $cdate = $_POST['cdate'];
              
               
               if (empty($depart)) {
                   echo "<div class='alert alert-danger' role='alert'>Field Cannot Be Empty</div>";
               } else {
                   $create_cat_query = "INSERT INTO  depart (depart,cdate) VALUES('$depart','$cdate')";
                   $create_cat_result = mysqli_query($con, $create_cat_query);
                   if (!$create_cat_result) {
                       echo "<div class='alert alert-danger' role='alert'>Not create the vechile name</div>";
                   }
                }
                   
                  
                    }
                    else{
                                    echo "";
                    }
                    

                    

                 

                    

               
      
           
      
    ?>
            <?php  
                            if(isset($_SESSION['update'])) {
                            echo $_SESSION['update'];
                            unset($_SESSION['update']);
                          }
                          ?>


            <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Add New Staff</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post" action="">
                            <div class="modal-body">


                                <th>
                                <td>
                                    <div class="col-md-12">
                                        <label for="vechile_name">Department</label>
                                        <input type="text" class="form-control" name="depart" value=""
                                            placeholder="Department">
                                    </div>

                                </td>
                                <td>
                                    <div class=" col-md-12">
                                        <label for="vechile_name">Create Date</label>
                                        <input type="date" class="form-control" name="cdate" value="" required required
                                            min="<?php
                                                             // Set the new timezone
                                            date_default_timezone_set('Asia/Kolkata');
                                               $date = date('20y-m-d');
                                                                  echo $date;
                                                       ?>" max="2050-01-02">
                                    </div>
                                </td>



                                </th>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="xsubmit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--This is the Edit optican depart-->





            <div class="card">
                <div class="col-sm-12">

                    <div class="card-header">
                        <h3 class="card-titl"> </h3>

                        <div class="card-tools">
                        </div>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
                            +Create</button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>

                            <tr>
                                <th style="width: 40%">
                                    Department Name
                                </th>
                                <th style="width: 40%">
                                    Create Date
                                </th>


                                <th style="width: 20%">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
      
           $select_all_query = "SELECT * FROM depart";
           $select_all_result = mysqli_query($con, $select_all_query);
           while ($row = mysqli_fetch_assoc($select_all_result)) {
              $id=$row['id'];
               $depart = $row['depart'];
               
               $cdate = $row['cdate'];
             
               
               echo "  
                                                                    <tr>
                                                         
                                                         
                                                                             <td>
                                                                             <a >
                                                                              {$depart}
                                                                                    </td>
                                                                                <td>
                                                                                </a>
                                                                                 <a >
                                                                                {$cdate}
                                                                                       </a>
                                                                                       
      
                                                         
      
                                          </td>
                                          
      
                       
                                                            
                                                           <td class='project-actions text-right' >   
                                                           <a class='btn btn-info btn-sm'   href='depart_edit.php?edit={$id}'>
                                                           <i class='fas fa-pencil-alt' >
                                                                        </i>
                                                           Edit
                                                       </a>
                                                       
      
                                                <a class='btn btn-danger btn-sm' href='department.php?delete={$depart}'>
                                                <i class='fas fa-trash '>
                                                </i>
                                                Delete
                                                 </a>
                                                </td>   </tr>";
           }
                                                          ?>








                    </table>
                    </tbody>


                </div>





                <!-- Vertically centered modal -->
                <div class="modal-dialog modal-dialog-centered">

                </div>









            </div>


            <?php

if (isset($_GET['delete'])) {
    $delete_cat_id = $_GET['delete'];
    $delete_query = "DELETE FROM depart WHERE depart ='$delete_cat_id'";
    $delete_result = mysqli_query($con, $delete_query);


    header('location:department.php');
}

                                     ?>

        </div>
        <!-- /.card -->


        <!-- /.content -->

        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">Vehicle Reservation depart</div>
            <!-- Default to the left -->

        </footer>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>






</body>


</html>