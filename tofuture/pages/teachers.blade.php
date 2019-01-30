@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="{{ url('images/tofuture/full/absbanner.jpg') }}">
        <div class="container">
            <div class="row title">
                <h2 class="h2">师资力量</h2>
            </div>
        </div>
    </section>
    <section class="ptb ptb-sm-80">
        <div class="container">
            <div class="text-center">
                <h3 class="col">教师团队</h3>
                <div class="whr"></div>
            </div>
            <div class="spacer-60"></div>
            <div class="row">
                <!-- Team Box -->
                <div class="owl-carousel item4-carousel nf-carousel-theme o-flow-hidden">

                    <div class="item">
                        <div class="team-item">
                            <div class="team-item-img">
                                <img src="{{ asset('images/tofuture/team/j1.jpg') }}" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <p>会计鬼才，澳洲上市酒店集团财务经理，澳洲CPA持证人</p>
                                        <p>教学科目：会计；职业培训</p>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Jeff</h5>
                                <p class="">会计 财务</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-item">
                            <div class="team-item-img">
                                <img src="{{ asset('images/tofuture/team/j2.jpg') }}" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <p>金融大牛，任职于澳洲联邦银行，荣获维州第一业绩金融经理</p>
                                        <p>教学科目：金融；职业培训</p>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Jesse</h5>
                                <p class="">金融 银行</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item">
                            <div class="team-item-img">
                                <img src="{{ asset('images/tofuture/team/tony.jpg') }}" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <p>ToFuture联合创始人之一，WinCareer CFA项目教研负责人，Finance金牌讲师，零差评高通过率</p>
                                        <p>教学科目：金融</p>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Tony</h5>
                                <p class="">金融 市场</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item">
                            <div class="team-item-img">
                                <img src="{{ asset('images/tofuture/team/js.jpg') }}" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <p>莫纳什大学工程学博士在读，曾任Accenture的Business Analyst</p>
                                        <p>教学科目：FRA, Economics, Quantitative Methods</p>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Jasmine</h5>
                                <p class="">金融 工程</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                    <div class="team-item">
                        <div class="team-item-img">
                            <img src="{{ asset('images/tofuture/team/mp.jpg') }}" alt="" />
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <p>CFA资深讲师，CFA, FRM试题研究专家;前中国国际期货首席投资分析师,前澳大利亚祥符集团CFO</p>
                                    <p>教学科目：ethics, corporate finance</p>
                                </div>
                            </div>
                        </div>
                        <div class="team-item-info">
                            <h5>Tom </h5>
                            <p class="">金融</p>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </section>


@endsection