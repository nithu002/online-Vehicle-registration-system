<?php
require 'db.php';
session_start();//unset($_SESSION['id']);
?>


<?php
if(isset($_GET['admin'])){
   $id=$_SESSION['id'];
   $depart= $_SESSION['depart'];
   $hod=$_SESSION['hod'] ;
   $budget=$_SESSION['budget'] ;
   $percount= $_SESSION['percount'] ;
   $rdate=$_SESSION['rdate'] ;
   $edate=$_SESSION['edate'] ;
   $vehicle=$_SESSION['vehicle'] ;
   $curtime=$_SESSION['cur_time'] ;
   $sql="SELECT * FROM admin ";
   $select_all_result = mysqli_query($con, $sql);
           while ($row = mysqli_fetch_assoc($select_all_result)) {
               
               $email = $row['email'];}
    
 ?>
<?php
 $html2 = "
<!doctype html>
<html>
<meta name='viewport' content='width=device-width, initial-scale=1.0' />
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title>Simple Transactional Email</title>
<link rel='stylesheet' href='mail.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback'>

<link rel='stylesheet' href='plugins/fontawesome-free/css/all.min.css'>
<!-- Theme style -->
<link rel='stylesheet' href='dist/css/adminlte.min.css'>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'
    integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
</head>

<body>
    <div class='container'>
        <section class='section'>
            <div class='col-xl-12'>
                <div class='col-xl-8 offset-xl-2 py-5'>
                    <!--Section heading-->
                   
                </div>
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
                                                        <p>Hi Sir,</p>
                                                        <p>A Person Submits A New Vehicle Request To Your System.
                                                        
                                                        </p>
                                                        <table>
                                                            <tbody>
                                                            
                                                                <h4>VRP details</h4>
                                                                
                                                                 <p>    1.  Requestor id :-<b> #{$id}.</b><br><br>
                                                                 
                                                                    2. Requested Vehicle :- {$vehicle}.<br><br>
                                                                
                                                                    3. Budget Details  :- {$budget}.<br><br>
                                                                  
                                                                    4. Department  :- {$depart}.<br><br>
                                                             
                                                                    5. The start date of the trip is {$rdate} to End date {$edate}.<br><br>
                                                                 
                                                                    6. Approved by HOD  :- {$hod}.<br><br>
                                                                  
                                                                    7. No of Travel Persons :- {$percount}.<br><br>
                                                                
                                                                    8. That Request submitted on :- {$curtime}.<br><br>
                                                               
                                                                    </p>
                                                                
                                                                <br><br>
                                                                
                                                                        <p>
                                                                        <b>You need to approve this Vehicle Request to confirm the fleet arrangements.</b><br>
                                                                          Plz  Check the details :   <a class='btn btn-warning'
                                                                                href='admin/index.php'>
                                                                                <i class='fas fa--alt'>
                                                                                </i>
                                                                                Click here
                                                                            </a>
                            </div>
                            </p>
                        </td>
                    </tr>
                    </tbody>
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
                    </table>
                </div>
                <!-- END FOOTER -->
            </div>
            </td>
            </tr>
            </table>
        </section>
    </div>
</body>

</html>
";

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
$mail->Subject = "Vehicle Reservation Portal System";
$mail->Body = $html2;
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => false
)
);
if ($mail->send()) {
    $_SESSION['i_d']= "<b>#$id</b>";
    header('Location:success.php');
} else {
//echo "Error occur";
}

}
?>