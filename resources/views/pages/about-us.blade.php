@extends('layouts.app')
@section('content')

    <x-header-component
        background="{{ asset('images/banner/banner_img.jpg') }}"
        title="About Us"
    >
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li>About</li>
        </ol>
    </x-header-component>

    <!-- Slider section end -->
    <section id="ts-aboutus-classic" class="ts-aboutus-classic pt-100 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-intro">
                        <h2 class="column-title"><span>About Us</span> We are leading International
                            company in the world</h2>
                        <h3 class="intro-desc">{{ config('app.name') }} is an organization of well dynamic and well established companies.</h3>
                        <p>
                            The company conducting business of consultancy, marketing, developing and service initially in the area of real estate and verity of
                            business in future endeavour with facilities across the country.
                        </p>
                        <a href="#" class="btn btn-primary">Our Services<i class="icon icon-arrow-right"></i></a>
                        <a href="#" class="btn btn-dark">Contact Us<i class="icon icon-arrow-right"></i></a>
                    </div>
                </div><!-- col end -->

                <div class="col-lg-6">
                    <div class="ts-about-feature">
                        <div class="about-feature-info">
                            <span class="about-feature-icon">
                                <img src="{{ asset('images/features/features_icon1.png') }}" alt="">
                            </span>
                            <div class="about-feature-content">
                                <h3 class="ts-title">Consultant</h3>
                                <p>
                                    We provide consultancy and marketing assistance to our client honorable customers, clients and investors for buying & selling
                                    all type of properties (Residential, Commercial, Industrial, Agricultural and Farms.
                                </p>
                            </div> <!-- Feature content end -->
                        </div> <!-- Feature Info End -->
                    </div>
                    <div class="ts-about-feature">
                        <div class="about-feature-info">
                            <span class="about-feature-icon">
                                <img src="{{ asset('images/features/features_icon2.png') }}" alt="">
                            </span>
                            <div class="about-feature-content">
                                <h3 class="ts-title">Developers</h3>
                                <p>
                                    We have capabilities to accomplish a “ Turn Key " project as well as individual segment of real estate business.
                                    We provide assistance in architecting, building construction, town planning and land development / management.
                                </p>
                            </div> <!-- Feature content end -->
                        </div> <!-- Feature Info End -->
                    </div>
                    <div class="ts-about-feature">
                        <div class="about-feature-info">
                            <span class="about-feature-icon">
                                <img src="{{ asset('images/features/features_icon3.png') }}" alt="">
                            </span>
                            <div class="about-feature-content">
                                <h3 class="ts-title">Service Providers</h3>
                                <p>
                                    We have the required expertise and resources to deliver quality, efficient and competitive services, Our team is powered with
                                    competent, motivated and highly qualified professional in the field of engineering services.
                                </p>
                            </div> <!-- Feature content end -->
                        </div> <!-- Feature Info End -->
                    </div>

                </div><!-- col end -->
            </div><!-- row end -->
        </div><!-- container end -->
    </section>

    <section class="ts-funfact section-padding" style="background: url(./images/funfact_bg.jpg);background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms"
                     style="visibility: visible; animation-duration: 1.5s; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="single-funfact">
                        <i class="icon icon-Funfacts"></i>
                        <h3 class="funfact-title" data-counter="1120">663</h3>
                        <p>Revenue in 2017 (Million)</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms"
                     style="visibility: visible; animation-duration: 1.5s; animation-delay: 400ms; animation-name: fadeInUp;">
                    <div class="single-funfact">
                        <i class="icon icon-Funfacts-2"></i>
                        <h3 class="funfact-title" data-counter="1520">900</h3>
                        <p>Collaegues &amp; Counting</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms"
                     style="visibility: visible; animation-duration: 1.5s; animation-delay: 500ms; animation-name: fadeInUp;">
                    <div class="single-funfact">
                        <i class="icon icon-Funfacts-3"></i>
                        <h3 class="funfact-title" data-counter="525">311</h3>
                        <p>Successfully Project</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms"
                     style="visibility: visible; animation-duration: 1.5s; animation-delay: 600ms; animation-name: fadeInUp;">
                    <div class="single-funfact">
                        <i class="icon icon-Funfacts-4"></i>
                        <h3 class="funfact-title" data-counter="25">15</h3>
                        <p>Year of experience</p>
                    </div>
                </div>
            </div><!-- row end-->
        </div><!-- .container end -->
    </section>

    <section id="ts-feature-block" class="ts-feature-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6" style="background: url('{{ asset('images/features/feature-block-bg1.jpg') }}');background-size:cover">
                    <div class="feature-block-intro">
                        <h2 class="column-title"><span>Sustainability</span> Committed to keep people
                            healthy &amp; safe</h2>
                        <p>Benefit of the socie where we operate. A success website obusly needs great design to be one</p>
                        <a href="#" class="btn btn-primary">Work With Us<i class="icon icon-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6" style="background: url('{{ asset('images/features/feature-block-bg2.jpg') }}');background-size:cover">
                    <div class="feature-block-desc">
                        <h2 class="feature-block-title">We are best in the field</h2>
                        <p>Benefit of the socie where we operate. A success website obusly needs great design to be one of the top 10 IT</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-block-desc">
                                    <h3><img src="{{ asset('images/features/best_icon1.png') }}" alt=""> Sustainability</h3>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-block-desc">
                                    <h3><img src="{{ asset('images/features/best_icon2.png') }}" alt=""> Project on time</h3>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-block-desc">
                                    <h3><img src="{{ asset('images/features/best_icon3.png') }}" alt=""> Modern Tech</h3>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-block-desc">
                                    <h3><img src="{{ asset('images/features/best_icon4.png') }}" alt=""> Latest Design</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Partners start -->
    <section id="ts-partner-area" class="ts-partner-area pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">
                        Our Partners
                    </h2>
                </div>
            </div>
            <div class="row">
                <div id="partners-carousel" class="col-sm-12 owl-carousel owl-theme text-center partners">
                    <figure class="item partner-logo">
                        <a href="#"><img class="img-fluid" src="{{ asset('images/partners/partner1.png') }}" alt="" /></a>
                    </figure>

                    <figure class="item partner-logo">
                        <a href="#"><img class="img-fluid" src="{{ asset('images/partners/partner2.png') }}" alt="" /></a>
                    </figure>

                    <figure class="item partner-logo">
                        <a href="#"><img class="img-fluid" src="{{ asset('images/partners/partner3.png') }}" alt="" /></a>
                    </figure>
                </div>
                <!--/ Owl carousel end -->
            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </section>
    <!--/ Partners end -->

@endsection
