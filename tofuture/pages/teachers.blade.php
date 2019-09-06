@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <section class="inner-intro dark-bg bg-image overlay-dark40 " data-background-img="{{ url('images/tofuture/full/absbanner8.jpg') }}" style="background-size: cover;background-position: center center">
        <div class="container">
            <div class="row title">
                <h1 class="h2" style="font-size: 3em;text-shadow: 2px 2px 4px #000c;">师资力量</h1>
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
            <div class="client-carousel">
                @for($i=1;$i<7;$i++)
                    <div class="team-item text-center" style="padding: 1em;">
                        <img  src="{{ asset('images/tofuture/team/ps'.$i.'.jpg') }}" alt="{{ $i }}">
                    </div>
                @endfor
            </div>
        </div>
    </section>

@endsection