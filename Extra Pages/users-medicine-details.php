<?php
$title = "Users Medicine Details";
$pg = "users";
include('header.php');
include('nav.php');
?>

<div class="app-content content">
    <div class="content-wrapper">
        <!-- Basic form layout section start -->
        <section id="configuration" class="user-page">
            <div class="page-title mb-4">
                <div class="row">
                    <div class="col-12">
                        <h2><a href="user-details-patient.php"><i class="fa fa-chevron-left"></i></a>Medicine Detail</h2>
                    </div>
                </div>
            </div>
            <div class="content-body bg-white shadow-sm rounded-10 p-4 p-lg-5 medician-detail">
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-xxl-3 mb-3 mb-md-0">
                        <img src="../images/medicine-img.png" alt="" class="img-fluid w-100">
                    </div>
                    <div class="col-md-7 col-lg-7 col-xxl-6">
                        <h2 class="text-seegreen mb-4">Cymbalta <span class="text-black">(60mg)</span></h2>
                        <h3 class="fw-light mb-2">Tablet</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo</p>
                        <div class="user-meta">
                            <ul class="ps-0">
                                <li class="color-meta fw-light lh-1">Color <span class="rounded-circle bg-red d-inline-block align-middle"></span></li>
                                <li class="fw-light">Created by: Alex</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php
include('footer.php');
?>