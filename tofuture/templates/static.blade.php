@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <section class="inner-intro dark-bg bg-image overlay-dark40 " data-background-img="{{ url('images/tofuture/full/absbanner8.jpg') }}" style="background-size: cover;background-position: center center">
        <div class="container">
            <div class="row title">
                <h1 class="h2" style="text-shadow: 2px 2px 4px #000c;">{{ $page->title }}</h1>
            </div>
        </div>
    </section>
    <section class="ptb-80">
        <div class="container">
            {!! $page->rebuildContent() !!}
        </div>
    </section>

@endsection