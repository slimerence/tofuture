<!DOCTYPE html>
<html>
@include(_get_frontend_layout_path('frontend.head'))
<body>
@if(isset($gtag_body))
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BQPFSQ"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
@endif
<!-- Preloader -->
<section id="preloader">
    <div class="loader" id="loader">
        <div class="loader-img" style="background-image:url({{ asset('images/tofuture/loading.GIF') }})"></div>
    </div>
</section>
<!-- End Preloader -->
<!-- Site Wraper -->
<div class="wrapper">

    @include(_get_frontend_layout_path('frontend.header'))
    <!-- CONTENT --------------------------------------------------------------------------------->
    @yield('content')

    <!-- END CONTENT ---------------------------------------------------------------------------->
    @include(_get_frontend_layout_path('frontend.footer'))
</div>
<!-- Site Wraper End -->

@include(_get_frontend_layout_path('frontend.js'))
</body>
</html>
