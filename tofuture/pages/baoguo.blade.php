@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="{{ url('images/tofuture/full/absbanner.jpg') }}">
        <div class="container">
            <div class="title">
                <h1 class="h2">CFA 补习班</h1>
                <h2 class="h3">CFA保过计划 | CFA 补习班 | CFA 课程</h2>
                <div class="row mt-5 mx-auto" style="max-width: 720px;">
                    <div class="col-12 col-md-4 mt-20">
                        <a class="btn-theme" href="https://wincareer.com.au/cfa/cfa考试">CFA科普</a>
                    </div>
                    <div class="col-12 col-md-4 mt-20">
                        <a class="btn-theme" id="single_image" href="{{ asset('images/tofuture/qrcode1.jpg') }}">免费资料</a>
                    </div>
                    <div class="col-12 col-md-4 mt-20">
                        <a class="btn-theme" href="https://wincareer.com.au/cfa/baoming">报名指南</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Intro Section -->
    <section class="pt-80 pb-5">
        <div class="container">
            <div class="about-item">
                <h2 class="text-center">CFA- 特许金融分析师</h2>
                <div class="whr"></div>
                <p>
                    CFA全称 Chartered Financial Analyst （特许⾦融分析师），是全球投资业⾥较为严格与含⾦量⾼的
                    资格认证，被⼈民⽇报⼒荐，被业界称为“华尔街的⼊场券”。通过CFA考试获得cfa资格有利于商科
                    就业，尤其是海外留学⽣，更加收到各⾦融雇主的青睐。据相关统计全球拥有CFA认证的约10万
                    ⼈，中国内地仅约3000余⼈，作为紧缺⼈才，CFA有着令⼈羡慕的高收入。⾦融机构的雇主愿意支
                    付给CFA考⽣和通过者高额的薪酬。
                </p>

                <div class="row">
                    <div class="col-12 col-md-6 mt-30">
                        <img src="{{ asset('/images/tofuture/baoguo.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-12 col-md-6 mt-30 align-self-center">
                        <div class="dontai box">
                        <h3 class="text-center">CFA最新动态</h3>
                        <div class="whr"></div>
                        @if(isset($posts))
                            <ul>
                                @foreach($posts as $post)
                                 <li>
                                     <i class="fa fa-caret-right fa-fw color-t" aria-hidden="true"></i><a href="{{ url('/page/'.$post->uri) }}">{{ $post->title }}</a>
                                 </li>
                                @endforeach
                            </ul>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if(true)
        <section id="action-box" class="dark-bg ptb-150 bg-moving" style="background-image:url({{ asset('images/tofuture/bag-3.jpg') }});background-size: cover">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12 col-sm-12">
                        <h4 class="ps-20" style="color: #000;text-shadow: 1px 1px 3px #c3c3c3;">参加WinCareer的CFA保过计划，为您的CFA考试保驾护航。</h4>
                    </div>

                </div>
            </div>
        </section>
    @endif
    <section class="pt-60 pb-5">
        <div class="container">
            <div class="about-item">
                <h2 class="text-center">WinCareer CFA 补习班</h2>
                <div class="whr"></div>
                <p>WinCareer是澳洲未来教育集团旗下专注于职业培训的子品牌，未来教育作为墨尔本第一老牌商科辅导培训机构，累计服务超过50000名留学生，而WinCareer CFA 补习班正是整合了未来教育最强金融师资团队，根据各大高校商科课程以及澳洲考生特别编写了独家教材，结合最新考纲整理详细讲义，设置最科学的课程结构，推出了全澳最专业最负责的CFA一级保过课程。参加WinCareer的CFA保过计划，为您的CFA考试保驾护航。我们的具有科学的CFA课程安排，专业的导师团队，以及丰富的教学资源。是墨尔本CFA补习班领航者。</p>
                <div class="about-item">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="img-ctn">
                                <div class="img-over">
                                    <span>⽹络课程随时随地看</span>
                                </div>
                                <img src="{{ asset('images/tofuture/bag1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="img-ctn">
                                <div class="img-over">
                                    <span>完美结合澳洲⼤学课程</span>
                                </div>
                                <img src="{{ asset('images/tofuture/bag2.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-12 col-md-9">
                            <div class="box">
                            <h3><i class="fa fa-caret-right" aria-hidden="true"></i>CFA补习班课程优势</h3>
                            <ul>
                                <li>我们结合澳洲考生特点设置了三大学习阶段，知识精讲班，冲刺串讲刷题班，全真模拟班。</li>
                                <li>独家编写的教材：我们根据澳洲各大高校商科课程特点撰写教材，详细阐释CFA考试所有考点</li>
                                <li>丰富的教学资源：我们提供线下课堂教学，线上课程视频，同学可以随时观看，以及CFA自习室帮助大家巩固所学知识</li>
                                <li>双重保过承诺：报名CFA课程的学员将签订贴心的保过协议，如果没有通过6月的考试，我们将全额支付你12月的考试费用，并赠送新的CFA课程的旁听资格</li>
                                <li>两次全真模拟考试：考试高度还原真实考场，更有12年全真题目分享，多次测评找出自身的薄弱的环节，体验考试过程便于考生调整至最佳考试状态</li>
                                <li>推出了全新的种子计划来助力学员学习，建立5位老师服务一位学员的教学模式，会根据每位同学的情况制定专属的CFA考试学习计划，复习期间老师随时为每位学员答疑</li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="box text-center">
                                <h5>微信咨询</h5>
                                <p>欢迎添加Wincareer官方微信进行沟通咨询！</p>
                                <img src="{{ asset('images/tofuture/qrcode1.jpg') }}" alt="" class="w-100">
                                <span>扫描二维码</span>
                            </div>
                        </div>
                    </div>

            </div>

        </div>
    </section>

    <section class="pt-15 ptb-80" style="background-image:url({{ asset('images/tofuture/course-bg2.jpg') }});background-size: cover;">
        <div class="container">
            <div class="about-item course">
                <div class="row">
                    {{--<div class="col-12 col-md-6 d-none d-md-block d-lg-block">
                        <img src="{{ asset('images/tofuture/course-bg.jpeg') }}" style="width: 100%;opacity: 0.85;" alt="">
                    </div>--}}
                    <div class="col-12 align-self-center text-center">
                        <h2 class="text-center">CFA补习班课程安排</h2>
                        <div class="owl-carousel client-carousel o-flow-hidden text-left">
                            <div class="item">
                                <div class="course-item">
                                    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>知识精讲</h3>
                                    <ul>
                                        <li>16天96个小时习题精讲＋16个小时应用练习</li>
                                        <li>精讲CFA一级所有知识点</li>
                                        <li>旨在让同学们掌握所有reading框架</li>
                                        <li>及所有CFA考试细点与难点</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="course-item">
                                    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>冲刺串讲刷题班</h3>
                                    <ul>
                                        <li>5天30个小时串讲＋10个小时冲刺刷题</li>
                                        <li>凝练CFA所有考点并大量刷题巩固reading框架</li>
                                        <li>了解CFA考试难度加强做题技巧与时间把控能力</li>
                                        <li>加快做题速度提高正确率</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="course-item">
                                    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>全真模拟班</h3>
                                    <ul>
                                        <li>多次全真模拟，考试高度还原真实考场</li>
                                        <li>12年全真题目分享</li>
                                        <li>多次测评找出自身的薄弱的环节</li>
                                        <li>体验考试过程便于考生调整至最佳考试状态</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="course-item">
                                    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>双重保过</h3>
                                    <p>保过协议</p>
                                    <ul>
                                        <li>缺勤小于三次</li>
                                        <li>通过一次模拟考试</li>
                                    </ul>
                                    <p>若满足以上条件：</p>
                                    <ul>
                                        <li>赠送下一期WinCareerCFA课程</li>
                                        <li>免除学生下一次的考试报名费用</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a class="btn-theme mx-auto mb-5" target="_blank" href="https://wincareer.com.au/cfa/kepu">下载CFA培训时间表</a>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="pt-80">
        <div class="container">
            <div class="about-item">
                <h2 class="text-center">Wincareer最强师资团队</h2>
                <div class="whr"></div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <h3><i class="fa fa-caret-right" aria-hidden="true"></i>金牌导师Jasmine</h3>
                        <div class="row">
                            <div class="col">
                                <img class="img-fluid" style="max-width: 250px" src="{{ asset('images/tofuture/team/js.jpg') }}" alt="" />
                            </div>
                            <div class="col">
                                <p>多年CFA从教经验，在Monash作为tutor留校教学，了解各大高校商科课程，有的放矢地选择性教学，在WinCareer CFA教学保持学员满分好评。</p>
                                <p><strong>擅长科目：</strong>FRA，Economics, Quantitative</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <h3><i class="fa fa-caret-right" aria-hidden="true"></i>金牌导师Tony</h3>
                        <div class="row">
                            <div class="col">
                                <img class="img-fluid" style="max-width: 250px" src="{{ asset('images/tofuture/team/tony.jpg') }}" alt="" />
                            </div>
                            <div class="col">
                                <p>12年墨尔本各大名校金融专业授课经验，逻辑清晰，风趣幽默，思维导图教学法，将难题一网打尽。</p>
                                <p><strong>擅长科目：</strong>Corporate Finance, Fixed Income, Equity Investment, Derivatives, Portfolio Management</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="ptb-60">
        <div class="container">
            <div class="about-item">
                <h2 class="text-center">Wincareer课程展示</h2>
                <div class="whr"></div>
                <div class="s-box">
                    <div class="s-title">
                        试听视频
                    </div>
                </div>
                <div class="row mt-3">
                    @foreach($videos as $video)
                        <div class="col-lg-6 col-md-12">
                            {!! $video->code !!}
                        </div>
                    @endforeach
                </div>

                <div class="s-box mt-3">
                    <div class="s-title">
                        课堂实况
                    </div>
                </div>
                <div class="row mt-3">
                    @for($i=1;$i<4;$i++)
                        <div class="col-12 col-md-4 col-lg-4 mb-3">
                            <img src="{{ asset('images/tofuture/'.$i.'.jpg') }}" alt="{{ $i }}">
                        </div>
                    @endfor
                </div>

            </div>
        </div>
    </section>

@endsection