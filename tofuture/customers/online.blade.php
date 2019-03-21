@extends(_get_frontend_layout_path('frontend'))

@section('content')
    <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="{{ url('images/tofuture/full/absbanner.jpg') }}">
        <div class="container">
            <div class="row title">
                <h2 class="h2">线上讲堂</h2>
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
                    <?php
                    $user = \App\User::where('id',session('user_data.id'))->first();
                    $team = \Smartbro\Models\Team::find($user->group_id);
                    $maincats = $team->owncats;
                    ?>
                    @if($menuName == 'listen')
                        <div class="col-12">
                            <div class="d-inline-block w-100">
                                <span style="font-size: 21px;">欢迎, {{ session('user_data.name') }}</span>
                                <a class="float-right" style="right: 0;" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i></i>
                                    <span> Logout</span>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                            <hr class="mtb-15">
                        </div>

                        @foreach($maincats as $key=>$cat)
                            @if($cat->cat !==Null)
                        <div class="col-md-6 col-lg-6 text-center">
                            <div class="card text-center" style="padding: 2em;max-width: 300px;margin: 0 auto;" >
                                <img class="card-img-top" style="max-width: 150px;margin: 0 auto;" src="{{ asset('images/tofuture/vfolder.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$cat->cat->name}}</h5>
                                    <a href="{{ url('listen/'.$cat->cat->name )}}" style="min-width: 100px;" class="btn btn-primary">浏览</a>
                                </div>
                            </div>
                        </div>
                                @endif
                        @endforeach
                    @else
                    <div class="col-md-3">
                        <h3>授权课程</h3>
                            <hr class="mb-15">
                        <div class="online-class no-list-style">
                            <ul>
                                @foreach($maincats as $key=>$cat)
                                    @if($cat->cat !==Null)
                                    <li><a href="{{ url('listen/'.$cat->cat->name )}}">{{$cat->cat->name}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                            <div class="d-inline-block w-100">
                                <span style="font-size: 21px;">欢迎, {{ session('user_data.name') }}</span>
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
                                    <div class="col-lg-6 col-md-12 mt-3">
                                        {!! $video->code !!}
                                        <h4 class="text-center">{{ $video->name }}</h4>
                                    </div>
                                @endforeach

                        </div>
                        <hr class="mtb-15">
                        {{ $videos->links() }}
                        @endif
                    </div>
                    @endif
                </div>
        </div>
    </section>
@endsection