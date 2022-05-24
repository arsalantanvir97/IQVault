<?php
$title = "Dashboard";
$pg = "Dashboard";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="dashboard" class="dashboard">
    <div class="row">
        <div class="col-12">
            <div class="card bg-transparent shadow-none mb-0">
                <div class="card-body p-md-2 p-lg-2">
                    <div class="card-dashboard mt-2 mt-md-3 mb-0 mb-md-3">
                        <div class="row d-flex justify-content-center">
                            <div class="col-12 col-md-12 col-lg-10 col-xl-10 col-xxl-8">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6 mb-2">
                                        <div class="card text-center">
                                            <div class="card-title green-title pt-4">
                                                <img src="../assets/images/invoice.png" alt="">
                                            </div>
                                            <div class="card-body py-1">
                                                <div class="media align-items-center d-flex w-100">
                                                    <div class="media-body text-left flex-grow-1">
                                                        <h6 class="text-uppercase fw-700 fc-gray fs-20">Invoices</h6>
                                                        <h3>56</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 mb-2">
                                        <div class="card text-center">
                                            <div class="card-title purple-title pt-4">
                                                <img src="../assets/images/group.png" alt="">
                                            </div>
                                            <div class="card-body py-1">
                                                <div class="media align-items-center d-flex w-100">
                                                    <div class="media-body text-left flex-grow-1">
                                                        <h6 class="text-uppercase fw-700 fc-gray fs-20">Customers</h6>
                                                        <h3>224</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card d-block card-chart border-none bg-white rounded-10 p-5 align-items-center">
                                <div class="card-header bg-transparent border-0 p-0 text-center">
                                    <h3 class="fw-bold mb-3">Performance</h3>
                                    <div class="">
                                        <div class="select-wrapper mt-1 mt-sm-0 me-2">
                                            <select name="" id="" class="form-control">
                                                <option value="">1 Month</option>
                                                <option value="">2 Month</option>
                                                <option value="">3 Month</option>
                                                <option value="">4 Month</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-0 pb-0">
                                    <div class="chartbox position-relative text-center">
                                        <img src="../assets/images/performance-chart.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card d-block card-chart border-none bg-white rounded-10 p-5 align-items-center">
                                <div class="card-header bg-transparent border-0 p-0 text-center">
                                    <h3 class="fw-bold mb-3">Projects Posted</h3>
                                    <div class="">
                                        <div class="select-wrapper mt-1 mt-sm-0 me-2">
                                            <select name="" id="" class="form-control">
                                                <option value="">Monthly</option>
                                                <option value="">Jan</option>
                                                <option value="">Feb</option>
                                                <option value="">Mar</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-5 pb-0">
                                    <div class="chartbox position-relative text-center">
                                        <img src="../assets/images/chart.png" alt="">
                                        <!-- <h4 class="fw-bold rotate">Amount (in AED)</h4>
                                        <h4 class="fw-bold mt-2">Duration</h4> -->
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