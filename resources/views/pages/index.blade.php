@extends('layouts.app')
@section('content')

    <div id="hero-slider" class="hero-slider owl-carousel features-slider">
        <!-- slider item start -->
        <div class="slider-item" style="background-image: url('{{ asset('images/slider/slider4.jpg') }}');">
            <div class="hero-table">
                <div class="hero-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="slider-content">
                                    <span class="slider-sub-title">Help you to</span>
                                    <h1 class="slider-title">
                                        Build your Dream
                                    </h1>
                                    <p>
                                        Benefit of the socie where we operate. A success website obusly needs great
                                        design to be one top10 IT companies in The world
                                    </p>
                                    <div class="btn-area">
                                        <a href="{{ route('page-service-provision') }}" class="btn btn-primary">
                                            Our Servies
                                            <i class="icon icon-arrow-right"></i>
                                        </a>
                                        <a href="{{ route('page-contact-us') }}" class="btn btn-border">
                                            Contact Us
                                            <i class="icon icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div> <!-- slider content end-->
                            </div> <!-- col end-->
                        </div> <!-- row end-->
                    </div>
                    <!-- container end -->
                </div>
                <!-- hero table cell end -->
            </div>
            <!-- hero table end -->
        </div>
    </div>
    <!-- Slider section end -->

    <div class="intro-about-area">
        <!-- intro  start -->
        <div class="intro-about">
            <div class="container">
                <div class="ts-shaps">
                    <img class="shap1" src="{{ asset('images/shapes/shape1.png') }}" alt="">
                </div>
                <div class="row intro-about-item">
                    <div class="col-lg-5 pl-0">
                        <div class="intro-text">
                            <h2 class="column-title">
                                <span>Our proud</span>
                                3 years of undefeated
                                success
                            </h2>
                            <p>
                                We have a long and proud history givin emphasis to environment social and economic
                                outcomes
                                to deliver places that respond.
                            </p>
                            <a href="#" class="btn btn-dark">Work with us <i class="icon icon-arrow-right"></i></a>
                            <img class="trophy-icon" src="{{ asset('images/icon-image/trophy.png') }}" alt="">
                        </div>
                    </div>
                    <!-- col end -->
                    <div class="col-lg-7 align-self-center">
                        <ul class="funfact-item">
                            <li>
                                <div class="single-funfact">
                                    <i class="icon icon-Funfacts-3"></i>
                                    <h3 class="funfact-title" data-counter="15">15<sup>+</sup></h3>
                                    <p>Successfully Project Finished</p>
                                </div>
                            </li>
                            <li>
                                <div class="single-funfact">
                                    <i class="icon icon-Funfacts-4"></i>
                                    <h3 class="funfact-title" data-counter="3">3<sup>+</sup></h3>
                                    <p>Year of experience With Proud</p>
                                </div>
                            </li>
                            <li>
                                <div class="single-funfact">
                                    <i class="icon icon-Funfacts"></i>
                                    <h3 class="funfact-title" data-counter="10">10</h3>
                                    <p>Revenue (Million) And Investment</p>
                                </div>
                            </li>
                            <li>
                                <div class="single-funfact">
                                    <i class="icon icon-Funfacts-2"></i>
                                    <h3 class="funfact-title" data-counter="45">45</h3>
                                    <p>Collaegues & Counting</p>
                                </div>
                            </li>

                        </ul><!-- row end-->
                    </div>
                </div>
                <!-- row end -->

            </div>
            <!-- container end -->
        </div>
        <!-- intro  end -->

        <!-- client-services start -->

    </div>
    <!-- Intro about area end -->

    <section id="ts-service-quality" class="ts-service ts-service-quality pt-80 pb-20">
        <div class="container">

            <div class="ts-shaps-2">
                <img class="shap2" src="{{ asset('images/shapes/shape2.png') }}" alt="">
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-intro text-center">
                        <h2 class="section-title"><span>Our Services</span> Quality Services</h2>
                    </div>
                </div><!-- col end -->
            </div><!-- row end -->
            <div class="row">
                @php
                    $services = [
                        (object)['title' => 'Architecture', 'image' => 'architect-img.jpg'],
                        // (object)['title' => 'Shuttering'],
                        (object)['title' => 'Electrician', 'image' => 'electrician.jpg'],
                        // (object)['title' => 'Iron Fitter'],
                        (object)['title' => 'Sanitary Fitter', 'image' => 'sanitary-fitter.jpg'],
                        (object)['title' => 'Aluminium & Steel Fitter', 'image' => 'alluminium-fitter.jpg'],
                        // (object)['title' => 'Carpenter'],
                        (object)['title' => 'Ceiling Decoration', 'image' => 'ceiling-image.jpg'],
                        // (object)['title' => 'Passenger Elevator'],
                        (object)['title' => 'Solar, Generator & UPS', 'image' => 'solar-generators-ups.jpg'],
                    ];
                @endphp
                @foreach($services as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="ts-service-box pb-60">
                            <div class="srevice-img">
                                <img class="img-fluid" src="{{ asset('images/service/'.$item->image) }}" alt="">
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="ts-title"><a href="#">{{ $item->title }}</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                            </div>
                        </div><!-- Service 1 end -->
                    </div>
                @endforeach
                <!-- Col end -->

            </div>
            <!-- Row end -->
        </div>
        <!-- Container end -->
    </section>
    <!-- Section end -->

    <section id="ts-feature-block" class="ts-feature-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6" style="background: url(images/features/feature-block-bg1.jpg);background-size:cover">
                    <div class="feature-block-intro">
                        <h2 class="column-title"><span>Sustainability</span> Committed to keep people
                            healthy & safe</h2>
                        <p>Benefit of the socie where we operate. A success website obusly needs great design to be one</p>
                        <a href="#" class="btn btn-primary">Work With Us<i class="icon icon-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6" style="background: url(images/features/feature-block-bg2.jpg);background-size:cover">
                    <div class="feature-block-desc">
                        <h2 class="feature-block-title">We are best in the field</h2>
                        <p>Benefit of the socie where we operate. A success website obusly needs great design to be one
                            of the top 10 IT</p>
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
    <!-- Feature Block End -->

    <section id="ts-project-area" class="ts-project-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-item">
                        <h2 class="section-title">
                            <span class="ts-title">Our Works</span>
                            Latest Projects
                        </h2>
                    </div>
                    {{--<div class="recent-folio-menu">
                        <ul>
                            <li class="active filter" data-filter="all">All Projects </li>
                            <li class="filter" data-filter=".cat1">Minning</li>
                            <li class="filter" data-filter=".cat2">Building</li>
                            <li class="filter" data-filter=".cat3">Home</li>
                            <li class="filter" data-filter=".cat4">Bridge </li>
                        </ul>
                    </div>--}}
                </div>
            </div><!-- row end-->
            <div class="row" id="mixcontent">
                <div class="col-lg-3 mix cat3 cat2 col-sm-6 mb-10">
                    <div class="ts-image-popup" data-effect="mfp-zoom-in">
                        <div class="single-recent-work">
                            <img src="{{ asset('images/projects/safiya-homes-project.jpg') }}" alt="">
                            <div class="recet-work-footer">
                                <i class="icon-Our_service_3"></i>
                                <h4>
                                    Safiya Homes
                                    <span>Faisalabad, Pakistan</span>
                                </h4>
                            </div>
                            {{--<span class="link-more"><i class="icon icon-right-arrow2"></i></span>--}}
                        </div>
                    </div>
                </div>
            </div><!-- row end-->
        </div><!-- .container end -->

    </section><!-- Project area end -->

    {{--<section id="ts-cta-area" class="ts-cta-area no-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="cta-title text-left">
                        <h2>
                            Your Trusted Construction Partner
                        </h2>
                        <p>Everything should be as simple as it is, but not simpler as you </p>
                    </div>
                    <!-- Col End -->
                </div><!-- col end -->
                <div class="col-lg-5 align-self-center">
                    <div class="cta-btn text-right">
                        <a href="{{ route('page-contact-us') }}" class="btn btn-primary">
                            Contact Us
                            <i class="icon icon-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- col end -->
            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </section>--}}
    <!-- Section end -->

    {{--<section id="ts-working-process" class="ts-working-process section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-item">

                        <h2 class="section-title">
                            <span class="ts-title">Easy Steps</span>
                            Working Process
                        </h2>
                    </div>
                </div>
                <!-- Col End -->
            </div>
            <!-- Title Row End -->
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="ts-working-box">
                        <div class="working-icon-wrapper">
                            <div class="working-icon first">
                                <img src="{{ asset('images/icon-image/working1.png') }}" alt="" class="img-fluid">
                                <span class="working-process-number">1</span>
                            </div>
                        </div>
                        <!-- Icon Wrapper End -->
                        <h3>Design Build</h3>
                    </div>
                    <!-- Working Box End -->
                </div>
                <!-- Col End -->
                <!-- <span>
                    <i class="icon icon-arrow-right">

                    </i>
                </span> -->
                <div class="col-md-3 text-center">
                    <div class="ts-working-box">
                        <div class="working-icon-wrapper">
                            <div class="working-icon">
                                <img src="{{ asset('images/icon-image/working2.png') }}" alt="" class="img-fluid">
                                <span class="working-process-number">2</span>
                            </div>
                        </div>
                        <!-- Icon Wrapper End -->
                        <h3>Preliminary Drawings</h3>
                    </div>
                    <!-- Working Box End -->
                </div>
                <!-- Col End -->
                <div class="col-md-3 text-center">
                    <div class="ts-working-box">
                        <div class="working-icon-wrapper">
                            <div class="working-icon">
                                <img src="{{ asset('images/icon-image/working3.png') }}" alt="" class="img-fluid">
                                <span class="working-process-number">3</span>
                            </div>
                        </div>
                        <!-- Icon Wrapper End -->
                        <h3>Detail Drawings</h3>
                    </div>
                    <!-- Working Box End -->
                </div>
                <!-- Col End -->
                <div class="col-md-3 text-center">
                    <div class="ts-working-box">
                        <div class="working-icon-wrapper">
                            <div class="working-icon">
                                <img src="{{ asset('images/icon-image/working4.png') }}" alt="" class="img-fluid">
                                <span class="working-process-number">4</span>
                            </div>
                        </div>
                        <!-- Icon Wrapper End -->
                        <h3>Construction</h3>
                    </div>
                    <!-- Working Box End -->
                </div>
                <!-- Col End -->
            </div>
            <!-- Content Row End -->
        </div>
        <!-- Container End -->
    </section>--}}

    {{--<section id="ts-testimonial-standard" class="ts-testimonial-standard section-padding" style="background: url(images/testimonial/testimonial_bg2.jpg);background-attachment: inherit; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-intro text-center">
                        <h2 class="section-title"><span>Client's Love</span> Testimonials</h2>
                    </div>
                </div><!-- col end -->
            </div><!-- row end -->
            <div class="row">
                <div class="col-md-12 ml-auto mr-auto text-center">
                    <div class="testimonial-carousel owl-carousel">
                        <div class="testimonial-author-content">
                                <span class="testimonial-text"><i class="fa fa-quote-left" aria-hidden="true"></i>Without
                                    taking proper consideration, you could go ahead with a mismatched policy, meaning you
                                    could end up paying too much for premiums or you could find yourself.</span>
                            <div class="testimonial-footer">
                                <img src="{{ asset('images/testimonial_client.png') }}" alt="" class="img-fluid testimonial-img">
                                <h3 class="author-name">Jonas Blue</h3>
                                <span class="author-designation">Ceo Media</span>
                            </div>
                        </div>
                        <div class="testimonial-author-content">
                                <span class="testimonial-text"><i class="fa fa-quote-left" aria-hidden="true"></i>Without
                                    taking proper consideration, you could go ahead with a mismatched policy, meaning you
                                    could end up paying too much for premiums or you could find yourself.</span>
                            <div class="testimonial-footer">
                                <img src="{{ asset('images/testimonial_client.png') }}" alt="" class="img-fluid testimonial-img">
                                <h3 class="author-name">Robert Tutul</h3>
                                <span class="author-designation">Wordpress Dev.</span>
                            </div>
                        </div>
                        <div class="testimonial-author-content">
                                <span class="testimonial-text"><i class="fa fa-quote-left" aria-hidden="true"></i>Without
                                    taking proper consideration, you could go ahead with a mismatched policy, meaning you
                                    could end up paying too much for premiums or you could find yourself.</span>
                            <div class="testimonial-footer">
                                <img src="{{ asset('images/testimonial_client.png') }}" alt="" class="img-fluid testimonial-img">
                                <h3 class="author-name">Jonas Blue</h3>
                                <span class="author-designation">Ceo Media</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- Testimonial End -->
    <section id="ts-team-classic" class="ts-team ts-team-classic section-padding" style="background: url('{{ asset('images/team/team_bg.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title title-white">
                        <span class="ts-title">Our Team</span>
                        Board of Directors
                    </h2>
                </div>
            </div><!-- row end-->
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="ts-team">
                        <div class="team-img-wrapper">
                            <img class="img-fluid" alt="" src="{{ asset('images/team/qayyum-toor.jpg') }}">
                        </div>
                        <div class="ts-team-info text-center">
                            <h4 class="team-name color-white">Ch Abdul Qayyum Toor</h4>
                            <p class="team-designation color-white mb-0">CEO & Founder</p>
                        </div><!-- Team info 1 end-->
                    </div><!-- Team end-->
                </div><!-- Col end-->
                <div class="col-lg-3">
                    <div class="ts-team">
                        <div class="team-img-wrapper">
                            <img class="img-fluid" alt="" src="{{ asset('images/team/saghir-khaki.jpg') }}">
                        </div>
                        <div class="ts-team-info text-center">
                            <h4 class="team-name color-white">Saghir Khaki</h4>
                            <p class="team-designation color-white mb-0">Co Founder</p>
                        </div><!-- Team info 1 end-->
                    </div><!-- Team end-->
                </div><!-- Col end-->
            </div> <!-- Row End -->
        </div><!-- Container end -->
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
