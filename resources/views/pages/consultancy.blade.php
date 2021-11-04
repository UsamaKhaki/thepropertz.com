@extends('layouts.app')
@section('content')

    <x-header-component
        background="{{ asset('images/banner/banner_img.jpg') }}"
        title="Consultancy"
    >
        <ol class="breadcrumb">
            <li><a href="{{ route('page-index') }}">Home</a></li>
            <li>Consultancy</li>
        </ol>
    </x-header-component>

    <section id="main-container" class="main-container section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="column-title"><span>Know's More</span> Consultancy
                    </h2>
                    <div id="accordion" class="accordion">

                        @php
                            $consultancy = [
                                (object)['title' => 'Residential'],
                                (object)['title' => 'Commercial'],
                                (object)['title' => 'Industrial'],
                                (object)['title' => 'Farms'],
                                (object)['title' => 'Agriculture'],
                                (object)['title' => 'Plots'],
                            ];
                        @endphp
                        @foreach($consultancy as $key => $item)
                            <div class="card">
                                <div class="card-header" id="{{ $item->title }}-headingOne">
                                    <div class="card-button {{ $key == 0 ? 'active' : '' }}">
                                        <a href="#" data-toggle="collapse" data-target="#{{ $item->title }}-collapse" aria-expanded="{{ $key == 0 ? 'true' : 'false' }}" aria-controls="{{ $item->title }}-collapse" class="{{ $key == 0 ? 'collapsed' : '' }}">{{ $key + 1 }}. {{ $item->title }}
                                        </a>
                                    </div> <!-- Card Button End -->
                                </div> <!-- Card Header End -->
                                <div id="{{ $item->title }}-collapse" class="collapse {{ $key == 0 ? 'show' : '' }}" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad quae, repellat! Ad asperiores cupiditate distinctio laudantium minima necessitatibus ratione reiciendis.
                                    </div> <!-- Card Body End -->
                                </div> <!-- Collapse End -->
                            </div>
                        @endforeach
                    </div> <!-- Accordion End -->
                </div>
                <div class="col-lg-4 mt-4 mt-md-0">
                    <h3>Ask a Question</h3>
                    <div class="sidebar-widgets faq-sidebar">
                        <div class="widget widget-faq">
                            <form action="http://themefunction.com/html/build-bench/contact-form.php" method="POST"
                                  id="xs-contact-form" class="xs-form">
                                <input type="text" class="form-control" name="name" placeholder="Your name"
                                       id="xs_contact_name">
                                <input type="email" class="form-control" name="email" placeholder="Your email"
                                       id="xs_contact_email">
                                <textarea name="massage" placeholder="Your Question" id="x_contact_massage"
                                          class="form-control message-box" cols="30" rows="10"></textarea>
                                <div class="xs-btn-wraper">
                                    <input type="submit" class="btn btn-primary" id="xs_contact_submit"
                                           value="Submit Now">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
