<!DOCTYPE html>
<html>
@include(_get_frontend_layout_path('frontend.head'))
<body>
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
