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
                        Upload a New Video
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                @include(_get_frontend_theme_path('pages.elements.alert'))
                            </div>
                            <div class="col-lg-6">
                                <form role="form" action="{{ url('admin/videos/upload')}}" method="post" id="UploadForm">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="video-name" >Title</label>
                                        <input id="video-name" type="text" class="form-control validate book-input" name="video[name]" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select id="category" name="video[cat_id]">
                                            @foreach($cats as $key=>$cat)
                                                @if($key>0)
                                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="code">Embed Code</label>
                                        <textarea rows="6" class="textarea form-control book-input" id="code" name="video[code]"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-default btn-primary">Submit Button</button>
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