<!--------------------------
    ------ LogOut Modal START
---------------------------------->
<div class="modal fade profile-logout p-0" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-bs-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/question-icon.png" alt="" class="modal-icon">
                        <h3 class="modal-title text-center">Are You Sure You Want To Logout Of Your Account?</h3>
                    </div>
                </div>
            </div>
            <div
                class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row">
                <button type="button" class="btn btn-primary mx-lg-2" data-bs-toggle="modal" data-bs-dismiss="modal"
                    aria-bs-label="Close" data-bs-target=".profile-logout-confirm">Yes</button>
                <button type="button" class="btn btn-secondary mx-lg-2" data-bs-dismiss="modal"
                    aria-bs-label="Close">No</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade profile-logout-confirm p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true"
    data-bs-backdrop="static">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-bs-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="../assets/images/check-icon.png" alt="" class="modal-icon">
                        <h3 class="modal-title text-center">You Have Been Logged Out Of Your Account.</h3>
                    </div>
                </div>
            </div>
            <div
                class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row">
                <button type="button" class="btn btn-primary ml-0 ml-sm-1" data-bs-dismiss="modal"
                    aria-bs-label="Close">Ok</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    ------ LogOut Modal END
---------------------------------->

<!--------------------------
    ------ Login Page START
---------------------------------->
<div class="modal fade reset-password p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <i class="fa fa-check-circle mb-3"></i>
                        <h3 class="modal-title text-center">The password has been reset successfully</h3>
                    </div>
                </div>
            </div>
            <div
                class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="login.php" class="btn btn-primary">Login now</a>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    ------ Login Page END
---------------------------------->

<!--------------------------
    ------ User Page  START
---------------------------------->
<!-- Active User -->
<div class="modal fade active-user p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby=""
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <i class="fa circle-fill fa-question mb-3"></i>
                        <h3 class="modal-title text-center">Are you sure you want to mark the record as Active?</h3>
                    </div>
                </div>
            </div>
            <div
                class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-center">
                <button type="button" class="btn btn-blue mb-sm-0 mb-2 mr-0 mr-sm-1" data-bs-toggle="modal"
                    data-bs-dismiss="modal" aria-label="Close"
                    data-bs-target=".student-manage-active-confirm">Yes</button>
                <button type="button" class="btn btn-secondary ml-0 ml-sm-1" data-bs-dismiss="modal"
                    aria-label="Close">No</button>
            </div>
        </div>
    </div>
</div>
<!-- Inactive User -->
<div class="modal fade inactive-user p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <i class="fa circle-fill fa-question mb-3"></i>
                        <h3 class="modal-title text-center">Are you sure you want to mark the record as Inactive?</h3>
                    </div>
                </div>
            </div>
            <div
                class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-center">
                <button type="button" class="btn btn-blue mb-sm-0 mb-2 mr-0 mr-sm-1" data-bs-toggle="modal"
                    data-bs-dismiss="modal" aria-label="Close"
                    data-bs-target=".student-manage-active-confirm">Yes</button>
                <button type="button" class="btn btn-secondary ml-0 ml-sm-1" data-bs-dismiss="modal"
                    aria-label="Close">No</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    ------ User Page END
---------------------------------->


<!--------------------------
    ------ Medicine Management Page START
---------------------------------->
<!-- Medicine Updated -->
<div class="modal fade medicine-updated p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <i class="fa fa-check-circle mb-3"></i>
                        <h3 class="modal-title text-center">The record has been successfully updated</h3>
                    </div>
                </div>
            </div>
            <div
                class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-primary">Okay</a>
            </div>
        </div>
    </div>
</div>

<!-- Medicine Active -->
<div class="modal fade medicine-active p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <i class="fa circle-fill fa-question mb-3"></i>
                        <h3 class="modal-title text-center">Are you sure you want to mark the record as Active?</h3>
                    </div>
                </div>
            </div>
            <div
                class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-center">
                <button type="button" class="btn btn-blue mb-sm-0 mb-2 mr-0 mr-sm-1" data-bs-toggle="modal"
                    data-bs-dismiss="modal" aria-label="Close"
                    data-bs-target=".student-manage-active-confirm">Yes</button>
                <button type="button" class="btn btn-secondary ml-0 ml-sm-1" data-bs-dismiss="modal"
                    aria-label="Close">No</button>
            </div>
        </div>
    </div>
</div>

<!-- Medicine Inactive -->
<div class="modal fade medicine-inactive p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <i class="fa circle-fill fa-question mb-3"></i>
                        <h3 class="modal-title text-center">Are you sure you want to mark the record as Inactive?</h3>
                    </div>
                </div>
            </div>
            <div
                class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-center">
                <button type="button" class="btn btn-blue mb-sm-0 mb-2 mr-0 mr-sm-1" data-bs-toggle="modal"
                    data-bs-dismiss="modal" aria-label="Close"
                    data-bs-target=".student-manage-active-confirm">Yes</button>
                <button type="button" class="btn btn-secondary ml-0 ml-sm-1" data-bs-dismiss="modal"
                    aria-label="Close">No</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    ------ Medicine Management END
---------------------------------->

<!--------------------------
    ------ Subscription Page START
---------------------------------->
<div class="modal fade subscription-updated p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <i class="fa fa-check-circle mb-3"></i>
                        <h3 class="modal-title text-center">Subscription Info <span
                                class="d-inline d-sm-inline-block">Successfully Updated </span></h3>
                    </div>
                </div>
            </div>
            <div
                class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <a href="#" data-bs-dismiss="modal" aria-label="Close" class="btn btn-primary">Okay</a>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    ------ Subscription END
---------------------------------->


<!--------------------------
    ------ Forgot Password
---------------------------------->
<div class="modal fade forgot-password p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content modal-login">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close shadow-sm" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12">
                        <div class="modal-login-card">
                            <div class="right">
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
                                        <button type="button" class="btn px-4 orange-btn full-btn"
                                            data-bs-toggle="modal"
                                            data-bs-target=".verification-password">Continue</button>
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
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
            </div>
        </div>
    </div>
</div>
<!--------------------------
    ------ Forgot Password
---------------------------------->

<!--------------------------
    ------ Verification Password
---------------------------------->
<div class="modal fade verification-password p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content modal-login">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close shadow-sm" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12">
                        <div class="modal-login-card">
                            <div class="right">
                                <div class="text-center">
                                    <h1 class="mt-5">Forgot Password</h1>
                                    <p class="mb-5">An email has been sent to you with a verification code. Please enter
                                        it here.</p>
                                </div>
                                <form action="password-recovery-2.php">
                                    <div class="form-group">
                                        <label for="">Verification Code<span class="text-black">*</span></label>
                                        <input type="email" class="form-control" placeholder="Enter verification code">
                                    </div>
                                    <div class="form-group mt-2">
                                        <div class="d-flex justify-content-end">
                                            <div class="forgot-pass">
                                                <a href="password-recovery-1.php" class="fw-700" data-bs-toggle="modal"
                                                    data-bs-target=".forgot-password">Resend Code</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center mt-2 mt-lg-3">
                                        <button type="button" class="btn px-4 orange-btn full-btn"
                                            data-bs-toggle="modal" data-bs-target=".new-password">Continue</button>
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
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
            </div>
        </div>
    </div>
</div>
<!--------------------------
    ------ Verification Password
---------------------------------->

<!--------------------------
    ------ New Password
---------------------------------->
<div class="modal fade new-password p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content modal-login">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close shadow-sm" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12">
                        <div class="modal-login-card">
                            <div class="right">
                                <div class="text-center">
                                    <h1 class="mt-5">Forgot Password</h1>
                                    <p class="mb-5">Type in your new Password</p>
                                </div>
                                <form action="password-recovery-2.php">
                                    <div class="form-group">
                                        <label for="">Password <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control enter-input"
                                                placeholder="Enter New Password">
                                            <button class="btn view-btn position-absolute"
                                                onclick="event.preventDefault()">
                                                <i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Confirm Password <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control confirm-input"
                                                placeholder="Enter Confirm Password">
                                            <button class="btn view-btn position-absolute"
                                                onclick="event.preventDefault()">
                                                <i class="fa fa-eye-slash confirm-icon right-icon"
                                                    aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="form-group text-center mt-2 mt-lg-3">
                                        <button type="button" class="btn px-4 orange-btn full-btn">Update</button>
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
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
            </div>
        </div>
    </div>
</div>
<!--------------------------
    ------ New Password
---------------------------------->

<!--------------------------
    ------ Add New Customer
---------------------------------->
<div class="modal fade new-customer p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content modal-login">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close shadow-sm" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12">
                        <div class="modal-add-customer">
                            <div class="right">
                                <div class="text-center">
                                    <h1 class="mb-5 ff-demo">Add New Customer</h1>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="">Full Name <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control enter-input"
                                                placeholder="Enter Full Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email Address <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <input type="email" class="form-control enter-input"
                                                placeholder="Enter Email Address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Phone No. <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <input type="number" class="form-control enter-input"
                                                placeholder="Enter Phone No.">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Full Address <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control enter-input"
                                                placeholder="Enter Full Address">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Country <span class="text-danger">*</span></label>
                                        <select name="" class="form-control">
                                            <option value="">Select Country</option>
                                            <option value="">Active</option>
                                            <option value="">Expire</option>
                                        </select>
                                    </div>

                                    <div class="form-group text-center mt-2 mt-lg-3">
                                        <button type="button" class="btn px-4 orange-btn full-btn"
                                            data-bs-toggle="modal" data-bs-target=".add-customer">Add Customer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
            </div>
        </div>
    </div>
</div>
<!--------------------------
    ------ Add New Customer
---------------------------------->

<!--------------------------
    ------ Add New Customer Message
---------------------------------->
<div class="modal fade add-customer p-0" id="modal-header-bg" data-bs-backdrop="static" data-keyboard="false"
    tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header position-relative">
                <h5 class="modal-title"></h5>
                <img src="../assets/images/right-icon.png" alt="" class="img-fluid">
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="modal-title text-center pt-5">Customer Added</h3>
                        <p class="modal-content">Customer has Been Added Successfully. Do You Want to add Invoice.</p>
                    </div>
                </div>
            </div>
            <div
                class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-center">
                <button type="button" class="btn orange-btn mb-sm-0 mb-2 mr-0 mr-sm-1" data-bs-toggle="modal"
                    data-bs-target=".generate-invoice">Generate Invoice</button>
                <a href="invoice.php" class="btn orange-border-btn">Back To Log</a>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    ------ Add New Customer Message
---------------------------------->

<!--------------------------
    ------ Generate Invoice
---------------------------------->
<div class="modal fade generate-invoice p-0" id="custome-width" data-bs-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content modal-login">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close shadow-sm" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12">
                        <div class="modal-add-customer">
                            <div class="right">
                                <div class="text-center">
                                    <h1 class="mt-5 ff-demo">Generate Invoice</h1>
                                    <p class="invoice-num mb-5">Invoice No : 12ASD123</p>
                                </div>
                                <div class="invoice-details">
                                    <div class="row">
                                        <div class="col-md-6 d-flex flex-column justify-content-between">
                                            <div>
                                                <p class="m-0">45333 Fremont Blvd #5 Fremont CA 94538</p>
                                                <p class="m-0">Billing #.844-243-4219</p>
                                            </div>
                                            <div>
                                                <p class="m-0">Payment Method:</p>
                                                <p class="m-0">CC/Debit Card</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-md-end d-flex flex-column justify-content-between">
                                            <div class="mt-3 mb-4">
                                                <p class="m-0">Bill To</p>
                                                <p class="m-0">Alexander Novak</p>
                                            </div>
                                            <div class="mb-4">
                                                <p class="m-0">anovak@iphotocentral.com</p>
                                                <p class="m-0">+12155186962</p>
                                            </div>
                                            <div class="mb-4">
                                                <p class="m-0">Order Date:</p>
                                                <p class="m-0">18th March, 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 overflow-auto">
                                    <table class="table mt-4">
                                        <thead>
                                            <tr>
                                                <th>Service Name</th>
                                                <th>Description</th>
                                                <th>Unit Cost</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control" placeholder="Enter Service">
                                                </td>
                                                <td><input type="text" class="form-control"
                                                        placeholder="Enter Description"></td>
                                                <td><input type="text" class="form-control" placeholder="Enter Unit">
                                                </td>
                                                <td><input type="text" class="form-control"
                                                        placeholder="Enter Quantity"></td>
                                                <td><input type="text" class="form-control" placeholder=""></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </div>
                                    <h3 class="d-flex justify-content-end text-decoration-underline fs-14 fw-700"><a
                                            href="#">Add Service Field</a></h3>
                                    <div class="calculation mt-5">
                                        <div class="row justify-content-end">
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p>Total :</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-end"><span>$</span>00</h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p>Paid Amount :</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-end"><span>$</span>00</h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p>Balance :</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-end"><span>$</span>00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-sm-row align-items-stretch">
                <button type="button" class="btn orange-btn full-btn mx-5 my-0" data-bs-toggle="modal" data-bs-target=".invoice-generated">Generate Invoice</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    ------ Generate Invoice
---------------------------------->

<!--------------------------
    ------ Invoice Generated
---------------------------------->
<div class="modal fade invoice-generated p-0" id="modal-header-bg" data-bs-backdrop="static" data-keyboard="false"
    tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header position-relative">
                <h5 class="modal-title"></h5>
                <img src="../assets/images/right-icon.png" alt="" class="img-fluid">
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="modal-title text-center pt-5">Invoice Generated</h3>
                        <p class="modal-content">Invoice Against "Customer Name" Has been Generated</p>
                    </div>
                </div>
            </div>
            <div
                class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-center">
                <a href="invoice.php" class="btn orange-btn">Back To Log</a>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    ------ Invoice Generated
---------------------------------->

<!--------------------------
    ------ Customer Details
---------------------------------->
<div class="modal fade customer-details p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content modal-login">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close shadow-sm" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12">
                        <div class="modal-add-customer">
                            <div class="right">
                                <div class="text-center">
                                    <h1 class="mb-5 ff-demo">Customer Details</h1>
                                </div>
                                <div class="invoice-details">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 d-flex flex-column justify-content-between">
                                            <p class="m-0">Full Name</p>
                                            <p class="m-0">Email Address</p>
                                            <p class="m-0">Phone No.</p>
                                            <p class="m-0">Location</p>
                                        </div>
                                        <div class="col-12 col-sm-6 text-sm-end d-flex flex-column justify-content-between">
                                            <h6>Mark Carson</h6>
                                            <h6>abc@example.com</h6>
                                            <h6>0000-000-0000</h6>
                                            <h6>Location Here</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-sm-row align-items-stretch">
                <button type="button" class="btn orange-btn full-btn mx-5 my-0" data-bs-toggle="modal" data-bs-target=".edit-customer">Edit</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    ------ Customer Details
---------------------------------->

<!--------------------------
    ------ Edit Customer
---------------------------------->
<div class="modal fade edit-customer p-0" data-bs-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content modal-login">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close shadow-sm" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12">
                        <div class="modal-add-customer">
                            <div class="right">
                                <div class="text-center">
                                    <h1 class="mb-5 ff-demo">Edit Customer</h1>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="">Full Name <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control enter-input"
                                                placeholder="Enter Full Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email Address <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <input type="email" class="form-control enter-input"
                                                placeholder="Enter Email Address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Phone No. <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <input type="number" class="form-control enter-input"
                                                placeholder="Enter Phone No.">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Full Address <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control enter-input"
                                                placeholder="Enter Full Address">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Country <span class="text-danger">*</span></label>
                                        <select name="" class="form-control">
                                            <option value="">Select Country</option>
                                            <option value="">Active</option>
                                            <option value="">Expire</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-stretch">
                <button type="button" class="btn px-4 orange-btn full-btn" data-bs-toggle="modal" data-bs-target=".update-customer">Update</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    ------ Edit Customer
---------------------------------->

<!--------------------------
    ------ Update Customer
---------------------------------->
<div class="modal fade update-customer p-0" id="modal-header-bg" data-bs-backdrop="static" data-keyboard="false"
    tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header position-relative">
                <h5 class="modal-title"></h5>
                <img src="../assets/images/right-icon.png" alt="" class="img-fluid">
                <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="modal-title text-center pt-5">Customer Updated</h3>
                        <p class="modal-content">Customer has been Updated successfully
</p>
                    </div>
                </div>
            </div>
            <div
                class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-column flex-sm-row align-items-center">
                <button type="button" class="btn orange-btn mb-sm-0 mb-2 mr-0 mr-sm-1" data-bs-dismiss="modal" aria-bs-label="Close">Ok</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    ------ Update Customer
---------------------------------->


<!--------------------------
    ------ Complete Invoice
---------------------------------->
<div class="modal fade complete-invoice p-0" id="custome-width" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content modal-login">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn close shadow-sm" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row">
                    <div class="col-12">
                        <div class="modal-add-customer">
                            <div class="right">
                                <div class="row mt-5">
                                    <div class="col-md-12 col-12">
                                        <img src="../assets/images/generate-invoice.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-4 pb-5 text-center d-flex justify-content-center flex-sm-row align-items-stretch">
                <button type="button" class="btn orange-btn full-btn mx-5 my-0">Download</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------
    ------ Complete Invoice
---------------------------------->