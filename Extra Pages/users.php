<?php
$title = "Users";
$pg = "users";
include('../include/header.php');
?>

<section id="user_page" class="user-page">
    <div class="page-title mb-4">
        <div class="row">
            <div class="col-12">
                <h2>Users</h2>
            </div>
        </div>
    </div>
    <div class="content-body bg-white rounded-10 shadow-sm p-4 p-lg-5">
        <div class="dataTables_wrapper">
            <div class="user-listing-top">
                <div class="row align-items-end d-flex mb-3">
                    <div class="col-12 col-lg-12 col-xxl-8 mb-2 mb-md-0">
                        <label class="fw-regular">Filters</label>
                        <div class="filter-wrap user-filter d-md-flex d-block">
                            <div class="select-wrapper d-block w-auto">
                                <select name="" class="form-control" id="">
                                    <option value="">Select User Type</option>
                                    <option value="">Free User</option>
                                    <option value="">Subscriber</option>
                                </select>
                            </div>
                            <div class="select-wrapper d-block w-auto my-3 my-md-0 mx-md-3">
                                <select name="" class="form-control" id="">
                                    <option value="">Select Status</option>
                                    <option value="">Active</option>
                                    <option value="">Inactive</option>
                                </select>
                            </div>
                            <div class="select-wrapper d-block w-auto">
                                <select name="" class="form-control" id="">
                                    <option value="">Signed Up Type</option>
                                    <option value="">Patient</option>
                                    <option value="">Attendee</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xxl-12 mt-3 d-xl-flex d-block justify-content-start justify-content-lg-end align-items-center order-md-2">
                        <div class="user-record-lenght">
                            <div class="select-wrapper d-block d-inline-md-block">
                                <select class="form-control d-inline-block">
                                    <option value="10">Records Per Page</option>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xxl-4 text-start mt-3 mt-xxl-0 order-md-1">
                        <div class="dataTables_filter d-flex justify-content-start flex-shrink-1">
                            <label for="" class="d-none d-md-inline-block me-2 me-lg-3 my-0 align-self-center flex-shrink-0">Search</label>
                            <div class="search-wrap flex-grow-1">
                                <input type="search" class="form-control" placeholder="Search">
                            </div>
                        </div>
                        <!-- <button type="button" class="btn btn-blue px-5">Filter</button>
                                <button type="button" class="btn btn-secondary px-5">Reset</button> -->
                    </div>

                </div>
                <div class="row">
                    <!-- <div class="col-12 col-lg-6 col-xl-6 mt-2 mt-lg-0 align-self-center">
                                <div class="dataTables_filter">
                                    <div class="search-wrap">
                                        <input type="search" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                            </div> -->
                </div>
            </div>
            <div class="main-tabble table-responsive mx-n2">
                <table class="table table-borderless dataTable px-2">
                    <thead>
                        <tr>
                            <th class="sorting">First Name</th>
                            <th class="sorting">Last Name</th>
                            <th class="sorting">Email</th>
                            <th class="sorting">User Type</th>
                            <th class="sorting">Status</th>
                            <th class="sorting">Signup Type</th>
                            <th class="sorting">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>Carson</td>
                            <td>test@testing.com</td>
                            <td>Free User</td>
                            <td>Active</td>
                            <td>Patient</td>
                            <td>
                                <div class="btn-group ml-1">


                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-patient-profile.php"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="#_" data-bs-toggle="modal" data-bs-target=".inactive-user"><i class="fa fa-ban"></i>Inactive</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Carson</td>
                            <td>test@testing.com</td>
                            <td>Subscriber</td>
                            <td>Inactive</td>
                            <td>Attendee</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="user-details-patient.php"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="#_" data-bs-toggle="modal" data-bs-target=".active-user"><i class="fa fa-ban"></i>Active</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Carson</td>
                            <td>test@testing.com</td>
                            <td>Free User</td>
                            <td>Active</td>
                            <td>Patient</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-patient-profile.php"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="#_" data-bs-toggle="modal" data-bs-target=".inactive-user"><i class="fa fa-ban"></i>Inactive</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Carson</td>
                            <td>test@testing.com</td>
                            <td>Subscriber</td>
                            <td>Inactive</td>
                            <td>Attendee</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="user-details-patient.php"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="#_" data-bs-toggle="modal" data-bs-target=".active-user"><i class="fa fa-ban"></i>Active</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Carson</td>
                            <td>test@testing.com</td>
                            <td>Free User</td>
                            <td>Active</td>
                            <td>Patient</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="view-patient-profile.php"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="#_" data-bs-toggle="modal" data-bs-target=".inactive-user"><i class="fa fa-ban"></i>Inactive</a>
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
</section>
<?php
include('../include/footer.php');
?>