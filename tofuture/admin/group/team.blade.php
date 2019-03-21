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
                @include(_get_frontend_theme_path('pages.elements.alert'))
                <div class="panel panel-default">
                    <div class="panel-heading">
                        User Group Management
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Group Name</th>
                                <th>Cats</th>
                                <th>Users</th>
                                <th>Status</th>
                                <th>Expire</th>
                                <th>Operate</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teams as $key=>$team)
                                <tr class="odd gradeX">
                                    <td>{{ $team->name }}</td>
                                    <td>
                                        @foreach($team->owncats as $owncat)
                                            @php
                                                $cat = \Smartbro\Models\Cat::find($owncat->cat_id);
                                            @endphp
                                            @if($cat && $cat!==null)
                                                {{ $cat->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        {{ $team->usercount() }}
                                    </td>
                                    <td>
                                        @if($team->checkstatus())
                                            <span class="badge" style="background-color:#17a2b8;">Active</span>
                                            @else
                                            <span class="badge">Expired</span>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $team->expire }}
                                    </td>
                                    <td>
                                        <a class="btn btn-danger" onclick="return confirm('确认删除此用户组么?')" href="{{ url('admin/team/delete/'.$team->id) }}"><i class="fa fa-trash-o"></i> Delete</a>
                                        <a class="btn btn-primary" href="{{ url('admin/team/update/'.$team->id) }}"><i class="fa fa-trash-o"></i> Update</a>
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
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Group Add
                    </div>
                <form method="post" action="{{ url('admin/team/create') }}" id="createteamform">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="inputName">Name<span class="text-danger">*</span></label>
                        <input required type="text" class="input" id="inputName" name="team[name]" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>授权课程<span class="text-danger">*</span></label>
                        @foreach($cats as $cat)
                            <input type="checkbox" name="cat[]" value="{{$cat->id}}" />{{ $cat->name }}<br />
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label for="expire">Expire Date<span class="text-danger">*</span></label>
                        <input type="date" id="expire" name="team[expire]" required>
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