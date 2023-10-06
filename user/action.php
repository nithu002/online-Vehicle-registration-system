<?php
ob_start();
require 'db.php';
session_start();
?>



<?php
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $rname = $_POST['cat'];
  $email = $_POST['email'];
  $depart = $_POST['depart'];
  $hmail = $_POST['mail'];
  $budget = $_POST['budget'];
  $hod = $_POST['hod'];
  $destination = $_POST['destination'];
  $reason = $_POST['reason'];
  $rdate = $_POST['rdate'];
  $edate = $_POST['edate'];
  $stime = $_POST['stime'];
  $etime = $_POST['etime'];
  $vehicle = $_POST['vehicle'];
  $percount = $_POST['percount'];
  $pername = $_POST['pername'];
  $per = implode(",", $pername);
  $pending = $_POST['pending'];
  $referid = $_POST['referid'];
  $cur_time = $_POST['cur_time'];
   if ($hod == "No") {
    $_SESSION['session'] = "<div class='alert alert-danger' role='alert'>
            
    <div>
    <center><b><h4>
    <strong>Your Budget  Not Approved By HOD!</strong></h4><h5> So Your Request has be Rejected</h5> </b></center>
    </div>
  </div>";
  header('location:index.php');
  } else {


    $sql = "INSERT INTO vrp (up_name, email, depart,mail, budget, hod, destination, reason, rdate, edate, stime, etime, vehicle, percount, pername, progress,referid,cur_time) 
    VALUES ('$rname','$email','$depart','$hmail','$budget','$hod','$destination','$reason','$rdate','$edate','$stime','$etime','$vehicle','$percount','$per','$pending','$referid','$cur_time')";

    $result = mysqli_query($con, $sql);
    //$usertype = mysqli_fetch_array($result);
    //if ($_SESSION['hod'] == "Yes") {
    // $usertype = ['admin'];
    //if($hod == "Yes"){
    //$_SESSION['session'] = $hmail;
    //$_SESSION['up'] = $rname;
    // $_SESSION['start'] = $vehicle;



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
                          <p> Hi ;</p>
                          
                            <p>Your request <strong>ID (#{$referid}) </strong>. 
                            </p>                                    
                          <table>
                          <thead><th><strong>  Details<br><br>
                          </strong>
                          </th>
                          </thead>
                          <br>
                          <br>
                              
                                
                            1. Requested Vehicle :- {$vehicle}.<br><br>
                                 
                                  
                               
                            2. Budget Details  :- {$budget}.<br><br>
                                 
                                  
                               
                             
                               
                              3. Your  Department  :- {$depart}.<br><br>
                                 
                                  
                               
                               
                              4. The start date of the trip is {$rdate} to End date {$edate}.<br><br>
                                 
                                  
                               
                                
                                5. Approved by HOD on your journey:- {$hod}.<br><br>
                                 
                                  
                               
                                6. No of Travel Persons :- {$percount}.<br><br>
                                7. Name of persons :- {$per}.

                                     
                                      
                                   
                                   
                                <br><br>8. Your Request submitted on :- {$cur_time}.<br><br>
                                     
                                      
                                   
                              
                                    </p>   
                                <br><br>
                                <tr><td>
                                <p> 
                                   
                            
                              </div>
  
                                      </p>
                                      <br>
                                      Vehicle Reservation Portal System.
                              </td>
                             
                            </tbody>
                         </table>
                        </td> 
                      </tr>
                    
                  </td>
                </tr>
                
              
                    
                      
                      
                    </td>
                  </tr>
                  <tr>
                    
                     
                </tr>
                </table>
              </div>
              </div>
            
              </section>       
            </div>
          </td>
  
    </body>
  </html>";

   $hmail = $_POST['mail'];

    $email = $_POST['email'];

    $id = $_POST['id'];
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
    //this is admin email port
    $mail->addAddress("{$hmail}");
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
      // echo "Error occur";
    }











    if (isset($_POST['submit'])) {

      $_SESSION['id'] = "$referid";
      $_SESSION['depart'] = "$depart";
      $_SESSION['hod'] = "$hod";
      $_SESSION['budget'] = "$budget";
      $_SESSION['percount'] = "$percount";
      $_SESSION['rdate'] = "$rdate";
      $_SESSION['edate'] = "$edate";
      $_SESSION['vehicle'] = "$vehicle";
      $_SESSION['cur_time'] = "$cur_time";
      
      header('location:admin_email.php?admin=add');
    } else {
      echo "error";
    }

  }
}

?>