<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">选择操作分类</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="{{ url('admin/customers/apply') }}" method="post" id="UpdateForm">
                    {{ csrf_field() }}
                    <input type="hidden" name="the_referer" value="{{ $the_referer }}">
                    <div class="row">
                        <div class="form-group  col-md-12 col-sm-12">
                            <label >文件夹权限</label>
                            @php
                            $cats = \Smartbro\Models\Cat::orderby('id','desc')->get();
                            @endphp
                            @foreach($cats as $cat)
                                @if($cat->parent_id != 0)
                                <input type="checkbox" name="cat[]" value="{{$cat->id}}">{{ $cat->name }}<br />
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default btn-primary d-inline-block">Confirm</button>
                    <button type="button" class="btn btn-default d-inline-block" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>