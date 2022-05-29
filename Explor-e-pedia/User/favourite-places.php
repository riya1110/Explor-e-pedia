<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Title -->
	<title>My Rejected Notes | Notes-MarketPlace</title>

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

	<section id="my-rejected-notes">

		<!-- Header -->
		<?php require_once '../partials/user_header.php'?>
		<!-- Header ends -->

		<!-- my rejected notes table -->
		<div class="content-box-lg">

			<div class="container">
				<div class="row no-gutters">
				
					<div class="col-lg-6 col-md-6 col-sm-12 col-12 text-left box-heading-wrapper">
						<p class="my-downloads-heading">My Rejected Notes</p>
					</div>
					
					<div class="col-lg-6 col-md-6 col-sm-12 col-12">

						<div class="row no-gutters text-right general-search-bar-btn-wrapper">
							<div class="form-group has-search-bar">
								<span class="search-symbol">
									<img src="../images/Dashboard/search-icon.png" alt="">
								</span>
								
								<input type="text" class="form-control input-box-style search-notes-bar" id="example" placeholder="Search">
							</div>

							<button class="btn btn-general btn-purple general-search-bar-btn">Search</button>
						</div>

					</div>
					
				</div>
			</div>

			<div class="container">

				<div class="my-downloads-table general-table-responsive">
					<div class="table-responsive-xl">

						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col">sr no.</th>
									<th scope="col">Note title</th>
									<th scope="col">category</th>
									<th scope="col">Remarks</th>
									<th scope="col">Clone</th>
									<th scope="col" width="80px"></th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td>1</td>
									<td class="purple-td">Data Science</td>
									<td>Science</td>
									<td>Lorem ipsum is dummy text</td>
									<td class="purple-td">Clone</td>
									<td class="text-center visible-overflow-for-dropdown">
										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>2</td>
									<td class="purple-td">Accounts</td>
									<td>Commerce</td>
									<td>Lorem ipsum is dummy text</td>
									<td class="purple-td">Clone</td>
									<td class="text-center visible-overflow-for-dropdown">
										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>3</td>
									<td class="purple-td">Social Study</td>
									<td>Social</td>
									<td>Lorem ipsum is dummy text</td>
									<td class="purple-td">Clone</td>
									<td class="text-center visible-overflow-for-dropdown">
										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>4</td>
									<td class="purple-td">AI</td>
									<td>IT</td>
									<td>Lorem ipsum is dummy text</td>
									<td class="purple-td">Clone</td>
									<td class="text-center visible-overflow-for-dropdown">
										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>5</td>
									<td class="purple-td">Lorem ipsum</td>
									<td>Lorem</td>
									<td>Lorem ipsum is dummy text</td>
									<td class="purple-td">Clone</td>
									<td class="text-center visible-overflow-for-dropdown">
										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>6</td>
									<td class="purple-td">Data Science</td>
									<td>Science</td>
									<td>Lorem ipsum is dummy text</td>
									<td class="purple-td">Clone</td>
									<td class="text-center visible-overflow-for-dropdown">
										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>7</td>
									<td class="purple-td">Accounts</td>
									<td>Commerce</td>
									<td>Lorem ipsum is dummy text</td>
									<td class="purple-td">Clone</td>
									<td class="text-center visible-overflow-for-dropdown">
										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>8</td>
									<td class="purple-td">Social Study</td>
									<td>Social</td>
									<td>Lorem ipsum is dummy text</td>
									<td class="purple-td">Clone</td>
									<td class="text-center visible-overflow-for-dropdown">
										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>9</td>
									<td class="purple-td">AI</td>
									<td>IT</td>
									<td>Lorem ipsum is dummy text</td>
									<td class="purple-td">Clone</td>
									<td class="text-center visible-overflow-for-dropdown">
										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>10</td>
									<td class="purple-td">Lorem ipsum</td>
									<td>Lorem</td>
									<td>Lorem ipsum is dummy text</td>
									<td class="purple-td">Clone</td>
									<td class="text-center visible-overflow-for-dropdown">
										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
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
		<!--my rejected notes table ends-->

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