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
		<?php require '../partials/user_header.php' ?>
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

										$add = $row['address1'] . ' ' .$row['address2'] .' '. $row3['city_name'] .' '.$row2['state_name'] .' '. $row['zipcode'] .' '. $row1['country_name'];

									?>
									
									<a href="../ChatUser/users.php?id=<?php echo $place_id;?>" class="btn btn-general btn-purple" style="width: 150px;">Chat</a>
									<a href="http://maps.google.com/maps/dir/<?php echo 'your location' ?>/<?php echo $add ?>" class="btn btn-general btn-purple" style="width: 150px;">Navigate</a>
								
										<a type="button" role="button" data-target="#exampleModal<?php echo $row['id'] ?>" class="btn action-btn-general btn-purple commentmodal" id="reject-btn" data-toggle="modal" style="margin-top: 15px;width: 150px; margin-left: 75px;">COMMENTS AND RATINGS</a>
									

								</div>
							</div>

						</div>
					</div>

					<!-- Modal -->
										<div class="modal fade" id="exampleModal<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">

													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<img src="../images/notes-detail/close.png" alt="">
														</button>
													</div>

													<div class="modal-body">   


														<p class="note-name-reject-popup"> <?php echo $row['name'];?></p> 

														<form action="rating-process" id="ratingForm" method="POST">
															<input type="hidden" name="placeid" value="<?php echo $row['id'];?>">
														
															<div class="form-group">
																<label class="info-label" for="comment-questions">Comments</label>

																<textarea class="form-control input-box-style" id="comment" name="comment" placeholder="Write comments" rows="5" required></textarea>
															</div>

															<!-- <div class="star-rating star-5">
																
																	<input type="radio" id="star5" name="rate" value="5" />
																	
																	<input type="radio" id="star4" name="rate" value="4" />
																	
																	<input type="radio" id="star3" name="rate" value="3" />
																	
																	<input type="radio" id="star2" name="rate" value="2" />
																	
																	<input type="radio" id="star1" name="rate" value="1" />
															
															</div> -->
															<span class="starRating">
																<input id="rating5" type="radio" name="rating" value="5">
																<label for="rating5">5</label>
																<input id="rating4" type="radio" name="rating" value="4">
																<label for="rating4">4</label>
																<input id="rating3" type="radio" name="rating" value="3">
																<label for="rating3">3</label>
																<input id="rating2" type="radio" name="rating" value="2">
																<label for="rating2">2</label>
																<input id="rating1" type="radio" name="rating" value="1">
																<label for="rating1">1</label>
															</span>



															<div class="reject-popup-btns">
																<div class="row no-gutters">
																	<button class="btn btn-general btn-purple" id="reject-btn" type="submit" style="margin-top: 10px;">Submit</button>
																</div>
															</div>
														</form>                      

													</div>                    
												</div>
											</div>
										</div>
										<!-- Reject popup ends-->

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
								</div>
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="../js/bootstrap/bootstrap.min.js"></script>

	<!-- Custom JS -->
	<script src="../js/script.js"></script>

	<!-- Java-scripts -->

</body>

</html>