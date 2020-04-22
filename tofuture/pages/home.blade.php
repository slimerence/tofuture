@extends(_get_frontend_layout_path('frontend'))

@section('content')
    @include(_get_frontend_theme_path('pages.elements.intro'))
    <!--About Section-->
    @include(_get_frontend_theme_path('pages.elements.textslider'))

    <section id="action-box" class="dark-bg ptb-150 bg-moving" style="background-image:url({{ asset('images/tofuture/full/banner.jpg') }})">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-sm-12">
                    <h4 class="ps-20">WINCAREER是Tofuture未来教育旗下的职业培训机构,澳洲未来教育集团成立于2006年，公司总部位于墨尔本burwood，业务涵盖大学补习培训，移民留学，考证培训（CFA,CPA,ACCA,）留学生求职，留学生海外求助平台。在2019年Wincareer与澳洲多间院校合作开展全澳CPA/CFA巡回演讲，14年来，我们了解学生的每一个阶段的需求，我们提供最优质，耐心，贴心的指导与服务！累计服务留学生超10万人次，是澳洲留学生学生服务行业领导者与标杆。拥有强大师资，完善的服务体系，丰富的留学及培训服务，不忘始终的初心为学生提供全方位的服务！澳洲维省多元文化贡献奖机构。广东省留学服务中心墨尔本站。
                    </h4>
                </div>

            </div>{{----}}
        </div>
    </section>
    @include(_get_frontend_theme_path('pages.elements.service'))
    <hr class="mb-30">
    @include(_get_frontend_theme_path('pages.elements.teamgrid'))

    @include(_get_frontend_theme_path('pages.elements.count'))
{{--    @include(_get_frontend_theme_path('pages.elements.client'))--}}


@endsection