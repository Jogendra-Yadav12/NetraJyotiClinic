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
                    <div class="row align-items-center grid-margin">
                        <div class="col-12">
                            <div class="card card-white">
                                <div class="card-body row align-items-center">
                                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                                        <h4 class="mb-0">Orders</h4>
                                    </div>

                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-md-3 mb-3 mb-md-0">
                                                <select class="form-control form-select">
                                                    <option>Status</option>
                                                    <option>Deliveres</option>
                                                    <option>Pending</option>
                                                    <option>Processing</option>
                                                    <option>Failed</option>
                                                </select>
                                            </div>

                                            <div class="col-md-3 mb-3 mb-md-0">
                                                <select class="form-control form-select">
                                                    <option>Order Limits</option>
                                                    <option>Last 7 Orders</option>
                                                    <option>Last 15 Orders</option>
                                                    <option>Last 30 Orders</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="exampleInputEmail1" placeholder="search by name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 grid-margin">
                            <div class="card card-white h-100">
                                <div class="card-heading clearfix">
                                    <h4 class="card-title">Latest Transaction</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                                        </div>
                                                    </th>
                                                    <th>Order ID</th>
                                                    <th>Billing Name</th>
                                                    <th>Date</th>
                                                    <th>Total</th>
                                                    <th>Payment Status</th>
                                                    <th>Payment Method</th>
                                                    <th>View Details</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                            <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="#">#SK2540</a> </td>
                                                    <td>Nicolette Villeneuve</td>
                                                    <td>
                                                        20 Mar, 2022
                                                    </td>
                                                    <td>
                                                        $400
                                                    </td>
                                                    <td>
                                                        <span class="badge rounded-pill bg-soft-green">Paid</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded">
                                                            View Details
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                            <label class="custom-control-label" for="customCheck3">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="#">#SK2541</a> </td>
                                                    <td>Carl M. Gaier</td>
                                                    <td>
                                                        19 Mar, 2022
                                                    </td>
                                                    <td>
                                                        $380
                                                    </td>
                                                    <td>
                                                        <span class="badge rounded-pill bg-soft-pink">Chargeback</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-visa me-1"></i> Visa
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded">
                                                            View Details
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                            <label class="custom-control-label" for="customCheck4">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="#">#SK2542</a> </td>
                                                    <td>Frank Manning</td>
                                                    <td>
                                                        19 Mar, 2022
                                                    </td>
                                                    <td>
                                                        $384
                                                    </td>
                                                    <td>
                                                        <span class="badge rounded-pill bg-soft-green">Paid</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-paypal me-1"></i> Paypal
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded">
                                                            View Details
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                            <label class="custom-control-label" for="customCheck5">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="#">#SK2543</a> </td>
                                                    <td>Gary Bradley</td>
                                                    <td>
                                                        18 Mar, 2022
                                                    </td>
                                                    <td>
                                                        $412
                                                    </td>
                                                    <td>
                                                        <span class="badge rounded-pill bg-soft-green">Paid</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded">
                                                            View Details
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                            <label class="custom-control-label" for="customCheck6">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="#">#SK2544</a> </td>
                                                    <td>Chandra Cirillo</td>
                                                    <td>
                                                        16 Mar, 2022
                                                    </td>
                                                    <td>
                                                        $404
                                                    </td>
                                                    <td>
                                                        <span class="badge rounded-pill bg-soft-orange">Refund</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-visa me-1"></i> Visa
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded">
                                                            View Details
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                            <label class="custom-control-label" for="customCheck7">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="#">#SK2545</a> </td>
                                                    <td>Frederick Cooper</td>
                                                    <td>
                                                        14 Mar, 2022
                                                    </td>
                                                    <td>
                                                        $392
                                                    </td>
                                                    <td>
                                                        <span class="badge rounded-pill bg-soft-green">Paid</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-paypal me-1"></i> Paypal
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded">
                                                            View Details
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                            <label class="custom-control-label" for="customCheck8">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="#">#SK2546</a> </td>
                                                    <td>Elizabeth Elzey</td>
                                                    <td>
                                                        14 Mar, 2022
                                                    </td>
                                                    <td>
                                                        $291
                                                    </td>
                                                    <td>
                                                        <span class="badge rounded-pill bg-soft-green">Paid</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded">
                                                            View Details
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                            <label class="custom-control-label" for="customCheck9">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="#">#SK2547</a> </td>
                                                    <td>Eugene Rivera</td>
                                                    <td>
                                                        13 Mar, 2022
                                                    </td>
                                                    <td>
                                                        $200
                                                    </td>
                                                    <td>
                                                        <span class="badge rounded-pill bg-soft-orange">Refund</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-visa me-1"></i> Visa
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded">
                                                            View Details
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="far fa-edit text-primary"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <i class="far fa-trash-alt text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                            <label class="custom-control-label" for="customCheck10">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="#">#SK2548</a> </td>
                                                    <td>Janet Zoller</td>
                                                    <td>
                                                        12 Mar, 2022
                                                    </td>
                                                    <td>
                                                        $340
                                                    </td>
                                                    <td>
                                                        <span class="badge rounded-pill bg-soft-green">Paid</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-paypal me-1"></i> Paypal
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded">
                                                            View Details
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
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
                    </div>
                    <!-- end row -->
                </div>
    
@endsection