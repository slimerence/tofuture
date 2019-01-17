@extends(_get_frontend_layout_path('frontend'))

@section('content')
    <header class="childhead" style="background-image:  url({{ asset('images/backgrounds/footer-v2.jpg') }}) ">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 my-auto text-center text-white">
                <div class="weltext">
                    <h1 class="align-items-center">一路有我，安全出行</h1>
                </div>
            </div>
        </div>
    </div>
    </header>

    <section class="page-section">
        <div class="container text-center wow fadeIn">
            <h2>墨尔本驾校路考结果展示</h2>
            <hr class="colored">
            <p>以下为近期顺利通过路考的学员，全部真实个案。</p>

            <div class="portfolio-grid clearfix" id="portfolioList">
            @foreach($news as $key=>$post)
                <div class="mix" href="{{ asset($post->feature_image) }}" title="{{ $post->title }}">
                    <div class="portfolio-wrapper">
                        <img src="{{ asset($post->feature_image) }}" alt="{{ $post->title }}">
                        <div class="caption">
                            <div class="caption-text">
                                <a class="text-title">{{ $post->title }}</a>
                            </div>
                            <div class="caption-bg"></div>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </section>

@include(_get_frontend_theme_path('pages.elements.contact'))


@endsection