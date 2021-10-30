<div id="banner-area" class="banner-area bg-overlay" style="background-image:url('{{ $background }}')">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="banner-heading">
                    <h1 class="banner-title">{{ $title }}</h1>
                    {{ $slot }}
                </div>
            </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
</div>
