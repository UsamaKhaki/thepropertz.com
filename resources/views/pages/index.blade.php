<!doctype html>
<html>
<head>
    <!-- Basic Page Needs =====================================-->
    <meta charset="utf-8">
    <!-- Site Title- -->
    <title>The Propertz</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Mobile Specific Metas ================================-->

    <!-- <link rel="icon" type="image/png" href="favicon.ico"> -->
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('css/isotope.css') }}">


    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <!--For Plugins external css-->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">


    <!--Theme custom css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- nav search -->
<div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="xs-search-panel">
                <form action="#" method="POST" class="xs-search-group">
                    <input type="search" class="form-control" name="search" id="search" placeholder="Search">
                    <button type="submit" class="search-button"><i class="icon icon-search1"></i></button>
                </form>
            </div>
        </div>
    </div>
</div><!-- End xs modal -->
<!-- end language switcher strart -->


<!--Home page style-->
<header id="header" class="header-transparent">
    <div class="nav ts-nav topbar">
        <div class="container">
            <div class="row ">
                <div class="col-lg-2">
                    <!--  <a class="nav-brand" href="#"></a>-->
                    <div class="logo-area">
                        <a href="index.html" class="logo">
                            <img class="img-fluid" src="{{ asset('images/footer_logo.png') }}" alt="">
                        </a>
                    </div>
                </div><!-- Col end -->
                <div class="col-lg-10">
                    <div class="top-bar pull-right">
                        <ul class="header-nav-right-info">
                            <li>
                                <i class="icon icon-phone2"></i>
                                <span>+1 (212) 255-5511</span>
                                Make a call
                            </li>
                            <li>
                                <i class="icon icon-envelope2"></i>
                                <span>contact@domain.com</span>
                                Drop us a line
                            </li>
                            <li>
                                <i class="icon icon-map-marker1"></i>
                                <span>1105 Roosevelt Street CA</span>
                                Get Dirction
                            </li>
                        </ul>
                    </div><!-- Top bar end -->

                </div>
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div>

    <!-- navbar container start -->
    <div class="navbar-container navbar-sticky">
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="dropdown nav-item active">
                            <a href="#" class="" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu active" role="menu">
                                <li class="active"><a href="index.html">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                                <li><a href="index-3.html">Home Three</a></li>
                                <li><a href="index-4.html">Home Four</a></li>
                                <li><a href="index-5.html">Home Five</a></li>
                            </ul>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="#" class="" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="pricing.html">Pricing Table</a></li>
                                <li><a href="testimonial.html">Testimonial</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="" data-toggle="dropdown">Solutions <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="service.html">Service</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                            </ul>

                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="" data-toggle="dropdown">Projects <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="project-1.html">Project 1</a></li>
                                <li><a href="project-2.html">Project 2</a></li>
                                <li><a href="project-details.html">Project Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="blog-left-sidebar.html" class="" data-toggle="dropdown"> Blog <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="blog-left-sidebar.html" class="" data-toggle="dropdown"> Contact <i class="fa fa-angle-down"></i> </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="contact-1.html">Contact 1</a></li>
                                <li><a href="contact-2.html">Contact 2</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav-right ml-auto form-inline">
                        <li class="nav-search-btn">
                            <a href="#modal-popup-2" class="xs-modal-popup"><i class="icon icon-search1"></i></a>
                            <!-- xs modal -->
                        </li>
                        <li class="nav-button">
                            <a href="#" class="quote-btn">Get a Quote</a>
                        </li>
                    </ul><!-- Right menu end -->
                </div>

            </nav>
        </div>
    </div>
    <!-- navbar contianer end -->
</header>
<!-- Header end -->

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
                                    <a href="#" class="btn btn-primary">
                                        Our Servies
                                        <i class="icon icon-arrow-right"></i>
                                    </a>
                                    <a href="#" class="btn btn-border">
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
    <div class="slider-item" style="background-image: url('{{ asset('images/slider/slider5.jpg') }}');">
        <div class="hero-table">
            <div class="hero-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto">
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
                                    <a href="#" class="btn btn-primary">
                                        Our Servies
                                        <i class="icon icon-arrow-right"></i>
                                    </a>
                                    <a href="#" class="btn btn-border">
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
    <div class="slider-item" style="background-image: url('{{ asset('images/slider/slider6.jpg') }}');">
        <div class="hero-table">
            <div class="hero-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto">
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
                                    <a href="#" class="btn btn-primary">
                                        Our Servies
                                        <i class="icon icon-arrow-right"></i>
                                    </a>
                                    <a href="#" class="btn btn-border">
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
                            25 years of undefeated
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
                                <h3 class="funfact-title" data-counter="525">525<sup>+</sup></h3>
                                <p>Successfully Project Finished</p>
                            </div>
                        </li>
                        <li>
                            <div class="single-funfact">
                                <i class="icon icon-Funfacts-4"></i>
                                <h3 class="funfact-title" data-counter="25">25<sup>+</sup></h3>
                                <p>Year of experience With Proud</p>
                            </div>
                        </li>
                        <li>
                            <div class="single-funfact">
                                <i class="icon icon-Funfacts"></i>
                                <h3 class="funfact-title" data-counter="1120">$1120</h3>
                                <p>Revenue (Million) And Investment</p>
                            </div>
                        </li>
                        <li>
                            <div class="single-funfact">
                                <i class="icon icon-Funfacts-2"></i>
                                <h3 class="funfact-title" data-counter="1520">1520</h3>
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
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="ts-service-box pb-60">
                    <div class="srevice-img">
                        <img class="img-fluid" src="{{ asset('images/service/service1.jpg') }}" alt="">
                    </div>
                    <div class="ts-service-box-img pull-left">
                        <img src="{{ asset('images/icon-image/service1.png') }}" alt="">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="ts-title"><a href="#">Building Staffs</a></h3>
                        <p>Benefit of the socie where we oper ate success for the website</p>
                    </div>
                </div><!-- Service 1 end -->
            </div>
            <!-- Col end -->

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="ts-service-box pb-60">
                    <div class="srevice-img">
                        <img class="img-fluid" src="{{ asset('images/service/service2.jpg') }}" alt="">
                    </div>
                    <div class="ts-service-box-img pull-left">
                        <img src="{{ asset('images/icon-image/service4.png') }}" alt="">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="ts-title"><a href="#">Material Supply</a></h3>
                        <p>Benefit of the socie where we oper ate success for the website</p>
                    </div>
                </div><!-- Service 2 end -->
            </div>
            <!-- Col end -->

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="ts-service-box pb-60">
                    <div class="srevice-img">
                        <img class="img-fluid" src="{{ asset('images/service/service3.jpg') }}" alt="">
                    </div>
                    <div class="ts-service-box-img pull-left">
                        <img src="{{ asset('images/icon-image/service2.png') }}" alt="">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="ts-title"><a href="#">Land Minning</a></h3>
                        <p>Benefit of the socie where we oper ate success for the website</p>
                    </div>
                </div><!-- Service 1 end -->
            </div>
            <!-- Col end -->

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="ts-service-box pb-60">
                    <div class="srevice-img">
                        <img class="img-fluid" src="{{ asset('images/service/service4.jpg') }}" alt="">
                    </div>
                    <div class="ts-service-box-img pull-left">
                        <img src="{{ asset('images/icon-image/service5.png') }}" alt="">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="ts-title"><a href="#">Crane Service</a></h3>
                        <p>Benefit of the socie where we oper ate success for the website</p>
                    </div>
                </div><!-- Service 2 end -->
            </div>
            <!-- Col end -->

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="ts-service-box pb-60">
                    <div class="srevice-img">
                        <img class="img-fluid" src="{{ asset('images/service/service5.jpg') }}" alt="">
                    </div>
                    <div class="ts-service-box-img pull-left">
                        <img src="{{ asset('images/icon-image/service3.png') }}" alt="">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="ts-title"><a href="#">Architecture</a></h3>
                        <p>Benefit of the socie where we oper ate success for the website</p>
                    </div>
                </div><!-- Service 1 end -->
            </div>
            <!-- Col end -->

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="ts-service-box pb-60">
                    <div class="srevice-img">
                        <img class="img-fluid" src="{{ asset('images/service/service6.jpg') }}" alt="">
                    </div>
                    <div class="ts-service-box-img pull-left">
                        <img src="{{ asset('images/icon-image/service6.png') }}" alt="">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="ts-title"><a href="#">Consultancy</a></h3>
                        <p>Benefit of the socie where we oper ate success for the website</p>
                    </div>
                </div><!-- Service 2 end -->
            </div><!-- Col end -->
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


<section id="team-2" class="team-2 section-padding mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title">
                    <span class="ts-title">We are professionals</span>
                    Meet The Team
                </h2>
            </div>
        </div><!-- row end-->
        <div class="row">

            <div class="col-lg-12">
                <div id="ts-team-slider" class="ts-team-slider owl-carousel">
                    <!-- slider item start -->
                    <div class="slider-item">
                        <div class="hero-table">
                            <div class="hero-table-cell">

                                <div class="ts-team mb-40">
                                    <div class="team-img-wrapper">
                                        <img class="img-fluid" alt="" src="{{ asset('images/team/team1.jpg') }}">
                                    </div>
                                    <div class="ts-team-info text-center">
                                        <h4 class="team-name">Wiz Khalifa</h4>
                                        <p class="team-designation">Chairman</p>

                                        <div class="team-social text-right">
                                            <ul class="unstyled">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul> <!-- Ul end -->
                                        </div>
                                    </div><!-- Team info 1 end-->
                                </div><!-- Team end-->


                            </div>
                            <!-- hero table cell end -->
                        </div>
                        <!-- hero table end -->
                    </div>
                    <div class="slider-item">
                        <div class="hero-table">
                            <div class="hero-table-cell">

                                <div class="ts-team mb-40">
                                    <div class="team-img-wrapper">
                                        <img class="img-fluid" alt="" src="{{ asset('images/team/team2.jpg') }}">
                                    </div>
                                    <div class="ts-team-info text-center">
                                        <h4 class="team-name">Rory Burns</h4>
                                        <p class="team-designation">Instructor</p>
                                        <div class="team-social text-right">
                                            <ul class="unstyled">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul> <!-- Ul end -->
                                        </div>
                                    </div><!-- Team info 1 end-->
                                </div><!-- Team end-->


                            </div>
                            <!-- hero table cell end -->
                        </div>
                        <!-- hero table end -->
                    </div>
                    <div class="slider-item">
                        <div class="hero-table">
                            <div class="hero-table-cell">

                                <div class="ts-team mb-40">
                                    <div class="team-img-wrapper">
                                        <img class="img-fluid" alt="" src="{{ asset('images/team/team3.jpg') }}">
                                    </div>
                                    <div class="ts-team-info text-center">
                                        <h4 class="team-name">Snoop Dogg</h4>
                                        <p class="team-designation">Co-Founder</p>
                                        <div class="team-social text-right">
                                            <ul class="unstyled">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul> <!-- Ul end -->
                                        </div>
                                    </div><!-- Team info 1 end-->
                                </div><!-- Team end-->


                            </div>
                            <!-- hero table cell end -->
                        </div>
                        <!-- hero table end -->
                    </div>
                    <div class="slider-item">
                        <div class="hero-table">
                            <div class="hero-table-cell">

                                <div class="ts-team mb-40">
                                    <div class="team-img-wrapper">
                                        <img class="img-fluid" alt="" src="{{ asset('images/team/team4.jpg') }}">
                                    </div>
                                    <div class="ts-team-info text-center">
                                        <h4 class="team-name">Isabela Moner</h4>
                                        <p class="team-designation">Project Manager</p>
                                        <div class="team-social text-right">
                                            <ul class="unstyled">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul> <!-- Ul end -->
                                        </div>
                                    </div><!-- Team info 1 end-->
                                </div><!-- Team end-->


                            </div>
                            <!-- hero table cell end -->
                        </div>
                        <!-- hero table end -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="quote-area solid-bg" id="quote-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="quote_form" style="background-image: url(images/qoute-bg.jpg)">
                    <h2 class="column-title title-white">Request a Quote</h2>
                    <p>Fill all information details to consult with us to get sevices from us</p>
                    <form class="contact-form" id="ts-contact-form" action="http://themefunction.com/html/build-bench/contact-form.php" method="POST">
                        <div class="error-container"></div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control form-name" id="name" name="f_name" placeholder="Full Name"
                                           required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control form-email" type="email" id="email" name="email"
                                           placeholder="Email Address" required="">
                                </div>
                            </div>
                        </div>
                        <!-- Row 1 end-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control form-subject" id="subject" name="subject" type="text"
                                           placeholder="Subject" required="">
                                </div>
                            </div>
                        </div>
                        <!-- Row end-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                        <textarea class="form-control form-message" placeholder="Message" rows="6" name="message"
                                                  required=""></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Row end-->
                        <div class="form-group text-right mb-0">
                            <input class="button btn btn-primary" type="submit" value="Send Message">
                        </div>
                    </form>
                </div>
                <!-- Quote form end-->
            </div>
            <!-- Col end-->
            <div class="col-lg-7">
                <div class="accordion-area">
                    <h2 class="column-title"><span>Learn More From</span> Our FAQ</h2>
                    <div id="accordion-classic" class="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne-classic">
                                <div class="card-button active">
                                    <a href="#" data-toggle="collapse" data-target="#collapseOne-classic"
                                       aria-expanded="true" aria-controls="collapseOne" class="collapsed">1. How
                                        to create cities and
                                        communities that solve?
                                    </a>
                                </div> <!-- Card Button End -->
                            </div> <!-- Card Header End -->
                            <div id="collapseOne-classic" class="collapse show" data-parent="#accordion-classic">
                                <div class="card-body">How you transform your business as technology, consumer,
                                    habits
                                    industry dynamic
                                    s change? Find out from those leading the charge.
                                </div> <!-- Card Body End -->
                            </div> <!-- Collapse End -->
                        </div> <!-- Card End -->
                        <div class="card">
                            <div class="card-header" id="headingTwo-classic">
                                <div class="card-button">
                                    <a href="#" data-toggle="collapse" data-target="#collapseTwo-classic"
                                       aria-expanded="false" aria-controls="collapseTwo">2. Construction of the
                                        multi-award winning $45
                                        million?
                                    </a>
                                </div> <!-- Card Button End -->
                            </div> <!-- Card Header End -->
                            <div id="collapseTwo-classic" class="collapse" data-parent="#accordion-classic">
                                <div class="card-body">How you transform your business as technology, consumer,
                                    habits
                                    industry dynamic
                                    s change? Find out from those leading the charge.
                                </div> <!-- Card Body End -->
                            </div> <!-- Collapse End -->
                        </div> <!-- Card End -->
                        <div class="card">
                            <div class="card-header" id="headingThree-classic">
                                <div class="card-button">
                                    <a href="#" data-toggle="collapse" data-target="#collapseThree-classic"
                                       aria-expanded="false" aria-controls="collapseTwo">3. How can I get the
                                        latest
                                        news on 2020 in Vinkmag?
                                    </a>
                                </div> <!-- Card Button End -->
                            </div> <!-- Card Header End -->
                            <div id="collapseThree-classic" class="collapse" data-parent="#accordion-classic">
                                <div class="card-body">How you transform your business as technology, consumer,
                                    habits
                                    industry dynamic
                                    s change? Find out from those leading the charge.
                                </div> <!-- Card Body End -->
                            </div> <!-- Collapse End -->
                        </div> <!-- Card End -->

                    </div> <!-- Accordion End -->
                </div>
            </div>
            <!-- Col end-->
        </div>
        <!-- Content row end-->
    </div>
    <!-- Container end-->
</section>

<section id="ts-project-area" class="ts-project-area mt-80 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-item">

                    <h2 class="section-title">
                        <span class="ts-title">Our Works</span>
                        Latest Projects
                    </h2>
                </div>
                <div class="recent-folio-menu">
                    <ul>
                        <li class="active filter" data-filter="all">All Projects </li>
                        <li class="filter" data-filter=".cat1">Minning</li>
                        <li class="filter" data-filter=".cat2">Building</li>
                        <li class="filter" data-filter=".cat3">Home</li>
                        <li class="filter" data-filter=".cat4">Bridge </li>
                    </ul>
                </div>
            </div>
        </div><!-- row end-->
        <div class="row" id="mixcontent">
            <div class="col-lg-3 mix cat3 cat2 col-sm-6 mb-10">
                <a href="#" class="ts-image-popup" data-effect="mfp-zoom-in">
                    <div class="single-recent-work">
                        <img src="{{ asset('images/projects/project_img_1.jpg') }}" alt="">
                        <div class="recet-work-footer">
                            <i class="icon-Our_service_3"></i>
                            <h4>Oxford Science Lab Building
                                <span>New Jursey,NY</span>
                            </h4>

                        </div>
                        <span class="link-more"><i class="icon icon-right-arrow2"></i></span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mix cat3 cat2 cat4 col-sm-6 mb-10">
                <a href="#" class="ts-image-popup" data-effect="mfp-zoom-in">
                    <div class="single-recent-work">
                        <img src="{{ asset('images/projects/project_img_2.jpg') }}" alt="">
                        <div class="recet-work-footer">
                            <i class="icon-Our_service_3"></i>
                            <h4>Oxford Science Lab Building
                                <span>New Jursey,NY</span>
                            </h4>
                        </div>
                        <span class="link-more"><i class="icon icon-right-arrow2"></i></span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mix cat3 cat1 cat2 col-sm-6 mb-10">
                <a href="#" class="ts-image-popup" data-effect="mfp-zoom-in">
                    <div class="single-recent-work">
                        <img src="{{ asset('images/projects/project_img_3.jpg') }}" alt="">
                        <div class="recet-work-footer">
                            <i class="icon-Our_service_3"></i>
                            <h4>Oxford Science Lab Building
                                <span>New Jursey,NY</span>
                            </h4>
                        </div>
                        <span class="link-more"><i class="icon icon-right-arrow2"></i></span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mix cat3 cat1 cat2 col-sm-6 mb-10">
                <a href="#" class="ts-image-popup" data-effect="mfp-zoom-in">
                    <div class="single-recent-work">
                        <img src="{{ asset('images/projects/project_img_4.jpg') }}" alt="">
                        <div class="recet-work-footer">
                            <i class="icon-Our_service_3"></i>
                            <h4>Oxford Science Lab Building
                                <span>New Jursey,NY</span>
                            </h4>
                        </div>
                        <span class="link-more"><i class="icon icon-right-arrow2"></i></span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mix cat3 cat1 col-sm-6">
                <a href="#" class="ts-image-popup" data-effect="mfp-zoom-in">
                    <div class="single-recent-work">
                        <img src="{{ asset('images/projects/project_img_5.jpg') }}" alt="">
                        <div class="recet-work-footer">
                            <i class="icon-Our_service_3"></i>
                            <h4>Oxford Science Lab Building
                                <span>New Jursey,NY</span>
                            </h4>
                        </div>
                        <span class="link-more"><i class="icon icon-right-arrow2"></i></span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mix cat1 cat2 col-sm-6">
                <a href="#" class="ts-image-popup" data-effect="mfp-zoom-in">
                    <div class="single-recent-work">
                        <img src="{{ asset('images/projects/project_img_6.jpg') }}" alt="">
                        <div class="recet-work-footer">
                            <i class="icon-Our_service_3"></i>
                            <h4>Oxford Science Lab Building
                                <span>New Jursey,NY</span>
                            </h4>
                        </div>
                        <span class="link-more"><i class="icon icon-right-arrow2"></i></span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mix cat3 cat4 col-sm-6">
                <a href="#" class="ts-image-popup" data-effect="mfp-zoom-in">
                    <div class="single-recent-work">
                        <img src="{{ asset('images/projects/project_img_7.jpg') }}" alt="">
                        <div class="recet-work-footer">
                            <i class="icon-Our_service_3"></i>
                            <h4>Oxford Science Lab Building
                                <span>New Jursey,NY</span>
                            </h4>
                        </div>
                        <span class="link-more"><i class="icon icon-right-arrow2"></i></span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mix cat4 cat2 col-sm-6">
                <a href="#" class="ts-image-popup" data-effect="mfp-zoom-in">
                    <div class="single-recent-work">
                        <img src="{{ asset('images/projects/project_img_8.jpg') }}" alt="">
                        <div class="recet-work-footer">
                            <i class="icon-Our_service_3"></i>
                            <h4>Oxford Science Lab Building
                                <span>New Jursey,NY</span>
                            </h4>
                        </div>
                        <span class="link-more"><i class="icon icon-right-arrow2"></i></span>
                    </div>
                </a>
            </div>

        </div><!-- row end-->
    </div><!-- .container end -->

</section><!-- Project area end -->

<section id="ts-cta-area" class="ts-cta-area no-padding">
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
                    <a href="#" class="btn btn-primary">
                        Contact Us
                        <i class="icon icon-arrow-right"></i>
                    </a>
                </div>
            </div><!-- col end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section>
<!-- Section end -->

<section id="ts-working-process" class="ts-working-process section-padding">
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
</section>

<section id="ts-testimonial-standard" class="ts-testimonial-standard section-padding" style="background: url(images/testimonial/testimonial_bg2.jpg);background-attachment: inherit; background-size: cover;">
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
</section>
<!-- Testimonial End -->


<!-- start latest news section -->
<section class="ts-latest-news section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title">
                    <span class="ts-title">Latest News</span>
                    Latest Media
                </h2>
            </div>
        </div><!-- row end-->
        <div class="row">
            <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                <div class="single-latest-news">
                    <div class="latest-news-img">
                        <img src="{{ asset('images/news/news1.jpg') }}" alt="">
                    </div>
                    <div class="single-news-content">
                        <span class="category-info"><i class="icon icon-book-open"></i>New</span>
                        <span class="date-info"><i class="icon icon-clock"></i>24/01/2018</span>
                        <h3 class="ts-post-title"><a href="#">Riding with friend is the best feeling in the world</a></h3>
                        <!-- <p>
                            Blessed meat whales brought there after saw sea sons Saying blessed lesser let deep
                            firmament fruitful
                        </p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                <div class="single-latest-news">
                    <div class="latest-news-img">
                        <a href="#">
                            <img src="{{ asset('images/news/news2.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="single-news-content">
                        <span class="category-info"><i class="icon icon-book-open"></i>New</span>
                        <span class="date-info"><i class="icon icon-clock"></i>24/01/2018</span>
                        <h3 class="ts-post-title"><a href="#">BMW vs Austin Martin going more higher</a></h3>
                        <!-- <p>
                            Blessed meat whales brought there after saw sea sons Saying blessed lesser let deep
                            firmament fruitful....
                        </p> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                <div class="single-latest-news">
                    <div class="latest-news-img">
                        <a href="#">
                            <img src="{{ asset('images/news/news3.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="single-news-content">
                        <span class="category-info"><i class="icon icon-book-open"></i>New</span>
                        <span class="date-info"><i class="icon icon-clock"></i>24/01/2018</span>
                        <h3 class="ts-post-title"><a href="#">Support development for more experience</a></h3>
                        <!-- <p>
                            Blessed meat whales brought there after saw sea sons Saying blessed lesser let deep
                            firmament fruitful....
                        </p> -->
                    </div>
                </div>
            </div>
        </div><!-- .row end -->
    </div><!-- .container end -->
</section><!-- End latest news section -->

<!-- Partners start -->
<section id="ts-partner-area" class="ts-partner-area pb-80">
    <div class="container">

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

                <figure class="item partner-logo">
                    <a href="#"><img class="img-fluid" src="{{ asset('images/partners/partner4.png') }}" alt="" /></a>
                </figure>

                <figure class="item partner-logo">
                    <a href="#"><img class="img-fluid" src="{{ asset('images/partners/partner5.png') }}" alt="" /></a>
                </figure>

                <figure class="item partner-logo last">
                    <a href="#"><img class="img-fluid" src="{{ asset('images/partners/partner2.png') }}" alt="" /></a>
                </figure>

                <figure class="item partner-logo last">
                    <a href="#"><img class="img-fluid" src="{{ asset('images/partners/partner1.png') }}" alt="" /></a>
                </figure>

            </div>
            <!--/ Owl carousel end -->

        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section>
<!--/ Partners end -->



<footer id="ts-footer" class="ts-footer" style="background: url(images/footer_img.jpg); background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <!-- End Footer info -->
                <a href="index.html" class="footer-logo">
                    <img src="{{ asset('images/footer_logo.png') }}" alt="footer_logo" class="img-fluid">
                </a>
                <div class="widget-details">
                    <h3 class="widget-title">Head Office</h3>
                    <ul>
                        <li>1010 Avenue, NY, USA</li>
                        <li>Tel : <span>009-215-5596</span></li>
                        <li>Email : <span>info@example.com</span></li>
                    </ul>
                    <h3>
                        Business Hour
                    </h3>
                    <p>
                        Monday To Friday 07.00 - 16.00
                    </p>
                </div>
                <!--Inner row 1 end -->
            </div>
            <!-- End Col -->
            <div class="col-md-12 col-lg-4">
                <div class="footer-widget footer-left-widget">
                    <h3 class="widget-title">About Company</h3>
                    <ul>
                        <li><a href="#">Our Investor</a></li>
                        <li><a href="#">Service Provider</a></li>
                        <li><a href="#">Recent Projects</a></li>
                        <li><a href="#">Our Responsibility</a></li>
                        <li><a href="#">Code Of Conduct</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Our Company</a></li>
                        <li><a href="#">Latest News</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Job/Career</a></li>
                        <li><a href="#">Contact Info</a></li>
                    </ul>
                </div>
                <!-- End Col -->
            </div>


            <div class="col-lg-4">
                <div class="ts-footer-info-box text-center">
                    <span class="box-border"></span>
                    <h3 class="widget-title">Subscribe for latest newsletter</h3>
                    <div class="intro-form" data-eqcss-0-0-parent="" data-eqcss-1-0-parent="">
                        <!-- START copy section: General Contact Form -->
                        <form class="contactMe small" id="ts-contact-form" action="http://themefunction.com/html/build-bench/contact-form.php" method="POST" enctype="multipart/form-data"
                              data-eqcss-0-0="" data-eqcss-1-0="">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <input type="text" name="name" data-displayname="Name" class="field"
                                           placeholder="Name" required="">
                                </div>
                            </div>
                            <div class="form-row form-row-second">
                                <div class="col-md-12">
                                    <input type="email" name="email" data-displayname="Email" class="field"
                                           placeholder="Email" required="">
                                </div>
                            </div>

                            <div class="msg "></div>

                            <div class="col-md-12 form-btn">
                                <button class="btn btn-bordered" type="submit" data-sending="Sending..." data-text="get discount">Subscribe
                                    Now <i class="icon icon-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                        <!-- END copy section: General Contact Form -->
                    </div>
                    <h4 class="call-us">or
                        <span> Call Us : +00 172839</span>
                    </h4>
                    <img src="{{ asset('images/icon-image/newsletter-bg.png') }}" alt="">

                </div>
            </div>
        </div>
        <!-- End Widget Row -->
    </div>
    <!-- End Contact Container -->
</footer>
<!-- Footer End -->

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <span>Copyright © 2019 <a href="#">Build Bench</a>. All Right Reserved.</span>
            </div>
            <!-- End Col -->
            <div class="col-md-6">
                <div class="footer-social text-right">
                    <ul class="unstyled">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul> <!-- Ul end -->
                </div>
                <!-- End Social link -->
            </div>
            <!-- End col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Copyright Container -->
</div>
<!-- Copyright end -->

<div class="BackTo">
    <a href="#" class="fa fa-angle-up" aria-hidden="true"></a>
</div>

<!-- Javascripts File
=============================================================================-->
<!-- initialize jQuery Library -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery-mixtub.js') }}"></script>
<script src="{{ asset('js/jquery.appear.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
