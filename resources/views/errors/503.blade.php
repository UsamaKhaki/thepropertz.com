@extends('layouts.app')
@section('content')

    <x-header-component
        background="{{ asset('images/banner/banner_img.jpg') }}"
        title="503"
    >
        <ol class="breadcrumb">
            <li><a href="{{ route('page-index') }}">Home</a></li>
            <li>Error 503</li>
        </ol>
    </x-header-component>

    <section id="main-container" class="main-container section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center mx-auto">
                    <div class="error-page text-center">
                        <div class="error-code">
                            <strong>503</strong>
                        </div>
                        <div class="error-message">
                            <h3>Service Unavailable!!</h3>
                        </div>
                        <div class="error-body">
                            HTTP Error 503: The service is unavailable. <br>
                            <a href="{{ route('page-index') }}" class="btn btn-primary solid blank"><i class="fa fa-arrow-circle-left">&nbsp;</i> Go to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Container end -->
    </section>

@stop
