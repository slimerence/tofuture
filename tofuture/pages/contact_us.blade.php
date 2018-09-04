@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="{{ url('images/tofuture/full/ctsbanner.jpg') }}">
        <div class="container">
            <div class="row title">
                <h2 class="h2">联系我们</h2>
            </div>
        </div>
    </section>
    <!-- End Intro Section -->

    <!-- Contact Section -->
    <section class="ptb ptb-sm-80">
        <div class="container">
            <div class="row">
                <div class="col-md-5 contact">
                    <div class="contact-box-left mb-45">
                        <div class="contact-icon-left"><i class="ion ion-ios-location"></i></div>
                        <h6>联系方式</h6>
                        <div class="no-list-style">
                            <ul>
                                <li class="fs-14">墨尔本：Suite A, 140 Burwood Hwy, Burwood VIC 3125<br/>
                                    Level 7, 168 Lonsdale Street, Melbourne VIC 3000</li>
                                <li class="fs-14">广州：广州市天河区海海乐路路12号合景睿峰3707</li>
                            </ul>
                        </div>
                        <a href="mailto:yourname@domain.com"><i class="fa fa-envelope-o left"></i>admin@tofuture.org</a><br />
                        <a><i class="fa fa-phone left"></i>+61 3 9890 8535</a>
                    </div>
                    <div class="contact-box-left mb-45">
                        <div class="contact-icon-left"><i class="ion ion-ios-clock"></i></div>
                        <h6>工作时间</h6>
                        <p class="fs-14">
                            <span>周一到周五: 9am to 6pm</span>
                        </p>
                    </div>
                    <div class="contact-box-left mb-45">
                        <h6>关注我们</h6>
                        <ul class="list-none social">
                            <li><a href="{{$siteConfig->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$siteConfig->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{$siteConfig->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://vimeo.com/" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1">
                    <!-- Contact FORM -->
                    {{--<form action="{{ url('contact-us') }}" method="post" id="contact-us-form">
                        {{ csrf_field() }}
                        <input type="hidden" name="user" value="{{ session('user_data.uuid') }}">
                        <!-- IF MAIL SENT SUCCESSFULLY -->
                        <h6 class="successContent" id="txt-on-success">
                            <i class="fa fa-check left" style="color: #5cb45d;"></i>Your message has been sent successfully.
                        </h6>
                        <!-- END IF MAIL SENT SUCCESSFULLY -->

                        <!-- MAIL SENDING UNSUCCESSFULL -->
                        <h6 class="errorContent" id="txt-on-fail">
                            <i class="fa fa-exclamation-circle left" style="color: #e1534f;"></i>There was a problem validating the form please check!
                        </h6>
                        <!-- END MAIL SENDING UNSUCCESSFULL -->

                        <div class="form-field-wrapper">
                            <input class="input-sm form-full" id="input-name" type="text" name="name" placeholder="Your Name" required>
                        </div>

                        <div class="form-field-wrapper">
                            <input class="input-sm form-full" id="input-phone" type="text" name="mobile" placeholder="Your Mobile" required>
                        </div>

                        <div class="form-field-wrapper">
                            <input class="input-sm form-full" id="input-email" type="email" name="email" placeholder="Email" required>
                        </div>

                        <div class="form-field-wrapper">
                            <textarea class="form-full" id="input-message" rows="7" name="form-message" placeholder="Your Message" required></textarea>
                        </div>

                        <button class="btn btn-md btn-black form-full" type="submit" id="submit-contact-us-btn" name="message">Send Message</button>
                    </form>--}}
                    <!-- END Contact FORM -->
                    <div class="contact-box-left mb-45">
                        <div class="contact-icon-left"><i class="fa fa-wechat fa-fw"></i></div>
                        <h6>微信公众号</h6>
                        <div class="qrcode-wrap">
                            <div class="row" style="margin-top: 3em;">
                                <div class="col-lg-6 col-sm-12 text-center">
                                    <img style="box-shadow: 1px 2px 20px #9a9a9a54;max-width: 160px;" src="{{ asset('images/tofuture/qrcode1.jpg') }}" alt="">
                                    <p class="fs-14">官方微信</p>
                                </div>
                                <div class="col-lg-6 col-sm-12 text-center">
                                    <img style="box-shadow: 1px 2px 20px #9a9a9a54;max-width: 160px;" src="{{ asset('images/tofuture/qrcode2.png') }}" alt="">
                                    <p class="fs-14">公众号</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->

@endsection