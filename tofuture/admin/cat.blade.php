@extends(_get_frontend_theme_path('admin.layout.backend'))

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ $pageTitle }}</h1>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Category Management
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Root Name</th>
                                <th>Level</th>
                                <th>Parent</th>
                                <th>Operate</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cats as $key=>$cat)
                                @if($key >0)
                                <tr class="odd gradeX">
                                    <td>{{ $cat->name }}</td>
                                    <?php
                                        if($cat->id ==1){
                                            $parentname = 'Root';
                                        }else{
                                            $parent = \Smartbro\Models\Cat::where('id',$cat->parent_id)->first();
                                            if($parent && !is_null($parent)){
                                                $parentname = $parent->name;
                                            }else{
                                                $parentname = 'Parent Category Not Found';
                                            }

                                        }
                                    $level = \Smartbro\Models\Cat::GetCatLevel($cat->id);
                                    ?>
                                    <td>{{ $level }}</td>
                                    <td>
                                        {{ $parentname }}
                                    </td>
                                    <td>
                                        <a class="btn-danger" href="{{ url('admin/cats/delete/'.$cat->id) }}"><i class="fa fa-trash-o"></i></a>
                                        <a class="btn-primary" href="{{ url('admin/cats/update/'.$cat->id) }}"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <div class="col-lg-4">
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
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->
@endsection