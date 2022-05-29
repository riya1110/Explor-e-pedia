<!DOCTYPE html>
<html lang="en">

<head>
	
	<!-- Meta Tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Title -->
	<title>Add Place | Explor-e-pedia</title>

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
CSS</head>

<body>

	<section id="add-note">

		<!-- header -->
		<?php require_once '../partials/placeowner_header.php' ?>
		

		<!-- background -->
		<div class="small-height-bg">
			<p class="text-center">Add Place</p>
		</div>
		<!-- background ends-->

		<!-- Basic place details conatiner -->
		<div class="general-box">
			<div class="content-box-lg">
			
				<div class="container">
					<div class="row">
						<p class="section-heading">Basic Place Details</p>
					</div>
				</div>

				<form action="add-place-process" method="POST" enctype="multipart/form-data">
				<div class="container">
					<div class="row">
					
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="name">Place Name*</label>
										
										<input type="text" class="form-control input-box-style" name="name" id="name" aria-describedby="name" placeholder="Enter your Place name" required>
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="exampleFormControlSelect1">Category *</label>
										
										<select class="form-control input-box-style" name="category" id="exampleFormControlSelect1">

										<option value disabled selected>Select Category</option>
											<?php 

                                             $qry="SELECT * FROM category where isactive=1 ";
                                             $rs=mysqli_query($conn,$qry);

                                                if(mysqli_num_rows($rs)>0)
                                                {
                                                    while($row = mysqli_fetch_assoc($rs))
                                                    {
                                            ?>
                                             <option value="<?php echo $row['id']?>"><?php echo $row['category_name']?></option>
											 <?php
                                                    }
                                                }
                                            ?>
										
										</select>
										
										<div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="upload">Upload Photo *</label>
										
										<div id="uploadYourPhoto" >
											
											<input type="file" class="form-control input-box-style" name="photo" id="profile" aria-describedby="profile" placeholder="Enter your picture">
											
										</div>
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="famous">What is popular at your place? </label>
										
										<input type="text" class="form-control input-box-style" name="famous[]" id="famous" aria-describedby="famous" placeholder="What's popular? " required>
									</div>
								</div>

								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label class="info-label" for="comment-questions">Description *</label>
										
										<textarea class="form-control input-box-style" name="description" id="note-desc-textarea" placeholder="Enter note description"></textarea>
									</div>
								</div>

					</div>
				</div>
				
			</div>
		</div>
		<!-- Basic place details container ends-->

		<!-- Course details conatiner -->
		<div class="general-box">
			<div class="content-box-lg">
			
				<div class="container">
					<div class="row">
						<p class="section-heading">Address Details</p>
					</div>
				</div>

				<div class="container">
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
										
										<select class="form-control input-box-style" name="city" id="exampleFormControlSelect1">

										<option value disabled selected>Select City</option>
											<?php 

                                             $qry1="SELECT * FROM city where isactive=1 ";
                                             $rs1=mysqli_query($conn,$qry1);

                                                if(mysqli_num_rows($rs1)>0)
                                                {
                                                    while($row1 = mysqli_fetch_assoc($rs1))
                                                    {
                                            ?>
                                             <option value="<?php echo $row1['id'];?>"><?php echo $row1['city_name']?></option>
											 <?php
                                                    }
                                                }
                                            ?>
										
										</select>
										<div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="state">State *</label>
										
										<select class="form-control input-box-style" name="state" id="exampleFormControlSelect1">

										<option value disabled selected>Select State</option>
											<?php 

                                             $qry2="SELECT * FROM state where isactive=1 ";
                                             $rs2=mysqli_query($conn,$qry2);

                                                if(mysqli_num_rows($rs2)>0)
                                                {
                                                    while($row2 = mysqli_fetch_assoc($rs2))
                                                    {
                                            ?>
                                             <option value="<?php echo $row2['id'];?>"><?php echo $row2['state_name']?></option>
											 <?php
                                                    }
                                                }
                                            ?>
										
										</select>
										<div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
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
											
											<?php 

                                             $qry3="SELECT * FROM country where isactive=1 ";
                                             $rs3=mysqli_query($conn,$qry3);

                                                if(mysqli_num_rows($rs3)>0)
                                                {
                                                    while($row3 = mysqli_fetch_assoc($rs3))
                                                    {
                                            ?>
                                             <option value="<?php echo $row3['id'];?>"><?php echo $row3['country_name']?></option>
											 <?php
                                                    }
                                                }
                                            ?>
										</select>
										
										<div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
									</div>
								</div>

					</div>
				</div>
				
			</div>
		</div>
		<!-- Course details container ends-->

		<!-- Selling Information conatiner -->
		<div class="general-box">
			<div class="content-box-lg">

				<div class="container">
					<div class="row">
					
								<div class="col-md-12 col-sm-12">
									<div class="row no-gutters">
									
										<div class="form-btn">
											<button type="submit" class="btn btn-general btn-purple save-note-btn">Add Place</button>
										</div>
										
									</div>
								</div>

					</div>
				</div>
				
			</div>
		</div>
		</form>
		<!-- Selling Information container ends-->

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