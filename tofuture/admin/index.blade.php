@extends(_get_frontend_theme_path('admin.layout.backend'))

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div>
        <!-- /.row -->
        @include(_get_frontend_theme_path('admin.elements.topnotice'))
        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-clock-o fa-fw"></i> Videos
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
            <!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <!-- /.panel -->
                <div class="chat-panel panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-comments fa-fw"></i> Contact
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu slidedown">
                                <li>
                                    <a href="{{ url('admin/home') }}">
                                        <i class="fa fa-refresh fa-fw"></i> Refresh
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/home') }}">
                                        <i class="fa fa-gear fa-fw"></i> Manage
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('logout') }}">
                                        <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <ul class="chat">
                            @foreach($leads as $lead)
                            <li class="left clearfix">
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <?php $createtime = $lead->created_at;
                                        $difference = $createtime->diffForHumans();
                                        ?>
                                        <strong class="primary-font">{{ $lead->name }}</strong>
                                        <small class="pull-right text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i> &nbsp;{{ $difference }}
                                        </small>
                                        <div class="caption">
                                            <span><strong>phone:</strong>{{ $lead->phone }}</span>
                                            <span style="float: right;"><strong>email:</strong>{{ $lead->email }}</span>
                                        </div>
                                    </div>
                                    <p style="margin-top: 0.5em;">{{$lead->message}}
                                    </p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- /.panel-footer -->
                </div>
                <!-- /.panel .chat-panel -->
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
@endsection