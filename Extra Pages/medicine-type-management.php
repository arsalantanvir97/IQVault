<?php
$title = "Medicine Type Management";
$pg = "medicine-type-management";
include('../include/header.php');
?>

        <!-- Basic form layout section start -->
        <section id="medicine_manage" class="medicine-manage-page">
            <div class="page-title mb-4">
                <div class="row">
                    <div class="col-12">
                        <h2>Medicine Type Management</h2>
                    </div>
                </div>
            </div>
            <div class="content-body bg-white rounded-10 shadow-sm p-4 p-lg-5">
                <div class="user-listing-top">
                    <div class="row align-items-end d-flex mb-3">
                        <div class="col-12 col-md-7 col-lg-7 col-xxl-4 mb-2 mb-md-0">
                            <div class="page-title">
                                <h3 class="fw-medium mb-3 mb-lg-5"> Add New Medicine Type</h3>
                            </div>
                            <form action="">
                                <div class="row form-group">
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Medicine Type title here*">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Potency/Volume">
                                    </div>
                                </div>
                                <div class="row detail-row">
                                    <div class="col-12">
                                        <a href="#" class="btn btn-secondary  px-5">Publish</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="dataTables_wrapper">
                    <div class="main-tabble table-responsive mx-n2">

                        <table class="table table-borderless dataTable px-2">
                            <thead>
                                <tr>
                                    <th class="sorting">Sr. No.</th>
                                    <th class="sorting">Medicine Type</th>
                                    <th class="sorting">Potency/Volume</th>
                                    <th class="sorting">Status</th>
                                    <th class="sorting">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tablet</td>
                                    <td>10mg</td>
                                    <td>Active</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="medicine-type-management-edit.php"><i class="fa fa-edit"></i>Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".medicine-inactive"><i class="fa fa-ban"></i>Inactive</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Capsule</td>
                                    <td>200mg</td>
                                    <td>Inactive</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="medicine-type-management-edit.php"><i class="fa fa-edit"></i>Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".medicine-active"><i class="fa fa-ban"></i>Active</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Syrup</td>
                                    <td>100ml</td>
                                    <td>Active</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="medicine-type-management-edit.php"><i class="fa fa-edit"></i>Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".medicine-inactive"><i class="fa fa-ban"></i>Inactive</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Drops</td>
                                    <td>50 ml</td>
                                    <td>Inactive</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="medicine-type-management-edit.php"><i class="fa fa-edit"></i>Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".medicine-active"><i class="fa fa-ban"></i>Active</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Inhaler</td>
                                    <td>10mg</td>
                                    <td>Active</td>
                                    <td>
                                        <div class="btn-group ml-1">
                                            <button type="button" class="btn dropdown-toggle btn-sm" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="medicine-type-management-edit.php"><i class="fa fa-edit"></i>Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".medicine-inactive"><i class="fa fa-ban"></i>Inactive</a>
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