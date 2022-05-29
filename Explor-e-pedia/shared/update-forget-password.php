<?php
		if(isset($_POST['password']) && $_POST['reset_link_token'] && $_POST['email'])
		{
			
			include "../config/dbconnect.php";
			
			$emailId = $_POST['email'];
			$token = $_POST['reset_link_token'];
			$password = $_POST['password'];
			
			$query = mysqli_query($conn,"SELECT * FROM `user` WHERE `reset_link_token`='".$token."' and `Email_id`='".$emailId."'");
			
			$row = mysqli_num_rows($query);


			
			if($row){

				if($_POST["password"] == $_POST["cpassword"]) {


				$EncryptPassword = md5($password);
				mysqli_query($conn,"UPDATE user set  Password='" . $EncryptPassword . "', reset_link_token='" . NULL . "' ,exp_date='" . NULL . "' WHERE Email_id='" . $emailId . "'");
				?>

				
				<!-- echo '<p>Congratulations! Your password has been updated successfully.</p>'; -->
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
              <p style="font-size: 26px; font-weight: 600; color: #9bc70a; padding-bottom: 15px;">Congratulations!</p>
            </td>
          </tr>


          <tr>
            <td>
              <p style="font-size: 16px; font-weight: 400; color: #333333; padding-bottom: 30px;"> Your password has been updated successfully.</p>
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
					}
			else{

				echo "<p>Something goes wrong. Please try again</p>";
				}
			}
?>