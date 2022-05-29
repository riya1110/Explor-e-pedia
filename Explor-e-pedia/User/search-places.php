<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Title -->
	<title>Search Places | Explor-e-pedia</title>

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

	<!-- Bootstrap Select CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Responsive CSS -->
	<link rel="stylesheet" href="../css/responsive.css">

</head>

<body>

	<section id="search-notes">

		<!-- Header -->
		<?php require_once '../partials/user_header.php' ?>
		<!-- Header ends -->
		<?php  
      
        $per_page_record = 6;  // Number of entries to show in a page.   
        // Look for a GET variable page if not found default is 1.        
        if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {    
          $page=1;    
        }    
    
        $start_from = ($page-1) * $per_page_record;     
    
        $query = "SELECT * FROM place where isactive=1 LIMIT $start_from, $per_page_record";     
        $rs = mysqli_query ($conn, $query);   
      
    ?>  
		<!-- background -->
		<div class="small-height-bg">
			<p class="text-center">Search Places</p>
		</div>
		<!-- background ends-->

		<!-- Search and Filter Notes -->
		<div class="general-box">
			<div class="content-box-lg">

				<div class="container">
					<div class="row">
						<p class="box-heading">Search For nearby famous places</p>
					</div>
				</div>

				<div class="container">
					<div class="row">

						<div class="search-notes-input-box">

							<div class="form-group has-search-bar">
								<span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
								
								<input type="text" class="form-control input-box-style search-notes-bar" id="example" placeholder="Search here...">
							</div>

							

							<form method="GET" id="add_data" action="filter-places">
								<div class="row">

									<div class="col-md-2 col-sm-4 padding-right-0">
										<div class="form-group">

											<?php

											include_once 'common.php';
											$common = new Common();
											$countries = $common->getCountry($conn);
											?>


											<select name="country" class="form-control input-box-style" id="countryId" onchange="getStateByCountry();">

												<option value disabled selected>Select Country</option>


												<?php

												if ($countries->num_rows > 0 )
												{
													while ($country = $countries->fetch_object()) 
													{
														$countryName = $country->country_name; 

														?>
														<option value="<?php echo $country->id; ?>"><?php echo $countryName;?></option>
														<?php 
													}

												}
												?>

											</select>

											<div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
										</div>
									</div>

									<div class="col-md-2 col-sm-4 padding-right-0">
										<div class="form-group">
											<select class="form-control input-box-style" name="state" id="stateId" onchange="getCityByState();">
												<option value="" disabled selected>Select State</option>

											</select>

											<div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
										</div>
									</div>

									<div class="col-md-2 col-sm-4 padding-right-0">
										<div class="form-group">
											<select name="city" id="cityDiv" class="form-control input-box-style">
												<option value disabled selected>Select City</option>


											</select>

											<div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
										</div>
									</div>

									<div class="col-md-2 col-sm-4 padding-right-0">
										<div class="form-group">
											<select class="form-control input-box-style" name="category" id="categoryId">
												<option value disabled selected>Select Category</option>
												<?php 

												$qry5="SELECT * FROM category where isactive=1 ";
												$rs5=mysqli_query($conn,$qry5);

												if(mysqli_num_rows($rs5)>0)
												{
													while($row5 = mysqli_fetch_assoc($rs5))
													{
														?>
														<option value="<?php echo $row5['id'];?>"><?php echo $row5['category_name']?></option>
														<?php
													}
												}
												?>
											</select>

											<div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
										</div>
									</div>

									<div class="col-md-2 col-sm-4 padding-right-0">
										<div class="form-group">
											<select class="form-control input-box-style" id="exampleFormControlSelect1">
												<option value="" disabled selected>Select rating</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5 </option>
											</select>

											<div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
										</div> 
									</div>



									<!-- <div class="col-md-2 col-sm-4 padding-right-0">
										<div class="form-group">
											<select class="form-control input-box-style" id="exampleFormControlSelect1">
												<option value="" disabled selected>Select New & Upcoming</option>
												<option>New Places</option>
												<option>Upcoming places</option>
											</select>

											<div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="eye"></div>
										</div>
									</div> -->

									<div class="col-md-2 col-sm-4 padding-right-0">
										<div class="form-group" >
											<button type="submit" class="btn btn-general btn-purple" style="width: 150px;">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>

			<!-- Search and Filter Notes ends -->

			<!-- Notes display -->
			<div class="general-box searched-notes-box">
				<div class="content-box-lg">
<!-- 
					<div class="container">
						<div class="row">
							<p class="box-heading">Total <?php echo $rows?> Places</p>
						</div>
					</div> -->

					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<div id="show-data">
								</div>
							</div>
						</div>

						<div class="container">
							<div class="row">

								<?php
								//$qry="SELECT * FROM place where isactive=1";
								//$rs=mysqli_query($conn,$qry);
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

											$qry4="SELECT * FROM category where id='".$row['category']."'";
											$rs4=mysqli_query($conn,$qry4);
											$row4=mysqli_fetch_assoc($rs4);

										?>	

										<div class="col-lg-4 col-md-6 col-sm-6">
											<div class="note-details-box">
												<img src="<?php echo $row['photo'];?>" alt="">
												<div class="note-details">
													<a href="place-detail?id=<?php echo $row['id'];?>"><p class="note-name-title"><?php echo $row['name'];?></p></a>
													<p class="note-info-with-icon" style="height: 80px;"><span><img src="../images/Search/university.png" alt=""></span><?php echo $row['address1'];?> , <?php echo $row['address2'];?> , <?php echo $row3['city_name'];?> , <?php echo $row2['state_name'];?> , <?php echo $row['zipcode'];?> , <?php echo $row1['country_name'];?></p>

													<div class="notes-rating">
														<div class="col-md-7 col-sm-8 col-8">
															<div class="rate">
																<input type="radio" id="star5" name="rate" value="5" />
																<label for="star5" title="text">5 stars</label>
																<input type="radio" id="star4" name="rate" value="4" />
																<label for="star4" title="text">4 stars</label>
																<input type="radio" id="star3" name="rate" value="3" />
																<label for="star3" title="text">3 stars</label>
																<input type="radio" id="star2" name="rate" value="2" />
																<label for="star2" title="text">2 stars</label>
																<input type="radio" id="star1" name="rate" value="1" />
																<label for="star1" title="text">1 star</label>
															</div>
														</div>
														<div class="col-md-5 col-sm-4 col-4">
															<p class="review-count">100 reviews</p>
														</div>
													</div>



												</div>
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
						</div>
						<!-- Notes display ends -->

         <!-- pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
               <?php  
               $query = "SELECT COUNT(*) FROM place where isactive=1";     
               $rs_result = mysqli_query($conn, $query);     
               $row = mysqli_fetch_row($rs_result);     
               $total_records = $row[0];     

               echo "</br>";     
        // Number of pages required.   
               $total_pages = ceil($total_records / $per_page_record);     
               $pagLink = "";       

               if($page>=2){   
                echo "<li class='page-item'><a class='page-link' aria-label='Previous' href='search-places.php?page=".($page-1)."'>  <img src='../images/pagination/left-arrow.png' alt='previous'> </a></li>";   
            }       

            for ($i=1; $i<=$total_pages; $i++) {   
              if ($i == $page) {   
                  $pagLink .= "<li class='page-item'><a class = 'active page-link' href='search-places.php?page="  
                  .$i."'>".$i." </a></li>";   
              }               
              else  {   
                  $pagLink .= "<li class='page-item'><a class='page-link' href='search-places.php?page=".$i."'>   
                  ".$i." </a></li>";     
              }   
          };     
          echo $pagLink;   

          if($page<$total_pages){   
            echo "<li class='page-item'><a class='page-link' aria-label='Next' href='search-places.php?page=".($page+1)."'>  <img style='color: white;' src='../images/pagination/right-arrow.png' alt='next'> </a></li>";   
        }   

        ?>
            
            </ul>
        </nav>
        <!-- pagination ends -->

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

					<!-- Bootstrap Select JS -->
					<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

					<script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>

					<!-- Custom JS -->
					<script src="../js/script.js"></script>

					<!-- Java-scripts -->

					<script>

						function getStateByCountry() {
							var countryId = $("#countryId").val();
							$.post("ajax.php",{getStateByCountry:'getStateByCountry',countryId:countryId},function (response) {
								var data = response.split('^');
								$("#stateId").html(data[1]);
							});
						}
						function getCityByState() {
							var stateId = $("#stateId").val();
							$.post("ajax.php",{getCityByState:'getCityByState',stateId:stateId},function (response) {
								var data = response.split('^');
								$("#cityDiv").html(data[1]);
							});
						}


					</script>
				</body>

				</html>