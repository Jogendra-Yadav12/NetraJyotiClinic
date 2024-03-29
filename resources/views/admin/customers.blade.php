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
                                    <div class="col-12 col-md-5 mb-4 mb-md-0">
                                        <h4 class="mb-0">Customers</h4>
                                    </div>

                                    <div class="col-12 col-md-7">

                                        <div class="row">

                                            <div class="col-md-8 mb-3 mb-md-0">
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="exampleInputEmail1" placeholder="search by name">
                                            </div>

                                            <div class="col-md-4">
                                                <select class="form-control form-select">
                                                    <option>Order Amount</option>
                                                    <option>Highest To Lowest</option>
                                                    <option>Lowest To Highest</option>
                                                </select>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- Row -->
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card card-white">
                                <div class="card-body">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Contacts</th>
                                                <th scope="col">Total Orders</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Total Amount</th>
                                                <th scope="col">Joining Date</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-4">
                                                            <img src="img/avatars/avatar-01.jpg" class="rounded-circle" alt="...">
                                                        </div>
                                                        <div>
                                                            <h6>Nicolette Villeneuve</h6>
                                                            <span>ID : #SK2540</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>715-371-3507</td>
                                                <td>12</td>
                                                <td><span class="badge rounded-pill bg-soft-pink">Blocked</span></td>
                                                <td>$2563</td>
                                                <td>15 May 1997</td>
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
                                                <th scope="row">2</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-4">
                                                            <img src="img/avatars/avatar-02.jpg" class="rounded-circle" alt="...">
                                                        </div>
                                                        <div>
                                                            <h6>Carl M. Gaier</h6>
                                                            <span>ID : #SK2541</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>123-371-653</td>
                                                <td>16</td>
                                                <td><span class="badge rounded-pill bg-soft-green">Active</span></td>
                                                <td>$3165</td>
                                                <td>02 Mar 1998</td>
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
                                                <th scope="row">3</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-4">
                                                            <img src="img/avatars/avatar-03.jpg" class="rounded-circle" alt="...">
                                                        </div>
                                                        <div>
                                                            <h6>Frank Manning</h6>
                                                            <span>ID : #SK2542</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>642-135-8654</td>
                                                <td>10</td>
                                                <td><span class="badge rounded-pill bg-soft-green">Active</span></td>
                                                <td>$1357</td>
                                                <td>01 Apr 1999</td>
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
                                                <th scope="row">4</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-4">
                                                            <img src="img/avatars/avatar-04.jpg" class="rounded-circle" alt="...">
                                                        </div>
                                                        <div>
                                                            <h6>Gary Bradley</h6>
                                                            <span>ID : #SK2543</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>234-135-853</td>
                                                <td>21</td>
                                                <td><span class="badge rounded-pill bg-soft-green">Active</span></td>
                                                <td>$3482</td>
                                                <td>28 Jan 2002</td>
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
                                                <th scope="row">5</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-4">
                                                            <img src="img/avatars/avatar-05.jpg" class="rounded-circle" alt="...">
                                                        </div>
                                                        <div>
                                                            <h6>Chandra Cirillo</h6>
                                                            <span>ID : #SK2544</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>123-444-9932</td>
                                                <td>05</td>
                                                <td><span class="badge rounded-pill bg-soft-pink">Blocked</span></td>
                                                <td>$1563</td>
                                                <td>20 Feb 2003</td>
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
                                                <th scope="row">6</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-4">
                                                            <img src="img/avatars/avatar-06.jpg" class="rounded-circle" alt="...">
                                                        </div>
                                                        <div>
                                                            <h6>Frederick Cooper</h6>
                                                            <span>ID : #SK2545</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>123-456-789</td>
                                                <td>16</td>
                                                <td><span class="badge rounded-pill bg-soft-green">Active</span></td>
                                                <td>$4785</td>
                                                <td>18 Jun 2004</td>
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
                                                <th scope="row">7</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-4">
                                                            <img src="img/avatars/avatar-07.jpg" class="rounded-circle" alt="...">
                                                        </div>
                                                        <div>
                                                            <h6>Elizabeth Elzey</h6>
                                                            <span>ID : #SK2546</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>222-444-896</td>
                                                <td>12</td>
                                                <td><span class="badge rounded-pill bg-soft-pink">Blocked</span></td>
                                                <td>$2793</td>
                                                <td>20 May 2006</td>
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
                                                <th scope="row">8</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-4">
                                                            <img src="img/avatars/avatar-08.jpg" class="rounded-circle" alt="...">
                                                        </div>
                                                        <div>
                                                            <h6>Eugene Rivera</h6>
                                                            <span>ID : #SK2547</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>274-385-8592</td>
                                                <td>10</td>
                                                <td><span class="badge rounded-pill bg-soft-green">Active</span></td>
                                                <td>$941</td>
                                                <td>21 Sep 2007</td>
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
                                                <th scope="row">9</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-4">
                                                            <img src="img/avatars/avatar-09.jpg" class="rounded-circle" alt="...">
                                                        </div>
                                                        <div>
                                                            <h6>Janet Zoller</h6>
                                                            <span>ID : #SK2548</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>942-842-074</td>
                                                <td>14</td>
                                                <td><span class="badge rounded-pill bg-soft-pink">Blocked</span></td>
                                                <td>$5563</td>
                                                <td>27 Oct 2009</td>
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
                                                <th scope="row">10</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-4">
                                                            <img src="img/avatars/avatar-10.jpg" class="rounded-circle" alt="...">
                                                        </div>
                                                        <div>
                                                            <h6>George Biddle</h6>
                                                            <span>ID : #SK2549</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>111-222-3334</td>
                                                <td>05</td>
                                                <td><span class="badge rounded-pill bg-soft-green">Active</span></td>
                                                <td>$156</td>
                                                <td>10 Dec 2015</td>
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
                    <!-- Row -->
                </div>
    
@endsection