@extends('layouts.app')
@section('content')

    <x-header-component
        background="{{ asset('images/banner/banner_img.jpg') }}"
        title="500"
    >
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li>Error 500</li>
        </ol>
    </x-header-component>

    <section id="main-container" class="main-container section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center mx-auto">
                    <div class="error-page text-center">
                        <div class="error-code">
                            <strong>500</strong>
                        </div>
                        <div class="error-message">
                            <h3>Something went wrong!!</h3>
                        </div>
                        <div class="error-body">
                            The server encountered an internal error or misconfiguration and was unable to complete your request. Please contact server admin. <br>
                            <a href="{{ route('page-index') }}" class="btn btn-primary solid blank"><i class="fa fa-arrow-circle-left">&nbsp;</i> Go to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Container end -->
    </section>

@stop
