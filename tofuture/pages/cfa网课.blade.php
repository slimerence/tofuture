@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <section class="inner-intro dark-bg bg-image overlay-dark40 " data-background-img="{{ url('images/tofuture/full/absbanner9.jpg') }}" style="background-size: cover;background-position: center center">
        <div class="container">
            <div class="row title">
                <h1 class="h2" style="font-size: 3rem;text-shadow: 2px 2px 4px #000c;">线上讲堂</h1>
            </div>
        </div>
    </section>
    <section class="pt-80 pb-5">
        <div class="container">
            <div class="about-item">
                <h2 class="text-center">未来教育集团线上学习平台</h2>
                <div class="whr"></div>

                    <p class="text-center" style="padding-top: 25px;">
                        下载链接: <a href="https://oe.tofuture.org/download">https://oe.tofuture.org/download</a>
                    </p>

                <div class="row" style="text-align:center;display:block;">
                    <div class="col-12 col-md-3 mt-30" style="display:inline-block;">
                        <div class="box text-center full-height">
                            <h5>已经报名同学，如果有任何安装问题请咨询客服微信</h5>
                            <img src="{{ asset('images/tofuture/qrcode1.jpg') }}" alt="" class="w-100">
                            <span>扫描二维码</span>
                        </div>
                    </div>
{{--                    <div class="col-12 col-md-3 mt-30">--}}
{{--                        <div class="box text-center full-height">--}}
{{--                            <h5>公众号</h5>--}}
{{--                            <img src="{{ asset('images/tofuture/qrcode2.jpg') }}" alt="" class="w-100">--}}
{{--                            <span>扫描二维码</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-md-6 mt-30 align-self-center">--}}
{{--                        <div class="dontai box full-height">--}}
{{--                            <h3 class="text-center">--}}
{{--                                下载链接: <a href="https://oe.tofuture.org/download">https://oe.tofuture.org/download</a>--}}
{{--                            </h3>--}}
{{--                            <p class="text-center">--}}
{{--                                已经报名同学，如果有任何安装问题请咨询客服微信--}}
{{--                            </p>--}}
{{--                            <div class="whr"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
@endsection