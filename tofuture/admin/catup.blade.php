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
                                <form method="post" action="{{ url('admin/cats/update') }}" id="createcatform">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="cat_id" value="{{ $cat->id }}">
                                    <div class="form-group">
                                        <label for="inputName">Name<span class="text-danger">*</span></label>
                                        <input required type="text" class="input" id="inputName" value="{{ $cat->name }}" name="cat[name]" placeholder="Root Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputParent">Parent<span class="text-danger">*</span></label>
                                        <select id="inputParent" name="cat[parent_id]">
                                            @foreach($cats as $item)
                                                @if($item->id !== $cat->id)
                                                <option value="{{ $item->id }}" {{ $item->id == $cat->parent_id ? 'selected' :'' }}>{{ $item->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
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