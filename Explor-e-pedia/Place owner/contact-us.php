<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Title -->
	<title>Contact Us | Explor-e-pedia</title>

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

	<section id="contact-us">

		<!-- Header -->
		<?php require_once '../partials/placeowner_header.php'?>
		<!-- Header ends -->

		<!-- background -->
		<div class="small-height-bg">
			<p class="text-center">Contact Us</p>
		</div>
		<!-- background ends-->

		<!-- Get In touch box -->
		<div class="general-box">
			<div class="content-box-lg">
			
				<div class="container">
					<div class="row">
					
						<div class="col-md-12">
							<p class="section-heading">Get in Touch</p>
						</div>
						
						<div class="col-md-12">
							<p>Let us know how to get back to you</p>
						</div>
						
					</div>
				</div>

				<div class="container">
				
					<form action="contact_process" method="post">
						<div class="row">

							<div class="col-md-6 col-sm-6">
							
								<div class="form-group">
									<label class="info-label" for="fullname">Full Name *</label>
									
									<input type="text" class="form-control input-box-style" name="fullname" id="fullname" placeholder="Enter your full name">
								</div>

								<div class="form-group">
									<label class="info-label" for="emailaddress">Email Address *</label>
									
									<input type="email" class="form-control input-box-style" name="email_id" id="emailaddress" placeholder="Enter your email address">
								</div>

								<div class="form-group">
									<label class="info-label" for="subject">Subject *</label>
									
									<input type="text" class="form-control input-box-style" name="subject"  id="subject" placeholder="Enter your subject">
								</div>
								
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label class="info-label" for="comment-questions">Comments / Questions *</label>
									
									<textarea class="form-control input-box-style" rows="12" name="comments" id="comment-questions" placeholder="Comments..."></textarea>
								</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="form-btn">
									<button type="submit" class="btn btn-general btn-purple">Submit</button>
								</div>
							</div>

						</div>
					</form>
				</div>
				
			</div>
		</div>
		<!-- Get in touch box ends-->

		<!-- Footer  -->
		<?php require_once '../partials/footer.php'?>
		<!-- Footer Ends -->

	</section>

	<!-- Java-scripts -->

	<!-- JQuery -->
	<script src="../js/jquery.js"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<!-- Bootstrap JS -->
	<script src="../js/bootstrap/bootstrap.min.js"></script>

	<!-- Custom JS -->
	<script src="../js/script.js"></script>

	<!-- Java-scripts -->
</body>

</html>