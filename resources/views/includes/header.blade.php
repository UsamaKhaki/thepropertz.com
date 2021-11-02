<!doctype html>
<html>
<head>
    <!-- Basic Page Needs =====================================-->
    <meta charset="utf-8">
    <!-- Site Title- -->
    <title>The Propertz</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <!-- SEO -->
    <title>The ProperTz</title>
    <meta name="description" content="Our company conducting business of consultancy, marketing, developing and service initially in the area of real estate and verity of business in future endeavour with facilities across the country.">
    <meta name="keywords" content="">
    <meta itemprop="name" content="The ProperTz">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">
    <link rel="canonical" href="{{ url()->current() }}"/>

    <!-- Facebook -->
    <meta property="og:title" content="The ProperTz" />
    <meta property="og:description" content="Our company conducting business of consultancy, marketing, developing and service initially in the area of real estate and verity of business in future endeavour with facilities across the country." />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="" />


    <!-- Twitter -->
    <meta name="twitter:title" content="The ProperTz" />
    <meta name="twitter:description" content="Our company conducting business of consultancy, marketing, developing and service initially in the area of real estate and verity of business in future endeavour with facilities across the country." />
    <meta name="twitter:url" content="{{ url()->current() }}" />
    <meta name="twitter:card" content="card" />
    <meta name="twitter:images0" content="" />

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
    <link rel="stylesheet" href="{{ asset('css/style.css?v=1.7') }}">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css?v=1.3') }}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!--Home page style-->
<header id="header" class="header-transparent">
    <div class="nav ts-nav topbar">
        <div class="container">
            <div class="row ">
                <div class="col-lg-2">
                    <!--  <a class="nav-brand" href="#"></a>-->
                    <div class="logo-area">
                        <a href="{{ route('page-index') }}" class="logo">
                            <img height="50" src="{{ asset('images/logos/logo-white.svg') }}" alt="">
                        </a>
                    </div>
                </div><!-- Col end -->
                <div class="col-lg-10">
                    <div class="top-bar pull-right">
                        <ul class="header-nav-right-info">
                            <li>
                                <i class="icon icon-phone2"></i>
                                <a href="tel:{{ config('appConst.phone_number') }}">{{ config('appConst.phone_number') }}</a>
                                Make a call
                            </li>
                            <li>
                                <i class="icon icon-envelope2"></i>
                                <a href="mailto:{{ config('appConst.email') }}">{{ config('appConst.email') }}</a>
                                Drop us a line
                            </li>
                        </ul>
                    </div><!-- Top bar end -->

                </div>
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div>

    <!-- navbar container start -->
        @include('includes.navbar')
    <!-- navbar contianer end -->

</header>
<!-- Header end -->
