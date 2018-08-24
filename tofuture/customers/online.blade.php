@extends(_get_frontend_layout_path('frontend'))

@section('content')
    <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="{{ url('images/tofuture/full/absbanner.jpg') }}">
        <div class="container">
            <div class="row title">
                <h2 class="h2">试听讲堂</h2>
            </div>
        </div>
    </section>
    <section class="ptb-100">
        <div class="container">
            @if(!session('user_data.id'))
            <div class="row">
                <div class="col-md-6 mx-auto">
                    @include(_get_frontend_theme_path('customers.elements.customer'))
                </div>
            </div>
            @else
                <div class="row">
                    <div class="col-md-3">
                        <?php
                            $maincats = \Smartbro\Models\Cat::LoadFirstLevelCatsInMenu();
                        ?>
                        <h3>课程分类</h3>
                            <hr class="mb-15">
                        <div class="online-class">
                    @foreach($maincats as $key=>$maincat)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="{{ '#col'.$maincat->id }}">
                                        {{$maincat->name}}
                                    </a><i class="indicator fa fa-angle-right pull-right"></i>
                                </h4>
                            </div>
                            <?php $childcats = $maincat->children()->get();
                            ?>
                            @if(count($childcats)>0)
                                <div id="{{ 'col'.$maincat->id }}" class="panel-collapse collapse {{ $key==0 ? 'show':'' }}">
                                    <div class="panel-body">
                                        <div class="cats">
                                            <ul>
                                                @foreach($childcats as $childcat)
                                                    <li><a href="{{ url('listen/'.$childcat->name )}}">{{$childcat->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                            </div>
                    </div>
                    <div class="col-md-9">
                            <div class="d-inline-block w-100">
                                <span>欢迎, {{ session('user_data.name') }}</span>
                                <a class="float-right" style="right: 0;" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i></i>
                                    <span> Logout</span>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                        <hr class="mtb-15">

                        <div class="row">
                            @foreach($videos as $video)
                                <div class="col-lg-6 col-md-12">
                                    {!! $video->code !!}
                                    <h4 class="text-center">{{ $video->name }}</h4>
                                </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                    </div>
                </div>

    </section>
@endsection