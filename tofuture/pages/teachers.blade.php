@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="{{ url('images/tofuture/full/absbanner.jpg') }}">
        <div class="container">
            <div class="row title">
                <h2 class="h2">师资力量</h2>
            </div>
        </div>
    </section>
    <section class="ptb ptb-sm-80">
        <div class="container">
            <div class="text-center">
                <h3 class="col">教师团队</h3>
                <div class="whr"></div>
            </div>
            <div class="spacer-60"></div>
            <div class="row">
                <!-- Team Box -->
                <div class="col-md-3 col-sm-6 mb-30">
                    <div class="team-item">
                        <div class="team-item-img">
                            <img src="{{ asset('images/tofuture/team/1.jpg') }}" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5>Mitchell KAPPOS</h5>
                                    <p>Similique sunt culpa qui officia deserunt mollitia animi dolorum fuga.</p>
                                    <ul class="social">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>Mitchell KAPPOS</h5>
                            <p class="">Designer</p>
                        </div>
                    </div>
                </div>

                <!-- End Team Box -->
            </div>
        </div>

    </section>


@endsection