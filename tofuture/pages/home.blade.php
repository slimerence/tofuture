@extends(_get_frontend_layout_path('frontend'))

@section('content')
    @include(_get_frontend_theme_path('pages.elements.intro'))
    <!--About Section-->
    @include(_get_frontend_theme_path('pages.elements.textslider'))

    <hr>
    @include(_get_frontend_theme_path('pages.elements.service'))

    @include(_get_frontend_theme_path('pages.elements.teamgrid'))

    @include(_get_frontend_theme_path('pages.elements.count'))
    @include(_get_frontend_theme_path('pages.elements.client'))




@endsection