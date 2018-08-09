@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="{{ url('images/tofuture/full/absbanner.jpg') }}">
        <div class="container">
            <div class="row title">
                <h2 class="h2">澳洲未来教育介绍</h2>
            </div>
        </div>
    </section>
    <!-- End Intro Section -->
    <section class="ptb">
        <div class="container">
            <h2>澳洲未来教育集团</h2>
            <p>澳洲未来教育集团，成立于2006年，是澳大利亚首家留学生服务教育咨询公司。我们专注于留学生的各方培训与教育，以及留学移民咨询领域。在大学辅导，语言培训，留学移民，就业指导，生活求助等领域表现优异，致力于全方位服务于在澳洲的中国留学生。</p>
            <div class="d-flex">
                <div class="info-img d-none d-sm-flex align-self-center">
                    <img src="{{ asset('images/tofuture/logo.png') }}" alt="win" style="max-width: 200px;" class="d-xs-none">
                </div>
                <div class="info-text align-self-center px-lg-5">
                    <p>WinCareer是澳洲未来教育集团旗下专注于职业培训的子品牌，致力于为澳洲高校毕业生提供一站式求职教育解决方案，依托数百家澳洲本地企业资源，以及新东方海威时代连接国内千家顶级企业，为留学生提供商科培训，实习生计划和职业规划等专业指导，全方位提升求职竞争力。</p>
                </div>
            </div>
        </div>
    </section>

@endsection