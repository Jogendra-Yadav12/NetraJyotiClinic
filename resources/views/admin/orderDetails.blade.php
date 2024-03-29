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
                        <div class="col-xl-4 grid-margin">
                            <div class="card card-white h-100">
                                <div class="card-heading clearfix">
                                    <h4 class="card-title">General</h4>
                                </div>
                                <div class="card-body">

                                    <form class="needs-validation" novalidate>
                                        <div class="row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-group">
                                                    <label for="validationCustom01">Status</label>
                                                    <select class="form-select form-control" id="validationCustom01" aria-label="Default select example">
                                                        <option selected>Pending Payment</option>
                                                        <option value="1">Processing</option>
                                                        <option value="2">Completed</option>
                                                        <option value="3">Cancelled </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <div class="form-group">
                                                    <label>Date Created</label>
                                                    <div>
                                                        <input type="text" class="form-control date-picker">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="validationCustom02">Billing Name</label>
                                                <input type="text" class="form-control" id="validationCustom02">
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 grid-margin">
                            <div class="card card-white h-100">
                                <div class="card-heading clearfix">
                                    <h4 class="card-title">Addresses</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-auto me-xl-5 pe-xl-5 mb-4 mb-xl-0">
                                            <h6 class="text-uppercase fw-bold mb-3">billing</h6>
                                            <ul class="list-unstyled ps-0">
                                                <li>Street Name Example</li>
                                                <li>2233</li>
                                                <li>Detroit</li>
                                                <li>Michigan</li>
                                                <li>56218</li>
                                                <li>UK</li>
                                            </ul>
                                            <strong class="d-block">Email address:</strong>
                                            <a href="#">name@domain.com</a>
                                            <strong class="d-block mt-3">Phone:</strong>
                                            <a href="#">1234-5678</a>
                                        </div>
                                        <div class="col-lg-auto ps-xl-5">
                                            <h6 class="fw-bold text-uppercase mb-3">shipping</h6>
                                            <ul class="list-unstyled ps-0">
                                                <li>Street Name Example</li>
                                                <li>2233</li>
                                                <li>Detroit</li>
                                                <li>Michigan</li>
                                                <li>56218</li>
                                                <li>UK</li>
                                            </ul>
                                            <strong class="d-block">Email address:</strong>
                                            <a href="#">name@domain.com</a>
                                            <strong class="d-block mt-3">Phone:</strong>
                                            <a href="#5551234">1234-5678</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="row g-xl-3">
                        <div class="col-lg-12 grid-margin">
                            <div class="card card-white h-100">
                                <div class="card-heading clearfix">
                                    <h4 class="card-title">Products</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0 order-details-table">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th class="ps-4 id">ID</th>
                                                    <th class="name">Name</th>
                                                    <th class="text-end cost">Cost</th>
                                                    <th class="text-end qty">Qty</th>
                                                    <th class="text-end total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="ps-4"><a href="#"><strong>290397</strong></a></td>
                                                    <td><a href="#">Men's Football Boots</a></td>
                                                    <td class="text-end">$15.00</td>
                                                    <td class="text-end">1</td>
                                                    <td class="text-end">$15.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-4"><a href="#"><strong>290398</strong></a></td>
                                                    <td><a href="#">Sun Protection Cap</a></td>
                                                    <td class="text-end">$10.20</td>
                                                    <td class="text-end">1</td>
                                                    <td class="text-end">$10.20</td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-4"><a href="#"><strong>290399</strong></a></td>
                                                    <td><a href="#">Heel Character Shoes</a></td>
                                                    <td class="text-end">$19.50</td>
                                                    <td class="text-end">1</td>
                                                    <td class="text-end">$19.50</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row justify-content-end flex-column flex-lg-row mt-5">
                                        <div class="col-auto me-5">
                                            <h6 class="fw-bold mb-2">Items Subtotal</h6>
                                            <span class="d-flex align-items-center">
                                                3 Items
                                                <i class="fas fa-chevron-right f-s-11 text-primary px-3"></i>
                                                <b>$298.00</b>
                                            </span>
                                        </div>
                                        <div class="col-auto me-5">
                                            <h6 class="fw-bold mb-2">Shipping</h6>
                                            <span class="d-flex align-items-center">
                                                Flat Rate
                                                <i class="fas fa-chevron-right f-s-11 text-primary px-3"></i>
                                                <b>$20.00</b>
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="fw-bold mb-2">Order Total</h6>
                                            <span class="d-flex align-items-center justify-content-lg-end">
                                                <strong>$318.00</strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="row g-xl-3">
                        <div class="col-xl-4 grid-margin">
                            <div class="card card-white h-100">
                                <div class="card-heading clearfix">
                                    <h4 class="card-title">Shipping Information</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <th colspan="2">
                                                    <p class="m-0">Arnold Jackson</p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address:</th>
                                                <td>3389 Eglinton Avenue, Windermere, London, SK 8GH.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Phone :</th>
                                                <td>(123) 456-7890</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Mobile :</th>
                                                <td>(+01) 12345 67890</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 grid-margin">
                            <div class="card card-white h-100">
                                <div class="card-heading clearfix">
                                    <h4 class="card-title">Billing Information</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-borderless table-sm mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Payment Type:</th>
                                                <td>Credit Card</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Provider :</th>
                                                <td>Visa ending in 2851</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Valid Date :</th>
                                                <td>02/2021</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">CVV :</th>
                                                <td>xxx</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 grid-margin">
                            <div class="card card-white h-100">
                                <div class="card-heading clearfix">
                                    <h4 class="card-title">Delivery Info</h4>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="my-2">
                                            <i class="fas fa-truck-moving h1 text-muted"></i>
                                        </div>
                                        <h5><b>UPS Delivery</b></h5>
                                        <div class="mt-2 pt-1">
                                            <p class="mb-1"><span>Order ID :</span> xxxx048</p>
                                            <p class="mb-0"><span>Payment Mode :</span> COD</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div>

    
@endsection