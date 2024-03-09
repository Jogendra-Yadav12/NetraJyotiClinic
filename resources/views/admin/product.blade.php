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
                        <div class="col-xl-3">
                            <div class="card card-white mb-3">
                                <div class="card-body product-form">
                                    <form method='post'>
                                        <input type="hidden" name="form-name" value="form 1" />
                                        <input type="search" name="search" placeholder="Type here ...">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="card card-white">
                                <div class="card-body">
                                    <div class="mb-4 pb-4">
                                        <h6 class="text-uppercase fw-bold mb-4">Categories</h6>
                                        <div id="accordion" class="accordion-style2">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Games</button>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <ul class="ps-0 product-sidebar list-unstyled mb-0">
                                                            <li><a href="#">Alafi</a></li>
                                                            <li><a href="#">CHG</a></li>
                                                            <li><a href="#">Crystal Digital</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            Headphones
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <ul class="ps-0 product-sidebar list-unstyled mb-0">
                                                            <li><a href="#">JBL</a></li>
                                                            <li><a href="#">Sony</a></li>
                                                            <li><a href="#">Motorola</a></li>
                                                            <li><a href="#">CRORA</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            Cameras
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <ul class="ps-0 product-sidebar list-unstyled mb-0">
                                                            <li><a href="#">Nikon</a></li>
                                                            <li><a href="#">Canon</a></li>
                                                            <li><a href="#">Olympus</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingFour">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                            Smart TVs
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <ul class="ps-0 product-sidebar list-unstyled mb-0">
                                                            <li><a href="#">Thomson</a></li>
                                                            <li><a href="#">Vu</a></li>
                                                            <li><a href="#">LG</a></li>
                                                            <li><a href="#">Sony</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingFive">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                            Mobile
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <ul class="ps-0 product-sidebar list-unstyled mb-0">
                                                            <li><a href="#">Intex</a></li>
                                                            <li><a href="#">Google</a></li>
                                                            <li><a href="#">Samsung</a></li>
                                                            <li><a href="#">Apple</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 pb-4">
                                        <h6 class="text-uppercase fw-bold mb-4">brand</h6>
                                        <ul class="list-unstyled product-sidebar mb-0 ps-0">

                                            <li class="custom-control custom-checkbox ps-0">
                                                <input class="custom-control-input" type="checkbox" id="samsung">
                                                <label class="custom-control-label text-start" for="samsung">Samsung Galaxy</label>
                                            </li>

                                            <li class="custom-control custom-checkbox ps-0">
                                                <input class="custom-control-input" type="checkbox" id="seiko">
                                                <label class="custom-control-label text-start" for="seiko">Seiko</label>
                                            </li>

                                            <li class="custom-control custom-checkbox ps-0">
                                                <input class="custom-control-input" type="checkbox" id="apple">
                                                <label class="custom-control-label text-start" for="apple">Apple</label>
                                            </li>

                                            <li class="custom-control custom-checkbox ps-0">
                                                <input class="custom-control-input" type="checkbox" id="htc">
                                                <label class="custom-control-label text-start" for="htc">HTC</label>
                                            </li>

                                            <li class="custom-control custom-checkbox ps-0">
                                                <input class="custom-control-input" type="checkbox" id="microsoft">
                                                <label class="custom-control-label text-start" for="microsoft">Microsft</label>
                                            </li>

                                            <li class="custom-control custom-checkbox ps-0">
                                                <input class="custom-control-input" type="checkbox" id="garmin">
                                                <label class="custom-control-label text-start" for="garmin">Garmin</label>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="mb-4 pb-4">
                                        <h6 class="text-uppercase fw-bold mb-4">Price Range</h6>
                                        <input type="text" class="price-range" name="my_range" value="">
                                    </div>
                                    <div class="mb-4 pb-4">
                                        <h6 class="text-uppercase fw-bold mb-4">Discount</h6>
                                        <ul class="list-unstyled product-sidebar mb-0 ps-0">

                                            <li class="custom-control custom-checkbox ps-0">
                                                <input class="custom-control-input" type="checkbox" id="ten_pecentage">
                                                <label class="custom-control-label text-start" for="ten_pecentage">10% off or more</label>
                                            </li>

                                            <li class="custom-control custom-checkbox ps-0">
                                                <input class="custom-control-input" type="checkbox" id="twenty_pecentage">
                                                <label class="custom-control-label text-start" for="twenty_pecentage">20% off or more</label>
                                            </li>

                                            <li class="custom-control custom-checkbox ps-0">
                                                <input class="custom-control-input" type="checkbox" id="thirty_pecentage">
                                                <label class="custom-control-label text-start" for="thirty_pecentage">30% off or more</label>
                                            </li>

                                            <li class="custom-control custom-checkbox ps-0">
                                                <input class="custom-control-input" type="checkbox" id="fourty_pecentage">
                                                <label class="custom-control-label text-start" for="fourty_pecentage">40% off or more</label>
                                            </li>

                                        </ul>
                                    </div>
                                    <div>
                                        <h6 class="text-uppercase fw-bold mb-4">Customer Rating</h6>
                                        <ul class="list-unstyled product-sidebar mb-0 ps-0">

                                            <li class="custom-control custom-checkbox ps-0">
                                                <input class="custom-control-input" type="checkbox" id="four_star">
                                                <label class="custom-control-label text-start" for="four_star">4 <i class="far fa-star f-s-11 text-warning"></i> & Above</label>
                                            </li>

                                            <li class="custom-control custom-checkbox ps-0">
                                                <input class="custom-control-input" type="checkbox" id="three_star">
                                                <label class="custom-control-label text-start" for="three_star">3 <i class="far fa-star f-s-11 text-warning"></i> & Above</label>
                                            </li>

                                            <li class="custom-control custom-checkbox ps-0">
                                                <input class="custom-control-input" type="checkbox" id="two_star">
                                                <label class="custom-control-label text-start" for="two_star">2 <i class="far fa-star f-s-11 text-warning"></i> & Above</label>
                                            </li>

                                            <li class="custom-control custom-checkbox ps-0">
                                                <input class="custom-control-input" type="checkbox" id="one_star">
                                                <label class="custom-control-label text-start" for="one_star">1 <i class="far fa-star f-s-11 text-warning"></i></label>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="row gx-3">
                                <div class="col-md-6 col-xxl-3 grid-margin">
                                    <div class="product-grid h-100">
                                        <div class="product-img">
                                            <a href="#">
                                                <div class="label-offer bg-danger">Sale</div><img src="../img/products/product-grid/product-01.jpg" alt="...">
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <h3><a href="#" class="right-sidebar-toggle butn-header" data-sidebar-id="main-right-sidebar">Smart Digital Watch</a></h3>
                                            <h4 class="price">
                                                <span class="regular-price line-through">$99.00</span>
                                                <span class="offer-price">$90.00</span>
                                            </h4>
                                        </div>
                                        <div class="product-buttons">
                                            <ul class="ps-0">
                                                <li><a href="#" class="btn-link" title="Edit"><i class="far fa-edit me-1"></i> Edit</a></li>
                                                <li><a href="#" class="btn-link" title="Delete"><i class="far fa-trash-alt me-1"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-3 grid-margin">
                                    <div class="product-grid h-100">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="../img/products/product-grid/product-02.jpg" alt="..."></a>
                                        </div>
                                        <div class="product-description">
                                            <h3><a href="#" class="right-sidebar-toggle butn-header" data-sidebar-id="main-right-sidebar">Desktop Speakers</a></h3>
                                            <h4 class="price">
                                                <span class="offer-price">$29.00</span>
                                            </h4>
                                        </div>
                                        <div class="product-buttons">
                                            <ul class="ps-0">
                                                <li><a href="#" class="btn-link" title="Edit"><i class="far fa-edit me-1"></i> Edit</a></li>
                                                <li><a href="#" class="btn-link" title="Delete"><i class="far fa-trash-alt me-1"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-3 grid-margin">
                                    <div class="product-grid h-100">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="../img/products/product-grid/product-03.jpg" alt="..."></a>
                                        </div>
                                        <div class="product-description">
                                            <h3><a href="#" class="right-sidebar-toggle butn-header" data-sidebar-id="main-right-sidebar">Wireless Controller</a></h3>
                                            <h4 class="price">
                                                <span class="regular-price line-through">$57.00</span>
                                                <span class="offer-price">$55.00</span>
                                            </h4>
                                        </div>
                                        <div class="product-buttons">
                                            <ul class="ps-0">
                                                <li><a href="#" class="btn-link" title="Edit"><i class="far fa-edit me-1"></i> Edit</a></li>
                                                <li><a href="#" class="btn-link" title="Delete"><i class="far fa-trash-alt me-1"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-3 grid-margin">
                                    <div class="product-grid h-100">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="../img/products/product-grid/product-04.jpg" alt="..."></a>
                                        </div>
                                        <div class="product-description">
                                            <h3><a href="#" class="right-sidebar-toggle butn-header" data-sidebar-id="main-right-sidebar">Wireless Headset</a></h3>
                                            <h4 class="price">
                                                <span class="offer-price">$28.00</span>
                                            </h4>
                                        </div>
                                        <div class="product-buttons">
                                            <ul class="ps-0">
                                                <li><a href="#" class="btn-link" title="Edit"><i class="far fa-edit me-1"></i> Edit</a></li>
                                                <li><a href="#" class="btn-link" title="Delete"><i class="far fa-trash-alt me-1"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-3 grid-margin">
                                    <div class="product-grid h-100">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="../img/products/product-grid/product-06.jpg" alt="..."></a>
                                        </div>
                                        <div class="product-description">
                                            <h3><a href="#" class="right-sidebar-toggle butn-header" data-sidebar-id="main-right-sidebar">Gear 360 Video Editor</a></h3>
                                            <h4 class="price">
                                                <span class="regular-price line-through">$99.00</span>
                                                <span class="offer-price">$88.00</span>
                                            </h4>
                                        </div>
                                        <div class="product-buttons">
                                            <ul class="ps-0">
                                                <li><a href="#" class="btn-link" title="Edit"><i class="far fa-edit me-1"></i> Edit</a></li>
                                                <li><a href="#" class="btn-link" title="Delete"><i class="far fa-trash-alt me-1"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-3 grid-margin">
                                    <div class="product-grid h-100">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="../img/products/product-grid/product-07.jpg" alt="..."></a>
                                        </div>
                                        <div class="product-description">
                                            <h3><a href="#" class="right-sidebar-toggle butn-header" data-sidebar-id="main-right-sidebar">Standalone VR Headset</a></h3>
                                            <h4 class="price">
                                                <span class="offer-price">$110.00</span>
                                            </h4>
                                        </div>
                                        <div class="product-buttons">
                                            <ul class="ps-0">
                                                <li><a href="#" class="btn-link" title="Edit"><i class="far fa-edit me-1"></i> Edit</a></li>
                                                <li><a href="#" class="btn-link" title="Delete"><i class="far fa-trash-alt me-1"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-3 grid-margin">
                                    <div class="product-grid h-100">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="../img/products/product-grid/product-08.jpg" alt="..."></a>
                                        </div>
                                        <div class="product-description">
                                            <h3><a href="#" class="right-sidebar-toggle butn-header" data-sidebar-id="main-right-sidebar">USB Flash Drive</a></h3>
                                            <h4 class="price">
                                                <span class="regular-price line-through">$21.00</span>
                                                <span class="offer-price">$15.00</span>
                                            </h4>
                                        </div>
                                        <div class="product-buttons">
                                            <ul class="ps-0">
                                                <li><a href="#" class="btn-link" title="Edit"><i class="far fa-edit me-1"></i> Edit</a></li>
                                                <li><a href="#" class="btn-link" title="Delete"><i class="far fa-trash-alt me-1"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-3 grid-margin">
                                    <div class="product-grid h-100">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="../img/products/product-grid/product-09.jpg" alt="..."></a>
                                        </div>
                                        <div class="product-description">
                                            <h3><a href="#" class="right-sidebar-toggle butn-header" data-sidebar-id="main-right-sidebar">Mini Bluetooth Speaker</a></h3>
                                            <h4 class="price">
                                                <span class="offer-price">$29.00</span>
                                            </h4>
                                        </div>
                                        <div class="product-buttons">
                                            <ul class="ps-0">
                                                <li><a href="#" class="btn-link" title="Edit"><i class="far fa-edit me-1"></i> Edit</a></li>
                                                <li><a href="#" class="btn-link" title="Delete"><i class="far fa-trash-alt me-1"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-3 grid-margin">
                                    <div class="product-grid h-100">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="../img/products/product-grid/product-10.jpg" alt="..."></a>
                                        </div>
                                        <div class="product-description">
                                            <h3><a href="#" class="right-sidebar-toggle butn-header" data-sidebar-id="main-right-sidebar">Mobile Earphone</a></h3>
                                            <h4 class="price">
                                                <span class="offer-price">$31.00</span>
                                            </h4>
                                        </div>
                                        <div class="product-buttons">
                                            <ul class="ps-0">
                                                <li><a href="#" class="btn-link" title="Edit"><i class="far fa-edit me-1"></i> Edit</a></li>
                                                <li><a href="#" class="btn-link" title="Delete"><i class="far fa-trash-alt me-1"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-3 grid-margin">
                                    <div class="product-grid h-100">
                                        <div class="product-img">
                                            <a href="shop-product-detail.html">
                                                <img src="../img/products/product-grid/product-11.jpg" alt="..."></a>
                                        </div>
                                        <div class="product-description">
                                            <h3><a href="#" class="right-sidebar-toggle butn-header" data-sidebar-id="main-right-sidebar">Speech Enabled Device</a></h3>
                                            <h4 class="price">
                                                <span class="regular-price line-through">$85.00</span>
                                                <span class="offer-price">$75.00</span>
                                            </h4>
                                        </div>
                                        <div class="product-buttons">
                                            <ul class="ps-0">
                                                <li><a href="#" class="btn-link" title="Edit"><i class="far fa-edit me-1"></i> Edit</a></li>
                                                <li><a href="#" class="btn-link" title="Delete"><i class="far fa-trash-alt me-1"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-3 grid-margin">
                                    <div class="product-grid h-100">
                                        <div class="product-img">
                                            <a href="shop-product-detail.html">
                                                <img src="../img/products/product-grid/product-12.jpg" alt="..."></a>
                                        </div>
                                        <div class="product-description">
                                            <h3><a href="#" class="right-sidebar-toggle butn-header" data-sidebar-id="main-right-sidebar">Apple iPhone X</a></h3>
                                            <h4 class="price">
                                                <span class="offer-price">$1214.50</span>
                                            </h4>
                                        </div>
                                        <div class="product-buttons">
                                            <ul class="ps-0">
                                                <li><a href="#" class="btn-link" title="Edit"><i class="far fa-edit me-1"></i> Edit</a></li>
                                                <li><a href="#" class="btn-link" title="Delete"><i class="far fa-trash-alt me-1"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-3 grid-margin">
                                    <div class="product-grid h-100">
                                        <div class="product-img">
                                            <a href="shop-product-detail.html">
                                                <img src="../img/products/product-grid/product-13.jpg" alt="..."></a>
                                        </div>
                                        <div class="product-description">
                                            <h3><a href="#" class="right-sidebar-toggle butn-header" data-sidebar-id="main-right-sidebar">Plugs And Sockets</a></h3>
                                            <h4 class="price">
                                                <span class="regular-price line-through">$22.00</span>
                                                <span class="offer-price">$11.40</span>
                                            </h4>
                                        </div>
                                        <div class="product-buttons">
                                            <ul class="ps-0">
                                                <li><a href="#" class="btn-link" title="Edit"><i class="far fa-edit me-1"></i> Edit</a></li>
                                                <li><a href="#" class="btn-link" title="Delete"><i class="far fa-trash-alt me-1"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-4 grid-margin">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
    
@endsection