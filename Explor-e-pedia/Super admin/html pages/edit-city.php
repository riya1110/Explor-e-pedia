<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Title-->
	<title>Edit City | Explor-e-pedia</title>

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
        <?php require_once '../../partials/superadmin_header.php'?>
        <!-- Header ends -->
        
        <!-- Add Type conatiner -->
        <div class="general-box">
            <div class="content-box-lg">
               
                <div class="container">
                    <div class="row">
                        <p class="section-heading">Edit City</p>
                    </div>
                </div>
            
                <div class="container">
                    <div class="row">
                       
                       <form action="Edit/edit-city-process" method="POST">
                            <?php
                                    $id=$_GET['id'];

                                    $qry="SELECT * FROM city where id=$id";
                                    $rs=mysqli_query($conn,$qry);
                                    $row=mysqli_fetch_assoc($rs)
                                           
                            ?>  
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <input type="hidden" name="id" value="<?php echo $id;?>">

                                    <div class="form-group">
                                        <label class="info-label" for="cityname">City Name *</label>
                                        
                                        <input type="text" class="form-control input-box-style" name="cityname" id="cityname"
                                            aria-describedby="countryname" placeholder="Enter country name" value="<?php echo $row['city_name'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label class="info-label" for="exampleFormControlSelect1">State Name *</label>
                                        
                                        <select class="form-control input-box-style" name="state_id" id="exampleFormControlSelect1">
                                            <?php 

                                             $qry1="SELECT * FROM state where isactive=1 and id='".$row['state_id']."'";
                                             $rs1=mysqli_query($conn,$qry1);

                                                if(mysqli_num_rows($rs1)>0)
                                                {
                                                    while($row1 = mysqli_fetch_assoc($rs1))
                                                    {
                                            ?>
                                            <option value="<?php echo $row1['id'];?>"><?php echo $row1['state_name']?></option>
                                            <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                        
                                        <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/user-profile/down-arrow.png" alt="down arrow"></div>
                                    </div>
                                    
                                    <div class="form-btn">
                                        <button type="submit" class="btn btn-general btn-purple">Submit</button>
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
       <?php require_once '../../partials/superadmin_footer.php'?>
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