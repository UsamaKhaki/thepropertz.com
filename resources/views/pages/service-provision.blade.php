@extends('layouts.app')
@section('content')

    <x-header-component
        background="{{ asset('images/banner/banner_img.jpg') }}"
        title="Services"
    >
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li>Services</li>
        </ol>
    </x-header-component>

    <section id="ts-service" class="ts-service section-padding">
        <div class="container">
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
                        <div class="ts-service-box-img pull-left">
                            <img src="images/icon-image/service1.png" alt="">
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
                        <div class="ts-service-box-img pull-left">
                            <img src="images/icon-image/service4.png" alt="">
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
                        <div class="ts-service-box-img pull-left">
                            <img src="images/icon-image/service2.png" alt="">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="ts-title"><a href="#">Land Minning</a></h3>
                            <p>Benefit of the socie where we oper ate success for the website</p>
                        </div>
                    </div><!-- Service 1 end -->
                </div>
                <!-- Col end -->

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="ts-service-box">
                        <div class="ts-service-box-img pull-left">
                            <img src="images/icon-image/service5.png" alt="">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="ts-title"><a href="#">Crane Service</a></h3>
                            <p>Benefit of the socie where we oper ate success for the website</p>
                        </div>
                    </div><!-- Service 2 end -->
                </div>
                <!-- Col end -->

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="ts-service-box">
                        <div class="ts-service-box-img pull-left">
                            <img src="images/icon-image/service3.png" alt="">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="ts-title"><a href="#">Architecture</a></h3>
                            <p>Benefit of the socie where we oper ate success for the website</p>
                        </div>
                    </div><!-- Service 1 end -->
                </div>
                <!-- Col end -->

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="ts-service-box">
                        <div class="ts-service-box-img pull-left">
                            <img src="images/icon-image/service6.png" alt="">
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

    <section id="ts-testimonial-standard" class="ts-testimonial-standard section-padding"
             style="background: url(images/testimonial/testimonial_bg2.jpg);background-attachment: inherit; background-size: cover;">
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
                            <span class="testimonial-text"><i class="fa fa-quote-left" aria-hidden="true"></i>Without taking proper consideration, you could go ahead with a mismatched policy, meaning you could end up paying too much for premiums or you could find yourself.</span>
                            <div class="testimonial-footer">
                                <img src="images/testimonial_client.png" alt="" class="img-fluid testimonial-img">
                                <h3 class="author-name">Jonas Blue</h3>
                                <span class="author-designation">Ceo Media</span>
                            </div>
                        </div>
                        <div class="testimonial-author-content">
                            <span class="testimonial-text"><i class="fa fa-quote-left" aria-hidden="true"></i>Without taking proper consideration, you could go ahead with a mismatched policy, meaning you could end up paying too much for premiums or you could find yourself.</span>
                            <div class="testimonial-footer">
                                <img src="images/testimonial_client.png" alt="" class="img-fluid testimonial-img">
                                <h3 class="author-name">Robert Tutul</h3>
                                <span class="author-designation">Wordpress Dev.</span>
                            </div>
                        </div>
                        <div class="testimonial-author-content">
                            <span class="testimonial-text"><i class="fa fa-quote-left" aria-hidden="true"></i>Without taking proper consideration, you could go ahead with a mismatched policy, meaning you could end up paying too much for premiums or you could find yourself.</span>
                            <div class="testimonial-footer">
                                <img src="images/testimonial_client.png" alt="" class="img-fluid testimonial-img">
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

    <!-- client start -->
    <section id="ts-client-area" class="ts-client-area section-padding ts-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="client-intro text-center">
                        <h2 class="section-title"><span>Client's</span> Trusted Client's</h2>
                    </div>
                </div><!-- col end -->
            </div><!-- row end -->

            <div class="row">
                <div id="partners-carousel" class="col-sm-12 owl-carousel owl-theme text-center partners">
                    <figure class="item partner-logo">
                        <a href="#"><img class="img-fluid" src="images/partners/partner1.png" alt=""/></a>
                    </figure>

                    <figure class="item partner-logo">
                        <a href="#"><img class="img-fluid" src="images/partners/partner2.png" alt=""/></a>
                    </figure>

                    <figure class="item partner-logo">
                        <a href="#"><img class="img-fluid" src="images/partners/partner3.png" alt=""/></a>
                    </figure>
                </div><!--/ Owl carousel end -->

            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </section><!--/ Partners end -->

@stop
