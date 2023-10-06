<?php
require 'db.php';
session_start();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>VRF</title>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link href='custom.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="readmore.css">
    <style>

    </style>
    <SCRIPT language=JavaScript>
    function reload(form) {
        var val = form.cat.options[form.cat.options.selectedIndex].value;
        self.location = 'index.php?cat=' + val;
    }
    </script>
    <script>
    function change() {
        var select = document.getElementById("slct");
        var divv = document.getElementById("container");
        var value = select.value;
        if (value == 1) {
            toAppend =
                "<input type='textbox'  class='form - control' name='pername[]' placeholder = 'Enter Person Name'required > ";
            divv.innerHTML = toAppend;
            return;
        }
        if (value == 2) {
            toAppend =
                "<input type='textbox'  class='form - control' name='pername[]' placeholder = 'Enter Person Name'required > &nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >";
            divv.innerHTML = toAppend;
            return;
        }
        if (value == 3) {
            toAppend =
                "<input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required > &nbsp; <br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox'  class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >";
            divv.innerHTML = toAppend;
            return;

        }
        if (value == 4) {
            toAppend =
                "<input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required > &nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >";
            divv.innerHTML = toAppend;
            return;

        }
        if (value == 5) {
            toAppend =
                "<input type='textbox'  class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >";
            divv.innerHTML = toAppend;
            return;

        }
        if (value == 6) {
            toAppend =
                "<input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >";
            divv.innerHTML = toAppend;
            return;

        }
        if (value == 7) {
            toAppend =
                "<input type='textbox'  class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >";
            divv.innerHTML = toAppend;
            return;

        }
        if (value == 8) {
            toAppend =
                "<input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required > &nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required > &nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required > &nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required > &nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required > &nbsp;<br><br><input type='textbox'  class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >";
            divv.innerHTML = toAppend;
            return;

        }
        if (value == 9) {
            toAppend =
                "<input type='textbox'  class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox'  class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox'  class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox'  class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required >";
            divv.innerHTML = toAppend;
            return;

        }
        if (value == 10) {
            toAppend =
                "<input type='textbox'  class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox'  class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>";
            divv.innerHTML = toAppend;
            return;

        }
        if (value == 11) {
            toAppend =
                "<input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox'class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox'  class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>";
            divv.innerHTML = toAppend;
            return;

        }
        if (value == 12) {
            toAppend =
                "<input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox'  class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox'  class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>";
            divv.innerHTML = toAppend;
            return;

        }
        if (value == 13) {
            toAppend =
                "<input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox'class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>";
            divv.innerHTML = toAppend;
            return;

        }
        if (value == 14) {
            toAppend =
                "<input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>";
            divv.innerHTML = toAppend;
            return;

        }
        if (value == 15) {
            toAppend =
                "<input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox'  class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>&nbsp;<br><br><input type='textbox' class='form - control' name='pername[]' placeholder = 'Enter Person Name'required>";
            divv.innerHTML = toAppend;
            return;

        }

    }
    </script>
    <script>
    var todayDate = new Date();
    var month = todayDate.getMonth();
    var year = todayDate.getUTCFullYear() - 0;
    var tdate = todayDate.getDate();
    if (month < 10) {
        month = "0" + month
    }
    if (tdate < 10) {
        tdate = "0" + tdate;
    }
    var maxDate = year + "-" + month + "-" + tdate;
    document.getElementById("demo").setAttribute("min", maxDate);
    console.log(maxDate);
    </script>
</head>

<body>

    <div class="container">

        <section class="section">
            <div class="col-xl-12">
                <?php
            if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
               unset($_SESSION['error']);
               } ?>
                <!--Section heading-->
                <div class="col-xl-8 offset-xl-2 py-5">
                    <!--Section heading-->
                    <center>
                        <img src="logo_full.png"></img>
                    </center>

                </div>
                <Form method="POST" name="" action="action.php">
                    <section class="content card-default">
                        <div class="container-fluid"><?php
            if (isset($_SESSION['session'])) {
                echo $_SESSION['session'];
               unset($_SESSION['session']);
               } ?>
                            <div class="card ">
                                <div class="card-header">
                                    <h4 align="center">Vehicle Request Form </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div>
                                            <input type="hidden" name="id">
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label>Requestor's Name:</label>

                                                <?php 
                                                    if(isset($_GET['cat'])){

                                                   @$cat=$_GET['cat']; 
                                                          if(strlen($cat) > 0 and !is_numeric($cat)){ 
                                                                 echo "Data Error";
                                                                   exit ;
                                                       }
                                           }
                                                $quer2="SELECT DISTINCT up_name,rname  FROM system order by rname"; 
                                        if(isset($cat) and strlen($cat) > 0){
                                $quer="SELECT DISTINCT email,depart,mail FROM system where up_name=$cat order by email";  
                                
                                       } else {
                                                     $quer = "SELECT DISTINCT email, depart,mail  FROM system where up_name order by email";
                                                     
                                          }
                                                echo "
                                                <select class='form-control' 
                                                    style='width: 100%;' name='cat' id='rname' required onchange=\"reload(this.form)\" >";
                                                
                                                    foreach ($con->query($quer2) as $noticia2) {
                                                        if ($noticia2['up_name'] == @$cat) {
                                                            echo "<option selected value='$noticia2[up_name]'>$noticia2[rname]</option>" . "<BR>";
                                                        } else
                                                         {
                                                        echo  " <option  value='$noticia2[up_name]'>$noticia2[rname]</option>";
                                                
                                                    }
                                                }
                                                echo " </select>";
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label>Email Address:</label>
                                            <?Php
                                                   if (isset($cat)) {
                                                      foreach ($con->query($quer) as $noticia) {
                                            echo"<input type='email' class='form-control' name='email' id='email'
                                                readonly value='$noticia[email]' $noticia[email] >";
                                                      }} else {
                                                echo "<input type='email' class='form-control' placeholder='example@gmail.com' name='emailadd' id='emailadd'
                                                        readonly >";
                                                      } 
                                                      ?>


                                        </div>
                                        <div class='col-3'>
                                            <label>Department:</label>
                                            <?php
                                            if (isset($cat)) {
                                                foreach ($con->query($quer) as $department) {
                                                    echo " <input type='text' class='form-control' name='depart' id='depart' 
                                             value='$department[depart]' $department[depart] readonly>";
                                                }
                                            }else{
                                                echo " <input type='text' class='form-control' name='depart' id='depart' placeholder='Department'  
                                                 readonly>";
                                            }
                                            ?>

                                        </div>
                                        <div class='col-3'>
                                            <label>HOD Email Address:</label>
                                            <?php
                                            if (isset($cat)) {
                                                foreach ($con->query($quer) as $mail) {
                                                    echo " <input type='text' class='form-control' name='mail' id='' 
                                             value='$mail[mail]' $mail[mail] readonly>";
                                                }
                                            }else{
                                                echo " <input type='text' class='form-control' name='mail' id='' placeholder='example@gmail.com'  
                                                 readonly>";
                                            }
                                            ?>

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
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group">
                                            <label>Project/Budget:</label>
                                            <select class="form-control" data-placeholder="Select Project/Budget"
                                                style="width: 100%;" name="budget" id='project' required>
                                                <option>Choose One</option>
                                                <?php
                                                                $select_all_category = "SELECT * FROM  budget";
                                                                     $result = mysqli_query($con, $select_all_category);
                                                                         while ($row = mysqli_fetch_assoc($result)) {
                                                                      $cat_title = $row['budget_name'];

                                                                              echo "<option > {$cat_title} </option>";
                                                                                      }

                                                                                    ?>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group">
                                            <label>Budget Approved by HOD:</label>
                                            <select class="form-control" data-placeholder="Select Approval Status"
                                                style="width: 100%;" name="hod" id='hod' required>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group">
                                            <label>Destination:</label>
                                            <input type="text" class="form-control" name="destination" id="destination"
                                                placeholder="Enter Destination Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Reason for Travel:</label>
                                            <textarea class="form-control" name="reason" id="reason" rows="2" required
                                                onkeypress="isInputNumber(event)"> </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group">
                                            <label>Date of Require:</label>
                                            <input type="date" name="rdate" id="demo" class="form-control" required min="<?php
                                                             // Set the new timezone
                                            date_default_timezone_set('Asia/Kolkata');
                                               $date = date('20y-m-d');
                                                                  echo $date;
                                                       ?>" max="2050-01-02" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group">
                                            <label>Date of Return:</label>
                                            <input type="date" name="edate" id="edate" class="form-control" required
                                                min="<?php
                                                             // Set the new timezone
                                            date_default_timezone_set('Asia/Kolkata');
                                               $date = date('20y-m-d');
                                                                  echo $date;
                                                       ?>" max="2050-01-02" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group">
                                            <label>Start Time:</label>
                                            <input type="time" class="form-control" name="stime" id="stime">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="form-group">
                                            <label>End Time:</label>
                                            <input type="time" class="form-control" name="etime" id="etime">
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
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Vehicle Name:</label>
                                            <select class="form-control" data-placeholder="Select Vehicle Name"
                                                style="width: 100%;" name="vehicle" id='vehicle' required>
                                                <option value="">Choose Your Vehicle</option>
                                                <?php
                                                                $select_all_category = "SELECT * FROM  vehilce";
                                                                     $result = mysqli_query($con, $select_all_category);
                                                                         while ($row = mysqli_fetch_assoc($result)) {
                                                                      $cat_title = $row['vehicle_name'];

                                                                              echo "<option > {$cat_title} </option>";
                                                                                      }

                                                                                    ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label>No of Persons:</label>
                                            <select class="form-control" data-placeholder="Select No of Persons"
                                                style="width: 100%;" name="percount" id='slct' required
                                                onchange="change();">
                                                <option value="1"> 1 </option>
                                                <option value="2"> 2 </option>
                                                <option value="3"> 3 </option>
                                                <option value="4"> 4</option>
                                                <option value="5"> 5 </option>
                                                <option value="6"> 6 </option>
                                                <option value="7"> 7 </option>
                                                <option value="8"> 8 </option>
                                                <option value="9"> 9 </option>
                                                <option value="10"> 10 </option>
                                                <option value="11"> 11 </option>
                                                <option value="12"> 12 </option>
                                                <option value="13"> 13 </option>
                                                <option value="14"> 14 </option>
                                                <option value="15"> 15 </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3 " id="">
                                        <div class="form-group">
                                            <label>Persons Name</label>
                                            <div class="" id="container">
                                                <input type="text" class="form-control" name="pername[]" id=''
                                                    placeholder="Enter Person Name " onkeypress="isInputNumber(event)"
                                                    required>

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <input type="hidden" name="pending" value="Pending">
                                    </div>
                                    <div>
                                        <input type="hidden" name="cur_time" value="<?php
                                                             // Set the new timezone
                                            date_default_timezone_set('Asia/Kolkata');
                                               $date = date('y-m-d h:i:s');
                                                                  echo $date;
                                                       ?>">
                                    </div>
                                    <div>
                                        <input type="hidden" name="referid" value="<?php $code=rand(1,1000);
                                                                                   $referid  ='VRF_' . $code;
                                                                                   echo$referid ?> ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- /.card -->
                        <div class="card card-default">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h5>Terms and Conditions:</h5>

                                        <p class="text">
                                            <br>1.All requests required HOD, GS/CEO approval,
                                            Budget must be approved by the HOD.<br>
                                            2.If the requested vehicle is unavailable, an <span class="dots">
                                                ........</span> <span class="moreText">alternative vehicle could be
                                                release.<br>
                                                3. Due to the fuel restrictions, as per the destination indicated the
                                                kilometer will be assed and no other running is permitted unless it's
                                                been specified on the
                                                request.<br>
                                                4.Travel planning for outstation should be between <b> 4.30 am to 9.00
                                                    pm </b> avoid late
                                                night traveling.<br>
                                                5.Speed limit for light vehicle 70KM/hour and heavy vehicle (
                                                marked
                                                )
                                                60KM/hour out of city
                                                limits and considering traffic congestion on route, the travel
                                                timing
                                                should be planned no
                                                pressure should be applied to the driver.<br>
                                                6.Special arrangements and If staff are been picked from home or
                                                dropped
                                                or any other shuttle
                                                running should be mentioned on the remarks column.<br>
                                                7. If any changes incurs such as date /time /destination / persons
                                                and
                                                remarks , please do send
                                                a revised request.<br>
                                                8.Requestor is responsible to ensure that all passengers to hold
                                                a
                                                valid
                                                proof of
                                                identification.<br>9. (NIC/Passport/NDL/Work permit) and No
                                                strangers
                                                to
                                                be accommodated.<br>
                                                10. For Managers' approval should be obtained from GS/CEO ( in his
                                                absence
                                                from Acting GS or
                                                Director ).<br>
                                                11. Driver's night Bata Rs.750/- day and overnight stay / meals /
                                                accommodation provided by the
                                                requestor.<br>
                                                12.Rates are based on round up hire ( Garage to Garage -
                                                Dehiwala).<br>
                                                13. Discount considered on outstation trips averages<b>200KM /day
                                                    minimum
                                                    2days.</b> <br>
                                                14.To ensure safety thought-out the journey, please wear the
                                                seat
                                                belt.<br>
                                            </span>
                                        </p>
                                        <button class="read-more-btn">Read More</button>


                                    </div>
                                    <div class="col-12">
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-8">
                                        <div class="form-check">

                                            <input class="form" type="checkbox" value="" id="invalidCheck" required>
                                            <label class="form-check-label" for="invalidCheck">

                                                <br> <strong> Accept all terms and conditions.</strong>
                                            </label>



                                        </div>
                                    </div>
                                    <div class="col-1">
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="card card-default">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" name="submit" class="btn btn-primary">Submit
                                            </button>
                                            <a class='btn btn-primary' href='index.php'>
                                                <i class=''>
                                                </i>
                                                Clear
                                            </a>
                                        </div>
                                    </div>

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


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    <!--Custom scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
    const readMoreBtn = document.querySelector(".read-more-btn");
    const text = document.querySelector(".text");

    readMoreBtn.addEventListener("click", (e) => {
        text.classList.toggle("show-more");
        if (readMoreBtn.innerText === "Read More") {
            readMoreBtn.innerText = "Read Less";
        } else {
            readMoreBtn.innerText = "Read More";
        }
    });
    </script>
    <script>
    function isInputNumber(evt) {

        var ch = String.fromCharCode(evt.which);

        if (!(/[a-z,A-Z,,, ,.]/.test(ch))) {
            evt.preventDefault();
        }

    }
    </script>




</body>

</html>