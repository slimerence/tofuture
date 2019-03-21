@extends(_get_frontend_theme_path('admin.layout.backend'))

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ $pageTitle }}</h1>
            </div>
        </div>
        <div class="row mx-auto">
            <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Category Update
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                @include(_get_frontend_theme_path('pages.elements.alert'))
                            </div>
                            <div class="col-lg-6">
                                <form method="post" action="{{ url('admin/team/update') }}" id="createteamform">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="team_id" value="{{ $team->id }}">
                                    <div class="form-group">
                                        <label for="inputName">Name<span class="text-danger">*</span></label>
                                        <input required type="text" class="input" id="inputName" value="{{ $team->name }}" name="team[name]" placeholder="Root Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="expire">Expire Date<span class="text-danger">*</span></label>
                                        <input type="date" id="expire" name="team[expire]" required value="{{$team->expire->format('Y-m-d')}}">
                                    </div>

                                    <?php
                                    $maincats = $team->owncats;
                                    $catId = [];
                                    foreach ($maincats as $maincat){
                                        $catId[] = $maincat->cat_id;
                                    }
                                    ?>
                                    @foreach($cats as $cat)
                                        @if(in_array($cat->id,$catId))
                                            <input type="checkbox" name="cat[]" value="{{$cat->id}}" checked>{{ $cat->name }}<br />
                                        @else
                                            <input type="checkbox" name="cat[]" value="{{$cat->id}}">{{ $cat->name }}<br />
                                        @endif
                                    @endforeach
                                    <div class="form-group">
                                        <button type="submit" id="createcatbtn" class="btn-primary">
                                            Update
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /#page-wrapper -->
@endsection