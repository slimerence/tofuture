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
            <div class="box">
                <h3>欢迎, {{ session('user_data.name') }}</h3>
            </div>

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
    </section>
@endsection