@extends(_get_frontend_layout_path('frontend'))

@section('content')
    <section id="intro" class="intro">
        <!-- Static Intro -->
        <div class="bg-image overlay-dark dark-bg bg-fixed" data-background-img="images/tofuture/full/banner1.jpeg" style="background-image: url({{asset('images/tofuture/full/banner1.jpeg')}});">
            <div class="js-fullscreen-height container" style="height: 898px;">
                <div class="intro-content">
                    <div class="intro-content-inner wow fadeInUp">
                        <h1 class="h1">名企实习生计划</h1>
                        <div class="row mt-3">
                            <p class="col-md-6 mx-auto text-bg fs-20">全球名企 科研院所 核心岗位 精准实习</p>
                        </div>
                        <h3 class="mt-3">助力名企/海外名校申请，成就未来职场新起点</h3>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Static Intro -->
    </section>

    <!-- Service Section -->
    <section id="service" class="pt-80">
        <div class="wow fadeInLeft container text-center">
            <h2>服务流程</h2>
            <div class="whr"></div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 mb-45">
                            <div class="page-icon-top"><i class="ion ion-ios-compose-outline"></i></div>
                            <h5>咨询报名</h5>
                            <p>联系顾问咨询<br>递交报名资料</p>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-45">
                            <div class="page-icon-top"><i class="ion ion-ios-gear-outline"></i></div>
                            <h5>签约服务</h5>
                            <p>确定课程日期<br>实战课程培训<br>综合考试评估</p>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-45">
                            <div class="page-icon-top"><i class="ion ion-social-apple-outline"></i></div>
                            <h5>到岗实习</h5>
                            <p>名企实习推荐<br>到岗企业实习<br>获得推荐信</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Section -->
    <hr>

    <section class="pt-80 bg-image" style="background-image: url({{ asset('images/tofuture/full/shixi-bg.jpg') }})">
        <div class="wow fadeInLeft container text-center">
            <h2>服务内容</h2>
            <div class="whr"></div>
            <div class="service-content text-left">
                <div class="card">
                    <h5 class="card-header">名企实习生</h5>
                    <div class="card-body">
                        <div class="card-text">
                        <ul>
                            <li><span class="card-title">产品介绍: </span>帮助国内外在读学员提升个人背景和丰富实习经历的产品</li>
                            <li><span class="card-title">服务内容: </span>实习职前提升计划+名企定向实习岗位</li>
                            <li><span class="card-title">针对人群: </span>国内外本科、研究生在读学生</li>
                            <li><span class="card-title">产品收获: </span>实习职前指导+导师推荐信</li>
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h5 class="card-header">知名券商实习</h5>
                    <div class="card-body">
                        <div class="card-text">
                            <ul>
                                <li><span class="card-title">产品介绍: </span>帮助国内外在读学员提升个人背景和丰富实习经历的产品</li>
                                <li><span class="card-title">服务内容: </span>实习职前提升计划+名企定向实习岗位</li>
                                <li><span class="card-title">针对人群: </span>国内外本科、研究生在读学生</li>
                                <li><span class="card-title">产品收获: </span>实习职前指导+导师推荐信</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h5 class="card-header">科研营实习</h5>
                    <div class="card-body">
                        <div class="card-text">
                            <ul>
                                <li><span class="card-title">产品介绍: </span>帮助国内外在读学员提升个人背景和丰富实习经历的产品</li>
                                <li><span class="card-title">服务内容: </span>实习职前提升计划+名企定向实习岗位</li>
                                <li><span class="card-title">针对人群: </span>国内外本科、研究生在读学生</li>
                                <li><span class="card-title">产品收获: </span>实习职前指导+导师推荐信</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h5 class="card-header">RPTA远程实习</h5>
                    <div class="card-body">
                        <div class="card-text">
                            <ul>
                                <li><span class="card-title">产品介绍: </span>帮助国内外在读学员提升个人背景和丰富实习经历的产品</li>
                                <li><span class="card-title">服务内容: </span>实习职前提升计划+名企定向实习岗位</li>
                                <li><span class="card-title">针对人群: </span>国内外本科、研究生在读学生</li>
                                <li><span class="card-title">产品收获: </span>实习职前指导+导师推荐信</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="action-box" class="dark-bg ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h4 class="">想要了解更多？</h4>
                </div>
                <div class="col-md-4 col-sm-4">
                    <a class="btn btn-md btn-white float-right float-none-xs text-dark">联系我们</a>

                </div>
            </div>
        </div>
    </section>
    @include(_get_frontend_theme_path('pages.elements.contentslider'))

    <section id="action-box" class="dark-bg ptb-150 bg-moving" style="background-image:url({{ asset('images/tofuture/full/banner.jpg') }})">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-sm-12">
                    <h4 class="ps-20">WinCareer是专属服务于澳⼤大利利亚中国留学生群体的职场技能提升平台</h4>
                </div>

            </div>
        </div>
    </section>
    <!-- Contant Slider -->
    <section class="ptb ptb-sm-80" >
            <h3 class="text-center">企业资源</h3>
            <div class="whr"></div>
            <div class="student-list">
                <img src="{{ asset('images/tofuture/full/compy.jpg') }}" alt="list">
            </div>
    </section>
    <!-- End Contain Slider -->


@endsection