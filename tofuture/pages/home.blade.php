@extends(_get_frontend_layout_path('frontend'))

@section('content')
    @include(_get_frontend_theme_path('pages.elements.intro'))
    <!--About Section-->
    @include(_get_frontend_theme_path('pages.elements.textslider'))

    <section id="action-box" class="dark-bg ptb-150 bg-moving" style="background-image:url({{ asset('images/tofuture/full/banner.jpg') }})">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-sm-12">
                    <h4 class="ps-20">WinCareer是专属服务于澳⼤大利利亚中国留学生群体的职场技能提升平台</h4>
                </div>

            </div>
        </div>
    </section>
    @include(_get_frontend_theme_path('pages.elements.service'))
    <hr>
    @include(_get_frontend_theme_path('pages.elements.teamgrid'))

    @include(_get_frontend_theme_path('pages.elements.count'))
    @include(_get_frontend_theme_path('pages.elements.client'))


@endsection