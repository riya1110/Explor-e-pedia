<?php

require "src/Exception.php";
require "src/PHPMailer.php";
require "src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['password-reset-token']) && $_POST['emailaddress'])
{
    include "../config/dbconnect.php";
     
    $emailId = $_POST['emailaddress'];
 
    $result = mysqli_query($conn,"SELECT * FROM user WHERE Email_id='" . $emailId . "'");

    $row= mysqli_fetch_array($result);
    $name = $row['FirstName'];
    $email = $row['Email_id'];
 
  if($row)
  {
     
     $token = md5($emailId).rand(10,9999);
 
     $expFormat = mktime(
     date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
     );
 
    $expDate = date("Y-m-d H:i:s",$expFormat);
 
    $update = mysqli_query($conn,"UPDATE user set  Password='" . $password . "', reset_link_token='" . $token . "' ,exp_date='" . $expDate . "' WHERE Email_id='" . $emailId . "'");
 
    $link = "<a href='http://localhost:8080/Explor-e-pedia/shared/reset-password.php?key=".$emailId."&token=".$token."'>Click To Reset password</a>";
 
    // require_once "PHPMailer.php";
 
    $mail = new PHPMailer();
 
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "explorepedia8@gmail.com";
    // GMAIL password
    $mail->Password = "riyanirali";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='explorepedia8@gmail.com';
    $mail->FromName='Explor-e-pedia';
    $mail->AddAddress($email,$name);
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$link.'';
    if($mail->Send())
    {
     ?>

                <!DOCTYPE html>
  <html lang="en">

  <head>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Favicon  -->
    <link rel="shortcut icon" href="../images/logo/favicon.ico">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">

    <style>
      .table td {
        padding: 0px !important;
      }

      p {
        margin-bottom: 0px !important;
      }

      button.purple-btn:hover,
      button.purple-btn:focus {
        box-shadow: none;
        color: #6255a5 !important;
        background-color: #fff !important;
        border: 1px solid #9bc70a;
      }

      @media (max-width: 678px) {
        .wrapper {
          margin: 100px 30px !important;
        }
      }

      @media (max-width: 479px) {

        .wrapper {
          padding: 25px !important;
        }

        .main-logo {
          height: 36px;
          margin-bottom: 30px !important;
        }
      }
    </style>

  </head>

  <body style="background: #000; font-family: 'Open Sans', sans-serif;">

    <div class="wrapper" style="background: white; margin: 100px auto; padding: 30px; table-layout: fixed;  max-width: 600px;">

      <table class="table table-borderless" style="margin-bottom: 0px !important;">
        <tbody>
          <tr>
            <td><img class="main-logo" src="../images/logo/dark-logo.png" alt="Notes MarketPlace Logo" style="margin-bottom: 40px;"></td>
          </tr>

          <tr>
            <td>
              <p style="font-size: 26px; font-weight: 600; color: #9bc70a; padding-bottom: 15px;">Email is successfully sent !!</p>
            </td>
          </tr>


          <tr>
            <td>
              <p style="font-size: 16px; font-weight: 400; color: #333333; padding-bottom: 30px;">Kindly check your email to reset your password</p>
            </td>
          </tr>

        </tbody>
      </table>

    </div>
             
    <!-- Java-scripts -->

    <!-- JQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap JS -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="../js/script.js"></script>

    <!-- Java-scripts -->
  </body>

  </html>


<?php
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }else{
    echo "Invalid Email Address. Go back";
  }
}
?>


