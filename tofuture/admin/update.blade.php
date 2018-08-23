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
                    Update Form
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="{{ url('admin/customers/edit').'/'.$customer->id }}" method="post" id="UpdateForm">
                                {{ csrf_field() }}
                                <input type="hidden" name="the_referer" value="{{ $the_referer }}">
                                <div class="row">
                                    <div class="form-group col-md-12 col-sm-12">
                                        <label for="inputName">Name<span class="text-danger">*</span></label>
                                        <input required type="text" class="input {{ $errors->has('name') ? 'text-danger' : '' }}" id="inputName" value="{{ $customer->name }}" name="name" placeholder="Full Name">
                                        @if ($errors->has('name'))
                                            <p class="help alert-danger">
                                                <span>{{ $errors->first('name') }}</span>
                                            </p>
                                        @endif
                                    </div>

                                    <div class="form-group  col-md-12 col-sm-12">
                                        <label for="inputEmail">Email <span class="text-danger">*</span></label>
                                        <input required type="email" class="input {{ $errors->has('email') ? 'text-danger' : '' }}"  value="{{ $customer->email }}" id="inputEmail" name="email" placeholder="Email">
                                        <div class="invalid-feedback has-text-danger" id="inputEmailErrorMessage"></div>
                                        @if ($errors->has('email'))
                                            <p class="help alert-danger">
                                                <span>{{ $errors->first('email') }}</span>
                                            </p>
                                        @endif
                                    </div>
                                    <div class="form-group  col-md-12 col-sm-12">
                                        <label for="phone" >Phone&nbsp;<span class="text-danger">*</span></label>
                                        <input required type="text" class="input {{ $errors->has('phone') ? 'text-danger' : '' }}" id="inputPhone" value="{{ $customer->phone }}" name="phone" placeholder="0123458512">
                                    </div>
                                    <div class="form-group  col-md-12 col-sm-12">
                                        <label for="status" >Status&nbsp;<span class="text-danger">*</span></label>
                                        <select name="status" id="change">
                                            <option value="1">Normal</option>
                                            <option value="2">Disabled</option>
                                        </select>
                                    </div>
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