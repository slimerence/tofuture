@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="{{ url('images/tofuture/full/absbanner.jpg') }}">
        <div class="container">
            <div class="row title">
                <h2 class="h2">会计训练营</h2>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <img src="{{ asset('images/tofuture/xunlian.jpg') }}" alt="kuaiji" class="img-fluid w-100">
        </div>
    </section>

@endsection