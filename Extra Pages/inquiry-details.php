<?php
$title = "Inquiry Details";
$pg = "inquiry-logs";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="inquiry_detail" class="inquiry-detail">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-12">
                <h2><a href="inquiry-logs.php"><i class="fa fa-chevron-left"></i></a>Inquiry Details</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="content-body bg-white rounded-10 shadow-none p-4 p-lg-5">
                <div class="row">
                    <div class="col-12 col-xl-10">
                        <div class="detail-block media d-md-flex d-block">
                            <div class="media-body flex-grow-1 ps-0">
                                <div class="row mb-3 mb-lg-5">
                                    <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                        <label for="">First Name</label>
                                    </div>
                                    <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                        <p>Mark</p>
                                    </div>
                                </div>
                                <div class="row mb-3 mb-lg-5">
                                    <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                        <label for="">Last Name</label>
                                    </div>
                                    <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                        <p>Williams</p>
                                    </div>
                                </div>
                                <div class="row mb-3 mb-lg-5">
                                    <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                        <label for="">Customer Email:</label>
                                    </div>
                                    <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                        <p>testing@test.com</p>
                                    </div>
                                </div>
                                <div class="row mb-3 mb-lg-5">
                                    <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                        <label for="">Contact Number:</label>
                                    </div>
                                    <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                        <p>+35699859200</p>
                                    </div>
                                </div>
                                <div class="row mb-3 mb-lg-5">
                                    <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                        <label for="">Subject:</label>
                                    </div>
                                    <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                        <p>This is a dummy subject</p>
                                    </div>
                                </div>
                                <div class="row mb-3 mb-lg-5">
                                    <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                        <label for="">Message: </label>
                                    </div>
                                    <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                        <p>This is a dummy Message</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../include/footer.php');
?>