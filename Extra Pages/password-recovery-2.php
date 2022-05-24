<?php
$title = "Password Recovery";
$pg = "password-recovery";
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
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="right px-5">
								<div class="logo text-center"><img src="../images/logo.png" alt="" /></div>
								<h1 class="mb-3 mt-4">Reset your password</h1>
								<form action="dashboard.php">
									<!-- <div class="form-group">
										<label for="">Old password <span class="text-danger">*</span></label>
										<div class="position-relative">
											<input type="password" class="form-control enter-input" placeholder="Enter Old Password">
											<button class="btn view-btn position-absolute" onclick="event.preventDefault()">
												<i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
											</button>
										</div>
									</div> -->
									<div class="form-group">
										<label for="">New Password <span class="text-danger">*</span></label>
										<div class="position-relative">
											<input type="password" class="form-control enter-input" placeholder="Enter New Password">
											<button class="btn view-btn position-absolute" onclick="event.preventDefault()">
												<i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
											</button>
										</div>
									</div>
									<div class="form-group">
										<label for="">Confirm Password <span class="text-danger">*</span></label>
										<div class="position-relative">
											<input type="password" class="form-control enter-input" placeholder="Enter Confirm Password">
											<button class="btn view-btn position-absolute" onclick="event.preventDefault()">
												<i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
											</button>
										</div>
									</div>
									<div class="form-group text-center mt-3">
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".reset-password">Update</button>
									</div>
									<div class="form-group text-center bck-btn mb-0 mt-2">
										<a href="login.php">Back To login</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('../include/footer.php') ?>