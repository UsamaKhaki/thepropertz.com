
<footer id="ts-footer" class="ts-footer" style="background: url(images/footer_img.jpg); background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <!-- End Footer info -->
                <a href="{{ route('page-index') }}" class="footer-logo">
                    <img height="50" src="{{ asset('images/logos/logo-white.svg') }}" alt="">
                </a>
                <div class="widget-details">
                    <h3 class="widget-title">Head Office</h3>
                    <ul>
                        <li>{{ config('appConst.address') }}</li>
                        <li>Tel : <a class="text-white" href="tel:{{ config('appConst.phone_number') }}">{{ config('appConst.phone_number') }}</a> - <a class="text-white" href="tel:{{ config('appConst.phone_number_2') }}">{{ config('appConst.phone_number_2') }}</a></li>
                        <li>Email : <a class="text-white" href="mailto:{{ config('appConst.email') }}">{{ config('appConst.email') }}</a></li>
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
                        <li><a href="{{ route('page-service-provision') }}">Service Provisions</a></li>
                        <li><a href="#">Recent Projects</a></li>
                        <li><a href="#">Code Of Conduct</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="{{ route('page-contact-us') }}">Contact Us</a></li>
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
                    <a href="tel:{{ config('appConst.phone_number') }}" class="call-us">or
                        <span> Call Us : {{ config('appConst.phone_number') }}</span>
                    </a>
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
                <span>Copyright © {{ now() ->format('Y')}} <a href="{{ route('page-index') }}">The Propertz</a>. All Right Reserved.</span>
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
<script>
    $(function () {
        sidebarActive('{{ url()->current() }}')
    })
</script>
</body>
</html>
