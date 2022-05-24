<?php
$title = "Users Detail";
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
                        <h2><a href="users.php"><i class="fa fa-chevron-left"></i></a>View User Profile</h2>
                    </div>
                </div>
            </div>
            <div class="content-body bg-white rounded-10 shadow-sm p-4 p-lg-5 position-relative">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 align-self-center">
                            <h3 class="fw-medium mb-3 mb-lg-5">Profile Details</h3>
                        </div>
                    </div>
                </div>
                <div class="detail-block mb-0 pb-0">
                    <div class="row">
                        <div class="col-12 col-xl-10">
                            <div class="media d-md-flex d-block">
                                <div class="media-left text-center flex-shrink-0 mb-5 mb-lg-0 position-right">
                                    <div class="profile-img text-center m-auto position-relative">
                                        <img src="../images/profile-avatar.png" class="img-fluid ml-0" alt="">
                                    </div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".inactive-user" class="btn btn-secondary px-4 mt-3">Mark as Inactive</a>
                                    <div class="status fw-light my-4 p-0 d-block">Status: <span class="fw-medium">ACTIVE</span></div>
                                    <button class="btn btn-outline-primary px-5">Status:</button>
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
                                            <label for="">Gender</label>
                                        </div>
                                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                            <p>Male</p>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mb-lg-5">
                                        <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                            <label for="">Location:</label>
                                        </div>
                                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                            <p>ABC Location, Town, City, Country</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logs-tabs">
                    <ul class="nav nav-pills flex-column flex-sm-row mb-0" id="logs-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active w-100" id="pills-medicine-tab" data-bs-toggle="pill" data-bs-target="#pills-medicine" type="button" role="tab" aria-controls="pills-medicine" aria-selected="false">Medicine Log</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link w-100" id="pills-appointment-tab" data-bs-toggle="pill" data-bs-target="#pills-appointment" type="button" role="tab" aria-controls="pills-appointment" aria-selected="true">Appointment Log</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-medicine" role="tabpanel" aria-labelledby="pills-medicine-tab">
                            <div class="dataTables_wrapper pl-0 pr-0">
                                <div class="user-listing-top">
                                    <div class="row align-items-end d-flex mt-3">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-6 col-xxl-8 mb-0 mb-xl-0">
                                            <div class="filter-wrap d-md-flex d-block">
                                                <div class="select-wrapper d-block w-auto">
                                                    <select name="" class="form-control" id="">
                                                        <option value="">Medicine Type</option>
                                                        <option value="">Tablet</option>
                                                        <option value="">Capsule</option>
                                                        <option value="">Syrup</option>
                                                        <option value="">Drops</option>
                                                        <option value="">Inhaler</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-8 col-lg-8 col-xl-6 col-xxl-4 mt-3 mt-lg-0">
                                            <div class="dataTables_filter d-flex justify-content-start flex-shrink-1">
                                                <label for="" class="d-none d-md-inline-block me-2 me-lg-3 my-0 align-self-center flex-shrink-0">Search</label>
                                                <div class="search-wrap flex-grow-1">
                                                    <input type="search" class="form-control" placeholder="Search">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="main-tabble table-responsive mx-n2">
                                    <table class="table table-borderless dataTable px-2">
                                        <thead>
                                            <tr>
                                                <th class="sorting">S. No.</th>
                                                <th class="sorting">Medicine Name</th>
                                                <th class="sorting">Color</th>
                                                <th class="sorting">Potency/Volume</th>
                                                <th class="sorting">Medicine Type</th>
                                                <th class="sorting">Created by</th>
                                                <th class="sorting">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Product Abc</td>
                                                <td>Red</td>
                                                <td>200 mg</td>
                                                <td>Tablet</td>
                                                <td>Tom</td>
                                                <td>
                                                    <div class="btn-group ml-1">
                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="users-medicine-details.php"><i class="fa fa-eye"></i>view</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>Product Abc</td>
                                                <td>Red</td>
                                                <td>200 mg</td>
                                                <td>Capsule</td>
                                                <td>Tom</td>
                                                <td>
                                                    <div class="btn-group ml-1">
                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="users-medicine-details.php"><i class="fa fa-eye"></i>view</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>03</td>
                                                <td>Product Abc</td>
                                                <td>Red</td>
                                                <td>200 mg</td>
                                                <td>Syrup</td>
                                                <td>Tom</td>
                                                <td>
                                                    <div class="btn-group ml-1">
                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="users-medicine-details.php"><i class="fa fa-eye"></i>view</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>04</td>
                                                <td>Product Abc</td>
                                                <td>Red</td>
                                                <td>200 mg</td>
                                                <td>Drops</td>
                                                <td>Tom</td>
                                                <td>
                                                    <div class="btn-group ml-1">
                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="users-medicine-details.php"><i class="fa fa-eye"></i>view</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>05</td>
                                                <td>Product Abc</td>
                                                <td>Red</td>
                                                <td>200 mg</td>
                                                <td>Inhaler</td>
                                                <td>Tom</td>
                                                <td>
                                                    <div class="btn-group ml-1">
                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="users-medicine-details.php"><i class="fa fa-eye"></i>view</a>
                                                        </div>
                                                    </div>
                                                </td>
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
                        <div class="tab-pane fade" id="pills-appointment" role="tabpanel" aria-labelledby="pills-appointment-tab">
                            <div class="dataTables_wrapper pl-0 pr-0">
                                <div class="user-listing-top">
                                    <div class="row mb-2 justify-content-end">
                                        <div class="col-12 col-md-8 col-lg-8 col-xl-6 col-xxl-4 mt-3 mt-lg-0">
                                            <div class="dataTables_filter d-flex justify-content-start flex-shrink-1">
                                                <label for="" class="d-none d-md-inline-block me-2 me-lg-3 my-0 align-self-center flex-shrink-0">Search</label>
                                                <div class="search-wrap flex-grow-1">
                                                    <input type="search" class="form-control" placeholder="Search">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-end d-flex mb-3">
                                        <div class="col-12 col-md-8 col-xl-9 col-xxl-8 mt-md-0 d-lg-flex d-block align-items-end sort-datepicker flex-wrap flex-xl-nowrap">
                                            <label class="me-3 flex-shrink-0 pb-2 pb-md-0">Sort by:</label>
                                            <div class="d-sm-flex d-block">
                                                <div class="input-wrap me-0 me-sm-3 mb-2 mb-sm-0">
                                                    <label for="">From</label>
                                                    <input type="date" placeholder="From" class="form-control">
                                                </div>
                                                <div class="input-wrap">
                                                    <label for="">To</label>
                                                    <input type="date" placeholder="To" class="form-control">
                                                </div>
                                            </div>
                                            <div class="dataTables_length ms-0 ms-xl-4 flex-shrink-0 mt-4 mt-xl-0">
                                                <label class="d-inline-block me-2 ">Show</label>
                                                <div class="select-wrapper d-inline-block w-auto">
                                                    <select class="form-control d-inline-block">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-xl-3 col-xxl-4 mb-0 mb-lg-0 d-block d-md-flex justify-content-end">
                                            <div class="filter-wrap d-md-flex d-block flex-column align-items-end">
                                                <div class="select-wrapper d-block w-auto me-0 mb-3 mb-md-3">
                                                    <select name="" class="form-control" id="">
                                                        <option value="">Choose Status</option>
                                                        <option value="">Upcoming</option>
                                                        <option value="">Canceled</option>
                                                        <option value="">Completed</option>
                                                        <option value="">Pending</option>
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
                                                <th class="sorting">S. No.</th>
                                                <th class="sorting">Day to visit</th>
                                                <th class="sorting">Title</th>
                                                <th class="sorting">Doctor's Name</th>
                                                <th class="sorting">Category</th>
                                                <th class="sorting">Clinic/Hospital Name</th>
                                                <th class="sorting">Contact Number</th>
                                                <th class="sorting">Email</th>
                                                <th class="sorting">Status</th>
                                                <th class="sorting">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>19 Oct, 2021</td>
                                                <td>Title</td>
                                                <td>John Doe</td>
                                                <td>Gynecologists</td>
                                                <td>Healthcare Hospital</td>
                                                <td>111-111-111</td>
                                                <td>test@example.com</td>
                                                <td>Upcoming</td>
                                                <td>
                                                    <div class="btn-group ms-3">
                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="user-details-patient-upcoming.php"><i class="fa fa-eye"></i>view</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>19 Oct, 2021</td>
                                                <td>Title</td>
                                                <td>John Doe</td>
                                                <td>Gynecologists</td>
                                                <td>Healthcare Hospital</td>
                                                <td>111-111-111</td>
                                                <td>test@example.com</td>
                                                <td>Pending</td>
                                                <td>
                                                    <div class="btn-group ms-3">
                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="user-details-patient-pending.php"><i class="fa fa-eye"></i>view</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>03</td>
                                                <td>19 Oct, 2021</td>
                                                <td>Title</td>
                                                <td>John Doe</td>
                                                <td>Gynecologists</td>
                                                <td>Healthcare Hospital</td>
                                                <td>111-111-111</td>
                                                <td>test@example.com</td>
                                                <td>Canceled</td>
                                                <td>
                                                    <div class="btn-group ms-3">
                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="user-details-patient-canceled.php"><i class="fa fa-eye"></i>view</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>04</td>
                                                <td>19 Oct, 2021</td>
                                                <td>Title</td>
                                                <td>John Doe</td>
                                                <td>Gynecologists</td>
                                                <td>Healthcare Hospital</td>
                                                <td>111-111-111</td>
                                                <td>test@example.com</td>
                                                <td>Completed</td>
                                                <td>
                                                    <div class="btn-group ms-3">
                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="user-details-patient-completed.php"><i class="fa fa-eye"></i>view</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>05</td>
                                                <td>19 Oct, 2021</td>
                                                <td>Title</td>
                                                <td>John Doe</td>
                                                <td>Gynecologists</td>
                                                <td>Healthcare Hospital</td>
                                                <td>111-111-111</td>
                                                <td>test@example.com</td>
                                                <td>Completed</td>
                                                <td>
                                                    <div class="btn-group ms-3">
                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="user-details-patient-completed.php"><i class="fa fa-eye"></i>view</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
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
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php
include('footer.php');
?>