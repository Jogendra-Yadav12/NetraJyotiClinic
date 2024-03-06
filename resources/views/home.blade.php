@extends('layouts.app')

@section('content')

        @include('header')

        <!-- BANNER
        ================================================== -->
        <section class="full-screen p-0 top-position">
            <div class="slider-fade2 owl-carousel owl-theme w-100">
                <div class="item bg-img h-100 w-100 cover-background" data-overlay-dark="0" data-background="img/slider/slide-10.jpg">
                    <div class="container h-100 d-table">
                        <div class="row d-table-cell align-middle h-100">
                            <div class="col-lg-5">
                                <h3 class="alt-font mb-2 h6 text-uppercase">New Arrivals</h3>
                                <h1 class="display-16 display-sm-8 display-md-5 display-lg-3 mb-1-6 mb-lg-2-9">Decor Inspiration</h1>
                                <a href="shop-product-grid.html" class="butn-style4">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item bg-img h-100 w-100 cover-background" data-overlay-dark="0" data-background="img/slider/slide-11.jpg">
                    <div class="container h-100 d-table">
                        <div class="row d-table-cell align-middle h-100">
                            <div class="col-lg-5">
                                <h3 class="alt-font mb-2 h6 text-uppercase">Offer</h3>
                                <h1 class="display-16 display-sm-8 display-md-5 display-lg-3 mb-1-6 mb-lg-2-9">Sofa Up to 50% OFF</h1>
                                <a href="shop-product-grid.html" class="butn-style4">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item bg-img h-100 w-100 cover-background" data-overlay-dark="0" data-background="img/slider/slide-13.jpg">
                    <div class="container h-100 d-table">
                        <div class="row d-table-cell align-middle h-100">
                            <div class="col-lg-5">
                                <h3 class="alt-font mb-2 h6 text-uppercase">Collection</h3>
                                <h1 class="display-16 display-sm-8 display-md-5 display-lg-3 mb-1-6 mb-lg-2-9">Special Collection</h1>
                                <a href="shop-product-grid.html" class="butn-style4">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- CATEGORY
        ================================================== -->
        <section>
            <div class="container">
                <div class="row mt-n1-9 text-center">
                    <div class="col-sm-6 col-md-4 col-lg-2 mt-1-9">
                        <a href="shop-categories.html" class="categoty-style2">
                            <div class="category-icon mb-4">
                                <img src="img/icons/icon-4.png" alt="...">
                            </div>
                            <h3 class="font-weight-500 mb-0">Bathroom</h3>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2 mt-1-9">
                        <a href="shop-categories.html" class="categoty-style2">
                            <div class="category-icon mb-4">
                                <img src="img/icons/icon-5.png" alt="...">
                            </div>
                            <h3 class="font-weight-500 mb-0">Dining Table</h3>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2 mt-1-9">
                        <a href="shop-categories.html" class="categoty-style2">
                            <div class="category-icon mb-4">
                                <img src="img/icons/icon-6.png" alt="...">
                            </div>
                            <h3 class="font-weight-500 mb-0">Chair</h3>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2 mt-1-9">
                        <a href="shop-categories.html" class="categoty-style2">
                            <div class="category-icon mb-4">
                                <img src="img/icons/icon-7.png" alt="...">
                            </div>
                            <h3 class="font-weight-500 mb-0">Sofas & Sectionals</h3>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2 mt-1-9">
                        <a href="shop-categories.html" class="categoty-style2">
                            <div class="category-icon mb-4">
                                <img src="img/icons/icon-8.png" alt="...">
                            </div>
                            <h3 class="font-weight-500 mb-0">Cupboard</h3>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2 mt-1-9">
                        <a href="shop-categories.html" class="categoty-style2">
                            <div class="category-icon mb-4">
                                <img src="img/icons/icon-9.png" alt="...">
                            </div>
                            <h3 class="font-weight-500 mb-0">Bedroom</h3>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- BY STYLE
        ================================================== -->
        <section class="bg-trend">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 mb-1-9 mb-lg-0">
                        <div class="pe-xl-6">
                            <h2 class="h1 mb-1-6 mb-lg-1-9">Shop <br>By Style</h2>
                            <p class="mb-1-6 mb-lg-1-9">Style any open air region with a few cautious review and cool headed choices.</p>
                            <a href="shop-categories.html" class="text-uppercase small font-weight-600 border-bottom border-color-black text-dark">All Categories</a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="owl-carousel owl-theme by-trend-carousel text-center">
                            <a href="shop-product-list.html">
                                <img src="img/content/by-trend-01.jpg" alt="...">
                                <h3 class="h5 mb-0 mt-3">Classic Traditional</h3>
                            </a>
                            <a href="shop-product-list.html">
                                <img src="img/content/by-trend-02.jpg" alt="...">
                                <h3 class="h5 mb-0 mt-3"> Mid-century Modern</h3>
                            </a>
                            <a href="shop-product-list.html">
                                <img src="img/content/by-trend-03.jpg" alt="...">
                                <h3 class="h5 mb-0 mt-3">Scandinavian</h3>
                            </a>
                            <a href="shop-product-list.html">
                                <img src="img/content/by-trend-04.jpg" alt="...">
                                <h3 class="h5 mb-0 mt-3">Minimalist</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FEATURED PRODUCTS
        ================================================== -->
        <section>
            <div class="container">
                <div class="text-center mb-1-9 mb-lg-2-3">
                    <h2 class="mb-0">Featured Products</h2>
                </div>
                <div class="row mt-n1-9">
                    <div class="col-sm-6 col-lg-3 mt-1-9">
                        <div class="product-grid-four">
                            <div class="product-img">
                                <a href="shop-product-detail.html"><img src="img/products/featured-products/product-11.jpg" alt="..."></a>
                                <div class="action-butn">
                                    <a href="#!"><i class="ti-shopping-cart"></i></a>
                                    <a href="#!"><i class="ti-eye"></i></a>
                                    <a href="#!"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                            <h3 class="h6"><a href="shop-product-detail.html">Modern Lifestyle Chair</a></h3>
                            <span class="font-weight-600 display-29 text-muted">$210.00</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-1-9">
                        <div class="product-grid-four">
                            <div class="product-img">
                                <a href="shop-product-detail.html"><img src="img/products/featured-products/product-12.jpg" alt="..."></a>
                                <span class="product-label bg-primary">new</span>
                                <div class="action-butn">
                                    <a href="#!"><i class="ti-shopping-cart"></i></a>
                                    <a href="#!"><i class="ti-eye"></i></a>
                                    <a href="#!"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                            <h3 class="h6"><a href="shop-product-detail.html">Armchair And Pillow</a></h3>
                            <span class="font-weight-600 display-29 text-muted">$400.50</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-1-9">
                        <div class="product-grid-four">
                            <div class="product-img">
                                <a href="shop-product-detail.html"><img src="img/products/featured-products/product-13.jpg" alt="..."></a>
                                <div class="action-butn">
                                    <a href="#!"><i class="ti-shopping-cart"></i></a>
                                    <a href="#!"><i class="ti-eye"></i></a>
                                    <a href="#!"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                            <h3 class="h6"><a href="shop-product-detail.html">Industrial Iron Table Lamp</a></h3>
                            <span class="font-weight-600 display-29 text-muted">$350.10</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-1-9">
                        <div class="product-grid-four">
                            <div class="product-img">
                                <a href="shop-product-detail.html"><img src="img/products/featured-products/product-14.jpg" alt="..."></a>
                                <span class="product-label bg-danger">sale</span>
                                <div class="action-butn">
                                    <a href="#!"><i class="ti-shopping-cart"></i></a>
                                    <a href="#!"><i class="ti-eye"></i></a>
                                    <a href="#!"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                            <h3 class="h6"><a href="shop-product-detail.html">Living Room Sofa</a></h3>
                            <span class="font-weight-600 display-29 text-muted">$500.40</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-1-9">
                        <div class="product-grid-four">
                            <div class="product-img">
                                <a href="shop-product-detail.html"><img src="img/products/featured-products/product-15.jpg" alt="..."></a>
                                <div class="action-butn">
                                    <a href="#!"><i class="ti-shopping-cart"></i></a>
                                    <a href="#!"><i class="ti-eye"></i></a>
                                    <a href="#!"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                            <h3 class="h6"><a href="shop-product-detail.html">Modern Office Chair</a></h3>
                            <span class="font-weight-600 display-29 text-muted">$150.00</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-1-9">
                        <div class="product-grid-four">
                            <div class="product-img">
                                <a href="shop-product-detail.html"><img src="img/products/featured-products/product-16.jpg" alt="..."></a>
                                <span class="product-label bg-danger">sale</span>
                                <div class="action-butn">
                                    <a href="#!"><i class="ti-shopping-cart"></i></a>
                                    <a href="#!"><i class="ti-eye"></i></a>
                                    <a href="#!"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                            <h3 class="h6"><a href="shop-product-detail.html">Light Lamp On White Wall</a></h3>
                            <span class="font-weight-600 display-29 text-muted">$200.00</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-1-9">
                        <div class="product-grid-four">
                            <div class="product-img">
                                <a href="shop-product-detail.html"><img src="img/products/featured-products/product-17.jpg" alt="..."></a>
                                <div class="action-butn">
                                    <a href="#!"><i class="ti-shopping-cart"></i></a>
                                    <a href="#!"><i class="ti-eye"></i></a>
                                    <a href="#!"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                            <h3 class="h6"><a href="shop-product-detail.html">Top Round Chair</a></h3>
                            <span class="font-weight-600 display-29 text-muted">$340.10</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-1-9">
                        <div class="product-grid-four">
                            <div class="product-img">
                                <a href="shop-product-detail.html"><img src="img/products/featured-products/product-18.jpg" alt="..."></a>
                                <div class="action-butn">
                                    <a href="#!"><i class="ti-shopping-cart"></i></a>
                                    <a href="#!"><i class="ti-eye"></i></a>
                                    <a href="#!"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                            <h3 class="h6"><a href="shop-product-detail.html">Wooden Round Table</a></h3>
                            <span class="font-weight-600 display-29 text-muted">$270.90</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- OFFER BANNER
        ================================================== -->
        <section class="pt-0">
            <div class="container-fluid px-lg-1-9 px-xl-6 px-xxl-13">
                <div class="row mt-n4">
                    <div class="col-md-6 mt-4">
                        <div class="offer-style02">
                            <img src="img/bg/bg-5.jpg" alt="...">
                            <div class="text-center position-absolute top-10 start-0 end-0">
                                <span class="text-uppercase font-weight-500 text-white letter-spacing-2 d-block mb-2 mb-sm-3">new arrivals</span>
                                <h2 class="h1 mb-2 text-white">Featured Deals</h2>
                                <p class="text-white font-weight-600 display-29 d-none d-sm-block">Save on what's hot right now.</p>
                                <a href="shop-product-grid.html" class="butn-style4 sm">Shop Now<span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="offer-style02">
                            <img src="img/bg/bg-6.jpg" alt="...">
                            <div class="text-center position-absolute top-10 start-0 end-0">
                                <span class="text-uppercase font-weight-600 text-white letter-spacing-2 d-block mb-2 mb-sm-3">up to 50% off</span>
                                <h2 class="h1 mb-2 text-white">Summer Sale</h2>
                                <p class="text-white font-weight-600 display-29 d-none d-sm-block">Save on what's hot right now.</p>
                                <a href="shop-product-grid.html" class="butn-style4 sm">Shop Now<span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES
        ================================================== -->
        <section class="p-0">
            <div class="container">
                <div class="row mt-n4">
                    <div class="col-sm-6 col-lg-3 mt-4">
                        <div class="text-center">
                            <img src="img/icons/icon-10.png" class="mb-3" alt="...">
                            <h3 class="h5">Free Shipping</h3>
                            <p class="mb-0">Free shipping over $100</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-4">
                        <div class="text-center">
                            <img src="img/icons/icon-11.png" class="mb-3" alt="...">
                            <h3 class="h5">Money Return</h3>
                            <p class="mb-0">Guarantee under 7 days</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-4">
                        <div class="text-center">
                            <img src="img/icons/icon-12.png" class="mb-3" alt="...">
                            <h3 class="h5">Gift Voucher</h3>
                            <p class="mb-0">Get $15 off your order</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-4">
                        <div class="text-center">
                            <img src="img/icons/icon-13.png" class="mb-3" alt="...">
                            <h3 class="h5">Support 24 / 7</h3>
                            <p class="mb-0">Support online 24 hours a day</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection('content')