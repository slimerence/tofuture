@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <section class="inner-intro dark-bg bg-image overlay-dark " data-background-img="{{ url('images/tofuture/full/absbanner9.jpg') }}" style="background-size: cover;background-position: center center">
        <div class="container">
            <div class="title">
                <h2 class="h2" style="font-size: 3rem;text-shadow: 2px 2px 4px #000c;">CFA 全托管式集训营</h2>
                <h1 class="h3" style="text-shadow: 2px 2px 4px #000c;">CFA 考试 | CFA保过计划 | CFA 课程</h1>
                <div class="row mt-5 mx-auto" style="max-width: 720px;">
                    <div class="col-12 col-md-4 mt-20">
                        <a class="btn-theme" href="https://wincareer.com.au/cfa/cfa考试">CFA科普</a>
                    </div>
                    <div class="col-12 col-md-4 mt-20">
                        <a class="btn-theme" id="single_image" href="{{ asset('images/tofuture/qrcode1.jpg') }}">扫描咨询</a>
                    </div>
                    <div class="col-12 col-md-4 mt-20">
                        <a class="btn-theme" href="#shitin">在线试听</a>
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
                    <div class="col-12 col-md-3 mt-30">
                        <div class="box text-center full-height">
                            <h5>官方微信</h5>
                            <img src="{{ asset('images/tofuture/qrcode1.jpg') }}" alt="" class="w-100">
                            <span>扫描二维码</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mt-30">
                        <div class="box text-center full-height">
                            <h5>公众号</h5>
                            <img src="{{ asset('images/tofuture/qrcode2.jpg') }}" alt="" class="w-100">
                            <span>扫描二维码</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-30 align-self-center">
                        <div class="dontai box full-height">
                        <h3 class="text-center">CFA最新动态</h3>
                        <div class="whr"></div>
                        @if(isset($posts))
                            <ul>
                                @foreach($posts as $post)
                                 <li>
                                     <i class="fa fa-caret-right fa-fw color-t" aria-hidden="true"></i><a href="{{ url('/page'.$post->uri) }}">{{ $post->title }}</a>
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
        <section id="action-box" class="dark-bg ptb-150 bg-moving" style="background-image:url({{ asset('images/tofuture/full/absbanner7.jpg') }});background-size: cover;background-position: center center;">
            <div class="container">
                <div class="row text-center" id="timedown">
                    <div class="col-md-12 col-sm-12">
                        <h4 class="ps-20" style="color: #000;text-shadow: 1px 1px 3px #c3c3c3;">距离2019年12月7日CFA 考试还有</h4>
                        <div class="timer-box">
                            <div id="countdown">
                                <div class="dash weeks_dash">
                                    <span class="dash_title">周</span>
                                    <div class="digit">0</div>
                                    <div class="digit">0</div>
                                </div>

                                <div class="dash days_dash">
                                    <span class="dash_title">天</span>
                                    <div class="digit">0</div>
                                    <div class="digit">0</div>
                                </div>

                                <div class="dash hours_dash">
                                    <span class="dash_title">小时</span>
                                    <div class="digit">0</div>
                                    <div class="digit">0</div>
                                </div>

                                <div class="dash minutes_dash">
                                    <span class="dash_title">分</span>
                                    <div class="digit">0</div>
                                    <div class="digit">0</div>
                                </div>

                                <div class="dash seconds_dash">
                                    <span class="dash_title">秒</span>
                                    <div class="digit">0</div>
                                    <div class="digit">0</div>
                                </div>

                            </div> <!-- end of countdown -->
                        </div><!--/timer-box-->

                    </div>

                </div>
            </div>
        </section>
    @endif
    <section class="pt-60 pb-5">
        <div class="container">
            <div class="about-item">
                <h2 class="text-center">WinCareer CFA 全托管式集训营</h2>
                <div class="whr"></div>
                <p>WinCareer是澳洲未来教育集团旗下专注于职业培训的子品牌，未来教育作为墨尔本第一老牌商科辅导培训机构，累计服务超过50000名留学生，而WinCareer CFA 全托管式集训营正是整合了未来教育最强金融师资团队，根据各大高校商科课程以及澳洲考生特别编写了独家教材，结合最新考纲整理详细讲义，设置最科学的课程结构，推出了全澳最专业最负责的CFA一级保过课程。参加WinCareer的CFA保过计划，为您的CFA考试保驾护航。我们的具有科学的CFA课程安排，专业的导师团队，以及丰富的教学资源。是墨尔本CFA全托管式集训营领航者。</p>
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
                @if(false)
                    <div class="row">
                        <div class="col-12 col-md-9  mt-10">
                            <div class="box full-height">
                            <h3><i class="fa fa-caret-right" aria-hidden="true"></i>CFA全托管式集训营课程优势</h3>

                            <ul class="resize-ul">
                                <li>我们结合澳洲考生特点设置了 <span class="red-tag">三大学习阶段</span>，知识精讲班，冲刺串讲刷题班，全真模拟班。</li>
                                <li> <span class="red-tag">独家编写的教材</span>：我们根据澳洲各大高校商科课程特点撰写教材</li>
                                <li>丰富的教学资源：我们提供<span class="red-tag">线下</span>课堂教学，<span class="red-tag">线上</span>课程视频</li>
                                <li><span class="red-tag">双重保过</span>承诺：报名CFA课程的学员将签订贴心的保过协议，如果没有通过考试，免费重听下一期，还会为你全额支付下一次考试费用</li>
                                <li>两次全真模拟考试，考试高度<span class="red-tag">还原真实</span>考场</li>
                                <li>全新的种子计划来助力学员学习，建立<span class="red-tag">5V1</span>的教学模式</li>
                            </ul>

                            </div>
                        </div>
                        <div class="col-12 col-md-3 mt-10">
                            <div class="box text-center full-height">
                                <h5>微信咨询</h5>
                                <p>欢迎添加Wincareer官方微信进行沟通咨询！</p>
                                <img src="{{ asset('images/tofuture/qrcode1.jpg') }}" alt="" class="w-100">
                                <span>扫描二维码</span>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <section class="pt-15 pb-5">
        <div class="container">
            <div class="about-item">
                <h2 class="text-center">CFA考试全托管式集训营课程优势</h2>
                <div class="whr"></div>
                <div class="row pt-40">
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                        <h3>科学的课程设置</h3>
                        <p>全澳最长课程时长200+小时，结合澳洲考生特点设置了知识精讲班，冲刺串讲刷题班，全真模拟班</p>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <h3>专业的导师团队</h3>
                        <p>CFA持证教师+超过10年经验的金融培训老师</p>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <h3>独家编写的教材</h3>
                        <p>我们根据澳洲各大高校商科课程特点撰写教材，详细阐释CFA所有考点</p>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-suitcase" aria-hidden="true"></i>
                        <h3>丰富的教学资源</h3>
                        <p>我们提供线下课堂教学，线上课程视频回看，线上视频直播，同学可以随时观看</p>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-diamond" aria-hidden="true"></i>
                        <h3>一对五VIP服务</h3>
                        <p>一位学生有4名老师加一名工作人员从开课服务到考试，每天帮您解答所有问题</p>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                        <h3>送考贴心服务</h3>
                        <p>从报名到打印准考证，文具，午饭让您无忧</p>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-server" aria-hidden="true"></i>
                        <h3>三次全真模拟考试</h3>
                        <p>考试高度还原真实考场，更有13年全真题目分享，体验考试过程便于考生调整至最佳考试状态</p>
                    </div>

                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-handshake-o" aria-hidden="true"></i>
                        <h3>双重保过承诺</h3>
                        <p>签订贴心的保过协议，如果没有通过考试，我们将全额支付你12月的考试费用，并赠送新的CFA课程的旁听资格</p>
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
                        <h2 class="text-center">CFA考试全托管式集训营课程安排</h2>
                        <div class="owl-carousel client-carousel o-flow-hidden text-left">
                            <div class="item">
                                <div class="course-item">
                                    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>知识精讲</h3>
                                    <ul>
                                        <li>30天，108个小时知识精讲+32个小时习题应用</li>
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
                                        <li>13天，51个小时知识串讲+应用</li>
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
                        <a class="btn-theme mx-auto mb-5" target="_blank" href="{{ asset('images/tofuture/update/2019年12月课表.pdf') }}">下载CFA培训时间表</a>
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
                @if(false)
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
                @endif
                <div class="client-carousel">
                    @for($i=1;$i<7;$i++)
                        <div class="team-item text-center" style="padding: 1em;">
                            <img  src="{{ asset('images/tofuture/team/ps'.$i.'.jpg') }}" alt="{{ $i }}">
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
    <section class="ptb-60" id="shitin">
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
                    <div class="col-lg-6 col-md-12">
                        <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/339333611?color=ef0032&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/324780294?color=ef0032&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                    </div>

                </div>

                <div class="s-box mt-3">
                    <div class="s-title">
                        课堂实况
                    </div>
                </div>
                <div class="row mt-3">
                    @for($i=1;$i<7;$i++)
                        <div class="col-12 col-md-4 col-lg-4 mb-3">
                            <a class="group" rel="group-gallery" href="{{ asset('images/tofuture/'.$i.'.jpg') }}"><img src="{{ asset('images/tofuture/'.$i.'.jpg') }}" alt="{{ $i }}"></a>
                        </div>
                    @endfor
                </div>

            </div>
        </div>
    </section>

@endsection