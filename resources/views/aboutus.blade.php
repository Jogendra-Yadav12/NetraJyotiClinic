@extends('layouts.app')

@section('content')

@include('header')

 <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section bg-img cover-background" data-background="img/bg/page-title.jpg">
            <div class="container">

                <div class="title-info">
                    <h1>About Us</h1></div>
                <div class="breadcrumbs-info">
                    <ul class="ps-0">
                        <li><a href="home-shop-1.html">Home</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>

            </div>
        </section>
        
        <!-- ABOUT
        ================================================== -->
        <section class="md">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-lg-10 text-center">

                <div class="text-center mb-1-9">
                    <h2 class="mb-0">Who We Are</h2>
                </div>

                <p class="lead mb-1-9 w-md-80 w-95 mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id purus at risus pellentesque faucibus a quis eros. In eu fermentum leo. Integer ut eros lacus. Proin ut accumsan leo. Morbi vitae est eget dolor consequat aliquam eget quis dolor.</p>
                <img src="{{ asset('img/team/shop.jpg') }}" alt="..." class="img-style"/></div>
        </div>
        <div class="row text-center">
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="border px-1-6 py-1-9 p-lg-1-9 h-100">
                    <i class="ti-headphone-alt display-18"></i>
                    <h3 class="h5 my-3 letter-spacing-1">24/7 Free Support</h3>
                    <p class="w-lg-80 mx-auto mb-0">Please feel free to contact us and we provide best service.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="border px-1-6 py-1-9 p-lg-1-9 h-100">
                    <i class="ti-money display-18"></i>
                    <h3 class="h5 my-3 letter-spacing-1">Money Back Return</h3>
                    <p class="w-lg-80 mx-auto mb-0">If you are not satisfied with product then we provide refunds.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="border px-1-6 py-1-9 p-lg-1-9 h-100">
                    <i class="ti-truck display-18"></i>
                    <h3 class="h5 my-3 letter-spacing-1">Free Worldwide Shipping</h3>
                    <p class="w-lg-80 mx-auto mb-0">We're very pleased to be able to worldwide shipping.</p>
                </div>
            </div>
        </div>
    </div>
</section>
        
        <!-- COUNTER
        ================================================== -->
        <section class="bg-light md">

            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-sm-4 counter-style-one mb-1-9 mb-sm-0">
                        <div class="text-center">
                            <div class="icon mb-2 mb-md-0"><span class="ti-thumb-up"></span></div>
                            <div class="title">
                                <h4 class="countup mb-0 font-weight-600 display-15">86</h4>
                                <span>Best Brands</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 counter-style-one mb-1-9 mb-sm-0">
                        <div class="text-center">
                            <div class="icon mb-2 mb-md-0"><span class="ti-flag-alt"></span></div>
                            <div class="title">
                                <h4 class="countup mb-0 font-weight-600 display-15">36</h4>
                                <span>Total Categories</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 counter-style-one">
                        <div class="text-center">
                            <div class="icon mb-2 mb-md-0"><span class="ti-medall"></span></div>
                            <div class="title">
                                <h4 class="countup mb-0 font-weight-600 display-15">99</h4>
                                <span>Quality Products</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        
        
        
        <!-- TEAM
        ================================================== -->
        <section class="md">
            <div class="container">

                <div class="text-center mb-1-9 mb-lg-2-3">
                    <h2 class="mb-0">Our Team</h2>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6 text-center mb-1-9 mb-lg-0 container">
                        <img src="img/team/1.jpg" alt="..." class="img-style">
                        <h3 class="mb-0 mt-4 display-27">Bhanu Pratap</h3>
                        <p class="mb-0">Owner</p>
                    </div>
                    
                </div>
            </div>
        </section>
        
        <!-- CLIENTS
        ================================================== -->
        <section class="bg-light md client-section">
            <div class="container">
                <div class="owl-carousel owl-theme clients">
                    <div class="item"><img alt="partner-image" src="img/partners/01.png"></div>
                    <div class="item"><img alt="partner-image" src="img/partners/02.png"></div>
                    <div class="item"><img alt="partner-image" src="img/partners/03.png"></div>
                    <div class="item"><img alt="partner-image" src="img/partners/04.png"></div>
                    <div class="item"><img alt="partner-image" src="img/partners/05.png"></div>
                </div>
            </div>
        </section>
    
@endsection