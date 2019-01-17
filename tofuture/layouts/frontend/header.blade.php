<!-- Header ("header--dark", "header-transparent", "header--sticky")-->
<header id="header" class="header header-transparent header--sticky">
    <!-- Nav Bar -->
    <nav id="navigation" class="header-nav">
        <div class="container">
            <div class="row d-flex flex-md-row align-items-center">
                <div class="logo mr-auto">
                    <!--logo-->
                    <a href="{{url('/')}}">
                        <img class="logo-dark" src="{{ asset('images/tofuture/logo-dark.png') }}" alt="Mazel" />
                        <img class="logo-light" src="{{ asset('images/tofuture/logo-light.png') }}" alt="Mazel" />
                    </a>
                    <!--End logo-->
                </div>

                <div class="nav-menu ml-auto">
                    <ul class="">
                        <li class="nav-menu-item">
                            <a href="{{ url('/') }}">首页</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="#">海归求职</a>
                            <div class="nav-dropdown">
                                <ul>
                                    <li><a href="{{ url('/shixi') }}">名企实习</a></li>
                                    <li><a href="{{ url('/zhitong') }}">名企直通</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-menu-item">
                            <a href="#">本地就业</a>
                            <div class="nav-dropdown">
                                <ul>
                                    <li><a href="{{ Route('kuaiji') }}">会计训练营</a></li>
                                    <li><a href="{{ Route('jinrong') }}">金融训练营</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-menu-item">
                            <a href="#">CFA</a>
                            <div class="nav-dropdown">
                                <ul>
                                    <li><a href="{{ url('/cfa/kepu') }}">CFA科普</a></li>
                                    <li><a href="{{ url('/cfa/baoming') }}">CFA报名指南</a></li>
                                    <li><a href="{{ url('/cfa/baoguo') }}">CFA保过计划</a></li>
                                    <li><a href="{{ url('/listen') }}">线上讲堂</a></li>
                                </ul>
                            </div>


                        </li>
                        <li class="nav-menu-item">
                            <a href="{{ url('/teachers') }}">专业师资</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="{{ url('/about') }}">关于我们</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="{{ url('/page/blog') }}">新闻博客</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="{{ url('/contact-us') }}">联系我们</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-icons">
                    <div class="nav-icon-item d-lg-none">
                        <span class="nav-icon-trigger menu-mobile-btn align-middle"><i class="ion"></i></span>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </nav>
    <!-- End Nav Bar -->
</header>
<!-- End Header -->