<!DOCTYPE html>
<html>
@include(_get_frontend_layout_path('frontend.head'))
<body>
<!-- Preloader -->
<section id="preloader">
    <div class="loader" id="loader">
        <div class="loader-img"></div>
    </div>
</section>
<!-- End Preloader -->

<!-- Site Wraper -->
<div class="wrapper">

    <!--Header-->
    <header id="header" class="header" style="display:none;">
        <nav id="navigation" class="header-nav"></nav>
    </header>
    <!--End Header-->

    <!-- CONTENT --------------------------------------------------------------------------------->
    <!-- Intro -->
    <section id="intro" class="intro">
        <!-- Static Intro -->
        <div class="bg-image overlay-dark80 dark-bg bg-image parallax parallax-background2" style="background-image:url({{ asset('images/tofuture/full/home01.jpg')}}">
            <div class="full-screen-intro container" style="min-height: 400px;">
                <div class="intro-content">
                    <div class="intro-content-inner">
                        <h1 class="large mb-25">404 Error</h1>
                        <p class="lead content-wd650">
                            We're sorry but the page you Looking for can not be found.<br />
                            Here are some other pages.
                        </p>
                        <br />
                        <a href="{{ url('/') }}" class="btn btn-md btn-white"><i class="fa fa-angle-left left"></i>Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Static Intro -->
    </section>
    <!-- End Intro -->

    <!-- End CONTENT ------------------------------------------------------------------------------>


    <!-- Scroll Top -->
    <a class="scroll-top">
        <i class="fa fa-angle-double-up"></i>
    </a>
    <!-- End Scroll Top -->

</div>
<!-- Site Wraper End -->



@include(_get_frontend_layout_path('frontend.js'))
</body>
</html>
