@extends(_get_frontend_layout_path('frontend'))

@section('content')
    <section id="intro" class="intro">
        <!-- Static Intro -->
        <div class="bg-image overlay-dark dark-bg bg-fixed" data-background-img="images/tofuture/full/banner2.jpg" style="background-image: url({{asset('images/tofuture/full/banner1.jpeg')}});">
            <div class="js-fullscreen-height container" style="height: 898px;">
                <div class="intro-content">
                    <div class="intro-content-inner wow fadeInUp">
                        <h1 class="h1">3个月入职名企 无Offer退费</h1>
                        <div class="whr"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Static Intro -->
    </section>
    <!-- Counter Section -->
    <section id="counter" class="dark-color ptb-80" data-stellar-background-ratio="0.5" style="  background-color: #e4aba314;">

        <div class="container text-center zhitong-count wow fadeInLeft">
            <h2>匆匆踏入职场，你可能会遇到这些问题</h2>
            <div class="whr"></div>
            <div class="row">
                <div class="col-md-3 mb-sm-30">
                    <h3 class="counter" data-count="30">0</h3><span>%</span>
                    <h6>的同学能在3个月内找到相对满意的工作</h6>
                </div>
                <div class="col-md-3 mb-sm-30">
                    <h3 class="counter" data-count="14">0</h3><span>%</span>
                    <h6>的学生觉得就业内容与实习背景非常匹配</h6>
                </div>
                <div class="col-md-3 mb-sm-30">
                    <h3 class="counter" data-count="20">0</h3><span>%</span>
                    <h6>的学生找工作花费的平均时常达到一年</h6>
                </div>
                <div class="col-md-3 mb-sm-30">
                    <h3 class="counter" data-count="70">0</h3><span>%</span>
                    <h6>的同学因为不清楚适合自己的职业发展方向匆忙就业</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Section -->
    <section id="service" class="pt-80">
        <div class="wow fadeInLeft container text-center">
            <h2>产品亮点</h2>
            <div class="whr"></div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 mb-45">
                            <div class="page-icon-top"><i class="ion ion-ios-compose-outline"></i></div>
                            <h5>精准入行</h5>
                            <p>精准定位目标行业、目标企业和目标岗位</p>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-45">
                            <div class="page-icon-top"><i class="ion ion-ios-gear-outline"></i></div>
                            <h5>快速入职</h5>
                            <p>依托于主流就业平台、优质名企合作关系、实现3个月快速入职</p>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-45">
                            <div class="page-icon-top"><i class="ion ion-social-apple-outline"></i></div>
                            <h5>更高起点</h5>
                            <p>入职世界五百强在华机构、国内五百强企业、各行业前20企业，国内实力名企，登上职业生涯更高起点</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="img-container" >
        <img src="{{ asset('images/tofuture/full/process.jpg') }}" alt="服务流程">
    </section>
    <section class="img-container" >
        <img src="{{ asset('images/tofuture/full/zhitong2.jpg') }}" alt="服务流程">
    </section>
    @include(_get_frontend_theme_path('pages.elements.testimonials'))
    <section class="img-container" >
        <div class="wow fadeInLeft container text-center">
            <h2>合作企业</h2>
            <div class="whr"></div>
        </div>
        <img src="{{ asset('images/tofuture/full/ztcos.png') }}" alt="服务流程">
    </section>
@endsection