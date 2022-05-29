<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Title -->
	<title>Change Password | Explor-e-pedia</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="../images/logo/favicon.ico">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Responsive CSS -->
	<link rel="stylesheet" href="../css/responsive.css">
</head>

<body>

	<!-- Background Image -->
	<img class="bg-img" src="../images/login/banner-with-overlay.jpg" alt="Background Image">

	<!-- Change Password Box-->
	<section id="change">
		<div class="container">
		
			<div class="row text-center">
				<div class="col-md-12">
					<div class="main-logo">
						<a href="index.html">
							<img class="img-fluid" src="../images/login/top-logo.png" alt="Explor-e-pedia Logo">
						</a>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div id="change-box">
					
						<p class="section-heading" class="text-center">Change Password</p>
						
						<p class="user-instruction">Enter your email to reset your password</p>
						
						<form action="change-password-process" method="POST">
						
							<div class="form-group">
								<label class="info-label" for="oldpassword">Old Password</label>
								
								<input type="password" class="form-control input-box-style" name="oldpassword" id="oldpassword" placeholder="Enter your old password" required autocomplete="on">
								
								<div class="eye"><img class="eye-img" src="../images/login/eye.png" alt="eye"></div>
							</div>
							
							<div class="form-group">
								<label class="info-label" for="newpassword">New Password</label>
								
								<input type="password" class="form-control input-box-style" name="newpassword" id="newpassword" placeholder="Enter your new password" required autocomplete="on">
								
								<div class="eye"><img class="eye-img" src="../images/login/eye.png" alt="eye"></div>
							</div>
							
							<div class="form-group">
								<label class="info-label" for="confirmpassword">Confirm Password</label>
								
								<input type="password" class="form-control input-box-style" name="confirmpassword" id="confirmpassword" placeholder="Confirm your new password" required autocomplete="on">
								
								<div class="eye"><img class="eye-img" src="../images/login/eye.png" alt="eye"></div>
							</div>
							
							<div class="form-btn">
								<button type="submit" class="btn btn-general btn-purple">Submit</button>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Change Password Box ends-->

	<!-- Java-scripts -->

	<!-- JQuery -->
	<script src="../js/jquery.js"></script>

	<!-- Bootstrap JS -->
	<script src="../js/bootstrap/bootstrap.min.js"></script>

	<!-- Custom JS -->
	<script src="../js/script.js"></script>

	<!-- Java-scripts ends -->
</body>

</html>