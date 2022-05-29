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
        <?php require_once '../../partials/superadmin_header.php'?>
        <!-- Header ends -->
        
        <?php   
                $qry="SELECT * FROM place where id=$place_id and isactive=1";
                $rs=mysqli_query($conn,$qry);
                $row=mysqli_fetch_assoc($rs);
        ?>

        <!-- Notes details -->
        <div class="container">
            <div class="content-box-lg with-bottom-border">
            
                
                <div class="row no-gutters">
                
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 note-details-left">
                        <div class="row no-gutters">
                        
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <img class="note-img-full img-fluid" src="../<?php echo $row['photo'];?>" alt="photo">
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="note-desc-box">
                                    <p class="note-name"><?php echo $row['name'];?></p>
                                    
                                    <p class="note-type-genre"><?php echo $row['category'];?></p>
                                    
                                    <p class="note-desc"><?php echo $row['description'];?></p>

                                    <?php 

                                        $add = $row['address1'] . ' ' .$row['address2'] .' '. $row['city'] .' '.$row['state'] .' '. $row['zipcode'] .' '. $row['country'];

                                    ?>
                                    
                                    <a href="#" class="btn btn-general btn-purple" style="width: 150px;">Chat</a>
                                    <a href="http://maps.google.com/maps/dir/<?php echo 'your location' ?>/<?php echo $add ?>" class="btn btn-general btn-purple" style="width: 150px;">Navigate</a>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 note-details-right">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
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
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="note-details-right-part">
                                    <p class="note-single-detail"><?php echo $row['address1'];?></p>
                                    <p class="note-single-detail"><?php echo $row['address2'];?></p>
                                    <p class="note-single-detail"><?php echo $row['city'];?></p>
                                    <p class="note-single-detail"><?php echo $row['state'];?></p>
                                    <p class="note-single-detail"><?php echo $row['zipcode'];?></p>
                                    <p class="note-single-detail"><?php echo $row['country'];?></p>
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
                            
                            <iframe src="../images/notes-detail/sample.pdf"></iframe>
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