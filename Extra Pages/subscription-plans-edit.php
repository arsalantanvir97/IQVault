<?php
$title = "Subscriptions Plans";
$pg = "subscription-plans";
include('header.php');
include('nav.php');
?>

<div class="app-content content">
    <div class="content-wrapper">
        <!-- Basic form layout section start -->
        <section id="subscription_plans_edit_manage" class="subscription-plans-edit-page">
            <div class="page-title mb-4">
                <div class="row">
                    <div class="col-12">
                        <h2>Edit Subscription Plan</h2>
                    </div>
                </div>
            </div>
            <div class="content-body bg-white rounded-10 shadow-none p-4 p-lg-5">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xxl-4">
                        <div class="card subscriber-card subscriber-card-edit rounded-10">
                            <div class="card-header px-4 bg-transparent text-center subscriber-avatar">
                                <h3 class="text-uppercase text-white">
                                    <input type="text" class="form-control text-uppercase text-center fw-medium" name="" id="" value="Premium Plan">
                                </h3>
                                <h4 class="text-uppercase text-white">Billed Annually</h4>
                            </div>
                            <div class="card-body py-0 px-4 px-lg-4 px-xxl-5">
                                <h4 class="card-title text-center mt-4 mb-4">
                                    <input type="text" class="form-control text-center fw-medium" name="" id="" value="AED 25">
                                </h4>
                                <ul class="p-0 m-0 subs-list">
                                    <li><i class="fa fa-check-circle"></i> PRO badge</li>
                                    <li><i class="fa fa-check-circle"></i> Dark Mode</li>
                                    <li><i class="fa fa-check-circle"></i> Ads free</li>
                                    <li><i class="fa fa-check-circle"></i> Data export to excel, word, pdf formats.</li>
                                </ul>

                            </div>
                            <div class="card-footer border-0 bg-transparent text-center">
                                <div class="d-block">
                                    <a href="#" data-bs-toggle="modal" data-bs-target=".subscription-updated" class="btn btn-primary d-inline-block m-1">Update</a>
                                    <a href="#" class="btn btn-blue d-inline-block m-1">Cancel</a>
                                </div>
                            </div>
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