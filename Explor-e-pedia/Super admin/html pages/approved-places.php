<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Title-->
	<title>Approved Places | Explor-e-pedia</title>

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
   
    <section id="published-notes" class="admin-manage-page">

        <!-- Header -->
      <?php require_once '../../partials/superadmin_header.php'?>
        <!-- Header ends -->               

        <!-- Published notes table -->
        <div class="content-box-lg">

            <div class="container">
                <div class="row no-gutters">
                   
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-left box-heading-wrapper">
                        <p class="box-heading">Published Notes</p>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-12 text-left">
                        <div class="form-group">
                            <label for="" class="info-label">Seller</label>
                            
                            <select class="form-control input-box-style" id="exampleFormContlect1">
                                <option selected disabled>Select seller</option>
                                <option selected>Khyati</option>
                                <option>Rahul</option>
                                <option>Suman</option>
                                <option>Ravi</option>
                            </select>
                            
                            <div class="select-down-arrow"><img class="select-down-arrow-img" src="../images/Dashboard/down-arrow.png" alt="eye"></div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-9 col-12">

                        <div class="row no-gutters general-search-bar-btn-wrapper">
                            <div class="form-group has-search-bar">
                                <span class="search-symbol"><img src="../images/Dashboard/search-icon.png" alt=""></span>
                                
                                <input type="text" class="form-control input-box-style search-notes-bar" id="example" placeholder="Search">
                            </div>
    
                            <button class="btn btn-general btn-purple general-search-bar-btn">Search</button>
                        </div>

                    </div>
                    
                </div>
            </div>    
            
            <div class="container">

                <div class="published-notes-table general-table-responsive">
                    <div class="table-responsive-xl">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">sr no.</th>
                                    <th scope="col">Note title</th>
                                    <th scope="col">category</th>                                    
                                    <th scope="col">Sell type</th>
                                    <th scope="col">price</th>
                                    <th scope="col">Seller</th>
                                    <th scope="col"></th>
                                    <th scope="col">published date</th>
                                    <th scope="col">Approved By</th>  
                                    <th scope="col" class="text-center">Number of<br>downloads</th>
                                    <th scope="col" width="80px"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="purple-td">Data Science</td>
                                    <td>Science</td>                                    
                                    <td class="text-center">Paid</td>
                                    <td>$0</td>
                                    <td>Pritesh Panchal</td>
                                    <td class="text-center">
                                        <img class="eye-img-in-table" src="../images/Dashboard/eye.png" alt="edit">
                                    </td>
                                    <td>09-10-2020, 10:10</td>
                                    <td>Raj Sheth</td>
                                    <td class="purple-td text-center">10</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                    
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" href="#">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="purple-td">Accounts</td>
                                    <td>Commerce</td>                                    
                                    <td class="text-center">Free</td>
                                    <td>$22</td>
                                    <td>Rahil Shah</td>
                                    <td class="text-center">
                                        <img class="eye-img-in-table" src="../images/Dashboard/eye.png" alt="edit">
                                    </td>
                                    <td>10-10-2020, 12:30</td>
                                    <td>Kyati Patel</td>
                                    <td class="purple-td text-center">21</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                    
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" href="#">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="purple-td">Social Study</td>
                                    <td>Social</td>                                    
                                    <td class="text-center">Free</td>
                                    <td>$56</td>
                                    <td>Anish Patel</td>
                                    <td class="text-center">
                                        <img class="eye-img-in-table" src="../images/Dashboard/eye.png" alt="edit">
                                    </td>
                                    <td>11-10-2020, 01:00</td>
                                    <td>Raj Sheth</td>
                                    <td class="purple-td text-center">13</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                    
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" href="#">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="purple-td">AI</td>
                                    <td>IT</td>                                    
                                    <td class="text-center">Paid</td>
                                    <td>$0</td>
                                    <td>Vijay Vaishnav</td>
                                    <td class="text-center">
                                        <img class="eye-img-in-table" src="../images/Dashboard/eye.png" alt="edit">
                                    </td>
                                    <td>12-10-2020, 10:10</td>
                                    <td>Raj Sheth</td>
                                    <td class="purple-td text-center">34</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                    
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" href="#">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="purple-td">Lorem ipsum</td>
                                    <td>Lorem</td>                                    
                                    <td class="text-center">Free</td>
                                    <td>$90</td>
                                    <td>Mehul Patel</td>
                                    <td class="text-center">
                                        <img class="eye-img-in-table" src="../images/Dashboard/eye.png" alt="edit">
                                    </td>
                                    <td>13-10-2020, 11:25</td>
                                    <td>Niya Patel</td>
                                    <td class="purple-td text-center">9</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                    
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" href="#">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
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
        <!-- Published notes table ends-->

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
        <!-- pagination ends-->

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