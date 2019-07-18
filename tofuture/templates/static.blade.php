@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <section class="inner-intro dark-bg bg-image overlay-dark " data-background-img="{{ url('images/tofuture/full/absbanner4.jpg') }}" style="background-size: cover;background-position: center bottom">
        <div class="container">
            <div class="row title">
                <h2 class="h2">{{ $page->title }}</h2>
            </div>
        </div>
    </section>
    <section class="ptb-80">
        <div class="container">
            {!! $page->rebuildContent() !!}
        </div>
    </section>

@endsection