<?php
$title = "Subscriptions Plans";
$pg = "subscription-plans";
include('../include/header.php');

?>


        <!-- Basic form layout section start -->
        <section id="subscription_plans_manage" class="subscription-plans-page">
            <div class="page-title mb-4">
                <div class="row">
                    <div class="col-12">
                        <h2>Subscription Plans</h2>
                    </div>
                </div>
            </div>
            <div class="content-body bg-white rounded-10 shadow-none p-4 p-lg-5">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xxl-4">
                        <div class="card subscriber-card rounded-10">
                            <div class="card-header px-4 bg-transparent text-center subscriber-avatar">
                                <h3 class="text-uppercase text-white">Premium Plan</h3>
                                <h4 class="text-uppercase text-white">Billed Annually</h4>
                            </div>
                            <div class="card-body py-0 px-4 px-lg-4 px-xxl-5">
                                <h4 class="card-title text-center mt-4 mb-4">AED 25</h4>
                                <ul class="p-0 m-0 subs-list">
                                    <li><i class="fa fa-check-circle"></i> PRO badge</li>
                                    <li><i class="fa fa-check-circle"></i> Dark Mode</li>
                                    <li><i class="fa fa-check-circle"></i> Ads free</li>
                                    <li><i class="fa fa-check-circle"></i> Data export to excel, word, pdf formats.</li>
                                </ul>

                            </div>
                            <div class="card-footer border-0 bg-transparent text-center">
                                <div class="d-block">
                                    <a href="subscription-plans-edit.php" class="btn btn-primary d-inline-block">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xxl-4">
                        <div class="card subscriber-card rounded-10">
                            <div class="card-header px-4 bg-transparent text-center subscriber-avatar">
                                <h3 class="text-uppercase text-white">Premium Plan</h3>
                                <h4 class="text-uppercase text-white">Billed Annually</h4>
                            </div>
                            <div class="card-body py-0 px-4 px-lg-4 px-xxl-5">
                                <h4 class="card-title text-center mt-4 mb-4">AED 25</h4>
                                <ul class="p-0 m-0 subs-list">
                                    <li><i class="fa fa-check-circle"></i> PRO badge</li>
                                    <li><i class="fa fa-check-circle"></i> Dark Mode</li>
                                    <li><i class="fa fa-check-circle"></i> Ads free</li>
                                    <li><i class="fa fa-check-circle"></i> Data export to excel, word, pdf formats.</li>
                                </ul>

                            </div>
                            <div class="card-footer border-0 bg-transparent text-center">
                                <div class="d-block">
                                    <a href="user-subscriptions-channel.php" class="btn btn-primary d-inline-block">Edit</a>
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