<?php
$title = "Users Detail";
$pg = "users";
include('../include/header.php');

?>

        <!-- Basic form layout section start -->
        <section id="user_patient_profile" class="user-patient-page user-page">
            <div class="page-title mb-4">
                <div class="row">
                    <div class="col-12">
                        <h2><a href="users.php"><i class="fa fa-chevron-left"></i></a>Patient Profile Details</h2>
                    </div>
                </div>
            </div>
            <div class="content-body bg-white p-4 p-lg-5 rounded-10 shadow-sm position-relative">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 align-self-center">
                            <h3 class="fw-medium mb-3 mb-lg-5">Profile Details</h3>
                        </div>
                    </div>
                </div>
                <div class="detail-block media d-md-flex d-block">
                    <div class="media-left text-center flex-shrink-0 mb-5 mb-lg-0 position-right">
                        <div class="profile-img text-center m-auto">
                            <img src="../images/profile-avatar.png" class="img-fluid ml-0" alt="">
                        </div>
                    </div>

                    <div class="media-body flex-grow-1 ps-0 mb-3">
                        <div class="row mb-3 mb-lg-5">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label for="">User Type</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>Free User</p>
                            </div>
                        </div>
                        <div class="row mb-3 mb-lg-5">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label for="">First Name</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>Williams</p>
                            </div>
                        </div>
                        <div class="row mb-3 mb-lg-5">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label for="">Last Name</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>John</p>
                            </div>
                        </div>
                        <div class="row mb-3 mb-lg-5">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label for="">Email</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>testing@test.com</p>
                            </div>
                        </div>
                        <div class="row mb-3 mb-lg-5">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label for="">Phone No</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>+971 35699859200</p>
                            </div>
                        </div>
                        <div class="row mb-3 mb-lg-5">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label for="">Who's the patient :</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>Me</p>
                            </div>
                        </div>
                        <div class="row mb-3 mb-lg-5">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label for="">Patient's DOB</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>25 / 02 / 1992</p>
                            </div>
                        </div>
                        <div class="row mb-3 mb-lg-5">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label for="">Gender</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>Male</p>
                            </div>
                        </div>
                        <div class="row mb-3 mb-lg-5">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label for="">Blood Type:</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>A +ve</p>
                            </div>
                        </div>
                        <div class="row mb-3 mb-lg-5">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label for="">A bit about the patient</label>
                            </div>
                            <div class="col-12 col-lg-8">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida
                                    dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis</p>
                            </div>
                        </div>
                        <div class="row mb-3 mb-lg-5">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label for="">Patient’s disease name(s)</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <span class="d-inline-block py-3 px-5 border rounded-pill">Diabetes</span>
                                <span class="d-inline-block py-3 px-5 border rounded-pill mx-3">Alzheimer</span>
                                <span class="d-inline-block py-3 px-5 border rounded-pill">Arthritis</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
include('../include/footer.php');
?>