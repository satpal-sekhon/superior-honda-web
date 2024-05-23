        @extends('layouts.app')

        @section('content')
            <style>
                .banner-container {
                    position: relative;
                    display: inline-block;
                    /* Ensures container wraps around its content */
                }

                .breadcrumb__part {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    background-color: rgb(0 0 0 / 0%);
                    /* Adjust the background color and opacity as needed */
                    color: #fff;
                    /* Text color */
                    padding: 20px;
                    /* Adjust padding as needed */
                    box-sizing: border-box;
                }

                .banner-image {
                    display: block;
                    width: 100%;
                    height: auto;
                    /* Maintain aspect ratio */
                }
            </style>
            <!-- Start breadcrumb section -->
            <div class="banner-container">
                <section class="breadcrumb__part breadcrumb__bg">
                    <div class="breadcrumb__content text-left">
                        <h1 class="breadcrumb__content--title mb-20">Services</h1>
                        {{-- <ul class="breadcrumb__content--menu d-flex justify-content-left">
                    <li class="breadcrumb__content"><a href="/">Home</a>/</li>
                    <li class="breadcrumb__content"><span>services</span></li>
                </ul> --}}
                    </div>
                </section>
                <img class="banner-image" src="{{ asset('assets/images/banner/banner-service.webp') }}" alt="slider-img">
            </div>


            <!-- End breadcrumb section -->

            <!-- End breadcrumb section -->

            <!-- Start product section -->
            <section class="product__section section--padding">
                <div class="container">
                    <div class="section__heading border-bottom mb-30">
                        <h2 class="section__heading--maintitle">Our <span>Services</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Explore Our Service</h2>
                        </div>
                        <div class="col-md-8">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque culpa minus temporibus
                                consequuntur repellendus ea unde</p>
                        </div>
                    </div><br>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="{{ asset('assets/images/cards/card1.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="{{ asset('assets/images/cards/card2.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="{{ asset('assets/images/cards/card3.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div><br><br>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="{{ asset('assets/images/cards/card4.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="{{ asset('assets/images/cards/card5.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="{{ asset('assets/images/cards/card6.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div>
            </section>
            <!-- End product section -->

            <!-- Start brand section -->
            <div class="brand__section section--padding pt-0">
                <div class="container">
                    <div class="brand__section--inner d-flex justify-content-between align-items-center">
                        <div class="brang__logo--items">
                            <img class="brang__logo--img" src="{{ asset('assets/images/logo/brand-logo1.webp') }}"
                                alt="brand-logo">
                        </div>
                        <div class="brang__logo--items">
                            <img class="brang__logo--img" src="{{ asset('assets/images/logo/brand-logo2.webp') }}"
                                alt="brand-logo">
                        </div>
                        <div class="brang__logo--items">
                            <img class="brang__logo--img" src="{{ asset('assets/images/logo/brand-logo3.webp') }}"
                                alt="brand-logo">
                        </div>
                        <div class="brang__logo--items">
                            <img class="brang__logo--img" src="{{ asset('assets/images/logo/brand-logo4.webp') }}"
                                alt="brand-logo">
                        </div>
                        <div class="brang__logo--items">
                            <img class="brang__logo--img" src="{{ asset('assets/images/logo/brand-logo5.webp') }}"
                                alt="brand-logo">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End brand section -->

            <!-- Start shipping section -->
            <section class="shipping__section">
                <div class="container">
                    <div class="shipping__inner style2 d-flex">
                        <div class="shipping__items style2 d-flex align-items-center">
                            <div class="shipping__icon">
                                <img src="{{ asset('assets/images/other/shipping1.webp') }}" alt="icon-img">
                            </div>
                            <div class="shipping__content">
                                <h2 class="shipping__content--title h3">Free Shipping</h2>
                                <p class="shipping__content--desc">Free shipping over $100</p>
                            </div>
                        </div>
                        <div class="shipping__items style2 d-flex align-items-center">
                            <div class="shipping__icon">
                                <img src="{{ asset('assets/images/other/shipping2.webp') }}" alt="icon-img">
                            </div>
                            <div class="shipping__content">
                                <h2 class="shipping__content--title h3">Support 24/7</h2>
                                <p class="shipping__content--desc">Contact us 24 hours a day</p>
                            </div>
                        </div>
                        <div class="shipping__items style2 d-flex align-items-center">
                            <div class="shipping__icon">
                                <img src="{{ asset('assets/images/other/shipping3.webp') }}" alt="icon-img">
                            </div>
                            <div class="shipping__content">
                                <h2 class="shipping__content--title h3">100% Money Back</h2>
                                <p class="shipping__content--desc">You have 30 days to Return</p>
                            </div>
                        </div>
                        <div class="shipping__items style2 d-flex align-items-center">
                            <div class="shipping__icon">
                                <img src="{{ asset('assets/images/other/shipping4.webp') }}" alt="icon-img">
                            </div>
                            <div class="shipping__content">
                                <h2 class="shipping__content--title h3">Payment Secure</h2>
                                <p class="shipping__content--desc">We ensure secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End shipping section -->
        @endsection
