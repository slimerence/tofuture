@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <section class="inner-intro dark-bg bg-image overlay-dark40 " data-background-img="{{ url('images/tofuture/full/cpa_banner.jpg') }}" style="background-size: cover;background-position: center center">
        <div class="container">
            <div class="row title">
                <h2 class="h2" style="font-size: 3rem;text-shadow: 2px 2px 4px #000c;">CPA 保过计划</h2>
                <h1 class="h3" style="text-shadow: 2px 2px 4px #000c;">CPA 考试 | CPA保过计划 | CPA 课程</h1>
                <div class="row mt-5 mx-auto" style="max-width: 720px;">
                    <div class="col-12 col-md-6 mt-20">
                        <a class="btn-theme" href="{{ url('cpa/cpa科普') }}">CPA科普</a>
                    </div>
                    <div class="col-12 col-md-6 mt-20">
                        <a class="btn-theme" id="single_image" href="{{ asset('images/tofuture/qrcode1.jpg') }}">扫描咨询</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Intro Section -->
    <section class="pt-80 pb-5">
        <div class="container">
            <div class="about-item">
                <h2 class="text-center">Wincareer CPA 保过计划</h2>
                <div class="whr"></div>
                <p>Win career 职业职称培训，是全澳最大的华人高等教育培训机构未来教育（tofuture education ）旗下品牌。专注为海外华人/留学生提供专业的高等教育培训服务，金融/财务专业职称考试培训，国内实习和海外人才猎头服务。</p>
                <h3><i class="fa fa-caret-right" aria-hidden="true"></i>专注提高海外华人/留学生就业竞争力！ </h3>
                <hr class="mtb-15">
                <div class="d-flex mb-3">
                    <p>教育质量是我们的生命线，同学满意度是我们工作目标。我们的专业教师团队，不单单是相应持证人，更具有丰富的多年教课经验。我们根据同学基础，考试大纲，考试变化方向 随时调整我们的教学教材。深入浅出的为同学讲解每个知识点，外加丰富题库让同学更加熟悉每个考点及其应用。同学从零基础到从容应对考试。
                        <br/><br/>
                        于此同时，我们还保持了专业，友善，及时的同学服务团队。让同学随时都可以找到我们， 让同学全心全意复习考试，其他的事情均有我们来操心。</p>
                </div>

            </div>
        </div>
    </section>

    <section class="pt-15 pb-5 bg-lt">
        <div class="container">
            <div class="about-item">
                <h2 class="text-center">Wincareer CPA的课程优势：</h2>
                <div class="whr"></div>
                <div class="row pt-40">
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-handshake-o" aria-hidden="true"></i>
                        <p class="mt-3">CPA合作伙伴</p>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <p class="mt-3">独家的教材编写—根据澳洲商科的课程特点编写教材</p>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <p class="mt-3">专业的导师团队—CPA持证人，拥有多年教学经验的优秀导师</p>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <p class="mt-3">最优的课程设置—节约时间，提高效率，带您分析重点难点，教您分析解题思路</p>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-suitcase" aria-hidden="true"></i>
                        <p class="mt-3">贴心的教学资源—提供线上线下全方位的教学资源，线上随时回看</p>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-diamond" aria-hidden="true"></i>
                        <p class="mt-3">一对三的VIP服务群</p>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                        <p class="mt-3">模拟考试服务</p>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center adv-box mt-4">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        <p class="mt-3">保过承诺</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="action-box" class="dark-bg ptb-80 bg-moving overlay-dark40" style="background-image:url({{ asset('images/tofuture/full/cpa_action2.jpg') }})">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-sm-12">
                    <h4 class="ps-20">Wincareer专注提高海外华人/留学生就业竞争力</h4>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-60 pb-5">
        <div class="container">
            <div class="about-item">
                <h2 class="text-center">CPA考试价格：</h2>
                <div class="whr"></div>
                <div class="about-item">
                    <div class="row">
                        <div class="col-12 col-md-5">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col" colspan="2">
                                        CPA PROGRAM：
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"> </th>
                                    <td>Fee 2020 (AUD)</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Subject enrolment (early bird)
                                    </th>
                                    <td>$1140</td>
                                </tr>
                                <tr>
                                    <th scope="row">Subject enrolment</th>
                                    <td>$1290</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                        <br/>
                        <div class="col-12 col-md-7">
                            <div class="img-ctn">
                                <div class="img-over">
                                    <span>CPA Australia</span>
                                </div>
                                <img style="height: 200px;" src="{{ asset('images/tofuture/full/cpa_img.jpg') }}" alt="CPA">
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
                <h2 class="text-center">Wincareer开设的科目</h2>
                <div class="whr"></div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">科目</th>
                        <th scope="col">课时安排</th>
                        <th scope="col">开课时间</th>
                        <th scope="col">无折扣价格</th>
                        <th scope="col">任课老师</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Ethics </th>
                        <td>4 HOURS * 6  + 6 HOURS *1 (冲刺）</td>
                        <td>2月9日</td>
                        <td>990</td>
                        <td>待定</td>
                    </tr>
                    <tr>
                        <th scope="row">SMA </th>
                        <td>4 HOURS * 6  + 6 HOURS *1 (冲刺）</td>
                        <td>2月9日</td>
                        <td>990</td>
                        <td>待定</td>
                    </tr> <tr>
                        <th scope="row">FRA  </th>
                        <td>4 HOURS * 7  + 6 HOURS *1 (冲刺）</td>
                        <td>2月9日</td>
                        <td>1080</td>
                        <td>待定</td>
                    </tr> <tr>
                        <th scope="row">TAX  </th>
                        <td>4 HOURS * 7  + 6 HOURS *1 (冲刺）</td>
                        <td>2月9日</td>
                        <td>1080</td>
                        <td>待定</td>
                    </tr>
                    </tbody>
                </table>

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
    <section class="pt-80">
        <div class="container">
            <div class="about-item">
                <h2 class="text-center">Wincareer CPA讲师的介绍</h2>
                <div class="whr"></div>
                <div class="client-carousel">
                    @for($i=1;$i<4;$i++)
                        <div class="team-item text-center" style="padding: 1em;">
                            <img  src="{{ asset('images/tofuture/cpa/t'.$i.'.jpg') }}" alt="{{ $i }}">
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

                <div class="s-box mt-3">
                    <div class="s-title">
                        课堂实况
                    </div>
                </div>
                <div class="row mt-3">
                    @for($i=1;$i<4;$i++)
                        <div class="col-12 col-md-4 col-lg-4 mb-3">
                            <a class="group" rel="group-gallery" href="{{ asset('images/tofuture/cpa/k'.$i.'.jpg') }}"><img src="{{ asset('images/tofuture/cpa/k'.$i.'.jpg') }}" alt="{{ $i }}"></a>
                        </div>
                    @endfor
                </div>

            </div>
        </div>
    </section>
@endsection