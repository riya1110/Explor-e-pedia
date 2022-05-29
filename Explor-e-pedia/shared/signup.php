<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta tags  -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Title -->
	<title>Signup | Explor-e-pedia</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="../images/logo/favicon.ico">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

	<!-- FontAwesome -->
	<link rel="stylesheet" href="../css/font-awesome/css/fontawesome.min.css">

	<!-- FontAwesome kit -->
	<script src="https://kit.fontawesome.com/4fa77e6d3c.js" crossorigin="anonymous"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Responsive CSS -->
	<link rel="stylesheet" href="../css/responsive.css">
</head>

<body>

	<!-- Background Image -->
	<img class="bg-img" src="../images/login/banner-with-overlay.jpg" alt=" Background Image">

	<!-- Signup Box -->
	<section id="signup">
		<div class="container">
		
			<div class="row text-center">
				<div class="col-md-12">
					<div class="main-logo">
						<a href="../index">
							<img class="img-fluid" src="../images/login/top-logo.png" alt="Explor-e-pedia Logo">
						</a>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div id="signup-box">
					
						<p class="section-heading" class="text-center">Create An Account</p>
						
						<p class="user-instruction">Enter your details to signup</p>
						
						<!--<div class="success-msg">
							<p><span><i class="fas fa-check-circle"></i></span> Your account has been successfully created.</p>
						</div>-->
						
						<form action="signup_process" method="POST">
							<div class="form-group">
								<label class="info-label" for="firstname">First Name *</label>
								
								<input type="text" class="form-control input-box-style" id="firstname"  name="firstname" aria-describedby="firstname" placeholder="Enter your first name" required>
							</div>
							
							<div class="form-group">
								<label class="info-label" for="lastname">Last Name *</label>
								
								<input type="text" class="form-control input-box-style" id="lastname"  name="lastname" aria-describedby="lastname" placeholder="Enter your last name" required>
							</div>
							
							<div class="form-group">
								<label class="info-label" for="emailaddress">Email *</label>
								<input type="email" class="form-control input-box-style" id="emailaddress" name="emailaddress" aria-describedby="emailaddress" placeholder="Enter your email address" required>
							</div>
							
							<div class="form-group">
								<label class="info-label" for="password">Password</label>
								
								<input type="password" class="form-control input-box-style" name="password" id="password" placeholder="Enter your password" required autocomplete="on">
								
								<div class="eye"><img class="eye-img" src="../images/login/eye.png" alt="eye"></div>
							</div>
							
							<div class="form-group">
								<label class="info-label" for="confirmpassword">Confirm Password</label>
								
								<input type="password" class="form-control input-box-style" id="confirmpassword"  name="confirmpassword" placeholder="Re-enter your password" required autocomplete="on" >
								
								<div class="eye"><img class="eye-img" src="../images/login/eye.png" alt="eye"></div>
							</div>

							<div class="form-group">
									
								<label class="info-label" for="">Select your Role</label>
										
										<div class="row no-gutters free-paid-radio-wrapper">

											<label class="purple-radio-input">
												<input type="radio" id="male" name="roleid" value="2">
												<span class="checkmark"></span>
												<label for="placeowner" class="info-label" style="margin-left: 10px;" >Place owner</label>
											</label>
											
											
											<label class="purple-radio-input">
												<input type="radio" id="male" name="roleid" value="3">
												<span class="checkmark"></span>
												<label for="user" class="info-label" style="margin-left: 10px;" >User</label>
											</label>
										</div>
							</div>
							
							<div class="form-btn">
								<button type="submit" class="btn btn-general btn-purple">Sign Up</button>
							</div>
							
						</form>
						
						<div class="toggle-btw-login-signup" class="text-center">
							<p>Already have an account? <span><a href="login">Login</a></span></p>
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!-- Signup Box Ends -->

	<!-- Java-scripts -->

	<!-- JQuery -->
	<script src="../js/jquery.js"></script>

	<!-- Bootstrap JS -->
	<script src="../js/bootstrap/bootstrap.min.js"></script>

	<!-- Custom JS -->
	<script src="../js/script.js"></script>

	<!-- Java-scripts ends-->
</body>

</html>