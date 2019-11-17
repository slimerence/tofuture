@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <section class="inner-intro dark-bg bg-image overlay-dark40 " data-background-img="{{ url('images/tofuture/full/cpa_banner.jpg') }}" style="background-size: cover;background-position: center center">
        <div class="container">
            <div class="row title">
                <h2 class="h2" style="font-size: 3rem;text-shadow: 2px 2px 4px #000c;">CPA 科普</h2>
                <h1 class="h3" style="text-shadow: 2px 2px 4px #000c;">CPA 考试 | CPA保过计划 | CPA 课程</h1>
                <div class="row mt-5 mx-auto" style="max-width: 720px;">
                    <div class="col-12 col-md-6 mt-20">
                        <a class="btn-theme" href="{{ url('cpa/cpa保过') }}">CPA保过计划</a>
                    </div>
                    <div class="col-12 col-md-6 mt-20">
                        <a class="btn-theme" id="single_image" href="{{ asset('images/tofuture/qrcode1.jpg') }}">扫描咨询</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Intro Section -->

    <section class="pt-60 pb-5">
        <div class="container">
            <div class="about-item">
                <h2 class="text-center">CPA Australia介绍</h2>
                <div class="whr"></div>
                <div class="about-item">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p style="line-height: 2em;">CPA Australia澳洲注册会计师资格是由全球最大的专业会计团体之一澳洲会计师公会所提供的专业会计资格。CPA澳洲行业认可度高，其持证人是高薪的代名词，是各大型企业争抢的对象，目前在118个国家和地区拥有超过160,000名会员。其提供终身的会员服务，每年会员可通过公会举办的各大论坛活动提升自己的专业知识水平，在论坛活动中拓展各行各业的人脉。</p>
                            <p style="line-height: 2em;">拥有CPA Australia资格的会员可与香港注册会计师（HKICPA）、英国特许管理会计师（CIMA）、新加坡特许公认会计师（ISCA）、加拿大特许专业会计师（CGA Canada）等国际证书进行互认。而在中国内，认可澳洲CPA的企业也在增多，四大会计事务所中的安永，毕马威都已承认澳洲CPA，就业前景良好是一个认可度相当高的证书。</p>
                        </div>
                        <br/>
                        <div class="col-12 col-md-6">
                            <div class="img-ctn">
                                <div class="img-over">
                                    <span>CPA Australia</span>
                                </div>
                                <img src="{{ asset('images/tofuture/full/cpa_action2.jpg') }}" alt="CPA">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="ptb-60 bg-lt">
        <div class="container">
            <div class="about-item">
                <h2 class="text-center">成为一名CPA Australia申请步骤</h2>
                <div class="whr"></div>
                <div class="row">
                    <div class="col-md-4 col-12 steps">
                        <div class="step">
                            <a href="https://www.cpaaustralia.com.au" target="_blank" title="快速申请"><h4>I：申请成为澳洲会计会会员（ASA），获取CPA的考试资格</h4></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 steps">
                        <div class="step">
                            <h4>II:  通过CPA Program专业阶段的考试</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 steps">
                        <div class="step">
                            <h4>III: 具有3年相关领域的实习经验，这些经验可以是在考证前，中，后阶段积累的
                                恭喜您，可以申请成为澳洲注册会计师
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section  class="dark-bg ptb-80 bg-moving overlay-dark40" style="background-image:url({{ asset('images/tofuture/full/cpa_action.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h4 class="">想要了解更多？</h4>
                </div>
                <div class="col-md-4 col-sm-4">
                    <a class="btn btn-md btn-white float-right float-none-xs text-dark" href="{{ url('contact-us') }}">联系我们</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contant Slider Section -->
    <section id="contant" class="ptb ptb-60 bg-image" style="background-image: url({{ asset('images/tofuture/full/tbg.jpg') }}); background-size: cover;">
        <div class="container">
            <div class="text-center">
                <h3>CPA考试科目：</h3>
                <div class="whr"></div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="px-5 cpa-text">
                        <h3 class="text-center"><i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>必考科目</h3>
                        <hr class="mtb-15">
                        <div class="cpa-list">
                            <ul>
                                <li>Ethics and Governance（约70%选择题，30%问答题）</li>
                                <li>Strategic Management Accounting（约70%选择题，30%问答题）</li>
                                <li>Financial Reporting（约70%选择题，30%问答题）</li>
                                <li>Global Strategy and Leadership（约85%选择题，15%案例分析题）通过前三门才有报考GSL的资格</li>
                                <li>（参考难度分析建议：FR>ETHICS>SMA>GSL）</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="px-5 cpa-text">
                        <h3 class="text-center"><i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>选修科目</h3>
                        <hr class="mtb-15">
                        <div class="cpa-list">
                            <ul>
                                <li>Advanced Audit and Assurance</li>
                                <li>Contemporary Business Issues</li>
                                <li>Financial Risk Management</li>
                                <li>Advanced Taxation（如果Bachelor or Master没有修过税法的，这科也属于必修）</li>
                                <li>Financial Planning Fundamentals</li>
                                <li>Superannuation and Retirement Planning</li>
                                <li>Investment Strategies</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contain Slider Section -->

    <section class="pt-15 ptb-80" style="background-image:url({{ asset('images/tofuture/course-bg2.jpg') }});background-size: cover;">
        <div class="container">
            <div class="about-item course">
                <div class="row">
                    <div class="col-12 align-self-center text-center ptb-20">
                        <h2 class="text-center">2020年考试时间分别为4月以及10月</h2>
                        <div class="o-flow-hidden text-left">
                            <div class="item">
                                <div class="course-item">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col" colspan="2">
                                                SEMESTER 1 2020
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row"> <span class="red-tag">早鸟价格开放日期</span>：Enrolment and exam scheduling opens</th>
                                            <td>Monday  <span class="red-tag">25 November</span> 2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <ul>
                                                    <li>First cancellation date (cancellations made after this date will not receive a refund)</li>
                                                    <li>Last day to change to an alternative subject</li>
                                                    <li>Last day to update postal address for delivery of study guide if you are already enrolled</li>
                                                    <li>Reasonable adjustments – special materials requests closing date</li>
                                                </ul>
                                            </th>
                                            <td>Wednesday 8 January 2020</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Early bird enrolment closing date</th>
                                            <td>Wednesday 15 January 2020</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"> <span class="red-tag">报名截止日期</span>：Final enrolment closing date<br/>
                                                Reasonable adjustments – special exam arrangements closing date
                                            </th>
                                            <td>Friday  <span class="red-tag">24 January</span> 2020</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"> <span class="red-tag">考试周期</span>：Exam period
                                            </th>
                                            <td>Saturday  <span class="red-tag">11 April – Tuesday 28 April</span> 2020</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Exam results released via the CPA Australia website
                                            </th>
                                            <td>Friday 5 June 2020</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


@endsection