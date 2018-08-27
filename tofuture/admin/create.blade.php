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
                        Create a new user
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            @include(_get_frontend_theme_path('pages.elements.alert'))
                            <div class="col-lg-8">
                                <form method="post" action="{{ url('admin/customers/create') }}" id="general-customer-register-form">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="the_referer" value="{{ $the_referer }}">
                                    <div class="row">
                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="inputName">Name<span class="text-danger">*</span></label>
                                            <input required type="text" class="input {{ $errors->has('name') ? 'text-danger' : '' }}" id="inputName" value="{{ old('name') }}" name="name" placeholder="Full Name">
                                            @if ($errors->has('name'))
                                                <p class="help alert-danger">
                                                    <span>{{ $errors->first('name') }}</span>
                                                </p>
                                            @endif
                                        </div>

                                        <div class="form-group  col-md-12 col-sm-12">
                                            <label for="inputEmail">Email <span class="text-danger">*</span></label>
                                            <input required type="email" class="input {{ $errors->has('email') ? 'text-danger' : '' }}"  value="{{ old('email') }}" id="inputEmail" name="email" placeholder="Email">
                                            <div class="invalid-feedback has-text-danger" id="inputEmailErrorMessage"></div>
                                            @if ($errors->has('email'))
                                                <p class="help alert-danger">
                                                    <span>{{ $errors->first('email') }}</span>
                                                </p>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 ">
                                            <label for="inputPassword">Password&nbsp;<span class="text-danger">*</span></label>
                                            <input required type="password" class="input {{ $errors->has('password') ? 'text-danger' : '' }}" value="{{ old('password') }}" id="inputPassword" name="password" placeholder="Password">
                                            @if ($errors->has('password'))
                                                <p class="help alert-danger">
                                                    <span>{{ $errors->first('password') }}</span>
                                                </p>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="inputPassword2">Re-enter Password&nbsp;<span class="text-danger">*</span></label>
                                            <input required type="password" class="input" id="inputPassword2" name="password_confirmation" placeholder="To Confirm Your Password">
                                        </div>
                                        <div class="form-group  col-md-12 col-sm-12">
                                            <label for="phone" >Phone&nbsp;<span class="text-danger">*</span></label>
                                            <input required type="text" class="input {{ $errors->has('phone') ? 'text-danger' : '' }}" id="inputPhone" value="{{ old('phone') }}" name="phone" placeholder="0123458512">
                                        </div>
                                        <div class="form-group  col-md-12 col-sm-12">
                                            <label >文件夹权限</label>
                                                @foreach($cats as $cat)
                                                <input type="checkbox" name="cat[]" value="{{$cat->id}}" />{{ $cat->name }}<br />
                                                @endforeach
                                        </div>
                                    </div>
                                    <button type="submit" id="general-customer-register-btn" class="btn-primary">
                                       Submit to Register
                                    </button>
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