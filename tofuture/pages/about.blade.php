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
    <section class="pt-80 pb-5">
        <div class="container">
            <div class="about-item">
                <h2 class="text-center">澳洲未来教育集团</h2>
                <div class="whr"></div>
                <p>澳洲未来教育集团ToFuture Education Pty Ltd ，成立于2006年，是澳大利亚首家后留学生服务教育咨询公司。我们的业务专注留学生培训与教育咨询领域，在大学辅导，语言培训，留学移民、就业指导，生活求助等领域构筑了全方位留学服务生态优势！在澳大利亚拥有丰富的教育资源（大学，中学，小学）和市场份额。</p>
                <hr class="mtb-15">
                <h3><i class="fa fa-caret-right" aria-hidden="true"></i>大学培训</h3>
                <p>墨尔本“补习天王”领衔，数十位行业精英导师匠心打造。12年近3万学生口碑见证，墨尔本最强大学培训课程！<br/>首创习题课，视频课，班长学习助手，助力极致课程体验。最多学生选择的教育培训机构！一学期单科报名人数纪录220人！</p>

                <hr class="mtb-15">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <h3><i class="fa fa-caret-right" aria-hidden="true"></i>移民留学</h3>
                        <p>数十位留学顾问与移民顾问为你排难：</p>
                        <ul>
                            <li>学校申诉</li>
                            <li>免费升学学校申请</li>
                            <li>免费转学</li>
                            <li>各类签证办理</li>
                            <li>不定期移民知识讲座</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <h3><i class="fa fa-caret-right" aria-hidden="true"></i>职业培训</h3>
                        <p>WinCareer拥有数千家中澳企业内推资源为你解忧：</p>
                        <ul>
                            <li>面试、简历技巧</li>
                            <li>精准定位求职规划</li>
                            <li>升职培训计划</li>
                            <li>金融、会计职业培训</li>
                        </ul>
                    </div>
                </div>
                <hr class="mtb-15">
                <h3><i class="fa fa-caret-right" aria-hidden="true"></i>PTE培训：</h3>
                <p>PTE王牌导师，Jennifer，英语语言与文学专业，Monash大学英语教育硕士学位、应用语言学副教授；前环球雅思教师，雅思满分；前中国农业部同声传译；前CET4，6级口语考官; 曾任RMIT大学翻译学院讲师。</p>

            </div>
        </div>
    </section>
    <section class="ptb-60 bg-lt">
        <div class="container">
            <div class="about-item">
                <h2 class="text-center">WINCAREER</h2>
                <div class="whr"></div>
                <div class="d-flex">
                    <div class="info-img d-none d-sm-block align-self-center">
                        <img src="{{ asset('images/tofuture/logo.png') }}" alt="win" style="max-width: 90px;" class="d-xs-none">
                    </div>
                    <div class="info-text align-self-center px-lg-3">
                        <p style="margin: 0;">WinCareer是澳洲未来教育集团旗下专注于职业培训的子品牌，致力于为澳洲高校毕业生提供一站式求职教育解决方案，依托数百家澳洲本地企业资源，以及新东方海威时代连接国内千家顶级企业，为留学生提供商科培训，实习生计划和职业规划等专业指导，全方位提升求职竞争力。</p>
                    </div>
                </div>
                <p>WinCareer业务由本地就业和海归求职两部分组成：</p>
                <hr class="mtb-15">
                <h3><i class="fa fa-caret-right" aria-hidden="true"></i>本地就业</h3>
                <p>WinCareer提供泛商科职场技巧课程以及本地企业内推资源帮助澳洲留学生在本地就业：</p>
                <ul>
                    <li>面试、简历技巧等求职规划</li>
                    <li>金融、会计职业培训</li>
                    <li>金融、会计各项证书考试培训</li>
                </ul>
                <hr class="mtb-15">
                <h3><i class="fa fa-caret-right" aria-hidden="true"></i>海归求职</h3>
                <p>2018年，WinCareer携手新东方全资公司-海威时代，海归职业发展平台，为留学生提供数百家国内名企外企实习与全职岗位。</p>
                <div class="img-container">
                    <img src="{{ asset('images/tofuture/full/ab1.jpg') }}" alt="服务流程">
                </div>
                <p class="ptb-15">WinCareer更致力于打造未来教育学生专属的毕业生海归学友会，未来会，为留学生填补留学期间，与国内、社会、经济、职场的知识断层，人际关系的断层。</p>
                <div class="img-container">
                    <img src="{{ asset('images/tofuture/full/ab2.jpg') }}" alt="服务流程">
                </div>
                <p class="ptb-15">未来会将通过线下同城聚会，定期专题研讨会，每周线上互动交流群等方式，帮助海归同学更好的在职场，工作，事业中获得成功，整合中澳与海归间的联系与信息共享，促进交流与合作，搭建创业孵化平台。未来会除了受到ToFuture学生的热捧，得到了国内外的认可与支持，许多友情企业与机构都抛出了参与与合作意向的橄榄枝。未来将会与政府机构，投行，基金等各类企业开展各类帮助留学生就业，创业的项目与活动。</p>
                <div class="img-container">
                    <img src="{{ asset('images/tofuture/full/ab3.jpg') }}" alt="服务流程">
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="about-item">
                <h2 class="text-center">澳洲未来教育行销</h2>
                <div class="whr"></div>
                <p>澳洲未来教育有着一个完善的行销团队，在业务的宣传推广方面，做到了线上和线下的结合，能够覆盖整个澳洲地区，在各个校园也有着专业的市场团队，进行推广。</p>
                <hr class="mtb-15">
                <div class="row">
                    <div class="col-lg-7 col-sm-12">
                        <h3><i class="fa fa-caret-right" aria-hidden="true"></i>线上渠道</h3>
                        <ul>
                            <li>微信公众号：10,000+ 活跃粉丝</li>
                            <li>微信服务号：5,000+ 活跃粉丝</li>
                            <li>战略合作伙伴线上推广（今日墨尔本，墨尔本送餐等）</li>
                            <li>线上大规模曝光</li>
                            <li>学生群，各类服务专项群</li>
                            <li>千聊线上讲座</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-sm-12">
                        <h3><i class="fa fa-caret-right" aria-hidden="true"></i>线下活动</h3>
                        <ul>
                            <li>校园市场营销团队</li>
                            <li>线下宣讲会</li>
                            <li>各类学生活动</li>
                            <li>未来会，学生社团活动曝光</li>
                            <li>赞助大型留学生活动</li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <h3 class="text-center">合作伙伴</h3>
                        <div class="whr"></div>
                        <img src="{{ asset('images/tofuture/full/cos.png') }}" class="img-fluid" alt="服务流程">
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection