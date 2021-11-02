@extends('layouts.app')
@section('content')

    <x-header-component
        background="{{ asset('images/banner/banner_img.jpg') }}"
        title="404"
    >
        <ol class="breadcrumb">
            <li><a href="{{ route('page-index') }}">Home</a></li>
            <li>Error 404</li>
        </ol>
    </x-header-component>

    <section id="main-container" class="main-container section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center mx-auto">
                    <div class="error-page text-center">
                        <div class="error-code">
                            <strong>404</strong>
                        </div>
                        <div class="error-message">
                            <h3>Oops... Page Not Found!</h3>
                        </div>
                        <div class="error-body">
                            Try using the button below to go to main page of the site <br>
                            <a href="{{ route('page-index') }}" class="btn btn-primary solid blank"><i class="fa fa-arrow-circle-left">&nbsp;</i> Go to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Container end -->
    </section>

@stop
