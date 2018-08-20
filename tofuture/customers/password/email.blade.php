@extends(_get_frontend_layout_path('frontend'))

@section('content')
    <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="{{ url('images/tofuture/full/absbanner.jpg') }}">
        <div class="container">
            <div class="row title">
                <h2 class="h2">忘记密码</h2>
            </div>
        </div>
    </section>
    <section class="ptb-100">
        <div class="container">
            <div class="row mt">
                <div class="col-md-3"></div>
                <div class="col-md-6 col-sm-12">
                    <div class="box content">
                        <h3 style="letter-spacing: normal;">重置密码</h3>
                        <div class="content-detail-wrap">
                            @if (session('status'))
                                <div class="notification is-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="post" action="{{ route('password.email') }}">
                                {{ csrf_field() }}
                                <div class="field">
                                    <label for="staticEmail" class="label">Email</label>
                                    <div class="control">
                                        <input type="text" class="input w-100" id="staticEmail" name="email" value="{{ old('email') }}" placeholder="email@example.com">
                                    </div>
                                    @if ($errors->has('email'))
                                        <p class="help is-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="customer-btn confirm mt">Send Password Reset Link</button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>

@endsection
