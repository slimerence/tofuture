@extends(_get_frontend_theme_path('admin.layout.backend'))

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="display: inline-block;">{{ $pageTitle }}</h1>
                <a href="{{ url('admin/videos/upload') }}" class="video-btn" style="margin-left: 3em;">Upload Now</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Video Management

                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">

                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th style="max-width: 400px;">Preview</th>
                                <th>Operate</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($videos as $key=>$video)
                                <tr class="odd gradeX">
                                    <td>{{ $video->name }}</td>
                                    <?php
                                    $cat= \Smartbro\Models\Cat::where('id',$video->cat_id)->first();
                                    ?>
                                    <td>{{ $cat->name }}</td>
                                    <td>{!! $video->code !!} </td>
                                    <td>
                                        <a href="{{ url('admin/videos/delete/'.$video->id) }}"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            {{--<div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Category Add
                    </div>
                    <form method="post" action="{{ url('admin/cats/create') }}" id="createcatform">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="inputName">Name<span class="text-danger">*</span></label>
                            <input required type="text" class="input" id="inputName" name="cat[name]" placeholder="Root Name">
                        </div>
                        <div class="form-group">
                            <label for="inputParent">Parent<span class="text-danger">*</span></label>
                            <select id="inputParent" name="cat[parent_id]">
                                @foreach($cats as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="createcatbtn" class="btn-primary">
                                Create
                            </button>
                        </div>
                    </form>
                </div>--}}
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->
@endsection