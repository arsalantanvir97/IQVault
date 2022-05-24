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
                    <div class="row justify-content-center">
                        <!-- <div class="col-12 col-lg-6 d-flex align-items-stretch">
							<div class="left d-flex align-items-center justify-content-center position-relative">
							</div>
						</div> -->
                        <div class="col-12 col-lg-6">
                            <div class="right px-5">
                                <div class="logo text-center"><img src="../images/logo.png" alt="" /></div>
                                <div class="text-center">
                                    <h1 class="mt-5">Forgot Password</h1>
                                    <p class="mb-5">Enter your email address to receive a verification code</p>
                                </div>
                                <form action="password-recovery-2.php">
                                    <div class="form-group">
                                        <label for="">Email Address<span class="text-black">*</span></label>
                                        <input type="email" class="form-control" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group text-center mt-2 mt-lg-3">
                                        <button type="sumit" class="btn px-4 orange-btn full-btn">Continue</button>
                                    </div>
                                    <div class="form-group text-center bck-btn mb-0 mt-2 mt-lg-2">
                                        <a href="login.php">Back To Login</a>
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