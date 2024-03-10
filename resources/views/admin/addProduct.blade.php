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
                    <div class="row g-xl-3">
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
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="name" required>
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

                                    <form>
                                        <label for="validationCustom06">options</label>
                                        <select class="form-select form-control" id="validationCustom06" aria-label="Default select example">
                                            <option selected>Title</option>
                                            <option value="1">Color</option>
                                            <option value="2">Material</option>
                                            <option value="3">Style</option>
                                        </select>
                                    </form>

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