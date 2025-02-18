<?php 

	require('admin/inc/db_config.php');
	require('admin/inc/essentials.php');


	$contact_q = "SELECT * FROM `contact_details` WHERE `s_no`=?";
	$values = [1];
	$contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));

?>
<!-- Navbar -->

<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-5 sticky-top">
  <div class="container-fluid">
		<a class="navbar-brand me-5 fw=bold fs-3 h-font" href="index.php">WaibyHotel HOTEL</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			 <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link me-2" href="room.php">Rooms</a>
							</li>
								<li class="nav-item">
								<a class="nav-link me-2" href="facilities.php">Facilities</a>
							</li>
								<li class="nav-item">
								<a class="nav-link me-2" href="contact.php">Contact Us</a>
							</li>
								 <li class="nav-item">
								<a class="nav-link me-2" href="about.php">About</a>
						</ul>
						<div class="d-flex">
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
								LogIn
							</button>
							<button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
								Register
							</button>
						</div>
					</div>
				</div>
			</nav>

<!-- Login Modal -->
	<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="">
					
					<div class="modal-header">
						<h5 class="modal-title d-flex align-items-center">
							<i class="bi bi-person fs-3 me-2"></i>User Login
						</h5>
							<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					</div>
					<div class="mb-3 me-3 ms-3">
						<label class="form-label">Email address</label>
						<input type="email" class="form-control shadow-none">
					</div>
					<div class="mb-5 me-3 ms-3">
						<label class="form-label">Password</label>
						<input type="password" class="form-control shadow-none">
					</div>
					<div class="d-flex align-items-center justify-content-between mb-3">
						<button type="submit" class="btn btn-dark shadow-none me-3 ms-3">LogIn</button>
						<a href="javascript: void(0)" class="text-secondary text-decoration-none me-2">Forget Password?</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<!-- Register Modal -->
	<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form action="">
					
					<div class="modal-header">
						<h5 class="modal-title d-flex align-items-center">
							<i class="bi bi-person-fill-add fs-3 me-2"></i>User Registration
						</h5>
							<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
							<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
								Note: Your details must match with ID(Aadhar card, passpart, driving license, etc.) that will be required during check-in.     
							</span>
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-6 ps-0 mb-3">
										<label class="form-label">Name</label>
										<input type="text" class="form-control shadow-none">
									</div>
									<div class="col-md-6 p-0 mb-3">
										<label class="form-label">Email</label>
										<input type="email" class="form-control shadow-none">
									</div>  
									<div class="col-md-6 ps-0 mb-3">
										<label class="form-label">Phone Number</label>
										<input type="number" class="form-control shadow-none">
									</div>
									<div class="col-md-6 p-0 mb-3">
										<label class="form-label">picture</label>
										<input type="File" class="form-control shadow-none">
									</div> 
									<div class="col-md-12 p-0 mb-3">
										<label class="form-label">Address</label>
										<textarea class="form-control shadow-none" rows="1"></textarea>
									</div>
									<div class="col-md-6 ps-0 mb-3">
										<label class="form-label">Pin Code</label>
										<input type="number" class="form-control shadow-none">
									</div>
									<div class="col-md-6 p-0 mb-3">
										<label class="form-label">Date of Birth</label>
										<input type="date" class="form-control shadow-none">
									</div> 
									<div class="col-md-6 ps-0 mb-3">
										<label class="form-label">Password</label>
										<input type="password" class="form-control shadow-none">
									</div>
									<div class="col-md-6 p-0 mb-3">
										<label class="form-label">Confirm Password</label>
										<input type="password" class="form-control shadow-none">
									</div>   
								</div>
						</div>
						<div class="text-center my-1">
							<button type="submit" class="btn btn-dark shadow-none me-3 ms-3">Register</button>
						</div>
					</div>  
				</form>
			</div>
		</div>
	</div>