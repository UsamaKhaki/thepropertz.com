@extends('layouts.app')
@section('content')

    <x-header-component
        background="{{ asset('images/banner/banner_img.jpg') }}"
        title="Upper portion Apartment for sale"
    >
        <ol class="breadcrumb">
            <li><a href="{{ route('page-index') }}">Home</a></li>
            <li><a href="#">Properties</a></li>
            <li>Detail</li>
        </ol>
    </x-header-component>

    <section class="property-detail-wrapper pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div id="slider" class="flexslider">
                        <ul class="slides">
                            @for($i = 1; $i < 4; $i++)
                                <li> <img alt="" class="img-h-400" src="{{ asset('images/properties/propertyImg0'.$i.'.jpg') }}"> </li>
                            @endfor
                            <li> <img alt="" class="img-h-400" src="{{ asset('images/properties/propertyImg01.jpg') }}"> </li>
                        </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                        <ul class="slides">
                            @for($i = 1; $i < 4; $i++)
                                <li> <img alt="" class="img-h-100" src="{{ asset('images/properties/propertyImg0'.$i.'.jpg') }}"> </li>
                            @endfor
                            <li> <img alt="" class="img-h-100" src="{{ asset('images/properties/propertyImg01.jpg') }}"> </li>
                        </ul>
                    </div>
                    <div class="row property_head mt-4">
                        <div class="col-lg-8 col-md-8">
                            <h3>Upper portion Apartment for sale</h3>
                            <div class="property_address"><i class="fa fa-map-marker"></i> 123 Lorem Ipsum, 45 sit Atlanta</div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="float-none float-md-right">
                                <div class="property_price ml-0 mt-2 mt-md-0">PKR 1,00,000</div>
                            </div>
                        </div>
                    </div>
                    <div class="property_widget wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <h3 class="desc_head">Description</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus ullamcorper libero tincidunt fermentum. Phasellus lobortis felis ac molestie dictum. Morbi at efficitur mauris. Aliquam lobortis massa non metus vehicula, at lacinia orci suscipit. Nulla porta urna id turpis aliquet elementum. Praesent condimentum turpis at neque faucibus feugiat. Aenean in dapibus diam. Fusce sit amet neque ornare, maximus sapien eget, feugiat turpis. Praesent quis urna a metus maximus condimentum quis in purus. Nullam molestie aliquet urna. Nunc a elit congue, gravida turpis sed, laoreet orci.</p>
                        <p>Ut pretium, nunc in bibendum iaculis, neque tellus efficitur lectus, sit amet tincidunt justo nisi at risus. Vestibulum ante est, fermentum in laoreet nec, viverra eu mauris. In condimentum ac mauris a efficitur. Ut fringilla sed mauris eget convallis. Phasellus volutpat mattis tincidunt. Pellentesque non lacus felis. Donec ac sem eu libero consequat congue in vehicula justo. Nulla blandit id tortor non luctus. Donec in odio condimentum, condimentum nisi non, porta nisl. Donec sed consectetur erat, eu imperdiet urna. Praesent eu sapien orci.</p>
                    </div>
                    <div class="property_widget">
                        <h3 class="desc_head">Property Details</h3>
                        <div class="row prop_del">
                            <div class="col-lg-6">
                                <ul class="property_list">
                                    <li><span>Property ID :</span> B182</li>
                                    <li><span>Price :</span> $99,000</li>
                                    <li><span>Property Size :</span> 981 Sq Ft</li>
                                    <li><span>Bathrooms :</span> 2</li>
                                    <li><span>Bedrooms :</span> 5</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="property_list">
                                    <li><span>Year Built :</span> 30-06-2020</li>
                                    <li><span>Garage :</span> 1</li>
                                    <li><span>Garage Size :</span> 150 SqFt</li>
                                    <li><span>Property Type :</span> Apartment</li>
                                    <li><span>Property Status :</span> For Sale</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="property_widget">
                        <h3 class="desc_head">Features</h3>
                        <ul class="list-unstyled icon-checkbox">
                            <li>air conditioning</li>
                            <li>Laundry Room</li>
                            <li>swiming pool</li>
                            <li>air conditioning</li>
                            <li>Central Heating</li>
                            <li>gym</li>
                            <li>alarm</li>
                            <li>Central Heating</li>
                            <li>spa &amp; massage</li>
                            <li>pets allow</li>
                            <li>window Covering</li>
                            <li>Internet</li>
                            <li>car parking </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="single-widgets widget_category mt30 mt-4 mt-md-0">
                        <h4>Categories</h4>
                        <ul>
                            <li><a href="#">Apartement <span>09</span></a></li>
                            <li><a href="#">Villa <span>12</span></a></li>
                            <li><a href="#">Family House <span>19</span></a> </li>
                            <li><a href="#">Modern Villa <span>17</span></a></li>
                            <li><a href="#">Town House <span>10</span></a></li>
                            <li><a href="#">Office <span>10</span></a></li>
                        </ul>
                    </div>
                    <div class="single-widgets widget_category">
                        <h4>Recents Property</h4>
                        <ul class="property_sec">
                            <li>
                                <div class="rec_proprty">
                                    <div class="propertyImg"><img alt="" src="http://malikhassan.com/html/evernest/images/property_small01.jpg"></div>
                                    <div class="property_info">
                                        <h4><a href="#">1324 Tennessee Road</a></h4>
                                        <p>Minneapolis, MN 55402</p>
                                        <div class="priceWrp">$98.00</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rec_proprty">
                                    <div class="propertyImg"><img alt="" src="http://malikhassan.com/html/evernest/images/property_small01.jpg"></div>
                                    <div class="property_info">
                                        <h4><a href="#">1324 Tennessee Road</a></h4>
                                        <p>Minneapolis, MN 55402</p>
                                        <div class="priceWrp">$98.00</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('footer-js')
    <link rel="stylesheet" href="{{ asset('css/flexslider.css?v=1.2') }}">
    <script src="{{ asset('js/jquery.flexslider.js') }}"></script>
    <script>
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 210,
            itemMargin: 5,
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel"
        });
    </script>
@endpush
