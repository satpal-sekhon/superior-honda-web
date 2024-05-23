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
                                        <a href="#">Read more <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z" fill="currentColor"/>
                                        </svg></a>
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
                                            <a href="#">Read more <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z" fill="currentColor"/>
                                            </svg></a>
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
                                            <a href="#">Read more <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z" fill="currentColor"/>
                                            </svg></a>
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
                                            <a href="#">Read more <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z" fill="currentColor"/>
                                            </svg></a>
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
                                            <a href="#">Read more <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z" fill="currentColor"/>
                                            </svg></a>
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
                                            <a href="#">Read more <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z" fill="currentColor"/>
                                            </svg></a>
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
