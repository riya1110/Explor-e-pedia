<?php
                session_start();
                require '../../config/dbconnect.php';
                $qry="SELECT * FROM user_profile where User_id='".$_SESSION['id']."'";
                $rs=mysqli_query($conn,$qry);
                $row=mysqli_fetch_assoc($rs);
?>

 <div class="only-white-nav extra-style-nav only-white-nav-with-mb">
        <header class="site-header">
                <div class="container">

                        <div class="header-wrapper">

                                <!-- Mobile Menu Open Button -->
                                <span id="mobile-nav-open-btn">&#9776;</span>

                                <div class="logo-wrapper">
                                        <a href="#" title="Site Logo">
                                                <img src="../../images/logo/dark-logo.png" alt="Logo">
                                        </a>
                                </div>

                                <div class="navigation-wrapper">
                                        <nav class="main-nav">

                                                <ul class="menu-navigation">

                                                        <li>
                                                                <a href="../html pages/manage-place">Places</a>
                                                        </li>

                                                        <li>
                                                                <div class="dropdown settings-btn-dropdown">
                                                                        <a role="button" id="settings-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Members</a>

                                                                        <div class="dropdown-menu" aria-labelledby="settings-dropdown-lable">
                                                                                <a class="dropdown-item" href="../html pages/manage-placeowner">Manage Place Owners</a>
                                                                                <a class="dropdown-item" href="../html pages/manage-user">Manage Users</a>
                                                                                
                                                                        </div>
                                                                </div>
                                                        </li>


                                                        

                                                        <li>
                                                                <div class="dropdown settings-btn-dropdown">
                                                                        <a role="button" id="settings-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>

                                                                        <div class="dropdown-menu" aria-labelledby="settings-dropdown-lable">
                                                                                <a class="dropdown-item" href="../html pages/manage-city">Manage City</a>
                                                                                <a class="dropdown-item" href="../html pages/manage-state">Manage State</a>
                                                                                <a class="dropdown-item" href="../html pages/manage-country">Manage Country</a>
                                                                                <a class="dropdown-item" href="../html pages/manage-category">Manage Category</a>
                                                                        </div>
                                                                </div>
                                                        </li>

                                                        <li class="logged-in-user-photo-li">
                                                                <div class="dropdown user-picture-dropdown">
                                                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <div class="logged-in-user-photo">
                                                                                        <?php if(isset($row['ProfilePicture']))

                                                                                        {
                                                                                        ?>

                                                                                                <img src="<?php echo $row['ProfilePicture'];?>" alt="User Photo" class="rounded-circle">
                                                                                        <?php
                                                                                        }
                                                                                        else
                                                                                                { 
                                                                                        ?>
                                                                                                <img src="../images/testimonial/profile.jpg" alt="User Photo" class="rounded-circle">
                                                                                        <?php
                                                                                                }

                                                                                        ?>
                                                                                </div>
                                                                        </a>

                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                                
                                                                                <a class="dropdown-item" href="../../shared/change-password">Change Password</a>

                                                                        </div>
                                                                </div>
                                                        </li>

                                                        <li>
                                                                <a class="btn btn-general btn-purple" href="../../shared/logout" title="Download" role="button">Logout</a>
                                                        </li>

                                                </ul>
                                        </nav>
                                </div>

                                <!-- Mobile Menu -->
                                <div id="mobile-nav">

                                        <img class="logo-in-mobile-menu" src="../../images/logo/dark-logo.png" alt="Logo">
                                        <!-- Mobile Menu Close Button -->
                                        <span id="mobile-nav-close-btn">&times;</span>

                                        <div id="mobile-nav-content">
                                                <ul class="menu-navigation">

                                                        <li>
                                                                <a href="../html pages/dashboard">Dashboard</a>
                                                        </li>

                                                        <li>
                                                                <a href="../html pages/manage-place">Places</a>
                                                        </li>

                                                        <li>
                                                                <div class="dropdown settings-btn-dropdown">
                                                                        <a role="button" id="settings-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Members</a>

                                                                        <div class="dropdown-menu" aria-labelledby="settings-dropdown-lable">
                                                                                <a class="dropdown-item" href="../html pages/manage-placeowner">Manage Place Owners</a>
                                                                                <a class="dropdown-item" href="../html pages/manage-user">Manage Users</a>
                                                                                
                                                                        </div>
                                                                </div>
                                                        </li>


                                                        

                                                        <li>
                                                                <div class="dropdown settings-btn-dropdown">
                                                                        <a role="button" id="settings-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>

                                                                        <div class="dropdown-menu" aria-labelledby="settings-dropdown-lable">
                                                                                <a class="dropdown-item" href="../html pages/manage-city">Manage City</a>
                                                                                <a class="dropdown-item" href="../html pages/manage-state">Manage State</a>
                                                                                <a class="dropdown-item" href="../html pages/manage-country">Manage Country</a>
                                                                                <a class="dropdown-item" href="../html pages/manage-category">Manage Category</a>
                                                                        </div>
                                                                </div>
                                                        </li>

                                                        <li class="logged-in-user-photo-li">
                                                                <div class="dropdown user-picture-dropdown">
                                                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <div class="logged-in-user-photo">
                                                                                        <?php if(isset($row['ProfilePicture']))

                                                                                        {
                                                                                        ?>

                                                                                                <img src="<?php echo $row['ProfilePicture'];?>" alt="User Photo" class="rounded-circle">
                                                                                        <?php
                                                                                        }
                                                                                        else
                                                                                                { 
                                                                                        ?>
                                                                                                <img src="../images/testimonial/profile.jpg" alt="User Photo" class="rounded-circle">
                                                                                        <?php
                                                                                                }

                                                                                        ?>
                                                                                </div>
                                                                        </a>

                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                                <a class="dropdown-item" href="../html pages/my-profile">Update Profile</a>
                                                                                <a class="dropdown-item" href="../../shared/change-password">Change Password</a>

                                                                        </div>
                                                                </div>
                                                        </li>

                                                        <li>
                                                                <a class="btn btn-general btn-purple" href="../../shared/logout" title="Download" role="button">Logout</a>
                                                        </li>

                                                </ul>
                                        </div>
                                </div>
                        </div>
                </div>
        </header>
</div>
        <!-- Header ends -->