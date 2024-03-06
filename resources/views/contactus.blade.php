@extends('layouts.app')

@section('content')

@include('header')

<!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section bg-img cover-background" data-background="img/bg/page-title.jpg">
            <div class="container">

                <div class="title-info">
                    <h1>Contact Us</h1></div>
                <div class="breadcrumbs-info">
                    <ul class="ps-0">
                        <li><a href="home-shop-1.html">Home</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

            </div>
        </section>
         <!-- CONTACT
        ================================================== -->

        <section class="md">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="contact-info rounded h-100">
                            <div class="contact-icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <h3 class="display-29 font-weight-500 mb-2">Phone Numbers</h3>
                            <ul class="mb-0 list-unstyled">
                                <li><Link to="/">+91 9918453439</Link></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="contact-info rounded h-100">
                            <div class="contact-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <h3 class="display-29 font-weight-500 mb-2">Location</h3>
                            <p class="mb-0">Netra Jyoti Eye Clinic Near Gosaidaspur Chauraha
                                <br/> Kannuaj, India</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info rounded h-100">
                            <div class="contact-icon">
                                <i class="ti-email"></i>
                            </div>
                            <h3 class="display-29 font-weight-500 mb-2">Email Address</h3>
                            <ul class="mb-0 list-unstyled">
                                <li><Link to="/">bpratap060@gmail.com</Link></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="pt-0">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 mb-1-9 mb-md-0">

                    <div class="store-details">
                        <div class="contact-img">
                            <img src="img/team/shop1.jpg" alt="..."/>
                        </div>
                        <div class="info-box">
                            <h5>Kannauj, INDIA</h5>
                            <ul class="mb-0 list-unstyled">
                                <li class="mb-4">
                                    <div class="d-flex align-top">
                                        <div class="info-icon">
                                            <i class="ti-location-pin"></i>
                                        </div>
                                        <div class="ps-4">
                                            <h6 class="info-label">Find us</h6>
                                            <Link to="/">Netra Jyoti Eye Clinic Near Gosaidaspur Chauraha, Kannuaj, INDIA</Link>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="d-flex align-top">
                                        <div class="info-icon">
                                            <i class="ti-mobile"></i>
                                        </div>
                                        <div class="ps-4">
                                            <h6 class="info-label">Call us</h6>
                                            <Link to="/">+91 9918453439</Link>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-top">
                                        <div class="info-icon">
                                            <i class="ti-email"></i>
                                        </div>
                                        <div class="ps-4">
                                            <h6 class="info-label">Write us</h6>
                                            <Link to="/">bpratap060@gmail.com</Link>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                    
            </div>

        </div>
    </section>


    <section class="pt-0 md">
        <div class="container">

            <div class="text-center mb-1-9 mb-lg-2-3">
                <h2 class="mb-0">Get In Touch</h2>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto">

                    <form>

                        <div class="row">

                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Your name here"/>
                                </div>

                            </div>

                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Your Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Your email here"/>
                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input type="text" class="form-control" name="companyname" placeholder="Your company name"/>
                                </div>

                            </div>

                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input type="text" class="form-control" name="phone" placeholder="+40-123 456 789"/>
                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-12 mb-4">

                                <label>Message</label>
                                <div class="form-group mb-1">
                                    <textarea rows="3" class="form-control" placeholder="Tell us a few words"></textarea>
                                </div>

                            </div>

                        </div>

                        <button type="button" class="butn-style2">Send Message</button>

                    </form>

                </div>
            </div>
        </div>
    </section>


    <div class="row position-relative">
        <div class="col-12">
            <iframe title="Google Map - INDIA" width="100%" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=Gosaidaspur Chauraha Sangyugta Marg,Kannuj,India&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>

@endsection