@extends('layouts.app')

@section('content')

@include('header')

 <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section bg-img cover-background" data-background="img/bg/page-title.jpg">
            <div class="container">

                <div class="title-info">
                    <h1>My Profile</h1></div>
                <div class="breadcrumbs-info">
                    <ul class="ps-0">
                        <li><a href="home-shop-1.html">Home</a></li>
                        <li><a href="#">My Profile</a></li>
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
                                </div>
                            </div>

                            <div class="list-group">
                                <a class="list-group-items active" href="{{url('/profile')}}"><i class="ti-user pe-2"></i>Profile</a>
                                <a class="list-group-items" href="{{url('/orders')}}"><i class="ti-bag pe-2"></i>Orders<span class="badge badge-pill">6</span></a>
                                <a class="list-group-items" href="account-address.html"><i class="ti-location-pin pe-2"></i>Addresses</a>
                                <a class="list-group-items" href="account-wishlist.html"><i class="ti-heart pe-2"></i>Wishlist<span class="badge badge-pill">3</span></a>
                                <a class="list-group-items" href="account-tickets.html"><i class="ti-tag pe-2"></i>My Tickets<span class="badge badge-pill">4</span></a>
                            </div>

                        </div>

                    </div>
                    <!-- end left panel -->

                    <!-- right panel -->
                    <div class="col-lg-8">

                        <div class="common-block">

                            <div class="inner-title">
                                <h4 class="mb-0">My Profile</h4>
                                <p class="mb-0">Time for a Sharp My profile.</p>
                            </div>

                            <form method="post">

                                <div class="row">

                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label>Your Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Your name here">
                                        </div>

                                    </div>

                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label>Your User Name</label>
                                            <input type="text" class="form-control" name="username" placeholder="Your user name here">
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="email" class="form-control" name="email" placeholder="Your email here">
                                        </div>

                                    </div>

                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input type="text" class="form-control" name="phone" placeholder="+40-123 456 789">
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Your password here">
                                        </div>

                                    </div>

                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label>Re-Password</label>
                                            <input type="password" class="form-control" name="re-password" placeholder="Your re-password here">
                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="terms-condition">
                                            <label class="form-check-label" for="terms-condition">I agree to the <a href="#" class="text-primary">Terms & Conditions</a></label>
                                        </div>
                                    </div>

                                </div>

                                <button type="button" class="butn-style2 mt-4">Update Profile</button>

                            </form>

                        </div>

                    </div>
                    <!-- end right panel -->
                </div>
            </div>
        </section>
    
@endsection