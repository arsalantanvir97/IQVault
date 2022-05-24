<?php
$title = "Login";
$pg = "Login In";
include('../include/head.php');
?>

<section class="login-wrap">
	<div class="container">
		<div class="row">
			<div class="col-12 col-xl-10 mx-auto">
				<div class="login-card bg-img p-0">
					<div class="row justify-content-end">
						<div class="col-12 col-lg-6 d-flex align-items-stretch">
							<div class="left d-flex align-items-center justify-content-center position-relative">
								<img src="../assets/images/login-logo.png" alt="" class="img-fluid">
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="right">
								<div class="logo text-center"><img src="assets/images/logo.png" alt="" /></div>
								<h1 class="mt-5">Login</h1>
								<p class="mb-5">Please Login to Continue</p>
								<form action="dashboard.php">
									<div class="form-group">
										<label for="">Username <span class="text-black">*</span></label>
										<input type="email" class="form-control" placeholder="Enter Your Username">
									</div>
									<div class="form-group mb-1">
										<label for="">Password <span class="text-black">*</span> </label>
										<div class="position-relative">
											<input type="password" class="form-control enter-input" placeholder="Enter Your Passowrd">
											<button class="btn view-btn position-absolute" onclick="event.preventDefault()">
												<i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
											</button>
										</div>
									</div>
									<div class="form-group mt-2">
										<div class="d-flex justify-content-end">
											<div class="forgot-pass">
												<a href="password-recovery-1.php" class="fw-700" data-bs-toggle="modal" data-bs-target=".forgot-password">Forgot Password?</a>
											</div>
										</div>
									</div>
									<div class="form-group text-center mt-4 mb-0">
										<button type="sumit" class="btn btn-login orange-btn full-btn">Login</button>
									</div>
									<!-- <div class="form-group text-center bck-btn mb-0 mt-4">
								<a href="dashboard.php">Back To Website</a>
							</div> -->
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?php include('../include/footer.php'); ?>