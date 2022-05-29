<?php
        require '../../config/dbconnect.php';          

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Title-->
	<title>Manage Places | Explor-e-pedia</title>

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
    <section id="manage-country" class="admin-manage-page">

        <!-- Header -->
        <?php require_once '../../partials/superadmin_header.php'?>
        <!-- Header ends -->            
             <?php  
      
        $per_page_record = 5;  // Number of entries to show in a page.   
        // Look for a GET variable page if not found default is 1.        
        if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {    
          $page=1;    
        }    
    
        $start_from = ($page-1) * $per_page_record;     
    
        $query = "SELECT * FROM place LIMIT $start_from, $per_page_record";     
        $rs = mysqli_query ($conn, $query);    
    ?>  
        <!-- manage-country table -->
        <div class="content-box-lg">

            <div class="container">
                <div class="row no-gutters">
                   
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-left box-heading-wrapper">
                        <p class="box-heading">Manage Places</p>
                    </div>


                    <?php 
                     
                            $row=mysqli_num_rows($rs);

                            $qryp="SELECT * FROM place where isactive=1";
                             $rsp=mysqli_query($conn,$qryp);
                            $rowp=mysqli_num_rows($rsp);

                            $qry1="SELECT * FROM user where isactive=1 and Role_id=2";
                             $rs1=mysqli_query($conn,$qry1);
                            $row1=mysqli_num_rows($rs1);

                            $qry2="SELECT * FROM user where isactive=1 and Role_id=3";
                             $rs2=mysqli_query($conn,$qry2);
                            $row2=mysqli_num_rows($rs2);

                    ?>   
                    <div class="container col-xl-12 col-lg-12 col-md-12 col-sm-12  col-12">
                        <div class="row no-gutters">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="notes-in-review-for-publish dashboard-single-box">
                                    <p class="dashboard-single-detail"><?php echo $rowp?></p>
                                    <p class="dashboard-single-detail-inst">Numbers of Places</p>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="new-notes-downloaded dashboard-single-box">
                                    <p class="dashboard-single-detail"><?php echo $row1?></p>
                                    <p class="dashboard-single-detail-inst">Numbers of Place Owners</p>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="new-registration dashboard-single-box">
                                    <p class="dashboard-single-detail"><?php echo $row2?></p>
                                    <p class="dashboard-single-detail-inst">Numbers of Users</p>
                                </div>
                            </div>
                        </div>
                    </div>           
            

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row no-gutters general-search-bar-btn-wrapper" style="margin-top: 10px;">
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

                <div class="manage-country-table general-table-responsive">
                    <div class="table-responsive-xl">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">sr no.</th>
                                    <th scope="col" class="text-center">PLACE NAME</th>
                                    <th scope="col" class="text-center">Place-Owner Name</th>
                                    <th scope="col" class="text-center">Category</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Date Added</th>
                                    <th scope="col" class="text-center">Active</th>
                                    <th scope="col" class="text-center">Action</th>
                                    <th scope="col" class="text-center"></th>



                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                    // $qry="SELECT * FROM place";
                                    // $rs=mysqli_query($conn,$qry);
                                    if(mysqli_num_rows($rs)>0)
                                        {   
                                            while($row=mysqli_fetch_assoc($rs))
                                                {
                                                    $qry1="SELECT * FROM user where id='".$row['User_id']."'";
                                                    $rs1=mysqli_query($conn,$qry1);
                                                    $rows = mysqli_fetch_assoc($rs1);
                                ?>  
                                <tr>
                                    <td class="text-center"><?php echo $row['id'];?></td>
                                    <td class="text-center"><?php echo $row['name'];?></td>
                                    <td class="text-center"><?php echo $rows['FirstName'];?></td>
                                    <td class="text-center"><?php echo $row['category'];?></td>
                                     <td class="text-center">
                                         <?php 
                                            if($row['status']){
                                                echo "Approved";
                                            }
                                            else {
                                                echo "Not Approved";
                                            }
                                        ?>
                                    </td>
                                    <td class="text-center"><?php echo $row['date_added'];?></td>
                                    <td class="text-center">
                                         <?php 
                                            if($row['isactive']){
                                                echo "Yes";
                                            }
                                            else {
                                                echo "No";
                                            }
                                        ?>
                                    </td>
                                    <td class="text-center">
                                        
                                        <a href="../Delete/place?id=<?php echo $row['id'];?>">
                                            <img class="delete-img-in-table" src="../images/Dashboard/delete.png" alt="delete">
                                        </a>
                                    </td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <img class="dots-in-table" src="../../images/Dashboard/dots.png" alt="edit">
                                            </a>
                                    
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="approve-place?id=<?php echo $row['id'];?>">Approve</a>
                                                <a class="dropdown-item" href="place-details?id=<?php echo $row['id'];?>">View More Details</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                 <?php
                                                }
                                        }
                                    else
                                        {
                                            echo "<p>no record found!</p>";
                                        }
                                ?>
                                
                            </tbody>
                       
                          </table>
                        
                    </div>
                </div>

            </div>

        </div>
        <!-- manage-country table ends -->

              <!-- pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
               <?php  
               $query = "SELECT COUNT(*) FROM place";     
               $rs_result = mysqli_query($conn, $query);     
               $row = mysqli_fetch_row($rs_result);     
               $total_records = $row[0];     

               echo "</br>";     
        // Number of pages required.   
               $total_pages = ceil($total_records / $per_page_record);     
               $pagLink = "";       

               if($page>=2){   
                echo "<li class='page-item'><a class='page-link' aria-label='Previous' href='manage-place.php?page=".($page-1)."'>  <img src='../images/pagination/left-arrow.png' alt='previous'> </a></li>";   
            }       

            for ($i=1; $i<=$total_pages; $i++) {   
              if ($i == $page) {   
                  $pagLink .= "<li class='page-item'><a class = 'active page-link' href='manage-place.php?page="  
                  .$i."'>".$i." </a></li>";   
              }               
              else  {   
                  $pagLink .= "<li class='page-item'><a class='page-link' href='manage-place.php?page=".$i."'>   
                  ".$i." </a></li>";     
              }   
          };     
          echo $pagLink;   

          if($page<$total_pages){   
            echo "<li class='page-item'><a class='page-link' aria-label='Next' href='manage-place.php?page=".($page+1)."'>  <img style='color: white;' src='../images/pagination/right-arrow.png' alt='next'> </a></li>";   
        }   

        ?>
            
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