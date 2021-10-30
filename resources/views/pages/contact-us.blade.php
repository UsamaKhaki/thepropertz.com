@extends('layouts.app')
@section('content')

    <x-header-component
        background="{{ asset('images/banner/banner_img.jpg') }}"
        title="Contact Us"
    >
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li>Contact Us</li>
        </ol>
    </x-header-component>

    <section id="main-container" class="main-container section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">
                        Contact Details
                    </h2>
                </div>
            </div><!-- row end-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ts-contact border-bottom">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-info-wrapper">
                                    <div class="ts-contact-info ts-mb-30">
                                        <h3 class="contact-info-title ts-mb-40">Faisalabad Head office</h3>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="contact-info-box">
                                                    <div class="info-details">
                                                        <h4 class="info-title">Address</h4>
                                                        <ul class="unstyled">
                                                            <li class="ts-mb-30">
                                                                {{ config('appConst.address') }}
                                                            </li>
                                                            <li>
                                                                PO Box 38000
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="contact-info-box">
                                                    <div class="info-details ts-mb-30">
                                                        <h4 class="info-title">Phone</h4>
                                                        <p>
                                                            <a class="text-body" href="tel:{{ config('appConst.phone_number') }}">{{ config('appConst.phone_number') }}</a> <br>
                                                            <a class="text-body" href="tel:{{ config('appConst.phone_number_2') }}">{{ config('appConst.phone_number_2') }}</a>
                                                        </p>
                                                    </div>
                                                    <div class="info-details">
                                                        <h4 class="info-title">Email</h4>
                                                        <ul class="unstyled">
                                                            <li><a class="text-body" href="mailto:{{ config('appConst.email') }}">{{ config('appConst.email') }}</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- contact info end -->
                                    <a href="#" class="btn btn-primary ts-mr-30">Get Appointment<i class="icon icon-arrow-right"></i></a>
                                    <a href="#" class="btn btn-dark">Contact Us<i class="icon icon-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="gmap_canvas">
                                    <iframe width="545" height="290" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.162933886253!2d73.01430841514862!3d31.43718108139712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922430b95681647%3A0x13f71e23c550fe60!2sJawad%20Club%20Rd%2C%20Faisalabad%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2sae!4v1635598356539!5m2!1sen!2sae" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ts-contact-form pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">
                        <span class="ts-title">Contact Us</span>
                        Send us a Massage
                    </h2>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="ts-form-group">
                        <form method="POST" id="ts-contact-form" action="http://themefunction.com/html/build-bench/contact-form2.php" class="ts-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="f_name" placeholder="First name" id="ts_contact_name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="l_name" placeholder="Last name" id="ts_contact_name">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" name="phone_number" placeholder="Phone" id="ts_contact_phone">

                                </div>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" name="email" placeholder="Email" id="ts_contact_email">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="company_name" placeholder="Company Name" id="ts_contact_subject">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" id="ts_contact_subject">
                                </div>
                            </div>

                            <textarea name="massage" placeholder="Message" id="x_contact_massage" class="form-control message-box" cols="30" rows="10"></textarea>

                            <div class="ts-btn-wraper">
                                <input type="submit" class="btn btn-primary" id="ts_contact_submit" value="SEND MESSAGE">
                                <!-- <a href="#" class="btn btn-primary ts-mr-30">Send Now<i class="icon icon-arrow-right"></i></a> -->
                            </div>
                            <div id="server-results">
                                <p></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
