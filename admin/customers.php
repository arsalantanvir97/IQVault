<?php
$title = "Customers Detail";
$pg = "customers";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="customers-detail" class="inquiry-page">
    <div class="content-body bg-white rounded-20 shadow-none p-4 p-lg-5">
        <div class="page-title mb-4">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h2>Customers</h2>
                </div>
                <div class="col-md-6 text-md-end">
                    <button type="button" class="btn btn-login orange-btn" data-bs-toggle="modal"
                        data-bs-target=".new-customer">Add Customer</button>
                </div>
            </div>
        </div>
        <div class="dataTables_wrapper">
            <div class="user-listing-top">
                <div class="row align-items-end d-flex mb-3">
                    <div class="col-12 col-xl-5 col-xxl-4 align-items-start">
                        <div class="dataTables_filter d-flex justify-content-start flex-shrink-1 mt-3">
                            <label for="" class="d-md-inline-block me-2 me-lg-3 my-0 align-self-center flex-shrink-0">Search</label>
                            <div class="filter-wrap d-md-flex d-block flex-xl-column align-items-start align-items-xl-end justify-content-end">
                                <div class="select-wrapper d-block w-auto mb-0 mb-md-0 me-0 me-md-0 me-xl-0">
                                    <select name="" class="form-control shadow-sm" id="">
                                        <option value="">Status</option>
                                        <option value="">Active</option>
                                        <option value="">Expire</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-5 col-xxl-4 align-items-start">
                        <div class="dataTables_filter d-flex justify-content-start flex-shrink-1 mt-3">
                            <label for=""
                                class="d-md-inline-block me-2 me-lg-3 my-0 align-self-center flex-shrink-0">Filter
                                by</label>
                            <div class="d-sm-flex d-block flex-grow-1">
                                <div class="input-wrap me-0 me-sm-2 mb-2 mb-sm-0">
                                    <input type="date" placeholder="From" class="form-control bg-white shadow-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 col-xxl-4 align-items-start">
                        <div class="dataTables_filter d-flex justify-content-start flex-shrink-1 mt-3">
                            <div class="search-wrap flex-grow-1">
                                <input type="search" class="form-control shadow-sm" placeholder="Search">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-tabble table-responsive mx-n2">
                <table class="table dataTable px-2">
                    <thead>
                        <tr>
                            <th class="sorting">S.No</th>
                            <th class="sorting">Full Name</th>
                            <th class="sorting">Email</th>
                            <th class="sorting">Registered On</th>
                            <th class="sorting">Phone</th>
                            <th class="sorting">Status</th>
                            <th class="sorting">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>ADCF</td>
                            <td>abc@example.com</td>
                            <td>03/02/2020</td>
                            <td>1234567890</td>
                            <td class="active-status">Active</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".customer-details"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-toggle-on"></i>Active/Inactive</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".generate-invoice"><i class="fas fa-receipt"></i>Generate
                                            Invoice</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".edit-customer"><i class="fas fa-edit"></i>Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>ADCF</td>
                            <td>abc@example.com</td>
                            <td>03/02/2020</td>
                            <td>1234567890</td>
                            <td class="active-status">Active</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".customer-details"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-toggle-on"></i>Active/Inactive</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".generate-invoice"><i class="fas fa-receipt"></i>Generate
                                            Invoice</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".edit-customer"><i class="fas fa-edit"></i>Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>ADCF</td>
                            <td>abc@example.com</td>
                            <td>03/02/2020</td>
                            <td>1234567890</td>
                            <td class="active-status">Active</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".customer-details"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-toggle-on"></i>Active/Inactive</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".generate-invoice"><i class="fas fa-receipt"></i>Generate
                                            Invoice</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".edit-customer"><i class="fas fa-edit"></i>Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>ADCF</td>
                            <td>abc@example.com</td>
                            <td>03/02/2020</td>
                            <td>1234567890</td>
                            <td class="active-status">Active</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".customer-details"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-toggle-on"></i>Active/Inactive</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".generate-invoice"><i class="fas fa-receipt"></i>Generate
                                            Invoice</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".edit-customer"><i class="fas fa-edit"></i>Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>ADCF</td>
                            <td>abc@example.com</td>
                            <td>03/02/2020</td>
                            <td>1234567890</td>
                            <td class="inactive-status">In-Active</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".customer-details"><i class="fa fa-eye"></i>View</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-toggle-on"></i>Active/Inactive</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".generate-invoice"><i class="fas fa-receipt"></i>Generate
                                            Invoice</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target=".edit-customer"><i class="fas fa-edit"></i>Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="container">
                    <div class="row mt-3">
                        <div class="col-sm-12 col-xxl-12 d-flex justify-content-center justify-content-xxl-center">
                            <div class="dataTables_paginate d-flex align-items-center">
                                <a href="#" class="page-link previous"><i class="fas fa-chevron-circle-left"></i></a>
                                <ul class="pagination">
                                    <!-- <li class="paginate_button page-item previous disabled"></li> -->
                                    <li class="paginate_button page-item active"><a href="#"
                                            class="page-link"><span>1</span></a></li>
                                    <li class="paginate_button page-item"><a href="#"
                                            class="page-link"><span>2</span></a></li>
                                    <li class="paginate_button page-item"><a href="#"
                                            class="page-link"><span>3</span></a></li>
                                    <li class="paginate_button page-item"><a href="#"
                                            class="page-link"><span>4</span></a></li>
                                    <li class="paginate_button page-item"><a href="#"
                                            class="page-link"><span>5</span></a></li>
                                    <li class="paginate_button page-item"><a href="#"
                                            class="page-link"><span>6</span></a></li>
                                    <li class="paginate_button page-item"><a href="#"
                                            class="page-link"><span>7</span></a></li>
                                    <li class="paginate_button page-item"><a href="#"
                                            class="page-link"><span>8</span></a></li>
                                    <!-- <li class="paginate_button page-item next disabled" i=""></li> -->
                                </ul>
                                <a href="#" class="page-link next"><i class="fas fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xxl-12 align-self-center text-center text-xxl-center">
                            <div class="dataTables_info pl-2">Showing 10 of 52 Enteries</div>
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