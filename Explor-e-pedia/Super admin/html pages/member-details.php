<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Title-->
	<title>Member Details | Explor-e-pedia</title>

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
   
    <section id="member-details">

        <!-- Header -->
            <?php require_once '../../partials/superadmin_header.php'?>
        <!-- Header ends -->              

        <!-- member details box -->
        <div class="container">
            <div class="content-box-lg with-bottom-border">
               
                <p class="box-heading">Member Details</p>
                
                <div class="row no-gutters member-details-wrapper">

                    <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12">
                        <div class="member-photo">
                            <img src="../images/member-details/member.png" alt="">
                        </div>
                    </div>

                    <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                        <div class="row no-gutters">

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="member-personal-details-wrapper">
                                    <div class="row no-gutters">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="member-single-detail-left-wrapper">
                                                <p class="member-single-detail-left">First Name: </p>
                                                <p class="member-single-detail-left">Last Name:</p>
                                                <p class="member-single-detail-left">Email:</p>
                                                <p class="member-single-detail-left">DOB:</p>
                                                <p class="member-single-detail-left">Phone Number:</p>
                                                <p class="member-single-detail-left">College/University:</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="member-single-detail-right-wrapper">
                                                <p class="member-single-detail-right">Richard</p>
                                                <p class="member-single-detail-right">Brown</p>
                                                <p class="member-single-detail-right">richbrown77@gmail.com</p>
                                                <p class="member-single-detail-right">13-08-1990</p>
                                                <p class="member-single-detail-right">9856742033</p>
                                                <p class="member-single-detail-right">University of California</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="member-address-wrapper">
                                    <div class="row no-gutters">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="member-single-detail-left-wrapper">
                                                <p class="member-single-detail-left">Address 1:</p>
                                                <p class="member-single-detail-left">Address 2:</p>
                                                <p class="member-single-detail-left">City:</p>
                                                <p class="member-single-detail-left">State:</p>
                                                <p class="member-single-detail-left">Country:</p>
                                                <p class="member-single-detail-left">Zip Code:</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="member-single-detail-right-wrapper">
                                                <p class="member-single-detail-right">144-Diamond Height</p>
                                                <p class="member-single-detail-right">Star Colony</p>
                                                <p class="member-single-detail-right">New Youk</p>
                                                <p class="member-single-detail-right">New York State</p>
                                                <p class="member-single-detail-right">United State</p>
                                                <p class="member-single-detail-right">11004-05</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- member details box ends -->

        <!-- notes table -->
        <div class="content-box-lg">
           
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-left">
                        <p class="box-heading">Notes</p>
                    </div>                    
                </div>
            </div>    
            
            <div class="container">

                <div class="member-notes-table general-table-responsive">
                    <div class="table-responsive-xl">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">sr no.</th>
                                    <th scope="col">Note Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" class="text-center">Downloaded Notes</th>
                                    <th scope="col" class="text-center">Total Earnings</th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col">Published Date</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="purple-td">Softwere Development</td>
                                    <td>It</td>
                                    <td>Published</td>
                                    <td class="text-center">22</td>
                                    <td class="text-center">$177</td>
                                    <td>09-10-2020, 10:10</td>
                                    <td>09-10-2020, 10:10</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                          
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                              <a class="dropdown-item" href="#">Download Notes</a>
                                            </div>
                                        </div>                                            
                                </td>
                                </tr>

                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="purple-td">Computer Basic</td>
                                    <td>Computer</td>
                                    <td>Published</td>
                                    <td class="text-center">4</td>
                                    <td class="text-center">$125</td>
                                    <td>10-10-2020, 11:25</td>
                                    <td>10-10-2020, 11:25</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                          
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                              <a class="dropdown-item" href="#">Download Notes</a>
                                            </div>
                                        </div>                                            
                                </td>
                                </tr>

                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="purple-td">Human Body</td>
                                    <td>Science</td>
                                    <td>In Review</td>
                                    <td class="text-center">17</td>
                                    <td class="text-center">$978</td>
                                    <td>11-10-2020, 01:00</td>
                                    <td>11-10-2020, 01:00</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                          
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                              <a class="dropdown-item" href="#">Download Notes</a>
                                            </div>
                                        </div>                                            
                                </td>
                                </tr>

                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="purple-td">World War 2</td>
                                    <td>History</td>
                                    <td>Published</td>
                                    <td class="text-center">28</td>
                                    <td class="text-center">$15254</td>
                                    <td>12-10-2020, 10:10</td>
                                    <td>12-10-2020, 10:10</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                          
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                              <a class="dropdown-item" href="#">Download Notes</a>
                                            </div>
                                        </div>                                            
                                </td>
                                </tr>

                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="purple-td">Accounting</td>
                                    <td>Account</td>
                                    <td>Published</td>
                                    <td class="text-center">0</td>
                                    <td class="text-center">$69</td>
                                    <td>13-10-2020, 11:25</td>
                                    <td>NA</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                          
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                              <a class="dropdown-item" href="#">Download Notes</a>
                                            </div>
                                        </div>                                            
                                </td>
                                    
                                </tr>

                            </tbody>
                          </table>
                        
                    </div>
                </div>

            </div>

        </div>
        <!-- notes table ends-->

        <!-- pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="" aria-label="Previous">
                        <img src="../images/pagination/left-arrow.png" alt="">
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="" aria-label="Next">
                        <img style="color: white;" src="../images/pagination/right-arrow.png" alt="">
                    </a>
                </li>
            </ul>
        </nav>
        <!-- pagination ends -->

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