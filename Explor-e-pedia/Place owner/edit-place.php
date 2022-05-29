<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Title-->
	<title>Edit Place | Explor-e-pedia</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="../images/logo/favicon.ico">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

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
   
    <section id="add-type" class="admin-add-page">

        <!-- Header -->
        <?php require '../partials/placeowner_header.php' ?>
        <!-- Header ends -->
        
        <!-- Add Type conatiner -->
        <div class="general-box">
            <div class="content-box-lg">
               
                <div class="container">
                    <div class="row">
                        <p class="section-heading">Edit Place</p>
                    </div>
                </div>
            
                <div class="container">
                    <div class="row">
                    	<?php
                                    $id=$_GET['id'];

                                    $qry="SELECT * FROM place where id=$id";
                                    $rs=mysqli_query($conn,$qry);
                                    $row=mysqli_fetch_assoc($rs);
                                           
                            ?>
                       
                       <form action="edit-place-process" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $id;?>">
                            <div class="container">
					<div class="row">
					
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="name">Place Name*</label>
										
										<input type="text" class="form-control input-box-style" name="name" id="name" aria-describedby="name" placeholder="Enter your Place name" value="<?php echo $row['name'];?>">
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="category">Category *</label>
										
										<select class="form-control input-box-style" name="category" id="exampleFormControlSelect1" value="<?php echo $row['category'];?>">

										<option value disabled selected>Select Category</option>
											<?php 

                                             $qry1="SELECT * FROM category where isactive=1 ";
                                             $rs1=mysqli_query($conn,$qry1);

                                                if(mysqli_num_rows($rs1)>0)
                                                {
                                                    while($row1 = mysqli_fetch_assoc($rs1))
                                                    {
                                            ?>
                                             <option value="<?php echo $row1['id'];?>"<?php if($row['category']==$row1['id']){ echo "selected";}?>><?php echo $row1['category_name']?></option>
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
										
										<div id="uploadYourPhoto">
											
											<input type="file" class="form-control input-box-style" name="photo" id="profile" aria-describedby="profile" placeholder="Enter your picture">
											
										</div>
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="famous">What is popular at your place? </label>
										
										<input type="text" class="form-control input-box-style" name="famous[]" id="famous" aria-describedby="famous" placeholder="What's popular? " value="<?php
                      					  $famous = unserialize($row['famous']); 
                         					 for ($i=0; $i < count($famous); $i++) { 
                        				                     
                           					echo $famous[$i]; 
                    
                          					}
                          
                       					 ?>">
									</div>
								</div>

								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label class="info-label" for="comment-questions">Description *</label>
										
										<textarea class="form-control input-box-style" name="description" id="note-desc-textarea" placeholder="Enter note description"><?php echo $row['description'];?>"</textarea>
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
										
										<input type="text" class="form-control input-box-style" name="addressline1" id="addressline1" aria-describedby="addressline1" placeholder="Enter your address" value="<?php echo $row['address1'];?>">
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="addressline2">Address Line 2</label>
										
										<input type="text" class="form-control input-box-style" name="addressline2" id="addressline2" aria-describedby="addressline2" placeholder="Enter your address" value="<?php echo $row['address2'];?>">
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="city">City *</label>
										
										<select class="form-control input-box-style" name="city" id="exampleFormControlSelect1" value="<?php echo $row['city'];?>">

										<option value disabled selected>Select City</option>
											<?php 

                                             $qry2="SELECT * FROM city where isactive=1 ";
                                             $rs2=mysqli_query($conn,$qry2);

                                                if(mysqli_num_rows($rs2)>0)
                                                {
                                                    while($row2 = mysqli_fetch_assoc($rs2))
                                                    {
                                            ?>
                                             <option value="<?php echo $row2['id'];?>"<?php if($row['city']==$row2['id']){ echo "selected";}?>><?php echo $row2['city_name']?></option>
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
										
										<select class="form-control input-box-style" name="state" id="exampleFormControlSelect1" value="<?php echo $row['famous'];?>">

										<option value disabled selected>Select State</option>
											<?php 

                                             $qry3="SELECT * FROM state where isactive=1 ";
                                             $rs3=mysqli_query($conn,$qry3);

                                                if(mysqli_num_rows($rs3)>0)
                                                {
                                                    while($row3 = mysqli_fetch_assoc($rs3))
                                                    {
                                            ?>
                                             <option value="<?php echo $row3['id'];?>"<?php if($row['state']==$row3['id']){ echo "selected";}?>><?php echo $row3['state_name']?></option>
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
										
										<input type="text" class="form-control input-box-style" name="zipcode" id="zipcode" aria-describedby="zipcode" placeholder="Enter your zipcode" value="<?php echo $row['zipcode'];?>">
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label class="info-label" for="exampleFormControlSelect1">Country *</label>
										
										<select class="form-control input-box-style" name="country" id="exampleFormControlSelect1">
											<option value="" disabled selected hidden>Select your country</option>
											
											<?php 

                                             $qry4="SELECT * FROM country where isactive=1 ";
                                             $rs4=mysqli_query($conn,$qry4);

                                                if(mysqli_num_rows($rs4)>0)
                                                {
                                                    while($row4 = mysqli_fetch_assoc($rs4))
                                                    {
                                            ?>
                                             <option value="<?php echo $row4['id'];?>"<?php if($row['country']==$row4['id']){ echo "selected";}?>><?php echo $row4['country_name']?></option>
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
											<button type="submit" class="btn btn-general btn-purple save-note-btn">SUBMIT</button>
										</div>
										
									</div>
								</div>

					</div>
				</div>
				
			</div>
		</div>
                            
         </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Type container ends --> 

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