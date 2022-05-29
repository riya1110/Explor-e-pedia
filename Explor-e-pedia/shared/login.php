<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Title -->
	<title>Login | Explor-e-pedia</title>

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

	<!-- Login Box -->
	<section id="login">
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
					<div id="login-box">
					
						<p class="section-heading">Login</p>
						
						<p class="user-instruction">Enter your email address and password to login</p>
						
						<form action="login_process" method="POST">
						
							<div class="form-group">
								<label class="info-label" for="emailaddress">Email</label>
								
								<input type="email" class="form-control input-box-style" name="emailaddress" id="emailaddress" aria-describedby="emailaddress" placeholder="Enter your email" required>
							</div>
							
							<div class="form-group">
								<label class="info-label" for="password">Password</label>
								
								<div class="forgot-password-label-box">
									<label>
										<a class="forgot-password-label" href="forgot">Forgot Password?</a>
									</label>
								</div>
								
								<input type="password" class="form-control input-box-style" name="password" id="password" placeholder="Enter your password" autocomplete="on" required>
								
								<div class="eye"><img class="eye-img" src="../images/login/eye.png" alt="eye"></div>


								<!--password wrong
								<div class="incorrect-password-label">
									<p>The password that you've entered is incorrect</p>
								</div>-->
							</div>

							
							
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								
								<label id="remember-me-label" class="form-check-label" for="exampleCheck1">Remember Me</label>
							</div>
							
							<div class="form-btn">
								<button type="submit" class="btn btn-general btn-purple">Login</button>
							</div>
							
						</form>
						
						<div class="toggle-btw-login-signup">
							<p>Don't have an account? <span><a href="signup">Sign Up</a></span></p>
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!-- Login Box Ends -->

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