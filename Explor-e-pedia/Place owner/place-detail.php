<?php
	
	$place_id=$_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Title -->
	<title>Place Details | Explor-e-pedia</title>

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

	<section id="note-detail">

		<!-- Header -->
		<?php require '../partials/placeowner_header.php' ?>
		<!-- Header ends -->

		<?php	
				$qry="SELECT * FROM place  where id=$place_id and isactive=1";
				$rs=mysqli_query($conn,$qry);
				$row=mysqli_fetch_assoc($rs);


				$qry1="SELECT * FROM country where id='".$row['country']."'";
				$rs1=mysqli_query($conn,$qry1);
				$row1=mysqli_fetch_assoc($rs1);

				$qry2="SELECT * FROM state where id='".$row['state']."'";
				$rs2=mysqli_query($conn,$qry2);
				$row2=mysqli_fetch_assoc($rs2);

				$qry3="SELECT * FROM city where id='".$row['city']."'";
				$rs3=mysqli_query($conn,$qry3);
				$row3=mysqli_fetch_assoc($rs3);

				$qry4="SELECT * FROM category where id='".$row['category']."'";
				$rs4=mysqli_query($conn,$qry4);
				$row4=mysqli_fetch_assoc($rs4);
		?>

		<!-- Notes details -->
		<div class="container">
			<div class="content-box-lg with-bottom-border">
			
				
				<div class="row no-gutters">
				
					<div class="col-lg-6 col-md-6 col-sm-12 col-12 note-details-left">
						<div class="row no-gutters">
						
							<div class="col-lg-6 col-md-6 col-sm-6 col-6">
								<img class="note-img-full img-fluid" src="<?php echo $row['photo'];?>" alt="photo">
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-6 col-6">
								<div class="note-desc-box">
									<p class="note-name"><?php echo $row['name'];?></p>
									
									<p class="note-type-genre"><?php echo $row4['category_name'];?></p>
									
									<p class="note-desc"><?php echo $row['description'];?></p>

									<?php 

										$add = $row['address1'] . ' ' .$row['address2'] .' '. $row['city'] .' '.$row['state'] .' '. $row['zipcode'] .' '. $row['country'];

									?>
									
									<a href="../ChatPlaceowner/users.php?id=<?php echo $place_id;?>" class="btn btn-general btn-purple" style="width: 150px;">Chat</a>
									<a href="http://maps.google.com/maps/dir/<?php echo 'your location' ?>/<?php echo $add ?>" class="btn btn-general btn-purple" style="width: 150px;">Navigate</a>
									<br><br>
									<a href="edit-place?id=<?php echo $place_id;?>" class="btn btn-general btn-purple" style="width: 150px; margin-left: 75px;">Edit Place</a>

								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-12 note-details-right">
						<div class="row no-gutters">
							<div class="col-lg-3 col-md-3 col-sm-3 col-3">
								<div class="note-details-left-part">
									<p class="note-single-detail-tag">Address1:</p>
									<p class="note-single-detail-tag">Address2:</p>
									<p class="note-single-detail-tag">City:</p>
									<p class="note-single-detail-tag">State:</p>
									<p class="note-single-detail-tag">ZipCode:</p>
									<p class="note-single-detail-tag">Country:</p>
									<p class="note-single-detail-tag">Approved Date:</p>
									<p class="note-single-detail-tag">Rating :</p>
									<p class="note-single-detail-tag">Add Images :</p>

								</div>
							</div>
							<div class="col-lg-9 col-md-9 col-sm-9 col-9">
								<div class="note-details-right-part">
									<p class="note-single-detail"><?php echo substr($row['address1'],0,100);?></p>
									<p class="note-single-detail"><?php echo substr($row['address2'],0,100);?></p>
									<p class="note-single-detail"><?php echo $row3['city_name'];?></p>
									<p class="note-single-detail"><?php echo $row2['state_name'];?></p>
									<p class="note-single-detail"><?php echo $row['zipcode'];?></p>
									<p class="note-single-detail"><?php echo $row1['country_name'];?></p>
									<p class="note-single-detail"><?php echo $row['date_added'];?></p>
									<p class="note-single-detail">
										<span>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
										</span>100 Reviews
									</p>
									<p class="note-single-detail">
										<form action="addimages" method="POST" enctype="multipart/form-data">
												<div class="custom-file">
													<input type="hidden" name="placeid" value="<?php echo $row['id'];?>">

													<input type="file" id="customFile" name="postimage[]" multiple>
													<label class="custom-file-label" for="customFile"></label>
												</div>
												<button type="submit" class="btn btn-general btn-purple" style="margin-top: 10px;width: 80px;">ADD</button>


										</form>
									</p>

							</div>
						</div>
					</div>

					
				</div>
			</div>
		</div>
		<!-- Notes details -->
			
		<!-- preview and reviews -->
		<div class="container">
			<div class="content-box-lg">
				<div class="row no-gutters">
				
					<div class="col-lg-5 col-md-5 col-sm-12 col-12">
						<div class="notes-preview-box">
							<p class="box-heading">Place Preview</p>
								<div class="slideshow-container">

 						<?php

 							$qryimg="SELECT * FROM placeimages where place_id='".$row['id']."'";
							$rsimg=mysqli_query($conn,$qryimg);
							$rowimg=mysqli_fetch_assoc($rsimg);

  						 $img = unserialize($rowimg['images']);  // it's amethod to convert string to array
                        for ($i=0; $i < count($img); $i++) { 
                        	?>                      
                        	  <div class="mySlides">
   							 	<div class="numbertext">1 / 3</div>
   							 			<img src="../uploadimages/<?php echo $img[$i]; ?>" width="100%">
   								 		
 								 </div>
                        	<?php  
                        }
                        
                        ?>

 							 <!-- Next and previous buttons -->
							  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
							  <a class="next" onclick="plusSlides(1)">&#10095;</a>
							</div>
							<br>

							<!-- The dots/circles -->
							<div style="text-align:center">
							  <span class="dot" onclick="currentSlide(1)"></span>
							  <span class="dot" onclick="currentSlide(2)"></span>
							  <span class="dot" onclick="currentSlide(3)"></span>
							</div>
						</div>
					</div>
						
					<div class="col-lg-7 col-md-7 col-sm-12 col-12">
						<div class="customer-review-box">
						
							<p class="box-heading">Customer Reviews</p>

							<div class="customer-review-tiles">

								<div class="customer-review-tile">
									<div class="row no-gutters">
									
										<div class="col-lg-2 col-md-3 col-sm-2 col-12">
											<img class="reviewer-photo" src="../images/testimonial/customer-1.png" alt="">
										</div>
										
										<div class="col-lg-10 col-md-9 col-sm-10 col-12">
										
											<p class="reviewer-name">Richard Brown</p>
											
											<p class="reviewer-rating">
												<span>
													<img src="../images/notes-detail/star.png" alt="star">
													<img src="../images/notes-detail/star.png" alt="star">
													<img src="../images/notes-detail/star.png" alt="star">
													<img src="../images/notes-detail/star.png" alt="star">
													<img src="../images/notes-detail/star-white.png" alt="star">
												</span>
											</p>
											
											<p class="reviewer-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat harum deleniti asperiores!</p>
										</div>
									</div>
								</div>

								<div class="customer-review-tile-border-bottom"></div>

								<div class="customer-review-tile">
									<div class="row no-gutters">
										<div class="col-lg-2 col-md-3 col-sm-2 col-12">
											<img class="reviewer-photo" src="../images/testimonial/customer-2.png" alt="">
										</div>
										<div class="col-lg-10 col-md-9 col-sm-10 col-12">
											<p class="reviewer-name">Alice Ortiaz</p>
											<p class="reviewer-rating">
												<span>
													<img src="../images/notes-detail/star.png" alt="star">
													<img src="../images/notes-detail/star.png" alt="star">
													<img src="../images/notes-detail/star.png" alt="star">
													<img src="../images/notes-detail/star.png" alt="star">
													<img src="../images/notes-detail/star-white.png" alt="star">
												</span>
											</p>
											<p class="reviewer-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat harum deleniti asperiores!</p>
										</div>
									</div>
								</div>

								<div class="customer-review-tile-border-bottom"></div>

								<div class="customer-review-tile">
									<div class="row no-gutters">
										<div class="col-lg-2 col-md-3 col-sm-2 col-12">
											<img class="reviewer-photo" src="../images/testimonial/customer-3.png" alt="">
										</div>
										<div class="col-lg-10 col-md-9 col-sm-10 col-12">
											<p class="reviewer-name">Sara Passmore</p>
											<p class="reviewer-rating">
												<span>
													<img src="../images/notes-detail/star.png" alt="star">
													<img src="../images/notes-detail/star.png" alt="star">
													<img src="../images/notes-detail/star.png" alt="star">
													<img src="../images/notes-detail/star.png" alt="star">
													<img src="../images/notes-detail/star-white.png" alt="star">
												</span>
											</p>
											<p class="reviewer-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat harum deleniti asperiores!</p>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- preview and reviews ends-->

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