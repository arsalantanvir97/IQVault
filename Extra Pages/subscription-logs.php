<?php
$title = "Subscription Logs";
$pg = "subscription-logs";
include('../include/header.php');
?>



        <!-- Basic form layout section start -->
        <section id="subscription_manage" class="subscription-page">
            <div class="page-title mb-4">
                <div class="row">
                    <div class="col-12">
                        <h2>Subscription Logs</h2>
                    </div>
                </div>
            </div>
            <div class="content-body bg-white rounded-10 shadow-sm p-4 p-lg-5">
                <div class="dataTables_wrapper">
                    <div class="user-listing-top">
                        <div class="row align-items-end d-flex mb-3">
                            <div class="col-12 col-xl-7 col-xxl-8 mt-md-0 sort-datepicker d-block d-lg-flex align-items-end mb-3 mb-xl-0">
                                <label class="me-2 mb-0 pb-1 mb-lg-2 d-block flex-shrink-0">Sort By</label>
                                <div class="d-sm-flex d-block flex-grow-1">
                                    <div class="input-wrap me-0 me-sm-2 mb-2 mb-sm-0">
                                        <label for="" class="fw-regular">From</label>
                                        <input type="date" placeholder="From" class="form-control">
                                    </div>
                                    <div class="input-wrap">
                                        <label for="" class="fw-regular">To</label>
                                        <input type="date" placeholder="To" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-5 col-xxl-4 align-items-center">
                                <div class="dataTables_filter d-flex justify-content-start flex-shrink-1">
                                    <label for="" class="d-none d-md-inline-block me-2 me-lg-3 my-0 align-self-center flex-shrink-0">Search</label>
                                    <div class="search-wrap flex-grow-1">
                                        <input type="search" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mt-2 mt-md-0 align-self-xl-end">
                                <div class="dataTables_length order_select d-block d-md-flex align-items-center">
                                    <label class="d-inline-md-block d-block me-4">Show</label>
                                    <div class="d-block d-md-flex">
                                        <div class="select-wrapper  d-block d-inline-md-block w-auto">
                                            <select class="form-control d-inline-block">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-2 mt-md-0">
                                <div class="filter-wrap d-md-flex d-block flex-xl-column align-items-start align-items-xl-end justify-content-end">
                                    <div class="select-wrapper d-block w-auto mb-0 mb-md-0 me-0 me-md-0 me-xl-0">
                                        <select name="" class="form-control" id="">
                                            <option value="">Choose Status</option>
                                            <option value="">Active</option>
                                            <option value="">Expire</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main-tabble table-responsive mx-n2">
                        <table class="table table-borderless dataTable px-2">
                            <thead>
                                <tr>
                                    <th class="sorting">Sr. No.</th>
                                    <th class="sorting">Username</th>
                                    <th class="sorting">Customer Email</th>
                                    <th class="sorting">start Date</th>
                                    <th class="sorting">Expiry Date</th>
                                    <th class="sorting">Subscription Plan</th>
                                    <th class="sorting">Amount Paid</th>
                                    <th class="sorting">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>test@testing.com</td>
                                    <td>Sept 14, 2021</td>
                                    <td>Sept 14, 2021</td>
                                    <td>Yearly</td>
                                    <td>AED 150</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>John Doe</td>
                                    <td>test@testing.com</td>
                                    <td>Sept 14, 2021</td>
                                    <td>Sept 14, 2021</td>
                                    <td>Yearly</td>
                                    <td>AED 150</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>John Doe</td>
                                    <td>test@testing.com</td>
                                    <td>Sept 14, 2021</td>
                                    <td>Sept 14, 2021</td>
                                    <td>Yearly</td>
                                    <td>AED 150</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>John Doe</td>
                                    <td>test@testing.com</td>
                                    <td>Sept 14, 2021</td>
                                    <td>Sept 14, 2021</td>
                                    <td>Yearly</td>
                                    <td>AED 150</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>John Doe</td>
                                    <td>test@testing.com</td>
                                    <td>Sept 14, 2021</td>
                                    <td>Sept 14, 2021</td>
                                    <td>Yearly</td>
                                    <td>AED 150</td>
                                    <td>Active</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12 col-xxl-5 align-self-center text-center text-xxl-start">
                            <div class="dataTables_info pl-2">Showing 10 out of 40 records</div>
                        </div>
                        <div class="col-sm-12 col-xxl-7 d-flex justify-content-center justify-content-xxl-end">
                            <div class="dataTables_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"><a href="#" class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="paginate_button page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="paginate_button page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="paginate_button page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="paginate_button page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="paginate_button page-item next disabled" i=""><a href="#" class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php
include('../include/footer.php');
?>