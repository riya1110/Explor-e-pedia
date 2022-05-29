<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Title -->
	<title>My Notifications | Explor-e-pedia</title>

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

	<section id="my-downloads">

		<!-- Header -->
		<?php require_once '../partials/user_header.php'?>
		<!-- Header ends -->

		<!-- Review popup -->
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<img src="../images/notes-detail/close.png" alt="">
						</button>
					</div>
					
					<div class="modal-body">

						<p class="add-review-heading">Add Review</p>

						<div class="add-reviews-stars">
							<img src="../images/notes-detail/star.png" alt="">
							<img src="../images/notes-detail/star.png" alt="">
							<img src="../images/notes-detail/star.png" alt="">
							<img src="../images/notes-detail/star.png" alt="">
							<img src="../images/notes-detail/star-white.png" alt="">
						</div>

						<div class="form-group">
							<label class="info-label" for="comment-questions">Comments *</label>
							<textarea class="form-control input-box-style" id="" placeholder="Comments..."></textarea>
						</div>

						<div class="form-btn">
							<button class="btn btn-general btn-purple">Submit</button>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- Review popup ends-->

		<!-- my downloads table -->
		<div class="content-box-lg">

			<div class="container">
				<div class="row no-gutters">
				
					<div class="col-lg-6 col-md-6 col-sm-12 col-12 text-left box-heading-wrapper">
						<p class="my-downloads-heading">My Notifications</p>
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
									<th scope="col">Buyer</th>
									<th scope="col">Sell type</th>
									<th scope="col">price</th>
									<th scope="col">downloaded time</th>
									<th scope="col" width="80px">Action</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td>1</td>
									<td class="purple-td">Data Science</td>
									<td>Science</td>
									<td>testing123@gmail.com</td>
									<td>Paid</td>
									<td>$250</td>
									<td>27 Nov 2020, 11:24:34</td>
									<td class="text-center visible-overflow-for-dropdown">
										<img class="eye-img-in-table" src="../images/Dashboard/eye.png" alt="edit">

										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
												<a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>
												<a class="dropdown-item" href="#">Report as Inappropriate</a>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>2</td>
									<td class="purple-td">Accounts</td>
									<td>Commerce</td>
									<td>testing123@gmail.com</td>
									<td>Free</td>
									<td>$0</td>
									<td>27 Nov 2020, 11:24:34</td>
									<td class="text-center visible-overflow-for-dropdown">
										<img class="eye-img-in-table" src="../images/Dashboard/eye.png" alt="edit">

										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
												<a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>
												<a class="dropdown-item" href="#">Report as Inappropriate</a>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>3</td>
									<td class="purple-td">Social Study</td>
									<td>Social</td>
									<td>testing123@gmail.com</td>
									<td>Free</td>
									<td>$0</td>
									<td>27 Nov 2020, 11:24:34</td>
									<td class="text-center visible-overflow-for-dropdown">
										<img class="eye-img-in-table" src="../images/Dashboard/eye.png" alt="edit">

										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
												<a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>
												<a class="dropdown-item" href="#">Report as Inappropriate</a>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>4</td>
									<td class="purple-td">AI</td>
									<td>IT</td>
									<td>testing123@gmail.com</td>
									<td>Paid</td>
									<td>$158</td>
									<td>27 Nov 2020, 11:24:34</td>
									<td class="text-center visible-overflow-for-dropdown">
										<img class="eye-img-in-table" src="../images/Dashboard/eye.png" alt="edit">

										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
												<a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>
												<a class="dropdown-item" href="#">Report as Inappropriate</a>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>5</td>
									<td class="purple-td">Lorem ipsum</td>
									<td>Lorem</td>
									<td>testing123@gmail.com</td>
									<td>Free</td>
									<td>$555</td>
									<td>27 Nov 2020, 11:24:34</td>
									<td class="text-center visible-overflow-for-dropdown">
										<img class="eye-img-in-table" src="../images/Dashboard/eye.png" alt="edit">

										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
												<a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>
												<a class="dropdown-item" href="#">Report as Inappropriate</a>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>6</td>
									<td class="purple-td">Data Science</td>
									<td>Science</td>
									<td>testing123@gmail.com</td>
									<td>Paid</td>
									<td>$0</td>
									<td>27 Nov 2020, 11:24:34</td>
									<td class="text-center visible-overflow-for-dropdown">
										<img class="eye-img-in-table" src="../images/Dashboard/eye.png" alt="edit">

										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
												<a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>
												<a class="dropdown-item" href="#">Report as Inappropriate</a>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>7</td>
									<td class="purple-td">Accounts</td>
									<td>Commerce</td>
									<td>testing123@gmail.com</td>
									<td>Free</td>
									<td>$0</td>
									<td>27 Nov 2020, 11:24:34</td>
									<td class="text-center visible-overflow-for-dropdown">
										<img class="eye-img-in-table" src="../images/Dashboard/eye.png" alt="edit">

										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
												<a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>
												<a class="dropdown-item" href="#">Report as Inappropriate</a>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>8</td>
									<td class="purple-td">Social Study</td>
									<td>Social</td>
									<td>testing123@gmail.com</td>
									<td>Free</td>
									<td>$0</td>
									<td>27 Nov 2020, 11:24:34</td>
									<td class="text-center visible-overflow-for-dropdown">
										<img class="eye-img-in-table" src="../images/Dashboard/eye.png" alt="edit">

										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
												<a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>
												<a class="dropdown-item" href="#">Report as Inappropriate</a>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>9</td>
									<td class="purple-td">AI</td>
									<td>IT</td>
									<td>testing123@gmail.com</td>
									<td>Paid</td>
									<td>$250</td>
									<td>27 Nov 2020, 11:24:34</td>
									<td class="text-center visible-overflow-for-dropdown">
										<img class="eye-img-in-table" src="../images/Dashboard/eye.png" alt="edit">

										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
												<a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>
												<a class="dropdown-item" href="#">Report as Inappropriate</a>
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>10</td>
									<td class="purple-td">Lorem ipsum</td>
									<td>Lorem</td>
									<td>testing123@gmail.com</td>
									<td>Free</td>
									<td>$115</td>
									<td>27 Nov 2020, 11:24:34</td>
									<td class="text-center visible-overflow-for-dropdown">
										<img class="eye-img-in-table" src="../images/Dashboard/eye.png" alt="edit">

										<div class="dropdown dropdown-dots-table">
											<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img class="dots-in-table" src="../images/Dashboard/dots.png" alt="edit">
											</a>

											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item" href="#">Download Note</a>
												<a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>
												<a class="dropdown-item" href="#">Report as Inappropriate</a>
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
		<!-- my downloads table ends-->

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