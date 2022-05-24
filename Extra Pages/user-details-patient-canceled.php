<?php
$title = "Appointment Details Canceled";
$pg = "users";
include('header.php');
include('nav.php');
?>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration" class="user-page">
                <div class="page-title mb-4">
                    <div class="row">
                        <div class="col-12">
                            <h2><a href="user-profile-appointments-log.php"><i class="fa fa-chevron-left"></i></a>Appointment Details</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card rounded-10 shadow-none">
                            <div class="card-body p-4 p-lg-5">
                                <div class="page-title">
                                    <div class="row mb-3 mb-lg-0">
                                        <div class="col-12 col-lg-8 align-self-center">
                                            <h3 class="fw-medium mb-3 mb-lg-5">Dummy Appointment Title</h3>
                                        </div>
                                        <div class="col-lg-4 text-start text-lg-end">
                                            <span class="status canceled text-white fs-16">Canceled</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="detail-block mb-0 pb-0 appointment-detail-block">
                                    <div class="row">
                                        <div class="col-12 col-xl-12">
                                            <div class="media d-md-flex d-block">
                                                <div class="media-body flex-grow-1 ps-0 mb-3">
                                                    <div class="row mb-3 mb-lg-4 mb-xxl-5">
                                                        <div class="col-12">
                                                            <h3 class="text-seegreen">Dr Alex Martin</h3>
                                                            <p>General Physician</p>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 mb-lg-4 mb-xxl-5">
                                                        <div class="col-12">
                                                            <label for="">Clinic/Hospital Name:</label>
                                                            <p>ABC North Care Hospital</p>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 mb-lg-4 mb-xxl-5">
                                                        <div class="col-12">
                                                            <label for="">Location/Address:</label>
                                                            <p>Suit#08/, 2nd Floor, ABC North Care Hospital , <br> Jeddah, KSA</p>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 mb-lg-4 mb-xxl-5">
                                                        <div class="col-12">
                                                            <label for="">Contact Number:</label>
                                                            <p>111 111 111 111</p>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 mb-lg-4 mb-xxl-5">
                                                        <div class="col-12">
                                                            <label for="">Email:</label>
                                                            <p>alex.martin@gmail.com</p>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 mb-lg-4 mb-xxl-5">
                                                        <div class="col-12">
                                                            <label for="">Diagnosed Disease:</label>
                                                            <p>Diabetes</p>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 mb-lg-4 mb-xxl-5">
                                                        <div class="col-12 col-md-10 col-lg-7 col-xxl-5">
                                                            <label for="">Additional Notes:</label>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin ravida
                                                                dolor sit amet lacus accumsan et viverra justo</p>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 mb-lg-4 mb-xxl-5">
                                                        <div class="col-lg-4 col-xxl-3 mb-3 mb-lg-0">
                                                            <label for="">Appointment Date</label>
                                                            <p>
                                                                <span class="d-block">29 October, 2021</span>
                                                                <span class="d-block">Time: 2:00 PM</span>
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-4 col-xxl-3">
                                                            <label for="">Reminder Time</label>
                                                            <p>2:00 PM</p>
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
            </section>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>