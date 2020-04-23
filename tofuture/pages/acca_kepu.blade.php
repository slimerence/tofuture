@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <section class="inner-intro dark-bg bg-image overlay-dark40 " data-background-img="{{ url('images/tofuture/full/acca_banner.jpg') }}" style="background-size: cover;background-position: center center">
        <div class="container">
            <div class="row title">
                <h2 class="h2" style="font-size: 3rem;text-shadow: 2px 2px 4px #000c;">ACCA 科普</h2>
                <h1 class="h3" style="text-shadow: 2px 2px 4px #000c;">ACCA 考试 | ACCA保过计划 | ACCA 课程</h1>
                <div class="row mt-5 mx-auto" style="max-width: 720px;">
                    <div class="col-12 col-md-6 mt-20">
                        <img class="logo-light" id="acca_title" src="{{ asset('images/tofuture/logo-light.png') }}" alt="Mazel" />
                    </div>
                    <div class="col-12 col-md-6 mt-20">
                        <img class="logo-light" src="{{ asset('images/tofuture/ACCA.png') }}" alt="Mazel" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-60 pb-5">
        <div class="container">
            <div class="about-item">
                <h2 class="text-center">ACCA 简介</h2>
                <div class="whr"></div>
                <div class="about-item">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p style="line-height: 3.5em;">
                                ACCA（the Association of Chartered Certified Accountants）是全球规模的专业会计师组织，1904年成立，1917成为首个开设税务考试的专业组织，至今已有116年历史。
                                目前在全球拥有20万名会员和50万名学员，学员遍布180多个国家，全球超过7500家机构成为ACCA认证雇主。ACCA也是最早进入中国的国际专业会计师组织。
                            </p>
                            <p style="line-height: 3.5em;">
                                ACCA考试是一个系统性的学习体系，宽进严出，对于中国考生来说，ACCA的学习是一次全面提升财务能力及商务英语水平的机会，历经13门课程的考核，可以将学生培养成为能够驾驭跨国集团财务工作的高级人才。
                            </p>
                        </div>
                        <br/>
                        <div class="col-12 col-md-6">
                            <div class="img-ctn" >
                                <div class="img-over">
                                    <span>ACCA Australia</span>
                                </div>
                                <img src="{{ asset('images/tofuture/full/acca_action2.jpg') }}" alt="CPA">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-15 pb-5 bg-lt">
        <div class="container">
            <div class="about-item">
                <h2 class="text-center">ACCA的优势</h2>
                <div class="whr"></div>
                <div class="row pt-40">
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-handshake-o" aria-hidden="true"></i>
                        <h3>认可度广，无地区限制</h3>
                        <p>ACCA全认可的同时一次考试全球通用，区别于CPA地区不同系统不兼容</p>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-server" aria-hidden="true"></i>
                        <h3>澳洲学生免课科目多</h3>
                        <p>针对会计专业学生，免考课程最多可达9门</p>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                        <h3>报考门槛低</h3>
                        <p>ACCA是在校大学生就可以开始学习的，满分100分50分即可通过，是同类财经证书中报考资格较低而且通过率较高的证书。</p>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <h3>提升自身的高级财会管理能力</h3>
                        <p>ACCA学习下来可以拿到4个证书，ACCA学员在通过应用阶段9门考试以后，完成论文的写作，可获得英国牛津布鲁克斯大学应用会计理学士学位。(含金量高)，可以到英国本土读博士。</p>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <h3>强大的会员社区</h3>
                        <p>通过考试成为会员，参与会员活动，获取行业顶尖资讯，建立职场人脉。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="action-box" class="dark-bg ptb-80 bg-moving overlay-dark40" style="background-image:url({{ asset('images/tofuture/full/acca_action3.jpg') }})">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-sm-12">
                    <h4 class="ps-20">Wincareer专注提高海外华人/留学生就业竞争力</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-80 pb-5">
        <div class="container">
            <div class="about-item">
                <h2 class="text-center">澳洲留学生为什么需要考ACCA？ </h2>
                <div class="whr"></div>
                <h3><i class="fa fa-caret-right" aria-hidden="true"></i>“免课科目多”</h3>
                <hr class="mtb-15">
                <div class="d-flex mb-3">
                    <p>澳洲大部分公立大学bachelor /master Accounting 专业都可以免掉基础阶段的9门课程。仅仅再需要考4门科目即可。即使不是会计专业，如果是商科相关专业也可以通过选修选修课的方式，完成7-9门课程的免课</p>
                </div>

                <h3><i class="fa fa-caret-right" aria-hidden="true"></i>“国际会计准则”</h3>
                <hr class="mtb-15">
                <div class="d-flex mb-3">
                    <p>澳洲会计专业同学在学习ACCA的时候会非常熟悉，因为澳洲采用的是国际通用的International Accounting Standard Board， 同学们在大学里面学习的也是这个准则。
                    </p>
                </div>

                <h3><i class="fa fa-caret-right" aria-hidden="true"></i>"英文授课"</h3>
                <hr class="mtb-15">
                <div class="d-flex mb-3">
                    <p>我们已经在大学阶段用英文习惯了会计专业术语，习惯了英文考试。所以ACCA的授课和考试形式让我们更加习惯和熟悉。
                    </p>
                </div>

                <h3><i class="fa fa-caret-right" aria-hidden="true"></i>"考试时间灵活"</h3>
                <hr class="mtb-15">
                <div class="d-flex mb-3">
                    <p>ACCA 在澳洲采取一年4次考试，3月，6月，9月，12月。其中3月，12月考试完美错开澳洲大学上课时间，有充分的时间学习。
                    </p>
                </div>

                <h3><i class="fa fa-caret-right" aria-hidden="true"></i>"可缓免课程"</h3>
                <hr class="mtb-15">
                <div class="d-flex mb-3">
                    <p>如果是大三阶段，有哪部分免课在大学阶段未完成。ACCA可以允许澳洲大学学生跳过这些基础阶段科目，直接考核心阶段科目。等在大学中相应课程读完再申请豁免基础阶段的科目。
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section  class="dark-bg ptb-80 bg-moving overlay-dark40" style="background-image:url({{ asset('images/tofuture/full/acca_action.jpg') }})">
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

    <section id="contant" class="ptb ptb-60 bg-image" style="background-image: url({{ asset('images/tofuture/full/tbg.jpg') }}); background-size: cover;">
        <div class="container">
            <div class="text-center">
                <h3>ACCA考试内容及科目</h3>
                <div class="whr"></div>
                <p>ACCA共13门课，其中包括9门基础课程，2门核心课程和2门选修课程（4选2）。</p>
                <p>修满13门课+3年相关工作经验，即可成为ACCA持证人。</p>
                <h3><strong>澳洲大学会计专业毕业，最多可以豁免9们考试!</strong></h3>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="px-5 cpa-text">
                        <h3 class="text-center"><i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>9门基础课程</h3>
                        <hr class="mtb-15">
                        <div class="cpa-list">
                            <table class="table">
                                <tr>
                                    <th>课程编号</th>
                                    <th>课程名称（中文）</th>
                                    <th>课程名称（英文）</th>
                                </tr>
                                <tr>
                                    <td>AB</td>
                                    <td>会计师与企业</td>
                                    <td>Accountant in Business</td>
                                </tr>
                                <tr>
                                    <td>MA</td>
                                    <td>管理会计</td>
                                    <td>Management Accounting</td>
                                </tr>
                                <tr>
                                    <td>FA</td>
                                    <td>财务会计</td>
                                    <td>Financial Accounting</td>
                                </tr>
                                <tr>
                                    <td>LW</td>
                                    <td>公司法与商法</td>
                                    <td>Corporate and Business Law</td>
                                </tr>
                                <tr>
                                    <td>PM</td>
                                    <td>业绩管理</td>
                                    <td>Performance Management</td>
                                </tr>
                                <tr>
                                    <td>TX</td>
                                    <td>税务</td>
                                    <td>Taxation</td>
                                </tr>
                                <tr>
                                    <td>FR</td>
                                    <td>财务报告</td>
                                    <td>Financial Reporting</td>
                                </tr>
                                <tr>
                                    <td>AA</td>
                                    <td>审计与认证业务</td>
                                    <td>Audit and Assurance</td>
                                </tr>
                                <tr>
                                    <td>FM</td>
                                    <td>财务管理</td>
                                    <td>Financial Management</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="px-5 cpa-text">
                        <h3 class="text-center"><i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>2门核心课程</h3>
                        <hr class="mtb-15">
                        <div class="cpa-list">
                            <table class="table">
                                <tr>
                                    <th>课程编号</th>
                                    <th>课程名称（中文）</th>
                                    <th>课程名称（英文）</th>
                                </tr>
                                <tr>
                                    <td>SBL</td>
                                    <td>战略商业领袖</td>
                                    <td>Strategic Business Leader</td>
                                </tr>
                                <tr>
                                    <td>SBR</td>
                                    <td>战略商业报告</td>
                                    <td>Strategic Business Reporting</td>
                                </tr>
                            </table>
                            <h3 class="text-center"><i class="fa fa-caret-right fa-fw" aria-hidden="true"></i>4门选修课程（4选2）</h3>
                            <hr class="mtb-15">
                            <div class="cpa-list">
                                <table class="table">
                                    <tr>
                                        <th>课程编号</th>
                                        <th>课程名称（中文）</th>
                                        <th>课程名称（英文）</th>
                                    </tr>
                                    <tr>
                                        <td>AFM</td>
                                        <td>高级财务管理</td>
                                        <td>Advanced Financial Management</td>
                                    </tr>
                                    <tr>
                                        <td>APM</td>
                                        <td>高级业绩管理</td>
                                        <td>Advanced Performance Management</td>
                                    </tr>
                                    <tr>
                                        <td>ATX</td>
                                        <td>高级税务</td>
                                        <td>Advanced Taxation</td>
                                    </tr>
                                    <tr>
                                        <td>AAA</td>
                                        <td>高级审计与认证业务</td>
                                        <td>Advanced Audit and Assurance</td>
                                    </tr>
                                </table>
                            </div>
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
                    <div class="col-12 align-self-center text-center ptb-20">
                        <h2 class="text-center">ACCA考试时间：每年的3月，6月，9月，12月</h2>
                        <div class="o-flow-hidden text-left">
                            <div class="item">
                                <div class="course-item">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Early exam entry deadline date</th>
                                            <th>Standard exam entry deadline</th>
                                            <th>Late exam entry deadline</th>
                                            <th>Exam dates</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th>2020年6月</th>
                                            <td>10/02/2020</td>
                                            <td>27/04/2020</td>
                                            <td>04/05/2020</td>
                                            <td>01/06/2020--05/06/2020</td>
                                        </tr>
                                        <tr>
                                            <th>2020年9月</th>
                                            <td>11/05/2020</td>
                                            <td>27/07/2020</td>
                                            <td>03/08/2020</td>
                                            <td>007/09/2020--11/09/2020</td>
                                        </tr>
                                        <tr>
                                            <th>2020年12月</th>
                                            <td>10/08/2020</td>
                                            <td>02/11/2020</td>
                                            <td>09/11/2020</td>
                                            <td>07/12/2020--11/12/2020</td>
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