@extends('layouts.admin')

@section('content')

@include('admin.nav')

<!-- PAGE INNER
            ================================================== -->
            <div class="page-inner">

                <!-- PAGE MAIN WRAPPER
                ================================================== -->
                <div id="main-wrapper">
                    <!-- row -->
                    <div class="row g-3">
                        <div class="col-xl-8 grid-margin">
                            <div class="card card-white mb-3">
                                <div class="card-heading clearfix">
                                    <h4 class="card-title">Product information</h4>
                                </div>
                                <div class="card-body">

                                    <form class="needs-validation" novalidate>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom01">Name</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom02">SKU</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="124617209" value="124617209" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom03">Weight</label>
                                                <input type="text" class="form-control" id="validationCustom03" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom04">Color</label>
                                                <input type="text" class="form-control" id="validationCustom04" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom05">Quantity</label>
                                                <input type="text" class="form-control" id="validationCustom05" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-form-label">Wysiwyg</label>
                                                    <div id="editor">
                                                        <p>Hello World!</p>
                                                        <p>Some initial <strong>bold</strong> text</p>
                                                        <p><br></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="card card-white mb-3">
                                <div class="card-heading clearfix">
                                    <h4 class="card-title">Media</h4>
                                </div>
                                <div class="card-body">

                                    <div class="row grid-margin gallery">
                                        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                                            <div class="card">
                                                <img src="img/media1.jpg" class="card-img-top" alt="...">
                                                <div class="card-body row text-center">
                                                    <div class="col border-end">
                                                        <a href="img/media1.jpg" class="popimg" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                            <i class="far fa-eye text-primary"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                                            <div class="card">
                                                <img src="img/media2.jpg" class="card-img-top" alt="...">
                                                <div class="card-body row text-center">
                                                    <div class="col border-end">
                                                        <a href="img/media2.jpg" class="popimg" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                            <i class="far fa-eye text-primary"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3 mb-4 mb-md-0">
                                            <div class="card">
                                                <img src="img/media3.jpg" class="card-img-top" alt="...">
                                                <div class="card-body row text-center">
                                                    <div class="col border-end">
                                                        <a href="img/media3.jpg" class="popimg" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                            <i class="far fa-eye text-primary"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="card">
                                                <img src="img/media4.jpg" class="card-img-top" alt="...">
                                                <div class="card-body row text-center">
                                                    <div class="col border-end">
                                                        <a href="img/media4.jpg" class="popimg" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                            <i class="far fa-eye text-primary"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                <input class="form-control form-control-lg" id="formFileLg" type="file">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card card-white">
                                <div class="card-heading clearfix">
                                    <h4 class="card-title">Variants</h4>
                                </div>
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-borderless product-table mb-0">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th scope="col">
                                                        <div>
                                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                                        </div>
                                                    </th>
                                                    <th></th>
                                                    <th>Color</th>
                                                    <th>Size</th>
                                                    <th>Stock</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="...">
                                                        </div>
                                                    </td>
                                                    <td class="img">
                                                        <img class="avatar-sm" src="img/variants-01.jpg" alt="...">
                                                    </td>
                                                    <td class="color">
                                                        <input type="text" class="form-control" value="Green">
                                                    </td>
                                                    <td class="size">
                                                        <input type="text" class="form-control" value="16GB">
                                                    </td>
                                                    <td class="stock">
                                                        <div class="row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <span class="me-2">27%</span>
                                                            </div>
                                                            <div class="col">
                                                                <div class="custom-progress bg-blue progress mb-0">
                                                                    <div class="animated custom-bar progress-bar slideInLeft" style="width:27%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="price">
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">USD</div>
                                                            </div>
                                                            <input type="text" class="form-control h-auto" id="inlineFormInputGroupUsername2" placeholder="30.00">
                                                        </div>
                                                    </td>
                                                    <td class="quantity">
                                                        <input id="demo3" type="text" value="0" name="demo3">
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <img class="avatar-sm" src="img/variants-01.jpg" alt="...">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="Green">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="32GB">
                                                    </td>
                                                    <td>
                                                        <div class="row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <span class="me-2">57%</span>
                                                            </div>
                                                            <div class="col">
                                                                <div class="custom-progress bg-orange progress mb-0">
                                                                    <div class="animated custom-bar progress-bar slideInLeft" style="width:57%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">USD</div>
                                                            </div>
                                                            <input type="text" class="form-control h-auto" id="inlineFormInputGroupUsername3" placeholder="40.00">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input id="demo3" type="text" value="0" name="demo3">
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <img class="avatar-sm" src="img/variants-01.jpg" alt="...">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="Green">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="64GB">
                                                    </td>
                                                    <td>
                                                        <div class="row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <span class="me-2">80%</span>
                                                            </div>
                                                            <div class="col">
                                                                <div class="custom-progress bg-green progress mb-0">
                                                                    <div class="animated custom-bar progress-bar slideInLeft" style="width:80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">USD</div>
                                                            </div>
                                                            <input type="text" class="form-control h-auto" id="inlineFormInputGroupUsername4" placeholder="56.00">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input id="demo3" type="text" value="0" name="demo3">
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel4" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <img class="avatar-sm" src="img/variants-01.jpg" alt="...">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="Green">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="128GB">
                                                    </td>
                                                    <td>
                                                        <div class="row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <span class="me-2">64%</span>
                                                            </div>
                                                            <div class="col">
                                                                <div class="custom-progress bg-pink progress mb-0">
                                                                    <div class="animated custom-bar progress-bar slideInLeft" style="width:64%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">USD</div>
                                                            </div>
                                                            <input type="text" class="form-control h-auto" id="inlineFormInputGroupUsername5" placeholder="70.00">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input id="demo3" type="text" value="0" name="demo3">
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel5" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <img class="avatar-sm" src="img/variants-01.jpg" alt="...">
                                                    </td>
                                                    <td class="color">
                                                        <input type="text" class="form-control" value="Black">
                                                    </td>
                                                    <td class="size">
                                                        <input type="text" class="form-control" value="16GB">
                                                    </td>
                                                    <td>
                                                        <div class="row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <span class="me-2">30%</span>
                                                            </div>
                                                            <div class="col">
                                                                <div class="custom-progress bg-blue progress mb-0">
                                                                    <div class="animated custom-bar progress-bar slideInLeft" style="width:30%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">USD</div>
                                                            </div>
                                                            <input type="text" class="form-control h-auto" id="inlineFormInputGroupUsername6" placeholder="30.00">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input id="demo3" type="text" value="0" name="demo3">
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel6" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <img class="avatar-sm" src="img/variants-01.jpg" alt="...">
                                                    </td>
                                                    <td class="color">
                                                        <input type="text" class="form-control" value="Black">
                                                    </td>
                                                    <td class="size">
                                                        <input type="text" class="form-control" value="32GB">
                                                    </td>
                                                    <td>
                                                        <div class="row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <span class="me-2">46%</span>
                                                            </div>
                                                            <div class="col">
                                                                <div class="custom-progress bg-orange progress mb-0">
                                                                    <div class="animated custom-bar progress-bar slideInLeft" style="width:46%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">USD</div>
                                                            </div>
                                                            <input type="text" class="form-control h-auto" id="inlineFormInputGroupUsername7" placeholder="40.00">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input id="demo3" type="text" value="0" name="demo3">
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel7" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <img class="avatar-sm" src="img/variants-01.jpg" alt="...">
                                                    </td>
                                                    <td class="color">
                                                        <input type="text" class="form-control" value="Black">
                                                    </td>
                                                    <td class="size">
                                                        <input type="text" class="form-control" value="64GB">
                                                    </td>
                                                    <td>
                                                        <div class="row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <span class="me-2">60%</span>
                                                            </div>
                                                            <div class="col">
                                                                <div class="custom-progress bg-green progress mb-0">
                                                                    <div class="animated custom-bar progress-bar slideInLeft" style="width:60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">USD</div>
                                                            </div>
                                                            <input type="text" class="form-control h-auto" id="inlineFormInputGroupUsername8" placeholder="56.00">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input id="demo3" type="text" value="0" name="demo3">
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel8" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <img class="avatar-sm" src="img/variants-01.jpg" alt="...">
                                                    </td>
                                                    <td class="color">
                                                        <input type="text" class="form-control" value="Black">
                                                    </td>
                                                    <td class="size">
                                                        <input type="text" class="form-control" value="128GB">
                                                    </td>
                                                    <td>
                                                        <div class="row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <span class="me-2">80%</span>
                                                            </div>
                                                            <div class="col">
                                                                <div class="custom-progress bg-pink progress mb-0">
                                                                    <div class="animated custom-bar progress-bar slideInLeft" style="width:80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">USD</div>
                                                            </div>
                                                            <input type="text" class="form-control h-auto" id="inlineFormInputGroupUsername9" placeholder="70.00">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input id="demo3" type="text" value="0" name="demo3">
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel9" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <img class="avatar-sm" src="img/variants-01.jpg" alt="...">
                                                    </td>
                                                    <td class="color">
                                                        <input type="text" class="form-control" value="Blue">
                                                    </td>
                                                    <td class="size">
                                                        <input type="text" class="form-control" value="16GB">
                                                    </td>
                                                    <td>
                                                        <div class="row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <span class="me-2">27%</span>
                                                            </div>
                                                            <div class="col">
                                                                <div class="custom-progress bg-blue progress mb-0">
                                                                    <div class="animated custom-bar progress-bar slideInLeft" style="width:27%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">USD</div>
                                                            </div>
                                                            <input type="text" class="form-control h-auto" id="inlineFormInputGroupUsername10" placeholder="30.00">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input id="demo3" type="text" value="0" name="demo3">
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel10" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <img class="avatar-sm" src="img/variants-01.jpg" alt="...">
                                                    </td>
                                                    <td class="color">
                                                        <input type="text" class="form-control" value="Blue">
                                                    </td>
                                                    <td class="size">
                                                        <input type="text" class="form-control" value="32GB">
                                                    </td>
                                                    <td>
                                                        <div class="row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <span class="me-2">47%</span>
                                                            </div>
                                                            <div class="col">
                                                                <div class="custom-progress bg-orange progress mb-0">
                                                                    <div class="animated custom-bar progress-bar slideInLeft" style="width:47%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">USD</div>
                                                            </div>
                                                            <input type="text" class="form-control h-auto" id="inlineFormInputGroupUsername11" placeholder="40.00">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input id="demo3" type="text" value="0" name="demo3">
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel11" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <img class="avatar-sm" src="img/variants-01.jpg" alt="...">
                                                    </td>
                                                    <td class="color">
                                                        <input type="text" class="form-control" value="Blue">
                                                    </td>
                                                    <td class="size">
                                                        <input type="text" class="form-control" value="64GB">
                                                    </td>
                                                    <td>
                                                        <div class="row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <span class="me-2">10%</span>
                                                            </div>
                                                            <div class="col">
                                                                <div class="custom-progress bg-green progress mb-0">
                                                                    <div class="animated custom-bar progress-bar slideInLeft" style="width:10%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">USD</div>
                                                            </div>
                                                            <input type="text" class="form-control h-auto" id="inlineFormInputGroupUsername12" placeholder="56.00">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input id="demo3" type="text" value="0" name="demo3">
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel12" value="" aria-label="...">
                                                    </td>
                                                    <td>
                                                        <img class="avatar-sm" src="img/variants-01.jpg" alt="...">
                                                    </td>
                                                    <td class="color">
                                                        <input type="text" class="form-control" value="Blue">
                                                    </td>
                                                    <td class="size">
                                                        <input type="text" class="form-control" value="128GB">
                                                    </td>
                                                    <td>
                                                        <div class="row align-items-center g-0">
                                                            <div class="col-auto">
                                                                <span class="me-2">67%</span>
                                                            </div>
                                                            <div class="col">
                                                                <div class="custom-progress bg-blue progress mb-0">
                                                                    <div class="animated custom-bar progress-bar slideInLeft" style="width:67%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">USD</div>
                                                            </div>
                                                            <input type="text" class="form-control h-auto" id="inlineFormInputGroupUsername13" placeholder="70.00">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input id="demo3" type="text" value="0" name="demo3">
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 grid-margin">
                            <div class="card card-white mb-3">
                                <div class="card-heading clearfix">
                                    <h4 class="card-title">Pricing</h4>
                                </div>
                                <div class="card-body">
                                    <div class="border-bottom pb-4 mb-4">
                                        <form class="mb-4">
                                            <label for="validationCustom07">Price</label>
                                            <input type="text" class="form-control" id="validationCustom07" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </form>
                                        <div class="mb-2">
                                            <a class="d-inline-block" href="#">
                                                <i class="fas fa-star text-warning me-1"></i> Set "Compare to" price
                                            </a>
                                        </div>
                                        <a class="d-inline-block" href="#">
                                            <i class="fas fa-star text-warning me-1"></i> Bulk discount pricing
                                        </a>
                                    </div>
                                    <form>
                                        <div>
                                            <span class="settings-option">Availability </span>
                                            <input type="checkbox" class="js-switch" checked />
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card card-white">
                                <div class="card-heading clearfix">
                                    <h4 class="card-title">Organization</h4>
                                </div>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate>
                                        <div class="row">
                                            <div class="col-md-12 mb-4">
                                                <label for="validationCustom08">Vendor</label>
                                                <input type="text" class="form-control" id="validationCustom08" placeholder="Adidas" value="Adidas" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-4">
                                                <label for="validationCustom09">Category</label>
                                                <select class="form-select form-control" id="validationCustom09" aria-label="Default select example">
                                                    <option selected>Clothing</option>
                                                    <option value="1">Shoes</option>
                                                    <option value="2">Electronics</option>
                                                    <option value="3">Furniture</option>
                                                    <option value="4">Others</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-4">
                                                <label for="validationCustom10">Collections</label>
                                                <select class="form-select form-control" id="validationCustom10" aria-label="Default select example">
                                                    <option selected>Summer</option>
                                                    <option value="1">Winter</option>
                                                    <option value="2">Spring</option>
                                                    <option value="3">Autumn</option>
                                                </select>
                                                <small class="form-text text-muted">
                                                    Add this product to a collection so it’s easy to find in your store.
                                                </small>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-sm-2 col-form-label">Tags</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="White,Black,Yellow,Red" data-role="tagsinput" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
    
@endsection