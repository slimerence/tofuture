@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="{{ url('images/tofuture/full/absbanner.jpg') }}">
        <div class="container">
            <div class="row title">
                <h2 class="h2">新闻博客</h2>
            </div>
        </div>
    </section>

    <section class="page-section bg-light" id="services">
        <div class="container">
            <div class="wow fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center mtb-30">{{ $blog->title }}</h1>

                        @if($blog->feature_image)
                        <div class="item">
                            <img src="{{ asset($blog->feature_image) }}" alt="{{ $blog->title }}" />
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-12 text-left">
                        {!! $blog->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection