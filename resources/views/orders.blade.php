@extends('layouts.app')

@section('content')

@include('header')

<!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section bg-img cover-background" data-background="img/bg/page-title.jpg">
            <div class="container">

                <div class="title-info">
                    <h1>My Orders</h1></div>
                <div class="breadcrumbs-info">
                    <ul class="ps-0">
                        <li><a href="home-shop-1.html">Home</a></li>
                        <li><a href="#">My Orders</a></li>
                    </ul>
                </div>

            </div>
        </section>
        
        <!-- ACCOUNT ORDERS
        ================================================== -->
        <section class="md">
            <div class="container">
                <div class="row justify-content-center">

                    <!-- left panel -->
                    <div class="col-lg-4 col-sm-9 mb-2-3 mb-lg-0">

                        <div class="account-pannel">

                            <div class="p-4">

                                <div class="text-center">
                                    <div class="pb-3">
                                        <img class="img-fluid rounded-circle img-thumbnail" src="img/avatar/t-3.jpg" alt="...">
                                    </div>
                                    <h6 class="mb-0 display-28">Peter Parker</h6>
                                    <small>Joined February 06, 2017</small>
                                    <div class="reward-points">
                                        <i class="ti-star text-primary pe-1"></i> Points: 7386
                                    </div>
                                </div>
                            </div>

                            <div class="list-group">
                            <a class="list-group-items" href="{{url('profile')}}"><i class="ti-user pe-2"></i>Profile</a>
                                <a class="list-group-items active" href="{{url('orders')}}"><i class="ti-bag pe-2"></i>Orders<span class="badge badge-pill">6</span></a>
                                
                                <a class="list-group-items" href="{{url('/address')}}"><i class="ti-location-pin pe-2"></i>Addresses</a>
                                <!-- <a class="list-group-items" href="account-wishlist.html"><i class="ti-heart pe-2"></i>Wishlist<span class="badge badge-pill">3</span></a>
                                <a class="list-group-items" href="account-tickets.html"><i class="ti-tag pe-2"></i>My Tickets<span class="badge badge-pill">4</span></a> -->
                            </div>

                        </div>

                    </div>
                    <!-- end left panel -->

                    <!-- right panel -->
                    <div class="col-lg-8">

                        <div class="common-block">

                            <div class="inner-title">
                                <h4 class="mb-0">My Orders</h4>
                            </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>
                                            #2257
                                        </th>
                                        <td>
                                            10 January 2022
                                        </td>
                                        <td>
                                            <span class="fas fa-circle text-primary small mr-1"></span> Pending
                                        </td>
                                        <td>$29</td>
                                        <td>
                                            <a href="#" class="text-primary">Pay</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            #2256
                                        </th>
                                        <td>
                                            09 January 2022
                                        </td>
                                        <td>
                                            <span class="fas fa-circle text-success small mr-1"></span> Completed
                                        </td>
                                        <td>$21</td>
                                        <td>
                                            <a href="#" class="text-primary">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            #2255
                                        </th>
                                        <td>
                                            08 January 2022
                                        </td>
                                        <td>
                                            <span class="fas fa-circle text-success small mr-1"></span> Completed
                                        </td>
                                        <td>$66</td>
                                        <td>
                                            <a href="#" class="text-primary">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            #2254
                                        </th>
                                        <td>
                                            07 January 2022
                                        </td>
                                        <td>
                                            <span class="fas fa-circle text-success small mr-1"></span> Completed
                                        </td>
                                        <td>$27</td>
                                        <td>
                                            <a href="#" class="text-primary">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            #2253
                                        </th>
                                        <td>
                                            06 January 2022
                                        </td>
                                        <td>
                                            <span class="fas fa-circle text-danger small mr-1"></span> Cancelled
                                        </td>
                                        <td>$23</td>
                                        <td>
                                            <a href="#" class="text-primary">View</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a class="butn-style2 mt-3" href="#"><span>Show All Orders</span></a>
                        </div>

                    </div>
                    <!-- end right panel -->
                </div>
            </div>
        </section>
    
@endsection