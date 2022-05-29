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
	<title><?php echo $_SESSION['name']; ?> | Explor-e-pedia</title>

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

	<section id="user-profile">
	
		<!-- Header -->
		<?php require_once '../partials/user_header.php' ?>
		<!-- Header ends -->

		<!-- background -->
		<div class="small-height-bg">
			<p class="text-center">Welcome user <?php echo $_SESSION['name']; ?></p>
		</div>
		<!-- background -->

		<!-- Basic Profile details conatiner -->
		<div class="general-box">
			<div class="content-box-lg">
				
				<form action="user-profile-process" method="POST" enctype="multipart/form-data">

				<div class="container">
					<div class="row">
						<p class="section-heading">Basic Profile Details</p>
					</div>
				</div>

				
				<div class="container">
					<div class="row">
						
							<div class="row">

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="firstname">First Name *</label>
										
										<input type="text" class="form-control input-box-style" id="firstname" aria-describedby="firstname" placeholder="Enter your first name" value="<?php echo $_SESSION['name']; ?>">
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="lastname">Last Name *</label>
										
										<input type="text" class="form-control input-box-style" id="lastname" aria-describedby="lastname" placeholder="Enter your last name" value="<?php echo $_SESSION['lname']; ?>">
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="email">Email *</label>
										
										<input type="email" class="form-control input-box-style" id="email" aria-describedby="email" placeholder="Enter your email address" value="<?php echo $_SESSION['email']; ?>">
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="dob">Date Of Birth</label>
										
										<input type="date" class="form-control input-box-style" name="dob" id="dob" aria-describedby="dob" placeholder="Enter your date of birth">
										
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="exampleFormControlSelect1">Gender</label>
										
										<select class="form-control input-box-style" name="gender" id="exampleFormControlSelect1">
											<option selected disabled>Select your gender</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
										
										<div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
									</div>
								</div>

								<div class="col-md-2 col-sm-2">
									<div class="form-group">
										<label class="info-label" for="exampleFormControlSelect1">Code</label>
										
										<select class="form-control input-box-style" name="code" id="exampleFormControlSelect1">
											<option selected disabled>Select Country code</option>
											<option value="+91">+91</option>
											<option value="+92">+92</option>
											<option value="+53">+53</option>
											<option value="+11">+11</option>
											<option value="+43">+43</option>
											<option value="+83">+83</option>
										</select>
										
										<div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
									</div>
								</div>

								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<label class="info-label" for="phonenumber">Phone Number</label>
										
										<input type="text" class="form-control input-box-style" name="phonenumber" id="phonenumber" aria-describedby="phonenumber" placeholder="Enter your phone number">
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="profilepicture">Profile Picture</label>
										
										<div id="uploadProfilePicture" class="form-control input-box-style upload-input-box">

											<input type="file" class="form-control input-box-style" name="profile" id="profile" aria-describedby="profile" placeholder="Enter your profile picture">

											<!-- <img src="../images/user-profile/upload.png" alt="Upload Profile Picture"> -->
											<p>Upload a picture</p>
										</div>
									</div>
								</div>
							</div>

					</div>
				</div>

				<div class="container">
					<div class="row">
						<p class="section-heading">Address Details</p>
					</div>
				</div>

				<div class="container">
					<div class="row">
						
							<div class="row">

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="addressline1">Address Line 1 *</label>
										
										<input type="text" class="form-control input-box-style" name="addressline1" id="addressline1" aria-describedby="addressline1" placeholder="Enter your address">
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="addressline2">Address Line 2</label>
										
										<input type="text" class="form-control input-box-style" name="addressline2" id="addressline2" aria-describedby="addressline2" placeholder="Enter your address">
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="city">City *</label>
										
										<input type="text" class="form-control input-box-style" name="city" id="city" aria-describedby="city" placeholder="Enter your city">
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="state">State *</label>
										
										<input type="text" class="form-control input-box-style" name="state" id="state" aria-describedby="state" placeholder="Enter your state">
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="zipcode">ZipCode *</label>
										
										<input type="text" class="form-control input-box-style" name="zipcode" id="zipcode" aria-describedby="zipcode" placeholder="Enter your zipcode">
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="exampleFormControlSelect1">Country *</label>
										
										<select class="form-control input-box-style" name="country" id="exampleFormControlSelect1">
											<option value="" disabled selected hidden>Select your country</option>
											<option>India</option>
											<option>America</option>
											<option>Canada</option>
											<option>China</option>
											<option>Peru</option>
											<option>Polland</option>
										</select>
										
										<div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
									</div>
								</div>
							</div>

					</div>
				</div>
				
		

				<div class="container">
					<div class="row">
					
							<div class="row">

								<div class="col-md-12 col-sm-12">
									<div class="form-btn">
										<button type="submit" class="btn btn-general btn-purple">Submit</button>
									</div>
								</div>
							</div>

					</div>
				</div>
				
				</form>
			</div>
		</div>
		<!-- Information container ends-->

		<!-- Footer  -->
		<?php require_once '../partials/footer.php' ?>
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