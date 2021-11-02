@extends('layouts.app')
@section('content')

    <x-header-component
        background="{{ asset('images/banner/banner_img.jpg') }}"
        title="Service Provisions"
    >
        <ol class="breadcrumb">
            <li><a href="{{ route('page-index') }}">Home</a></li>
            <li>Service Provisions</li>
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
                @php
                    $services = [
                        (object)['title' => 'Architecture', 'image' => 'architect-img.jpg'],
                        (object)['title' => 'Shuttering', 'image' => 'shuttering.jpg'],
                        (object)['title' => 'Electrician', 'image' => 'electrician.jpg'],
                        (object)['title' => 'Iron Fixer', 'image' => 'iron-fixer.jpg'],
                        (object)['title' => 'Sanitary Fitter', 'image' => 'sanitary-fitter.jpg'],
                        (object)['title' => 'Aluminium & Steel Fitter', 'image' => 'alluminium-fitter.jpg'],
                        (object)['title' => 'Carpenter', 'image' => 'carpenter.jpg'],
                        (object)['title' => 'Ceiling Decoration', 'image' => 'ceiling-image.jpg'],
                        (object)['title' => 'Passenger Elevator', 'image' => 'escalator.jpg'],
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
                                <h3 class="ts-title mb-1"><a href="#">{{ $item->title }}</a></h3>
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

    {{--<section id="ts-testimonial-standard" class="ts-testimonial-standard section-padding"
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
    </section>--}}
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
