
<?php
		require '../config/dbconnect.php';			

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Title -->
	<title>Places | Explor-e-pedia</title>

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
			<p class="text-center">My Places</p>
		</div>
		<!-- background ends-->

		<!-- add place button -->
		<div class="content-box-lg">
			<div class="container">

				<div class="row no-gutters text-right general-search-bar-btn-wrapper">
					<a class="btn btn-general btn-purple" href="add-place" title="Add new place" role="button">Add new place</a>
				</div>

			</div>
		</div>
		<!-- add place button ends-->

		<!-- Places -->
		<section id="testimonial">
			<div class="content-box-lg">
				
				<div class="container">
					<div class="row no-gutters">

					<?php
							$qry="SELECT * FROM place where User_id='".$_SESSION['id']."' and isactive=1 and status=1";
							$rs=mysqli_query($conn,$qry);
							if(mysqli_num_rows($rs)>0)
								{

									
									while($row=mysqli_fetch_assoc($rs))
										{

											$qry1="SELECT * FROM country where id='".$row['country']."'";
											$rs1=mysqli_query($conn,$qry1);
											$row1=mysqli_fetch_assoc($rs1);

											$qry2="SELECT * FROM state where id='".$row['state']."'";
											$rs2=mysqli_query($conn,$qry2);
											$row2=mysqli_fetch_assoc($rs2);

											$qry3="SELECT * FROM city where id='".$row['city']."'";
											$rs3=mysqli_query($conn,$qry3);
											$row3=mysqli_fetch_assoc($rs3);

											// $qry4="SELECT * FROM category where id='".$_row['category']."'";
											// $rs4=mysqli_query($conn,$qry4);
											// $row4=mysqli_fetch_assoc($rs4);

						?>	
					
						<div class="col-md-6">
							<div id="testimonial-tile-1" class="author">
								<div class="row">

								
									<div class="col-md-3 col-sm-2 col-2 author-photo">
										<img src="<?php echo $row['photo'];?>" alt="client" class="rounded-circle">
									</div>
									
									<div class="col-md-9 col-sm-10 col-10">
										<div class="author-name-des">
											<a href="place-detail?id=<?php echo $row['id'];?>" style="text-decoration: none;"><p><?php echo $row['name'];?></p></a>
											<p><?php echo $row['address1'];?> , <?php echo $row['address2'];?> , <?php echo $row3['city_name'];?> , <?php echo $row2['state_name'];?> , <?php echo $row['zipcode'];?> , <?php echo $row1['country_name'];?>
											</p>

										</div>
									</div>
									
								</div>
								
								<p id="testimonial-text"><?php echo $row['description'];?></p>
							</div>
						</div>
					<?php
										}
								 }
							 else
								{
							 		echo "<p>no place added</p>";
								}
						?>
				
			</div>
		</section>
		<!-- Places ends -->
		
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