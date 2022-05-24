<?php
$title = "Update Password";
$pg = "update-password";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="change_password" class="my-profile">
	<div class="page-title mb-4">
		<div class="row">
			<div class="col-12 col-lg-12">
				<h2><a href="profile.php"><i class="fa fa-chevron-left"></i></a> Update Password</h2>
			</div>
		</div>
	</div>
	<div class="content-body bg-white rounded-10 shadow-sm p-4 p-lg-5">
		<div class="row">
			<div class="col-12 col-lg-7 col-xxl-5">
				<form action="">
					<div class="row form-group">
						<div class="col-12">
							<label class="fw-medium ps-1 mb-2">Change Password<span class="text-danger">*</span></label>
							<div class="position-relative">
								<input type="password" class="form-control enter-input" placeholder="Enter New Password">
								<button class="btn view-btn position-absolute" onclick="event.preventDefault()">
									<i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-12">
							<label class="fw-medium ps-1 mb-2">New Password<span class="text-danger">*</span></label>
							<div class="position-relative">
								<input type="password" class="form-control enter-input" placeholder="Enter New Password">
								<button class="btn view-btn position-absolute" onclick="event.preventDefault()">
									<i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-12">
							<label class="fw-medium ps-1 mb-2">Confirm Password<span class="text-danger">*</span></label>
							<div class="position-relative">
								<input type="password" class="form-control enter-input" placeholder="Enter Confirm Password">
								<button class="btn view-btn position-absolute" onclick="event.preventDefault()">
									<i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					<div class="row detail-row">
						<div class="col-12 mt-3">
							<a href="profile.php" class="btn btn-primary text-uppercase px-5 me-3">Update</a>
						</div>
					</div>
				</form>
			</div>
			<div class="col-12 col-lg-5 col-xxl-7 text-center d-none d-lg-block">
				<img src="../images/forgot-pass-img.png" alt="">
			</div>
		</div>
	</div>
</section>

<?php
include('../include/footer.php');
?>