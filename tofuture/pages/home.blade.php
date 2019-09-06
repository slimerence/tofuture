@extends(_get_frontend_layout_path('frontend'))

@section('content')
    @include(_get_frontend_theme_path('pages.elements.intro'))
    <!--About Section-->
    @include(_get_frontend_theme_path('pages.elements.textslider'))

    <section id="action-box" class="dark-bg ptb-150 bg-moving" style="background-image:url({{ asset('images/tofuture/full/banner.jpg') }})">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-sm-12">
                    <h4 class="ps-20">Wincareer是未来教育旗下的职业培训机构，未来教育成立于2006年，是澳洲首家留学生服务教育咨询机构，自成立以来我们专注于留学生的各方面培训和教育，致力于全方位服务于在澳洲的中国留学生。我们Wincareer更致力于打造未来教育学生专属的毕业生海归学生会，未来会，为留学生毕业生提供一个专业的职业培训平台，以及专业的CFA培训及CFA补习班。
                    </h4>
                </div>

            </div>{{----}}
        </div>
    </section>
    @include(_get_frontend_theme_path('pages.elements.service'))
    <hr class="mb-30">
    @include(_get_frontend_theme_path('pages.elements.teamgrid'))

    @include(_get_frontend_theme_path('pages.elements.count'))
    @include(_get_frontend_theme_path('pages.elements.client'))


@endsection