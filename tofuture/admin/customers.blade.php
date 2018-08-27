@extends(_get_frontend_theme_path('admin.layout.backend'))

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Customer Info</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Customers
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Access</th>
                                <th>Status</th>
                                <th>Join Time</th>
                                <th>Operate</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <?php switch($user->status){
                                    case 1:
                                        $userstatus = 'Normal';
                                        break;
                                    case 2:
                                        $userstatus = 'Disabled';
                                        break;
                                    }
                                ?>
                                <tr class="odd gradeX">
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td><?php $owncats= \Smartbro\Models\UserCat::GetOwnCat($user)?>
                                        @foreach($owncats as $owncat)
                                            {{ $owncat->cat->name }}&nbsp;
                                        @endforeach
                                    </td>
                                    <td>{{ $userstatus }}</td>
                                    <td class="center">{{ $user->created_at->format('F d, Y') }}</td>
                                    <td>
                                        <a href="{{ url('admin/customers/delete/'.$user->id) }}"><i class="fa fa-trash-o"></i></a>
                                        <a href="{{ url('admin/customers/edit/'.$user->id) }}"><i class="fa fa-pencil-square-o"></i></a>
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
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->
@endsection