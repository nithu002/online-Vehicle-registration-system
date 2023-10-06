<?php
include('base.php');
ob_start();  
require('session.php');
//if (isset($_GET['edit']) || (isset($_GET['update']))) {




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
    <title>Customer Details</title>

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

<?php if (isset($_GET['edit'])) {
        $edit_cat_id = $_GET['edit'];
        $select_all_query = "SELECT * FROM system WHERE up_name ='$edit_cat_id'";
        $select_all_result = mysqli_query($con, $select_all_query);
        $row = mysqli_fetch_assoc($select_all_result);

        $id = $row['up_name'];
        $rname = $row['rname'];
        $email= $row['email'];
        $depart = $row['depart'];
        $mail = $row['mail'];
        $phone = $row['phone'];
        

    } ?>



<?php
    if (isset($_POST['xupdate'])) {
        $id = $_POST['up_name'];
        $rname = $_POST['rname'];
        $email = $_POST['email'];
        $depart = $_POST['depart'];
        $mail = $_POST['mail'];
        $phone = $_POST['phone'];
        
        $sql = "UPDATE system SET  rname='$rname',email='$email',depart='$depart', mail='$mail', phone='$phone' where up_name='$id'";
        $result = mysqli_query($con, $sql);
        if ($result) {

            $_SESSION['up'] = "

            <div class='alert alert-primary' role='alert'>
            
            <div><h4>
            <center><b>
            Update Successfully </b></center></h4>
            </div>
          </div>";
            header('Location:add_cust.php?edit=new');
        } else {
            echo '<script>alert("error");</script>';
        }
    }


?>

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
                    <a href="index3.html" class="nav-link">Vehicle Reservation System</a>
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
                                    <a href="add_cust.php" class="nav-link active ">
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
                            <h1 class="m-0">Staff Edit panel</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="">User</a></li>

                                <li class="breadcrumb-item active">Staff Information
                                </li>


                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!--####################################################################################################################################-->


            <!-- /.content-header -->


            <form method="POST">
                <div class="card">
                    <div class="col-sm-12">

                        <div class="card-header">


                            <div class="card-tools">



                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i></button>



                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <div>
                                    <thead>

                                        <tr>
                                            <th style="width: 15%">
                                                User Name
                                            </th>
                                            <th style="width: 17%">
                                                User Email
                                            </th>
                                            <th style="width: 17%">
                                                Department Name
                                            </th>

                                            <th style="width: 18%">
                                                Hod Email Address

                                            </th>
                                            <th style="width: 13%">
                                                Contact Number
                                            </th>

                                            <th style="width: 20%">

                                            </th>
                                        </tr>
                                        </tr>
                                    </thead>
                                </div>
                                <div>
                                    <tbody>
                                        <form method="POST">
                                            <tr>


                                                <td>
                                                    <input type="hidden" class="form-control" name="up_name"
                                                        value="<?php echo $id ?>" required>
                                                    <a>

                                                        <input type="name" class="form-control" name="rname"
                                                            value="<?php echo $rname  ?>" required
                                                            onkeypress="isInputNumber(event)">


                                                </td>
                                                <td>
                                                    </a>
                                                    <a>
                                                        <input type="email" class="form-control" name="email"
                                                            value="<?php echo $email ?>" required>

                                                    </a>
                                                </td>
                                                <td>
                                                    </a>
                                                    <a>

                                                        <select class="form-control"
                                                            data-placeholder="Select Vehicle Name" style="width: 100%;"
                                                            name="depart" id='vehicle' required>

                                                            <?php
                                                                $select_all_category = "SELECT depart FROM  depart";
                                                                     $result = mysqli_query($con, $select_all_category);
                                                                     echo "<option > {$depart} </option>";
                                                                         while ($row = mysqli_fetch_assoc($result)) {
                                                                      $cat_title = $row['depart'];
                                                                        
                                                                              echo "<option > {$cat_title } </option>";
                                                                                      }

                                                                                    ?>
                                                        </select>

                                                    </a>
                                                </td>
                                                <td>
                                                    </a>
                                                    <a>
                                                        <input type="email" class="form-control" name="mail"
                                                            value="<?php echo $mail ?>">

                                                    </a>
                                                </td>
                                                <td>
                                                    </a>
                                                    <a>
                                                        <input type="number" class="form-control" name="phone"
                                                            value="<?php echo $phone ?>" maxlength="13" required>

                                                    </a>
                                                </td>



                                                <td class='project-actions text-right'>
                                                    <a href="add_cust.php?add="><button type="button"
                                                            class="btn btn-danger">Cancel
                                                        </button></a>
                                                    <a>
                                                        <input type="submit" name="xupdate" value="update"
                                                            class="btn btn-primary">
                                                    </a>
                                                </td>
                                            </tr>
                                        </form>
                                    </tbody>
                                </div>

                            </table>

                        </div>
                    </div>
                </div>
            </form>



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
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">Vehicle Reservation System</div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.map"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script>
    function isInputNumber(evt) {

        var ch = String.fromCharCode(evt.which);

        if (!(/[a-z,A-Z]/.test(ch))) {
            evt.preventDefault();
        }

    }
    </script>

</body>

</html>

<?php // }
//else {
   // header('Location:index.php');
//}
?>