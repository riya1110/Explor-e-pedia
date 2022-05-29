<?php 
		
	session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Title -->
	<title>Forgot Password | Explor-e-pedia</title>

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

	<!-- Forgot Password Box -->
	<section id="forgot">
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
					<div id="forgot-box">
					
						<p class="section-heading" class="text-center">Forgot Password?</p>
						
						<p class="user-instruction">Enter your email to reset your password</p>
						
						<form action="password-reset-token" method="POST">
							<div class="form-group">
								<label class="info-label" for="emailaddress">Email</label>
								
								<input type="email" class="form-control input-box-style" name="emailaddress" id="emailaddress" aria-describedby="emailaddress" placeholder="Enter your email" value="<?php echo $_SESSION['email'];?>" required>
							</div>
							
							<div class="form-btn">
								<button type="submit" name="password-reset-token" class="btn btn-general btn-purple">Submit</button>
							</div>
							
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!-- Forgot Password Box ends-->

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